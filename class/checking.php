<?php

require 'vendor/autoload.php';
require 'config/config.php';

require 'Ticket.php';
require 'TempTicket.php';


$nom = $_POST['Nom'];
$Email = $_POST['email'];
$address = $_POST['adress'];
$phone = $_POST['tel'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zipCode = $_POST['zipCode'];
$quantity = $_POST['quantity'];




// This is your test secret API key.
\Stripe\Stripe::setApiKey($STRIPE_KEY);

header('Content-Type: application/json');

  

$metadata =[
  'name' => $nom,
  'email' => $Email,
  'address' => $address,
  'phone' => $phone,
  'city' => $city ,
  'state' => $state,
  'country' => $country,
  'zipCode' => $zipCode,
  'quantity' =>$quantity,
];




/**
 * create new customerwith the form fileds
 */

$stripe = new \Stripe\StripeClient($STRIPE_KEY);
    $client= $stripe->customers->create(
        [
          'name' => $nom,
          'email' => $Email,
          'phone' => $phone,
          'metadata' => $metadata,
        ]
      );




/**
 * this function  generatre coupons 
 * @param quantity 
 * @param price
 */

function generateDiscount( $quantity,  $price){
  global $STRIPE_KEY;
$stripe = new \Stripe\StripeClient($STRIPE_KEY);
  if ($quantity> 3){
      // $free_tickets = intdiv($quantity,4);
      $free_tickets = getFreeTicketsNumberV2($quantity);
      $amount_off = $free_tickets * $price;
      $coupon = $stripe->coupons->create([
          'amount_off' => $amount_off,
          'currency' => 'eur',
          'name' => 'FREE_TICKETS'

        ]);
      //var_dump($coupon);
      return [
          "coupon"=>$coupon->id,
          "free_tickets"=>$free_tickets
      ];
  }else{
    return null;
  }
}
function generateTicketCodes($quantity){
  $Ticket = new Ticket();
  $ticketGenerates =array();
  for($i=0; $i<$quantity; $i++){
    $Ticketcode=$Ticket->ticketcodegenrator();
    $ticketGenerates []=$Ticketcode;
  }
  return $ticketGenerates;
}

function getFreeTicketsNumberV2($quantity){
  if ($quantity>3){
    $number_tickets = 3 * (intdiv($quantity, 4) - 1);
    if ($number_tickets > 0){
      return $number_tickets;
    }
    else {
      return 1;
    }
  }
  else {return 0;}   
}

$data = generateDiscount($quantity , 2990 );
if (!empty($data)) {
  $checkout_session = \Stripe\Checkout\Session::create([
      'line_items' => [[
        # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
        'price' => $PRICE_ID,
        'quantity' => $quantity + $data['free_tickets'],
        'tax_rates'=> [$TAX_RATE_ID],
      ]],
    
      'customer' => $client->id,
      'mode' => 'payment',
      'success_url' => $DOMAIN . '/success?session_id={CHECKOUT_SESSION_ID}',
      'cancel_url' => $DOMAIN,
      'metadata' => $metadata,
      'discounts'=> [[
        'coupon' => $data['coupon']
        ]]
    ]);
} 
else {
  $checkout_session = \Stripe\Checkout\Session::create([
      'line_items' => [[
        # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
        'price' => $PRICE_ID,
        'quantity' => $quantity,
        'tax_rates'=> [$TAX_RATE_ID],
      ]],
      'customer' => $client->id,
      'mode' => 'payment',
      'success_url' => $DOMAIN . '/success?session_id={CHECKOUT_SESSION_ID}',
      'cancel_url' => $DOMAIN,
      'metadata' => $metadata,
    ]);
  }
$number_tickets = getFreeTicketsNumberV2($quantity) + $quantity;
$ticketlist = generateTicketCodes($number_tickets);
$tempTicket = new TempTicket();
$tempTicket->addTempTickets($client->id, $Email, json_encode($ticketlist));
header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
// http_response_code(301);
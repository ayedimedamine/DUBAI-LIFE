<?php
// webhook.php
//
// Use this sample code to handle webhook events in your integration.
//
// 1) Paste this code into a new file (webhook.php)
//
// 2) Install dependencies
//   composer require stripe/stripe-php
//
// 3) Run the server on http://localhost:4242
//   php -S localhost:4242

require 'vendor/autoload.php';
require 'class/Ticket.php';
require 'class/TempTicket.php';
require 'class/Campaign.php';
require 'class/Client.php';
require 'class/Mail.php';
require 'config.php';

// test ets 

function getCustomer($customer_id){
  global $STRIPE_KEY;
    $stripe = new \Stripe\StripeClient(
        $STRIPE_KEY
      );
      $client = $stripe->customers->retrieve(
        $customer_id
      );
      var_dump($client);
      return $client->metadata;
}

function getTicketsNumber($quantity){
  if ($quantity>3) {
    return $number_tickets = $quantity + intdiv($quantity, 4);
  }
  else{
    return $quantity;
  }
    
}
function getTickets($customer_id){
  $tempTicket = new TempTicket();
  return $tempTicket->getAllTickets($customer_id);
}
function insertTickets($quantity,$email){
    $Ticket = new Ticket();
    $ticketGenerates =array();
    // fix number iterator was wrong
    for($i=0; $i<$quantity; $i++){
        $Ticketcode=$Ticket->ticketcodegenrator();
        $Ticket->addticket($email,$Ticketcode);
        $ticketGenerates []=$Ticketcode;;
    }
    return $ticketGenerates;
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
function saveInfos($ticketGenerates, $data){
  $Ticket = new Ticket();
  $Clients = new Client();
  foreach ($ticketGenerates as $Ticketcode) {
    $Clients->addClient($data,$Ticketcode);
    $Ticket->addticket($data->email,$Ticketcode);
  }
  
}
function insertClients($quantity, $data){
  $Ticket = new Ticket();
  $Clients = new Client();
  $ticketGenerates =array();
  for($i=0; $i<$quantity; $i++){
    $Ticketcode=$Ticket->ticketcodegenrator();
    $Clients->addClient($data,$Ticketcode);
    $Ticket->addticket($data->email,$Ticketcode);
    $ticketGenerates []=$Ticketcode;
  }
  return $ticketGenerates;
}

function insertCampaign($customerMetadata, $paymentStatus, $amount_received, $invoiceUrl){

  $nom = $customerMetadata->name;
  $email =$customerMetadata->email;
  $address = $customerMetadata->address;
  $phone = $customerMetadata->phone;
  $city = $customerMetadata->city;
  $state = $customerMetadata->state;
  $country = $customerMetadata->country;
  $zipCode = $customerMetadata->zipCode;
  $quantity = $customerMetadata->quantity;

  $Campaign = new Campaign();
  $Campaign->addCampaign($nom,$email,$address,$phone,$city , $state, $country,$zipCode ,$quantity, $paymentStatus, $amount_received, $invoiceUrl);

}



function updateCustomerData($customer_id, $metadata){
    global $STRIPE_KEY;
    $stripe = new \Stripe\StripeClient(
      $STRIPE_KEY
      );
      $stripe->customers->update(
        $customer_id,
        ['metadata' => $metadata]
      );
}

// This is your Stripe CLI webhook secret for testing your endpoint locally.


$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
// $sig_header = $_SERVER['HTTP_X_FORWARDED_FOR']; for ips verification

$event = null;

try {
  $event = \Stripe\Webhook::constructEvent(
    $payload, $sig_header, $ENDPOINT_STRIPE_WEBHOOK_SECRET
  );
} catch(\UnexpectedValueException $e) {
  // Invalid payload
  http_response_code(403);
  exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
  // Invalid signature
  http_response_code(401);
  exit();
}
// Handle the event
switch ($event->type) {
  case 'payment_intent.succeeded':
    
    $paymentIntent = $event->data->object;
    $data = getCustomer($paymentIntent->customer);
    $amount_received = $paymentIntent->amount_received;
    $status = $paymentIntent->status;
    // $number_tickets = getTicketsNumber($data->quantity);
    // $ticketlist = insertClients($number_tickets,$data);
    // $ticketlist = generateTicketCodes($number_tickets);
    $ticketlist = getTickets($paymentIntent->customer);
    $metadata  = [
      // 'tickets'=>json_encode($ticketlist),
      'facture'=>$paymentIntent->charges->data[0]->receipt_url,
      'status'=>$paymentIntent->status,
      'number_of_tickets'=>count($ticketlist)
      ];
    updateCustomerData($paymentIntent->customer,$metadata);
    saveInfos($ticketlist, $data);
    $Campaigns =insertCampaign($data, $paymentIntent->status, $paymentIntent->amount_received, $paymentIntent->charges->data[0]->receipt_url);
    // sending email for confirmation containing tickets codes
    $recieverEmail = $data->email;
    echo "we are here";
    $subject = "The Dubai Life";
    // $email_template ="views/email.html";
    $email_template ="views/email-v1.html";
    $body = file_get_contents($email_template);
    $body =str_replace('%email%', $data->email, $body);
    $body =str_replace('%phone%', $data->phone, $body);
    $body =str_replace('%num_tickets%', count($ticketlist), $body);
    $body =str_replace('%link%', $paymentIntent->charges->data[0]->receipt_url, $body);
    $html = '';
    $i = 1;
    // foreach ($ticketlist as $ticket) {
    //   $html .= '<option value="ticketNum1" style="display: flex; justify-content: space-between;">
    //             <span>Ticket N-' . $i . ':</span>
    //             <span>' . $ticket .'</span>
    //           </option>';
    //   $i = $i +1;
    // };
    foreach ($ticketlist as $ticket) {
    $html .= '<tr
    style="
      align-items: center;
      display: flex;
      margin-bottom: 20px;
    "
  >
    <td
      valign="top"
      style="
        line-height: 0;
        padding: 0;
        border: 1px solid #d19f46;
        border-radius: 20px;
      "
    >
      <img
        src="https://dubailife3.herokuapp.com/assets/images/v1.0.0/ticket.png"
        border="0"
        style="object-fit: cover"
        align="left"
        vspace="0"
        hspace="0"
        alt="ticket"
        width="100px"
        height="100px"
      />
    </td>
    <td width="20"></td>
    <td
      valign="top"
      style="line-height: 0; padding: 3px 0 0"
    >
      <p
        border="0"
        style="
          font-weight: bold;
          font-size: 20px;
          color: #000000;
        "
        align="left"
        vspace="0"
        hspace="0"
      >
        Ticket N-' . $i . ':
      </p>
    </td>
    <td width="19"></td>
    <td
      valign="top"
      style="line-height: 0; padding: 3px 0 0"
    >
      <p
        border="0"
        style="
          font-weight: normal;
          font-size: 20px;
          color: #000000;
        "
        align="left"
        vspace="0"
        hspace="0"
      >
      ' . $ticket .'
      </p>
    </td>
    <td width="19"></td>
  </tr>';
  $i = $i +1;
    };
   
  
    $body =str_replace('%tickets%' , $html, $body);
    $mailer = new Mail($SMTP_USER,$SMTP_PASSWORD,$SMTP_HOST,$SMTP_PORT);
    
    $mailer->sendMail($recieverEmail,$subject, $body);
    http_response_code(200);
    exit();

   
   // ... handle other event types
  default:
    echo 'Received unknown event type ' . $event->type;
}

http_response_code(400);

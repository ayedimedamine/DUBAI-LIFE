<?php

require_once('Database.php');





class Campaign{

  private $db;
	/**
	* @param [type] $data [description]
	*/

    public function __construct()
    {
      $this->db = Database::connection();
    }


    public function addCampaign($nom,$email,$address,$phone,$city , $state,  $country,$zipCode ,$quantity, $paymentStatus, $amount_received, $invoiceUrl)
    {
    	$query = $this->db->prepare('INSERT  INTO campaigns (nom, email,address, phone, city,state,country,zipCode,quantity, payment, paye, facture) VALUES (:nom, :email,:address, :phone, :city,:state,:country,:zipCode ,:quantity , :payment, :paye, :facture)');
		  $query->execute(
    		[
        'nom' => $nom,
        'email' => $email,
        'address' => $address,
        'phone' => $phone,
        'city' => $city,
        'state' => $state,
        'country' => $country,
        'zipCode' => $zipCode,
        'quantity' => $quantity,
        'payment'=>$paymentStatus, 
        'paye'=>$amount_received/100, 
        'facture'=>$invoiceUrl
        ]);
      return $query->rowCount();
    }

    public function getall(){
      $admin = new Admin();
          session_start();
          if (! $admin->is_loggedin()) {
            $admin->redirect('/admin/login');
            exit();
          }
          $query = $this->db->prepare('SELECT * FROM campaigns');
          $query->execute();
          return $query->fetchAll();
        }

}

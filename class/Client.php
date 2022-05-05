<?php

// require 'Database.php';
require_once('Database.php');
// require_once('Client.php');
// require_once('Admin.php');


class Client{
 
  private $db;
  /**
    * @param [type] $data [description]
    */

    public function __construct()
    {
      $this->db = Database::connection();
    }

  public function addClient($data,$ticketcode)
      {
        $query = $this->db->prepare('INSERT INTO clients (nom, email,address, phone, city,state,country,zipCode,quantity,ticketcode) VALUES (:nom, :email,:address, :phone, :city,:state,:country,:zipCode,:quantity,:ticketcode)');
        $query->execute(
          [
          'nom' => $data->name,
          'email' => $data->email,
	        'address' => $data->address,
          'phone' => $data->phone,
          'city' => $data->city,
          'state' => $data->state,
          'country' => $data->country,
          'zipCode' => $data->zipCode,
          'ticketcode' => $ticketcode,
          'quantity' => $data->quantity,
          
          ]);
        return $query->rowCount();
      }
  // public function getall(){
  //   $admin = new Admin();
  //       session_start();
  //       if (! $admin->is_loggedin()) {
  //         $admin->redirect('/admin/login');
  //         exit();
  //       }
  //       $query = $this->db->prepare('SELECT id, email, reg_date FROM tickets');
  //       $query->execute();
  //       return $query->fetchAll();
  //     }
  }


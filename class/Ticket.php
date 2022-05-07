<?php


require 'vendor/autoload.php';
require_once('Admin.php');
require_once('Database.php');




class Ticket{

    private $db;
    /**
    * @param [type] $data [description]
    */

    public function __construct()
    {
      $this->db = Database::connection();
    }

    
    public function ticketcodegenrator()
      {
        // return uniqid('dubai-');
        $factory = new RandomLib\Factory;
        $generator = $factory->getMediumStrengthGenerator();
        $ticketcode = $generator->generateString(27, 'abcdefghijklmnopqrstuvwxyz123456789AZERTYUIOPQSDFGHJKLMWXCVBN');
        return $ticketcode;
      }
      
      
      
      public function addticket($email,$ticketcode)
      {
        $query = $this->db->prepare('INSERT  INTO tickets (email, ticketcode) VALUES (:email, :ticketcode)');
        $query->execute(
          [
          'email' => $email,
          'ticketcode' => $ticketcode
          ]);
        return $query->rowCount();
      }
      public function getall(){
        $admin = new Admin();
            session_start();
            if (! $admin->is_loggedin()) {
              $admin->redirect('/login');
              exit();
            }
            $query = $this->db->prepare('SELECT * FROM tickets');
            $query->execute();
            return $query->fetchAll();
          }

      // public function addClient($data,$ticketcode)
      // {
      //   $query = $this->db->prepare('INSERT  INTO clients (nom, prenom, email, tel, ticketcode, quantity, address) VALUES (:nom, :prenom, :email, :tel, :ticketcode, :quantity, :address)');
      //   $query->execute(
      //     [
      //     'nom' => $data->name,
      //     'prenom' => $data->prenom,
      //     'email' => $data->email,
      //     'tel' => $data->phone,
      //     'ticketcode' => $ticketcode,
      //     'quantity' => $data->quantity,
      //     'address' => $data->address,
      //     ]);
      //   return $query->rowCount();
      // }

     
}

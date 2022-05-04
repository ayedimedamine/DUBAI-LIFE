<?php

    require 'vendor/autoload.php';
    require 'config/config.php';
    require 'class/Mail.php';
    require 'class/TempTicket.php';
    
   $Tickets = new TempTicket();
   $tickets = $Tickets->apitest();
    echo json_encode($tickets, True);
    http_response_code(200);
    exit();



<?php

    require 'vendor/autoload.php';
    require 'class/Client.php';
    
   $clients = new Client();
   $clients = $clients->getall();
    echo json_encode($clients, True);
    http_response_code(200);
    exit();



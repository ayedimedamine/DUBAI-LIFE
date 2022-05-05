<?php

    require 'vendor/autoload.php';
    require 'class/Campaign.php';
    
   $campaigns = new Campaign();
   $campaigns = $campaigns->getall();
    echo json_encode($campaigns, True);
    http_response_code(200);
    exit();



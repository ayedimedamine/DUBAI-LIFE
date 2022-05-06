<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// TESTING

// $STRIPE_KEY = $_ENV['STRIPE_KEY'];
// $PRICE_ID = $_ENV['PRICE_ID'];
// $ENDPOINT_STRIPE_WEBHOOK_SECRET = $_ENV['ENDPOINT_STRIPE_WEBHOOK_SECRET'];
// $TAX_RATE_ID = $_ENV['TAX_RATE_ID'];

// $DB_HOST = $_ENV['DB_HOST'];
// $DB_DATABASE = $_ENV['DB_DATABASE'];
// $DB_USERNAME = $_ENV['DB_USERNAME'];
// $DB_PASSWORD = $_ENV['DB_PASSWORD'];

// $DOMAIN = 'https://dubailife3.herokuapp.com';

// $SMTP_HOST = $_ENV['SMTP_HOST'];
// $SMTP_USER = $_ENV['SMTP_USER'];
// $SMTP_PASSWORD = $_ENV['SMTP_PASSWORD'];
// $SMTP_PORT = $_ENV['SMTP_PORT'];



// PROD : 
$DOMAIN = 'https://www.the-new-life.fr';
$PRICE_DISCOUNT= 2490;
$TAX_RATE_ID = getenv('TAX_RATE_ID');
$STRIPE_KEY = getenv('STRIPE_KEY');
$STRIPE_SERVER_IPS = [
    "3.18.12.63",
    "3.130.192.231",
    "13.235.14.237",
    "13.235.122.149",
    "18.211.135.69",
    "35.154.171.200",
    "52.15.183.38",
    "54.88.130.119",
    "54.88.130.237",
    "54.187.174.169",
    "54.187.205.235",
    "54.187.216.72",
    "130.176.100.93"
  ];
$PRICE_ID = getenv('PRICE_ID');

$ENDPOINT_STRIPE_WEBHOOK_SECRET = getenv('ENDPOINT_STRIPE_WEBHOOK_SECRET');

$DB_HOST = getenv('DB_HOST');
$DB_DATABASE = getenv('DB_DATABASE');
$DB_USERNAME = getenv('DB_USERNAME');
$DB_PASSWORD = getenv('DB_PASSWORD');

$SMTP_HOST=getenv('SMTP_HOST');
$SMTP_USER=getenv('SMTP_USER');
$SMTP_PASSWORD=getenv('SMTP_PASSWORD');
$SMTP_PORT=getenv('SMTP_PORT');



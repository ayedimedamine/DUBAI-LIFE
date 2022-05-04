<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// TESTING

// $STRIPE_KEY = $_ENV['STRIPE_KEY'];
// $PRICE_ID = $_ENV['PRICE_ID'];
// $ENDPOINT_STRIPE_WEBHOOK_SECRET = $_ENV['ENDPOINT_STRIPE_WEBHOOK_SECRET'];

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

$STRIPE_KEY = getenv('STRIPE_KEY');
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

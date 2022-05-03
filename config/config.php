<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// $STRIPE_KEY = $_ENV['STRIPE_KEY'];
// $PRICE_ID = $_ENV['PRICE_ID'];
// $ENDPOINT_STRIPE_WEBHOOK_SECRET = $_ENV['ENDPOINT_STRIPE_WEBHOOK_SECRET'];
// $DB_HOST = $_ENV['DB_HOST'];
// $DB_DATABASE = $_ENV['DB_DATABASE'];
// $DB_USERNAME = $_ENV['DB_USERNAME'];
// $DB_PASSWORD = $_ENV['DB_PASSWORD'];
// $DOMAIN = 'https://dubailife3.herokuapp.com';

// $SMTP_HOST='smtp.zoho.eu';
// $SMTP_USER='admin@the-dubai-life.com';
// $SMTP_PASSWORD='ECQsqcRcV7Qd';
// $SMTP_PORT='587';


$SMTP_HOST='email-smtp.eu-west-3.amazonaws.com';
$SMTP_USER='AKIAV74TIVVY2WCQADK6';
$SMTP_PASSWORD='BDck3zc/6Fa/QY/PsmBLvisqCCYq2gfqWDZHgZT0xKfN';
$SMTP_PORT='587';

$DOMAIN = 'https://www.the-new-life.fr';
$STRIPE_KEY = getenv('STRIPE_KEY');
$PRICE_ID = getenv('PRICE_ID');
$ENDPOINT_STRIPE_WEBHOOK_SECRET = getenv('ENDPOINT_STRIPE_WEBHOOK_SECRET');
$DB_HOST = getenv('DB_HOST');
$DB_DATABASE = getenv('DB_DATABASE');
$DB_USERNAME = getenv('DB_USERNAME');
$DB_PASSWORD = getenv('DB_PASSWORD');
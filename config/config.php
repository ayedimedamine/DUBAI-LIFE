<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Retrive env variable
$STRIPE_KEY = $_ENV['STRIPE_KEY'];
$PRICE_ID = $_ENV['PRICE_ID'];
$ENDPOINT_STRIPE_WEBHOOK_SECRET = $_ENV['ENDPOINT_STRIPE_WEBHOOK_SECRET'];

$DB_HOST = $_ENV['DB_HOST'];
$DB_DATABASE = $_ENV['DB_DATABASE'];
$DB_USERNAME = $_ENV['DB_USERNAME'];
$DB_PASSWORD = $_ENV['DB_PASSWORD'];
$DOMAIN = 'https://www.the-new-life.fr';

$SMTP_HOST = $_ENV['SMTP_HOST'];
$SMTP_USER = $_ENV['SMTP_USER'];
$SMTP_PASSWORD = $_ENV['SMTP_PASSWORD'];
$SMTP_PORT = $_ENV['SMTP_PORT'];

// $STRIPE_KEY='sk_test_51KbQ7zELeKscvw05hR8BK7dsl7C5tWFRvTKIau7EgayTzgONsIDJPrFjKQR1qlWoBpWY3HsVCIItL4wSqRnDUBBU005o2ytVOh';
// $PRICE_ID="price_1KuG4CELeKscvw05vVw4l1UJ";
// $DB_HOST="us-cdbr-east-05.cleardb.net";
// $DB_DATABASE='heroku_5f7c029aa9e9f41';
// $DB_USERNAME="bcc58c8717eede";
// $DB_PASSWORD="3a5fb8ab";

// $SMTP_HOST ="smtp.zoho.eu";
// $SMTP_USER ="admin@the-dubai-life.com";
// $SMTP_PASSWORD ="ECQsqcRcV7Qd";
// $SMTP_PORT  ="587";

// $SMTP_HOST ="smtp.mailtrap.io";
// $SMTP_USER ="a58ee2ffb3e1a4";
// $SMTP_PASSWORD ="1ae5005ef7a849";
// $SMTP_PORT  ="2525";
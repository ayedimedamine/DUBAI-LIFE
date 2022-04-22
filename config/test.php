<?php
require 'config/config.php';
require 'class/Mail.php';
$mailer = new Mail($SMTP_USER,$SMTP_PASSWORD,$SMTP_HOST,$SMTP_PORT);
$mailer->sendMail('ayedimedamine7@gmail.com',"dubai life","<p>hey there</p>");
<?php
// require 'config/config.php';
$SMTP_HOST='e';
$SMTP_USER='';
$SMTP_PASSWORD='';
$SMTP_PORT='587';
require 'class/Mail.php';
$mailer = new Mail($SMTP_USER,$SMTP_PASSWORD,$SMTP_HOST,$SMTP_PORT);
$mailer->sendMail('mohamedamine.aydi@numerys.io',"dubai life","<p>hey there</p>");
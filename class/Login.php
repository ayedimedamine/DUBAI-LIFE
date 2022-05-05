<?php

require_once('Database.php');
require_once('Admin.php');;


$user =new Admin();




if(isset($_POST['btn-login']))
{
   $umail = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
   $upass = htmlspecialchars(trim($_POST['password']), ENT_QUOTES, 'UTF-8'); 
  
 if($user->login($umail,$upass))
 {
  $user->is_loggedin();
  $user->redirect('/admin/dashbord');
 }
 else
   {
   $user->redirect('/admin/login');
   } 
}
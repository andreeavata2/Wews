<?php 
session_start();
$isLogged = false;
  if(isset($_SESSION['email']))
  {
   $isLogged = true; 
  }
  
$theme = '';
require_once '../controllers/AccountController.php';
if(isset($_SESSION['id_user']))
{
  $userInfo = AccountController::getUserInfo($_SESSION['id_user']);
  $theme = $userInfo['theme'];
  
}

?>
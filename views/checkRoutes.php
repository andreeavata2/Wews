<?php 
session_start();
$isLogged = false;
  if(isset($_SESSION['email']))
  {
   $isLogged = true; 
  }
?>
<?php 
//hier word de sessie gestart
session_start();
//hier word gekeken of de gebruiker wel is ingelogd
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 
}else{
     //hier word de gebruiker terug gestuurd naar het login formulier als die niet is ingelogd
     header("Location: login.php");
     exit();
}
 ?>
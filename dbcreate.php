<?php
error_reporting(0);
//Variable aanmaken 
$host = "localhost";
$root = "root";
$root_password = "";
$user = 'newuser';
$pass = 'newpass';
$db = $_GET["customerName"];

  
//Hier wordt de database gamaakt doormiddel van een ty en catch
try {
    $dbh = new PDO("mysql:host=$host", $root, $root_password);

    $dbh->exec("CREATE DATABASE `$db`;
            CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
            GRANT ALL ON `$db`.* TO '$user'@'localhost';
            FLUSH PRIVILEGES;")
    or die(print_r($dbh->errorInfo(), true));
    }
    catch (PDOException $e) {
         
    }



?>






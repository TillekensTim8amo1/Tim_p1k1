<?php 
//hier word de sessie gestart
session_start(); 
//hier word de database connectie toegevoegd aan de login page
include "db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
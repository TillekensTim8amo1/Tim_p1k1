<?php 
//hier word de sessie gestart
session_start(); 
//hier word de database connectie toegevoegd aan de login page
include "conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
//hier word gekeken of het veld van de gebruikesnaam leeg is
	if (empty($uname)) {
		//hier word je teruggestuurd naar het login formulier
		header("Location: login.php?error=User Name is required");
	    exit();
	    //hier word gekeken of het wachtwoord veld leeg is
	}else if(empty($pass)){
		//hier word je teruggestuurd naar het login formulier
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		//hier word gekeken of de gebruikesnaam en wachtwoord die je hebt ingevoert overeen komen met de de data in de database
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
            	//als de gegevens niet overeen komen met de database krijg je een foutmelding en word je teruggestuurd
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			//als de gegevens niet overeen komen met de database krijg je een foutmelding en word je teruggestuurd
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
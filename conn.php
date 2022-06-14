<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "";

//Hier word de database connectie aangemaakt
$conn = new mysqli($servername, $username, $password, $database);

//Hier word de database connectie gecheckt
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>








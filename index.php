<?php
	//Het bestand om een connectie te maken met de database
	include "conn.php";

	//Het bestand om de database mee aan te maken.
	include "dbcreate.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database Aanamken</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- Bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<!-- titel van de pagina -->
	<h2>Klant systeem aanmaken</h2>

	<div class="formelier">
		<!-- formelier -->
		<form action="index.php" method="post">
			<!-- hier vind je alle invoer velden -->
			<label>Naam klant</label><br>
			<input type="text" name="customerName" placeholder="Naam Klant" class="klantnaam"><br>
			<div class="box">
				<input type="checkbox" name="subrit" value="value1" class="form-ceck-input">
				<label>Inclusief Subrit module</label>

				<input type="checkbox" name="boekhoud" value="value2" class="form-ceck-input">
				<label>Inclusief E-boekhoud module</label>

				<input type="checkbox" name="calender" value="value3" class="form-ceck-input">
				<label>Inclusief kalender module</label>

				<input type="checkbox" name="artikelen" value="value4" class="form-ceck-input">
				<label>Inclusief artikelen module</label>
			</div>
			<div class="knop">
				<!-- hier is de submit knop -->
       			<button type="submit" name="submit" class="knopje">Maak aan</button>
    	</div>
		</form>
	</div>
</body>
</html>
<?php 

if(isset($_POST['subrit'])){
    $sql = "CREATE TABLE subrit (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
}


if ($conn->query($sql) === TRUE) {
  echo "Table subrit created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

if(isset($_POST['boekhoud'])){
    $sql = "CREATE TABLE boekhoud (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
}


if ($conn->query($sql) === TRUE) {
  echo "Table boekhoud created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

if(isset($_POST['calender'])){
    $sql = "CREATE TABLE calender (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
}


if ($conn->query($sql) === TRUE) {
  echo "Table calender created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

if(isset($_POST['artikelen'])){
    $sql = "CREATE TABLE artikelen (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
}


if ($conn->query($sql) === TRUE) {
  echo "Table artikelen created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
	


?>



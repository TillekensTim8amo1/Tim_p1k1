<?php 
//hier word de connectie pagina 
include "conn.php";

include "dbcreate.php";
//hier word bekeken of je wel bent ingelogd
include "veilig.php";

//hier word de tabel aangemaakt
if(isset($_POST['subrit'])){
    $sql = "CREATE TABLE subrit (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
}

//hier word de tabel uitgezet
if(isset($_POST['subritUit'])){
    $sql = "DELETE TABLE subrit";}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/sty.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h2>Subrit module beheer</h2>
	<div class="formelier">
		<!-- Dit is het formelier waar je kan aangen of je een tabel wilt toevoegen of verwijderen -->
		<form action="index.php" method="post">
		<label>Naam database</label><br>
			<input type="text" name="databaseName" placeholder="Naam Database" class="klantnaam">
		
			<input type="checkbox" name="subrit" value="1" class="form-check-input">
			<label>Subrit module aan</label>

			<input type="checkbox" name="subritUit" value="1" class="form-check-input">
			<label>Subrit module uit</label>
		<div class="knop">
        <button type="submit" name="submit" class="knopje">Opslaan</button><br>
        <button name="terug" class="knopjes"><a href="index.php">Terug</a></button>
    	</div>
	</form>
	</div>
</body>
</html>
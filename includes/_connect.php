<?php


$host = "localhost";
$user = "root";
$password = "";
$db = "codecrumbs";

// find databasen


// forbind til localhost
$con = mysqli_connect($host, $user, $password);

$data = mysqli_select_db($con, $db);


// hvis ikke fundet, Opret database
if(!$data){
	echo "<h3>Databasen blev ikke fundet :( </h3>";
	echo 'Så vi oprettede den for dig :)';

	// Opret Databasen
	$sql = "CREATE DATABASE $db";

	mysqli_query($con, $sql);

}

// Forbind til database
$con = mysqli_connect($host, $user, $password, $db);


// her gemmer vi vores querys
$query = '';

$dir = realpath(__DIR__ . '/..');

// indlæser alle linier i vores .sql fil
$lines = file($dir.'../database.sql');

// Læs alle linier
foreach ($lines as $line_num => $line) {

	// kør koden hvis det ikke er en kommentar
	if (substr($line, 0, 2) != '--' && $line != '') {

		// Gem linie
		$query .= $line;

		// Find Tabelnavn
		if(substr(trim($line), -1, 1) == '('){
			$countline = strlen($line);
			$tblnavn = substr($line, 28, $countline-32);
		}

		// hvis vi finder et semicolon, slutter vi vores query
		if (substr(trim($line), -1, 1) == ';') {
			

			// Kør Query
			mysqli_query($con, $query);

			// reset query
			$query = '';
		}
	}
}
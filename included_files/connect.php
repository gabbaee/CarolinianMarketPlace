<?php
$servername = "localhost";
$dbUsername = "s16101959_carolinianmarket";
$password = "Ihave100AFAMs";
$dbname = "s16101959_carolinianmarket";
	
// Create connection
$conn = mysqli_connect($servername, $dbUsername, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>

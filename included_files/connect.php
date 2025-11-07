<?php
$servername = "localhost";
$dbUsername = "s07504009_EzPA";
$password = "EzPA2025";
$dbname = "s07504009_EzPA";
	
// Create connection
$conn = mysqli_connect($servername, $dbUsername, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
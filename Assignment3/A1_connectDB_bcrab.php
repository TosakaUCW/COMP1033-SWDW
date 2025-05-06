<?php
// (1) Using DB in local XAMPP server
// $servername = "localhost";
// $username = "root";	// for local host
// $password = "";		// for local host
// $db = "SWDW";	// change to the database name in your local XAMPP

// (2) Using DB in bcrab
$servername = "stuweb.bcrab.cn";
$username = "1001pair08";	// change to your account
$password = "zBYM1d7sB";	// change to your account
$db = "1001pair08";// change to the database name in db.bcrab.cn

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// $conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
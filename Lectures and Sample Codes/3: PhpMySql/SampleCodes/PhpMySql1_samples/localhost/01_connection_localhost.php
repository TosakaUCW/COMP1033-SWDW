<?php 
// FIXME: change to your own details

// (1) Using DB in local XAMPP server
$servername = "localhost";
$username 	= "root";	// for local host
$password 	= "";		// for local host
$db = "SWDW";	// change to the database name in your local XAMPP

// (2) Using DB in bcrab
//$servername = "stuweb.bcrab.cn";
//$username = "XXXXX";	// change XXXXX to your account's
//$password = "XXXXX";	// change XXXXX to your account's
//$db = "jeffersonfong";// change to the database name in db.bcrab.cn

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// $conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);} 
echo "Connected successfully";

?>
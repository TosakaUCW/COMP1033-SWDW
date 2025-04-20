<?php 
// FIXME: change to your own details

// (1) Using DB in local XAMPP server
//$servername = "localhost";
//$username 	= "root";	// for local host
//$password 	= "";		// for local host
//$db		    = "workshop1";	// home PC
//$db			= "jeffersonfong";	// office PC

// (2) Using DB in bcrab
$servername = "stuweb.bcrab.cn";
$username = "jefferson";	// change to your account's name
$password = "XXXXX";		// change to your account's password
$db = "jefferson"; // change to the database name in stuweb.bcrab.cn

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// $conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);} 
echo "Connected successfully";

?>
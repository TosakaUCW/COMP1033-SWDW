<?php 
// FIXME: change to your own details

// For local XAMPP server
//$servername = "localhost";
//$username 	= "root";	// for local host
//$password 	= "";		// for local host
//$db		    = "workshop1";	// home PC
//$db			= "jeffersonfong";	// office PC

// (2) Using DB in bcrab
$servername = "stuweb.bcrab.cn";
$username = "jefferson";	// change to your account's name
$password = "XXXXX";	// change to your account's password
$db = "jefferson"; // change to the database name in stuweb.bcrab.cn

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// $conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 

// echo "Connected successfully";


//$country = "Germany";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM customers where Country = 'Mexico'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	echo 
	"id: " .  $row["CustomerID"]. 
	" - Name: "  .  $row["CustomerName"]. 
	" Contact: " . $row["ContactName"].
	" Country: " . $row["Country"]. "<br>";
	}
	echo "<br>".mysqli_num_rows($result)." found";
} else {
	echo "0 results";
}

mysqli_close($conn);
?>
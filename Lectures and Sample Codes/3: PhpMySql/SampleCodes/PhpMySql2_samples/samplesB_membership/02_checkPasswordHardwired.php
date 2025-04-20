<?php

// Receive form data usr and pwd sent by the POST method.
// Compare pwd with a hardwired value.

$db_pwd = "666666";			// Hardwired value for password
$user	= $_POST["usr"];	// username from login form
$pwd	= $_POST["pwd"];	// password	from login form

if ($db_pwd == $pwd){
	echo "Your Username is: $user your Password matches the one in the database.";
} else {
	echo "Your Username is: $user <br> The Password you typed <b>$pwd</b> is incorrect";
}

?>
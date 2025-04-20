<!DOCTYPE html>
<html>
<!-- Can call this file 01_login.html instead of .php -->

<body>

<h2>Logon Form</h2>

<!--
  Submit the form data (usr and pwd) by the POST method to the php file specified by action="XXX.php". 
  
  "02_checkPasswordHardwired.php" checks the passowrd against a fixed hardwired value. 
  "04_checkPasswordByDB.php" checks the password against those in a database.
-->

<form action="02_checkPasswordHardwired.php" method="POST">
<!--form action="04_checkPasswordByDB.php" method="POST"-->
<!--form action="04_checkPasswordByDB_soln.php" method="POST"-->
  <label for="usr">username:</label><br>
  <input type="text" id="usr" name="usr" value="John"><br>
  <label for="pwd">password:</label><br>
  <input type="password" id="pwd" name="pwd" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>

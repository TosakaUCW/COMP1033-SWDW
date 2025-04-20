<html>

<head>
    <style>
    table {
        background-color: lightblue;
    }
    </style>
</head>

<body>
    <h1> Welcome to Customers Database </h1>
    <form method="post">
        <input type="submit" name="submit"
            value="List All Customer Details">
        <input type="submit" name="submit"
            value="List CustomerName, ContactName and PostalCode">
        <input type="submit" name="submit"
            value="List CustomerName, Country and City">
        <input type="submit" name="submit"
            value="List all customer data in Poland">
        <input type="submit" name="submit"
            value="List all Contact names and cities in London">
    </form>

    <?php
		$ListType=isset($_POST['submit']) ? $_POST['submit'] : " ? " ;	
		if	($ListType <> "")	{ // List data only when submit button is clicked
			$conn= connectdb();		
			switch ($ListType){
				case "List All Customer Details":
					$sql = "select * from customers";					
					break;
				case "List CustomerName, ContactName and PostalCode":
                    // FIXME: Complete the SQL
					$sql = "???";					
					break;
				case "List CustomerName, Country and City":
                    // FIXME: Complete the SQL
					$sql = "???";
					break;
                case "List all customer data in Poland":
                    // FIXME: Complete the SQL
					$sql = "???";
					break;
                case "List all Contact names and cities in London":
                    // FIXME: Complete the SQL
					$sql = "???";
					break;
				default:
					// FIXME: Complete the SQL
					$sql = "???";
					break;
		    }
				
			if ($sql)	{	
				//call function to list data
				ListData($conn,$sql);
			}			
		}
			
		function connectdb(){
			// FIXME: change to your own details
			$servername = "localhost"; // if use uic server, change to db.bcrab.cn
			$username 	= "username";  // change to your account
			$password 	= "password";	  // change to your account
			$db		    = "dbname";	  // change to your database name
			
			//create connection
			$conn= new mysqli($servername,$username,$password,$db);
				
			//check connection
			if ($conn->connect_error){
				die("connection failed: ".$conn->connect_error);
			}
			
			echo "database server connected successfully<br>";
			return ($conn);
		}		
			
		function ListData($conn,$sql){					
			//execute the SQL query			
			$result = mysqli_query($conn,$sql);		
			
			// list data where search result is not 0
			if (mysqli_num_rows($result) > 0){			
				echo "<table border='1'>";
				//print the heading of table
				echo "<tr>";
				//print each column name
				while ($property = mysqli_fetch_field($result)) {
					echo "<th>".$property->name."</th>";
				}
				echo "</tr>";
					
				//get number of columns
				$fields = mysqli_num_fields($result);
					
				//Get each row data
				while ($row=mysqli_fetch_array($result)){						
                    // FIXME: Complete each table row						

				}			
				
				echo "</table>";	
			} else	{
				echo "0 results";
			}
		}						
	?>
</body>
</html>
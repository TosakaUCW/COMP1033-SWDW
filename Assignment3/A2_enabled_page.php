<?php
// Students modify this file.  Fill in all missing info.

include 'A1_connectDB_bcrab.php';

$sql = "SELECT * FROM membership WHERE status = 'Enabled'";
$result = mysqli_query($conn, $sql);

// Successful result 
if ($result) {
    // Change to your actual name and ID.
    echo "<h3>Bohan YANG 2330016056</h3>";
    echo "<h3>Boyu LIU 2330016025</h3>";

    // output data of each row
    echo "<h2>Enabled Membership </h2>";
    echo "<table border='1'>";

    //print the heading of table
    echo "<tr>";
    //print each column name
    while ($property = mysqli_fetch_field($result)) {
        echo "<th>" . $property->name . "</th>";
    }
    echo "</tr>";

    //get number of columns
    $fields = mysqli_num_fields($result);

    //Get data of each row
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        for ($f = 0; $f < $fields; $f++) {
            echo "<td>" . $row[$f] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>" . mysqli_num_rows($result) . " records found";
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
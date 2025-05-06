<?php
// Students modify this file.  Fill in all missing info.

include 'A1_connectDB_bcrab.php';

// Hint: use ORDER BY in the query
$sql = "SELECT * FROM membership ORDER BY mid ASC";
$result = mysqli_query($conn, $sql);

// Successful result 
if ($result && mysqli_num_rows($result) > 0) {
    // output data of each row

    echo "<h2>All Membership </h2>";
    echo "<table border='1'>";

    //print the heading of table
    echo "<tr>";
    while ($property = mysqli_fetch_field($result)) {
        echo "<th>" . $property->name . "</th>";
    }
    echo "<th> Action</th>";	// Add this column
    echo "</tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";

        // Print each column value
        for ($i = 0; $i < mysqli_num_fields($result); $i++) {
            echo "<td>" . htmlspecialchars($row[$i]) . "</td>";
        }

        // Add action column
        $mid = $row['mid'];
        $status = $row['status'];

        // Check the status and provide the appropriate action link
        if ($status == "Enabled") {
            echo "<td><a href='A5_disable_member.php?mid=$mid'>Disable it</a></td>";
        } else {
            echo "<td><a href='A6_enable_member.php?mid=$mid'>Enable it</a></td>";
        }

        echo "</tr>";
    }

    echo "<br>" . mysqli_num_rows($result) . " found";
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
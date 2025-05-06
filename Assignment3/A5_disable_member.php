<?php
// Students modify this file.  Fill in all missing info.

include 'A1_connectDB_bcrab.php';

$mid = $_GET['mid']; // Cannot use POST

$sql = "UPDATE membership SET status = 'Disabled' WHERE mid = $mid";
$result = mysqli_query($conn, $sql);

$url = "A4_all_membership.php";
if ($result > 0) {
    header("Location: $url");
    exit();
} else {
    echo "<script> alert('update failed.') </script> ";
    header('Location:' . $url);
}

?>
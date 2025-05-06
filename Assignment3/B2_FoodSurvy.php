<?php
$meal = isset($_GET['meal']) ? $_GET['meal'] : "Nothing selected";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Survey Result</title>
</head>

<body>
    <p>You selected <strong><?php echo htmlspecialchars($meal); ?></strong>.</p>
    <p>Thank you for telling us.</p>
    <p><a href="B1_FoodSurveyForm.php">Go back to Food Survey Form</a></p>
</body>

</html>
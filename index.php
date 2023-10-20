<?php
require "config.php";


// Define variables and set them to empty values
$nameErr = $phoneErr = "";
$name = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

   
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
    }
}

function test_input($data) {
    $data = trim($data);           
    $data = stripslashes($data);    
    $data = htmlspecialchars($data); 
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Form</title>
</head>
<body>
    <form method="POST" action="new.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <span class="error"><?php echo $nameErr; ?></span><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" required>
        <span class="error"><?php echo $phoneErr; ?></span><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

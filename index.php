<!DOCTYPE html>
<html>
<head>
    <title>Submit Form</title>
</head>
<body>
    <form method="POST" action="process_form.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Phone:</label>
        <input type="tel" name="phone" id="phone" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>


<?php
    //define variable and set to empty values
    $name= $phone = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $phone = test_input($_POST["phone"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    // define variables and set to empty values
    $nameErr = $phoneErr = "";
    $name = $phone= "";

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

?>

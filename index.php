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



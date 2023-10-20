<?php

include "config.php";

$name = $phone = "";
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (!empty($_POST["name"])) {
    $name = test_input($_POST["name"]);
  }

  if (!empty($_POST["phone"])) {
    $phone = test_input($_POST["phone"]);
  }

  // Check if both name and phone are not empty (valid data)
  if (empty($name) || empty($phone)) {
    echo "Required fields cannot be empty";
  }
  
  
  // Prepare an INSERT statement
  $stmt = $conn->prepare("INSERT INTO user (username, phone) VALUES (:name, :phone)");
  
  
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':phone', $phone);
  
  // Execute the prepared statement
  $status = $stmt->execute();
  if ($status) {
    
    echo "Data inserted successfully!";
  } else {
    
    var_dump($stmt->errorInfo()); exit;
  }
  
}

  // var_dump($_POST);
  // exit;

// Function to clean and validate input data
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

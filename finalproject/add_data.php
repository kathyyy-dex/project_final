<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the data from the request
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

// Validate and sanitize the data
$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
$message = filter_var($message, FILTER_SANITIZE_STRING);

// Insert the data into the database
$sql = "INSERT INTO account (name, email, number, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $number, $message);
$stmt->execute();

// Return a response to the JavaScript code
if ($stmt->affected_rows > 0) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $stmt->error;
}

$conn->close();
?>
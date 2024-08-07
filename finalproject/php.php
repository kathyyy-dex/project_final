<?php
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Process the form data (e.g., send an email)
// ...

// Redirect the user back to the website or display a success message
header("Location: index.html");
exit;
?>

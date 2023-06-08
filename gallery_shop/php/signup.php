<?php
// Retrieve the form data
$username = $_POST['name'];
$password = $_POST['username'];
$username = $_POST['email'];
$password = $_POST['password'];

// Validate and process the data
// (Here, you can add more validation and database operations as per your needs)

// Example: Saving the user to a text file
$file = 'users.txt';
$data = $name . ':' . $username . ':' . $email . ':' . $password . "\n";
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

// Redirect to login page
header("Location: login.php");
exit();
?>

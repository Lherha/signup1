<?php
$HOSTNAME = 'localhost';
$USERNAME = 'your_username';
$PASSWORD = 'your_password';
$DATABASE = 'signupforms';

// Create a connection to the database
$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

// Check the connection
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>

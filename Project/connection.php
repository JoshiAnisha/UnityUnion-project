<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$port=8080;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo 'Connected successfully';

// Perform database operations here

// // Close the connection
// $conn->close();
?>
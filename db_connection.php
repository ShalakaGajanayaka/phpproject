<?php
$host = "localhost";
$username = "root";  // default XAMPP username
$password = "12345678";      // default XAMPP password
$database = "phpprojectdb";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 
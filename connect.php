<?php
$servername = "localhost";
$username = "root";
$password = ""; // Leave empty if no password is set in XAMPP
$database = "user_db"; // Use the correct database name from phpMyAdmin

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>

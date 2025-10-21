<?php
$servername = "localhost";
$username = "root"; // Default for XAMPP
$password = ""; // Leave empty unless you set one
$dbname = "quiz_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

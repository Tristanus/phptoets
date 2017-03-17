<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "schoenenmerken";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = 'SELECT * FROM merken';
$result = $conn->query($query);

$merken = $result->fetch_all(MYSQLI_ASSOC);
?>

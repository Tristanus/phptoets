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

if(isset($_POST["search"])){
	$searchValue = $_POST["search"];
	$query = "SELECT * FROM merken WHERE merk = '$searchValue'";
}
else if(isset($_POST["size"])){
	$size = $_POST["size"];
	$query = "SELECT merk,$size FROM merken";
}

$result = $conn->query($query);
$merken = $result->fetch_all(MYSQLI_ASSOC);
?>

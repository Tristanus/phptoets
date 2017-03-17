<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
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

		$merk = $conn->escape_string($_POST['merk']);
		$maat_38 = $conn->escape_string($_POST['maat_38']);
		$maat_39 = $conn->escape_string($_POST['maat_39']);
		$maat_40 = $conn->escape_string($_POST['maat_40']);
		$maat_41 = $conn->escape_string($_POST['maat_41']);
		$maat_42 = $conn->escape_string($_POST['maat_42']);
		$maat_43 = $conn->escape_string($_POST['maat_43']);
		$maat_44 = $conn->escape_string($_POST['maat_44']);
		$maat_45 = $conn->escape_string($_POST['maat_45']);
		$maat_46 = $conn->escape_string($_POST['maat_46']);
		$maat_47 = $conn->escape_string($_POST['maat_47']);

		$query = "INSERT INTO merken (merk, maat_38, maat_39, maat_40, maat_41, maat_42, maat_43, maat_44, maat_45, maat_46, maat_47) VALUES ('$merk', '$maat_38', '$maat_39', '$maat_40', '$maat_41', '$maat_42', '$maat_43', '$maat_44', '$maat_45', '$maat_46', '$maat_47')";

		mysqli_query($conn, $query);

		$conn->close();

		header("location: ./");
	}
?>
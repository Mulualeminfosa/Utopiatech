<?php
	$servername = "localhost";
	$Server_username = "root";
	$Server_password = "";
	$dbname = "fhghgh";
	
	$conn = new mysqli($servername, $Server_username, $Server_password, $dbname);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     } 
     mysqli_query($conn,"SET NAMES utf8;");
    mysqli_query($conn,"SET CHARACTER_SET utf8;");
	
	
?>


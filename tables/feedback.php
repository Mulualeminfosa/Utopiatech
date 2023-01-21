<?php
$servername = "localhost";
	$Server_username = "root";
	$Server_password = "";
	$dbname = "utopia";
	
	$conn = new mysqli($servername, $Server_username, $Server_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE contact_us (
id int NOT NULL AUTO_INCREMENT,
reg_date DATE,
given_name VARCHAR(180) NOT NULL,
orga_name VARCHAR(180) NOT NULL,
address VARCHAR(180) NOT NULL,
Phone_no VARCHAR(180) NOT NULL,
Email VARCHAR(130) NOT NULL,
mesage_body LONGTEXT NOT NULL,
status VARCHAR(30),
PRIMARY KEY (id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table contact_us us created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
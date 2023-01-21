<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utopia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE users_table (
id int NOT NULL AUTO_INCREMENT,
reg_time TIME,
reg_date DATE,
firstname VARCHAR(30),
middlename VARCHAR(30),
lastname VARCHAR(30),
email VARCHAR(30) NOT NULL,
phone VARCHAR(30),
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
photo VARCHAR(30) NOT NULL,
status VARCHAR(30) NOT NULL,
PRIMARY KEY (id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
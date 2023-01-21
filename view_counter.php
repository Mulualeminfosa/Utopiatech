<?php 
include('Database/DB_connet.php');
$sql2 = "SELECT ucount FROM user_counter";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["ucount"]."<br>";
    }
} else {
    echo "No Record";
}

$conn->close();
?>
<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "hireform";
// Create connection
$conn = new mysqli($hostName, $userName, $password, $databaseName);

if ($conn->connect_error) {
    echo 'connection failed' . mysqli_error($conn);
}
?>
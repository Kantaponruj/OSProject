<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "12345678";
$dbName = "car";

// mysql_connect("$dbServername","$dbUsername","$dbPassword","$dbName");

// Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword,$dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>
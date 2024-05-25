<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Registerationform";

// Create connection
$con=new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
// echo "Connected successfully";

// Create database
/*$sql = "CREATE DATABASE registrationform";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();*/


?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "5web";

$conn = new mysqli( $servername, $username, $password, $dbname);

$conn = mysqli_connect( $servername, $username, $password, $dbname);
if( !$conn ) die("Connection failed: " . mysqli_connect_error());

$sql = "CREATE DATABASE 5web";
if( mysqli_query( $conn, $sql ) ){
  echo "DB created successfully.<br>";
} else {
  //echo "Error creating DB: ".mysqli_error( $conn )."<br>";
}

$sql = "CREATE TABLE User(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL
)";


if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    //echo "Error creating table: " . mysqli_error($conn)."<br>";
}

?>

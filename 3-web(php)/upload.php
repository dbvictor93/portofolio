<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "3web_blog";

$conn = new mysqli( $servername, $username, $password, $dbname );

$conn = mysqli_connect( $servername, $username, $password, $dbname );
if( !$conn ){
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo "Connected successfully!.<br>";
}

$sql = "CREATE DATABASE 3web_blog";
if( mysqli_query( $conn, $sql ) ){
  echo "DB created successfully.<br>";
} else {
  echo "Error creating DB: ".mysqli_error( $conn )."<br>";
}

$sql = "CREATE TABLE Posts(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(30) NOT NULL,
  file longblob NOT NULL,
  content VARCHAR(255) NOT NULL
)";


if (mysqli_query($conn, $sql)) {
    echo "Table 3web_blog created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn)."<br>";
}

$title = $_POST['title'];
$file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
$content = $_POST['content'];
$sql   = "INSERT INTO Posts( title, file, content ) VALUES( '$title','$file','$content' )";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully<br>";
} else {
  echo "Error: " . mysqli_error($conn)."<br>";
}

mysqli_close($conn);

header("Refresh:0; url=index.html");

?>

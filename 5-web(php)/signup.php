<?php
include('db_connect.php');

$username = $_POST['username'];
$password = $_POST['password'];


$sql   = "INSERT INTO User( name, password ) VALUES( '$username','$password' )";
if (!mysqli_query($conn, $sql)) {
  echo "Error: " . mysqli_error($conn)."<br>";
} else {
  header("Refresh:0; url=signin.html");
}

mysqli_close($conn);


?>


<?php
include('db_connect.php');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];


$sql   = "SELECT * FROM User WHERE(name =  '$username' and password = '$password')";

$result = $conn->query($sql);
$_SESSION['userName'] = $username;
mysqli_close($conn);
//header("Refresh:0; url=sign.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Signin</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
</head>
<body>

  <header>
    <h1>Hello</h1>
    <nav>
      <a href="index.html">home</a>
      <a href="signout.php">signout</a>
    </nav>
  </header>

  <section>
    <div>
<?php


    while($row = $result->fetch_assoc()){
        print('<h3>Welcome '.$_SESSION['userName'].'</h3>');
    }


?>
      <div class="background"></div>
      <div class="articles">
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita fugiat laboriosam cupiditate, quaerat a earum eos consequatur pariatur ab. Quidem obcaecati reprehenderit veritatis eligendi, fugit soluta deserunt a vel incidunt blanditiis recusandae, modi iusto! Est quia quas hic, porro minus, minima delectus unde eius provident, vel numquam modi! Molestias hic illum, unde adipisci neque, doloribus, optio dicta ipsum aliquam quia praesentium dolore tempora quidem consequatur repellat obcaecati. Amet possimus similique doloribus neque sunt, praesentium deserunt nobis animi aliquam ea quod eius repellendus sapiente voluptas alias. Maxime modi deleniti, nesciunt vero minima dolor tempore voluptates doloremque unde, amet quo magni ipsum.</h3>
      </div>
    </div>
  </section>

</body>
</html>

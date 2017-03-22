<?php
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "3web_blog";
$conn = new mysqli( $servername, $username, $password, $dbname );
$conn = mysqli_connect( $servername, $username, $password, $dbname );
if( !$conn ) die("Connection failed: " . mysqli_connect_error());
$sql = "SELECT * FROM Posts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>3-web</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
</head>
<body>

<header>
  <h1>Hello</h1>
  <nav>
    <a href="index.html">home</a>
    <a href="blog.php">blog</a>
  </nav>
</header>

<?php while($row = $result->fetch_assoc()){ ?>
  <section class="blog">
    <h2><?php echo $row['title']; ?></h2>
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['file']) .' "/>'; ?>
    <div>
          <p><?php echo $row['content']; ?></p>
    </div>

  </section>
<?php } ?>

<footer class="footer">
  <p>(c) Victor C.</p>
</footer>

</body>
</html>

<?php
session_start();
require 'database.php';
if( isset($_SESSION['user_id']) ){
	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
	$user = NULL;
	if( count($results) > 0){
		$user = $results;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>9-web</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

  <header>
    <div class="icon">
      <img src="images/icon.png" alt="icon">
      <h1><a href="index.php">Hello </a></h1>
    </div>
    <nav>
      <?php if( !empty($user) ): ?>
      <a href="#" class="user"><?= $user['email']; ?></a>
      <a href="logout.php" class="user">Logout</a>
      <a href="about.php">About</a>
      <a href="products.php">Products</a>
      <?php else: ?>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a href="about.php">About</a>
      <a href="products.php">Products</a>
    <?php endif; ?>
    </nav>
  </header>

  <section>
    <div class="image">
      <div class="text">
        <h3>Welcome</h3>
        <p>This is something</p>
        <button>home</button>
      </div>
    </div>

    <div class="articles">
      <div class="article">
        <h2>Lorem ipsum.</h2>
      </div>
      <div class="article">
        <h2>Lorem ipsum.</h2>
      </div>
      <div class="article">
        <h2>Lorem ipsum.</h2>
      </div>
    </div>
  </section>

  <footer>
    <p>(c) Victor C.</p>
  </footer>
</body>
</html>

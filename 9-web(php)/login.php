<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: index.php");
}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

		$_SESSION['user_id'] = $results['id'];
		header("Location: index.php");

	} else {
		$message = 'Sorry, those credentials do not match';
	}

endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

  <header>
    <div class="icon">
      <img src="images/icon.png" alt="icon">
      <h1><a href="index.php">Hello</a></h1>
    </div>
    <nav>
      <a href="register.php">Register</a>
      <a href="about.php">About</a>
    </nav>
  </header>

  <section class="login">
    <div class="message">
      <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
      <?php endif; ?>
    </div>
    <form action="login.php" method="POST">
      <input type="text" placeholder="Enter your email" name="email">
		  <input type="password" placeholder="and password" name="password">
  		<input type="submit">
    </form>
  </section>

  <footer>
    <p>(c) Victor C.</p>
  </footer>
</body>
</html>

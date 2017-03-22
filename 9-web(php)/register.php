<?php
session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}

require 'database.php';

$message = '';



if(!empty($_POST['email']) && !empty($_POST['password'])):
	if($_POST['password'] === $_POST['confirm_password'] && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false):
		// Enter the new user in the database
		$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':email', $_POST['email']);
		$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

		if( $stmt->execute() ):
			$message = 'Successfully created new user';
			header("Refresh:1; url=register.php");
		else:
			$message = 'Sorry there must have been an issue creating your account';
		endif;
	else:
		$message = 'Sorry password did not match or email is incorrect';
	endif;

endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
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
      <a href="login.php">Login</a>
      <a href="about.php">About</a>
    </nav>
  </header>

  <section class="register">
    <div class="message">
      <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
      <?php endif; ?>
    </div>
    <form action="register.php" method="POST">
      <input type="text" placeholder="Enter your email" name="email">
  		<input type="password" placeholder="and password" name="password">
  		<input type="password" placeholder="confirm password" name="confirm_password">
  		<input type="submit">
    </form>

  </section>

  <footer>
    <p>(c) Victor C.</p>
  </footer>
</body>
</html>

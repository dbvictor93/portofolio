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
  <title>About</title>
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
      <?php if( !empty($user) ): ?>
      <a href="#" class="user"><?= $user['email']; ?></a>
      <a href="logout.php" class="user">Logout</a>
      <a href="products.php">Products</a>
      <?php else: ?>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
    <?php endif; ?>
    </nav>
  </header>

  <section class="about">
    <img src="images/3.jpg" alt="images/1.jpg">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit consequatur eius sed quae cupiditate totam nobis magni, quam odit, tempora, officiis laudantium voluptates asperiores nemo similique ipsa temporibus itaque. Molestiae asperiores officia corporis, dolorum similique laborum nobis molestias laudantium fugit dicta iste enim assumenda tempora obcaecati cupiditate explicabo dolore atque ea odit praesentium dolores! Cupiditate tempore maiores odio, quos ut perspiciatis, cumque animi facere est eius ipsam aliquid consequuntur dignissimos delectus nesciunt ratione, placeat quasi. Hic dignissimos quam, facilis dolor quibusdam, exercitationem, facere quasi obcaecati incidunt illum rem consequuntur, saepe consequatur. Voluptates obcaecati debitis molestias perspiciatis, dignissimos enim pariatur facere aliquid dolores, sequi veritatis veniam amet quas maiores ratione mollitia nesciunt, in nostrum impedit. Asperiores vitae blanditiis alias consequatur dicta, libero dolores! Dicta, cumque atque ullam numquam nostrum ipsa voluptate quae alias, veritatis unde quia molestias veniam vel.
    </p>
  </section>

  <footer>
    <p>(c) Victor C.</p>
  </footer>
</body>
</html>

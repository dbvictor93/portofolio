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
  <title>Products</title>
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
      <a href="about.php">About</a>
      <?php else: ?>
      <?php header('Location: index.php')?>
    <?php endif; ?>
    </nav>
  </header>

  <section class="products">
    <div>
      <h2>Title</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ipsam reprehenderit vero ratione! Maxime libero rerum natus animi a veritatis sunt corrupti itaque ab velit. Beatae odio sequi odit quo, neque, architecto cumque enim alias aliquam. Ad ipsum perferendis impedit quasi, saepe laborum dignissimos libero explicabo, nihil quisquam similique enim.</p>
    </div>
    <div>
      <h2>Title</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ipsam reprehenderit vero ratione! Maxime libero rerum natus animi a veritatis sunt corrupti itaque ab velit. Beatae odio sequi odit quo, neque, architecto cumque enim alias aliquam. Ad ipsum perferendis impedit quasi, saepe laborum dignissimos libero explicabo, nihil quisquam similique enim.</p>
    </div>
    <div>
      <h2>Title</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ipsam reprehenderit vero ratione! Maxime libero rerum natus animi a veritatis sunt corrupti itaque ab velit. Beatae odio sequi odit quo, neque, architecto cumque enim alias aliquam. Ad ipsum perferendis impedit quasi, saepe laborum dignissimos libero explicabo, nihil quisquam similique enim.</p>
    </div>
  </section>

  <footer>
    <p>(c) Victor C.</p>
  </footer>
</body>
</html>

<?php include('database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>7-web</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>

  <header>
    <div class="header">
      <h1>Welcome</h1>
      <nav>
        <a href="">Products</a>
        <a href="">Contacts</a>
        <a href="">About us</a>
      </nav>
    </div>
  </header>

  <section>
    <h2>Visit a tour page</h2>
    <div class="products">
      <?php foreach($place as $key => $value){ ?>
      <div class="product">
        <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['image']; ?>">
        <h3><?php echo $value['name']; ?></h3>
        <p><?php echo $value['description']; ?></p>
        <a href="place/?<?php echo $value['place']; ?>">Visit</a>
      </div>
      <?php } ?>
    </div>
  </section>

  <footer>
    <p>(c) Victor C.</p>
  </footer>
</body>
</html>

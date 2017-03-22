<?php include('database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>place</title>
  <link rel="stylesheet" href="../style.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>

<?php
if( isset($_GET["mountain"]) ){
  foreach($place[0] as $key => $value){
?>
  <div class="place">
    <img src="<?php echo "../".$place[0]['image']; ?>" alt="<?php echo $place[0]['image']; ?>">
    <h1><?php echo $place[0]['name']; ?></h1>
    <p><?php echo $place[0]['description']; ?></p>
    <a href="index">home</a>
  </div>
<?php
  break;
  }
}  else if( isset($_GET["sea"]) ){
  foreach($place[1] as $key => $value){
?>
  <div class="place">
    <img src="<?php echo "../".$place[1]['image']; ?>" alt="<?php echo $place[1]['image']; ?>">
    <h1><?php echo $place[1]['name']; ?></h1>
    <p><?php echo $place[1]['description']; ?></p>
    <a href="index">home</a>
  </div>
<?php
  break;
  }
}  else if( isset($_GET["forest"]) ){
  foreach($place[2] as $key => $value){
?>
  <div class="place">
    <img src="<?php echo "../".$place[2]['image']; ?>" alt="<?php echo $place[2]['image']; ?>">
    <h1><?php echo $place[2]['name']; ?></h1>
    <p><?php echo $place[2]['description']; ?></p>
    <a href="index">home</a>
  </div>
<?php
  break;
  }
} else {
  header('Location: ../index.php');
}
?>

</body>
</html>

<?php include 'module.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/jpg" href=".files/favicon.png"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600&family=Indie+Flower&family=Zeyada&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@400;500;600&family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
  <?php injectedModule('styles')?>
  <title>Personal Notes</title>
</head>
<body>
<div <?=theme_class('global-background')?>>

</div>

  <?php require_once("app/app.php")?>
  
</body>
</html>
<?php include_once('app\nav\nav.control.php') ?>
<?php include_once('app\app.module.php') ?>

<div <?= theme_class("app-container")?> >
  <img id="app-background" src=<?=background()?> >

  <?php injectedModule('aplication')?>

</div>
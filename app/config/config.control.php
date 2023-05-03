<?php
include_once('app/nav/nav.php');
include_once('.tools/theme.tools.php');

$page = "aspect";

if(isset($_GET["user"])){
  $page = "user";
};

if(isset($_GET["aspect"])){
  $page = "aspect";
};

?>

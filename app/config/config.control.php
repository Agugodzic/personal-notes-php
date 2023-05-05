<?php
include_once('app/nav/nav.php');
include_once('app\.data\data-services\user.service.php');

$page = "aspect";
$previewBackground = "";
$exitText = "Cancelar";
$background = get_background(); #background.service.php
$userId = $_SESSION['user_id'];
$username = $_SESSION['user_name'];
$email = $_SESSION['user_email'];
$userBackground = $_SESSION['user_background'];
$password= "•••••••••••••";

if(isset($_GET["user"]) || isset($_GET["username"]) || isset($_GET["email"]) || isset($_GET["password"]) ){
  $page = "user";
};

if( isset($_GET["username"])){
  $username = $_GET['username'];
  $_SESSION['user_name'] = $username;
  $userValue = ["username" => "'".$username."'"];
  editUser($userId,$userValue); #user.service.php
};

if( isset($_GET["email"])){
  $email= $_GET["email"];
  $_SESSION['user_email'] = $email;
  $emailValue = ["email" => "'".$email."'"];
  editUser($userId,$emailValue); #user.service.php
};

if(isset($_GET["password"])){
  $passwordValue = ["password" => $_GET["password"]];
  editUser($userId,$passwordValue); #user.service.php
};


if(isset($_GET["aspect"])){
  $page = "aspect";
};

if(isset($_GET["background"])){
  #background is from background.service.php
  $backgroundId = $_GET["background"];
  $backgroundValue = ["background"=>$backgroundId];
  $userId = $_SESSION['user_id'];

  if($backgroundId != 0){
    $_SESSION["user_background"] = $backgroundId;
    $userBackground = $_SESSION['user_background'];
    $previewBackground = $background[$backgroundId][0];
  }else{
    $_SESSION["user_background"] = 0;
    $previewBackground = "";
  };

  editUser($userId,$backgroundValue); #user.service.php
  $exitText = "Listo!";
};

function inputImageGenerator($images){
  foreach($images as  $key => $image){
    echo '<button onclick=selectBackground('.$key.',"'.$image[1].'") style="background:none;padding:0;border-style:none;"><img class="selector-image" src="'.$image[1].'"></button>';
  }
  echo '<button onclick=selectBackground(0,"") style="background:none;padding:0;border-style:none;margin:0;height:70px;">
          <div id="selector-none-container"><img '.theme_class("selector-none").' src="https://cdn-icons-png.flaticon.com/512/786/786384.png?w=360"></div>
        </button>';
}

?>

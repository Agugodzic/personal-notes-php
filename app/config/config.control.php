<?php
include_once('app/nav/nav.view.php');
include_once('app/.data/data-services/user.service.php');

$page = "aspect";
$previewBackground = "";
$exitText = "Cancelar";
$background = get_background(); #background.service.php
$userId = $_SESSION['user_id'];
$username = $_SESSION['user_name'];
$email = $_SESSION['user_email'];
$userBackground = $_SESSION['user_background'];
$userData = getUserById($userId);

$showPasswordImage = ".files/eye-white.png";
$showPasswordFunction = "showPassword()";
$showPasswordType ="password";

while($obj = db_fetch_adapter($userData)){
  $pw = $obj->password;
};

$password = $pw;

if(isset($_GET["user"]) || isset($_POST["username"]) || isset($_POST["email"]) || isset($_POST["password"]) ){
  $page = "user";
};

if(isset($_POST["username"])){
  $username = $_POST['username'];
  $_SESSION['user_name'] = $username;
  $userValue = ["username" => "'".$username."'"];
  editUser($userId,$userValue); #user.service.php
};

if(isset($_POST["email"])){
  $email= $_POST["email"];
  $_SESSION['user_email'] = $email;
  $emailValue = ["email" => "'".$email."'"];
  editUser($userId,$emailValue); #user.service.php
};

if(isset($_POST["password"])){
  $passwordValue = ["password" => "'".$_POST["password"]."'"];
  editUser($userId,$passwordValue); #user.service.php
};


if(isset($_GET["aspect"])){
  $page = "aspect";
};

if(isset($_GET["pview"])){
  $showPasswordImage = ".files/unview-white.png";
  $showPasswordFunction = "unviewPassword()";
  $showPasswordType ="text";
}else{
  $showPasswordImage = ".files/eye-white.png";
  $showPasswordFunction = "showPassword()";
  $showPasswordType ="password";
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

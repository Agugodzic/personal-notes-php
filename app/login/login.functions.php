<?php
require_once('app/notification/notification.php');
require_once("app\.data\data-services\user.service.php");
require_once('app/.data/entities/user.entity.php');
use userEntity\User;

$user = "";

function showMsj(){
  if(!empty($_GET['submit']) && empty($_GET['user']) && empty($_GET['password'])){
    echo '
    <div class="login-msj">
      <p class="login-msj-text">debe completar los campos</p>
    </div>
    ';
  }else if(!empty($_GET['submit']) && !empty($_GET['user']) && empty($_GET['password'])){
    echo '
    <div class="login-msj">
      <p class="login-msj-text">ingresa la contraseña</p>
    </div>
    ';
  }else if(!empty($_GET['submit']) && empty($_GET['user']) && !empty($_GET['password'])){
    echo '
    <div class="login-msj">
      <p class="login-msj-text">ingresa un nombre de usuario</p>
    </div>
    ';
  }
};

if(!empty($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['password'])){
  $user = $_POST['user'];
  $password = $_POST['password'];
  $userData = getUser($user,$password);
  $userId;
  
  while($obj = pg_fetch_object($userData)){
    $users[] = new User($obj->userid,$obj->username,$obj->email,$obj->password,$obj->theme,$obj->background);
    $userId = $obj->userid;
    $userName = $obj->username;
    $userEmail = $obj->email;
    $userTheme = $obj->theme;
    $userBackground = $obj->background;
  };
  
  if(empty($userId)){
    echo '
    <p class="login-msj-text">Usuario o contraseña incorrectos</p>
    <script>window.location.href ="login?notification=0";</script>
    ';
  }else{
    $_SESSION['user_id'] = $userId;
    $_SESSION['user_name'] = $userName;
    $_SESSION['user_email'] = $userEmail;
    $_SESSION['theme'] = $userTheme;
    $_SESSION['user_background'] = $userBackground;
    echo '
    <script>
    //alert("'.$_SESSION['theme'].'");
     window.location.href="/board";
    </script>
   ';
 };
};

if(isset($_GET['notification'])){
  if($_GET['notification']=1){
    notification('Usuario o contraseña incorrectos','Ok');
  }else if($_GET['notification']=0){
    notification('Usuario registrado correctamente','Ok');
  };
};


?>
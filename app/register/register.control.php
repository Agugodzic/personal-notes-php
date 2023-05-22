<?php
require_once("app\.data\data-services\user.service.php");
require_once('app/.data/entities/user.entity.php');
use userEntity\User;

$user = "";
$password = "";
$passwordRepeat = "";
$email = "";

function userVerify($user_){
  $get_user = getUserByUsername($user_);
  $isUsed = false;
  while($obj = pg_fetch_object($get_user)){
    $isUsed = true;
  };
  return !$isUsed;
}

function showMsj(){
  global $user;
  global $email;
  global $password;
  global $passwordRepeat;

  if(!empty($_GET['submit']) && empty($_GET['user']) && empty($_GET['password'])){
    echo '
    <div class="login-msj">
      <p class="login-msj-text">debe completar los campos</p>
    </div>
    ';

  };

  if(!empty($_GET['submit']) && !empty($_GET['user']) && empty($_GET['password'])){
    if(!userVerify($_GET['user'])){
      echo '
      <div class="login-msj">
        <p class="login-msj-text">Usuario no disponible.</p>
      </div>
      ';
    }else{
    echo '
    <div class="login-msj">
      <p class="login-msj-text">ingresa la contraseña</p>
    </div>
    ';}
  };

  if(!empty($_GET['submit']) && empty($_GET['user']) && !empty($_GET['password'])){
    echo '
    <div class="login-msj">
      <p class="login-msj-text">ingresa un nombre de usuario</p>
    </div>
    ';
  };
    
  if(!empty($_GET['submit']) && !empty($_GET['user']) && !empty($_GET['password']) && empty($_GET['email'])){
    if(!userVerify($_GET['user'])){
      echo '
      <div class="login-msj">
        <p class="login-msj-text">Usuario no disponible.</p>
      </div>
      ';
    }else{
    echo '
    <div class="login-msj">
      <p class="login-msj-text">ingresa una cuenta de email</p>
    </div>
    ';}
  };  

  if(!empty($_GET['submit']) && !empty($_GET['user']) && !empty($_GET['password']) && !empty($_GET['email']) && empty($_GET['passwordrepeat'])){
    echo '
    <div class="login-msj">
      <p class="login-msj-text">confirma la contraseña</p>
    </div>
    ';
  };  

  if(!empty($_GET['submit']) && !empty($_GET['user']) && !empty($_GET['password']) && !empty($_GET['email']) && !empty($_GET['passwordrepeat'])){
    $user = $_GET['user'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $passwordRepeat = $_GET['passwordrepeat'];

    if(userVerify($user)){
      $user = new User(null,$user,$email,$password,'default',0);
      $newUser = addUser($user); #user.service.php
      $userid=8;
      $fila = pg_fetch_object($newUser);
      echo '<script>location.href="/login"</script>';
    }else{
      echo '
        <div class="login-msj">
          <p class="login-msj-text">Usuario no disponible.</p>
        </div>
      ';
    };
  };  
};

?>
<?php
$user = "";
$password = "";
$email = "";

function showMsj(){
  if(!empty($_GET['submit']) && empty($_GET['user']) && empty($_GET['password'])){
    echo '
    <div class="login-msj">
      <p class="login-msj-text">debe completar los campos</p>
    </div>
    ';
  };

  if(!empty($_GET['submit']) && !empty($_GET['user']) && empty($_GET['password'])){
    echo '
    <div class="login-msj">
      <p class="login-msj-text">ingresa la contraseña</p>
    </div>
    ';
  };
  if(!empty($_GET['submit']) && empty($_GET['user']) && !empty($_GET['password'])){
    echo '
    <div class="login-msj">
      <p class="login-msj-text">ingresa un nombre de usuario</p>
    </div>
    ';
  };
};

if(isset($_GET['user'])){
  $user = $_GET['user'];
}
?>
<?php
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
  }else{
    if($_GET['user'] == 'agugo' && $_GET['password'] == '123123'){
      echo '<script>location.href="/board"</script>';
    }
  };
};

if(isset($_GET['user'])){
  $user = $_GET['user'];
}
?>
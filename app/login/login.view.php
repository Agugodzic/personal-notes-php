<?php include 'login.control.php' ?>

<div id="login-container">
<img id="login-background" src='.files\image7.jpg' >
<div id="logo-container">
  <img id="logo-img" src=".files/logo.png">
  <span id="logo-text">Personal Notes</span>
</div>

  <div id="login-window">
    <div id="login-form-container">
      <form method="post" action="" id="login-form">
        <h2 id="login-form-title">Log in</h2>
        <span>Usuario:</span> 
        <input name="user" value="<?= $user ?>" type="text"></input>
        <span>Contraseña:</span> 
        <input name="password" type="password"></input>
        <button class="login-button" id="login-form-button" value="iniciar sesion" name="submit">Ingresar</button>
      </form>
      <button class="login-button" id="login-form-button-register" onclick="location.href='/register'">Registrarse</button>
      <?php showMsj() ?>
    </div>
  </div>
</div>
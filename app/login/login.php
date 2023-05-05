<?php include 'login.functions.php' ?>

<div id="login-container">
<img id="login-background" src='.files\image3.jpg' >

  <div id="login-window">
    <div id="login-form-container">
      <form method="get" action="" id="login-form">
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
    <div id="login-info">
      <h3 id="login-info-title"><h3>
      <p id="login-info-text"></p>
    </div>
  </div>
</div>
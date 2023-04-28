<?php include 'register.functions.php' ?>

<div id="register-container">
  <div id="register-window">
    <div id="register-form-container">
      <form method="get" action="" id="login-form">
      <h2 id="register-form-title">Registrar usuario:</h2>
        <span class="register-span">Usuario:</span> 
        <input class="register-input" name="user" value="<?= $user ?>" type="text"></input>
        <span class="register-span">Email:</span> 
        <input class="register-input" name="email" type="email"></input>
        <span class="register-span">Contraseña:</span> 
        <input class="register-input" name="password" type="password"></input>
        <span class="register-span">Repite la contraseña:</span> 
        <input class="register-input" name="passwordrepeat" type="password"></input>

        <button class="register-button" id="register-form-button" value="register" name="submit">Registrarse</button>
      </form>
      <?php showMsj() ?>
      <a id="register-volver" href=/login>< Volver</a>
    </div>
  </div>
</div>
<?php include_once('app\nav\nav.functions.php') ?>

<div <?=theme_class("nav-container")?> >
  <div id="nav-menu">
    <img id="nav-side-button"<?=theme_class("nav-menu-image")?> class="menu-open" src="https://cdn-icons-png.flaticon.com/512/55/55003.png">
  </div>

  <div <?=theme_class("nav-logo")?> >Personal Notes</div>

  <div id="nav-log">
    <img id="nav-log-button" <?=theme_class("nav-log-image")?> src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png">
  </div>


  <div id="nav-side-menu" <?=theme_class("nav-side-menu")?> >

    <div id="nav-menu-options">	
      <a><p <?=theme_class("nav-menu-option")?> >Agregar nota</p></a>
      <a><p <?=theme_class("nav-menu-option")?> >Configuracion</p></a>
      <a onclick="switchTheme()"><p <?=theme_class("nav-menu-option")?> ><img <?=theme_class("nav-menu-theme-icon")?>  src=<?= '"'.themeIcon().'"' ?> >Tema</p></a>

      <a id="button-side-switch"><p id="nav-menu-close" <?=theme_class("nav-menu-option")?>>Cerrar menu</p></a>
    </div>
  </div>

  <div id="nav-user-menu"<?=theme_class("nav-user-menu")?> >
    <div <?=theme_class("nav-user-menu-options")?>>	
      <a><p <?=theme_class("nav-user-menu-option")?> >Configurar usuario</p></a>
      <a><p <?=theme_class("nav-user-menu-option")?>  onclick="cerrarSesion()">Cerrar sesion</p></a> 
    </div>

  </div>

</div>


<script src="app/nav/nav.script.js"></script>
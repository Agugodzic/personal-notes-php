
<div id="nav-container">
  <div id="nav-menu" onclick="switchMenu()" >
    <img id="nav-menu-image" class="menu-open" src="https://cdn-icons-png.flaticon.com/512/55/55003.png">
  </div>
  <div id="nav-logo">Personal Notes</div>
  <div id="nav-log" onclick="switchUserMenu()">
    <img id="nav-log-image" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png">
  </div>


  <div id="nav-side-menu">

    <div id="nav-menu-options">	
      <a><p class="nav-menu-option">Tema</p></a>
      <a><p class="nav-menu-option">Configuracion</p></a>
      <a><p class="nav-menu-option">Agregar nota</p></a> 

      <p onclick="switchMenu()" class="nav-menu-option nav-menu-close">Cerrar menu</p>
    </div>

  </div>


  <div id="nav-user-menu">

    <div id="nav-user-menu-options">	
      <a><p class="nav-user-menu-option">Configurar usuario</p></a>
      <a><p class="nav-user-menu-option" onclick="cerrarSesion()">Cerrar sesion</p></a> 
    </div>

  </div>

</div>


<script>

  function switchMenu(){
    let menu = document.getElementById("nav-side-menu");
      if(menu.style.visibility == "visible"){
        menu.style.visibility = "hidden";  
      }else{
        menu.style.visibility = "visible";
      }
  };

  function switchUserMenu(){
    let menu = document.getElementById("nav-user-menu");
      if(menu.style.visibility == "visible"){
        menu.style.visibility = "hidden";  
      }else{
        menu.style.visibility = "visible";
      }
  };

  function cerrarSesion(){
    <?php 
      $_SESSION = array();
      session_destroy();
      ?>
    window.location.href="/login"
  }
 
</script>
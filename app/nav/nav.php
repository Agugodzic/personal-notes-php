
<div id="nav-container">
  <div id="nav-menu" onclick="openMenu()" >
    <img id="nav-menu-image" class="menu-open" src="https://cdn-icons-png.flaticon.com/512/55/55003.png">
  </div>
  <div id="nav-logo">Personal Notes</div>
  <div id="nav-log">
    <img id="nav-log-image" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png">
  </div>


  <div id="nav-side-menu">

    <div id="nav-menu-options">	
      <a><p class="nav-menu-option">Tema</p></a>
      <a><p class="nav-menu-option">Configuracion</p></a>
      <a><p class="nav-menu-option">Agregar nota</p></a> 

      <p onclick="closeMenu()" class="nav-menu-option nav-menu-close">Cerrar menu</p>
    </div>

  </div>
</div>


<script>

  function openMenu(){
    var menu = document.getElementById("nav-side-menu");
    menu.style.visibility = "visible";
  };

  function closeMenu(){
    var menu = document.getElementById("nav-side-menu");
    menu.style.visibility = "hidden";
  };

</script>
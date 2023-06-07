<?php include_once('app/config/config.control.php')?>

<div <?=theme_class('config-container')?>>

  <img id="background-preview" src=<?= $previewBackground?>>
  <div <?=theme_class("background-preview-none")?>></div>

  <div <?=theme_class('config-window-container')?>> 
    <div id='config-window-buttons'>
      <p onclick="changePage('aspect')" <?=theme_class("config-button")?>>Aspecto</p>
      <p onclick="changePage('user')" <?=theme_class("config-button")?>>Datos de usuario</p>
    </div>

    <div id='config-window-controls'>

      <div id="config-page-aspect" <?=theme_class("config-page")?>>
        <h3 <?=theme_class("config-page-title")?>>Aspecto</h3>
        <div class="config-page-panel">
          <p <?=theme_class("config-page-subtitle")?>>Imagen de fondo:</p>
          <?php inputImageGenerator($background)?>
        </div>
        <div class="config-page-buttons">
          <button onclick="location.href='/board'" class="white-button"><?= $exitText ?></button>
          <button class="blue-button" onclick='saveBackground()'>Guardar</button>
        </div>
      </div>

      <div id="config-page-user" <?=theme_class("config-page")?>>
        <h3 <?=theme_class("config-page-title")?>>Datos de usuario</h3>
        <div class="config-page-panel">

          <p <?=theme_class("config-user-element")?> >
            <form method="post" class="config-user-form">
              <span class="config-user-element-name">Nombre de usuario:</span> 
              <input <?=theme_class("config-user-input")?> type="text" value="<?=$username?>" name="username"></input>
              <button <?=theme_class("config-user-form-button")?>>Guardar</button>
            </form>
          </p>

          <p <?=theme_class("config-user-element")?> >
            <form method="post" class="config-user-form">
              <span class="config-user-element-name">Email:</span> 
              <input <?=theme_class("config-user-input")?> type="text" value="<?=$email?>" name="email"></input>
              <button <?=theme_class("config-user-form-button")?>>Guardar</button>
            </form>
          </p>

          <p <?=theme_class("config-user-element")?> >
            <form method="post" class="config-user-form">
              <span class="config-user-element-name">Contraseña:</span> 
              <input <?=theme_class("config-user-input")?> type="<?=$showPasswordType?>" value="<?=$password?>" name="password"></input>
              <button type="button" onclick="<?=$showPasswordFunction?>" id="show-password-button"><img class="show-password-button-image" src="<?=$showPasswordImage?>"></button>
              <button <?=theme_class("config-user-form-button")?>>Guardar</button>
            </form>
          </p>
 
            <button class="red-button delete-account">Eliminar cuenta</button>

          <div class="config-page-buttons-user"> 
            <button onclick="location.href='/board'" class="blue-button">Listo!</button>
          </div>
        </div>
      </div>

      <div <?=theme_class("config-page")?>>
        <div class="config-page-panel">

        </div>
      </div>

    </div>
  </div>
  
  <script>
    let aspectPage = document.getElementById("config-page-aspect");
    let userPage = document.getElementById("config-page-user");
    var backgroundId = "<?= $userBackground ?>";

    function showPassword(){
      window.location.href ="config?user&pview";
    }

    function unviewPassword(){
      let URL = window.location.toString();
        URL = URL.substr(0, URL.length - 6);
        window.location = URL;
    }

    function selectBackground(id,url){
      let background = document.getElementById("background-preview");

      if(url.length > 1){
        background.style.visibility="visible";
        backgroundId = id;
        background.src=url;
        background.style.zIndex = 1000;
      }else{
        background.style.visibility="hidden";
        backgroundId = id;
      }
    };

    function saveBackground(){
      location.href="/config?background=" + backgroundId;
    }

    function changePage(page){
      if(page == "aspect"){
        aspectPage.style.display = "block";
        userPage.style.display = "none";    
      }else if(page == "user"){
        aspectPage.style.display = "none";
        userPage.style.display = "block";
      }
    }

    changePage("<?=$page?>");

  </script>
<?php include_once('app/config/config.control.php')?>

<div <?=theme_class('config-container')?>>

  <img id="background-preview" src=<?= $previewBackground?>>

  <div <?=theme_class('config-window-container')?>> 
    <div id='config-window-buttons'>
      <p onclick="changePage('aspect')" <?=theme_class("config-button")?>>Aspecto</p>
      <p onclick="changePage('user')" <?=theme_class("config-button")?>>Datos de usuario</p>
      <p <?=theme_class("config-button")?>>Notas</p>
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
    var backgroundId = 0;

    function selectBackground(id,url){
      let background = document.getElementById("background-preview");
      backgroundId = id;
      background.src=url;
      background.style.zIndex = 1000;
    };

    function saveBackground(){
      location.href="/config?background="+backgroundId;
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
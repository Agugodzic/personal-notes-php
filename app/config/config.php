<?php include_once('app/config/config.control.php')?>

<div <?=theme_class('config-container')?>>
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
          <img class="selector-image" src=".files\pexels-bri-schneiter-346529.jpg">
          <img class="selector-image" src=".files\pexels-carlos-oliva-3586966.jpg">
          <img class="selector-image" src=".files\pexels-cátia-matos-1072179.jpg">
          <img class="selector-image" src=".files\pexels-codioful-(formerly-gradienta)-7130560.jpg">
          <img class="selector-image" src=".files\pexels-suzukii-xingfu-872831.jpg">
          <img class="selector-image" src=".files\pexels-turgay-koca-14917279.jpg">
          <img class="selector-image" src=".files\pexels-walid-ahmad-847402.jpg">
        </div>
        <div clasS="config-page-buttons">
          <button class="white-button">Cancelar</button>
          <button class="blue-button">Guardar</button>
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
  
  <script src="app/config/config.script.js"></script>
  <script>changePage("<?=$page?>")</script>
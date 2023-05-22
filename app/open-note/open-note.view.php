<?php include 'open-note.control.php'?>

<div id="open-note-container">
  <form name="noteform" id="open-note-form">
    <input type="number" value = '<?= $openNoteId?>' style="visibility:hidden" name="id"></input>
    <div id="open-note">
      <textarea id="open-note-textarea" name="text"><?= $openNoteText ?></textarea>
      <p id="open-note-compartir-wsp">
        <img id="open-note-wsp-logo" src="https://seeklogo.com/images/W/whatsapp-logo-112413FAA7-seeklogo.com.png"></img>
        Enviar por wsp
      </p>
    </div>
    <div id="open-note-set-color">
      <label class="open-note-color-input" onclick = "changeColor('#f3ff45')"><input type="radio" class="yellow" value="yellow" name="color"></label>
      <label class="open-note-color-input" onclick = "changeColor('hsl(205, 100%, 78%)')"><input type="radio" class="blue" value="blue" name="color"></label>
      <label class="open-note-color-input" onclick = "changeColor('#b2ff96')"><input type="radio" class="green" value="green" name="color"></label>
      <label class="open-note-color-input" onclick = "changeColor('#ff8787')"><input type="radio" class="red" value="red" name="color"></label>
    </div>
    <button class="blue-button" type="submit">Guardar</button>
    <button id="add-note-close-buton" type="button" onclick="back()">Cerrar</button>
  </form>
  <form name="deleteform" id="open-note-delete-form">
    <input type="number" value = '<?= $openNoteId?>' style="display:none" name="id"></input>
    <input type="text" value="delete" name ="action" style="display:none"></input>
    <button id="open-note-delete-button"><img src="https://cdn-icons-png.flaticon.com/512/3687/3687412.png" id="open-note-delete-img"></button>
  </form>
</div>

<script>
  var noteFormElements = document.forms.noteform.elements;
  const color = '<?= $openNoteColor?>';

  initColor(color);
  noteFormElements.id.value = '<?php echo $openNoteId?>';


  function back(){
    location.href="/board";
  };

  function changeColor(color){
    var noteColor = document.getElementById("open-note");
    noteColor.style.backgroundColor = color;
  };

  function initColor(color){
    var noteColor = document.getElementById("open-note");
    noteFormElements.color.value='<?php echo $openNoteColor?>';
    
    switch(color){
      case "yellow":
        noteColor.style.backgroundColor = '#f3ff45';
        break;
      case "blue":
        noteColor.style.backgroundColor = 'hsl(205, 100%, 78%)';
        break;
      case "green":
        noteColor.style.backgroundColor = '#b2ff96';
        break;
      case "red":
        noteColor.style.backgroundColor = '#ff8787';
        break;
    };
  };

</script>
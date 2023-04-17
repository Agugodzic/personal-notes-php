<?php include 'open-note.functions.php'?>

<div id="open-note-container">
  <form name="noteform">
    <input type="number" style="visibility:hidden" name="id"></input>
    <div id="open-note">
      <textarea id="open-note-textarea" name="text" value=<= $openNoteText ?><?= $openNoteText ?></textarea>
    </div>
    <div id="open-note-set-color">
      <label class="open-note-color-input" onclick = "changeColor('#f3ff45')"><input type="radio" class="yellow" value="yellow" name="color"></label>
      <label class="open-note-color-input" onclick = "changeColor('hsl(205, 100%, 78%)')"><input type="radio" class="blue" value="blue" name="color"></label>
      <label class="open-note-color-input" onclick = "changeColor('#b2ff96')"><input type="radio" class="green" value="green" name="color"></label>
      <label class="open-note-color-input" onclick = "changeColor('#ff8787')"><input type="radio" class="red" value="red" name="color"></label>
    </div>
    <button id="add-note-save-buton" type="submit">Guardar</button>
    <button id="add-note-close-buton" type="reset" onclick="back()"> Cerrar</button>
  </form>
  <button id="open-note-delete-button" onclick="'<?php delete()?>'"><img src="https://cdn-icons-png.flaticon.com/512/3687/3687412.png" id="open-note-delete-img"></button>
</div>

<script>
  var formElements = document.forms.noteform.elements;
  const color = '<?php echo $openNoteColor?>';
  initColor(color);
  formElements.id.value = '<?php echo $openNoteId?>';

  function back(){
    location.href="/board";
  };

  function changeColor(color){
    var noteColor = document.getElementById("open-note");
    noteColor.style.backgroundColor = color;
  };

  function initColor(color){
    var noteColor = document.getElementById("open-note");
    formElements.color.value='<?php echo $openNoteColor?>';
    
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
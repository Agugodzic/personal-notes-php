<?php include 'open-note.functions.php'?>

<div id="open-note-container">
  <form>
  <div id="open-note">
    <textarea id="open-note-textarea" name="text" value=<= $openNoteText ?><?= $openNoteText ?></textarea>
  </div>
  <div id="open-note-set-color">
    <label class="open-note-color-input" onclick = "changeColor('#f3ff45')"><input type="radio" class="yellow" value="yellow" name="color"></label>
    <label class="open-note-color-input" onclick = "changeColor('hsl(205, 100%, 78%)')"><input type="radio" class="blue" value="blue" name="color"></label>
    <label class="open-note-color-input" onclick = "changeColor('#b2ff96')"><input type="radio" class="green" value="green" name="color"></label>
    <label class="open-note-color-input" onclick = "changeColor('#ff8787')"><input type="radio" class="red" value="red" name="color"></label>
  </div>
  <button id="open-note-save-buton" type="submit">Guardar</button>
  <button id="open-note-close-buton"> Cerrar</button>
</form>
</div>

<script>
  function changeColor(color){
    var noteColor = document.getElementById("open-note");
    noteColor.style.backgroundColor = color;
  }

  function initColor(color){
    var noteColor = document.getElementById("open-note");
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
  const color = '<?php echo $openNoteColor?>';
  initColor(color);
</script>
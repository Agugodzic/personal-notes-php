<div id="add-note-container">
  <form>
  <div id="add-note">
    <textarea id="add-note-textarea" name="text"></textarea>
  </div>
  <div id="add-note-set-color">
    <label class="add-note-color-input" onclick = "changeColor('#f3ff45')"><input type="radio" class="yellow" value="yellow" name="color" checked></label>
    <label class="add-note-color-input" onclick = "changeColor('hsl(205, 100%, 78%)')"><input type="radio" class="blue" value="blue" name="color"></label>
    <label class="add-note-color-input" onclick = "changeColor('#b2ff96')"><input type="radio" class="green" value="green" name="color"></label>
    <label class="add-note-color-input" onclick = "changeColor('#ff8787')"><input type="radio" class="red" value="red" name="color"></label>
  </div>
  <button id="add-note-save-buton" type="submit">Guardar</button>
  <button id="add-note-close-buton"> Cerrar</button>
</form>
</div>

<script>
  function changeColor(color){
    var noteColor = document.getElementById("add-note");
    noteColor.style.backgroundColor = color;
  }
</script>
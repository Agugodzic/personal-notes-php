<?php
include 'app/components/note/note.php';
include 'board.functions.php';

  if($addNote){
    include 'app/components/add-note/add-note.php';
  };
?>

<div id="board-container">
  <div id="board-notes-container">
  <?php 
      foreach($notes as & $note){
        note($note->id, $note->text, $note->color);
      };
    ?>
  </div>
  <a href="/board?add-note" id="new-note"><img id="new-note-icon" src="https://i.postimg.cc/qv6m2hrY/mas3.png"></a>
</div>


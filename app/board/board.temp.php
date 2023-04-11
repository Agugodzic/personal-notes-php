<?php
include 'app/note-miniature/note-miniature.php';
include 'board.functions.php';

  if($addNote){
    include 'app/add-note/add-note.php';
  };
  if($openNote){
    include 'app/open-note/open-note.php';
  };
?>

<div id="board-container">
  <div id="board-notes-container">
  <?php 
      foreach($notes as & $note){
        echo '<a href="/board?open-note&id='.$note->id.'&text='.$note->text.'&color='.$note->color.'">';
        noteMiniatureTemplate($note->id, $note->text, $note->color); #note-miniature.php
        echo '</a>';
      };
    ?>
  </div>
  <a href="/board?add-note" id="new-note"><img id="new-note-icon" src="https://i.postimg.cc/qv6m2hrY/mas3.png"></a>
</div>


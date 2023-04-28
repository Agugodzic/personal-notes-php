<?php
include 'app/note-miniature/note-miniature.php';
include 'board.functions.php';
include 'app/nav/nav.php';
require_once('app/notification/notification.php');

?>

<div id="board-container">
  <div id="board-notes-container">
  <?php 
      foreach($notes as &$note){
        echo '<a href="/board?open-note&id='.$note->noteid.'&text='.$note->text.'&color='.$note->color.'">';
        noteMiniatureTemplate($note->noteid, $note->text, $note->color); #note-miniature.php
        echo '</a>';
      };
    ?>
  </div>
  <a href="/board?add-note" id="new-note"><img id="new-note-icon" src="https://i.postimg.cc/qv6m2hrY/mas3.png"></a>
</div>


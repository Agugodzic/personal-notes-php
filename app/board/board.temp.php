<?php
include 'app/note-miniature/note-miniature.php';
include 'board.functions.php';
require_once('app/.data/data-services/note.service.php'); 
require_once('app/.data/entities/note.entity.php'); 
use noteEntity\Note;

  if($addNote){
    include 'app/add-note/add-note.php';
  };
  if($openNote){
    include 'app/open-note/open-note.php';
  };
  if($addData){
    $color="'".$_GET["color"]."'";
    $text="'".$_GET["text"]."'";
    $userid = 8;
    $note = new Note(null,$userid,$text,$color);
    addNote($note); #note.service.php
  };

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


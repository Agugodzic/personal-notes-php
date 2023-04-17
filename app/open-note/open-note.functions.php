<?php
require_once('app/.data/data-services/note.service.php');  

$openNoteColor;
$openNoteText;
$openNoteId = 0;

  if(isset($_GET['text'])){
    $openNoteText = $_GET['text'];
  };
  if(isset($_GET['color'])){
    $openNoteColor = $_GET['color'];
  };
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  };

  function delete(){
    global $openNoteId;
    $resp = deleteNote($openNoteId);
    if(isset($resp)){
      echo '<script> location.href="/board" </script>';
    };
  };
?>


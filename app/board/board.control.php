<?php
include 'app/note-miniature/note-miniature.php';
require_once('app/notification/notification.php');
require_once('app/.data/entities/note.entity.php');
require_once('app/.data/data-services/note.service.php');
require_once("app/.data/data-services/user.service.php");
require_once('app/.data/entities/user.entity.php');

use userEntity\User;
use noteEntity\Note;

$addNote = isset($_GET['add-note']);
$openNote = isset($_GET['open-note']);

if(isset($_SESSION['user_id'])){
  $userId = $_SESSION['user_id'];
};

if($addNote){
  include 'app/add-note/add-note.view.php';
};

if($openNote){
  include 'app/open-note/open-note.view.php';
};

if(isset($_GET['color']) && isset($_GET['text']) && isset($_GET["id"]) && !$addNote && !$openNote){
  $color="'".$_GET["color"]."'";
  $text="'".$_GET["text"]."'";
  $noteid = $_GET["id"];
  $note = new Note($noteid,$userId,$text,$color);
  editNote($note); #note.service.php
  //echo '<script> location.href="/board"</script>';

}else if(isset($_GET['color']) && isset($_GET['text']) && !$addNote && !$openNote){
  $color="'".$_GET["color"]."'";
  $text="'".$_GET["text"]."'";
  $note = new Note(null,$userId,$text,$color);  #note.entity.php
  addNote($note); #note.service.php
  echo '<script> location.href="/board"</script>';

}else if(isset($_GET['action']) && isset($_GET['id']) && !$addNote && !$openNote && !isset($_GET['text']) && !isset($_GET['color'])){
  $noteid = $_GET['id'];
  deleteNote($noteid); #note.service.php
  echo '<script> location.href="/board"</script>';

}else if(isset($_GET['theme'])){
  if($_SESSION['theme'] == 'default'){
    $_SESSION['theme'] = 'dark';

  }else{
    $_SESSION['theme'] = 'default';
  };

  editUser($_SESSION['user_id'],['theme'=> "'".$_SESSION['theme']."'"]); #user.service.php

  echo '<script>location.href="/board"</script>';
};

function extractId($object1,$object2){
  if ($object1 -> noteid == $object2 -> noteid) {
      return 0;
  }
  return ($object1 -> noteid < $object2 -> noteid) ? -1 : 1;
}

$notes = getUserNotes($userId); #note.service.php

?>
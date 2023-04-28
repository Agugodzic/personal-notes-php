<?php
require_once('app/.data/entities/note.entity.php');
require_once('app/.data/data-services/note.service.php');
use noteEntity\Note;

$addNote = isset($_GET['add-note']);
$openNote = isset($_GET['open-note']);
$userId = 8;

if(isset($_SESSION['user_id'])){
  $userId = $_SESSION['user_id'];
}

if($addNote){
  include 'app/add-note/add-note.php';
};

if($openNote){
  include 'app/open-note/open-note.php';
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
};

$notes = getUserNotes($userId); #note.service.php

?>
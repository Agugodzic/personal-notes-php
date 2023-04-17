<?php
require_once('app/.data/entities/note.entity.php');
require_once('app/.data/data-services/note.service.php');  
use noteEntity\Note;

$addNote = isset($_GET['add-note']);
$openNote = isset($_GET['open-note']);

if($addNote){
  include 'app/add-note/add-note.php';
};

if($openNote){
  include 'app/open-note/open-note.php';
};


if(isset($_GET['color']) && isset($_GET['text']) && isset($_GET['id']) && !$addNote && !$openNote){
  $color="'".$_GET["color"]."'";
  $text="'".$_GET["text"]."'";
  $userid = 8;
  $note = new Note($id,$userid,$text,$color);
  addNote($note); #note.service.php
  echo '<script> location.href="/board"</script>';

}else if(isset($_GET['color']) && isset($_GET['text']) && !$addNote && !$openNote){
  $color="'".$_GET["color"]."'";
  $text="'".$_GET["text"]."'";
  $userid = 8;
  $note = new Note(null,$userid,$text,$color);
  addNote($note); #note.service.php
  echo '<script> location.href="/board"</script>';
};

$notes = getUserNotes(8); #note.service.php


?>
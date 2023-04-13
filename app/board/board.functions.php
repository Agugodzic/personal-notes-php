<?php
require_once('app/.data/entities/note.entity.php');
require_once('app/.data/data-services/note.service.php');  
use noteEntity\Note;

$addNote = isset($_GET['add-note']);
$openNote = isset($_GET['open-note']);
$addData= isset($_GET['add-data']);


$notes = getUserNotes(8); #note.service.php


?>
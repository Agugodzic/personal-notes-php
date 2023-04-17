<?php
  require_once('app/.data/dbFunctions.php');
  require_once('app/.data/data-services/note.service.php'); 
  use noteEntity\Note;

 // db_connect(); #dbFunctions.php
  
  function addNote($note){
    $values = [ 
      'userid' => ($note -> userid),
      'text' => ($note -> text),
      'color' => ($note -> color)
    ];
    return db_insert('notes', $values); #dbFunctions.php
  };
  
  function deleteNote($noteid){
    return db_deleteWhere('notes', "noteid = ".$noteid); #dbFunctions.php
  };

  function deleteUserNotes($userid){
    return db_deleteWhere('notes',"userid = ". $userId); #dbFunctions.php
  };

  function editNote($noteid,$valuesList){
    return db_updateWhere('notes', $valuesList, "noteid = ". $noteId); #dbFunctions.php
  };

  function getUserNotes($userid){
    $queryResp = db_getWhere('notes', "userid = ". $userid); #dbFunctions.php
    $noteList = [];

    while($obj = pg_fetch_object($queryResp)){
      $noteList[] = new Note($obj->noteid,$obj->userid,$obj->text,$obj->color);
    };
    return $noteList;
  };

  function getNoteById($noteid){
    return db_getWhere('notes', "noteid  = ". $noteid); #dbFunctions.php
  };

  ?>

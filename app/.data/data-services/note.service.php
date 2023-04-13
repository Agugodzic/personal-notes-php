<?php
  require_once('app/.data/dbFunctions.php');

 // db_connect(); #dbFunctions.php
  
  function addNote($note){
    $values = [ 
      'noteid' => ($note -> userid),
      'userid' => ($note -> userid),
      'notetext' => ($note -> text),
      'notecolor' => ($note -> color)
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
    return db_getWhere('notes', "userid = ". $userid); #dbFunctions.php
  };

  function getNoteById($noteid){
    return db_getWhere('notes', "noteid  = ". $noteid); #dbFunctions.php
  }

  ?>
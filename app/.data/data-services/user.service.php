<?php
  require_once('app/.data/dbFunctions.php');

  db_connect() #dbFunctions.php

  function addUser($user){
    $values = [ 
      'username' => ($user -> username),
      'password' => ($user -> password),
      'email' => ($user -> email),
      'theme' => ($user -> theme)
    ];
    return db_insert('user', $values); #dbFunctions.php
  };
  
  function deleteUser($userid){
    return db_deleteWhere('user', "userid = ".$userid); #dbFunctions.php
  };

  function editUser($userid,$valuesList){
    return db_updateWhere('user', $valuesList, "userid = ". $userId); #dbFunctions.php
  };

  function getUser($userid){
    return db_getWhere('user', "userid = ". $userid); #dbFunctions.php
  };
?>
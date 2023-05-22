<?php
  require_once('app/.data/dbFunctions.php');

  db_connect(); #dbFunctions.php

  function addUser($user){
    $values = [ 
      'username' => "'".($user -> username)."'",
      'password' => "'".($user -> password)."'",
      'email' => "'".($user -> email)."'",
      'theme' => "'".($user -> theme)."'"
    ];
    return db_insert('users', $values); #dbFunctions.php
  };
  
  function deleteUser($userid){
    return db_deleteWhere('users', "userid = ".$userid); #dbFunctions.php
  };

  function editUser($userid,$valuesList){
    return db_updateWhere('users', $valuesList, "userid = ". $userid); #dbFunctions.php
  };

  function getUserById($userid){
    return db_getWhere('users', "userid = ". $userid); #dbFunctions.php
  };

  function getUser($username,$password){
    return db_getWhere('users', "username = '". $username  ."' AND password = '". $password."'"); #dbFunctions.php
  };

  function getUserByUsername($username){
    return db_getWhere('users', "username = '". $username."'"); #dbFunctions.php
  };

?>
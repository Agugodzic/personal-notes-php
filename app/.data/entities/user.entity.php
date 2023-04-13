<?php

class User{
  $userid;
  $username;
  $email
  $password;
  $theme;

  function __construct($username, $email, $password, $theme){
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->theme = $theme;
  }
}

?>
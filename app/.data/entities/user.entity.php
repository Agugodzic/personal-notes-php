<?php
namespace userEntity;

class User{
  public $userid;
  public $username;
  public $email;
  public $password;
  public $theme;
  public $background;

  function __construct($userid,$username,$email,$password,$theme,$background){
    $this->userid = $userid;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->theme = $theme;
    $this->background = $background;
  }
}

?>
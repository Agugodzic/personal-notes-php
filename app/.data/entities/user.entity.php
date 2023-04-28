<?php
namespace userEntity;

class User{
  public $userid;
  public $username;
  public $email;
  public $password;
  public $theme;

  function __construct($userid,$username,$email,$password,$theme){
    $this->userid = $userid;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->theme = $theme;
  }
}

?>
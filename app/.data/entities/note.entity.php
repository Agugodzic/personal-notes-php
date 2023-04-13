<?php

namespace noteEntity;

class Note{
  public $noteid;
  public $userid;
  public $color;
  public $text;

  function __construct($noteid,$userid,$color,$text){
    $this->noteid = $noteid;
    $this->userid=$userid;
    $this->color=$color;
    $this->text=$text;
  }
}

?>
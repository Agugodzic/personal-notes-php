<?php
namespace noteEntity;

class Note{
  public $noteid;
  public $userid;
  public $color;
  public $text;

  function __construct($noteid,$userid,$text,$color){
    $this->noteid = $noteid;
    $this->userid = $userid;
    $this->text = $text;
    $this->color = $color;
  }
}

?>
<?php
//$_SESSION['theme'] = "dark";

function theme_selector($selector){
  if(isset($_SESSION['theme'])){
    if($_SESSION['theme']=='default'){
      return '"'.$selector.'"';
    }else{
      $theme = '"'.$selector.'-'.$_SESSION['theme'].'"';
      return $theme;
    };
  }else{
    return '"'.$selector.'"';
  };
}

function theme_id($selector){
  if(isset($_SESSION['theme'])){
    if($_SESSION['theme'] =='default'){
      return 'id="'.$selector.'"';
    }else{
      $theme = 'id="'.$selector.'" class="'.$selector.'-'.$_SESSION['theme'].'"';
      return $theme;
    };
  }else{
      return 'id="'.$selector.'"';
    };
}

function theme_class($selector){
  if(isset($_SESSION['theme'])){
    if($_SESSION['theme'] =='default'){
      return 'class="'.$selector.'"';
    }else{
      $theme = 'class="'.$selector.' '.$selector.'-'.$_SESSION['theme'].'"';
      return $theme;
    };
  }else{
    return 'class="'.$selector.'"';
  };
}
?>

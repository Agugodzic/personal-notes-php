<?php
  function route_uriForLevel($level){
      $uri = $_SERVER['REQUEST_URI'];
      $cleanUri = explode('?',$uri)[0]; 
      $uri = explode('/',$cleanUri)[$level]; 
      return $uri;
  };

  function route_uriArray(){
    $uri = $_SERVER['REQUEST_URI'];
    $cleanUri = explode('?',$uri)[0]; 
    $uriArray = explode('/',$cleanUri); 
    return $uriArray;
  };
?>
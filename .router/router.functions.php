<?php
  function route_uriForLevel($level){
      $uri = $_SERVER['REQUEST_URI'];
      $cleanUri = explode('?',$uri)[0];
      $uriList = explode('/',$cleanUri); /*[$level]*/
      if(count($uriList) -1 >= $level){
        $levelUri = $uriList[$level];
        return '/'.$levelUri;
      }else{
        return "/";
      };
  };

  function route_uriArray(){
    $uri = $_SERVER['REQUEST_URI'];
    $cleanUri = explode('?',$uri)[0]; 
    $uriArray = explode('/',$cleanUri); 
    return $uriArray;
  };
?>
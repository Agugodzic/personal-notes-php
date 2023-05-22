<?php
function themeIcon(){
  $themeIconUrl = "";

  if(isset($_SESSION['theme'])){
    if($_SESSION['theme'] == 'dark'){
      $themeIconUrl = ".files/moon-dark.png";
    }else{
      $themeIconUrl = ".files/sun.png";
    };
  };

  return $themeIconUrl;
};

function switchTheme(){
  if(isset($_SESSION['theme'])){
    if($_SESSION['theme'] == 'dark'){
      $_SESSION['theme'] = 'default';
    }else{
      $_SESSION['theme'] = 'dark';
    };
};
};

/* Used by: nav.php*/ 
?>

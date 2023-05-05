<?php
function themeIcon(){
  $themeIconUrl = "";

  if(isset($_SESSION['theme'])){
    if($_SESSION['theme'] == 'dark'){
      $themeIconUrl = "https://uxwing.com/wp-content/themes/uxwing/download/nature-and-environment/moon-icon.png";
    }else{
      $themeIconUrl = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgZiGEtOiPTTrnIAqiofFzbuK-C3PFRwV-qw&usqp=CAU";
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

<?php
include_once('app/nav/nav.php');
include_once('.tools/theme.tools.php');
require_once('app/notification/notification.php');

$page = "aspect";
$previewBackground = "";
$exitText = "Cancelar";

if(isset($_GET["user"])){
  $page = "user";
};

if(isset($_GET["aspect"])){
  $page = "aspect";
};



$background = [
  1 => ".files/pexels-bri-schneiter-346529.jpg",
  2 => ".files/pexels-carlos-oliva-3586966.jpg",
  3 => ".files/pexels-cátia-matos-1072179.jpg",
  4 => ".files/pexels-codioful-(formerly-gradienta)-7130560.jpg",
  5 => ".files/pexels-suzukii-xingfu-872831.jpg",
  6 => ".files/pexels-turgay-koca-14917279.jpg",
  7 => ".files/pexels-walid-ahmad-847402.jpg"
];

if(isset($_GET["background"])){
  $backgroundId = $_GET["background"];
  if($backgroundId != 0){
    $_SESSION["user_background"] = $background[$backgroundId];
    $previewBackground = $background[$backgroundId];
  }else{
    $_SESSION["user_background"] = "";
    $previewBackground = "";
  };
  $exitText = "Listo!";

};



function inputImageGenerator($images){
  foreach($images as  $key => $image){
    echo '<button onclick=selectBackground('.$key.',"'.$image.'") style="background:none;padding:0;border-style:none;"><img class="selector-image" src="'.$image.'"></button>';
  }
  echo '<button style="background:none;padding:0;border-style:none;margin:0;height:70px;">
          <div id="selector-none-container"><img '.theme_class("selector-none").' src="https://cdn-icons-png.flaticon.com/512/786/786384.png?w=360"></div>
        </button>';
}

?>

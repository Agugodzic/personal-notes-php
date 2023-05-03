<?php 
  $noteStyle;

  function noteMiniatureTemplate($id,$text,$color){
    global $noteStyle;

    switch($color){
      case 'red':
        $noteStyle = 'red-note';
        break;
      case 'green':
        $noteStyle = 'green-note';
        break;
      case "blue":
        $noteStyle = 'blue-note';
        break;
      case "yellow":
        $noteStyle = 'yellow-note';
        break;
    };

    echo'
      <div class="note-container '.$noteStyle.'">
        <div class="note-text">'.$text.'</div>
      </div>
    ';  
  };
?>


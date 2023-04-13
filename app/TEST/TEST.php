<?php 
include 'app/nav/nav.php';
require_once('app/.data/entities/note.entity.php'); 
require_once('app/.data/data-services/note.service.php'); 

use noteEntity\Note;
?>

<div id=testarea>
  <button class="button1" onclick="function1()">Test 1</button>
  <button class="button2" onclick="function2()">Test 2</button>
  <button class="button1" onclick="function3()">Test 3</button>
  <button class="button2" onclick="function4()">Test 4</button>
  <button class="button1" onclick="function5()">Test 5</button>
  <button class="button2" onclick="function6()">Test 6</button>
  
  <div id="test-result">
   
  <?php 
  
    $notes = getUserNotes(8); #note.service.php
    foreach($notes as $note){
      echo '<p style="color:black">'.$note->text.'</p>';
    }


  ?>


  </div>
  <script>
    function function1(){

    }
    function function2(){
      
    }
    function function3(){
      
    }
    function function4(){
      
    }
    function function5(){
      
    }
    function function6(){
      
    }

  </script>
  
</div>
<div id=app-container>
<?php 
 /* require_once('app/app.module.php');
  appInjected('view');*/
    
  if(!isset($_SESSION['user_id'])||empty($_SESSION['user_id'])){
    echo '<script>location.href="/login"</script>';
  }

  include 'app/board/board.temp.php';
?>
</div>
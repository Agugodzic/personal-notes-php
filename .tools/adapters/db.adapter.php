<?php

function db_fetch_adapter($db_data){
  require_once('.environments/dbConfig.php');
  $db_manager="mysql";

  if($db_manager == 'mysql') {
    return mysqli_fetch_object($db_data);
  }else if($db_manager == 'pgsql'){
    return pg_fetch_object($db_data);
  }
};

?>
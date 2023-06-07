<?php
  function db_connect(){
    include '.environments/dbConfig.php';
    /*
    $conection = new PDO("'pgsql:".
      "host=".$DB_HOST."; ".
      "dbname=".$DB_TABLE."' ".
      "port=".$DB_PORT."; ".
      $DB_USERNAME.", ".
      $DB_PASSWORD." "
      )or die( 
        "Error al conectar: ".pg_last_error() 
      );
    return $connection;


$connection = pg_connect(
  "host=".$DB_HOST." ".
  "dbname=".$DB_NAME." ".
  "user=".$DB_USERNAME." ".
  "password=".$DB_PASSWORD." "
  )or die( 
    "Error al conectar: ".pg_connect_error()
  );
return $connection;
};*/

  $connection = mysqli_connect($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_NAME)or die( 
        "Error al conectar: ".mysqli_connect_error()
      );
    return $connection;
  };

  function db_insert($tableName,$values){
    /*
      $values = [  
        'column1' => value1,
        'column2' => 'value2',
        'colum3' => 'value3',
        ...
      ]
    */
    $columns_sql = "";
    $values_sql = "";
    $count = 1;

    foreach($values as $column => $value){
      if(count($values) > $count){
        $columns_sql.= $column. ",";
        $values_sql.= $value. ",";
      }else{
        $columns_sql.= $column;
        $values_sql.= $value;
      };
      $count += 1;
    };

    $sql = "INSERT INTO ".$tableName." (".$columns_sql.") VALUES (".$values_sql.")";
    return mysqli_query(db_connect(),$sql);
  };

  function db_updateWhere($tableName,$values,$condition){
    $count = 1;
    $updates ="";
    
    foreach($values as $column => $value){
      if(count($values) > $count){
        $updates.= $column. " = ";
        $updates.= $value. " , ";
      }else{
        $updates.= $column. " = ";
        $updates.= $value;
      };
      $count += 1;
    };
    $sql = "UPDATE ".$tableName." SET ".$updates." WHERE ". $condition;
    
    return mysqli_query(db_connect(),$sql);
  };

  function db_getColumnsWhere($table,$columns,$condition){
    /*
     $columns = [ 'column1','column2','column3',... ];
    */
    $columns_sql = "";
    $count = 1;

    foreach($columns as $column){
      if(count($columns) > $count){
        $columns_sql.= $column. ",";
      }else{
        $columns_sql.= $column;
      };
      $count += 1;
    };

    $sql = "SELECT (".$columns_sql.") FROM ". $tableName ." WHERE ". $condition;
    return mysqli_query(db_connect(),$sql);/*6347724 */
  };

  function db_deleteWhere($tableName,$condition){
    $sql = "DELETE FROM ". $tableName ." WHERE ". $condition ;
    return mysqli_query(db_connect(),$sql);
  };

  function db_getWhere($tableName,$condition){
    $sql = "SELECT * FROM ". $tableName ." WHERE ". $condition;
    return mysqli_query(db_connect(),$sql);
  };


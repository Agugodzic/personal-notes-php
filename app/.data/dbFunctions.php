<?php
  include '.environments/dbConfig.php';
  db_connect();

  function db_connect($user, $pass, $host, $dbname){
    $conection = pg_connect( 
      "user=".$user." ".
      "password=".$pass." ".
      "host=".$host." ".
      "dbname=".$dbname
      )or die( 
        "Error al conectar: ".pg_last_error() 
      );
    return $connection;
  }

  function db_insert($table,$columns,$values){
    $columns_sql = "";
    $values_sql = "";
    $count_columns = 0;
    $count_values = 0;

    foreach($columns as &$column){
      if(count($columns) < $count_columns){
        $columns_sql.= $column. ",";
      }else{
        $columns_sql.= $column;
      };
      $count_columns = $count_columns + 1;
    };

    foreach($values as &$value){
      if(count($values) < $count_values){
        $values_sql.= $value. ",";
      }else{
        $values_sql.= $value;
      };
      $count_values = $count_values + 1;
    };

    $sql = "INSERT INTO ".$table." ('".$columns_sql."') VALUES('".$values_sql."')";
    return pg_query($connection,$sql);
  };


  function db_update($table,$columns,$values){
    $columns_sql = "";
    $values_sql = "";
    $count_columns = 0;
    $count_values = 0;

    foreach($columns as &$column){
      if(count($columns) < $count_columns){
        $columns_sql.= $column. ",";
      }else{
        $columns_sql.= $column;
      };
      $count_columns = $count_columns + 1;
    };

    foreach($values as &$value){
      if(count($values) < $count_values){
        $values_sql.= $value. ",";
      }else{
        $values_sql.= $value;
      };
      $count_values = $count_values + 1;
    };

    $sql = "INSERT INTO ".$table." ('".$columns_sql."') VALUES('".$values_sql."')";
    return pg_query($connection,$sql);
  };


  function db_delete($table,$columns,$values){
    $columns_sql = "";
    $values_sql = "";
    $count_columns = 0;
    $count_values = 0;

    foreach($columns as &$column){
      if(count($columns) < $count_columns){
        $columns_sql.= $column. ",";
      }else{
        $columns_sql.= $column;
      };
      $count_columns = $count_columns + 1;
    };

    foreach($values as &$value){
      if(count($values) < $count_values){
        $values_sql.= $value. ",";
      }else{
        $values_sql.= $value;
      };
      $count_values = $count_values + 1;
    };

    $sql = "INSERT INTO ".$table." ('".$columns_sql."') VALUES('".$values_sql."')";
    return pg_query($connection,$sql);
  };


  function db_get($table,$columns,$values){
    $columns_sql = "";
    $values_sql = "";
    $count_columns = 0;
    $count_values = 0;

    foreach($columns as &$column){
      if(count($columns) < $count_columns){
        $columns_sql.= $column. ",";
      }else{
        $columns_sql.= $column;
      };
      $count_columns = $count_columns + 1;
    };

    foreach($values as &$value){
      if(count($values) < $count_values){
        $values_sql.= $value. ",";
      }else{
        $values_sql.= $value;
      };
      $count_values = $count_values + 1;
    };

    $sql = "INSERT INTO ".$table." ('".$columns_sql."') VALUES('".$values_sql."')";
    return pg_query($connection,$sql);
  };










  /*
  function delete(){};
  function update(){};
  function select(){};
  function selectAll(){};
  function updateAll(){};

    class Db_Class{
        private $table_name = 'user';
        function createUser()
        {
             $sql = "INSERT INTO PUBLIC.".$this->table_name."  
             (name,email,mobile_no,address) "."VALUES('".
             $this->cleanData($_POST['name'])."','".
             $this->cleanData($_POST['email'])."','".
             $this->cleanData($_POST['phone'])."','".
             $this->cleanData($_POST['address'])."')";
            return pg_affected_rows(pg_query($sql));
        }

        function getUsers()
        {             
            $sql ="select *from public." . $this->table_name . "  
            ORDER BY id DESC";
           return pg_query($sql);
        } 

        function getUserById(){    
  
            $sql ="select *from public." . $this->table_name . "  
            where id='".$this->cleanData($_POST['id'])."'";
            return pg_query($sql);
        } 

       function deleteuser()
       {    
  
            $sql ="delete from public." . $this->table_name . "  
            where id='".$this->cleanData($_POST['id'])."'";
            return pg_query($sql);
       } 

       function updateUser($data=array())
       {       
     
          $sql = "update public.user set name='".
          $this->cleanData($_POST['name'])."',email='".
          $this->cleanData($_POST['email'])."', phone='".
          $this->cleanData($_POST['phone'])."',address='".
          $this->cleanData($_POST['address'])."' where id = '".
          $this->cleanData($_POST['id'])."' ";
          return pg_affected_rows(pg_query($sql));        
       }
       function cleanData($val)
       {
         return pg_escape_string($val);
       }
       
      }*/

?>
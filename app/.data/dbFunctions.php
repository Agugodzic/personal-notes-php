<?php
  function dbConnect( $usuario, $pass, $host, $bd ){
    $conection = pg_connect( 
      "user=".$usuario." ".
      "password=".$pass." ".
      "host=".$host." ".
      "dbname=".$bd
      )or die( 
        "Error al conectar: ".pg_last_error() 
      );
    return $conexion;
  }
?>
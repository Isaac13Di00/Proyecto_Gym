<?php
  $HOST_DB = "localhost";
  $USER_DB = "root";
  $PASS_DB = "";
  $NAME_DB = "bd_proyecto_gym";
  $mysqli = new mysqli($HOST_DB, $USER_DB, $PASS_DB, $NAME_DB);
  if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
?>
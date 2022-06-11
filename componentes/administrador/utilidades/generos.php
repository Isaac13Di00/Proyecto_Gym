<?php
  require "./conexion.php";
  $datos = array();
  $result = $mysqli->query("SELECT * FROM usuario");
  $total = $result->num_rows;
  $result = $mysqli->query("SELECT * FROM usuario WHERE sexo = 'Hombre'");
  $datos[0] = $result->num_rows;
  $result = $mysqli->query("SELECT * FROM usuario WHERE sexo = 'Mujer'");
  $datos[1] = $result->num_rows;
  $result = $mysqli->query("SELECT * FROM usuario WHERE sexo = 'Otro'");
  $datos[2] = $result->num_rows;
  $datos[0] = (round((($datos[0]*100)/$total), 2));
  $datos[1] = (round((($datos[1]*100)/$total), 2));
  $datos[2] = (round((($datos[2]*100)/$total), 2));
  echo json_encode($datos);
?>
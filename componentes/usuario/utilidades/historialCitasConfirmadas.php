<?php
  session_start();
  require "conexion.php";
  $y = array();
  $x = array();
  $datos = array(); 
  $idUsuario = $_SESSION['id'];
  for ($i=0; $i < 12; $i++) { 
    $result = $mysqli->query("SELECT citas.fecha FROM citas WHERE citas.idUsuario = $idUsuario AND MONTH(citas.fecha) = $i+1 AND citas.asistencia = 1");
    array_push($datos, $result->num_rows);
  }
  echo json_encode($datos);
?>
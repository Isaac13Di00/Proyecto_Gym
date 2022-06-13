<?php
  include "conexion.php";
  $mes = date("m");
  try{
    $resultado = $mysqli->query("SELECT COUNT(*) FROM citas WHERE citas.asistencia = 0 AND month(citas.fecha) = $mes; ");
    $resultado = $resultado->fetch_assoc();
    echo $resultado['COUNT(*)'];
  } catch(PDOException $r){
    echo $r;
  }
?>
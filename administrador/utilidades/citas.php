<?php
  include_once "./conexion.php";
  include "./funciones.php";
  $fecha = date('d/m/y');
  $citas = citasDia($mysqli, $fecha);
  
?>
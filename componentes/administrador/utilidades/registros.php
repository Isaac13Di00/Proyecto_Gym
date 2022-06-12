<?php
  require "./conexion.php";
  $y = array();
  $x = array();
  $datos = array(); 
  for ($i=0; $i < 12; $i++) { 
    $result = $mysqli->query("SELECT * FROM usuario WHERE MONTH(miembro_desde) = $i+1");
    $y[$i] = $result->num_rows;
    $x[$i] = $i+1;
    $point = array("valorx" => $x, "valory" => $y);
  }
  array_push($datos, $point);
  echo json_encode($datos);
?>
<?php
  function citasDia($conexion, $fecha){
    $resultado = $conexion->query("SELECT * FROM citas WHERE fecha = '$fecha' ");
    $resultado = $resultado->fetch_assoc();
    return $resultado;
  }
  function hashPass($unHash){
    $option = array('cost' => 10);
    return password_hash($unHash, PASSWORD_BCRYPT, $option);
  }
  
?>
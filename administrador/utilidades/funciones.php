<?php
  function citasDia($conexion, $fecha){
    $resultado = $conexion->query("SELECT * FROM citas WHERE fecha = '$fecha' ");
    $resultado = $resultado->fetch_assoc();
    return $resultado;
  }
?>
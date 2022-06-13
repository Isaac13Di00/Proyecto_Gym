<?php
  include "conexion.php";
  $mes = date("m");
  try{
    $resultado = $mysqli->query("SELECT COUNT(*) FROM usuario WHERE month(usuario.miembro_desde) = $mes");
    $resultado = $resultado->fetch_assoc();
    echo $resultado['COUNT(*)'];
  } catch(PDOException $r){
    echo $r;
  }
?>
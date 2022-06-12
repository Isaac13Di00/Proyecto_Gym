<?php
  include "../componentes/utilidades/conexion.php";
  include "../componentes/utilidades/funciones.php";
  $r = $mysqli->query("SELECT contra FROM usuario WHERE email = 'isaacA@gmail.com'");
  $r = $r->fetch_assoc();
  if(verifyPass("isaac", $r['contra'])){
    echo "si";
  }else{
    echo "no";
  }
?>
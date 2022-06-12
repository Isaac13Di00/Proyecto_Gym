<?php
  include "conexion.php";
  session_start();
  $datos = $mysqli->query("SELECT * FROM administrador WHERE id = 1");
  $datos = $datos->fetch_assoc();
  $_SESSION['login'] = "administrador";
  $_SESSION['id'] = $datos['id'];
  $_SESSION['area'] = $datos['area'];
  $_SESSION['sexo'] = $datos['sexo'];
  $_SESSION['fecha_nacimiento'] = $datos['fecha_nacimiento'];
  $_SESSION['tipo_sangre'] = $datos['tipo_sangre'];
  $_SESSION['telefono'] = $datos['telefono'];
  $_SESSION['correo'] = $datos['email'];
  $_SESSION['calle'] = $datos['calle'];
  $_SESSION['colonia'] = $datos['colonia'];
  $_SESSION['cp'] = $datos['cp'];
  $_SESSION['nombre'] = $datos['nombre'];
  header("Location: /Proyecto_Gym/componentes/administrador/perfil.php");
?>
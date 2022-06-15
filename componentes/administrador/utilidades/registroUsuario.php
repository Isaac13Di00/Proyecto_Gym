<?php
  session_start();
  include "conexion.php";
  include "funciones.php";
  $membresia = $_POST['membresia'];
  $miembro_desde = date('y/m/d');
  $vigencia = $_POST['vigencia'];
  $sexo = $_POST['sexo'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $tipo_sangre = $_POST['tipo_sangre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['email'];
  $contra = hashPass($_POST['contra']);
  $calle = $_POST['calle'];
  $colonia = $_POST['colonia'];
  $cp = $_POST['cp'];
  $nombre = $_POST['nombre'];
  $fk_idAdministrador = $_SESSION['id'];
  if ($membresia != null AND $miembro_desde != null AND $vigencia != null AND $sexo != null AND $fecha_nacimiento != null AND $tipo_sangre != null AND $telefono != null AND $correo != null AND $contra != null AND $calle != null AND $colonia != null AND $cp != null AND $nombre != null) {
    try {
      $sql = "INSERT INTO `usuario`(`membresia`, `miembro_desde`, `vigencia`, `sexo`, `fecha_nacimiento`, `tipo_sangre`, `telefono`, `email`, `contra`, `calle`, `colonia`, `cp`, `nombre`, `fk_idAdministrador`) VALUES ('$membresia','$miembro_desde','$vigencia','$sexo','$fecha_nacimiento','$tipo_sangre','$telefono','$correo','$contra','$calle','$colonia','$cp','$nombre','$fk_idAdministrador')";
      if ($mysqli->query($sql) === TRUE) {
        echo "<script>
        alert('Registro realizado.');
        window.location= '../consulSocio.php' </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
      }
    } catch (PDOException $e) {
      echo $e;
    }
  }else{
    echo "<script>
        alert('Ingrese todos los datos.');
        window.location= '../regisSocio.php' </script>";
  }
?>
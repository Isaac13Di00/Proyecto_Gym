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
  try {
    $sql = "INSERT INTO `usuario`(`membresia`, `miembro_desde`, `vigencia`, `sexo`, `fecha_nacimiento`, `tipo_sangre`, `telefono`, `email`, `contra`, `calle`, `colonia`, `cp`, `nombre`, `fk_idAdministrador`) VALUES ('$membresia','$miembro_desde','$vigencia','$sexo','$fecha_nacimiento','$tipo_sangre','$telefono','$correo','$contra','$calle','$colonia','$cp','$nombre','$fk_idAdministrador')";
    if ($mysqli->query($sql) === TRUE) {
      echo "<script>
		        alert('Registro realizado.');
		        window.location= '../regisSocio.php' </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  } catch (PDOException $e) {
    echo $e;
  }
?>
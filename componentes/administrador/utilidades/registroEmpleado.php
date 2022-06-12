<?php
  session_start();
  include "conexion.php";
  include "funciones.php";
    $area = $_POST['area'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $tipo_sangre = $_POST['tipo_sangre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['email'];
    $contra = hashPass($_POST['contra']);
    $calle = $_POST['calle'];
    $colonia = $_POST['col'];
    $cp = $_POST['cp'];
    $nombre = $_POST['nombre'];
  try {
    $sql = "INSERT INTO `administrador`(`area`, `sexo`, `fecha_nacimiento`, `tipo_sangre`, `telefono`, `email`, `contra`, `calle`, `colonia`, `cp`, `nombre`) VALUES ('$area','$sexo','$fecha_nacimiento','$tipo_sangre','$telefono','$correo','$contra','$calle','$colonia','$cp','$nombre')";
    if ($mysqli->query($sql) === TRUE) {
      echo "<script>
		        alert('Registro realizado.');
		        window.location= '../regisEmple.php' </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  } catch (PDOException $e) {
    echo "error" . $e;
  }
?>
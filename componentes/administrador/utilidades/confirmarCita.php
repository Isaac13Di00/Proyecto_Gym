<?php
  session_start();
  include "conexion.php";
  $idAdministrador = $_POST['idAdministrador'];
  $idCita = $_POST['idCita'];
  try {
    $sql = "INSERT INTO `asistencia`(`idCita`, `idAdministrador`, `asistencias`) VALUES ('$idCita','$idAdministrador','1')";
    if ($mysqli->query($sql) === TRUE) {
      echo "<script>
		        alert('Registro realizado.');
		        window.location= '../citas.php' </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  } catch (PDOException $e) {
    echo $e;
  }try {
    $sql = "INSERT INTO `asistencia`(`idCita`, `idAdministrador`, `asistencias`) VALUES ('$idCita','$idAdministrador','1')";
    if ($mysqli->query($sql) === TRUE) {
      echo "<script>
		        alert('Registro realizado.');
		        window.location= '../citas.php' </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  } catch (PDOException $e) {
    echo $e;
  }
  header('Location: /Proyecto_Gym/componentes/administrador');
?>
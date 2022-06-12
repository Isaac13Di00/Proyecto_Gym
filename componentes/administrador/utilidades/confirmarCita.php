<?php
  session_start();
  include "conexion.php";
  $idAdministrador = $_POST['idAdministrador'];
  $idCita = $_POST['idCita'];
  try {
    $sql = "INSERT INTO `asistencia`(`idCita`, `idAdministrador`, `asistencias`) VALUES ('$idCita','$idAdministrador','1')";
    if (!$mysqli->query($sql) === TRUE) {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $sql = "UPDATE citas SET asistencia = 1 WHERE id = $idCita";
    if (!$mysqli->query($sql) === TRUE) {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  } catch (PDOException $e) {
    echo "<script>
		        alert('Confirmacion no realizada con exito.');
		        window.location= '../citas.php' </script>";
  }
  echo "<script>
		        alert('Confirmacion realizada con exito.');
		        window.location= '../citas.php' </script>";
?>
<?php
  session_start();
  include "conexion.php";
  $fecha = date("y/m/d", strtotime($_POST['fecha']));
  $fecha_actual = date("y/m/d");
  if ($fecha < $fecha_actual) {
    echo "<script>
		        alert('Realice una cita para otro dia.');
		        window.location= '../agendar.php' </script>";
  }
  $id = $_SESSION['id'];
  try {
    $sql = "INSERT INTO `citas`(`idUsuario`, `fecha`, `asistencia`) VALUES ('$id','$fecha','0')";
    if ($mysqli->query($sql) === TRUE) {
      echo "<script>
		        alert('Cita realizado.');
		        window.location= '../agendar.php' </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  } catch (PDOException $e) {
    echo "error" . $e;
  }
?>
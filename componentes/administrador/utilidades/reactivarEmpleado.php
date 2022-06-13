<?php
  include "conexion.php";
  $email = $_POST['email'];
  try {
    $sql = "UPDATE administrador SET estado = 1 WHERE email = '$email'";
    if ($mysqli->query($sql) === TRUE) {
      echo "<script>
		        alert('Registro reactivado.');
		        window.location= '../consulEmple.php' </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  } catch (PDOException $e) {
    echo "error" . $e;
  }
?>
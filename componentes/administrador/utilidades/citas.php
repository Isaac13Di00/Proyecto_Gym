<?php
  include "conexion.php";
  $resultado = $mysqli->query("SELECT citas.id as id, usuario.nombre as nombre, citas.fecha as fecha, citas.asistencia as asistencia FROM citas JOIN usuario ON citas.idUsuario = usuario.id");
  while ($datos = mysqli_fetch_array($resultado)) {
    $idAdministrador = $_SESSION['id'];
    $idCita = $datos['id'];
    $fecha = $datos['fecha'];
    $asistencia = $datos['asistencia'];
    if ($asistencia != 1) {
      echo "
          <tr>
            <td>$idCita</td>
            <td>$nombre</td>
            <td>$fecha</td>
            <td>$asistencia</td>
            <td>
              <form action='confirmarCita.php' metoth='POST'>
                <button class = 'btn'>Confirmar asistencia</button>
                <input type='hidden' value='$idCita' name='idCita'>
                <input type='hidden' value='$idAdministrador' name='idAdministrador'>
              </form>
            </td>
          </tr>
    ";
    }
  }
?>
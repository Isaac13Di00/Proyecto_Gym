<?php
  include "conexion.php";
  $resultado = $mysqli->query("SELECT citas.id as id, citas.idUsuario , usuario.nombre as nombre, citas.fecha as fecha, citas.asistencia as asistencia FROM citas JOIN usuario ON citas.idUsuario = usuario.id WHERE citas.fecha = CURRENT_DATE;");
  while ($datos = mysqli_fetch_array($resultado)) {
    $idAdministrador = $_SESSION['id'];
    $nombre = $datos['nombre'];
    $idCita = $datos['id'];
    $idUsuario = $datos['idUsuario'];
    $fecha = $datos['fecha'];
    $asistencia = $datos['asistencia'];
    $asistencia = $datos['asistencia'];
    if ($asistencia != 1) {
      echo "
          <tr>
            <td>$idCita</td>
            <td>$nombre</td>
            <td>$fecha</td>
            <td>$asistencia</td>
            <td>
              <form action='utilidades/confirmarCita.php' method='POST'>
                <input type='hidden' value='$idCita' name='idCita'>
                <input type='hidden' value='$idAdministrador' name='idAdministrador'>
                <input type='hidden' value='$idUsuario' name='idUsuario'>
                <input type='submit' class = 'btn' value='Confirmar cita'></input>
              </form>
            </td>
          </tr>
    ";
    }
  }
?>
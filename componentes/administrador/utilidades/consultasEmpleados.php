<?php
  include "conexion.php";
  $resultado = $mysqli->query("SELECT `nombre`, `area`, `sexo`, `fecha_nacimiento`, `tipo_sangre`, `telefono`, `email`, `calle`, `colonia`, `cp` FROM `administrador`");
  while ($datos = mysqli_fetch_array($resultado)) {
    $nombre = $datos['nombre'];
    $area = $datos['area'];
    $sexo = $datos['sexo'];
    $fecha_nacimiento = $datos['fecha_nacimiento'];
    $tipo_sangre = $datos['tipo_sangre'];
    $telefono = $datos['telefono'];
    $email = $datos['email'];
    $calle = $datos['calle'];
    $colonia = $datos['colonia'];
    $cp = $datos['cp'];
    if ($asistencia != 1) {
      echo "
          <tr>
            <td>$nombre</td>
            <td>$area</td>
            <td>$sexo</td>
            <td>$fecha_nacimiento</td>
            <td>$tipo_sangre</td>
            <td>$telefono</td>
            <td>$email</td>
            <td>$calle</td>
            <td>$colonia</td>
            <td>$cp</td>
            <td>
              <form action='utilidades/confirmarCita.php' method='POST'>
                <input type='hidden' value='$idCita' name='idCita'>
                
                <input type='submit' class = 'btn' value='Confirmar cita'></input>
              </form>
            </td>
          </tr>
    ";
    }
  }
?>
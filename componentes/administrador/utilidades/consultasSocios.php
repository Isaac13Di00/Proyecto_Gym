<?php
  include "conexion.php";
  $resultado = $mysqli->query("SELECT usuario.nombre, usuario.membresia, usuario.miembro_desde, usuario.vigencia, usuario.sexo, usuario.fecha_nacimiento, usuario.tipo_sangre, usuario.telefono, usuario.email, usuario.calle, usuario.colonia, usuario.cp FROM `usuario`");
  while ($datos = mysqli_fetch_array($resultado)) {
    $nombre = $datos['nombre'];
    $membresia = $datos['membresia'];
    $miembro_desde = $datos['miembro_desde'];
    $vigencia = $datos['vigencia'];
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
            <td>$membresia</td>
            <td>$miembro_desde</td>
            <td>$vigencia</td>
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
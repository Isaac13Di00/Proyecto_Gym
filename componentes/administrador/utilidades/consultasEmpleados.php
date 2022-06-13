<?php
  include "conexion.php";
  $resultado = $mysqli->query("SELECT `nombre`, `area`, `sexo`, `fecha_nacimiento`, `tipo_sangre`, `telefono`, `email`, `calle`, `colonia`, `cp`, `estado` FROM `administrador`");
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
    $estado = $datos['estado'];
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
          ";
    if ($estado == 1) {
      echo "
            <form action='utilidades/darDeBajaEmpleado.php' method='POST'>
              <input type='hidden' value='$email' name='email'>      
              <input type='submit' class = 'btn' value='Dar de baja'></input>
            </form>
          </td>
        </tr>
      ";
    }else{
      echo "
            <form action='utilidades/reactivarEmpleado.php' method='POST'>
              <input type='hidden' value='$email' name='email'>      
              <input type='submit' class = 'btn' value='Reactivar'></input>
            </form>
          </td>
        </tr>
      ";
    }
  }
?>
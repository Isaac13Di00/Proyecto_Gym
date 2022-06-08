<?
  session_start();
  include_once "./conexion.php";
  include "./funciones.php";
  $correo = $_POST["correo"];
  $contra = $_POST["contra"];

  $registrado = registrado($mysqli, $correo);
  $datos = getDatos($mysqli, $correo, $registrado);

  if ($registrado != "no_registrado") {
    if (validacionLogin($mysqli, $correo, $contra, $registrado)) {
      if ($registrado == "usuario") {
        $_SESSION['id'] = $datos['id'];
        $_SESSION['login'] = $registrado;
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['membresia'] = $datos['membresia'];
        $_SESSION['miembro_desde'] = $datos['miembro_desde'];
        $_SESSION['vigencia'] = $datos['vigencia'];
        $_SESSION['sexo'] = $datos['sexo'];
        $_SESSION['fecha_nacimiento'] = $datos['fecha_nacimiento'];
        $_SESSION['tipo_sangre'] = $datos['tipo_sangre'];
        $_SESSION['telefono'] = $datos['telefono'];
        $_SESSION['correo'] = $datos['email'];
        $_SESSION['calle'] = $datos['calle'];
        $_SESSION['colonia'] = $datos['colonia'];
        $_SESSION['cp'] = $datos['cp'];
        header("Location: /Proyecto_Gym/componentes/usuario/perfil.php");
      }else{
        $_SESSION['login'] = $registrado;
        $_SESSION['membresia'] = $datos['membresia'];
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['miembro_desde'] = $datos['miembro_desde'];
        $_SESSION['vigencia'] = $datos['vigencia'];
        $_SESSION['sexo'] = $datos['sexo'];
        $_SESSION['fecha_nacimiento'] = $datos['fecha_nacimiento'];
        $_SESSION['tipo_sangre'] = $datos['tipo_sangre'];
        $_SESSION['telefono'] = $datos['telefono'];
        $_SESSION['correo'] = $datos['email'];
        $_SESSION['calle'] = $datos['calle'];
        $_SESSION['colonia'] = $datos['colonia'];
        $_SESSION['cp'] = $datos['cp'];
        header("Location: /Proyecto_Gym/componentes/administrador/perfil.php");
      }
    } else {
      # code...
    }
    
  }else{
    #Mensaje de no registrado
    echo "$registrado";
  }
  
?>
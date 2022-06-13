<?
  session_start();
  include_once "./conexion.php";
  include "./funciones.php";
  $correo = $_POST["correo"];
  $contra = $_POST["contra"];
  if ($_POST['correo'] != null AND $_POST['contra'] != null) {
    $registrado = registrado($mysqli, $correo);
    $hash = getHash($mysqli, $correo, $registrado);
    if ($registrado != "no_registrado") {
      if(verifyPass($contra, $hash['contra'])){
        $datos = getDatos($mysqli, $correo, $registrado);
        if ($registrado == "usuario") {
          $_SESSION['login'] = $registrado;
          $_SESSION['id'] = $datos['id'];
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
        $_SESSION['id'] = $datos['id'];
        $_SESSION['area'] = $datos['area'];
        $_SESSION['sexo'] = $datos['sexo'];
        $_SESSION['fecha_nacimiento'] = $datos['fecha_nacimiento'];
        $_SESSION['tipo_sangre'] = $datos['tipo_sangre'];
        $_SESSION['telefono'] = $datos['telefono'];
        $_SESSION['correo'] = $datos['email'];
        $_SESSION['calle'] = $datos['calle'];
        $_SESSION['colonia'] = $datos['colonia'];
        $_SESSION['cp'] = $datos['cp'];
        $_SESSION['nombre'] = $datos['nombre'];
        header("Location: /Proyecto_Gym/componentes/administrador/perfil.php");
      }
    }else{
      #Mensaje de contraseña incorrecta
      echo "<script>
      alert('Datos incorrectos.');
      window.location= '/Proyecto_Gym/' </script>";
    }
  }else{
    #Mensaje de no registrado
    echo "$registrado";
    header("Location: /Proyecto_Gym/");
  }
  }else{
    echo "<script>
      alert('Ingrese datos.');
      window.location= '/Proyecto_Gym/' </script>";
  }
?>
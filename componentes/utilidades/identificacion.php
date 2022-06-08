<?
  include_once "./conexion.php";
  include "./funciones.php";
  session_start();
  $correo = $_POST["correo"];
  $contra = $_POST["contra"];
  $datos = datosUsuario($mysqli, $correo);
  $registrado = registrado($mysqli, $correo);
  if ($registrado != "no_registrado") {
    if (validacionLogin($mysqli, $correo, $contra, $registrado)) {
      if ($registrado == "administrador") {
        $_SESSION['login'] = "administrador";
        $_SESSION['correo'] = $correo;
        header("Location: ../administrador/perfil.php");
        die();
      } else {
        $_SESSION['login'] = "usuario";
        $_SESSION['correo'] = "$correo";
        $_SESSION['nombre'] = $datos['nombre'];
        header("Location: ../usuario/perfil.php");
        die();
      }
    }else {
      #Mensaje de dato erroneo
      echo "Error ingrese los datos correctos $correo $contra";
    }   
  }else{
    #Mensaje de no registrado
    echo "Usuario no registrado $correo $contra";
  }
  
?>
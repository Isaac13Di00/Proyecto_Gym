<?
  include_once "./conexion.php";
  include "./funciones.php";

  $correo = $_POST["correo"];
  $contra = $_POST["contra"];

  $registrado = registrado($mysqli, $correo);
  
  if ($registrado != "no_registrado") {
    if (validacionLogin($mysqli, $correo, $contra, $registrado)) {
      
    } else {
      # code...
    }
    
  }else{
    #Mensaje de no registrado
    echo "$registrado";
  }
  
?>
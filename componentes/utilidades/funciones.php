<?php
  function registrado($conexion, $correo){
    try {
      $sentencia = $conexion->query("SELECT * FROM administrador WHERE email = '$correo' LIMIT 1");
      $sentencia = $sentencia->fetch_assoc();
      if ($sentencia['nombre']) {
        return "administrador";
      }else{
        $sentencia = $conexion->query("SELECT * FROM usuario WHERE email = '$correo' LIMIT 1");
        if ($sentencia) {
          return "usuario";
        }else{
          return "no_registrado";
        }
      }
    } catch (PDOException $e) {
      return "no registrado";
    }
  }

  function validacionLogin($conexion, $correo, $contra, $tipoUsuario){
    try {
      switch ($tipoUsuario){
        case "administrador":
          $resuCorreo = $conexion->query("SELECT * FROM administrador WHERE email = '$correo' LIMIT 1");

          break;
        case "usuario":
          $resuCorreo = $conexion->query("SELECT * FROM administrador WHERE email = '$correo' LIMIT 1");
          break;
      }
    } catch (\Throwable $th) {
      //throw $th;
    }
  }
?>
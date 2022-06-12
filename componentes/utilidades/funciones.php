<?php
  function registrado($conexion, $correo){
    try {
      $sentencia = $conexion->query("SELECT * FROM administrador WHERE email = '$correo' LIMIT 1");
      $sentencia = $sentencia->fetch_assoc();
      if (isset($sentencia)) {
        return "administrador";
      }else{
        $sentencia = $conexion->query("SELECT * FROM usuario WHERE email = '$correo' LIMIT 1");
        if (isset($sentencia)) {
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
          $resu = $conexion->query("SELECT * FROM administrador WHERE email = '$correo' AND contra = '$contra' LIMIT 1");
          if (isset($resu)) {
            return true;
          }else{
            return false;
          }
          break;
        case "usuario":
          $resu = $conexion->query("SELECT * FROM usuario WHERE email = '$correo' AND contra = '$contra' LIMIT 1");
          if (isset($resu)) {
            return true;
          }else{
            return false;
          }
          break;
      }
    } catch (\Throwable $th) {
      #Mensaje de error
      echo $th;
    }
  }

  function getDatos($conexion, $correo, $tipoUsuario){
    try {
      $resultado = $conexion->query("SELECT * FROM $tipoUsuario WHERE email = '$correo' LIMIT 1");
      return $resultado->fetch_assoc();
    } catch (PDOException $e) {
      echo $e;
    }
  }

  function verifyPass($pass, $bdPass){
    return password_verify($pass, $bdPass);
  }

  function getHash($conexion, $correo, $tipoUsuario){
    try {
      $resultado = $conexion->query("SELECT contra FROM $tipoUsuario WHERE email = '$correo'");
      return $resultado->fetch_assoc();
    } catch (PDOException $e) {
      echo $e;
    }
  }
?>
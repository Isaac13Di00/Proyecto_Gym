<?php
  function registrado($conexion, $correo){
    try {
      $sentencia = $conexion->query("SELECT * FROM administrador WHERE email = '$correo' LIMIT 1");
      $sentencia = $sentencia->fetch_assoc();
      if (isset($sentencia)) {
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
      $resultado = $conexion->query("SELECT * FROM $tipoUsuario WHERE email = '$correo' AND contra = '$contra' LIMIT 1");
      $resultado = $resultado->fetch_assoc();
      if (isset($resultado)) {
        return true;
      }else{
        return false;
      }
    } catch (PDOException $e) {
      echo $e;
      return false;
    }
  }

  function datosUsuario($conexion, $correo){
    try {
      $sentencia = $conexion->query("SELECT * FROM usuario WHERE email = '$correo' LIMIT 1");
      $sentencia = $sentencia->fetch_assoc();
      return $sentencia;
    } catch (PDOException $e) {
      return $e;
    }
  }
?>
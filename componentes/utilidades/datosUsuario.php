<?php
    include_once "./conexion.php";
    include "./funciones.php";
    include "./identificacion.php";

    try {
        $resultado = getDatos($mysqli, $correo, $registrado);
        
    } catch (PDOException $e) {
        echo $e;
    }
?>
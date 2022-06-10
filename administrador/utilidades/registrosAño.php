<?php
    include_once "./componentes/administrador/utilidades/conexion.php";
    if (!mysqli_connect_errno($mysqli)) {
        $mes = array();
        for ($i=0; $i < 12; $i++) { 
            $result = $mysqli->query("SELECT * FROM usuario WHERE MONTH(miembro_desde) = ($i+1);");
            $mes[$i] = $result->num_rows;
        }
        /*     
        $datosArray = array();
        $result = $mysqli->query("Select * FROM usuario");
        while ($row = mysqli_fetch_array($result)) {
            $point = array()
        }
        */
    }
?>
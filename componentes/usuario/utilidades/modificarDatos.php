<?php
    session_start();
    include "conexion.php";
    $sexo = ($_POST['sexo'] == "Masculino"? "Hombre":($_POST['sexo'] == "Femenino"? "Mujer" : "Otro"));
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $tipo_sangre = $_POST['tipo_sangre'];
    $nombre = $_POST['nombre'];
    $calle = $_POST['calle'];
    $colonia = $_POST['colonia'];
    $cp = $_POST['cp'];
    $id = $_SESSION['id'];
    if ($sexo != null AND $fecha_nacimiento != null AND $tipo_sangre != null AND $nombre != null AND $calle != null AND $colonia != null AND $cp != null) {
        $sql = "UPDATE `usuario` SET `sexo`='$sexo',`fecha_nacimiento`='$fecha_nacimiento',`tipo_sangre`='$tipo_sangre',`calle`='$calle',`colonia`='$colonia',`cp`='$cp',`nombre`='$nombre' WHERE `id` = $id";
        if ($mysqli->query($sql) === true) {
            session_destroy();
            echo "<script>
		        alert('Datos actualizados. Vuelva a iniciar sesión para ver cambios.');
		        window.location= '../perfil.php' </script>";
          } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
          }
    }else{
        echo "<script>
            alert('Ingrese todos los datos solicitados.');
            window.location= '../agendar.php';</script>";
    }
?>
<?php
	session_start();
	error_reporting(0);
    if (!isset($_SESSION['nombre'])) {
        header("Location: /Proyecto_Gym/");
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Proyecto_Gym/css/citas.css">
    <title>Krachtig Gym - Consulta empleado</title>
</head>
<body>
    <?php include("./templates/tmplt_header.php");?>
    <section>
        <div class="table-wraper">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Área</th>
                    <th>Sexo</th>
                    <th>Fecha nacimiento</th>
                    <th>Tipo Sangre</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Codigo postal</th>
                    <th>Dar de baja</th>
                </tr>
                <tr>
                    <?php
                        require "utilidades/consultasEmpleados.php";
                    ?>
                </tr>
            </table>
        </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
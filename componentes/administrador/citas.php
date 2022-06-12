<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Proyecto_Gym/css/citas.css">
    <title>Krachtig Gym - Citas</title>
</head>
<body>
    <?php include("./templates/tmplt_header.php");?>
    <section>
        <div class="table-wraper">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Asistencia</th>
                    <th>Confirmar</th>
                </tr>
                <tr>
                    <?php
                        require "./utilidades/citas.php";
                    ?>
                </tr>
            </table>
        </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
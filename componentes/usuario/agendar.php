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
    <link rel="stylesheet" href="/Proyecto_Gym/css/agendar.css">
    <title>Krachtig Gym - Agendar</title>
</head>
<body>
    <?php include("./templates/tmplt_header.php");?>
    <section>
        <div class="div-agendar">
            <div>
                <form action="./utilidades/agendar.php" method="POST">
                    <label class="lbl-fecha">Fecha: </label>
                    <input name="fecha" type="date" class="inp-fecha"/>
                    <br>
                    <input type="submit" class="btn-agendar" value="Agendar visita"/>
                </form>
            </div>
        </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
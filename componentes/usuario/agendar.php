<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/agendar.css">
    <title>Krachtig Gym - Agendar</title>
</head>
<body>
    <?php include("/xampp/htdocs/Proyecto-Gym/componentes/usuario/templates/tmplt_header.php");?>
    <section>
        <div class="div-agendar">
            <div>
                <label class="lbl-fecha">Fecha: </label>
                <input type="date" class="inp-fecha"/>
                <br>
                <input type="submit" class="btn-agendar" value="Agendar visita"/>
            </div>
        </div>
    </section>
    <?php include("/xampp/htdocs/Proyecto-Gym/componentes/usuario/templates/tmplt_footer.php");?>
</body>
</html>
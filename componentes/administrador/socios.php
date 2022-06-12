<?php
	session_start();
	error_reporting(0);
    if (!isset($_SESSION['nombre'])) {
        header("Location: /Proyecto-Gym/");
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Krachtig Gym - Socios</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../css/socios.css">
    <title>Document</title>
</head>
<body style="display: grid;">
    <?php include("./templates/tmplt_header.php");?>
    <section>
        <label class="titulo">Socios</label>
        <div class="row">
            
            <div class="block total">
                <label class="tipo">Total</label><br><br>
                <label class="monto">###</label>
            </div>
            <div class="block vigente">
                <label class="tipo">Vigentes</label><br><br>
                <label class="monto">###</label>
            </div>
            <div class="block vencido">
                <label class="tipo">Vencidos</label><br><br>
                <label class="monto">###</label>
            </div>
        </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
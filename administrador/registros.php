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
    <title>Krachtig Gym - Perfil</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/perfil.css">
    <title>Document</title>
</head>
<body style="display: grid;">
    <?php include("./templates/tmplt_header.php");?>
    <section>
      <div>
        <?php
          require ("./componentes/administrador/utilidades/registrosAño.php");
          var_dump($mes);
        ?>
      </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
<?php

use function PHPSTORM_META\type;

    session_start();
    error_reporting(0);
    
    if (!isset($_SESSION['correo'])) {
        header("Location: /Proyecto-Gym/index.php");
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
    <?php include("/xampp/htdocs/Proyecto-Gym/componentes/usuario/templates/tmplt_header.php");?>
    <section>
        <div class="div-name">
            <label class="name" id="idNombre"><?php
                echo $_SESSION['nombre'];
            ?></label>
        </div>
        <div class="div-info">
            <div class="info">
                <ul>
                    <?php
                        include "./componentes/utilidades/datosUsuario.php";
                        echo $resultado;
                        echo "
                        <li><label class='info-text'>Membresía: </label><label class='info-text bold'>#membresia</label></li>
                        <li><label class='info-text'>Miembro desde: </label><label class='info-text bold'>#fechamiembro</label></li>
                        <br>
                        <li><label class='info-text'>Vigencia: </label><label class='info-text bold'>#vigencia</label></li>
                        <br>
                        <li><label class='info-text bold'>Sexo: </label><label class='info-text'>#sexo</label></li>
                        <li><label class='info-text bold'>Fecha de nacimiento: </label><label class='info-text'>#fechanac</label></li>
                        <li><label class='info-text bold'>Tipo de sangre: </label><label class='info-text'>#tiposan</label></li>
                        <br>
                        <li><label class='info-text bold'>Teléfono: </label><label class='info-text'>#telefono</label></li>
                        <li><label class='info-text bold'>Correo: </label><label class='info-text'>#correo</label></li>
                        <br>
                        <li><label class='info-text bold'>Dirección </label></li>
                        <li><label class='info-text bold'>Calle: </label><label class='info-text'>#calle</label></li>
                        <li><label class='info-text bold'>Colonia: </label><label class='info-text'>#colonia</label></li>
                        <li><label class='info-text bold'>Código postal: </label><label class='info-text'>#cp</label></li>
                        ";
                    ?>
                </ul>
            </div>
            <div class="visits">
                <a href="editarPerfil.php"><button>Editar perfil</button></a>
            </div>
        </div>
    </section>
    <?php include("/xampp/htdocs/Proyecto-Gym/componentes/usuario/templates/tmplt_footer.php");?>
</body>
</html>
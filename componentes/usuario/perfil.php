<?php
    session_start();
    error_reporting(0); 
    if ($_SESSION['login'] != 'usuario') {
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
        <div class="div-name">
            <label class="name" id="idNombre"><?php echo $_SESSION['nombre'];?></label>
        </div>
        <div class="div-info">
            <div class="info">
                <ul>
                    <li><label class="info-text">Membresía: </label><label class="info-text bold"><?php echo $_SESSION['membresia'];?></label></li>
                    <li><label class="info-text">Miembro desde: </label><label class="info-text bold"><?php echo $_SESSION['miembro_desde'];?></label></li>
                    <br>
                    <li><label class="info-text">Vigencia: </label><label class="info-text bold"><?php echo $_SESSION['vigencia'];?></label></li>
                    <br>
                    <li><label class="info-text bold">Sexo: </label><label class="info-text"><?php echo $_SESSION['sexo'];?></label></li>
                    <li><label class="info-text bold">Fecha de nacimiento: </label><label class="info-text"><?php echo $_SESSION['fecha_nacimiento'];?></label></li>
                    <li><label class="info-text bold">Tipo de sangre: </label><label class="info-text"><?php echo $_SESSION['tipo_sangre'];?></label></li>
                    <br>
                    <li><label class="info-text bold">Teléfono: </label><label class="info-text"><?php echo $_SESSION['telefono'];?></label></li>
                    <li><label class="info-text bold">Correo: </label><label class="info-text"><?php echo $_SESSION['correo'];?></label></li>
                    <br>
                    <li><label class="info-text bold">Dirección </label></li>
                    <li><label class="info-text bold">Calle: </label><label class="info-text"><?php echo $_SESSION['calle'];?></label></li>
                    <li><label class="info-text bold">Colonia: </label><label class="info-text"><?php echo $_SESSION['colonia'];?></label></li>
                    <li><label class="info-text bold">Código postal: </label><label class="info-text"><?php echo $_SESSION['cp'];?></label></li>
                </ul>
            </div>
            <div class="visits">
                <a href="./editarPerfil.php"><button>Editar perfil</button></a>
            </div>
        </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
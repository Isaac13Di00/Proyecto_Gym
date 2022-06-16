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
    <link rel="stylesheet" href="../../css/perfil.css">
    <title>Krachtig Gym - Editar Perfil</title>
</head>
<body style="display: grid;">
    <?php include("./templates/tmplt_header.php");?>
    <section>
        <div class="div-name">
            <label class="name" id="idNombre"><?php echo date('y/m/d');?></label>
        </div>
        <form class="div-info" method="POST" action="./utilidades/modificarDatos.php">
            <div class="info">
                <ul>
                    <li><label class="info-text left">Membresía: </label><label class="info-text bold"><?php echo $_SESSION['membresia'];?></label></li>
                    <li><label class="info-text left">Miembro desde: </label><label class="info-text bold"><?php echo $_SESSION['miembro_desde'];?></label></li>
                    <br>
                    <li><label class="info-text left">Vigencia: </label><label class="info-text bold"><?php echo $_SESSION['vigencia'];?></label></li>
                    <br>
                    <li><label class="info-text bold left">Sexo: </label><select name="sexo" class="info-text select">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select></li>
                    <li><label class="info-text bold left">Fecha de nacimiento: </label><input name="fecha_nacimiento" type="date" class="info-text space"/></li>
                    <li><label class="info-text bold left">Tipo de sangre: </label><select name="tipo_sangre" class="info-text select">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select></li>
                    <br>
                    <li><label class="info-text bold left">Nombre: </label><input name="nombre" type="text" class="info-text space"/></li>
                    <br>
                    <li><label class="info-text bold left">Dirección </label></li><br>
                    <li><label class="info-text bold left">Calle: </label><input name="calle" type="text" class="info-text space"/></li>
                    <li><label class="info-text bold left">Colonia: </label><input name="colonia" type="text" class="info-text space"/></li>
                    <li><label class="info-text bold left">Código postal: </label><input name="cp" type="number" class="info-text space"/></li>
                </ul>
            </div>
            <div class="visits">
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                <input type="submit" value="Terminar" class="button">
            </div>
        </form>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
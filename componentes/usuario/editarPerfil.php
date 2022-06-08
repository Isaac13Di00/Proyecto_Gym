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
    <link rel="stylesheet" href="../../css/perfil.css">
    <title>Krachtig Gym - Editar Perfil</title>
</head>
<body style="display: grid;">
    <?php include("/xampp/htdocs/Proyecto-Gym/componentes/usuario/templates/tmplt_header.php");?>
    <section>
        <div class="div-name">
            <label class="name" id="idNombre">Nombre</label>
        </div>
        <div class="div-info">
            <div class="info">
                <ul>
                    <li><label class="info-text">Membresía: </label><label class="info-text bold">#membresia</label></li>
                    <li><label class="info-text">Miembro desde: </label><label class="info-text bold">#fechamiembro</label></li>
                    <br>
                    <li><label class="info-text">Vigencia: </label><label class="info-text bold">#vigencia</label></li>
                    <br>
                    <li><label class="info-text bold">Sexo: </label><select class="info-text">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select></li>
                    <li><label class="info-text bold">Fecha de nacimiento: </label><input type="date" class="info-text"/></li>
                    <li><label class="info-text bold">Tipo de sangre: </label><select class="info-text">
                        <option value="A+">A+</option>
                        <option value="A-">A+</option>
                        <option value="B+">A+</option>
                        <option value="B-">A+</option>
                        <option value="AB+">A+</option>
                        <option value="AB-">A+</option>
                        <option value="O+">A+</option>
                        <option value="O-">A+</option>
                    </select></li>
                    <br>
                    <li><label class="info-text bold">Teléfono: </label><input type="tel" class="info-text"/></li>
                    <li><label class="info-text bold">Correo: </label><input type="mail" class="info-text"/></li>
                    <br>
                    <li><label class="info-text bold">Dirección </label></li>
                    <li><label class="info-text bold">Calle: </label><input type="text" class="info-text"/></li>
                    <li><label class="info-text bold">Colonia: </label><input type="text" class="info-text"/></li>
                    <li><label class="info-text bold">Código postal: </label><input type="number" class="info-text"/></li>
                </ul>
            </div>
            <div class="visits">
                <a href="perfil.php"><button>Terminar</button></a>
            </div>
        </div>
    </section>
    <?php include("/xampp/htdocs/Proyecto-Gym/componentes/usuario/templates/tmplt_footer.php");?>
</body>
</html>
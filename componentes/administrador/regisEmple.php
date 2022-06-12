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
    <title>Krachtig Gym - Registro empleado</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/registrar.css">
</head>
<body>
    <?php include("./templates/tmplt_header.php");?>
    <section>
        <a2 class="title">Registrar empleado</a2>
        <div class="div-wrap">
            <form class="info" method="POST" action="./utilidades/registroEmpleado.php">
                <ul>
                    <li><label class="info-text">Área de trabajo: </label><select name="area" class="info-text">
                        <option value="Administrativo">Administrativa</option>
                        <option value="Recepción">Recepción</option>
                    </select></li>
                    <br>
                    <li><label class="info-text">Nombre completo: </label><input name="nombre" class="info-text" type="text"/></li>
                    <li><label class="info-text">Género: </label><select name="sexo" class="info-text">
                        <option value="Hombre">Masculino</option>
                        <option value="Mujer">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select></li>
                    <li><label class="info-text">Fecha de nacimiento: </label><input name="fecha_nacimiento" class="info-text" type="date"/></li>
                    <li><label class="info-text">Tipo de sangre: </label><select name="tipo_sangre" class="info-text">
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
                    <li><label class="info-text">Correo: </label><input name="email" class="info-text" type="mail"/></li>
                    <li><label class="info-text">Contraseña: </label><input name="contra" class="info-text" type="password"/></li>
                    <li><label class="info-text">Teléfono</label><input name="telefono" class="info-text" type="tel"/></li>
                    <br>
                    <li><label class="info-text">Calle: </label><input name="calle" class="info-text" type="text"/></li>
                    <li><label class="info-text">Colonia: </label><input name="col" class="info-text" type="text"/></li>
                    <li><label class="info-text">Código postal: </label><input name="cp" class="info-text" type="number"/></li>
                </ul>
                <input class="btn-registrar" type="submit" value="Registrar"/>
            </form>
        </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
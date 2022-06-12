<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/consultar.css">
    <title>Document</title>
</head>
<body>
    <?php include("./templates/tmplt_header.php");?>
    <section>
        <div class="head">
            <a2 class="title">Consultar Empleado</a2>
            <input class="btn-buscador" value="Buscar" type="submit"/>
            <input class="buscador" type="text"/>
            
        </div>
        <div class="div-wrap">
            <div class="div-consulta">
                <div class="bloque">
                    <ul>
                        <br><br><br>
                        <li><label class="etiqueta">Área: </label><label class="info">###</label></li>
                        
                    </ul>
                </div>
                <div class="bloque">
                    <ul>
                        <li><label class="etiqueta">Nombre: </label><label class="info">###</label></li><br>
                        <li><label class="etiqueta">Género: </label><label class="info">###</label></li><br>
                        <li><label class="etiqueta">Sangre: </label><label class="info">###</label></li><br>
                        <li><label class="etiqueta">Fecha de nacimiento: </label><label class="info">###</label></li><br>
                    </ul>
                </div>
                <div class="bloque">
                    <ul>
                        <li><label class="etiqueta">Teléfono: </label><label class="info">###</label></li><br>
                        <li><label class="etiqueta">Calle: </label><label class="info">###</label></li><br>
                        <li><label class="etiqueta">Colonia: </label><label class="info">###</label></li><br>
                        <li><label class="etiqueta">Código postal: </label><label class="info">###</label></li><br>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
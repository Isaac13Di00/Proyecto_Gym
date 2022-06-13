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
    
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/perfil.css">
</head>
<body style="display: grid;">
    <?php include("./templates/tmplt_header.php");?>
    <section>
        <div class="div-name">
            <label class="name" id="idNombre"><?php echo $_SESSION['nombre'];?></label>
        </div>
        <center>
            <br>
            <div class="div-info">
                <div class="row">
                    <div class="col-md-4">
                    <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <br>    
                                <h3><?php include "utilidades/datosGeneral1.php";?></h3>
                                <p>Citas pendientes</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-4">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <br>
                                <h3><?php include "utilidades/datosGeneral2.php";?></h3>
                                <p>Usuarios Registrados</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-4">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <br>
                                <h3><?php include "utilidades/datosGeneral3.php";?></h3>
                                <p>Visitantes</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
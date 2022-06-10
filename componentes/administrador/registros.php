<?php
    session_start();
//    error_reporting(0); 
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
    <script type="text/javascript">
      window.onload = function () {
        const y = [];
        $.getJSON("/Proyecto_Gym/componentes/administrador/utilidades/citas.php", function (result) {
          for (var i = 0; i < 12; i++) {
            y[i] = result[0].valory[i];
            
          };
          var options = {
          animationEnabled: true,
          exportEnabled: true,
          title: {
            text: "Registros por mes"
          },
          axisX: {
            title: "Meses",
          },
          axisY: {
            title: "Registros",
          },
          data: [{
            type: "column",
            dataPoints: [
              { label: "Enero", y:  y[0]},
              { label: "Febrero", y: y[1]},
              { label: "Marzo", y: y[2]},
              { label: "Abril", y: y[3]},
              { label: "Mayo", y: y[4]},
              { label: "Junio", y: y[5]},
              { label: "Julio", y: y[6]},
              { label: "Agosto", y: y[7]},
              { label: "Septiembre", y: y[8]},
              { label: "Octubre", y: y[9]},
              { label: "Noviembre", y: y[10]},
              { label: "Diciembre", y: y[11]}
            ]
          }]
        };
        $("#chartContainer").CanvasJSChart(options);
        });
      }
    </script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</head>
<body style="display: grid;">
    <?php include("./templates/tmplt_header.php");?>
    <section>
      <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    </section>
    
</body>
</html>
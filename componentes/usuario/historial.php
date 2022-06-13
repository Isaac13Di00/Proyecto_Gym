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
    <title>Krachtig Gym - Registros</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/registros.css">
    <script type="text/javascript">
      window.onload = function () {
        const y = [];
        $.getJSON("/Proyecto_Gym/componentes/usuario/utilidades/historialCitasRealizadas.php", function (result) {
          var options = {
          animationEnabled: true,
          exportEnabled: true,
          title: {
            text: "Citas realizadas del mes"
          },
          axisX: {
            title: "Meses",
          },
          axisY: {
            title: "Citas",
          },
          data: [{
            type: "column",
            dataPoints: [
              { label: "Enero", y:  result[0]},
              { label: "Febrero", y: result[1]},
              { label: "Marzo", y: result[2]},
              { label: "Abril", y: result[3]},
              { label: "Mayo", y: result[4]},
              { label: "Junio", y: result[5]},
              { label: "Julio", y: result[6]},
              { label: "Agosto", y: result[7]},
              { label: "Septiembre", y: result[8]},
              { label: "Octubre", y: result[9]},
              { label: "Noviembre", y: result[10]},
              { label: "Diciembre", y: result[11]}
            ]
          }]
        };
        $("#chartContainer").CanvasJSChart(options);
        });
        $.getJSON("/Proyecto_Gym/componentes/usuario/utilidades/historialCitasConfirmadas.php", function (result) {
            var options = {
            animationEnabled: true,
            exportEnabled: true,
            title: {
              text: "Visitas del mes confirmadas"
            },
            axisX: {
              title: "Meses",
            },
            axisY: {
              title: "Citas",
            },
            data: [{
              type: "column",
              dataPoints: [
                { label: "Enero", y:  result[0]},
                { label: "Febrero", y: result[1]},
                { label: "Marzo", y: result[2]},
                { label: "Abril", y: result[3]},
                { label: "Mayo", y: result[4]},
                { label: "Junio", y: result[5]},
                { label: "Julio", y: result[6]},
                { label: "Agosto", y: result[7]},
                { label: "Septiembre", y: result[8]},
                { label: "Octubre", y: result[9]},
                { label: "Noviembre", y: result[10]},
                { label: "Diciembre", y: result[11]}
              ]
            }]
          };
          $("#chartContainer2").CanvasJSChart(options);
          });
      }
    </script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body style="display: grid;">
    <?php include("./templates/tmplt_header.php");?>
    <section>
    <div class="div-row">
        <div class="chartcontainer">
          <div class="chart" id="chartContainer"></div>
        </div>
        <div class="chartcontainer">
          <div class="chart" id="chartContainer2"></div>
        </div>
      </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
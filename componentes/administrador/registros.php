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
        //DASH BARRAS
        $.getJSON("/Proyecto_Gym/componentes/administrador/utilidades/dash.php", function (result) {
          const y = [];
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
        //DASH BARRAS
        $.getJSON("/Proyecto_Gym/componentes/administrador/utilidades/generos.php", function (result) {
          var charta = new CanvasJS.Chart("chartContainera", {
            theme: "light2",
            exportEnabled: true,
            animationEnabled: true,
            title: {
              text: "Generos"
            },
            data: [{
              type: "pie",
              startAngle: 25,
              toolTipContent: "<b>{label}</b>: {y}%",
              showInLegend: "true",
              legendText: "{label}",
              indexLabelFontSize: 16,
              indexLabel: "{label} - {y}%",
              dataPoints: [
                { y: result[0], label: "Hombre" },
                { y: result[1], label: "Mujer" },
                { y: result[2], label: "Otro" }
              ]
            }]
          });
          charta.render();
        });
        //DASH DONA
        $.getJSON("/Proyecto_Gym/componentes/administrador/utilidades/citasHechasConfirmadas.php", function (result) {
          console.log(result[0]);
          console.log(result[1]);
          var charte = new CanvasJS.Chart("chartContainere", {
            animationEnabled: true,
            exportEnabled: true,
            title:{
            text: "Citas hechas/confirmadas",
            horizontalAlign: "left"
            },
            data: [{
              type: "doughnut",
              startAngle: 60,
              //innerRadius: 60,
              indexLabelFontSize: 17,
              indexLabel: "{label} - #percent%",
              toolTipContent: "<b>{label}:</b> {y} (#percent%)",
              dataPoints: [
                { y: result[0], label: "Realizadas" },
                { y: result[1], label: "Confirmadas" },
              ]
            }]
          });
          charte.render();
        });
      };  
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
          <div class="chart" id="chartContainera"></div>
        </div>
        
      </div>
      <div class="div-row">
        <div class="chartcontainer">
          <div class="chart" id="chartContainere"></div>
        </div>
      </div>
    </section>
    <?php include("./templates/tmplt_footer.php");?>
</body>
</html>
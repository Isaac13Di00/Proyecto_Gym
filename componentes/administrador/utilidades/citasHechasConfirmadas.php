<?php
  include "conexion.php";
  $citasTotales = $mysqli->query("SELECT COUNT(*) FROM citas");
  $citasTotales = $citasTotales->fetch_assoc();
  $citasHechas = $mysqli->query("SELECT COUNT(*) FROM citas WHERE citas.asistencia = 0");
  $citasHechas = $citasHechas->fetch_assoc();
  $citasConfirmadas = $mysqli->query("SELECT COUNT(*) FROM citas WHERE citas.asistencia = 1");
  $citasConfirmadas = $citasConfirmadas->fetch_assoc();
  $result = array();
  $result[0] = round((($citasHechas['COUNT(*)']*100)/$citasTotales['COUNT(*)']),2);
  $result[1] = round((($citasConfirmadas['COUNT(*)']*100)/$citasTotales['COUNT(*)']),2);
  echo json_encode($result);
?>
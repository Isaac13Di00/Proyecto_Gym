<?php
    session_start();
    error_reporting(0); 
    $_SESSION['login'] = '';
    session_destroy();
    header("Location: /Proyecto_Gym/");
?>
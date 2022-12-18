<?php
    require_once("../dao/ProvinciaDAO.php"); 
    $nombre = $_POST['nombre']; //es el name que esta en el form, de altaProvincia.html

    $provDAO = new ProvinciaDAO(); //creo el objeto dao de provincia
    $ok = $provDAO->altaProvincia($nombre); //envio la nueva provincia

    if ($ok) {
        header("Location: ../view/mensajeok.php");
        exit;
    } else {
        header("Location: ../view/mensajerr.php");
        exit;
    }
?>
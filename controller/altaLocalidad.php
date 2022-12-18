<?php
    require_once("../dao/LocalidadDAO.php"); 
    $nombre = $_POST['nombre']; //es el name que esta en el form, de altaProvincia.html
    $idprovincia = $_POST['idProvincia'];

    $locDAO = new LocalidadDAO(); //creo el objeto dao de localidad
    $ok = $locDAO->altaLocalidad($nombre, $idprovincia); //envio la nueva provincia

    if ($ok) {
        header("Location: ../view/mensajeok.php");
        exit;
    } else {
        header("Location: ../view/mensajerr.php");
        exit;
    }
?>
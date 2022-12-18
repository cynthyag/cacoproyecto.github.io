<?php
    require_once("../dao/ProvinciaDAO.php");
    $idprovincia = $_POST['idprovincia'];
    $nombre = $_POST['nombre']; //es el name que esta en el form, de altaUsuario.html
    
    $provDAO = new ProvinciaDAO(); //creo el objeto dao de provincia
    $ok = $provDAO->actualizarProvincia($idprovincia, $nombre); //envio 

    if ($ok) {
        header("Location: ../view/listadoProvincias.php");
        exit;
    } else {
        header("Location: ../view/mensajerr.php");
        exit;
    }
?>
<?php
    require_once("../dao/UsuarioDAO.php"); 
    $usuario = $_POST['usuario']; //es el name que esta en el form, de altaUsuario.html
    $pass = $_POST['pass'];

    $usuDAO = new UsuarioDAO(); //creo el objeto dao de usuario
    $ok = $usuDAO->altaUsuario($usuario, $pass); //envio 

    if ($ok) {
        header("Location: ../view/mensajeok.php");
        exit;
    } else {
        header("Location: ../view/mensajerr.php");
        exit;
    }
?>
<?php
    require_once("../dao/UsuarioDAO.php");
    $idUsuario = $_POST['idUsuario'];
    $usuario = $_POST['usuario']; //es el name que esta en el form, de altaUsuario.html
    $clave = $_POST['clave'];

    $usuDAO = new UsuarioDAO(); //creo el objeto dao de usuario
    $ok = $usuDAO->actualizarUsuario($idUsuario, $usuario, $clave); //envio 

    if ($ok) {
        header("Location: ../view/listadoUsuarios.php");
        exit;
    } else {
        header("Location: ../view/mensajerr.php");
        exit;
    }
?>
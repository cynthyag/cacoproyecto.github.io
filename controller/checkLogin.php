<?php
    //recibimos por metodo post usuario y clave
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //nos conectamos a la bd para verificar
    require_once("../dao/UsuarioDAO.php");
    $usuDAO=new UsuarioDAO();
    $ok=$usuDAO->validarUserYpass($user, $pass);
    
    //si existe entramos al sistem
    if($ok){
        echo "existe";
        header("Location: ../view/inicio.html");
        exit;
    }else{
        header("Location: ../view/loginError.html");
        exit;
    }
?>
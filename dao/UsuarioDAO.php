<?php
class UsuarioDAO {
    public function validarUserYpass ($user, $pass){
        require_once("../dataBase/ConexionBD.php");
        
        $conexionDB=new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $conexionDB->ejecutar("select * from usuarios where usuario = '$user' and clave = '$pass'");
        
        return $conexionDB->cantFilas() == 1;
    }

    public function listarUsuarios (){
        require_once("../dataBase/ConexionBD.php");
        require_once("../model/Usuario.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $result = $conexionDB->ejecutar("select * from usuarios");
        
        while ($usu = $result->fetch_assoc()) {
            $usuObj = new Usuario($usu["idusuario"], $usu["usuario"], $usu["clave"]);

            $listaUsu[] = $usuObj;
        }

        return $listaUsu;    
    }

    public function altaUsuario($usuario, $clave){
        require_once("../dataBase/ConexionBD.php");
        
        $veo =  $this->existeUsuario($usuario); 
        if($veo){ //si devuele es porq existe
            return false;
        }else{
            $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
            $conexionDB->conectar(); //me conecto
            $result = $conexionDB->ejecutar("INSERT INTO usuarios (usuario, clave) VALUES ('$usuario', '$clave')");
            
            return $conexionDB->cantFilas()>0;  
        }
    }

    public function existeUsuario($usuario){
        require_once("../dataBase/ConexionBD.php");
        
        $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $result = $conexionDB->ejecutar("select * from usuario where usuario = '$usuario'");
        
        return $conexionDB->cantFilas()>0;  
    }

    public function actualizarUsuario($idUsuario, $usuario, $clave){
        require_once("../dataBase/ConexionBD.php");
        
        $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $result = $conexionDB->ejecutar("update usuarios set usuario='$usuario', clave='$clave' 
                                                where idUsuario = '$idUsuario'");
        
        return $conexionDB->cantFilas()>0;  
    }
}
?>
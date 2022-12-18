<?php
class ProvinciaDAO {
    
    public function listarProvincias(){
        require_once("../dataBase/ConexionBD.php");
        require_once("../model/Provincia.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $result = $conexionDB->ejecutar("select * from provincias");
        
        while ($prov = $result->fetch_assoc()) {
            $provObj = new Provincia($prov["idprovincia"], $prov["nombre"]);

            $listaProv[] = $provObj;
        }

        return $listaProv;    
    }
    

    public function altaProvincia($nombre){
        require_once("../dataBase/ConexionBD.php");
        
        $veo =  $this->existeProvincia($nombre); 
        if($veo){
            return false;
        }else{
            $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
            $conexionDB->conectar(); //me conecto
            $result = $conexionDB->ejecutar("INSERT INTO provincias (nombre) VALUES ('$nombre')");
            
            return $conexionDB->cantFilas()>0;  
        }
    }

    public function existeProvincia($nombre){
        require_once("../dataBase/ConexionBD.php");
        
        $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $result = $conexionDB->ejecutar("select * from provincias where nombre = '$nombre'");
        
        return $conexionDB->cantFilas()>0;  
    }

    public function actualizarProvincia($idprovincia, $nombre){
        require_once("../dataBase/ConexionBD.php");
        
        $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $result = $conexionDB->ejecutar("update provincias set nombre='$nombre' where idprovincia = '$idprovincia'");
        
        return $conexionDB->cantFilas()>0;  
    }
   
}
?>
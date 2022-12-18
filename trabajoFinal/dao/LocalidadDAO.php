<?php
class LocalidadDAO {
    
    public function listarLocalidades(){
        require_once("../dataBase/ConexionBD.php");
        require_once("../model/Localidad.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $result = $conexionDB->ejecutar("select l.*, p.nombre as nombreProv
                                         from localidades l
                                              inner join provincias p on p.idprovincia = l.idProvincia");
        
        while ($loc = $result->fetch_assoc()) {
            $locObj = new Localidad($loc["idlocalidad"], $loc["nombre"],$loc["nombreProv"]);

            $listaLoc[] = $locObj;
        }

        return $listaLoc;    
    }

    public function altaLocalidad($nombre, $idprovincia){
        require_once("../dataBase/ConexionBD.php");
        
        $veo =  $this->existeLocalidad($nombre, $idprovincia); 
        if($veo){
            return false;
        }else{
            $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
            $conexionDB->conectar(); //me conecto
            $result = $conexionDB->ejecutar("INSERT INTO localidades (nombre, idProvincia) 
                                             VALUES ('$nombre', '$idprovincia')");
            
            return $conexionDB->cantFilas()>0;  
        }
    }

    public function existeLocalidad($nombre, $idprovincia){
        require_once("../dataBase/ConexionBD.php");
        
        $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $result = $conexionDB->ejecutar("SELECT * FROM localidades 
                                         WHERE nombre = '$nombre' and idProvincia = $idprovincia");
        
        return $conexionDB->cantFilas()>0;  
    }
}
?>
<?php
class PedidoDAO {
    
    public function listarPedidos(){
        require_once("../dataBase/ConexionBD.php");
        require_once("../model/Pedido.php");

        $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto"); //creo la conex
        $conexionDB->conectar(); //me conecto
        $result = $conexionDB->ejecutar("select * from pedidos");
        
        while ($ped = $result->fetch_assoc()) {
            $pedObj = new Pedido($ped["idpedido"], $ped["nombre"],$ped["apellido"], $ped["usuario"],
                                 $ped["mail"], $ped["localidad"], $ped['lugarentrega'], $ped["codpostal"], 
                                 $ped["formadepago"], $ped["tarjtitular"], $ped["tarjnumero"], 
                                 $ped["tarjvto"], $ped["tarjclave"]);

            $listaPed[] = $pedObj;
        }

        return $listaPed;    
    }
}
?>
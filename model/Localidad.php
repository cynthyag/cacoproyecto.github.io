<?php 
class Localidad {
    private $idLocalidad;
    private $nombre;
    private $idProvincia;

    function __construct($idLocalidad, $nombre, $idProvincia) {
        $this->idLocalidad=$idLocalidad;    
        $this->nombre=$nombre;       
        $this->idProvincia=$idProvincia; 
    }   


    /**
     * Get the value of idLocalidad
     */ 
    public function getIdLocalidad()
    {
        return $this->idLocalidad;
    }

    /**
     * Set the value of idLocalidad
     *
     * @return  self
     */ 
    public function setIdLocalidad($idLocalidad)
    {
        $this->idLocalidad = $idLocalidad;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of idProvincia
     */ 
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set the value of idProvincia
     *
     * @return  self
     */ 
    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }
}
?>
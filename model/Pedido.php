<?php
    class Pedido{
        private $idPedido;
        private $nombre;
        private $apellido;
        private $usuario;
        private $mail;
        private $lugarEntrega;
        private $localidad;
        private $cp;
        private $formaPago;
        private $tarjTitular;
        private $tarjNumero;
        private $tarjVto;
        private $tarjClave;

        function __construct($idPedido, $nombre, $apellido, $usuario, $mail, $lugarEntrega, $localidad,
                             $cp, $formaPago, $tarjTitular, $tarjNumero, $tarjVto, $tarjClave) {

                $this->idPedido=$idPedido; 
                $this->nombre=$nombre;
                $this->apellido=$apellido;       
                $this->usuario=$usuario;    
                $this->mail=$mail;
                $this->lugarEntrega=$lugarEntrega;
                $this->localidad=$localidad;
                $this->cp=$cp;
                $this->formaPago=$formaPago;
                $this->tarjTitular=$tarjTitular;
                $this->tarjNumero=$tarjNumero;              
                $this->tarjVto=$tarjVto;
                $this->tarjClave=$tarjClave;
        }

        /**
         * Get the value of idPedido
         */ 
        public function getIdPedido()
        {
                return $this->idPedido;
        }

        /**
         * Set the value of idPedido
         *
         * @return  self
         */ 
        public function setIdPedido($idPedido)
        {
                $this->idPedido = $idPedido;

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
         * Get the value of apellido
         */ 
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        /**
         * Get the value of usuario
         */ 
        public function getUsuario()
        {
                return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */ 
        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }

        /**
         * Get the value of localidad
         */ 
        public function getLocalidad()
        {
                return $this->localidad;
        }

        /**
         * Set the value of localidad
         *
         * @return  self
         */ 
        public function setLocalidad($localidad)
        {
                $this->localidad = $localidad;

                return $this;
        }

        /**
         * Get the value of cp
         */ 
        public function getCp()
        {
                return $this->cp;
        }

        /**
         * Set the value of cp
         *
         * @return  self
         */ 
        public function setCp($cp)
        {
                $this->cp = $cp;

                return $this;
        }

        /**
         * Get the value of formaPago
         */ 
        public function getFormaPago()
        {
                return $this->formaPago;
        }

        /**
         * Set the value of formaPago
         *
         * @return  self
         */ 
        public function setFormaPago($formaPago)
        {
                $this->formaPago = $formaPago;

                return $this;
        }

        /**
         * Get the value of tarjTitular
         */ 
        public function getTarjTitular()
        {
                return $this->tarjTitular;
        }

        /**
         * Set the value of tarjTitular
         *
         * @return  self
         */ 
        public function setTarjTitular($tarjTitular)
        {
                $this->tarjTitular = $tarjTitular;

                return $this;
        }

        /**
         * Get the value of tarjNumero
         */ 
        public function getTarjNumero()
        {
                return $this->tarjNumero;
        }

        /**
         * Set the value of tarjNumero
         *
         * @return  self
         */ 
        public function setTarjNumero($tarjNumero)
        {
                $this->tarjNumero = $tarjNumero;

                return $this;
        }

        /**
         * Get the value of tarjVto
         */ 
        public function getTarjVto()
        {
                return $this->tarjVto;
        }

        /**
         * Set the value of tarjVto
         *
         * @return  self
         */ 
        public function setTarjVto($tarjVto)
        {
                $this->tarjVto = $tarjVto;

                return $this;
        }

        /**
         * Get the value of tarjClave
         */ 
        public function getTarjClave()
        {
                return $this->tarjClave;
        }

        /**
         * Set the value of tarjClave
         *
         * @return  self
         */ 
        public function setTarjClave($tarjClave)
        {
                $this->tarjClave = $tarjClave;

                return $this;
        }

        /**
         * Get the value of lugarEntrega
         */ 
        public function getLugarEntrega()
        {
                return $this->lugarEntrega;
        }

        /**
         * Set the value of lugarEntrega
         *
         * @return  self
         */ 
        public function setLugarEntrega($lugarEntrega)
        {
                $this->lugarEntrega = $lugarEntrega;

                return $this;
        }
    }
?>
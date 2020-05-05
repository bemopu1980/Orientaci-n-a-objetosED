<?php
    class Colegio{

        //Propiedades
        private $nombre;
        private $direccion;
        private $codDistrito;
        private $apertura = false;

        //Métodos
        public function getNombre()
        {
            return $this->nombre;
        }
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getDireccion()
        {
            return $this->direccion;
        }
        public function setDireccion($direccion)
        {
            $this->direccion = $direccion;
        }

        public function getCodDistrito()
        {
            return $this->codDistrito;
        }
        public function setCodDistrito($codDistrito)
        {
            $this->codDistrito = $codDistrito;
        }

        public function getApertura()
        {
            return $this->apertura;
        }
        public function setApertura($apertura)
        {
            $this->apertura = $apertura;
        }

        //Constructor/Objetos
        public function __construct($nombre, $direccion, $codDistrito, $apertura)
        {
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->codDistrito = $codDistrito;
            $this->apertura = $apertura;
        }

        public function abierto()
        {
            if($this->apertura)
            {
                echo "El colegio ya está abierto";
            }else{
                echo "El colegio ahora si está abierto";
                $this->abierto = true;
            }
        }

        public function estado()
        {
            if($this->apertura)
            {
                echo "ABIERTO</br>";
            }else{
                echo "CERRADO</br>";
            }
        }
    }
?>
<?php
    class Persona{

        //Propiedades
        protected $nombre;
        protected $apellido;
        protected $documento;
        protected $edad;

        //Métodos
        public function getNombre()
        {
            return $this->nombre;
        }
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
         
        
        public function getApellido()
        {
            return $this->apellido;
        }
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        public function getDocumento()
        {
            return $this->documento;
        }
        public function setDocumento($documento)
        {
            $this->documento = $documento;
        }

        public function getEdad()
        {
            return $this->edad;
        }
        public function setEdad($edad)
        {
            $this->edad = $edad;
        }


        public function __construct($nombre, $apellido, $documento, $edad)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->documento = $documento;
            $this->edad = $edad;
        }

        
        public function datos()
        {
            echo "Nombre: ".$this->nombre.
            "<br>Apellido: ".$this->apellido.
            "<br>Documento: ".$this->documento.
            "<br>Edad: ".$this->edad;
        }

        
    }

?>
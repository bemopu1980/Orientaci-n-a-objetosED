<?php
    require_once "persona.php";
    require_once "interfaces.php";

  
    class Alumno extends Persona implements asistencia
    {
        private $nia;

        public function getNia()
        {
            return $this->nia;
        }
        public function setNia($nia)
        {
            $this->nia = $nia;
        }

        //Plomorfismo
        public function datos()
        {
            echo "<p style='color:red;'>ALUMNO:</p>";
            parent::datos(); //Invoco al metodo del padre.
            echo "<br>Nia: ".$this->nia."<br>---------<br>";
        }

        public function asistio()
        {
            echo "Asistio";
        }
        public function ausente()
        {
            echo "Ausente";
        }

        public function __construct($nombre, $apellido, $documento, $edad, $nia)
        {
            parent::__construct($nombre, $apellido, $documento, $edad);
            $this->nia = $nia;
        }

    }
    
    //index
    /*$alumno1 = new Alumno("Juan", "Rojas", "25965873E", 22, 1522663);
    $alumno1->datos();

    $alumno2 = new Alumno("Pedro", "Perez", "3677859F", 18, 1285552);
    $alumno2->datos();*/
?>
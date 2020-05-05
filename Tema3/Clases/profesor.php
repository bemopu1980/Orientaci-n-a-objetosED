<?php
    require_once "persona.php";
    require_once "interfaces.php";

    

    class Profesor extends Persona implements asistencia
    {
        private $asignatura;

        public function getAsignatura()
        {
            return $this->asignatura;
        }
        public function setAsignatura($asignatura)
        {
            $this->asignatura = $asignatura;
        }

        //Plomorfismo
        public function datos()
        {
            echo "<p style='color:red;'>PROFESOR:</p>";
            parent::datos(); //Invoco al metodo del padre.
            echo "<br>Asignatura: ".$this->asignatura."<br>---------<br>";
        }

        public function asistio()
        {
            echo "Asistio";
        }
        public function ausente()
        {
            echo "Ausente";
        }

        public function __construct($nombre, $apellido, $documento, $edad, $asignatura)
        {
            parent::__construct($nombre, $apellido, $documento, $edad);
            $this->asignatura = $asignatura;
        }
    }
     
//INDEX
    /*$alumno1 = new Alumno("Jorge", "Rosas", "26851873E", 35, "Sistemas Informaticos");
    $alumno1->datos();

    $alumno2 = new Alumno("Luis", "Paredez", "3677859G", 55, "Lenguaje de Marcas");
    $alumno2->datos();*/
?>
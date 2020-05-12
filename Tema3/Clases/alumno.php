<?php
    require_once "persona.php";
    require_once "interfaces.php";

  
    class Alumno extends Persona implements asistencia
    {
        private $nia;
        private $nota = true;

        public function getNia()
        {
            return $this->nia;
        }
        public function setNia($nia)
        {
            $this->nia = $nia;
        }
         public function getNotas()
        {
            return $this->notas;
        }
        public function setNotas($notas)
        {
            $this->notas = $notas;
        }

        //Plomorfismo
        public function datos()
        {
            echo "<p style='color:red;'>ALUMNO:</p>";
            parent::datos(); //Invoco al metodo del padre.
            echo "<br>Nia: ".$this->nia;
            echo "<br>Calificación: ".$this->notas."<br>---------<br>";
        }

        public function asistio()
        {
            echo "Asistio";
        }
        public function ausente()
        {
            echo "Ausente";
        }
        public function notas(){
            if($this->notas = true){
                echo "El alumno está aprobado.";
            }else{
                $this->notas = false;
                echo "El alumno esta suspendido.";
            }   
        } 
        public function __construct($nombre, $apellido, $documento, $edad, $nia, $notas)
        {
            parent::__construct($nombre, $apellido, $documento, $edad);
            $this->nia = $nia;
            $this->notas = $notas;
        }

    }
    
    //index
    /*$alumno1 = new Alumno("Juan", "Rojas", "25965873E", 22, 1522663);
    $alumno1->datos();

    $alumno2 = new Alumno("Pedro", "Perez", "3677859F", 18, 1285552);
    $alumno2->datos();*/
?>
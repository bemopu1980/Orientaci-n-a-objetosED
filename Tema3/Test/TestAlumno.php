<?php
    use PHPUnit\Framework\TestCase;
    include "../Clases/alumno.php";

    final class TestAlumno extends TestCase
    {

        public function testnotas()
        {
          $alum = new alumno("Juan", "Rojas", "25965873E", 22, 1522663,"Aprobado");
         /* $alum->notas();*/
        
          $target = $alum->getnotas();
          $excepted = "Aprobado" ;
          $this->assertEquals($excepted, $target);
        }
        public function testedad()
        {
          $alum = new alumno("Juan", "Rojas", "25965873E", 22, 1522663,"Aprobado");
         /* $alum->edad();*/
        
          $target = $alum->getedad();
          $excepted = true ;
          $this->assertEquals($excepted, $target);
        }
    }
?>
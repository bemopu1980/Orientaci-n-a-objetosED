<?php
	/*require_once "profesor.php";
	require_once "alumno.php";*/

	function autoload($clase){
		include "Clases/" . $clase . ".php";
	}
	spl_autoload_register('autoload');

	$alumno1 = new Alumno("Juan", "Rojas", "25965873E", 22, 1522663, "Aprobado");
    $alumno1->datos();

    $alumno2 = new Alumno("Pedro", "Perez", "3677859F", 18, 1285552, "Suspendido");
    $alumno2->datos();

    $profesor1 = new Profesor("Jorge", "Rosas", "26851873E", 35, "Sistemas Informaticos");
    $profesor1->datos();

    $profesor2 = new Profesor("Luis", "Paredez", "3677859G", 55, "Lenguaje de Marcas");
    $profesor2->datos();
?>
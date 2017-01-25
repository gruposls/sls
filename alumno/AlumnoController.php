<?php 
	include 'BLAlumno.php';

	$opcion = $_POST["opcion"];
	$bl_alumno = null;

	switch ( $opcion ) {
		case 'registrar':
			//include (dirname(__FILE__) . '/../libreria/emil.php');

			$bl_alumno = new BLAlumno();
			echo $bl_alumno->registrar();
			break;
		
		case 'listar':
			$bl_alumno = new BLAlumno();
			$bl_alumno->listar();
			break;
		case 'listarPorFechasYEstado':
			$bl_alumno = new BLAlumno();
			$bl_alumno->listarPorArregloParametros();			
			break;
	}
	
	
	
	
	
		
	


		

		

 ?>
<?php 
	include 'BLAlumno.php';

	$opcion = $_POST["opcion"];
	$bl_alumno = null;

	switch ( $opcion ) {
		case 'registrar':
			$bl_alumno = new BLAlumno();
			echo $bl_alumno->registrar();
			break;
		
		case 'modificar':

			break;
	}
	
	
	
	
	
		
	


		

		

 ?>
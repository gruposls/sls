<?php 
	include 'BLCurso.php';

	$opcion = $_POST["opcion"];
	$bl_curso = null;

	switch ( $opcion ) {
		case 'combo':
			$bl_curso = new BLCurso();
			$bl_curso->listar();
			break;
		
		case 'modificar':

			break;
	}
	
	
	
	
	
		
	


		

		

 ?>
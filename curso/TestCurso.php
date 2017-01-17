<?php 

include 'BLCurso.php';
include 'Curso.php';

	class TestCurso{
		private $bl = null;
		public function registrar(){
			$bl = new BLCurso();
			
			$curso = new Curso();
			$curso->setNombre("membresia digital");

			print_r( $bl->registrar( $curso ) );
			/*imprime 1, si se a registrado correctamente, si no, imprime vacio*/
		}

		public function listar(){
			$bl = new BLProducto();			
			$bl->listar();
		}
	}

	$prueba = new TestCurso();
	$prueba->registrar();
<?php 
	include 'BLAlumno.php';
	include 'Alumno.php';

	class TestAlumno{
		private $bl = null;
		public function registrar(){
			$bl = new blAlumno();

			$alumno = new Alumno();
			$alumno->setNombre("Geo");
			$alumno->setApp("Rios");
			$alumno->setApm("Abarca");
			$alumno->setDni("47859612");
			$alumno->setSexo(1);
			$alumno->setFecha_nac("2017-01-16");
			$alumno->setTelefono("044211454");
			$alumno->setDireccion("Av. America #145");
			$alumno->setEmail("geovanny.j.rios@gmasil.com");
			$alumno->setCreated_at("2017-01-16");
			$alumno->setUpdated_at("2017-07-17");
			$alumno->setEstado(0);
			$alumno->setIdcurso(1);

			echo $bl->registrar( $alumno ) ? "Se registró." : "Llenar e ingresar los campos correctamente.";
		}

		public function listar(){
			echo "listar";
		}
	}

	$test = new TestAlumno();
	$test->registrar();

 ?>
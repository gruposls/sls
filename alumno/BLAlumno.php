<?php 
	include 'DAOAlumno.php';
	include 'ValidarAlumno.php';
	include 'Alumno.php';

	class BLAlumno{

		private $dao = null;
		private $validar = null;

		public function registrar( $objeto ) : bool{
			$rpt = false;
			//$dao = new DAOAlumno();

			$validar = new ValidarAlumno( $objeto );
			return $validar->validarCamposCadena();			
		}

		public function modificar( $objeto ) : bool{
			return true;
		}

		public function listar(){
			echo "listar";			
		}

		public function listarPorID(int $id){
			echo "listar por ID";
		}
	}

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

	$bl = new BLAlumno();
	echo $bl->registrar( $alumno ) ? "Bien" : "Llenar todos los datos correctamente.";

 ?>
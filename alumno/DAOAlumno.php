<?php 
	include (dirname(__FILE__) . '/../comunes/Consultas.php'); 
	include (dirname(__FILE__) . '/../comunes/Conexion.php');	

	class DAOAlumno implements Consultas{

		private $conexion = null;

		public function registrar($objeto) : bool{
			$conexion = new Conexion();
			$respuesta = false;
			try{
				$cnn = $conexion->getConexion();
				$sql = "INSERT INTO persona(nombre, app, apm, dni, sexo, fecha_nac, telefono, direccion, email, created_at, updated_at, estado, idcurso) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?);";

				/*$alumno->getNombre();
				$alumno->getApp();
				$alumno->getApm();
				$alumno->getDni();
				$alumno->getSexo();
				$alumno->getFecha_nac();
				$alumno->getTelefono();
				$alumno->getDireccion();
				$alumno->getEmail();
				$alumno->getCreated_at();
				$alumno->getUpdated_at();
				$alumno->getEstado();
				$alumno->getIdcurso();*/

				$statement = $cnn->prepare( $sql );
				$statement->bindParam(1, $objeto->getNombre(), PDO::PARAM_STR);
				$statement->bindParam(2, $objeto->getApp(), PDO::PARAM_STR);
				$statement->bindParam(3, $objeto->getApm(), PDO::PARAM_STR);
				$statement->bindParam(4, $objeto->getDni(), PDO::PARAM_STR);
				$statement->bindParam(5, $objeto->getSexo(), PDO::PARAM_INT);
				$statement->bindParam(6, $objeto->getFecha_nac(), PDO::PARAM_STR);
				$statement->bindParam(7, $objeto->getTelefono(), PDO::PARAM_STR);
				$statement->bindParam(8, $objeto->getDireccion(), PDO::PARAM_STR);
				$statement->bindParam(9, $objeto->getEmail(), PDO::PARAM_STR);
				$statement->bindParam(10, $objeto->getCreated_at(), PDO::PARAM_STR);
				$statement->bindParam(11, $objeto->getUpdated_at(), PDO::PARAM_STR);
				$statement->bindParam(12, $objeto->getEstado(), PDO::PARAM_INT);
				$statement->bindParam(13, $objeto->getIdcurso(), PDO::PARAM_INT);
				
				$respuesta = $statement->execute();//devuelve true, si no hubo error.
				
			}catch(Exception $e){
				echo "EXCEPCIÓN ".$e->getMessage();
			}finally{
				$statement->closeCursor();
				$conexion = null;
			}
			return $respuesta;
		}
		public function modificar($objeto) : bool{
			return true;
		}
		public function listar(){
			echo "listar alumnos";
		}
		public function listarPorID(int $id){
			echo "listar por id";
		}
	}

	$dao = new DAOAlumno();

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
	$alumno->setEstado(1);
	$alumno->setIdcurso(1);

	echo $dao->registrar( $alumno ) ? "Se registró." : "Error";

 ?>
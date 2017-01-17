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
				/*Notice: Only variables should be passed by reference*/
				$nombre = $objeto->getNombre();
				$app = $objeto->getApp();
				$apm = $objeto->getApm();
				$dni = $objeto->getDni();
				$sexo = $objeto->getSexo();
				$fecha_nac = $objeto->getFecha_nac();
				$telefono = $objeto->getTelefono();
				$direccion = $objeto->getDireccion();
				$email = $objeto->getEmail();
				$created_at = $objeto->getCreated_at();
				$updated_at = $objeto->getUpdated_at();
				$estado = $objeto->getEstado();
				$idcurso = $objeto->getIdcurso();

				$statement = $cnn->prepare( $sql );
				$statement->bindParam(1, $nombre, PDO::PARAM_STR);
				$statement->bindParam(2, $app, PDO::PARAM_STR);
				$statement->bindParam(3, $apm, PDO::PARAM_STR);
				$statement->bindParam(4, $dni, PDO::PARAM_STR);
				$statement->bindParam(5, $sexo, PDO::PARAM_INT);
				$statement->bindParam(6, $fecha_nac, PDO::PARAM_STR);
				$statement->bindParam(7, $telefono, PDO::PARAM_STR);
				$statement->bindParam(8, $direccion, PDO::PARAM_STR);
				$statement->bindParam(9, $email, PDO::PARAM_STR);
				$statement->bindParam(10, $created_at, PDO::PARAM_STR);
				$statement->bindParam(11, $updated_at, PDO::PARAM_STR);
				$statement->bindParam(12, $estado, PDO::PARAM_INT);
				$statement->bindParam(13, $idcurso, PDO::PARAM_INT);
				
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
 ?>
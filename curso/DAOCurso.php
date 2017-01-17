<?php

	include (dirname(__FILE__) . '/../comunes/Conexion.php'); 
	include (dirname(__FILE__) . '/../comunes/Consultas.php');	


	class DAOCurso implements Consultas
	{
		private $conexion=null;

		public function registrar( $objeto ) : bool{
			$conexion = new Conexion();
			$respuesta = false;
			try{
				$cnn = $conexion->getConexion();
				$sql = "INSERT INTO curso (nombre,estado) VALUES(:nombre,1);";
				$statement = $cnn->prepare( $sql );

				$curso =$objeto->getNombre();				

				$statement->bindParam(':nombre', $curso,PDO::PARAM_STR);
				
				$respuesta = $statement->execute();//devuelve true, si no hubo error.
				
			}catch(Throwable $e){
				echo "EXCEPCIÓN ".$e->getMessage();
			}finally{
				$statement->closeCursor();
				$conexion = null;
			}
			return $respuesta;
		}

		public function modificar( $objeto ) : bool{
			return true;
		}

		public function listar(){
			$conexion =new Conexion();
				try {
						$cnn=$conexion -> getConexion();
						$sql= "SELECT * FROM curso;";
						$statement=$cnn->prepare($sql);
						$statement->execute();
						while($resultado=$statement->fetch(PDO::FETCH_ASSOC)){
							$data["data"][]=$resultado;
					}
						echo json_encode($data);
				}catch (Throwable $e) {
				echo $e->getMessage();
				}finally{
				$statement->closeCursor();
				$conexion = null;
				}
			}
				public function listarPorID(int $id){
				echo "listar por ID";
				}
		}

?>
<?php

	include (dirname(__FILE__) . '/../comunes/Conexion.php'); 
	include (dirname(__FILE__) . '/../comunes/Consultas.php');	


	class DAOCurso class_implements Consultas
	{
		private $conexion=null;

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
	}
?>
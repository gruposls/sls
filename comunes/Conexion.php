<?php 

	class Conexion{
		private $host = "localhost";
		private $dbname = "sls_bd";
		private $user = "root";
		private $password = "";
		private $conexion = null;

		public function getConexion(){
			try{
			    $this->conexion = new PDO("mysql:host=$this->host; dbname=$this->dbname", $this->user, $this->password);
				$this->conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//reporte de errores y excepciones
				$this->conexion->exec("SET CHARACTER SET utf8");
				return $this->conexion;
			}catch(Throwable $e){
				echo "Error ".$e->getMessage();
			}finally{
				//vaciar memoria
				$this->conexion = null;
			}
		}	
	}
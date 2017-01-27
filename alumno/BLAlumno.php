<?php 
	include 'DAOAlumno.php';
	include 'ValidarAlumno.php';
	include 'Alumno.php';

	class BLAlumno{

		private $dao = null;
		private $validar = null;

		public function registrar() : string{
			$informacion = [];

			$alumno = new Alumno();
			$alumno->setNombre( $_POST["nombre"] );
			$alumno->setApp( $_POST["app"] );
			$alumno->setApm( $_POST["apm"] );
			$alumno->setDni( $_POST["dni"] );
			$alumno->setSexo( $_POST["sexo"] );
			$alumno->setFecha_nac( $_POST["fecha_nac"] );
			$alumno->setTelefono( $_POST["telefono"] );
			$alumno->setDireccion( $_POST["direccion"] );
			$alumno->setEmail( $_POST["email"] );
			$alumno->setCreated_at( date("Y-m-d"));//date("Y-m-d H:i:s");
			$alumno->setUpdated_at( date("Y-m-d H:i:s") );
			$alumno->setEstado(0);//por defecto cero
			$alumno->setIdcurso( $_POST["idcurso"] );

			$validar = new ValidarAlumno( $alumno );

			if ( $validar->validarCampos() ){
				$dao = new DAOAlumno();
				$dao->registrar( $alumno ) ? $informacion["respuesta"] = "ok_registro" : $informacion["respuesta"] = "error_registro";
				include (dirname(__FILE__) . '/../libreria/email.php');//envio a email
			}else{
				$informacion["respuesta"] = "error_campos"; 
			}

			return ( json_encode($informacion) );
			
		}

		public function modificar( $objeto ) : bool{
			return true;
		}

		public function listar(){
			$dao = new DAOAlumno();
			$dao->listar();	
		}

		public function listarPorArregloParametros(){

			$parametros[0] = $_POST["estado"];
			$parametros[1] = $_POST["fecha_inicio"];
			$parametros[2] = $_POST["fecha_final"];

			$dao = new DAOAlumno();
			$dao->listarPorArregloParametros( $parametros );
		}

		public function modificarEstadoPago() : bool{

			$parametros[0] = $_POST["idpersona"];
			$parametros[1] = $_POST["estado"];

			$dao = new DAOAlumno();
			$dao->modificarEstadoPago($parametros);
		}
	}

	/*$alumno = new Alumno();
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
	echo $bl->registrar( $alumno ) ? "Bien" : "Llenar todos los datos correctamente.";*/

 ?>
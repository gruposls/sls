<?php 
	include 'BLAlumno.php';
	//include 'Alumno.php';

	class TestAlumno{
		private $bl = null;
		public function registrar(){
			$bl = new blAlumno();
			//$alumno = new Alumno();
			$_POST["nombre"] = "Jorge";
			$_POST["app"] = "Vereau";
			$_POST["apm"] = "ABC";
			$_POST["dni"] = "47859508";
			$_POST["sexo"] = 1;
			$_POST["fecha_nac"] = "1991-04-11";
			$_POST["telefono"] = "044218562";
			$_POST["direccion"] = "Av. America #74";
			$_POST["email"] = "jorge.v.flores@gmail.com";
			//date("Y-m-d", time()) = ;
			//date("Y-m-d", time()) = ;
			//$alumno->setEstado(0);//por defecto cero
			$_POST["idcurso"] = 1;
			//include (dirname(__FILE__) . '/../libreria/email.php');
			echo $bl->registrar() ? "Se registró." : "Llenar e ingresar los campos correctamente.";
		}

		public function listar(){
			$bl = new BLAlumno();
			$bl->listar();
		}

		public function listarPorArregloParametros(){

			$bl = new BLAlumno();
			$bl->listarPorArregloParametros();
		}
	}

	$test = new TestAlumno();
	$test->registrar();

 ?>
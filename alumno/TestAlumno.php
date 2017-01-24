<?php 
	include 'BLAlumno.php';
	//include 'Alumno.php';

	class TestAlumno{
		private $bl = null;
		public function registrar(){
			$bl = new blAlumno();
			//$alumno = new Alumno();
			$_POST["nombre"] = "Pett";
			$_POST["app"] = "Ríos";
			$_POST["apm"] = "Abarca";
			$_POST["dni"] = "48751230";
			$_POST["sexo"] = 1;
			$_POST["fecha_nac"] = "2017-01-16";
			$_POST["telefono"] = "044211454";
			$_POST["direccion"] = "Av. America #145";
			$_POST["email"] = "pett.j.rios@gmasil.com";
			//date("Y-m-d", time()) = ;
			//date("Y-m-d", time()) = ;
			//$alumno->setEstado(0);//por defecto cero
			$_POST["idcurso"] = 2;

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
	$test->listarPorArregloParametros();

 ?>
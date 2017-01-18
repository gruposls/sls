<?php 

	include (dirname(__FILE__) . '/../comunes/Validar.php');

	class ValidarAlumno implements Validar{
		private $objeto;
		private $alumno;
		public function __construct($objeto){
			$this->objeto = $objeto;
		}

		public function validarCamposCadena() : bool{
			$alumno = $this->objeto;
			$rpt = false;
			if( !empty($alumno->getNombre()) && 
				!empty($alumno->getApp()) &&
				!empty($alumno->getApm()) &&
				!empty($alumno->getDni()) &&
				!empty($alumno->getFecha_nac()) &&
				!empty($alumno->getTelefono()) &&
				!empty($alumno->getDireccion()) &&
				!empty($alumno->getEmail()) &&
				!empty($alumno->getCreated_at()) &&
				$alumno->getSexo() >= 0 &&
				$alumno->getEstado() >= 0 &&
				$alumno->getIdcurso() > 0 ){
				//$dao->registrar( $alumno );
				$rpt = true;
			}
			return $rpt;
		}
		public function validarCamposEntero() : bool{
			return true;
		}
		public function validarCamposBool() : bool{
			return true;
		}
		public function validarCamposFecha(): bool{
			return true;
		}

		function __destruct(){
			unset($objeto);
			unset($alumno);
		} 
	}

 ?>
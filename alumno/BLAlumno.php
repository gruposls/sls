<?php 
	include 'DAOAlumno.php';

	class BLAlumno{

		private $dao = null;

		public function registrar( $objeto ) : bool{
			$rpt = false;
			$dao = new DAOAlumno();
			
			if( !empty($objeto->getNombre()) && 
				!empty($objeto->getApp()) &&
				!empty($objeto->getApm()) &&
				!empty($objeto->getDni()) &&
				!empty($objeto->getFecha_nac()) &&
				!empty($objeto->getTelefono()) &&
				!empty($objeto->getDireccion()) &&
				!empty($objeto->getEmail()) &&
				!empty($objeto->getCreated_at()) &&
				$objeto->getSexo() >= 0 &&
				$objeto->getEstado() >= 0 &&
				$objeto->getIdcurso() > 0 ){
				$rpt = $dao->registrar( $objeto );
			}
			return $rpt;
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

 ?>
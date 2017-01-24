<?php
include 'DAOCurso.php';

class BLCurso 
{
	private $dao=null;

	public function registrar( $objeto ) : bool{
		$rpt = false;
		$dao = new DAOCurso();
		if( !empty( $objeto->getNombre())){
			$dao->registrar( $objeto );
			$rpt = true;
		}			
		return $rpt;
	}
	
	public function modificar( $objeto ) : bool{
		return true;
	}

	public function listar(){
		$dao = new DAOCurso();
		$dao->listar();			
	}

	public function listarPorArregloParametros(array $a){
		echo "listar por ID";
	}
}
?>
<?php
include 'DAOCurso.php';

class BLCurso 
{
	private $dao=null;

	function __construct(argument)
	public function listar(){
			$dao = new DAOCurso();
			$dao->listar();			
		}

		public function listarPorID(int $id){
			echo "listar por ID";
		}
}
?>
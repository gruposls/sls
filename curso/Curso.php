<?php 

/**
* 
*/
class Curso 
{
		private $idcurso
		private $nombre;

		public function Curso(){//contructor vacio
			$this->idcurso = 0;
			$this->nombre = "";
		}

		public function getNombre() : string{
			return $this->nombre;
		}

		public function setNombre(string $nombre){
			$this->nombre = $nombre;
		}

}
?>
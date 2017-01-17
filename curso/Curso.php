<?php 

/**
* 
*/
class Curso 
{
		private $idcurso;
		private $nombre;
		private $estado;

		public function Curso(){//contructor vacio
			$this->idcurso = 0;
			$this->nombre = "";
			$this->estado=0;
		}

		public function getNombre() : string{
			return $this->nombre;
		}

		public function setNombre(string $nombre){
			$this->nombre = $nombre;
		}

		public function getEstado() : int{
			return $this->estado;
		}

		public function setEstado(int $estado){
			$this->estado = $estado;
		}

}
?>
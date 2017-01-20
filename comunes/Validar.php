<?php 

	interface Validar{
		public function validarCampos() : bool ;
		public function validarCamposEntero() : bool;
		public function validarCamposBool() : bool;
		//public function validarCamposFecha(): bool;
	}

 ?>
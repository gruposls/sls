<?php 

	interface Validar{
		public function validarCamposCadena() : bool ;
		public function validarCamposEntero() : bool;
		public function validarCamposBool() : bool;
		public function validarCamposFecha(): bool;
	}

 ?>
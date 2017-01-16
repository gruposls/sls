<?php 

	class Alumno{
		private $idpersona;
		private $nombre;
		private $app;
		private $apm;
		private $dni;
		private $sexo;
		private $fecha_nac;
		private $telefono;
		private $direccion;
		private $created_at;
		private $updated_at;
		private $estado;
		private $idcurso;

		public Alumno(){
			$this->idpersona = 0;
			$this->nombre = "";
			$this->app = "";
			$this->apm = "";
			$this->dni = "";
			$this->sexo = "";
			$this->fecha_nac = date("d-m-Y");
			$this->direccion = "";
			$this->created_at = date("Y-m-d", time());
			$this->updated_at = date("Y-m-d", time());
			$this->estado = 0;
			$this->idcurso = 0;
		}

		public function getIdpersona() : int{
			return $this->idpersona;
		}

		public function setIdpersona(int $idpersona){
			$this->idpersona = $idpersona;
		}

		public function getNombre() : string{
			return $this->nombre;
		}

		public function setNombre(string $nombre){
			$this->nombre = $nombre;
		}

		public function getApp() : string{
			return $this->app;
		}

		public function setApp(string $app){
			$this->app = $app;
		}

		public function getApm() : string{
			return $this->apm;
		}

		public function setApm(string $apm){
			$this->apm = $apm;
		}

		public function getDni() : string{
			return $this->dni;
		}

		public function setDni(string $dni){
			$this->dni = $dni;
		}

		public function getSexo() : int {
			return $this->sexo;
		}

		public function setSexo(int $sexo){
			$this->sexo = $sexo;
		}

		public function getFecha_nac(){
			return $this->fecha_nac;
		}

		public function setFecha_nac($fecha_nac){
			$this->fecha_nac = $fecha_nac;
		}

		public function getTelefono() : string{
			return $this->telefono;
		}

		public function setTelefono(string $telefono){
			$this->telefono = $telefono;
		}

		public function getDireccion() : string{
			return $this->direccion;
		}

		public function setDireccion(string $direccion){
			$this->direccion = $direccion;
		}

		public function getCreated_at(){
			return $this->created_at;
		}

		public function setCreated_at($created_at){
			$this->created_at = $created_at;
		}

		public function getUpdated_at(){
			return $this->updated_at;
		}

		public function setUpdated_at($updated_at){
			$this->updated_at = $updated_at;
		}

		public function getEstado() : int{
			return $this->estado;
		}

		public function setEstado(int $estado){
			$this->estado = $estado;
		}

		public function getIdcurso() : int{
			return $this->idcurso;
		}

		public function setIdcurso(int $idcurso){
			$this->idcurso = $idcurso;
		}


	}

 ?>
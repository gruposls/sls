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
		private $email;
		private $created_at;
		private $updated_at;
		private $estado;
		private $idcurso;

		public function Alumno(){//constructor vacio
			$this->idpersona = 0;
			$this->nombre = "";
			$this->app = "";
			$this->apm = "";
			$this->dni = "";
			$this->sexo = "";
			$this->fecha_nac = date("d-m-Y");
			$this->direccion = "";
			$this->email = "";
			$this->created_at = date("Y-m-d", time());
			$this->updated_at = date("Y-m-d", time());
			$this->estado = 0;
			$this->idcurso = 0;
		}

		public function getIdpersona() : int {
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

		public function getFecha_nac() : string{
			return $this->fecha_nac;
		}

		public function setFecha_nac(string $fecha_nac){
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

		public function getEmail() : string {
			return $this->email;
		}

		public function setEmail(string $email){
			$this->email = $email;
		}

		public function getCreated_at() :string {
			return $this->created_at;
		}

		public function setCreated_at(string $created_at){
			$this->created_at = $created_at;
		}

		public function getUpdated_at() : string{
			return $this->updated_at;
		}

		public function setUpdated_at(string $updated_at){
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

	/*$alumno = new Alumno();
	$alumno->setNombre("Geo");
	$alumno->setApp("Rios");
	$alumno->setApm("Abarca");
	$alumno->setDni("47859612");
	$alumno->setSexo(1);
	$alumno->setFecha_nac("2017-01-16");
	$alumno->setTelefono("044211454");
	$alumno->setDireccion("Av. America #145");
	$alumno->setEmail("geovanny.j.rios@gmasil.com");
	$alumno->setCreated_at("2017-01-16");
	$alumno->setUpdated_at("2017-07-17");
	$alumno->setEstado(1);
	$alumno->setIdcurso(1);
	//Prueba: para ver que no haya ningún error
	echo $alumno->getNombre()."<br>";
	echo $alumno->getApp()."<br>";
	echo $alumno->getApm()."<br>";
	echo $alumno->getDni()."<br>";
	echo $alumno->getSexo()."<br>";
	echo $alumno->getFecha_nac()."<br>";
	echo $alumno->getTelefono()."<br>";
	echo $alumno->getDireccion()."<br>";
	echo $alumno->getEmail()."<br>";
	echo $alumno->getCreated_at()."<br>";
	echo $alumno->getUpdated_at()."<br>";
	echo $alumno->getEstado()."<br>";
	echo $alumno->getIdcurso()."<br>";*/

 ?>
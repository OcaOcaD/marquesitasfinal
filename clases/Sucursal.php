<?php 
	/**
	 * Sucursal
	 */
	class Sucursal
	{
        //CTOR
		function __construct(){
			$this->direccion =  "";
			$this->correo    =  "";
			$this->telefono  =  "";
		}
        public function constSucursal( $direccion, $correo, $telefono ){
			$this->direccion =  $direccion;
			$this->correo    =  $correo;
			$this->telefono  =  $telefono;
        }
		//GETS
		public function get_direccion(){
			return $this->direccion;
		}
		public function get_correo(){
			return $this->correo;
		}
		public function get_telefono(){
			return $this->telefono;
		}
		//SETS
		public function set_direccion(  $direccion ){
			$this->direccion = $direccion;
		}
        public function set_correo(  $correo ){
	       	$this->correo = $correo;
        }
        public function set_telefono(  $telefono ){
	       	$this->telefono = $telefono;
        }
		//ATTRIBS
		private $direccion;
		private $correo;
		private $telefono;
	}
 ?>
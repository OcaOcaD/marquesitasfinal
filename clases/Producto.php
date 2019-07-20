<?php 
	/**
	 * 
	Producto
	 */
	class Producto
	{
		function __construct(){
			$this->id_producto = NULL;
            $this->nombre      = NULL;
            $this->descripcion = NULL;
            $this->imagen      = NULL;
            $this->categoria   = NULL;
		}
		private $id_producto;
		private $nombre;
		private $descripcion;
		private $imagen;
		private $categoria;
		public function get_id_producto(){
			return $this->id_producto;
		}
		public function get_nombre(){
			return $this->nombre;
		}
		public function get_descripcion(){
			return $this->descripcion;
		}
		public function get_imagen(){
			return $this->imagen;
		}
		public function get_categoria(){
			return $this->categoria;
		}
		public function set_id_producto( $id_producto ) {
			$this->id_producto = $id_producto;
		}
        public function set_nombre( $nombre ){
        	$this->nombre = $nombre;
        }                          
        public function set_descripcion( $descripcion ) {
        	$this->descripcion = $descripcion;
        }                
        public function set_imagen( $imagen ){
        	$this->imagen = $imagen;
        }                          
        public function set_categoria( $categoria ){
        	$this->categoria = $categoria;
        }                    
	}
 ?>
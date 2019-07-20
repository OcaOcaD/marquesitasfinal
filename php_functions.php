<?php 
	include("clases/Producto.php");
	function descargarMenu( $categoria ){
		$menu_query = " SELECT * FROM producto WHERE categoria = '{$categoria}' ORDER BY nombre ASC ";
		include("conexion.php");
		$menu = mysqli_query($conexion, $menu_query);
		if ( $menu ){
	        $m = new SplDoublyLinkedList;
	        $menu_rows = mysqli_num_rows( $menu );
	        for ($i = 0; $i < $menu_rows ; $i++) { 
				$prod = mysqli_fetch_array($menu );
				$p = new Producto;
				$p->set_id_producto( $prod['id_producto'] );
				$p->set_nombre( $prod['nombre'] );
				$p->set_descripcion( $prod['descripcion'] );
				$p->set_imagen( $prod['imagen'] );
				$p->set_categoria( $prod['categoria'] );
				$m->push( $p );
			}
			mysqli_close( $conexion );
			return $m;
		}else{
			return false;
		}
	}
	function guardar_comentario($nombre, $correo, $comentario){
		include("conexion.php");
		$comentario_query = " INSERT INTO comentario ( nombre, correo, comentario)  VALUES ( '{$nombre}', '{$correo}', '{$comentario}' ) ";
		$comentario = mysqli_query( $conexion, $comentario_query );
		mysqli_close( $conexion );
		if ( $comentario )
			return true;
		else{
			return false;
		}
	}
 ?>
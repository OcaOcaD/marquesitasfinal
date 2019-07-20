<?php 
	include("conexion.php");
	$menu = $_POST['menu'];
	$limit = 3;
	switch( $menu ){
		case "mar_d":
			$seleccion = "marquesitas dulces";
			break;
		case "mar_s":
			$seleccion = "marquesitas saladas";
			break;
		case "paletas":
			$seleccion = "paletas";
			break;
		case "nieves":
			$seleccion = "nieves";
			break;
		default:
			echo "SELECCIONA UNA CATEGORIA";
		break;
	}
	$mensaje = "Prueba nuestras ".$seleccion;
    ?>
    <link rel="stylesheet" type="text/css" href="diseño/menu.css">
    <div class="menu_titulo">
	    <div class="block">
	      <div class="h2">
	        <center><h2><?php echo $mensaje ?></h2></center>
	      </div>
	      <div class="h3">
	        
	      </div>
	    </div>
	</div>
    <div class="scrollable">
	    <?php 
	    $menu_query = " SELECT * FROM menu WHERE categoria = '{$seleccion}' ";
	    $menu = mysqli_query($conexion, $menu_query);
	    if( $menu ){
	    	$menu_rows = mysqli_num_rows( $menu );
	    	if( $menu_rows > 0 ){
	    		for ( $i = 0; $i < $menu_rows; $i++ ){
	    			$menu_data = mysqli_fetch_array($menu);
	    			?>
						<div class="info">
							<div class="img-box">
								<img class="img-img" src="diseño/img/<?php echo $menu_data['imagen'] ?>">
								
							</div>
							<p class="prod_desc"><?php echo utf8_decode($menu_data['descripcion']) ?></p>
						</div>
	    			<?php 
	    		}
	    	}
	    }
	 ?>
                
  	</div>
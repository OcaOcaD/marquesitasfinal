<?php 	
	include("php_functions.php");
	$categoria = $_POST['categoria'];
	$mensaje = "Algunas de nuestras ".$categoria;
	$menu = descargarMenu($categoria);
 ?>
 <div class="container">
	<div id="controles_menu">
		<div id="titulo_menu">
			<h2><?php echo $mensaje ?></h2>
		</div>
		<div id="cerrar_menu">
			<button onclick="cerrar_menu()">
				<i class="fas fa-times fa-2x"></i>			
			</button>
		</div>
	</div>
	<div class="menu_box row">
		<?php 
			if ( $menu != false ){
				foreach ($menu as $i => $p) {
					?>
					<div class="prod-box col-lg-4 col-md-6 col-sm-12 col-xs 12">
						<center><img src="diseño/productos/<?php echo $p->get_imagen() ?>" alt=""></center>
						<center><p><?php echo $p->get_nombre() ?></p></center>
					</div>
					<?php 
				}
			}else{
				echo "<div class='prod-box'>
						<center><h3>No hay ".$categoria." que mostrar</h3></center>	
					</div>
				";
			}
		 ?>
	</div>
 </div>
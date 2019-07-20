<?php 
 ?>
 <section id="prodMenu">
 	<div id="productosBox">
		<div id="titleMenu">
		<!--<img src="diseño/img/original.png" alt="">--><h1>PRODUCTOS</h1>
		</div>
	    <div id="menuBox">
	    	<div class="menuOpt left">
				<img name="paletas" onclick="loadMenu(this)" src="diseño/img/paletas.png" alt="" class="menuOpt-img menuOpt-txt-left">
				<div class="menuOpt-txt">
					<h1 class="menuOpt-txt-left">PALETAS</h1>
				</div>
	    	</div>
	    	<div class="menuOpt right">
				<img name="nieves" onclick="loadMenu(this)" src="diseño/img/nieves.png" alt="" class="menuOpt-img menuOpt-txt-right">
				<div class="menuOpt-txt">
					<h1 class="menuOpt-txt-right">NIEVES</h1>
				</div>
	    	</div>
 		</div>
		
		 <div class="png-box">
 			<img id="original_png" src="diseño/img/original.png" alt="">
		 </div>
 		<div id="menuBox">
	    	<div class="menuOpt left">
				<img name="bebidas" onclick="loadMenu(this)" src="diseño/img/bebidas.png" alt="" class="menuOpt-img menuOpt-txt-left">
				<div class="menuOpt-txt">
					<h1 class="menuOpt-txt-left">BEBIDAS</h1>
				</div>
	    	</div>
	    	<div class="menuOpt right">
				<img name="marquesitas" onclick="loadMenu(this)" src="diseño/img/marquesitaFresa.png" alt="" class="menuOpt-img menuOpt-txt-right">
				<div class="menuOpt-txt">
					<h1 class="menuOpt-txt-right">MARQUESITAS</h1>
				</div>
	    	</div>
	    </div>
    </div>
    <section id="prod_list"  style = "display: none;">
		<div class="menu_limpio">
		  <div class="block">
		    <div class="h1">
		      <center><h1>Marquesitas las originales</h1></center>
		    </div>
		    <div class="h1">
		      <center><h2>Menú</h2></center>
		    </div>
		  </div>
		</div>
		</section>
  	</section>
<!-- The Modal -->
<div id="myModal" class="modal close">
	<div class="container">
	  <i class="fas fa-times-circle" style="color: red"></i>
	  <div id="caption">
	  	Menú
	  </div>
		
	</div>
  <img class="modal-content" id="modal_img">
</div>
<section id="menuSection">
  <div id="menu_Box" class="textBox">
	<button id="menuButton" class="no_deco text-btn" src="diseño/img/menu.png">
		<h1 class="">O mira el menú completo aquí</h1>
	</button>
  </div>
</section>
<section id="franquiciasPro">
	
	<div id="fran_Box" class="">
		<h1 class="franText">¡Estamos en toda la república!</h1>
		<p class="franText"><small>Da clic en la sucursal del mapa y vísitanos</small></p>
	</div>
	<?php	
		include("mapael/marquemap.html");
	?>
	<!--<div id="mapBox">
		<iframe id = "map" src="https://www.google.com/maps/d/embed?mid=1obXbxpkwRdcSvEEWdTxP8qnRNI-PfWFc&hl=es" width="" height=""></iframe>
	</div>-->
</section>
<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById('menuButton');
	var modalImg = document.getElementById('modal_img');;
	var captionText = "Menú";
	img.onclick = function(){
	  modal.style.display = "block";
	  modalImg.src = "diseño/img/menu.png";
	  captionText.innerHTML = this.alt;
	}
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	  modal.style.display = "none";
	}
</script>
<script>
  function loadMenu(menu){
    categoria = menu.attributes["name"].value;
    $("#prod_list").load("display_menu.php",{
      categoria: categoria
    }).fadeIn('500');
	$( "#book" ).slideDown( "slow", function() {
		// Animation complete.
	});
	console.log("animatio complete");
    goToByScroll("#prod_list");
  }
</script>
<script>
  function cerrar_menu(){
	$("#prod_list").slideUp( "slow", function() {});
	goToByScroll("#prodMenu");
  }
</script>

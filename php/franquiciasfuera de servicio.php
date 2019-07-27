<?php $pestaña_actual= "franquicias"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Franquicias</title>
	<?php include("../plantillas/headersF.html"); ?>
	<link rel="stylesheet" type="text/css" href="../diseño/parallax.css">
	<link rel="stylesheet" type="text/css" href="../diseño/franSmall.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Lobster|Permanent+Marker|Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="../components/weirdLeftButtons/weirdLeftButtons.css">
</head>	

<body>
	
	<?php 
		include("navbarPro.php"); 
		include("../components/weirdLeftButtons/weirdLeftButtons.php");
	?>
	<div class="section saludo">
		
	</div>

  <div class="slides">
    <div class="slide" id="slide-1">
		<div class="slide__content">
			<div id="slide_bg" class="slide__bg"></div>
			<img id = "pngFront" src="../diseño/img/productosF.png">
			<div id="tituloBox">
				<h1 id="slide-1-title">¡Hola!</h1>
			</div>
		</div>
	</div>

    <div class="slide" id="slide-2">
        <div class="slide__text">
          <h1 id="slide-2-title">Somos una franquicia de baja inversión con alto margen de utilidad</h1>
        </div>
      <div class="slide__bg"></div>
    </div>

    <div class="slide" id="slide-3">
      <div id="sContent3" class="slide__content">
		<div class="slide__left">
			<img src="../diseño/productos/marquenieve nutella.jpg">         
        </div>
        <div class="slide__right">
         	<div class="block">
         		<h1>
         			¡Gracias por tu interes en marquesitas!
         		</h1>
         		<h2 style="padding-bottom:1em">
         			TÚ puedes ser el dueño de tu propia franquicia MARQUENIEVE
         		</h2>
         		<h2>¡Súmate a éste exitoso negocio e inovador modelo!</h2>
         		<h3>Puedes elegir entre éstos dos modelos</h3>
         		<div class="flex">
         		    <div>
         		        
         		        <img src="../diseño/img/pfijo.png">
         		        <h3>PUNTO FIJO</h3>
         		    </div>
         		    <div>
         		        <img src="../diseño/img/pmovil.png">
         		        <h3>PUNTO MOVIL</h3>
         		    </div>
         		</div>
         	</div>
        </div>
      </div>
    </div>

<style>
   
</style>
    <div class="slide" id="slide-5">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <div id="inv_comp_block">
    		<div id="inv_title">
    		    <h1>Esto es lo que sabemos que quieres saber</h1>
    		 </div>
    		 <div id="inv_txt" >
    		     <h2>Recupera tu inversión en un periodo de 24 meses</h2>
    		     <div class="inv_cols">
    		         <div class="col_block">
    		            <h2>Cuota de franquicia:</h2>
    		            <h2>$5000 USD</h2>
    		         </div>
    		         <div class="col_block_types">
    		             <div class="inv_top_row" >
    		                <h2>Inversión de equipo e instalación:</h2>
    		                 
    		             </div>
        		         <div class="inv_bot_row">
        		             <div class="inv_pfijo">
        		                 <div class="inv_left_img" >
        		                    <img src="../diseño/img/pfijo.png">
        		                 </div>
        		                 <div class="inv_right_side">
        		                     <h3>Punto Fijo</h3>
        		                     <h3>$178,000</h3>
        		                 </div>
        		             </div>
        		             <div class="inv_pmovil">
        		                 <div class="inv_left_img" >
        		                    <img src="../diseño/img/pmovil.png">
        		                 </div>
        		                 <div class="inv_right_side">
        		                     <h3>Punto movil</h3>
        		                     <h3>$180,300</h3>
        		                 </div>
        		             </div>
        		             
        		         </div>
        		      
    		         </div>
    		     </div>
    		     <div class="inv_cols">
    		         <div class="col_block">
    		            <h2>Regalías:</h2>
    		            <h2>$2500 MXN</h2>
    		            <h2>mensuales</h2>
    		         </div>
    		         <div class="col_block_types">
        		         <div class="inv_bot_row">
        		             <div class="inv_pfijo">
 
        		                 <div class="inv_right_side">
        		                     <h3>Publicidad corporativa</h3>
        		                     <h3>$500,000</h3>
        		                     <h3>mensuales</h3>
        		                 </div>
        		             </div>
        		             <div class="inv_pmovil">

        		                 <div class="inv_right_side">
        		                     <h3>Duración del contrato</h3>
        		                     <h3>5 años</h3>
        		                 </div>
        		             </div>
        		             
        		         </div>
        		      
    		         </div>
    		     </div>
    		 </div>
        </div>  <!--comp block--> 
      </div>
    </div>
	
    <div class="slide" id="slide-6">
		<section id="prodMenuF">
		 	<div id="productosBox">
				<div id="titleMenu">
					<h1>NUESTROS PRODUCTOS</h1>
				</div>
			    <div id="menuBox">
			    	<div class="menuOpt left">
			    		<img src="../diseño/img/paletas.png" alt="" class="menuOpt-img">
			    	</div>
			    	<div class="menuOpt right">
			    		<img src="../diseño/img/nieves.png" alt="" class="menuOpt-img">
			    	</div>
		 		</div>
		 		<div class="png-box">  
		 			<img id="original_png" src="../diseño/img/original.png" alt="">
		 		</div>
		 		<div id="menuBox">
			    	<div class="menuOpt left">
			    		<img src="../diseño/img/bebidas.png" alt="" class="menuOpt-img">
			    	</div>
			    	<div class="menuOpt right">
			    		<img src="../diseño/img/marquesitaFresa.png" alt="" class="menuOpt-img">
			    	</div>
			    </div>
		    </div>
		  </section>
      </div>
      <div id="franquiciasimg">
        <img src="../diseño/img/disponibles.jpg" alt="">
      </div>
      <div id="equipo">
      	  <div class="slide__bg"></div>
	      <div class="slide__text">
	      	<strong><h1>Seremos un mismo equipo</h1></strong>
	      </div>
		      <div class="normal__text">
				<strong><h2>Trabajamos de la mano contigo para asegurar el éxito de tu negocio.</h2></strong>
	      	  </div>
			  <div class="normal__text">
				<strong><h2>Te asesoramos para encontrar el lugar ideal para tu negocio.</h2></strong>
			  </div>
			  <div class="normal__text">
				<strong><h2>Tiempo de arranque</h2></strong>
			  </div>
			  <div class="normal__text">
				<p>1 a 2 meses a partir del deposito y la firma del contrato</p>
				<small>
					<p>Precios más IVA</p>
					<p>NOTA: La inversión de equipo e instalación varía dependiendo al tamaño del local.</p>
				</small>
			  </div>
      	  	      	
      </div>
    <?php include("../footer.html") ?>
    <?php include("../plantillas/scripts.html"); ?>
    </div>
    <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
    <script>
        $(function() {
          var animationEnd  = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
          var animationName1 = 'shake'; //bounce, flash, pulse, rubberband, shake, swing, tada, wobble, jello
          
          $('.animation').on('mouseover',function() { // click, mousedown, mouseup, mouseover, mouseout, mousemove
            $('.animation').effect( "shake",{times:4,distance:15},1000);
            
          });
           
        }); 
       
    </script>
</body>
</html>
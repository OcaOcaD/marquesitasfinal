<?php 
	session_start();
//PARAMETROS
 	$pestaña_actual = "franquicias";
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	    <!-- META META META META META -->
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<!-- FONTS FONTS FONTS FONTS FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope|Indie+Flower|Loved+by+the+King|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
		<!-- FONTS FONTS FONTS FONTS FONTS -->
		<!-- LINKS LINKS LINKS LINKS LINKS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="diseño/carousel.css">
		<link rel="stylesheet" type="text/css" href="diseño/franquicias.css">
		<link rel="stylesheet" type="text/css" href="diseño/franquicias_globales.css">
		
		<link rel="stylesheet" type="text/css" href="diseño/fdisp.css">
		<link rel="stylesheet" type="text/css" href="diseño/estilos.css">

		<link rel="stylesheet" type="text/css" href="diseño/saludo.css">
		<link rel="stylesheet" type="text/css" href="diseño/inversion.css">
		<link rel="stylesheet" type="text/css" href="diseño/exito.css">
		<link rel="stylesheet" type="text/css" href="diseño/incluye.css">
		<link rel="stylesheet" type="text/css" href="diseño/cuota.css">
		<link rel="stylesheet" type="text/css" href="diseño/formulario.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="diseño/footer.css">
      	<!-- LINKS LINKS LINKS LINKS LINKS -->
      	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.min.css">
	<title>Franquicias</title>
</head>
<body>
	<script type="" src="alertifyjs/alertify.min.js"></script>
	<?php 
	if ( isset($_SESSION['comentario']) && $_SESSION['comentario'] == true ){
		echo "<script>alertify.success('Gracias por tu comentario');</script> ";
		$_SESSION['comentario'] = false;
	}
		include("navbar.php");
		include("plantillas/saludo.html");
		include("plantillas/inversion.html");
		include("plantillas/exito.html");
		include("plantillas/incluye.html");
		include("plantillas/cuota.html");
		include("plantillas/formulario.html");

		include("footer.html");
	?>

	

	<!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script
	src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
	integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
	crossorigin="anonymous"></script>
      <!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
</body>
</html>
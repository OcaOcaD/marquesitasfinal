<?php 
      include("clases/Sucursal.php");
      $carousel_size = 4;
      $img[0] = "diseño/Marquesitas.jpeg";
      $img[1] = "diseño/1.jpg";
      $img[2] = "diseño/2.jpg";
      $img[3] = "diseño/3.jpg";

      $sucursal = new SplDoublyLinkedList;
      $s = new Sucursal;
      $direccion = "Av Guadalupe 6450, Jardines de Chapalita, Exitmex, 45030 Zapopan, Jal.";
      $correo = "gdl@marquesitas.com";
      $telefono = "3334610984";
      $s->constSucursal( $direccion, $correo ,$telefono );
      $sucursal->push($s);
      $s = new Sucursal;
      $direccion = "Vicente Guerrero Local E, Del Carmen, 04100 Coyoacán, CDMX";
      $correo = "cdmx@marquesitas.com";
      $telefono = "3334617867";
      $s->constSucursal( $direccion, $correo ,$telefono );
      $sucursal->push($s);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Marquesita</title>
      <!----------------META-->
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <!----------------LINKS-->
      <link rel="stylesheet" href="diseño/estilos.css">
      <link rel="stylesheet" type="text/css" href="diseño/carousel_comple.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <!----------------LINKS-->
      
</head>
<body>
      <section id="navbar_inicio" class="sticky-top">
            <nav id="navbar_inicio_nav" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
              <a class="navbar-brand" href="#">Marquesita</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#productos">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#franquicias">Franquicias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                  </li>
                </ul>
              </div>
            </nav>
      </section>
<div data-spy="scroll" data-target="#navbar_inicio_nav" data-offset="0">
      <section id="carousel_inicio" >
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <?php 
                        for ($i = 0; $i < $carousel_size ; $i++) { 
                              if( $i == 0){
                                    echo" <div class='carousel-item active'>
                                             <img src='".$img[$i]."' class='carousel_img d-block w-100' alt='...'>
                                          </div>";   
                              }else{
                                    echo" <div class='carousel-item'>
                                             <img src='".$img[$i]."' class='carousel_img d-block w-100' alt='...'>
                                          </div> ";
                              }
                        }
                   ?>
              </div>
            </div>
      </section>
      <section id="productos" class="row">
            <div id="prod_izq" class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                  <div id="mar_d" class="prod-box" name="mar_d.jpg">
                        <p class="col-md-12 col-lg-12 col-sm-12 col-xs-12">Marquesitas dulces</p>
                  </div>
                  <div id="mar_s" class="prod-box" name="mar_s.jpg">
                        <p class="col-md-12 col-lg-12 col-sm-12 col-xs-12">Marquesitas saladas</p>
                  </div>
                   <div id="nieves" class="prod-box" name="nieves.jpg">
                        <p class="col-md-12 col-lg-12 col-sm-12 col-xs-12">Nieves</p>
                  </div> 
                   <div id="paletas" class="prod-box" name="paletas.jpg">
                        <p class="col-md-12 col-lg-12 col-sm-12 col-xs-12">Paletas</p>
                  </div>                 
                  
            </div>
            <div id="prod_der" class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                  <p>Menú</p>
                  <ul>
                        <li>Ejemp 1</li>
                        <li>Ejemp 1</li>
                        <li>Ejemp 1</li>
                  </ul>
            </div>
      </section>
      <section id="franquicias" class="row">
            <div class="container">
                  <div class="fran_izq col-md-6 col-lg-12">
                        <div class="container">
                              <h3>Nuestras sucursales</h3>
                              <br>
                              <?php foreach ($sucursal as $i => $s){
                                    echo "<div class='sucursal'>
                                          <p class='Dirección'>".$s->get_direccion()."</p>
                                          <p class='Correo'>".$s->get_correo()."</p>
                                          <p class='Teléfono'>".$s->get_telefono()."</p>
                                    </div>
                                    <hr>";
                              } ?>
                        </div>
                        
                  </div>
            </div>
            <div class="map-responsive col-md-6 col-lg-12">
                  <iframe src="https://www.google.com/maps/d/embed?mid=1obXbxpkwRdcSvEEWdTxP8qnRNI-PfWFc&hl=es" width="640" height="480"></iframe>
            </div>
      </section>
      <section id="contacto" >
            
      </section>
</div>
      <!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
<script>
      $( "div.prod-box" ).mouseenter(function() {
            var url = "url('diseño/img/"+this.id+".jpg')";
            console.log(url);
          $( "#productos" ).css({
            background: url,
            "background-position": "right",
            "background-repeat": "no-repeat",
            "background-attachment": "fixed"
          });
        }).mouseleave(function() {
          //$( "#productos" ).css("background", value, "url('default')");
        });
</script>
</body>
</html>
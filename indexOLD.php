<?php 
      include("clases/Sucursal.php");
      //PARAMETROS
      $pestaña_actual = "index";
      $br = "<br>";
      $carousel_size = 4;
      $carousel_dir = scandir( "diseño/carousel" );
      $imagen = array();
      foreach ($carousel_dir as $key => $img) {
        //var_dump($img);
        if ( $img == "." || $img == ".." ){
        }else{
          $img_name = explode( ".", $img );
          $img_name[1] = strtolower( $img_name[1] );
          $img = "diseño/carousel/".$img_name[0].".".$img_name[1];
          array_push($imagen, $img ) ;

        }
        //echo $img;
        # code...
      }
      $carousel_dir = array_diff(scandir( "diseño/carousel" ), array('.', '..'));
      $carousel_size = sizeof($carousel_dir);
      echo "<input id = 'carousel_size' value = '".$carousel_size."' style = 'display:none'>";  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="shortcut icon" href="diseño/img/hola.ico" type="image/x-icon">
      <link rel="icon" href="diseño/img/hola.ico" type="image/x-icon">
	<title>Marquesita</title>
      <!----------------META-->
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <!----------------LINKS-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="diseño/estilos.css">
      <link rel="stylesheet" type="text/css" href="diseño/carousel.css">
      <link rel="stylesheet" type="text/css" href="diseño/productos.css">
      <link rel="stylesheet" type="text/css" href="diseño/sm_products.css">
      <link rel="stylesheet" type="text/css" href="diseño/franquicias.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- FONTS FONTS FONTS FONTS FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope|Indie+Flower|Loved+by+the+King|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
      <!-- FONTS FONTS FONTS FONTS FONTS -->
      <link rel="stylesheet" type="text/css" href="diseño/footer.css">
      <!----------------LINKS-->

</head>
<body>
  <?php include("navbar.php") ?>
  <!-- The video -->
  <video id="video" class="video_presentacion" autoplay muted loop id="myVideo">
    <source src="diseño/img/marquesmall.mp4" type="video/mp4" style="z-index: 1;">
  </video>     
<div id ="dspi" data-spy="scroll" data-target="#navbar_inicio_nav" data-offset="0">
  <section id="carousel_inicio" >
        <div id="carouselExampleSlidesOnly" class="carousel carousel-fade slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php 
              foreach ($imagen as $i => $img) {
                if ( $i == 0 ) {
                  echo "<li data-target='#carouselExampleSlidesOnly' data-slide-to='".$i."' class='active'><i class='fas fa-circle'></i></li>";
                }
                else{
                  echo "<li data-target='#carouselExampleSlidesOnly' data-slide-to='".$i."' class=''><i class='fas fa-circle'>  </i></li>";
                }
              }
             ?>
          </ol>
          <div class="carousel-inner">
            <?php 
              foreach ($imagen as $i => $img) {
                if( $i == 0){
                  echo "<div class='carousel-item active'>";
                    echo "<div id = 'img-".$i."' class='img-car-box' name='".$img."'>";
                    echo "</div>";
                  echo "</div>";  
                }else{
                  echo" <div class='carousel-item'>";
                    echo "<div id = 'img-".$i."' class='img-car-box' name='".$img."'>";
                    echo "</div>";
                  echo" </div> ";
                }
              }
             ?>
          </div>
        </div>
  </section>

  <section id="prod_menu" class="container">
    <div class="title_menu">
        <h1>PRODUCTOS</h1>
    </div>
    <div class="seleccion_menu">
      <div id="prod-1" class="prod_type" onclick="loadMenu(this)" name="marquesitas">
        <div class="img-box">
          <img class="" src="diseño/img/marquesitas.png" alt="Imagen menú">
        </div>
        <div class="type-box">
          <h4>MARQUESITAS</h4> 
        </div>
      </div>
      <div id="prod-2" class="prod_type" onclick="loadMenu(this)" name="marquenieves">
        <div class="img-box">
          <img class="" src="diseño/img/marquenieve.png" alt="Imagen menú">
        </div>
        <div class="type-box">
          <h4>MARQUENIEVES</h4> 
        </div>
      </div>
      <div id="prod-3" class="prod_type" onclick="loadMenu(this)" name="bebidas">
        <div class="img-box">
          <img class="" src="diseño/img/bebidas.png" alt="Imagen menú">
        </div>
        <div class="type-box">
          <h4>BEBIDAS</h4> 
        </div>
      </div>
      <div id="prod-4" class="prod_type" onclick="loadMenu(this)" name="paletas">
          <div class="img-box">
            <img class="" src="diseño/img/paletas.png" alt="Imagen menú">
            
          </div>
          <div class="type-box">
            <h4>PALETAS</h4> 
          </div>
      </div>
    </div>
  </section>
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
      
  <section id="franquicias" class="row">
        <div id = "fran_banner" class="fran_banner col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="container">
                    <center><h1 class="banner-txt">Encuentra una sucursal cerca de ti</h1></center>
              </div>
              
        </div>

          <div class="relleno col-xs-1 col-sm-1 col-md-2">
              <!--#image?-->
          </div>
          <div class="map-responsive col-xs-10 col-sm-10 col-md-8 col-lg-8">
            
                <iframe id = "map" src="https://www.google.com/maps/d/embed?mid=1obXbxpkwRdcSvEEWdTxP8qnRNI-PfWFc&hl=es" width="640" height="400"></iframe>
          </div>
          <div class="relleno col-sm-1 col-xs-1 col-md-2">
              <!--#image?-->
          </div>
  </section>
  <section id="contacto" >
    
  </section>
      <!-- FOOTER START -->
      <?php 
        include("footer.html");
       ?>
      <!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
<script type="text/javascript">
  function goToByScroll(id) {
    // Remove "link" from the ID
    // Scroll
    var element = $(id);
    var offset = element.offset();
    var topDistnce = offset.top;
    topDistnce = topDistnce-50;
    $('html, body').animate({scrollTop: topDistnce}, 800);    
  }
</script>
<script type="text/javascript">
  $( document ).ready(function() {
    $( ".prod-box" ).click(function() {
      goToByScroll("prod_der");
    });
  });
</script>

<script type="">
  $( document ).ready(function() {
    $('.carousel').carousel({
      interval: 3000
    })
  });
</script>
  
<script>
  $( document ).ready(function() {
      $( "section#franquicias" ).mouseenter(function() {
            var url = "url('diseño/img/"+this.id+".jpg')";
          $("#prod_der").load("menu_limpio.php",{
            menu: this.id
          })
        }).mouseleave(function() {
          
        });
  });
</script>
<script>
  var img;
      var carousel_size = $('#carousel_size').val();
      for ( var i = 0; i < carousel_size; i++ ){
        img = $("#img-"+i).attr('name');
        
        url = "url('"+img+"')";
        $("#img-"+i).css({
          background: url,
          "background-size": "100vw auto",
          "background-attachment": "none",
          "background-repeat": "no-repeat",
          "background-position": "center"
        });
      }
</script>
<script>
  function loadMenu(menu){
    categoria = menu.attributes["name"].value;
    $("#prod_list").show();
    $("#prod_list").load("display_menu.php",{
      categoria: categoria
    }).fadeIn('500');
    goToByScroll("#prod_list");
  }
  function cerrar_menu(){
     $("#prod_list").slideUp( "slow", function() {
      goToByScroll("#prod_menu");
    });
  }
</script>
<script type="text/javascript"></script>
</body>
</html>
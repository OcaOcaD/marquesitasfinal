<!DOCTYPE html>
<html lang="en">
<head>
	<title>Marquesita</title>
      <!----------------META-->
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <!-- FONTS FONTS FONTS FONTS FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope|Indie+Flower|Loved+by+the+King|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
      <!-- FONTS FONTS FONTS FONTS FONTS -->
      <!----------------LINKS-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="diseño/carousel.css">
      <link rel="stylesheet" type="text/css" href="diseño/franquicias.css">
      <link rel="stylesheet" type="text/css" href="diseño/franquicias_globales.css">
      <link rel="stylesheet" type="text/css" href="diseño/saludo.css">
      <link rel="stylesheet" type="text/css" href="diseño/fdisp.css">
      <link rel="stylesheet" type="text/css" href="diseño/estilos.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="diseño/footer.css">
      <!----------------LINKS-->
</head>
<body style= "position: relative; overflow-y: none; height: 100%;" data-spy="scroll" data-target="#navh" data-offset="0">
  <div id="nav-box" fixed-top>
    <nav id="navh" class="navbar  ">
      <div class="navh-title">
        <button id="flecha" class="no_deco navToggler">
          <i id ="" class="fas fa-angle-double-left"></i>
        </button>
        <br>
        <p id="side-title" class="navbar-brand" href="#">La franquicia</p>
      </div>
      <nav class="nav nav-pills flex-column">
        <a class="nav-link" href="#mision">Misión
        </a>
        <a class="nav-link" href="#vision">Visión</a>
        <a class="nav-link" href="#isla-section">¿Qué incluye?</a>
      </nav>
    </nav>
  </div>
      <section id="center-nav" class="fixed-top">
        <div class="innermainmenu franq navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span id="bars-icon" class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                <img id="small-logo" src="diseño/img/logo-sm.png" alt="">
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul id="franq">
              <li id="li1"><button class="franq-btn" onclick="window.location.href = 'index.php#productos'">PRODUCTOS</button></li>
              <li id="li2"><button class="franq-btn" onclick="window.location.href = 'franquicias.php'">FRANQUICIAS</button></li>
              <li id="liC"><button onclick="window.location.href = 'index.php'" class="franq-btn"><img src="diseño/img/logo-png.png" alt=""></a></button></li>
              <li id="li3"><button class="franq-btn" onclick="window.location.href = 'index.php#sucursales'">SUCURSALES</button></li>
              <li id="li4"><button class="franq-btn" onclick="window.location.href = 'index.php#contacto'">CONTACTO</button></li>
            </ul>
          </div>
        </div>
      </section>
  </section>
  <section id="webContent" class="  ">
    <div id="page" class="">
      <div id="disponible">
        <img src="diseño/img/disponibles.jpg">
      </div>
      <button id="menu_toggler" class="no_deco navToggler">
        <i id ="aleft" class="fas fa-3x fa-angle-double-left"></i>
        <i id ="aright" class="fas fa-3x fa-angle-double-right"></i>
      </button>
      <div class="mv-box">
        <div class="mv-text">
          <h1 id="mision" class="text-tit container" >Misión</h1>
          <p class="">Somos una empresa
dedicada a la innovacion de sus productos, buscando siempre ofrecer
una gran variedad de sabores en Marquesitas, Nieve , Paletas y Bebidas
con la màs alta calidad en su ingredientes.</p>

          <h1 id="vision" class="text-tit container" >Visión</h1>
          <p class="mv-text-text">Ser una empresa lider en el mercado de postres mexicanos, reconocida por la calidad de sus
productos y la innovacion en su modelo de negocio.</p>
        </div>
      </div>
      <div id="isla-section">
        <div class="islal container">
            <h1>Qué incluye la franquicia?</h1>
            <img src="diseño/img/isla.jpeg">
          
        </div>
        <div class="islad container">
          <br><br><br>
          <h5 id="isla-section-1">Incluye</h5>
          <p id="incluye-text-box">Con el pago de franquicia recibes los manuales de operación, software y capacitación.</p>
          <p>
          La duración del contrato es de 5 años y lo puedes renovar por periodos iguales
          con solo el 40% de la cuota actual de la franquicia. Regalías fijas y de
          publicidad.</p>
          <p>Con la inversión adicional al costo de la franquicia obtendras equipos
    comerciales que siempre serán de tu propiedad, como son:</p>
    <ul>
      <li class="black-text">Planchas de gas </li>
      <li class="black-text">Congelador </li>
      <li class="black-text">Licuadora </li>
      <li class="black-text">Anuncio Luminoso </li>
      <li class="black-text">Pantalla plana con usb </li>
      <li class="black-text">Punto de venta. </li>
      <li class="black-text">Cámaras IP. </li>
      
    </ul>
        </div>
          </div>
      
    </div>
    <?php include("footer.html"); ?>
  </section>
      <!-- END OF FOOTER -->
</div>
      <!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
      <!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
<script type="text/javascript">
  function goToByScroll(id) {
    // Remove "link" from the ID
    // Scroll
    var element = $(id);
    /*console.log('element: '+element);*/
    var offset = element.offset();
    var topDistnce = offset.top;
    /*console.log('offset top: '+offset.top);*/
    topDistnce = topDistnce-50;
    /*console.log('offset top: '+offset.top);*/
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
  var img;
      var carousel_size = $('#carousel_size').val();
      console.log(carousel_size);
      for ( var i = 0; i < carousel_size; i++ ){
        img = $("#img-"+i).attr('name');
        
        url = "url('"+img+"')";
        console.log(url);
        $("#img-"+i).css({
          background: url,
          "background-size": "100vw auto",
          "background-attachment": "none",
          "background-repeat": "no-repeat",
          "background-position": "center"
        });
      }
</script>
<script type="text/javascript">
  $(".navToggler").click(function () {

    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: "left" };

    // Set the duration (default: 400 milliseconds)
    var duration = 500;

    $('#nav-box').toggle( effect, options, duration );
    $( "#webContent" ).toggleClass( "fit-body", "#webContent" );
    $( "#aleft" ).toggle();
    $( "#aright" ).toggle();
    
    
  });
</script>

<script type="text/javascript"></script>
</body>
</html>
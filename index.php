<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marquesitas las originales</title>
    <?php include("plantillas/headers.html"); ?>
    <link rel="stylesheet" href="utilities/bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="utilities/fontAwesome_css/all.css">
    <link rel="stylesheet" href="mapael/marquemap.css">
    <link rel="stylesheet" href="components/contact/contact.css">
  </head>
  <body>
      <script src="utilities/jquery.js"></script>
      <script src="utilities/bootstrap-4.0.0-dist/js/bootstrap.js"></script>
      <?php
      $pestaña_actual= "index.php";
      include("primarySection.php");
      include("php/carousel.php");
      include("php/productosPro.php");
      include("components/contact/contact.php");
      include("footer.html");
      ?>

  <script type="text/javascript">
    function goToByScroll(id) {
      // Remove "link" from the ID
      // Scroll
      var element = $(id);
      var offset = element.offset();
      var topDistnce = offset.top;
      topDistnce = topDistnce-100;
      $('html, body').animate({scrollTop: topDistnce}, 800);    
    }

    var img;
    var carousel_size = $('#carousel_size').val();
    console.log('hola');
    for ( var i = 0; i < carousel_size; i++ ){
      img = $("#img-"+i).attr('name');
      url = "url('"+img+"')";
      console.log('url: '+url);
      $("#img-"+i).css({
        background: url,
        "background-size": "100vw auto",
        "background-attachment": "none",
        "background-repeat": "no-repeat",
        "background-position": "center"
      });
    }
  </script>
  
  </body>
</html>
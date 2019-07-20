<!DOCTYPE html>
<html lang="en">
<head>
      <title>Marquesitas las originales</title>
      <?php include("plantillas/headers.html"); ?>
      <link rel="stylesheet" href="mapael/marquemap.css">
      <link rel="stylesheet" href="fontAwesome_css/all.css">
</head>
<body>
  <?php
  $pestaña_actual= "index.php";
  include("primarySection.php");
  include("php/carousel.php");
  include("php/productosPro.php");
  include("footer.html");
   ?>
   
  <?php include("plantillas/scripts.html"); ?>
   <script>
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
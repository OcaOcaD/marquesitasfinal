<?php 
  include("clases/Sucursal.php");
  //PARAMETROS
  $pestaña_actual = "index";
  $br = "<br>";
  $carousel_size = 4;
  $carousel_dir = scandir( "diseño/carousel" );
  $imagen = array();
  foreach ($carousel_dir as $key => $img) {
    if ( $img != "." && $img != ".." ){
      $img_name = explode( ".", $img );
      $img_name[1] = strtolower( $img_name[1] );
      $img = "diseño/carousel/".$img_name[0].".".$img_name[1];
      array_push($imagen, $img ) ;
    }
  }
  $carousel_dir = array_diff(scandir( "diseño/carousel" ), array('.', '..'));
  $carousel_size = sizeof($carousel_dir); 
  echo "<input id = 'carousel_size' value = '".$carousel_size."' style = 'display:none'>"; 
 ?>
<section id="original">
  <div id="originalBox">
    <img id="original-img" src="diseño/img/original.png">
  </div>
</section>
<section id="carouselSection" >
  <div id="carouselBox" class="carousel carousel-fade slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php foreach ($imagen as $i => $img) {
          if ( $i == 0 ) {
            echo "<li data-target='#carouselBox' data-slide-to='".$i."' class='active'><i class='fas fa-circle'></i></li>";
          }
          else{
            echo "<li data-target='#carouselBox' data-slide-to='".$i."' class=''><i class='fas fa-circle'>  </i></li>";
          }
        }?>
    </ol>
    <div class="carousel-inner">
      <?php foreach ($imagen as $i => $img) {
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
      }?>
    </div>
  </div>
</section>


  <?php 
  //PARAMETROS
  if ( $pestaña_actual == "franquicias" ){
      $logoPath = "../diseño/img/logoPro.png";
      $link_productos = "window.location.href = '../index.php#prodMenu'";
      $link_franquicias = "#";
      $link_central = "window.location.href = '../index.php#videoBox'";
      $link_sucursales = "window.location.href = '../index.php#franquiciasPro'";
      $link_contacto = "window.location.href = '../index.php#contact'";
      $ul_color_class = "franquicias_ul";
    }else if ( $pestaña_actual == "index.php" ){
      $logoPath = "diseño/img/logoPro.png";
      $link_productos = "goToByScroll('#prodMenu')";

      $link_central = "goToByScroll('#videoBox')";
      $link_sucursales = "goToByScroll('#franquiciasPro')";
      $link_contacto = "goToByScroll('#contact')";
      $ul_color_class = "index_ul";
    }
 ?>
    <div id="navBox" class="">
      <div id="shadow" class="shadow"></div>
      <div id="object">
        <nav id="navBar-box" class="navbar navbar-expand-lg">
          <button id="togglerBtn" class="navbar-toggler noDeco" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span id="bars-icon" class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                <img id="smallLogo" src="<?php echo $logoPath ?>" alt="">
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <button onclick="<?php echo $link_productos ?>" class="noDeco navButton">
                PRODUCTOS
              </button>
              </li>
              <li class="nav-item">
                <button onclick="<?php echo $link_sucursales ?>" class="noDeco navButton">
                SUCURSALES
              </button>
              </li>
              <li id="logoLi" class="nav-item">
                <button onclick="<?php echo $link_central ?>" class="noDeco navButton">
                <img id="navLogo" src="<?php echo $logoPath ?>">
              </button>
              </li>
              <li class="nav-item">
                <button id="franqLink" class="noDeco navButton">
                FRANQUICIAS
              </button>
              </li>
              <li class="nav-item">
                <button onclick="<?php echo $link_contacto ?>" class="noDeco navButton">
                CONTACTO
              </button>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      
    </div>

<script>

!(function(d){
  $('#franqLink').bind('click', function(e) {
    e.preventDefault(); 
    if (e.metaKey){
      window.location = "php/franPro.php";
    }else{
      window.open('php/franPro.php','_blank');
      
    }
  });
  function changeNavBG(type){
    nb = d.getElementsByClassName("shadow");
    logotipo = d.getElementsByClassName("navbar__logo__img");
    switch( type ){
        case 0:{
            $(nb).css({
                transition : 'background\-image 3s ease-out',
                "background-image" : "linear-gradient(to top, transparent 5%, black 95%)",
                "opacity" : "0.7",
            });
            /*$(logotipo).attr("src","img/basic/logotipo.png");*/
            break;
        }
        case 1:{
            $(nb).css({
                transition : 'background\-image 3s ease-out',
                "background-image" : "linear-gradient(to top, black ,#1D1D1B)",
                "opacity" : "1",
            });
            /*$(logotipo).attr("src","img/basic/logotipo_blanco.png");*/
            break;
        }
    }
}
$(d).scroll(function() { 
    if( $(window).scrollTop() > 100  ) {   
      changeNavBG(1);
    }else{
        changeNavBG(0);
    }
});

}(document));
</script>
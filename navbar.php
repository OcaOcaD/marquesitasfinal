<?php 
  //PARAMETROS
  if ( $pestaña_actual == "franquicias" ){
      $link_productos = "window.location.href = 'index.php#prod_menu'";
      $link_franquicias = "#";
      $link_central = "window.location.href = 'index.php#video'";
      $link_sucursales = "window.location.href = 'index.php#franquicias'";
      $link_contacto = "window.location.href = 'index.php#contacto'";
      $ul_color_class = "franquicias_ul";
    }else if ( $pestaña_actual == "index" ){
      $link_productos = "goToByScroll('#prod_menu')";
      $link_franquicias = "window.location.href = 'fran.php'";
      $link_central = "goToByScroll('#video')";
      $link_sucursales = "goToByScroll('#franquicias')";
      $link_contacto = "goToByScroll('#contacto')";
      $ul_color_class = "index_ul";
    }
  #
 ?>
<section id="center-nav" class="fixed-top">
        <div class="innermainmenu navbar-expand-lg">
          <button id="navbar_toggle_btn" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span id="bars-icon" class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                <img id="small-logo" src="diseño/img/logo-sm.png" alt="">
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php 
              

             ?>
              <ul id='navul-buttons'>
                <li id="li1"><button class="logo-btn <?php echo $ul_color_class ?> " onclick="<?php echo $link_productos ?>">PRODUCTOS</button></li>
                <li id="li2"><button class="logo-btn <?php echo $ul_color_class ?> " onclick="<?php echo $link_franquicias ?>">FRANQUICIAS</button></li>
                <li id="liC"><button onclick="<?php echo $link_central ?>" class="logo-btn <?php echo $ul_color_class ?> "><img src="diseño/img/logo-png.png" alt=""></a></button></li>
                <li id="li3"><button class="logo-btn <?php echo $ul_color_class ?> " onclick="<?php echo $link_sucursales ?>">SUCURSALES</button></li>
                <li id="li4"><button class="logo-btn <?php echo $ul_color_class ?> " onclick="<?php echo $link_contacto ?>">CONTACTO</button></li>
              </ul>
          </div>
        </div>
      </section>

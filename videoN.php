<?php include("navbarPro.php") ?>
  <!-- The video -->
  <video id="video" name="hola" class="video_presentacion" autoplay muted loop poster="data:image/gif,AAAA">
    <source src="diseño/img/marquesmall.mp4" type="video/mp4">
  </video>
<script>
  $('#video').on('loadstart', function (event) {
    $(this).addClass('loading');
  });
  $('#video').on('canplay', function (event) {
    $(this).removeClass('loading');
    $(this).attr('poster', '');
  });
</script>
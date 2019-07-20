<?php 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
  <!----------------META-->
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <!----------------LINKS-->
  <link href="https://fonts.googleapis.com/css?family=McLaren|Srisakdi:700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="diseño/estilos.css">
  <link rel="stylesheet" type="text/css" href="diseño/franquicias.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="diseño/footer.css">
  <!----------------LINKS-->
 </head>
      <style type="text/css">
        #webContent{
          margin-left: 18vw;
        }
        #nav-box{
          position: fixed;
          margin-left: 0px;
          margin-top: 0px;

        }
        #navh{
          width: 18vw;
          display: block;
        }
        .navh-title{
          width: 100%;
          display: block;
        }

      </style>
 
 
 <body style= "position: relative; overflow-y: scroll; height: 100%;" data-spy="scroll" data-target="#navh" data-offset="0">
    <div id="nav-box" fixed-top>
    <nav id="navh" class="navbar navbar-light bg-light">
      <div class="navh-title">
        <a class="navbar-brand" href="#">Maarquesita</a>
      </div>
      <nav class="nav nav-pills flex-column">
        <a class="nav-link" href="#item-1">Item 1</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link ml-3 my-1" href="#item-1-1">Item 1-1</a>
          <a class="nav-link ml-3 my-1" href="#item-1-2">Item 1-2</a>
        </nav>
        <a class="nav-link" href="#item-2">Item2</a>
        <a class="nav-link" href="#item-3">Item3</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link ml-3 my-1" href="#item-3-1">Item 3-1</a>
          <a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>
        </nav>
      </nav>
    </nav>
  </div>
 	<section id="webContent" class="">
    <div id="page" class="container">
      <h4 id="item-1">Item 1</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime fugiat quae perspiciatis molestiae? Rerum similique sapiente numquam fugiat nesciunt dolores beatae quod. Nam aperiam quas illum enim, sint magni id....</p>
      <h5 id="item-1-1">Item 1-1</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt accusantium non exercitationem error eius, laboriosam officiis doloremque molestiae! In nisi qui architecto, quasi voluptas harum dicta autem nostrum ipsum officia!...</p>
      <h5 id="item-1-2">Item 1-2</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum placeat, eius suscipit repellat ad tenetur cumque voluptate provident reprehenderit unde fuga dignissimos excepturi aperiam nulla officia mollitia nobis voluptatum incidunt!...</p>
      <h4 id="item-2">Item 2</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maxime dolore laudantium veniam veritatis aspernatur repellendus ut accusantium et quo hic a, laboriosam beatae quisquam consectetur, obcaecati velit. Repellat, debitis....</p>
      <h4 id="item-3">Item 3</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, rerum quae. Eos quia aliquam, alias nisi dolorum, temporibus earum nesciunt quidem rerum aliquid iusto omnis natus doloribus, assumenda! Maiores, aperiam....</p>
      <h5 id="item-3-1">Item 3-1</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id inventore ea corporis, repudiandae. Quibusdam excepturi voluptate quisquam repellat, amet ratione unde libero? Est eligendi odio temporibus dolor voluptatibus, explicabo laudantium!...</p>
      <h5 id="item-3-2">Item 3-2</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolorem id commodi, et veritatis laboriosam, accusantium vero vitae sed beatae doloremque voluptates. Veritatis facere nisi labore totam! Placeat, id, perspiciatis....</p>
      
    </div>
  </section>
  <!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR COMENT SEPARATOR -->
 </body>
<!--<script type="text/javascript">
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
</script>-->
 </html>
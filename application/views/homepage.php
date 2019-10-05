<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- ----------------------------------Pezonalizado-------------------------------- -->
     <link rel="stylesheet" href="<?= base_url(); ?>libs/css/homepage.css">
     <link rel="stylesheet" href="<?= base_url(); ?>libs/css/guest.css">
     <link rel="stylesheet" href="<?= base_url() ?>libs/fonts/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>libs/css/bootstrap.min.css">
    <title>Cloudcat</title>
</head>
<body>
<header>
    <div class="header_logo">
        <!-- <img src="<?= base_url(); ?>libs/images/blackcat.png" "> -->
        <h1 class="display-4 text-light text-center"> Cloudcat</h1>
        
    </div>
    <div>
    <nav class="clearfix">
      <ul class="clearfix topnav snip1555">
        <li><a href="#">ACERCA DE</a></il>
        <li><a href="#">TECNOLOGIAS</a></il>
        <li><a href="#">DESAROLLADORES</a></il>
        <li><a href="#">REGISTRO &#124; INICIO DE SESI&Oacute;N</a></il>  
      </ul>
      <a href="#" id="pull">&#9776;</a>        
    </nav>
  </div>
</header>

  <div class="main">
  <div class="container-fluid mt-4 mb-4">
        <div class="row">
            <div class="col-md-12 col-lg-4" id="por_defecto">
                <h2>¿Que es CloudCat?</h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus cum blanditiis omnis deserunt, laudantium corporis laborum eveniet quia quos recusandae minima ea, quidem mollitia. Accusamus cupiditate voluptate libero facilis!
                Quibusdam facilis tenetur modi sunt soluta, nulla quis tempora quo porro suscipit dicta enim corrupti error pariatur, ullam consequuntur nostrum. Aperiam consectetur maxime expedita dolore. Doloremque sequi non libero temporibus?
                <h2 class="mt-2">¿Como surgió?</h2>
                Expedita quas voluptatibus incidunt nam laborum officiis sed, tenetur cumque soluta, sunt recusandae eaque. Omnis libero eos eligendi ex minima obcaecati atque voluptatum beatae, rerum veniam repudiandae id pariatur eaque!
                Minus, saepe repellendus. Architecto sit ullam repellat eos et ab, molestias officia facere aspernatur quia aut similique possimus, eius placeat voluptatem nihil. Laborum earum neque adipisci sit quasi facilis natus.
            </div>
  <div class="col-lg-8" id="carousel_div">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active slide1">
                            <h2 class="line anim-typewriter">¿Como usar CloudCat? <i class="fas fa-paw"></i></h2>
                        </div>
                        <div class="carousel-item slide2">
                            <div class="container mt-5">
                                <h3 style="text-align:left; color:#000;">Crear cuenta CloudCat</h3>
                                <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis magni fugiat minima voluptate similique dolorum exercitationem cum assumenda id qui ratione dolor reiciendis aperiam, laudantium optio, facilis quidem corporis? Tempore.</p><br>
                                <h3 style="text-align:left; color:#000;">Iniciar Sesion</h3>
                                <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis magni fugiat minima voluptate similique dolorum exercitationem cum assumenda id qui ratione dolor reiciendis aperiam, laudantium optio, facilis quidem corporis? Tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum debitis ullam dolore dolor blanditiis aut nihil, at earum nobis sapiente, fugit modi reiciendis eos iure. Dolore sed minima soluta magni.</p>
                            </div>
                        </div>
                        <div class="carousel-item slide">
                            <div class="container mt-5">

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
  </div>
  <script src="<?= base_url() ?>libs/js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>libs/js/morph.js"></script>
    <script src="<?= base_url(); ?>libs/js/tween.js"></script>
  <!-- ----------------------------------Pezonalizado-------------------------------- -->
  <script src="<?= base_url() ?>libs/js/homepage.js"></script>
</body>
</html>
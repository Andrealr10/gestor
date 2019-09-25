<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  

<link rel="stylesheet" href="<?= base_url(); ?>libs/css/guest.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:300,700,300italic">


<title>Document</title>
</head>
<body style="background: linear-gradient(to bottom, rgb(255, 255, 255),rgb(144, 150, 153), rgba(84, 92, 94, 0.692));">


	
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

<!-- ************************** div que sustituye al de informacion cuando hacemos click en categorias *******************************-->
<!-- *********************************************************************************************************************************-->

            <div class="col-md-12 col-lg-4 contenedor px-2" id="categorias" style="display:none;">
                <a style="float:right;" id="c_contenido"><i class="fas fa-times-circle"></i></a><!--**icono de cerrar en el div**-->
                <h1 class="titulo_categoria mt-4">Categorias Disponibles</h1>
                <ul class="lista">
                    <li class="lista2">
                        <input class="chequiado" type="checkbox" checked>
                        <i class="flechita"></i>
                        <h2 class="subt_categoria">HTML <i class="fab fa-html5"></i></h2>
                        <div class="desplega_subcategorias">
                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck1">
                                <label class="tab-label"><p for="chck1">Subcategoria 1 <a class="pop_over" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="right"><i class="fas fa-info-circle"></i></a></p></label>
                                <div class="tab-content">
                                    <button type="btn" class="btn ver_contenido" id="boton_ver">Ver contenido <i class="fas fa-folder-open"></i></button>
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck2">
                                <label class="tab-label"><p for="chck2">Subcategoria 2 <a class="pop_over" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="right"><i class="fas fa-info-circle"></i></a></p></label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">Subcategoria 3</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck4">
                                <label class="tab-label" for="chck4">Subcategoria 4</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista2">
                        <input class="chequiado" type="checkbox" checked>
                        <i class="flechita"></i>
                        <h2 class="subt_categoria">JavaScript <i class="fab fa-js-square"></i></h2>
                        <div class="desplega_subcategorias">
                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">Subcategoria 1</label>                                
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">Subcategoria 2</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">Subcategoria 3</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista2">
                        <input class="chequiado" type="checkbox" checked>
                        <i class="flechita"></i>
                        <h2 class="subt_categoria">PHP <i class="fab fa-php"></i></h2>
                        <div class="desplega_subcategorias">
                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">Subcategoria 1</label>                                
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">Subcategoria 2</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista2">
                        <input class="chequiado" type="checkbox" checked>
                        <i class="flechita"></i>
                        <h2 class="subt_categoria">Java <i class="fab fa-java"></i></h2>
                        <div class="desplega_subcategorias">
                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">Subcategoria 1</label>                                
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">Subcategoria 2</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">Subcategoria 3</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck4">
                                <label class="tab-label" for="chck4">Subcategoria 4</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista2">
                        <input class="chequiado" type="checkbox" checked>
                        <i class="flechita"></i>
                        <h2 class="subt_categoria">GIT <i class="fab fa-git-square"></i></h2>
                        <div class="desplega_subcategorias">
                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">Subcategoria 1</label>                                
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">Subcategoria 2</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">Subcategoria 3</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck4">
                                <label class="tab-label" for="chck4">Subcategoria 4</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista2">
                        <input class="chequiado" type="checkbox" checked>
                        <i class="flechita"></i>
                        <h2 class="subt_categoria">Node <i class="fab fa-node"></i></h2>
                        <div class="desplega_subcategorias">
                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">Subcategoria 1</label>                                
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">Subcategoria 2</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">Subcategoria 3</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck4">
                                <label class="tab-label" for="chck4">Subcategoria 4</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista2">
                        <input class="chequiado" type="checkbox" checked>
                        <i class="flechita"></i>
                        <h2 class="subt_categoria">Laravel <i class="fab fa-laravel"></i></h2>
                        <div class="desplega_subcategorias">
                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">Subcategoria 1</label>                                
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">Subcategoria 2</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">Subcategoria 3</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>

                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck4">
                                <label class="tab-label" for="chck4">Subcategoria 4</label>
                                <div class="tab-content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

<!-- ************************************************div que sustituye al carousel*************************************************** -->
<!-- *********************************************************************************************************************************-->
            <div class="col-lg-8 contenido_subcategorias" id="contenido_subcategorias" style="display:none;">
                <a style="float:right;" id="cerrar_div"><i class="fas fa-times-circle"></i></a><!--**icono de cerrar en el div**-->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#suscripcion">
                    Prueba de modal
                </button>
            </div>

<!-- **********************************************************Carousel************************************************************** -->
<!-- *********************************************************************************************************************************-->
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

	<script src="<?= base_url(); ?>libs/js/morph.js"></script>
<script src="<?= base_url(); ?>libs/js/tween.js"></script>



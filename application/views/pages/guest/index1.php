<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/guest.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:300,700,300italic">
    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>libs/js/morph.js"></script>
    <script src="<?= base_url(); ?>libs/js/tween.js"></script>
    <title>Document</title>
</head>
<body>
<!-- ********************************************************NavBar*******************************************************************-->
<!-- *********************************************************************************************************************************-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img width="50px" src="<?= base_url(); ?>libs/images/cat.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-justified w-100">
                    <li class="nav-item active">
                        <a class="nav-link botonNavbar" href="#">Conocenos <span class="sr-only">(current)</span></a>
                    </li>
                    <a class="">
                        <!-- <form>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                                </div>
                                <div class="col">
                                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form> -->
                        <form class="mt-3">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="buscador_c" tabindex='1'>
                                        <div class="int_buscador" tabindex='1'>
                                            <input class="barra-buscar" placeholder='buscar...' type='text'>
                                            <a class='iconito'>
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </a>
                    <li class="nav-item active">
                        <a class="nav-link botonNavbar" href="#">Link</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link botonNavbar" href="#" id="contenido">Contenido</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link botonNavbar pulse sign">Sign In <i class="fas fa-sign-in-alt"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link botonNavbar pulse sign" style="color:#71ad37;">Registrate <i class="fas fa-user-plus"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<!-- ******************************************************Div de informacion******************************************************** -->
<!-- *********************************************************************************************************************************-->
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
<!-- ***********************************************************Footer*************************************************************** -->
<!-- *********************************************************************************************************************************-->
<footer class="footer">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-4 footer__addr">
              <h1 class="footer__logo">CloudCat <i class="fas fa-paw"></i></h1>
                  
              <h2>Contactanos</h2>
              
              <address>
                  &nbsp;<i class="fas fa-phone-alt"></i>  Av. Ricardo Milos, casa #4, Santa Ana<br>
                  <a class="btn sugerencias" type="button" href="#">@ Sugerencias</a>
              </address>
          </div>

          <div class="col-md-8">
              <ul class="footer__nav">
                  
                  <li class="nav__item">
                      <h2 class="nav__title">Comentanos</h2>
                      <hr class="subrayado mb-4 mt-0 d-inline-block" style="width: 60px;">
          
                      <ul class="nav__ul">
                          <li>
                              <a href="#">Online</a>
                          </li>
          
                          <li>
                              <a href="#">Print</a>
                          </li>
                              
                          <li>
                              <a href="#">Alternative Ads</a>
                          </li>
                      </ul>
                  </li>
                  
                  <li class="nav__item"> <!--nav__item--extra-->
                      <h2 class="nav__title">Ayuda</h2>
                      <hr class="subrayado mb-4 mt-0 d-inline-block" style="width: 60px;">
                      
                      <ul class="nav__ul">  <!--nav__ul--extra-->
                          <li>
                              <a href="#">¿Olvidaste tu contraseña?</a>
                          </li>
                          
                          <li>
                              <a href="#">Recuperar Usuarios</a>
                          </li>
                          
                          <li>
                              <a href="#">No puedo iniciar sesion con mi usuario</a>
                          </li>
                          
                      </ul>
                  </li>
                  
                  <li class="nav__item">
                      <ul class="nav__ul pl-3">
                          <div class="hover">
                              <span>Redes Sociales</span>
                              <a class="social-link" href="#" target="_blank"><i class="fas fa-phone-alt"></i></a>
                              <a class="social-link" href="#" target="_blank"><i class="fas fa-envelope"></i></a>
                              <a class="social-link" href="#" target="_blank"><i class="fab fa-github"></i></a>
                              <a class="social-link" href="#" target="_blank"><i class="fas fa-cog"></i></a>
                          </div>
                      </ul>
                  </li>
              </ul>
          </div>
  
      </div>
      <div class="row">
          <div class="col-12">
              <div class="legal">
                  <p style="margin-bottom:0;">&copy; 2019 CloudCat. All Right Reserved</p>
                  
                  <span class="legal__links">
                  <a href="#">Privacy Policy</a>
                  
                  <span></span>
                  
                  <a href="#">Terms of Use</a>
                  </span>
              </div>
          </div>
      </div>
  </div>
</footer>

<!-- **********************************************************Modal***************************************************************** -->
<!-- *********************************************************************************************************************************-->
<div class="modal fade" id="suscripcion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title encabezado">Confirmar Suscripción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <!--  -->

        <div class="conteiner">
          <div class="inner-container">
            <svg id="svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 590 484.7">
              <g id="blobs">
                <path id="blob-1" d="M545.5,299c0,80.3-28.6,150.4-126.4,139.4-63.2-7.1-109.3-37.3-142.6-37.3-45.7,0-105.4,29.3-146.8,22.2-69-11.7-85.3-66.8-85.3-135.8,0-56.3,25.5-99.9,46.2-140.8,18.3-36.1,55.9-97.8,125.1-100.5,53.3-2.1,97.4,50.5,138.4,74.2,49.9,28.8,98.4-1.8,126,1.3C537.9,127.9,545.5,265.5,545.5,299Z" fill="#eddfeb"/>
                <path id="blob-3" d="M55.1,300.7c0,80.3,27.4,150.4,121,139.4,60.5-7.1,104.7-37.3,136.5-37.3,43.8,0,100.9,29.3,140.5,22.2,66-11.7,81.7-66.8,81.7-135.8,0-56.3-16.2-103.6-36.1-144.5-17.6-36.1-54.9-97.4-121.2-100.1-51-2.1-100.1,53.8-139.4,77.5-47.8,28.8-94.3-1.8-120.7,1.3C62.4,129.6,55.1,267.1,55.1,300.7Z" fill="#eddfeb"/>
              </g>
              <g id="confetti" class="confetti">
                <rect x="284" y="230.4" width="17.7" height="17.67" rx="4" ry="4" fill="#543093"/>
                <rect x="284" y="230.4" width="17.7" height="17.67" rx="4" ry="4" fill="#543093"/>
                <rect x="285.4" y="231.7" width="17.7" height="17.67" rx="4" ry="4" fill="#fff"/>
                <rect x="285.4" y="231.7" width="17.7" height="17.67" rx="4" ry="4" fill="#fff"/>
                <rect x="285.4" y="230.1" width="17.7" height="17.67" rx="4" ry="4" fill="#d960ae"/>
                <rect x="285.4" y="230.1" width="17.7" height="17.67" rx="4" ry="4" fill="#d960ae"/>
                <rect x="285.4" y="231.7" width="17.7" height="17.67" rx="4" ry="4" fill="#f3c1df"/>
                <rect x="285.4" y="231.7" width="17.7" height="17.67" rx="4" ry="4" fill="#f3c1df"/>
                <circle cx="294.1" cy="241.3" r="9.7" fill="#543093"/>
                <circle cx="294.1" cy="243.6" r="12" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                <circle cx="294.2" cy="243.6" r="12" fill="#fff"/>
                <circle cx="294.2" cy="243.6" r="12" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                <circle cx="294.2" cy="243.6" r="12" fill="none" stroke="#d960ae" stroke-miterlimit="10" stroke-width="2"/>
                <circle cx="294.2" cy="243.6" r="12" fill="none" stroke="#d960ae" stroke-miterlimit="10" stroke-width="2"/>
                <circle cx="295.9" cy="242.1" r="12" fill="none" stroke="#543093" stroke-miterlimit="10" stroke-width="2"/>
                <circle cx="295.9" cy="242.1" r="12" fill="none" stroke="#543093" stroke-miterlimit="10" stroke-width="2"/>
                <circle cx="294.1" cy="241.3" r="9.7" fill="#d960ae"/>
                <circle cx="294.1" cy="241.3" r="9.7" fill="#d960ae"/>
                <circle cx="292.9" cy="241.3" r="9.7" fill="#fff"/>
                <circle cx="294.1" cy="241.3" r="9.7" fill="#d960ae"/>
                <circle cx="294.1" cy="241.3" r="9.7" fill="#543093"/>
                <circle cx="294.1" cy="241.3" r="9.7" fill="#d960ae"/>
                <circle cx="294.1" cy="241.3" r="9.7" fill="#543093"/>
                <circle cx="294.1" cy="241.3" r="9.7" fill="#543093"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#f3c1df"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#543093"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#d960ae"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#f3c1df"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#fff"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#543093"/>
                <path d="M300.9,243.1l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.1Z" fill="#d960ae"/>
                <path d="M300.9,243.1l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.1Z" fill="#f3c1df"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#543093"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#d960ae"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#f3c1df"/>
                <path d="M300.9,243.2l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.2Z" fill="#fff"/>
                <path d="M300.9,243.1l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.1Z" fill="#d960ae"/>
                <path d="M300.9,243.1l-3-3a1.5,1.5,0,0,1,0-2.1l3-3a2,2,0,0,0,.3-2.5,1.9,1.9,0,0,0-2.9-.3l-3.1,3.1a1.5,1.5,0,0,1-2.1,0l-3-3a2,2,0,0,0-2.5-.3,1.9,1.9,0,0,0-.3,2.9l3.1,3.1a1.5,1.5,0,0,1,0,2.1l-3,3a2,2,0,0,0-.3,2.5,1.9,1.9,0,0,0,2.9.3l3.1-3.1a1.5,1.5,0,0,1,2.1,0l3.1,3.1a1.9,1.9,0,0,0,2.9-.3A2,2,0,0,0,300.9,243.1Z" fill="#f3c1df"/>
              </g>
              <g id="envelope">
                <path id="Background" d="M452.9,376.3a26.1,26.1,0,0,1-25.5,20.8H162.6a26.1,26.1,0,0,1-26-26V193.2a26.1,26.1,0,0,1,26-26H427.4a26.1,26.1,0,0,1,26,26V371.1a25.9,25.9,0,0,1-.5,5.2" fill="#d960ae" stroke="#543093" stroke-miterlimit="10" stroke-width="5"/>
                <g id="paper-group">
                  <rect id="paper" x="157.3" y="87.6" width="275.3" height="266.33" rx="26" ry="26" fill="#fff" stroke="#543093" stroke-miterlimit="10" stroke-width="5"/>
                  <g id="face">
                    <g id="mouth">
                      <path id="mouth-scared" d="M275,220a18.7,18.7,0,0,1,35.9.1" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                      <path id="mouth-sad" d="M258.8,231.9c3.9-14.5,17.7-25.2,34-25.2s30.3,10.8,34.1,25.4" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                      <path id="mouth-worry" d="M271.1,218.7c10-11.1,28.2-15,43.6-9.4" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                      <path id="mouth-happy" d="M259.3,207c3.9,14.5,17.7,25.2,34,25.2s30.3-10.8,34.1-25.4" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                      <g id="mouth-laughing">
                        <path id="open-mouth" d="M323.8,208.3c3.9,0,6.7,3.9,5.9,7.9a37.5,37.5,0,0,1-73.5,0c-0.9-4.1,2-7.9,5.9-7.9h61.7Z" fill="#543093" opacity="0.98"/>
                        <path id="tongue" d="M293.2,241.1c6.9,0,13.1-2.3,17.3-5.9a2.1,2.1,0,0,0,.5-2.6c-3.1-5.8-9.9-9.8-17.8-9.8s-14.7,4-17.8,9.8a2.1,2.1,0,0,0,.5,2.5C280,238.8,286.2,241.1,293.2,241.1Z" fill="#d960ae"/>
                      </g>
                    </g>
                    <g id="eye-group">
                      <g id="eyes" class="eyes">
                        <ellipse id="eye-right" cx="349" cy="172.8" rx="11.2" ry="13.8" fill="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5" />
                        <ellipse id="eye-left" cx="235.5" cy="172.8" rx="11.2" ry="13.8" fill="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5" />         <path id="eyebrow-sad-right" d="M341.9,133.7c2.6,5.3,14.8,14.1,24.3,14.7" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                        <path id="eyebrow-sad-left" d="M240.7,133.7c-2.6,5.3-14.8,14.1-24.3,14.7" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                            
                      </g>
                      <g id="eyes-laughing">
                <path id="eye-laughing-right" d="M332.2,174c0-8.3,7.5-15,16.8-15s16.8,6.7,16.8,15" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                        <path id="eye-laughing-left" d="M218.7,174c0-8.3,7.5-15,16.8-15s16.8,6.7,16.8,15" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                      </g>
                      <g id="eyebrows-happy">
                        <path id="eyebrow-happy-right" d="M366.2,146.3c-2.6-5.3-14.8-14.1-24.3-14.7" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                        <path id="eyebrow-happy-left" d="M216.4,146.3c2.6-5.3,14.8-14.1,24.3-14.7" fill="none" stroke="#543093" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                      </g>
                    </g>
                  </g>
                </g>
                <path id="back" d="M451.9,186.7S322.4,288.2,313.4,294.1s-27,5.8-36.9,0S137.9,186.5,137.9,186.5a23.6,23.6,0,0,0-1.3,6.7V371.1a26.1,26.1,0,0,0,26,26H427.4a26,26,0,0,0,26-26V193.2C453.4,190.7,452.5,188.9,451.9,186.7Z" fill="#f3c1df" stroke="#543093" stroke-miterlimit="10" stroke-width="5"/>
                <g id="shadow">
                  <path id="shadow-3" d="M263.3,279.7s11.3-8.1,13.1-9.3c9.9-6.5,27-5.8,36.9,0,1.7,1,13.5,9.3,13.5,9.3" fill="none" stroke="#eddfeb" stroke-linejoin="bevel" stroke-width="7"/>
                  <path id="shadow-2" d="M430.2,193.3L313.4,282.2a26.1,26.1,0,0,1-36.8,0L159.8,193.3V201l116.8,90.6c7.9,5.7,26.9,6.4,37,0l116.6-90.9v-7.4Z" fill="#eddfeb"/>
                </g>
                <path id="shadow-1" d="M425.2,381.5h-262c-14.1,0-24.2-11-24.2-24.4v13.2c0,13.4,10.1,24.3,24.2,24.3h262c12.7,1.2,23.9-8.4,25.2-19.5a42.8,42.8,0,0,0,.5-4.9V358.1a14.7,14.7,0,0,1-.5,3.9C448,373.1,437.6,381.5,425.2,381.5Z" fill="#d960ae" opacity="0.5"/>
                <g id="Front">
                  <path id="Front-2" data-name="Front" d="M139.8,381.9s127.5-99.5,136.5-105.4,27-5.8,36.9,0S449.8,382.1,449.8,382.1" fill="none" stroke="#543093" stroke-miterlimit="10" stroke-width="5"/>
                  <path id="Front-3" data-name="Front" d="M225.4,315.3s41.9-33,51-38.9,27-5.8,36.9,0S355,307.9,355,307.9" fill="#f3c1df" stroke="#543093" stroke-miterlimit="10" stroke-width="5"/>
                </g>
              </g>
            </svg>

            <div class="bottom">
              <h2 class="title">Desea anular la suscripción?</h2>
              <p class="subtitle">No recibirá más mensajes ni notificaciones si anulas tu suscripción</p>
              <div class="buttons">

                <button id="unsubscribe">Anular Suscripción</button>
                <button id="cancel">Cancelar</button>
                <button id="go-back">Regresar</button>
              </div>
            </div>
          </div>
        </div>

        <!--  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

    
<script src="<?= base_url(); ?>libs/js/guest.js"></script>
<script src="<?= base_url(); ?>libs/js/modal.js"></script>
</body>
</html>
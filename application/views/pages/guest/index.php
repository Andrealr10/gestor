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
    <title>Document</title>
</head>
<body>
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
                    <a class="nav-link botonBuscar">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </a>
                    <li class="nav-item active">
                        <a class="nav-link botonNavbar" href="#">Link</a>
                    </li>
                    <!-- <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle botonNavbar" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contenido
                        </a>
                        <div class="dropdown-menu w-100 bandeja px-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item raise" href="#" onclick="ver_categorias();">Categorías</a>
                            <a class="dropdown-item raise mt-2" href="#" onclick="ver_subcategorias();">Sub-Categorías</a>
                        </div>
                    </li> -->
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

<!-- ***************************** div que sustituye al anterior cuando hacemos click en categorias *********************************-->

            <div class="col-md-12 col-lg-4 contenedor px-2" id="categorias" style="display:none;">
                <a style="float:right;" onclick="ver_categorias();"><i class="fas fa-times-circle"></i></a>
                <h1 class="titulo_categoria mt-4">Categorias Disponibles</h1>
                <ul class="lista">
                    <li class="lista2">
                        <input class="chequiado" type="checkbox" checked>
                        <i class="flechita"></i>
                        <h2 class="subt_categoria">HTML <i class="fab fa-html5"></i></h2>
                        <div class="desplega_subcategorias">
                            <div class="tab">
                                <input class="input_tab" type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">Subcategoria 1</label>                                
                                <div class="tab-content">
                                    <a type="button" class="btn ver_contenido" id="boton_ver">Ver contenido <i class="fas fa-folder-open"></i></a>
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

            <!-- *********************Carousel*********************** -->
            <div class="col-lg-8 contenido_subcategorias px-5" id="contenido_subcategorias" style="display:none;">
                hola
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
                            <!-- <h2 class="nav__title">Legal</h2>
                            <hr class="subrayado mb-4 mt-0 d-inline-block" style="width: 60px;"> -->
                            
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
    
<script src="<?= base_url(); ?>libs/js/guest.js"></script>
</body>
</html>
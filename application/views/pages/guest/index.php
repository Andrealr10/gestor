<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/guest.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <title>Document</title>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img width="50px" src="<?= base_url(); ?>libs/images/logo.jpg"></a>
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
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle botonNavbar" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contenido
                        </a>
                        <div class="dropdown-menu w-100 bandeja px-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item raise" href="#">Categorías</a>
                            <a class="dropdown-item raise mt-2" href="#">Sub-Categorías</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link botonNavbar pulse sign">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link botonNavbar pulse sign">Regístrate! <i class="fas fa-user-plus"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container-fluid mt-4 mb-4">
        <div class="row">
            <div class="col-md-4">
                <h2>¿Que es CloudCat?</h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus cum blanditiis omnis deserunt, laudantium corporis laborum eveniet quia quos recusandae minima ea, quidem mollitia. Accusamus cupiditate voluptate libero facilis!
                Quibusdam facilis tenetur modi sunt soluta, nulla quis tempora quo porro suscipit dicta enim corrupti error pariatur, ullam consequuntur nostrum. Aperiam consectetur maxime expedita dolore. Doloremque sequi non libero temporibus?
                <h2 class="mt-2">¿Como surgió?</h2>
                Expedita quas voluptatibus incidunt nam laborum officiis sed, tenetur cumque soluta, sunt recusandae eaque. Omnis libero eos eligendi ex minima obcaecati atque voluptatum beatae, rerum veniam repudiandae id pariatur eaque!
                Minus, saepe repellendus. Architecto sit ullam repellat eos et ab, molestias officia facere aspernatur quia aut similique possimus, eius placeat voluptatem nihil. Laborum earum neque adipisci sit quasi facilis natus.
            </div>
            <!-- <div class="col-md-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus cum blanditiis omnis deserunt, laudantium corporis laborum eveniet quia quos recusandae minima ea, quidem mollitia. Accusamus cupiditate voluptate libero facilis!
                Quibusdam facilis tenetur modi sunt soluta, nulla quis tempora quo porro suscipit dicta enim corrupti error pariatur, ullam consequuntur nostrum. Aperiam consectetur maxime expedita dolore. Doloremque sequi non libero temporibus?
                Expedita quas voluptatibus incidunt nam laborum officiis sed, tenetur cumque soluta, sunt recusandae eaque. Omnis libero eos eligendi ex minima obcaecati atque voluptatum beatae, rerum veniam repudiandae id pariatur eaque!
                Minus, saepe repellendus. Architecto sit ullam repellat eos et ab, molestias officia facere aspernatur quia aut similique possimus, eius placeat voluptatem nihil. Laborum earum neque adipisci sit quasi facilis natus.
            </div>
            <div class="col-md-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus cum blanditiis omnis deserunt, laudantium corporis laborum eveniet quia quos recusandae minima ea, quidem mollitia. Accusamus cupiditate voluptate libero facilis!
                Quibusdam facilis tenetur modi sunt soluta, nulla quis tempora quo porro suscipit dicta enim corrupti error pariatur, ullam consequuntur nostrum. Aperiam consectetur maxime expedita dolore. Doloremque sequi non libero temporibus?
                Expedita quas voluptatibus incidunt nam laborum officiis sed, tenetur cumque soluta, sunt recusandae eaque. Omnis libero eos eligendi ex minima obcaecati atque voluptatum beatae, rerum veniam repudiandae id pariatur eaque!
                Minus, saepe repellendus. Architecto sit ullam repellat eos et ab, molestias officia facere aspernatur quia aut similique possimus, eius placeat voluptatem nihil. Laborum earum neque adipisci sit quasi facilis natus.
            </div> -->

            <!-- *********************Carousel*********************** -->
            <div class="col-md-8">
                <div class="csslider infinity" id="slider1">
                    <input type="radio" name="slides" id="slides_1"/>
                    <input type="radio" name="slides" checked="checked" id="slides_2"/>
                    <input type="radio" name="slides" id="slides_3"/>
                    <input type="radio" name="slides" id="slides_4"/>
                    <input type="radio" name="slides" id="slides_5"/>
                    <input type="radio" name="slides" id="slides_6"/>
                    <ul class="carousel_ul">
                        <li>
                            <h1>CloudCat <i class="fas fa-paw"></i></h1>
                            <p>La Mejor opción para guardar y compartir de forma segura tus archivos y documentos</p>
                        </li>
                        <li><img src="https://rawgithub.com/drygiel/csslider/master/examples/themes/stones.jpg"/>
                        </li>
                        <li>
                            <div id="bg">
                                <div>
                                    <div>
                                        <h1>¿Como Surgió?</h1>
                                        <p>When slide 3 is reached - play CSS animation!</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="scrollable">
                            <h1>Lots of text</h1>
                            <h2>Scrollable one</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in malesuada mi,
                                semper id sollicitudin urna fermentum ut fusce varius nisl ac ipsum gravida vel pretium tellus.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in malesuada mi,
                                semper id sollicitudin urna fermentum ut fusce varius nisl ac ipsum gravida vel pretium tellus.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in malesuada mi,
                                semper id sollicitudin urna fermentum ut fusce varius nisl ac ipsum gravida vel pretium tellus.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in malesuada mi,
                                semper id sollicitudin urna fermentum ut fusce varius nisl ac ipsum gravida vel pretium tellus.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in malesuada mi,
                                semper id sollicitudin urna fermentum ut fusce varius nisl ac ipsum gravida vel pretium tellus.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in malesuada mi,
                                semper id sollicitudin urna fermentum ut fusce varius nisl ac ipsum gravida vel pretium tellus.
                            </p>
                        </li>
                        <li>
                            <div id="center"> <a class="nice-link" href="https://github.com/drygiel/csslider" data-text="More examples on github" target="_blank">More examples on github</a></div>
                        </li>
                        <li>
                            <div id="center"><a class="play" id="dex-sign" href="http://drygiel.com" target="_blank"></a></div>
                        </li>
                    </ul class="carousel_ul">
                    <div class="arrows">
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                        <label for="slides_4"></label>
                        <label for="slides_5"></label>
                        <label for="slides_6"></label>
                        <label class="goto-first" for="slides_1"></label>
                        <label class="goto-last" for="slides_6"></label>
                    </div>
                    <div class="navigation"> 
                        <div>
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                        <label for="slides_4"></label>
                        <label for="slides_5"></label>
                        <label for="slides_6"></label>
                        </div>
                    </div>
                </div><a href="#" target="_blank"></a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__addr">
            <h1 class="footer__logo">CloudCat <i class="fas fa-paw"></i></h1>
                
            <h2>Contactanos</h2>
            
            <address>
                &nbsp;<i class="fas fa-phone-alt"></i>  Av. Ricardo Milos, casa #4, Santa Ana<br>
            </address>
            <a class="btn sugerencias" type="button" href="#">@ Sugerencias</a>
        </div>

        <ul class="footer__nav">
            <li class="nav__item">
            <h2 class="nav__title">Media</h2>
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
            
            <li class="nav__item nav__item--extra">
            <h2 class="nav__title">Technology</h2>
            <hr class="subrayado mb-4 mt-0 d-inline-block" style="width: 60px;">
            
            <ul class="nav__ul nav__ul--extra">
                <li>
                <a href="#">Hardware Design</a>
                </li>
                
                <li>
                <a href="#">Software Design</a>
                </li>
                
                <li>
                <a href="#">Digital Signage</a>
                </li>
                
                <li>
                <a href="#">Automation</a>
                </li>
                
                <li>
                <a href="#">Artificial Intelligence</a>
                </li>
                
                <li>
                <a href="#">IoT</a>
                </li>
            </ul>
            </li>
            
            <li class="nav__item">
            <h2 class="nav__title">Legal</h2>
            <hr class="subrayado mb-4 mt-0 d-inline-block" style="width: 60px;">
            
            <ul class="nav__ul">
                <li>
                <a href="#">Privacy Policy</a>
                </li>
                
                <li>
                <a href="#">Terms of Use</a>
                </li>
                
                <li>
                <a href="#">Sitemap</a>
                </li>
            </ul>
            </li>
        </ul>

        <div class="legal">
            <p>&copy; 2019 CloudCat. All Right Reserved</p>
            
            <span class="legal__links">
            <a href="#">Privacy Policy</a>
            
            <span></span>
            
            <a href="#">Terms of Use</a>
            </span>
        </div>
    </footer>
</body>
</html>
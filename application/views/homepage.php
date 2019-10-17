<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/homepage/skel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/homepage/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/homepage/style-xlarge.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    

    <title>SUDOCS</title>
</head>

<body id="top">
    <header>
        <!-- Header -->
        <header id="header" class="skel-layers-fixed">
            <h1 ><a href="#">SuDocs</a></h1>

        </header>

        <!-- Banner -->
        <section id="banner">
            <div class="inner">
                <div class='console-container'>
                    <span id='text'></span>
                    <!-- <h2>Bienvenido a SuDocs</h2> -->
                    <div class='console-underscore' id='console'>&#95;</div>
                </div>
                <!-- <h2>Bienvenido a SuDocs</h2> -->
                <!-- <p>Documentos de soporte para desarrolladores.</p> -->
               
                <ul class="actions">
                    <li><a href="<?=base_url(); ?>Login" class="button big special">Iniciar Sesi&oacute;n</a></li>
                    <li><a href="<?=base_url(); ?>contenido" class="button big alt">Empezar ahora</a></li>
                </ul>
            </div>
        </section>

        <!-- One -->
        <section id="one" class="wrapper style1">
            <header class="major">
                <h2>Documentos de Soporte para Desarrolladores</h2>
              
            </header>
            <div class="container">
                <div class="row">
                    <div class="4u">
                        <section class="special box">
                            <i class="icon fas fa-folder-open major"></i>
                            <h3 style="color:#fff;">Gestor de Archivos</h3>
                            <p style="color:#000;">En este lugar puedes encontrar gu&iacute;as&#44; ejemplos y cualquier otro documento de texto relacionado al aprendizaje o pr&aacute;ctica de framework o lenguajes de programaci&oacute;n&#46;</p>
                        </section>
                    </div>
                    <div class="4u">
                        <section class="special box">
                            <i class="icon fas fa-cloud-download-alt major"></i>
                            <h3 style="color:#fff;">Subir y descargar </h3>
                            <p style="color:#000;">Todos  pueden ver y descargar los archivos que quieran. Estos archivos pueden ser evaluados y denunciados. <u>Si tu quieres subir archivos debes estar registrado</u>.</p>
                        </section>
                    </div>
                    <div class="4u">
                        <section class="special box">
                            <i class="icon fas fa-user-friends major"></i>
                            <h3 style="color:#fff;">Comunidad</h3>
                            <p style="color:#000;">Diseñado para ayudar a programadores por medio de diferentes recursos proporcionados por múltiples colaboradores y que puedes compartir.</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!-- Two -->
        <section id="two" class="wrapper style2">
            <header class="major">
                <h2>¿Qu&eacute; es SuDocs?</h2>
                
            </header>
            <div class="container">
                <div class="row">
                    <div class="6u">
                        <section class="special">
                            <a href="#" class="image fit"><img style="height:400px;" src="<?= base_url(); ?>libs/images/mini-banner.jpeg" alt="" /></a>
                            <h2 style="color:#086d8b;">Acerca de SuDocs</h2>
                            <p>Su nombre proviene del ingl&eacute;s "Support  Documents" Documentos de soporte o ayuda para programadores.</p>
                            <p>Cuenta con 2 niveles de usuarios, visitantes (todos los usuarios) y colaboradores (todos los usuarios registrados), estos últimos tienen en privilegio de aportar a la comunidad.</p>
                            <p>Los archivos están divididos por lenguaje o frameworks y sub divididos en diferentes categorías.</p>
  
                        </section>
                    </div>
                    <div class="6u">
                        <section class="special">
                            <a href="#" class="image fit"><img style="height:400px;" src="<?= base_url(); ?>libs/images/mini1-banner.jpeg" alt="" /></a>
                            <h2 style="color:#086d8b;" >Desarrolladores</h2>
                            <p>Este proyecto,</p>
                            <ul class="actions">
                                <li><a href="#" class="button alt">Leer mas</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </section>



        <!-- Footer -->
        <footer id="footer">
            <div class="container">

                <ul class="copyright">
                    <li>&copy;Todos los derechos reservados.</li>
                    <li>2019.</li>

                </ul>
            </div>
        </footer>
        <script src="<?= base_url() ?>libs/js/jquery-3.4.1.min.js"></script>
        <script src="<?= base_url() ?>libs/js/homepage/skel.min.js"></script>
        <script src="<?= base_url() ?>libs/js/homepage/skel-layers.min.js"></script>
        <script src="<?= base_url() ?>libs/js/homepage/init.js"></script>
        <script src="<?= base_url() ?>libs/js/homepage/homepage.js"></script>



</body>

</html>
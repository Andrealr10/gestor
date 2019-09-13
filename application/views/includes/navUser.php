<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ----------------------------------Pezonalizado-------------------------------- -->
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/simplesidebar.css">
    <link rel="stylesheet" href="<?= base_url() ?>libs/fonts/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>libs/css/bootstrap.min.css">

    <script src="<?= base_url() ?>libs/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>libs/js/popper.min.js"></script>
    <script src="<?= base_url() ?>libs/js/bootstrap.min.js"></script>
    <!-- ----------------------------------Pezonalizado-------------------------------- -->
    <script src="<?= base_url() ?>libs/js/simplesidebar.js"></script>


    <title>EL NOMBRE</title>
</head>

<body>
    <div id="my-sidebar-context" class="widget-sidebar-context">
        <!-- <header id="this-header" class="navbar  page-header">
            <a href="#" class="navbar-toggler widget-sidebar-toggler text-light">
                <i class="fas fa-bars"></i>
            </a>
            <h3 class="navbar-brand text-left text-light" href="#">
                Cloudcat&nbsp;<i class="fas fa-cat"></i>
            </h3>
            <div class="col-lg-10 text-right">
                <a class="text-danger d-lg-inline-block " href="<?= base_url(); ?>Login">
                    <i class="fas fa-sign-in-alt"></i>&nbsp; Registro &#124; Iniciar Sesión
                </a>
            </div>


        </header> -->
        <nav id="this-header" class="navbar page-header">
            <a class="navbar-brand navbar-toggler widget-sidebar-toggler text-light" href="#">
                <i class="fas fa-bars width=" 30" height="30" class="d-inline-block align-top"></i>
            </a>
            <h4 class=" text-light" >&nbsp;Cloudcat&nbsp;<i class="fas fa-cat"></i></h4>

            <a class=" navbar-brand text-danger d-lg-inline-block " href="<?= base_url(); ?>Login">
                <i class="fas fa-sign-in-alt"></i>&nbsp; Registro &#124; Iniciar Sesión
            </a>

        </nav>
        <div class="page-body">
            <nav class="widget-sidebar">
                <ul class="list-unstyled mt-2">
                    <li class="">

                        <div class="input-group mb-2 col-sm-12">
                            <div class="input-group-prepend ">
                                <span class="input-group-text "><i class="fas text-center fa-search"></i></span>

                            </div>
                            <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon1">
                        </div>
                    </li>
                    <li>
                        <a href="#sidebar-link-mycomponents" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <i class="fas fa-folder"></i>&nbsp;<span>Tecnologias </span>
                        </a>
                        <ul class="collapse list-unstyled show" id="sidebar-link-mycomponents">
                            <?php foreach ($categorias as $categoria) { ?>
                                <li>
                                    <a href="<?= base_url('subcategoria') ?>/load/<?= $categoria->nombre ?>"><?= strtoupper($categoria->nombre) ?></a>
                                </li>

                            <?php } ?>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="fas fa-info-circle"></i>&nbsp;&nbsp;<span>Acerca de </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="fas fa-comment-dots"></i>&nbsp;<span>Notificaciones </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-people-carry"></i>&nbsp;<span>Desarrolladores </span>
                        </a>
                    </li>

                </ul>

            </nav>
        </div>
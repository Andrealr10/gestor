<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--CDN BOOSTRAP AND FONT-AWESOME-->
  <link href="<?= base_url(); ?>libs/nav.css">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
  <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>

  <title>EL NOMBRE</title>
</head>

<body>
  <!-- BARRA DE NAVEGACIÓN  -->

  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <!-- Logo -->
    <div class="col-1">
    <a class="navbar-brand" href="#">logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <!-- opciones -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-home"></i> INICIO </a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            TECNOLOGIAS
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">ADMIN </a>
        </li>
      </ul>
      <!-- Barra de busqueda -->
      <div class="col-xs-10 col-sm-5">
        <form class="form-inline">
          <!-- <div class="row"> -->
            <input class="form-control col mr-sm-2 mr-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
              <i class="fa fa-search"></i></button>
          <!-- </div> -->
        </form>
      </div>
      <!-- Redirecionando al login  -->
      <div>
        <a class="nav-link d-lg-inline-block mb-2 mb-md-0 ml-md-2" href="#">Registro &#124; Iniciar Sesión</a>
      </div>

  </nav>
  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SUDOCS</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>libs/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>libs/lte/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/css/nav.css">
  <link href="<?= base_url() ?>libs/upload/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>libs/upload/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/sweetalert/bootstrap-4.min.css">

  <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-dark bg-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto iniciar">
        <li><a href="<?= base_url('login') ?>/logout">
            <span class="mr-2 letra">Cerrar Sesi&oacute;n</span><i class="fas fa-sign-in-alt"></i></a></li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a data-widget="pushmenu" href="#" class="brand-link">
        <!-- <img src="<?= base_url() ?>libs/images/logocopy.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light"><img src="<?= base_url() ?>libs/images/sudocs.png" alt="Logo" style="width:90px;height:25px; margin-left:25%; padding:0;"></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ?>libs/images/avatar.png" class="img-circle elevation-2" alt="img">
          </div>
          <div class="info">
            <a href="#" class="d-block">&nbsp;&nbsp;&nbsp;<?= $this->session->login->username ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">CONFIGURACI&Oacute;N</li>
            <li class="nav-item">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#modaledit">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>Mi perfil</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('usuario') ?>" class="nav-link" onclick="sessionStorage.clear()">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>Usuarios</p>
              </a>
            </li>
            <li class="nav-header">CONTENIDO</li>
            <li class="nav-item">
              <a href="<?= base_url('categoria') ?>" class="nav-link" onclick="sessionStorage.clear()">
                <i class="nav-icon fas fa-bars"></i>
                <p>Categorias</p>
              </a>
            </li>

            <li class="nav-item has-treeview" style="color: #ffff;">
              <a class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Archivos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php foreach ($categorias as $categoria) { ?>
                  <li class="nav-item has-treeview">
                    <a onclick="loadSubcat('<?= $categoria->nombre ?>')" class="nav-link">
                      <i class="far fa-circle nav-icon text-info"></i>
                      <p id="nomb">
                        <?= $categoria->nombre ?>
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview" id="<?= $categoria->nombre ?>">
                      <a href=""></a>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            </li>
            <!-- <li class="nav-header">INFORMACI&Oacute;N</li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-info-circle"></i>
                <p>Acerca de</p>
              </a>
            </li> -->

            <li class="nav-header">NOTIFICACIONES</li>
            <li class="nav-item">
              <a href="<?= base_url('notificaciones') ?>" class="nav-link">
                <i class="fas fa-comment-alt nav-icon"></i>
                <p>Notificaciones
                  <span class="right badge badge-info"> + </span>
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Aqui va todo el cuerpo de la pagina -->
    <div class="content-wrapper" style="background: linear-gradient(to bottom, rgb(255, 255, 255),rgb(144, 150, 153), rgba(84, 92, 94, 0.692));
}">
      <!-- Content Header (Page header) -->
      <br>
      <!-- /.content-header -->
      <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-dark">
              <h4 class="modal-title text-light "><i class="fas fa-user ml-5"></i>&nbsp;&nbsp;&nbsp; Actualizar Perfil</h4>
              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
              <form id="formuEd">
                <label for="username">Nombre de usuario:</label>
                <input type="text" placeholder="Username" class="form-control mt-2" id="username" name="username" disabled value="<?=$this->session->login->username?>">
                <input type="hidden" name="id_usuario" id="id_usuario" value="<?=$this->session->login->id_usuario?>">
                <!-- <br><label for="nombre">Nombre:</label>
                <input type="text" placeholder="Nombre" class="form-control mt-2 " id="nombre" name="nombre" value="<?=$this->session->login->nombre?>">
                <br><label for="apellido">Apellido:</label>
                <input type="text" placeholder="Apellido" class="form-control mt-2 " id="apellido" name="apellido" value="<?=$this->session->login->apellido?>"> -->
                <br><label for="correo">Correo electrónico:</label>
                <input type="text" placeholder="Username" class="form-control mt-2" id="correo" name="correo" value="<?=$this->session->login->correo?>">
                <!-- <input type="mail" placeholder="corrreo@ejemplo.com" class="form-control mt-2" id="correoa" name="correo"> -->
                <!-- <input type="password" placeholder="Contraseña" class="form-control mt-2" id="passworda" name="password"> -->
                
              </form>
            </div>
            <div class="modal-footer ">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary bg-fondo" id='aniadir_cancion' data-dismiss="modal" onclick="actualizar2()">Actualizar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div id="contenido">
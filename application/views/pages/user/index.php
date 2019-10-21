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
      <!-- <img src="<?= base_url() ?>libs/images/logocopy.png" alt="Logo" class="brand-image img-circle elevation-3"> -->
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
          <a href="#" class="d-block">&nbsp;&nbsp;&nbsp;<?=$this->session->login->username?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">CONFIGURACI&Oacute;N</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>Mi perfil</p>
              </a>
            </li>
            <li class="nav-header">CONTENIDO</li>
           
            <li class="nav-item has-treeview">
              <a onclick="loadCategorias()" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                Tecnolog&iacute;as
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
            <li class="nav-header">INFORMACI&Oacute;N</li>
          <li class="nav-item">
          <a href="" class="nav-link" data-toggle="modal" data-target="#exampleModalLong">
          <i class="nav-icon fas fa-info-circle"></i>
          <p>Acerca de</p>
            </a>
          </li>
    
          <li class="nav-header">NOTIFICACIONES</li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-comment-alt nav-icon"></i>
              <p>Cont&aacute;ctanos</p>
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

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div id="contenido">

            <!-- Aqui va todo el contenido -->

          </div>
        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer bg-dark">
    <div class="float-right d-none d-sm-inline-block text-secundary">
    &copy;Todos los derechos reservados 2019
  </div>
  </div>
  </footer>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background:#1f1f1f;color:#ffffff !important;">
      <div class="modal-header" style="background:#1f1f1f;color:#ffffff !important;">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope"></i>&nbsp&nbspNuevo Mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:#ffffff !important;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background:#ffffff !important;">
        <form>
          <div class="form-group">
          <label for="inputState">Asunto:</label>
          <select id="inputState" class="form-control">
        <option selected>Elige...</option>
        <option>Nueva Categoría</option>
        <option>Nueva SubCategoría</option>
        <option>Comentario</option>
        <option>Otro</option>
          </select>   
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer justify-content-center" style="background:#ffffff !important;">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button> -->
        <button type="button" style="background:#086d8b;color:#ffffff !important;" class="btn">Enviar Mensaje</button>
      </div>
    </div>
  </div>
</div>


<!-- Acerca De -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background:#1f1f1f;color:#ffffff !important;">
      <div class="modal-header" style="background:#1f1f1f;color:#ffffff !important;">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i>&nbsp&nbspAcerca de</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:#ffffff !important;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background:#ffffff !important;">
        <h5>SUDOCS</h5>
      </div>
      <div class="modal-footer"style="background:#ffffff !important;" >
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->

  <!-- Bootstrap -->
  <script src="<?= base_url(); ?>libs/js/bootstrap.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url(); ?>libs/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>libs/lte/js/adminlte.js"></script>
  <script src="<?= base_url(); ?>libs/js/util.js"></script>
  <script src="<?= base_url(); ?>libs/js/copy.js"></script>
  <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>libs/sweetalert/sweetalert2.min.js"></script>


</body>

</html>
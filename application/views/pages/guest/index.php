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
  <link rel="stylesheet" href="<?= base_url(); ?>libs/css/contenido.css">



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
        <li><a href="<?= base_url('login') ?>" class="iniciar"><i class="fas fa-user-circle"></i>&nbsp&nbspIniciar Sesi&oacute;n</a>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('guest') ?>" class="brand-link">
        <!-- <img src="<?= base_url() ?>home/images/subcategorias/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <a data-widget="pushmenu" href="#" class="brand-link">
          <!-- <img src="<?= base_url() ?>libs/images/logocopy.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
          <span class="brand-text font-weight-light"><img src="<?= base_url() ?>libs/images/sudocs.png" alt="Logo" style="width:90px;height:25px; margin-left:25%; background:transparent !important;"></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?= base_url() ?>libs/images/avatar.png" class="img-circle elevation-2" alt="img">
            </div>
            <div class="info">
              <a href="#" class="d-block">&nbsp;&nbsp;&nbsp;BIENVENIDO</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

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
                <a href="#" class="nav-link">
                  <i class="fas fa-comment-alt nav-icon"></i>
                  <p>Cont&aacute;ctanos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-friends nav-icon"></i>
                  <p>Desarrolladores</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Aqui va todo el cuerpo de la pagina -->
    <div class="content-wrapper" style="background: linear-gradient(to bottom, rgb(255, 255, 255),rgb(144, 150, 153), rgba(84, 92, 94, 0.692));}">
     <br>
      <!-- /.content-header -->
      <div class="container-fluid">
        <!--Barra de Navegación-->
       
        <!--Barra de Navegación-->

      </div>

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
      <div class="float-right d-none d-sm-inline-block">
        &copy;Todos los derechos reservados 2019.
      </div>
      <!-- <strong>Copyright &copy; 2019 Nombre de la app.</strong> -->
      <!-- <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> Beta 1.1
      </div> -->
    </footer>
  </div>

  <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background:#1f1f1f;">
      <div class="modal-header" style="background:#1f1f1f;color:#ffffff !important;">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i>&nbsp&nbspAcerca de</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:#ffffff !important;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background:#ffffff !important;">
        <h5 class="text-center">SUDOCS</h5>
        <p><i class="fas fa-question-circle"></i>&nbsp&nbsp¿Qué es Sudocs?</p>
        <p class="text-justify">Es un espacio de soporte y ayuda en el mundo de la programación, en el cual puedes encontrar documetación sobre diferentes lenguajes de programación, así como frameworks que resulten ser de interés.</p>
        <p><i class="fas fa-user"></i>&nbsp&nbspNivel: Visitante</p>
        <p class="text-justify">Al no poseer una cuenta, únicamente podrás</p>
        <p class="text-justify"><i class="fas fa-cloud-download-alt"></i>&nbspExplorar Archivos: Puedes examinar las diferentes categorías existentes, asi como sus subcategorias y los archivos que contiene, con la posibilidad de dar un vistazo mediante la vista previa y descargar el que más te genere interés.</p>
        <p>Crea tu Cuenta ahora mismo y contarás con acceso a:</p>
        <p class="text-justify"><i class="fas fa-user-circle"></i>&nbsp&nbspCrear Tu cuenta Personal</p>
        <p class="text-justify"><i class="fas fa-users"></i>&nbsp&nbspColaborar con la Comunidad: Tienes la libertad de compartir tus archivos con la comunidad, si tienes material que pueda ser de ayuda a otros, bienvenido sea! una vez el contenido sea aprobado por el administrador, estará al alcance de todos.</p>
        <p class="text-justify"><i class="fas fa-star"></i>&nbsp&nbspValorar Contenido: Puedes aportar tu opinión respecto a los archivos que has descargado mediante tu valoración a cada uno de ellos.</p>
        <p class="text-justify"><i class="fas fa-share-alt"></i>&nbsp&nbspCompartir Temática: Cuentas con la facultad de compartir el contenido mediante código QR o simplemente copiando el link de la descarga, y de esta manera difundir el material a aquellos que creas conveniente.</p>
        <p class="text-justify"><i class="fas fa-user-edit"></i>&nbsp&nbspModificar Información: Puedes cambiar la información de tu perfil, es decir modificar la información que brindaste al momento de registrarte.</p>
        <p><i class="fas fa-envelope-open-text"></i>&nbsp&nbspContáctanos</p>
        <p>Si necesitas contactarte con el administrador puedes hacerlo! ya sea que necesites una categoría o subcategoría nueva para subir tu material, o simplemente para dejar un comentario o sugerencia.</p>

      </div>
      <div class="modal-footer"style="background:#ffffff !important;" >
        <button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url(); ?>libs/js/bootstrap.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url(); ?>libs/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>libs/lte/js/adminlte.js"></script>
  <script src="<?= base_url(); ?>libs/js/util.js"></script>

</body>

</html>
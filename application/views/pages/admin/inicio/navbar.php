<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
	<link rel="stylesheet" href="<?= base_url(); ?>libs/css/sidebar.css">
	<link rel="stylesheet" href="<?= base_url(); ?>libs/css/nav.css">
	
	<title>SUDOCS</title>
</head>

<body>
	<div class="wrapper">
		<!--Wrapper-->
		<nav id="sidebar">
			<!--Sidebar-->
			<div class="sidebar-header">
				<!--Header Sidebar-->
				<!-- <h3>CloudCat <i class="fas fa-cat"></i></h3> -->
				<h5 style="letter-spacing: 2px;" class="text-center">MEN&Uacute;</i></h5>
			</div>
			<!--Header Sidebar-->
			<ul class="list-unstyled components">
				<p class="text-center"><i class="fas fa-user-circle mr-2"></i>USUARIO</p>
				<li class="active">
					<a href="<?= base_url('categoria') ?>"><i class="fas fa-laptop-code mr-2 ml-2" style="font-size:15px;"></i>&nbsp;&nbsp;Tecnolog&iacute;as</a>
				</li>
				<li>
					<a href="<?= base_url('archivo') ?>"><i class="fas fa-folder mr-2 ml-2" style="font-size:15px;"></i>&nbsp;&nbsp;Archivos</a>
				</li>
				<li>
					<a href="<?= base_url('usuario') ?>"><i class="fas fa-user-friends mr-2 ml-2" style="font-size:15px;"></i>&nbsp;&nbsp;Usuarios</a>
				</li>
				<li>
					<a href="<?= base_url('notificaciones') ?>"><i class="fas fa-comment-alt mr-2 ml-2" style="font-size:15px;"></i>&nbsp;&nbsp;Notificaciones</a>
				</li>
				<!-- <li>
   				<a href="#">Salir <i class="fas fa-sign-out-alt"></i></a>
   			</li> -->
			</ul>

			
		</nav>
		<!--Sidebar-->

		<div class="content" id="content">
			<!--Contenido-->
			<nav class="navbar navbar-expand-lg text-light bg-colorcito">
				<!--Cloucat nav-->
				<button type="button" id="sidebarCollapse" class="btn btn-default text-light mr-3">
					<i class="fas fa-bars" id="boton"></i>
				</button>

				<!-- <a class="navbar-brand" href="#"> CloudCat Admin </a> -->
				<a class="navbar-brand border border-light" href="#"><h3 class="m-auto pl-2 pr-2"><i class="fas fa-copy"></i>&nbsp&nbsp SUDOCS</h3></a>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto iniciar">
					<li><a href="<?= base_url('login') ?>/logout">
      				<span class="mr-2 letra">Cerrar Sesi&oacute;n</span><i class="fas fa-sign-in-alt"></i></a></li>

					</ul>
				</div>
			</nav>
			<!--Cloucat nav-->


			<div class="container">
				<!--Barra de Navegación-->
				<div class="row">
					<div class="col-md-12 text-center">
						<ol class="breadcrumb">
							<li class="active" id="ruta">Panel de Control</li>
						</ol>
					</div>
				</div>
				<!--Barra de Navegación-->

			</div>
			<script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
			<script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
			<script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>
			<script src="<?= base_url(); ?>libs/js/sidebar.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/sidebar.css">
    <title>Cloudcat</title>
</head>
<body>
<div class="wrapper"> <!--Wrapper-->
   	<nav id="sidebar">  <!--Sidebar-->
   		<div class="sidebar-header"> <!--Header Sidebar-->
   			<h3>CloudCat <i class="fas fa-cat"></i></h3> 
   		</div>                       <!--Header Sidebar-->
   		<ul class="list-unstyled components">
         <p class="text-center">User 01 <i class="fas fa-user-circle"></i></p>
         <li class="active">
   				<a href="#">Categorías</a>
   			</li>
   			<li>
   				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Archivos</a>
   				<ul class="collapse list-unstyled" id="homeSubmenu">
   					<li>
   						<a href="#">Todos</a>
   					</li>
   					<li>
   						<a href="#">Pendientes</a>
   					</li>
   					<li>
   						<a href="#">Aprobados</a>
					   </li>
					   <li>
						<a href="#">Cancelados</a>
					</li>
   				</ul> 
   			</li>
   			<li>
   				<a href="#">Usuarios</a>
   			</li>
   			<li>
   				<a href="#">Notificaciones</a>
   			</li>
   			<!-- <li>
   				<a href="#">Salir <i class="fas fa-sign-out-alt"></i></a>
   			</li> -->
   		</ul>
   		
   		<ul class="list-unstyled CTAs">
   			<li>
   				<a href="#" class="download">Salir <i class="fas fa-sign-out-alt"></i></a>
   			</li>
   			<!-- <li>
   				<a href="#" class="article">article</a>
   			</li> -->
   		</ul>
   	</nav>  <!--Sidebar-->
   	
    <div class="content" id="content"> <!--Contenido-->
   		<nav class="navbar navbar-expand-lg text-light bg-colorcito"> <!--Cloucat nav-->
   		
   		<button type="button" id="sidebarCollapse" class="btn btn-default text-light">
			<i class="fas fa-bars"></i>
   		</button>
   		
  <a class="navbar-brand" href="#">   CloudCat Admin <i class="fas fa-cog"></i></a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    
    </ul>
  </div>
</nav> <!--Cloucat nav-->
  	

    <div class="container">     <!--Barra de Navegación-->
	    <div class="row">
		  <div class="col-md-12 text-center">
			<ol class="breadcrumb">
			  <li class="active">Panel de Control</li>
			</ol>
		  </div>
	  </div>   <!--Barra de Navegación-->
      
</div>
    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/sidebar.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/categoria.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/categoria.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid content-container filter-container">
		<div class="row">
			<div class="col-sm-12 text-center filtered-cards">
				<div id="card-placeholder"></div>
				<!-- *********************PHP************************ -->
				<?php foreach ($categorias as $categoria) { ?>
				<div class="card">
					<div class="card-img-container"><img src="<?= $categoria->imagen?>" alt="" style="height: 200px; width: 300px"></div>  <!--por defecto, el div genera imagenes, eso se puede cambiar si se desea-->
					<div class="card-text-container">
						<h2 class="card-title"><?= $categoria->nombre?> </i></h2>
						<p class="card-body"><?= $categoria->descripcion?></p>
					</div>
					<div class="card-link-container">
						<a class="link" href="subcategoria.php">Ver</a>
					</div>
				</div>
				<?php } ?>
				<!-- *********************JAVA************************** -->
				
			</div>
		</div>
	</div>
</body>
</html>
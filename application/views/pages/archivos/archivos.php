<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/css/contenido.css">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Archivos</title>
</head>

<body>
  <!--Establecer maxlenght="21" para los titulos, 34 para subtitulos y 200 para la descripcion-->
  <a href="<?= base_url('subcategoria'); ?>" class="buton"><i class="large material-icons">arrow_back</i></a>

  <div class="container">
    <!-- ******************************************************************* -->
    <?php foreach ($archivos as $archivo) { ?>
    <div class="tarjeta">
      <!-- <img src="https://res.cloudinary.com/ddbxzcb7k/image/upload/v1565102528/dp-01_mxstm3.svg"></img> -->
      <img width="100px" src="<?= $archivo->icono ?>">
      <div class="titulo">
        <h2><?= $archivo->archivo ?></h2>
        <hr>
        <div class="subtitulo">Tipo: <?= $archivo->tipo_archivo ?></div>
        <div class="subtitulo">Fecha subido: <?= $archivo->fecha ?></div>
        <div class="subtitulo">Tamaño: <?= $archivo->tamanio ?> KB</div>
        <div class="subtitulo">Autor: <?= $archivo->username ?></div>
        <!-- <div class="descripcion">Guía para configurar Codeigniter eficazmente y usarlo como backend de nuestro proyecto (ideal para principiantes).</div> -->
      </div>
      <br><br>
      <div class="acciones">
        <a href="<?= base_url('archivo') ?>/download/PHP/guias/<?= $archivo->archivo ?>">
          <button class="descargar">DESCARGAR <i class="fas fa-download"></i></button>
        </a>
        <div class="overlay"></div>
        <div class="iconito">
          <i class="fas fa-user fa-2x" style="color:white;"></i>
        </div>
      </div>
    </div>
    <?php } ?>
    <!-- ******************************************************************* -->
  </div>
</body>

</html>
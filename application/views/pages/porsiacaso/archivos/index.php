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
  <link href="<?= base_url() ?>libs/upload/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>libs/upload/styles.css" rel="stylesheet">
  <title>Archivos</title>
</head>

<body>
  <a href="<?= base_url('subcategoria') ?>/load/<?= $categoria->nombre ?>" class="buton"><i class="large material-icons">arrow_back</i></a>

  <div class="container">
    <input type="text" name="subcategoria" id="subcategoria" hidden value="<?= $subcategoria->id_subcategoria ?>">
    <div class="row">
      <div class="col-md-6 col-sm-12">

        <!-- Our markup, the important part here! -->
        <div id="drag-and-drop-zone" class="dm-uploader p-5">
          <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3>

          <div class="btn btn-primary btn-block mb-5">
            <span>Open the file Browser</span>
            <input type="file" title='Click to add Files' />
          </div>
        </div><!-- /uploader -->

      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card h-100">
          <div class="card-header">
            File List
          </div>

          <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
            <li class="text-muted text-center empty">No files uploaded.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($archivos as $archivo) { ?>
        <div class="tarjeta">
          <img width="100px" src="<?= base_url() . '/' . $archivo->icono ?>"> <button class="vistaPrevia"><i class="far fa-eye fa-lg"></i></button>
          <div class="titulo">
            <h2><?= $archivo->archivo ?></h2>
            <hr>
            <div class="subtitulo">Tipo: <?= $archivo->tipo_archivo ?></div>
            <div class="subtitulo">Fecha subido: <?= $archivo->fecha ?></div>
            <div class="subtitulo">Tamaño: <?= ($archivo->tamanio / 1024) ?> KB</div>
            <div class="subtitulo">Autor: <?= $archivo->username ?></div>
          </div>
          <div class="acciones mt-2">
            <div class="rate">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="5 Star">5 stars</label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="4 Star">4 stars</label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="3 Star">3 stars</label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="2 Star">2 stars</label>
              <input type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="1 Star">1 star</label>
            </div>
            <a href="<?= base_url('archivo') ?>/download/<?= $categoria->nombre ?>/<?= $subcategoria->nombre ?>/<?= $archivo->archivo ?>">
              <button class="descargar">DESCARGAR <i class="fas fa-download"></i></button>
            </a>
            <div data-toggle="modal" data-target="#share<?= $archivo->id_archivo ?>" class="overlay"></div>
            <div class="iconito">
              <i class="fas fa-share-alt fa-3x" style="color:white;"></i>
            </div>
          </div>
        </div>
        <div class="modal fade" id="share<?= $archivo->id_archivo ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Compartir Archivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
              </div>
              <div class="modal-body">
                <h6><?= $archivo->archivo ?></h6>
                <img src="<?= base_url('qr_gen') . '/archivo/' . $categoria->nombre . "/" . $subcategoria->nombre . "/" . $archivo->archivo ?>" alt="" style="height: 100%; width: 100%">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- ******************************************************************* -->
    </div>
  </div>
  <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>

  <script src="<?= base_url() ?>libs/upload/dist/js/jquery.dm-uploader.min.js"></script>
  <script src="<?= base_url() ?>libs/upload/demo-ui.js"></script>
  <script src="<?= base_url() ?>libs/upload/demo-config.js"></script>

  <!-- File item template -->
  <script type="text/html" id="files-template">
    <li class="media">
      <div class="media-body mb-1">
        <p class="mb-2">
          <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
        </p>
        <div class="progress mb-2">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
          </div>
        </div>
        <hr class="mt-1 mb-1" />
      </div>
    </li>
  </script>

  <!-- Debug item template -->
  <script type="text/html" id="debug-template">
    <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
  </script>

</body>

</html>
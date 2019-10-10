<link rel="stylesheet" href="<?= base_url(); ?>libs/css/contenido.css">
<div class="row">
    <input type="text" name="subcategoria" id="subcategoria" hidden value="<?= $subcategoria->id_subcategoria ?>">
    <input type="text" name="categoria" id="categoria" hidden value="<?= $categoria->nombre ?>">
    <input type="text" name="sub" id="sub" hidden value="<?= $subcategoria->nombre ?>">
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
    <?php foreach ($archivos as $archivo) { ?>
        <div class="tarjeta">
            <img width="100px" src="<?= base_url() . '/' . $archivo->icono ?>"> <button class="vistaPrevia"><i class="fas fa-ellipsis-v  fa-lg"></i></button>
            <div class="titulo">
                <h2><?= $archivo->archivo ?></h2>
                <hr>
                <div class="subtitulo">Tipo: <?= $archivo->tipo_archivo ?></div>
                <div class="subtitulo">Fecha subido: <?= $archivo->fecha ?></div>
                <div class="subtitulo">Tamaño: <?= ($archivo->tamanio / 1024) > 1024 ? round((($archivo->tamanio / 1024) / 1024), 2) . ' MB' : round(($archivo->tamanio / 1024), 2) . ' KB'  ?></div>
                <div class="subtitulo">Autor: <?= $archivo->id_archivo ?></div>
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
                <?=$archivo->id_archivo?>
                <a href="<?= base_url('archivo') ?>/download/<?=$archivo->id_archivo?>/<?= $categoria->nombre ?>/<?= $subcategoria->nombre ?>/<?= $archivo->archivo ?>">
                    <button class="descargar">DESCARGAR <i class="fas fa-download"></i></button>
                </a>
                <div data-toggle="modal" data-target="#share<?= $archivo->id_archivo ?>">
                    <div class="overlay"></div>
                    <div class="iconito">
                        <i class="fas fa-qrcode fa-2x" style="color:white;"></i>
                    </div>
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

</div>
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/contenido.css">
<div class="row">
    <?php foreach ($archivos as $archivo) { ?>
        <div class="tarjeta">
            <img width="100px" src="<?= base_url() . '/' . $archivo->icono ?>"> <button class="vistaPrevia"><i class="fas fa-ellipsis-v  fa-lg"></i></button>
            <div class="titulo">
                <h2><?= $archivo->archivo ?></h2>
                <hr>
                <div class="subtitulo">Tipo: <?= $archivo->tipo_archivo ?></div>
                <div class="subtitulo">Fecha subido: <?= $archivo->fecha ?></div>
                <div class="subtitulo">Tamaño: <?= ($archivo->tamanio / 1024) > 1024 ? round((($archivo->tamanio / 1024)/1024), 2).' MB':round(($archivo->tamanio / 1024), 2).' KB'  ?></div>
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
</div>
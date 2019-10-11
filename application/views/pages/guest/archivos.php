<div class="row">
    <?php foreach ($archivos as $archivo) { ?>
        <div class="tarjeta">
            <img width="100px" src="<?= base_url() . '/' . $archivo->icono ?>">
            <div class="titulo">
                <h2 class="text-truncate"><?= $archivo->archivo ?></h2>
                <hr>
                <div class="subtitulo">Tipo: <?= $archivo->tipo_archivo ?></div>
                <div class="subtitulo">Fecha subido: <?= $archivo->fecha ?></div>
                <div class="subtitulo">Tamaño: <?= ($archivo->tamanio / 1024) > 1024 ? round((($archivo->tamanio / 1024)/1024), 2).' MB':round(($archivo->tamanio / 1024), 2).' KB'  ?></div>
                <div class="subtitulo text-truncate">Autor: <?= $archivo->username ?></div>
            </div>
            <div class="acciones mt-2">
            <div class="rate">
                    <?php for ($i = 5; $i >= 1; $i--) {
                            if ($i <= $archivo->valoracion) { ?>
                            <label style="color: #ffc700;">stars</label>
                        <?php } else { ?>
                            <label style="color: #ccc;">stars</label>
                    <?php }
                        } ?>
                </div>
                <br><br>
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
                        <h6 class="text-truncate"><?= $archivo->archivo ?></h6>
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
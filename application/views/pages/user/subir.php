<link rel="stylesheet" href="<?= base_url(); ?>libs/css/contenido.css">
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/subir.css">
<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <li class="active" id="ruta">
                <i onclick="loadArchivos('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')" class="fa fa-arrow-circle-left" style="font-size: 20px; margin-right: 10px;"></i>
                <a onclick="loadCategorias()">SUDOCS / Categorias /</a>
                <a onclick="loadSubcategorias('<?= $categoria->nombre ?>')"><?= $categoria->nombre ?> /</a>
                <a onclick="loadArchivos('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><?= $subcategoria->nombre ?> /</a>
                <a>Mis archivos </a>
            </li>
        </ol>
    </div>
</div>
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/subir.css">
<input type="text" name="subcategoria" id="subcategoria" hidden value="<?= $subcategoria->id_subcategoria ?>">
<input type="text" name="categoria" id="categoria" hidden value="<?= $categoria->nombre ?>">
<input type="text" name="sub" id="sub" hidden value="<?= $subcategoria->nombre ?>">
<div class="row">
    <div class="row" style="margin:0 auto;">
        <input type="text" name="subcategoria" id="subcategoria" hidden value="<?= $subcategoria->id_subcategoria ?>">
        <input type="text" name="categoria" id="categoria" hidden value="<?= $categoria->nombre ?>">
        <input type="text" name="sub" id="sub" hidden value="<?= $subcategoria->nombre ?>">
        <div class="col-md-12 col-sm-12">
            <!-- Our markup, the important part here! -->
            <div id="drag-and-drop-zone" class="dm-uploader p-5">
                <!-- <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3> -->
                <h3 class="mb-5 mt-5 ">Arrastra los archivos aqu&iacute;</h3>

                <div class="btn btn-subir btn-block mb-5">
                    <!-- <span>Open the file Browser</span> -->
                    <span>Seleccionar el archivo</span>
                    <input type="file" title='Click para seleccionar archivos' />
                </div>
            </div><!-- /uploader -->
        </div>
    </div>

</div>
<div class="container-fluid">
    <div class="row">
        <?php foreach ($archivos as $archivo) { ?>
            <div class="tarjeta">
                <button class="vistaPrevia" onclick="remove(<?= $archivo->id_archivo ?>,'<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><i class="fas fa-trash fa-lg"></i></button>
                <a target="blank" href="https://docs.google.com/viewer?url=<?= base_url() ?>home/files/<?= $categoria->nombre ?>/<?= $subcategoria->nombre ?>/<?= $archivo->archivo ?>">
                    <img width="100px" src="<?= base_url() . '/' . $archivo->icono ?>">
                    <div class="titulo">
                        <h2 class="text-truncate"><?= $archivo->archivo ?></h2>
                        <!-- <br> -->
                        <div class="subtitulo"> </div>
                        <div class="subtitulo">Descargas: <?= $archivo->descargas ?></div>
                        <div class="subtitulo">Fecha subido: <?= $archivo->fecha ?></div>
                        <div class="subtitulo">Tamaño: <?= ($archivo->tamanio / 1024) > 1024 ? round((($archivo->tamanio / 1024) / 1024), 2) . ' MB' : round(($archivo->tamanio / 1024), 2) . ' KB'  ?></div>
                        <div class="subtitulo">
                            <p class="text-truncate">Estado: <?= $archivo->estado_archivo ? '<span style="color: green;">APROBADO</span>' : '<span style="color: red;">SIN APROBAR</span>' ?></p>
                        </div>
                    </div>
                </a>
                <div class="acciones mt-2">
                    <div class="rate">
                        <?php for ($i = 5; $i >= 1; $i--) {
                                if ($i <= $archivo->valoracion) { ?>
                                <label title="rate" style="color: #ffc700;">stars</label>
                            <?php } else { ?>
                                <label title="rate" style="color: #ccc;">stars</label>
                        <?php }
                            } ?>
                    </div>
                    <br><br>
                    <a href="<?= base_url('archivo') ?>/download/<?= $archivo->id_archivo ?>/<?= $categoria->nombre ?>/<?= $subcategoria->nombre ?>/<?= $archivo->archivo ?>">
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
    </div>
</div>
<script src="<?= base_url() ?>libs/upload/dist/js/jquery.dm-uploader.min.js"></script>
<script src="<?= base_url() ?>libs/upload/demo-ui.js"></script>
<script src="<?= base_url() ?>libs/upload/demo-config.js"></script>
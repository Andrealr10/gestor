<link rel="stylesheet" href="<?= base_url(); ?>libs/css/contenido.css">
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/notificaciones.css">
<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <li class="active" id="ruta">
                <i onclick="loadSubcategorias('<?= $categoria->nombre ?>')" class="fa fa-arrow-circle-left" style="font-size: 20px; margin-right: 10px;"></i>
                <a onclick="loadCategorias()">SUDOCS / Categorias /</a>
                <a onclick="loadSubcategorias('<?= $categoria->nombre ?>')"><?= $categoria->nombre ?> /</a>
                <a><?= $subcategoria->nombre ?> </a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 text-center">
        <h2 class="text-center"><i class="fas fa-folder" style="font-size:25px; margin: o auto;"></i>&nbsp&nbspArchivos</h2><br>
        <button class="nav-pills mb-3" onclick="loadArchivos('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><a class="nav-link active">Todos &nbsp<i class="fas fa-list"></i></a></button>
        <button class="nav-pills mb-3" onclick="loadArchivosPendientes('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><a class="nav-link active">Pendientes &nbsp<i class="fas fa-exclamation-circle"></i></a></button>
        <button class="nav-pills mb-3" onclick="cancelados('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><a class="nav-link active">Cancelados &nbsp<i class="fas fa-times-circle"></a></i></button>
        <button class="nav-pills mb-3" onclick="subir('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><a class="nav-link active">Mis Archivos &nbsp<i class="fas fa-folder-open"></a></i></button>
    </div>
</div>
<br>
<div class="row">
    <?php if (sizeof($archivos) > 0) {
        foreach ($archivos as $archivo) { ?>
            <div class="tarjeta">
                <button class="vistaPrevia" data-toggle="modal" data-target="#valora<?= $archivo->id_archivo ?>"><i class="fas fa-ellipsis-v  fa-lg"></i></button>
                <a target="blank" href="https://docs.google.com/viewer?url=<?= base_url() ?>home/files/<?= $categoria->nombre ?>/<?= $subcategoria->nombre ?>/<?= $archivo->archivo ?>">
                    <img width="100px" src="<?= base_url() . '/' . $archivo->icono ?>">
                    <div class="titulo">
                        <h2 class="text-truncate"><?= $archivo->archivo ?></h2>
                        <hr>
                        <div class="subtitulo"> </div>
                        <div class="subtitulo">Descargas: <?= $archivo->descargas ?></div>
                        <div class="subtitulo">Fecha subido: <?= $archivo->fecha ?></div>
                        <div class="subtitulo">Tamaño: <?= ($archivo->tamanio / 1024) > 1024 ? round((($archivo->tamanio / 1024) / 1024), 2) . ' MB' : round(($archivo->tamanio / 1024), 2) . ' KB'  ?></div>
                        <div class="subtitulo">
                            <p class="text-truncate">Autor: <?= $archivo->nombre ?> <?= $archivo->apellido ?></p>
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
            <div class="modal fade" id="valora<?= $archivo->id_archivo ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Opciones de archivo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h6 class="text-truncate"><?= $archivo->archivo ?></h6>
                            <form id="form<?= $archivo->id_archivo ?>">
                                <div class="rate">
                                    <input type="radio" id="star5<?= $archivo->id_archivo ?>" name="rate" value="5" />
                                    <label for="star5<?= $archivo->id_archivo ?>" title="5 Star">5 stars</label>
                                    <input type="radio" id="star4<?= $archivo->id_archivo ?>" name="rate" value="4" />
                                    <label for="star4<?= $archivo->id_archivo ?>" title="4 Star">4 stars</label>
                                    <input type="radio" id="star3<?= $archivo->id_archivo ?>" name="rate" value="3" />
                                    <label for="star3<?= $archivo->id_archivo ?>" title="3 Star">3 stars</label>
                                    <input type="radio" id="star2<?= $archivo->id_archivo ?>" name="rate" value="2" />
                                    <label for="star2<?= $archivo->id_archivo ?>" title="2 Star">2 stars</label>
                                    <input type="radio" id="star1<?= $archivo->id_archivo ?>" name="rate" value="1" />
                                    <label for="star1<?= $archivo->id_archivo ?>" title="1 Star">1 star</label>
                                    <label hidden> </label>
                                </div>

                                <!-- <input type="text" name="comentario" id="comentario"> -->
                                <input type="text" name="id_usuario" id="id_usuario" value="1" hidden>
                                <input type="text" name="id_archivo" id="id_archivo" value="<?= $archivo->id_archivo ?>" hidden>
                                <button type="button" class="btn btn-success" onclick="valorar('<?= $archivo->id_archivo ?>')" data-dismiss="modal">Valorar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        } else { ?>
        <div class="alert alert-info col-md-12" role="alert">
            Esta subcategoria no posee archivos disponibles.
        </div>
    <?php } ?>

    <script src="<?= base_url() ?>libs/js/valoraciones.js"></script>


</div>
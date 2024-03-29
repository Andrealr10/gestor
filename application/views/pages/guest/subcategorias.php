<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <li class="active" id="ruta">
                <i onclick="loadCategorias()" class="fa fa-arrow-circle-left" style="font-size: 20px; margin-right: 10px;"></i>
                <a onclick="loadCategorias()">SUDOCS / Categorias /</a>
                <a><?= $categoria ?> </a>
            </li>
        </ol>
    </div>
</div>
<div class="row">

    <?php
    if (sizeof($subcategorias) > 0) {
        foreach ($subcategorias as $subcategoria) { ?>

            <div class="col-sm-3" style="margin: 2.5%;">
                <!-- Widget: user widget style 2 -->
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header" style="background: #086d8b !important; sscolor: #fff !important;">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="<?= base_url() ?>home/images/subcategorias/carpeta.png " alt="User Avatar">
                        </div>
                        <h3 class="widget-user-username text-white"><?= $subcategoria->nombre ?></h3>
                        <h5 class="widget-user-desc text-white"><?= $categoria ?></h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="loadArchivos('<?= $categoria ?>','<?= $subcategoria->nombre ?>')">Ver contenido
                                    <span class="float-right badge bg-primary"><?= $subcategoria->cantidad ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#share<?= $subcategoria->id_subcategoria ?>">
                                    Compartir <span class="float-right badge bg-info"><i class="fas fa-user-friends"></i></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('zip') ?>/dir/<?= $categoria ?>/<?= $subcategoria->nombre ?>" class="nav-link">
                                    Descargar <span class="float-right badge bg-success"><i class="fas fa-download"></i></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="modal fade" id="share<?= $subcategoria->id_subcategoria ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Compartir Carpeta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h6><?= $subcategoria->nombre . '_' . $categoria . '.zip' ?></h6>
                                <img src="<?= base_url('QR_gen') . '/generar/' . $categoria . '/' . $subcategoria->nombre ?>" alt="" style="height: 100%; width: 100%">
                                <br>
                                <label for="shared">Copiar enlace de descarga</label>
                                <input type="text" name="shared" id="shared<?= $subcategoria->id_subcategoria ?>" value="<?= base_url('zip') ?>/dir/<?= $categoria ?>/<?= $subcategoria->nombre ?>">
                                <button onclick="copiar(<?= $subcategoria->id_subcategoria ?>)" class="btn btn-outline-secondary btn-sm">Copiar</button>
                                <label for="algo" id="copiado<?= $subcategoria->id_subcategoria ?>" class="text-success"></label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        } else { ?>
        <div class="alert alert-info col-md-12" role="alert">
            Esta categoria no posee Subcategorías.
        </div>
    <?php } ?>
</div>
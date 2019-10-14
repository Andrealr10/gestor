<div class="row">
    <?php foreach ($subcategorias as $subcategoria) { ?>

        <div class="col-sm-3" style="margin: 2.5%;">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-sub">
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="<?= base_url() ?>home/images/subcategorias/carpeta.png " alt="User Avatar">
                    </div>
                    <h3 class="widget-user-username"><?= $subcategoria->nombre ?></h3>
                    <h5 class="widget-user-desc"><?= $categoria ?></h5>
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
                            <img src="<?= base_url('qr_gen') . '/generar/' . $categoria . '/' . $subcategoria->nombre ?>" alt="" style="height: 100%; width: 100%">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
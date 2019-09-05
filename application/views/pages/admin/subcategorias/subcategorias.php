<?php foreach ($subcategorias as $subcategoria) { ?>
    <div class="col-sm-6 col-lg-4 mt-5 ">
        <div class="frame">
            <div class="center">
                <div class="card">
                    <div class="left">
                        <div class="avatar">
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <img src="<?= base_url() . '/' . $subcategoria->imagen ?>">
                        </div>
                        <div class="info">
                            <span class="big"><?= $subcategoria->nombre ?></span><span class="small"><?= $categoria ?></span>
                        </div>
                        <div class="botons">
                            <button class="flw boton"><a class="link" href="<?= base_url('archivo') ?>/index/<?= $id_categoria ?>/<?= $subcategoria->id_subcategoria ?>">Ver Contenido</a></button>
                        </div>
                    </div>
                    <div class="right">
                        <div class="stats posts">
                            <span class="big"><?= $subcategoria->cantidad ?></span><span class="small">Archivos</span>
                        </div>
                        <div data-toggle="modal" data-target="#share<?= $subcategoria->id_subcategoria ?>" class="stats likes" style="background-color:rgb(66, 66, 66);" onmouseover="this.style.backgroundColor='gray'" onmouseout="this.style.backgroundColor='rgb(66, 66, 66)'">
                            <span class="big"><i class="fas fa-user-friends"></i></span><span class="small">Compartir</span>
                        </div>
                        <div class="stats flwrs">
                            <a href="<?= base_url('zip') ?>/dir/<?= $categoria ?>/<?= $subcategoria->nombre ?>">
                                <span class="big"><i class="fas fa-cloud-download-alt"></i></span><span class="small">Descargar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
<?php } ?>
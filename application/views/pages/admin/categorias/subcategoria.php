<?php if (sizeof($subcategorias) > 0) { ?>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-left">Subcategor&iacute;as</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($subcategorias as $subcategoria) { ?>
                    <tr>
                        <td class="text-left d-flex align-items-center"><a href="#" onclick="loadArchivos('<?= $categoria ?>','<?= $subcategoria->nombre ?>')"><img src="<?= base_url() . $subcategoria->imagen ?>" style="width: 35px; height: 35px;"> <?= $subcategoria->nombre ?></a></td>
                        <td style="width: 250px">
                            <button class="btn btn-info btn-md"><a href="<?= base_url('zip') ?>/dir/<?= $categoria ?>/<?= $subcategoria->nombre ?>">
                                    <i class="fas fa-download"></i></a></button>
                            <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#share<?= $subcategoria->id_subcategoria ?>"><i class="fas fa-share"></i></button>
                            <!-- <button class="btn btn-danger btn-md"><i class="fas fa-file-upload"></i></button>
                            <button class="btn btn-primary btn-md"><i class="fas fa-folder-open"></i></button> -->
                        </td>
                    </tr>
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
            </tbody>
        </table>
    </div>
<?php } else { ?>
    <div class="alert alert-danger" role="alert">
        Esta categoria no posee Subcategorías.
    </div>
<?php } ?>
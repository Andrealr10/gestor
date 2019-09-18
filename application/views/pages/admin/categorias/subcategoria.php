<?php if (sizeof($subcategorias) > 0) { ?>
    <div class="">
        <table class="table">
            <h5>Subcategorías</h5>
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col" >Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                <?php foreach ($subcategorias as $subcategoria) { ?>
                    <tr>
                        <td class="text-left d-flex align-items-center"><img src="<?= base_url() . $subcategoria->imagen ?>" style="width: 35px; height: 35px;"> <?= $subcategoria->nombre ?></td>
                        <td style="width: 250px">
                            <button class="btn btn-info btn-md"><i class="fas fa-download"></i></button>
                            <button class="btn btn-warning btn-md"><a href="<?= base_url('zip') ?>/dir/<?= $categoria ?>/<?= $subcategoria->nombre ?>">
                            <i class="fas fa-share"></i></a></button>
                            <button class="btn btn-danger btn-md"><i class="fas fa-file-upload"></i></button>
                            <button class="btn btn-primary btn-md"><i class="fas fa-folder-open"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } else { ?>
    <div class="alert alert-danger" role="alert">
        Esta categoria no posee Subcategorías.
    </div>
<?php } ?>
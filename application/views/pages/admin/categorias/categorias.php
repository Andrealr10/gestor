<?php foreach ($categorias as $categoria) { ?>
    <div class="card">
        <div class="card-header" id="heading<?= $categoria->nombre ?>">
            <!--header-->
            <h5 class="mb-0">
                <button class="btn btn-editar"><i class="fas fa-edit"></i></button>
                <button onclick="loadsubs('<?= $categoria->nombre ?>')" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#collapse<?= $categoria->nombre ?>" aria-expanded="true" aria-controls="collapse<?= $categoria->nombre ?>">
                    <?= $categoria->nombre ?>
                </button>
            </h5>
        </div>
        <!--header-->
        <div id="collapse<?= $categoria->nombre ?>" class="collapse" aria-labelledby="heading<?= $categoria->nombre ?>" data-parent="#accordion">
            <!--cuerpo-->
            <!-- <input type="text" value="<?= $categoria->nombre ?>" hidden> -->
            <div class="card-body text-center">
                <form id="form<?= $categoria->nombre ?>">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span style="position:relative;" class="input-group-text" id="basic-addon1"><i class="fas fa-pen"></i></span>
                                </div>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre de la subcategoria" aria-label="nombre" aria-describedby="basic-addon1">
                                <input type="text" name="categoria" id="categoria" hidden value="<?= $categoria->id_categoria ?>">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" onclick="crearsub('<?= $categoria->nombre ?>')" class="btn btn-success">Crear</button>
                        </div>
                    </div>
                </form>
<br>

                <div id="<?= $categoria->nombre ?>">
                    <!-- Aqui va la tabla con el form para agregar las subcategorias -->
                </div>

            </div>
        </div>
        <!--cuerpo-->
    </div>
<?php } ?>
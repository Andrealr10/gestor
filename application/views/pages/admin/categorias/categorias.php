<?php foreach ($categorias as $categoria) { ?>
    <div class="card mb-0">
        <div class="card-header" id="heading<?= $categoria->nombre ?>">
            <!--header-->
            <!-- <button class="btn-editar"><i class="fas fa-edit"></i></button> -->
         
            <button style="text-transform: uppercase;" onclick="loadsubs('<?= $categoria->nombre ?>')" class="btn btn-block text-left btn-outline-info" data-toggle="collapse" data-target="#collapse<?= $categoria->nombre ?>" aria-expanded="true" aria-controls="collapse<?= $categoria->nombre ?>">
            <i class="fas fa-laptop p-1 "></i> <?= $categoria->nombre ?>
            </button>
        </div>
        <!--header-->
        <div id="collapse<?= $categoria->nombre ?>" class="collapse" aria-labelledby="heading<?= $categoria->nombre ?>" data-parent="#accordion">
            <!--cuerpo-->
            <!-- <input type="text" value="<?= $categoria->nombre ?>" hidden> -->
            <div class="card-body text-center">
                <div id="id<?= $categoria->nombre ?>">
                    <!-- Aqui va la tabla sin el form para agregar las subcategorias -->
                </div>
                <br>
                <div class="pt-3 pb-3 pl-3 pr-3">
                    <h4>Agregar Subcategoria</h4>
                    <form id="form<?= $categoria->nombre ?>">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span style="position:relative;" class="input-group-text" id="basic-addon1"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="nombre" id="categ" placeholder="Nombre de subcategoria" aria-label="nombre" aria-describedby="basic-addon1">
                                    <input type="text" name="categoria" id="categoria" hidden value="<?= $categoria->id_categoria ?>">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button type="button" onclick="crearsub('<?= $categoria->nombre ?>')" class="btn btn-info">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
            </div>
        </div>
        <!--cuerpo-->
    </div>
<?php } ?>
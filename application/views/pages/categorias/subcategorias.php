<h2>Sub-Categorias de <?=$nombre?></h2>
<br>
<ul class="nav nav-pills mb-3" id="tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="listsub-tab" data-toggle="pill" href="#listsub" role="tab" aria-controls="listsub" aria-selected="true">Lista</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="addsub-tab" data-toggle="pill" href="#addsub" role="tab" aria-controls="addsub" aria-selected="false">Agregar</a>
    </li>
</ul>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-content" id="pills-tabContent2">
        <div class="tab-pane fade show active" id="listsub" role="tabpanel" aria-labelledby="listsub-tab">
            <div class="tab-pane" id="listsub-1" role="tabpanel" aria-labelledby="listsub-1-list">
                <div id="listasub">
                    <?php
                    $flag = true;
                    foreach ($subcategorias as $categoria) {
                        $flag = false;
                        echo $categoria->nombre . '  <img src="' . $categoria->imagen . '" alt="No se encontro la imagen" style="height: 100px; width: 100px"><br><br>';
                    }
                    if ($flag) { ?>
                    <div class=" alert alert-primary" role="alert">
                        No hay subcategorias disponibles en esta carpeta.
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="addsub" role="tabpanel" aria-labelledby="addsub-tab">
            <div class="tab-pane" id="listsub-2" role="tabpanel" aria-labelledby="listsub-2-list">
                <div id="addsub">
                    <form enctype="multipart/form-data" id="frmsub">
                        <label for="nombre">Nombre de la SubCategoria</label><br>
                        <input type="text" name="nombre" id="nombre"><br>
                        <input type="text" name="categoria" id="categoria" hidden value="<?= $id ?>">
                        <br>
                        <button type="button" id="addsubcategoria" onclick="addsubcat()">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
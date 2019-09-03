<?php foreach ($categorias as $categoria) { ?>
    <a class="link" href="<?= base_url('subcategoria') ?>/index/<?= $categoria->id_categoria ?>/">
        <div class="card">
            <div class="card-img-container"><img src="<?= $categoria->imagen ?>" alt="" style="height: 200px; width: 300px"></div>
            <!--por defecto, el div genera imagenes, eso se puede cambiar si se desea-->
            <div class="card-text-container">
                <h2 class="card-title"><?= $categoria->nombre ?> </i></h2>
                <p class="card-body"><?= $categoria->descripcion ?></p>
            </div>
            <div class="card-link-container">

            </div>
        </div>
    </a>
<?php } ?>
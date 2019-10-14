<div class="row">
    <?php foreach ($categorias as $categoria) { ?>
        <!-- <div class="col-sm-3">
            <a class="link" href="<?= base_url('subcategoria') ?>/load/<?= $categoria->nombre ?>/">
                <div class="card">
                    <div class="card-img-container"><img src="<?= $categoria->imagen ?>" alt="" style="height: 200px; width: 300px"></div>
                    por defecto, el div genera imagenes, eso se puede cambiar si se desea
                    <div class="card-text-container">
                        <h2 class="card-title"><?= $categoria->nombre ?> </i></h2>
                        <p class="card-body"><?= $categoria->descripcion ?></p>
                    </div>
                    <div class="card-link-container">

                    </div>
                </div>
            </a>
        </div> -->

        <div class="col-12 col-sm-6 col-md-3">

            <div class="info-box " onclick="loadSubcategorias('<?= $categoria->nombre ?>')">
                <span class="info-box-icon elevation-1"><img src="<?= $categoria->imagen ?>" alt="IMG"></span>

                <div class="info-box-content">
                    <p> </p>
                    <span class="info-box-text"><?= $categoria->nombre ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    <?php } ?>
    
    
</div>
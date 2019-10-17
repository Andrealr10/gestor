<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <i class="fa fa-home" style="font-size: 20px; margin-right: 15px;"></i>
            <li class="active" id="ruta">SUDOCS / Categorias</li>
        </ol>
    </div>
</div>
<div class="row">
    <?php foreach ($categorias as $categoria) { ?>
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

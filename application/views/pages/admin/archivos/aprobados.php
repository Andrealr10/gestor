<div class="row">
    <?php foreach ($archivos as $archivo) { ?>
        <div class="col-12 col-sm-6 col-md-3">

            <div class="info-box " onclick="loadSub('<?= $categoria->nombre ?>')">
                <span class="info-box-icon elevation-1"><img src="<?= $categoria->imagen ?>" alt="IMG"></span>

                <div class="info-box-content bg-info ">
                    <p> </p>
                    <span class="info-box-text"><?= $categoria->nombre ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    <?php } ?>


</div>
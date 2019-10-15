<link rel="stylesheet" href="<?= base_url(); ?>libs/css/cards.css">
<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <i class="fa fa-igloo" style="font-size: 20px; margin-right: 15px;"></i>
            <li class="active" id="ruta">SUDOCS / Categorias</li>
        </ol>
    </div>
</div>
<div class="row">
    <ul class="cards">
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
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="<?= base_url() . $categoria->imagen ?>" style="height: 200px; width: 100%"></div>
                    <div class="card_content">
                        <h3 class="card_title"><?= $categoria->nombre ?></h3>
                        <p class="card_text"><?= $categoria->descripcion ?></p>
                        <!-- <button class="btn card_btn">Read More</button> -->
                        <a onclick="loadSubcategorias('<?= $categoria->nombre ?>')" class="btn card_btn">Ver contenido</a>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
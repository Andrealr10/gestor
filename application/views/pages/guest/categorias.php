<link rel="stylesheet" href="<?= base_url(); ?>libs/css/cards.css">
<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <i class="fa fa-home" style="font-size: 20px; margin-right: 15px;"></i>
            <li class="active" id="ruta">SUDOCS / Categorias</li>
        </ol>
    </div>
</div>
<div class="row">
    <ul class="cards">
        <?php foreach ($categorias as $categoria) { ?>
                     <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="<?= base_url() . $categoria->imagen ?>" style="height: 200px; width: 100%"></div>
                    <div class="card_content">
                        <h3 class="card_title"><?= $categoria->nombre ?></h3>
                        <p class="card_text"><?= $categoria->descripcion ?></p>
                        <!-- <button class="btn card_btn">Read More</button> -->
                        <a onclick="loadSubcategorias('<?= $categoria->nombre ?>')" class="btn btnn card_btn">Ver contenido</a>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/cards.css">


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
                    <div class="card_image"><img src="<?= $categoria->imagen ?>" style="height: 200px; width: 100%"></div>
                    <div class="card_content">
                        <h2 class="card_title"><?= $categoria->nombre ?></h2>
                        <p class="card_text"><?= $categoria->descripcion ?></p>
                        <!-- <button class="btn card_btn">Read More</button> -->
                        <a class="btn card_btn" onclick="loadSub('<?= $categoria->nombre ?>')">Ver contenido</a>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
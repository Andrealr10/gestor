<?php foreach ($subcategorias as $subcategoria) { ?>
    <li class="nav-item">
        <a onclick="loadAr('<?= $categoria ?>','<?= $subcategoria->nombre ?>')" class="nav-link">
            <i class="far arrow-right nav-icon"></i>
            <p><?= $subcategoria->nombre ?></p>
        </a>
    </li>
<?php } ?>
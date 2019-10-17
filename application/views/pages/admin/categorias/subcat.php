<?php foreach ($subcategorias as $subcategoria) { ?>
    <li class="nav-item">
        <a onclick="loadArchivos('<?= $categoria ?>','<?= $subcategoria->nombre ?>')" class="nav-link">
            <i class="far arrow-circle nav-icon"></i>
            <p><?= $subcategoria->nombre ?></p>
        </a>
    </li>
<?php } ?>
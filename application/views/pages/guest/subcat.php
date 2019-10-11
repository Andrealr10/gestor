<?php foreach ($subcategorias as $subcategoria) { ?>
    <li class="nav-item">
        <a class="nav-link">
            <i class="nav-icon"></i>
            <p><?= $subcategoria->nombre ?></p>
        </a>
    </li>
<?php } ?>
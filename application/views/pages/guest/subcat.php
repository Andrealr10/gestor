<?php foreach ($subcategorias as $subcategoria) { ?>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="far fa-dot-circle nav-icon"></i>
            <p><?= $subcategoria->nombre ?></p>
        </a>
    </li>
<?php } ?>
<?php
$flag = true;
foreach ($subcategorias as $categoria) {
    $flag = false;
    echo $categoria->nombre . '  <img src="' . $categoria->imagen . '" alt="No se encontro la imagen" style="height: 100px; width: 100px"><br><br>';
}
if ($flag) { ?>
<div class=" alert alert-primary" role="alert">
    No hay subcategorias disponibles en esta carpeta.
</div>
<?php } ?>
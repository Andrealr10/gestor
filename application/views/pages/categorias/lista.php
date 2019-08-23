<?php
$flag = true;
foreach ($categorias as $categoria) :
    $flag = false;
    ?>
<a class="list-group-item list-group-item-action"  onclick="subcategorias(<?php echo $categoria->id_categoria; ?>)"><?php echo $categoria->nombre . '  <img src="' . $categoria->imagen . '" alt="No se encontro la imagen" style="height: 100px; width: 100px">'; ?>
</a>
<?php endforeach;
if ($flag) { ?>
<div class=" alert alert-primary" role="alert">
    No hay categorias disponibles en esta opcion.
</div>
<?php } ?>
<br>
<?php
$flag = true;
foreach ($categorias as $categoria) :
    $flag = false;
    ?>
<a class="list-group-item list-group-item-action" onclick="subcategorias(<?php echo $categoria->id_categoria; ?>)"><?php echo $categoria->nombre . '  <img src="' . $categoria->imagen . '" alt="No se encontro la imagen" style="height: 100px; width: 100px">'; ?>

</a>
<?php endforeach;
if ($flag) { ?>
<div class=" alert alert-primary" role="alert">
    No hay categorias disponibles en esta opcion.
    </div>
    <?php } ?>
    <br>

    <!-- <div class="list-group" id="list-tab" role="tablist">
        <?php foreach ($datos['sucursales'] as $sucursal) :  ?>
        <a class="list-group-item list-group-item-action" id="list-1-list" data-toggle="list" href="#list-1" role="tab" aria-controls="1" onclick="cargarCategoria(<?php echo $sucursal->id_sucursal; ?>)">
            <?php echo $sucursal->nombre; ?></a>
        <?php endforeach; ?>
    </div> -->
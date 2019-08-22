<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subcategorias</title>
</head>

<body>

    <form action="<?= base_url('subcategoria') ?>/crear" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre de la SubCategoria</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <input type="file" name="imagen" id="imagen"><br>
        <select name="categoria" id="categoria">
            <?php foreach ($categorias as $categoria) { ?>
                
                <option value="<?=$categoria->id_categoria?>"><?= $categoria->nombre ?></option>
            <?php }
            echo $nombre;
            ?>
            
        </select>
        <br>
        <input type="submit" value="Crear">
    </form>
    <br>

    <?php
    foreach ($subcategorias as $categoria) {
        echo $categoria->nombre . '  <img src="' . $categoria->imagen . '" alt="No se encontro la imagen" style="height: 100px; width: 100px"><br><br>';
    }

    ?>
</body>

</html>
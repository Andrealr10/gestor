<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Algo :v</title>
</head>

<body>

    <form action="<?= base_url('categoria') ?>/crear" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre de la Categoria</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea><br>
        <input type="file" name="imagen" id="imagen">

        <input type="submit" value="Crear">
    </form>
    <br>
    
    <?php
    foreach ($categorias as $categoria) {
        echo $categoria->nombre .'  <img src="'.$categoria->imagen.'" alt="No se encontro la imagen" style="height: 100px; width: 100px"><br><br>';
    }

    ?>
</body>

</html>
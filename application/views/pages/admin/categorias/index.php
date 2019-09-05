<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/categoria.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/categoria.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid content-container filter-container">
        <div class="row">
            <div class="col-sm-2">
                <div id="add">
                    <form id="form" enctype="multipart/form-data">
                        <label for="nombre">Nombre de la Categoria</label><br>
                        <input type="text" name="nombre" id="nombre"><br>
                        <label for="descripcion">Descripcion de la Categoria</label><br>
                        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea><br>


                        <label for="imagen">Imagen de la Categoria</label><br>
                        <input type="file" name="imagen" accept=".png,.jpg,.jpeg" id="imagen"><br>
                        <label for="algo">Foto:</label>
                        <img src="" id="algo" alt="Sin Imagen" style="width: 200px; height: 200px">
                        <br><br>
                        <button id="crear" type="button">Crear</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-10 text-center filtered-cards">
                <div id="card-placeholder">
                    <div id="cards"></div>

                </div>

            </div>
        </div>
    </div>
    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/categorias.js"></script>

    <script>
        $(document).on('change', 'input[type=file]', function(e) {
            var fileName = document.getElementById("imagen").value;
            var idxDot = fileName.lastIndexOf(".") + 1;
            var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
            if (extFile == "jpg" || extFile == "jpeg" || extFile == "png") {
                var TmpPath = URL.createObjectURL(e.target.files[0]);
                $('#algo').attr('src', TmpPath);
            } 
        });
    </script>
</body>

</html>
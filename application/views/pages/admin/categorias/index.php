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
            <div class="col-sm-11 text-center filtered-cards">
                <div id="card-placeholder">
                    <div id="cards"></div>
                    
                </div>
            </div>
            <div class="col-sm-1">
                <!-- Botón que despliega el modal -->
                <a class="botton circle" style="color:white;" data-toggle="modal" data-target="#modelId">Crear <i class="fas fa-plus-square fa-lg"></i></a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nueva Categoría</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div id="add">
                            <form id="form" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Título de la categoría" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-bookmark"></i></span>
                                    </div>
                                    <textarea name="descripcion" class="form-control" placeholder="Descripción" id="descripcion" cols="30" rows="3" aria-describedby="basic-addon2"></textarea>
                                </div> 
    
                                <input type="file" style="display:none;" name="imagen" accept=".png,.jpg,.jpeg" id="imagen">
                                <input type="button" class="btn btn-primary" value="Cargar imágen" onclick="document.getElementById('imagen').click();"><br>
                                <!-- <label for="algo">Foto:</label> -->
                                <img class="mt-3" src="" id="algo"  style="width: 200px; height: 200px">
                                <br><br>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button id="crear" class="btn btn-danger" data-dismiss="modal" type="button">Crear</button>
                    <button type="button" id="limpiar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>



    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
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
    <script>
        $(document).ready(function() {
            $('#limpiar').click(function() {
                $('input[type="text"]').val('');
                $('textarea').val('');
                jQuery('#algo').attr('src','')
                jQuery('#algo').show();
            });
            $('#crear').click(function() {
                $('input[type="text"]').val('');
                $('textarea').val('');
                jQuery('#algo').attr('src','')
                jQuery('#algo').show();
            });
        });
    </script>
</body>

</html>
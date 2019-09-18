<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/categoria.css">
    <title>Document</title>
</head>

<body>
<div class="container">
   <div class="row">
        <div class="col-md-11">
            <h2 class="text-center"><i class="fas fa-th-list" style="font-size:25px;"></i>&nbsp&nbspCategorías</h2>
            <div id="accordion"> <!--Categoria-->
                <div class="card">
                    <div class="card-header" id="headingOne"> <!--header-->
                    <h5 class="mb-0">
                        <button class="btn btn-editar"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-default" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                PHP
                            </button>
                    </h5>
                </div><!--header-->
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"><!--cuerpo-->
                        <div class="card-body text-center">
                            <table class="table table-sm text-center table-bordered">
                                <h5>Subcategorías</h5>
                                    <thead>
                                    <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">Php</th>
                                    <td>Ejemplos</td>
                                    <td>
                                            <button class="btn btn-info btn-md"><i class="fas fa-download"></i></button>
                                            <button class="btn btn-warning btn-md"><i class="fas fa-share"></i></button>
                                            <button class="btn btn-danger btn-md"><i class="fas fa-file-upload"></i></button>
                                            <button class="btn btn-primary btn-md"><i class="fas fa-folder-open"></i></button>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div><!--cuerpo-->
            </div>
        </div>
     </div>
     <div class="col-md-1 text-start">
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
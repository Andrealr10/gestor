<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/subcategoria.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Subcategorias</title>
</head>

<body>
    <a href="<?= base_url('categoria') ?>" class="buton"><i class="large material-icons">arrow_back</i></a>
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-md-6 col-lg-4 mt-5 ">
                <form id="form">
                    <label for="nombre">Nombre de la SubCategoria</label><br>
                    <input type="text" name="nombre" id="nombre"><br>
                    <input type="text" name="categoria" id="categoria" hidden value="<?= $id_categoria ?>">
                    <br>
                    <button type="button" id="crear">Crear</button>
                </form>
            </div> -->
            
            <div class="col-md-1">
                <!-- Botón que despliega el modal -->
                <a class="botton circle" style="color:white;" data-toggle="modal" href="#subcategoria">Crear <i class="fas fa-plus-square fa-lg"></i></a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="subcategoria" tabindex="-1" role="dialog" aria-labelledby="subcategoriaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Subcategoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span style="position:relative;" aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form id="form">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span style="position:relative;" class="input-group-text" id="basic-addon1"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre de la subcategoria" aria-label="nombre" aria-describedby="basic-addon1">
                                    <input type="text" name="categoria" id="categoria" hidden value="<?= $id_categoria ?>">
                                </div>
                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <!-- <button id="crear" type="button" class="btn btn-secondary" data-dismiss="modal">Crear</button> -->
                            <button type="button" id="crear" class="btn btn-danger" data-dismiss="modal">Crear</button>
                            <button type="button" id="limpiar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php foreach ($subcategorias as $subcategoria) { ?>
                
                
            <div class="col-md-3 mt-5 ">
                <div class="frame">
                    <div class="center">
                        <div class="card">
                            <div class="left">
                                <div class="avatar">
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                    <img src="<?= base_url() . '/' . $subcategoria->imagen ?>">
                                </div>
                                <div class="info">
                                    <span class="big"><?= $subcategoria->nombre ?></span><span class="small"><?= $categoria ?></span>
                                </div>
                                <div class="botons">
                                    <button class="flw boton"><a class="link" href="<?= base_url('archivo') ?>/load/<?= $categoria ?>/<?= $subcategoria->nombre ?>/">Ver Contenido</a></button>
                                </div>
                            </div>
                            <div class="right">
                                <div class="stats posts">
                                    <span class="big"><?= $subcategoria->cantidad ?></span><span class="small">Archivos</span>
                                </div>
                                <div data-toggle="modal" data-target="#share<?= $subcategoria->id_subcategoria ?>" class="stats likes" style="background-color:rgb(66, 66, 66);" onmouseover="this.style.backgroundColor='gray'" onmouseout="this.style.backgroundColor='rgb(66, 66, 66)'">
                                        <span class="big"><i class="fas fa-user-friends"></i></span><span class="small">Compartir</span>
                                    </div>
                                <div class="stats flwrs">
                                    <a href="<?= base_url('zip') ?>/dir/<?= $categoria ?>/<?= $subcategoria->nombre ?>">
                                    <span class="big"><i class="fas fa-cloud-download-alt"></i></span><span class="small">Descargar</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade" id="share<?= $subcategoria->id_subcategoria ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Compartir Carpeta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h6><?= $subcategoria->nombre . '_' . $categoria . '.zip' ?></h6>
                                <img src="<?= base_url('qr_gen') . '/generar/' . $categoria . '/' . $subcategoria->nombre ?>" alt="" style="height: 100%; width: 100%">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/subcategorias.js"></script>
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
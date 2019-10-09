<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">	
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->
    <!--Alertify-->
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/bootstrap.min.css" />

    <!-- 
    RTL version
-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.rtl.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/default.rtl.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/semantic.rtl.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/bootstrap.rtl.min.css" />
    
</head>

<body>
    <div class="container">
        <div class="mx-auto col-sm-11 main-section">
            <h2 class="text-center"><i class="fas fa-users" style="font-size:25px;"></i> Usuarios</h2>
            <ul class="nav nav-tabs justify-content-end">
                <li class="nav-item pesta">
                    <a class="nav-link active bg-fondo" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">List</a>
                </li>
                <li class="nav-item pesta">
                    <a class="nav-link bg-fondo" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Form</a>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                    <!--Lista-->
                    <div class="card text-center">
                        <div class="card-header">
                            <h4 class="text-center">Lista de Usuarios <i class="fas fa-list-alt" style="font-size:20px;"></i></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="lista" class="table table-bordered table-hover table-striped" style="background:rgb(228, 226, 226);">
                                    <thead class="thead text-center">
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center" id="cuerpo">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Lista-->
                <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
                    <!--Formulario-->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-dark">Nuevo Usuario <i class="fas fa-user-plus" style="font-size:20px;"></i></h4>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formu">
                                <div class="form-group justify-content-center row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-user"></i></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre">
                                    </div>
                                </div>
                                <div class="form-group justify-content-center row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-user"></i></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" placeholder="Apellido" name="apellido" id="apellido">
                                    </div>
                                </div>
                                <div class="form-group justify-content-center row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-user"></i></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" placeholder="Username" name="username" id="username">
                                    </div>
                                </div>
                                <div class="form-group justify-content-center row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-lock"></i></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="mail" placeholder="correo@ejemplo.com" name="correo" id="correo">
                                    </div>
                                </div>
                                <div class="form-group justify-content-center row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-lock"></i></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="password" placeholder="Contraseña" name="password" id="password">
                                    </div>
                                </div>
                                <div class="form-group justify-content-center row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-user"></i></label>
                                    <div class="col-lg-6">
                                        <select class="custom-select my-1 mr-sm-2" name="tipo" id="tipo">
                                            <option selected>Tipo</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group justify-content-center row">
                                    <div class="col-lg-12 text-center">
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-primary" id="agregar" onclick="insertar()">Guardar</button>
                                            <button type="button" class="btn btn-danger" onclick="cancelar()">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Formulario-->
            </div>
            <!--Contenido Pestañas-->
        </div>
        <!--Div principal-->
        <!--Modal para editar-->
        <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Actualizar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formua">
                            <input type="hidden" name="id_usuario" id="id_usuario">
                            <input type="text" placeholder="Nombre" class="form-control mt-2" id="nombrea" name="nombre">
                            <input type="text" placeholder="Apellido" class="form-control mt-2" id="apellidoa" name="apellido">
                            <input type="text" placeholder="Username" class="form-control mt-2" id="usernamea" name="username">
                            <input type="mail" placeholder="corrreo@ejemplo.com" class="form-control mt-2" id="correoa" name="correo">
                            <!-- <input type="password" placeholder="Contraseña" class="form-control mt-2" id="passworda" name="password"> -->
                            <select class="custom-select my-1 mr-sm-2" name="tipo" id="tipoa">
                                <option selected>Tipo</option>
                                <option value="1">Administrador</option>
                                <option value="2">User</option>
                            </select>
                            <select class="custom-select my-1 mr-sm-2" name="estado" id="estadoa">
                                <option selected>Estado</option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id='aniadir_cancion' data-dismiss="modal" onclick="actualizar()">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?= base_url(); ?>libs/js/main.js"></script>
<script>
    $('#ruta').html('Panel de Control / Usuarios')
</script>

</html>
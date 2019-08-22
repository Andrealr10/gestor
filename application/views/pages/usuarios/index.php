<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Gestor</title>
</head>

<body>
    <div class="container">
        <div class="mx-auto col-sm-9 main-section" id="myTab" role="tablist">
            <h2 class="text-center"><i class="fas fa-users"></i> Usuarios</h2>
            <ul class="nav nav-tabs justify-content-end">
                <li class="nav-item pesta">
                    <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">List</a>
                </li>
                <li class="nav-item pesta">
                    <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Form</a>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                    <div class="card">
                        <div class="card-header">
                            <h4>Lista de Usuarios</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="lista" class="table table-bordered table-hover table-striped">
                                    <thead class="thead-light text-center">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Username</th>
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
                <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
                    <div class="card">
                        <div class="card-header">
                            <h4>Nuevo Usuario</h4>
                        </div>
                        <div class="card-body formu col-lg-12 text-center">
                            <form class="form" role="form" autocomplete="off" id="formu">
                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-user"></i></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-user"></i></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" placeholder="Apellido" name="apellido" id="apellido">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-user"></i></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" placeholder="Username" name="username" id="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-lock"></i></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="password" placeholder="Contraseña" name="password" id="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-user"></i></label>
                                    <div class="col-lg-6">
                                        <select class="custom-select my-1 mr-sm-2" name="tipo" id="tipo">
                                            <option selected>Tipo</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12 text-center">
                                        <div class="col-lg-6">
                                            <button type="button" class="btn btn-primary" id="agregar" onclick="insertar()">Guardar</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="button" class="btn btn-danger" onclick="cancelar()">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
<script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>libs/js/main.js"></script>
<script src="./assets/js/main.js"></script>

</html>
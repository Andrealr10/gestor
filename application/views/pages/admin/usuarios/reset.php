<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cambio de contrase&ntilde;a</title>
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/reset.css">
</head>

<body>
    <div class="container"><br><br>

        <form id="form" class="justify-content-center">
        <h1 class="text-center display-4">Cambio de Contrase&ntilde;a.</h1>
        <h3 class="text-center">Usuario: <?= $usuario->username ?></h3>
            <br><br>


            <div class="input-group col-lg-6 ml-auto mr-auto  mb-4 ">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input class="form-control" type="password" placeholder="Contraseña" name="password" id="password">
                <input class="form-control" type="text" name="id_usuario" id="id_usuario" hidden value="<?= $usuario->id_usuario ?>">
                <input class="form-control" type="text" name="username" id="username" hidden value="<?= $usuario->username ?>">
            </div>

            <div class="input-group col-lg-6 ml-auto mr-auto  mb-4 ">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input class="form-control" type="password" placeholder="Confirmar" name="password2" id="password2">
            </div>

            <div class="col-md-6 m-auto">
                <button type="button" id="reset" class="btn btn-block btn-info">Cambiar</button>
            </div>
        </form>
    </div>
    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>libs/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>libs/js/login.js"></script>

</body>

</html>
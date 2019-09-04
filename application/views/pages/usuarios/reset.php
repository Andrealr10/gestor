<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cambio de contraseña</title>
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
</head>

<body>
    <div class="container">

        <form id="form" class="justify-content-center">
            <h1>Cambio de contraseña para el usuario: <?= $usuario->username ?></h1>
            <div class="form-group justify-content-center row">
                <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-lock"></i></label>
                <div class="col-lg-6">
                    <input class="form-control" type="password" placeholder="Contraseña" name="password" id="password">
                    <input class="form-control" type="text" name="id_usuario" id="id_usuario" hidden value="<?= $usuario->id_usuario ?>">
                    <input class="form-control" type="text" name="username" id="username" hidden value="<?= $usuario->username ?>">
                </div>
            </div>
            <div class="form-group justify-content-center row">
                <label class="col-lg-1 col-form-label form-control-label"><i class="fas fa-lock"></i></label>
                <div class="col-lg-6">
                    <input class="form-control" type="password" placeholder="Confirmar" name="password2" id="password2">
                </div>
            </div>
            <button type="button" id="reset">Cambiar</button>
        </form>
    </div>
    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <script>
        $('#reset').on('click', function() {
            form = new FormData(document.getElementById("form"));
            $.ajax({
                type: 'POST',
                url: 'http://localhost/gestor/usuario/cambiar',
                data: form,
                processData: false,
                contentType: false,
                success: function(result) {
                    console.log(result);
                    window.location.href='http://localhost/gestor';
                }
            });
        })
    </script>
</body>

</html>
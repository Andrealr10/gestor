<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ----------------------------------Pezonalizado-------------------------------- -->
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/login.css">
    <!-- -----------------------------------Bootstrap---------------------------------- -->
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <!-- ----------------------------------FontAwesome--------------------------------- -->
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
    <title>SUDOCS</title>
</head>

<body class="">
    <div class="container-fluid">
        <div class="title-box">
            <!-- <h1 class="display-4 text-center font-weight-bold">Cloudcat <i class="fas fa-cat"></i> </h1> -->
            <a class="navbar-brand border border-light" href="#"><h3 class="m-auto pl-2 pr-2"><i class="fas fa-copy"></i>&nbsp&nbsp SUDOCS</h3></a>
        </div>
        <!--title-box-->
        <div class="form-wrap">
            <div class="tabs">
                <div class=" ">
                    <h3 class="signup-tab "><a class="text-dark text-decoration-none " href="#signup-tab-content">Reg&iacute;strate ahora</a></h3>
                </div>
                <div class="">
                    <h3 class="login-tab  "><a class="active text-dark text-decoration-none " href="#login-tab-content">Ya tengo una cuenta</a></h3>
                </div>
            </div>
            <!--.tabs-->

            <!-- Contenedor de formularios -->
            <div class="tabs-content ">
                <div id="signup-tab-content" class="">
                    <form class="signup-form" method="POST" id="reg">
                        <div class="form-group">
                            <input type="text" class=" form-control" name="nombre" id="name" autocomplete="off" placeholder="Nombre" required>
                            <input type="text" class=" form-control" name="apellido" id="lastname" autocomplete="off" placeholder="Apellido" required>
                            <input type="text" class=" form-control" name="username" id="username" autocomplete="off" placeholder="Nombre de usuario" required>
                            <input type="email" class="form-control" name="correo" id="useremail" autocomplete="off" placeholder="Correo electr&oacute;nico" required>
                            <input type="password" class=" form-control" name="password" id="userpass" autocomplete="off" placeholder="Contrase&ntilde;a" required>
                            <input type="password" class=" form-control" name="password2" id="userpass2" autocomplete="off" placeholder="Confirmar la contrase&ntilde;a">
                        </div>
                        <button class="btn btn-secondary btn-block" id="registrar" type="button">Verificar datos</button>
                        <br><input type="number" class=" form-control" name="codigo" id="codigo" autocomplete="off" placeholder="Confirmar codigo">
                        <button class="btn btn-info btn-block" id="conf" type="button">Registrarme</button>
                    </form>
                    <!--.login-form-->

                    <div class="help-text">
                        <p class="text-light">Al inscribirte aceptas colaborar a la comunidad.</p>
                        <p><a class="text-log" href="#">T&eacute;rminos del servicio.</a></p>
                    </div>
                    <!--.help-text-->
                </div>
                <!--.signup-tab-content-->

                <div id="login-tab-content" class="active">
                    <form class="login-form" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="user" id="user" autocomplete="off" placeholder="Nombre de usuario">
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="pass" id="pass" autocomplete="off" placeholder="Contrase&ntilde;a">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary"><i class=" far fa-eye"></i></button>
                                </div>
                            </div>

                            <br>
                            <button class="btn btn-info btn-block" id="iniciar">Iniciar sesi&oacute;n</button>
                    </form>
                    <!--.login-form-->
                    <div class="help-text">
                        <br>
                        <p><a class="text-log" data-toggle="modal" data-target="#recuperarPass" href="">&#191;Olvidaste la
                                contrase&ntilde;a&#63;</a></p>
                    </div>
                    <!--.help-text-->
                </div>
                <!--.login-tab-content-->
            </div>
            <!--.tabs-content-->
            <!-- MODAL -->
            <div class="modal fade" id="recuperarPass" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h4 class="modal-title text-center" id="ModalLabel">Restablecer contrase&ntilde;a.</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="x" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--Modal-header-->
                        <div class="modal-body">
                            <form id="form">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="correo" id="correo" placeholder="Confirmar correo electr&oacute;nico" required>
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <p class="text-center">Al momento de presionar &quot;Enviar Informaci&oacute;n&quot;&#44; autom&aacute;ticamente se le estar&aacute; enviando un correo electr&oacute;nico, si no aparece en su bandeja de entrada, por favor revisar la bandeja de correos no deseados.</p>
                                </div>
                            </form>
                        </div>
                        <!--Modal-body-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" id="cambio">Enviar Informaci&oacute;n</button>
                        </div>
                        <!--Modal-footer-->
                    </div>
                    <!--Modal-content-->
                </div>
                <!--Modal-dialog-->
            </div>
            <!--Modal-->
        </div>
        <!--.form-wrap-->

    </div>
    <!--Content-fluid-->


    <!-- ----------------------------------Jquery--------------------------------- -->
    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <!-- ----------------------------------Popper--------------------------------- -->
    <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
    <!-- ----------------------------------Bootstrap--------------------------------- -->
    <script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>
    <!-- ----------------------------------Personalizado--------------------------------- -->
    <script src="<?= base_url(); ?>libs/js/login.js"></script>
    <script>
        $('#cambio').on('click', function() {
            form = new FormData(document.getElementById("form"));
            $.ajax({
                type: 'POST',
                url: 'http://localhost/gestor/mail/cambio',
                data: form,
                processData: false,
                contentType: false,
                success: function(result) {
                    console.log(result);
                    // window.location.href = 'http://localhost/gestor';
                }
            });
        })
    </script>
    <script>
        $('#registrar').on('click', function() {
            correo = document.getElementById('useremail').value;
            form = new FormData(document.getElementById("reg"));
            $.ajax({
                type: 'POST',
                url: 'http://localhost/gestor/usuario/registrar',
                data: form,
                processData: false,
                contentType: false,
                success: function(result) {
                    console.log(result);
                    // window.location.href = 'http://localhost/gestor';
                }
            });
            $.ajax({
                type: 'POST',
                url: 'http://localhost/gestor/mail/registro',
                data: {
                    'correo': correo
                },
                success: function(result) {
                    console.log(result);
                    
                }
            });

        })
    </script>
    <script>
        $('#conf').on('click', function() {
            codigo = document.getElementById('codigo').value;
            correo = document.getElementById('useremail').value;
            $.ajax({
                type: 'POST',
                url: 'http://localhost/gestor/usuario/validar',
                data: {
                    'codigo': codigo,
                    'correo': correo,
                },
                success: function(result) {
                    if (result) {
                        location.reload();
                    }
                }
            });
        })
    </script>
</body>

</html>
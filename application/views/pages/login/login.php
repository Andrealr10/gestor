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
    <title>Inicio&#47; Registro</title>
</head>

<body>
    <div class="container-fluid">
        <div class="title-box">
            <h1 class="display-4 text-center font-weight-bold">Cloudcat <i class="fas fa-cat"></i> </h1>
        </div>
        <!--title-box-->
        <div class="form-wrap">
            <div class="tabs">
                <div class=" ">
                    <h3 class="signup-tab text-uppercase"><a class="text-light text-decoration-none " href="#signup-tab-content">Reg&iacute;strate ahora</a></h3>
                </div>
                <div class="">
                    <h3 class="login-tab  text-uppercase"><a class="active text-light text-decoration-none " href="#login-tab-content">Ya tengo cuenta</a></h3>
                </div>
            </div>
            <!--.tabs-->

            <!-- Contenedor de formularios -->
            <div class="tabs-content ">
                <div id="signup-tab-content" class="">
                    <form class="signup-form  ">
                        <div class="form-group">
                            <input type="text" class=" form-control" id="name" autocomplete="off" placeholder="NOMBRE" required>
                            <input type="text" class=" form-control" id="lastname" autocomplete="off" placeholder="APELLIDO" required>
                            <input type="text" class=" form-control" id="username" autocomplete="off" placeholder="USERNAME" required>
                            <input type="email" class="form-control" id="useremail" autocomplete="off" placeholder="CORREO ELECTR&Oacute;NICO" required>
                            <input type="password" class=" form-control" id="userpass" autocomplete="off" placeholder="CONTRASE&#209;A" required>
                            <input type="password" class=" form-control" id="userpass2" autocomplete="off" placeholder=" CONFIRMAR CONTRASE&#209;A">
                        </div>
                        <button class="btn btn-info btn-block" id="registrar">REGISTRARME</button>
                    </form>
                    <!--.login-form-->

                    <div class="help-text">
                        <p class="text-light">Al inscribirte aceptas colaborar a la comunidad.</p>
                        <p><a href="#">T&eacute;rminos del servicio.</a></p>
                    </div>
                    <!--.help-text-->
                </div>
                <!--.signup-tab-content-->

                <div id="login-tab-content" class="active">
                    <form class="login-form">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="user_login" autocomplete="off" placeholder="USUARIO">
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" id="pass_login" autocomplete="off" placeholder="CONTRASE&#209;A">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" "><i class=" far fa-eye"></i></button>
                                </div>
                            </div>
                            <button class="btn btn-info btn-block" id="iniciar">INICIAR SESI&Oacute;N</button>
                    </form>
                    <!--.login-form-->
                    <div class="help-text">
                        <br>
                        <p><a class="text-primary passmodal" data-toggle="modal" data-target="#recuperarPass" href="">&#191;Olvidaste la
                                contrase&ntilde;a&#63;</a></p>
                    </div>
                    <!--.help-text-->
                </div>
                <!--.login-tab-content-->
            </div>
            <!--.tabs-content-->
        </div>
        <!--.form-wrap-->


        <!-- MODAL -->
        <div class="modal fade" id="recuperarPass" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h4 class="modal-title text-center" id="ModalLabel">RESTABLECER CONTRASE&#209;A</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="x" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Modal-header-->
                    <div class="modal-body">
                        <form id="form">
                            <div class="input-group">
                                <input type="text" class="form-control" name="correo" id="correo" placeholder="CONFIRMAR CORREO ELECTR&Oacute;NICO" required>
                            </div>
                            <div class="alert alert-warning" role="alert">
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
</body>

</html>
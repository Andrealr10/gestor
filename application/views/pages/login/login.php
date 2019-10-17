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
    <div class="cont container-fluid">
        <div style="border-bottom: 2px solid #000; width: 200px; margin: auto; " class=" text-center mt-3 mb-3">
            <img style="width: 200px;" src="<?= base_url(); ?>libs/images/sudocs.png" alt="">
            <!-- <h1 class="display-4 text-center font-weight-bold">Cloudcat <i class="fas fa-cat"></i> </h1> -->
            <!-- <h2 class="text-dark text-center pt-2"><i class="fas fa-copy pr-2"></i> SUDOCS</h2> -->
        </div>
        <!--title-box-->
        
        <div class="form-wrap">
            <div class="tabs">
                <div class=" ">
                    <h3 class="signup-tab "><a class="text-light text-decoration-none " href="#signup-tab-content">Reg&iacute;strate ahora</a></h3>
                </div>
                <div class="">
                    <h3 class="login-tab  "><a class="active text-light text-decoration-none " href="#login-tab-content">Ya tengo una cuenta</a></h3>
                </div>
            </div>
            <!--.tabs-->

            <!-- Contenedor de formularios -->
            <div class="tabs-content ">
                <div id="signup-tab-content" class="">
                    <form class="signup-form" method="POST" id="reg">
                        <p class="text-light small pt-0 mt-0"> * Todos los campos son obligatorios.</p>
                        <div class="form-group ">
                            <input type="text" class=" form-control mt-2 mb-2" name="nombre" id="name" autocomplete="off" maxlength="20" placeholder="Escriba su nombre*" required>
                            <input type="text" class=" form-control mt-2 mb-2" name="apellido" id="lastname" autocomplete="off" maxlength="20" placeholder="Escriba su apellido*" required>
                            <input type="text" class=" form-control mt-2 mb-2" name="username" id="username" autocomplete="off" placeholder="Escriba un nombre de usuario*" required pattern="[A-Za-z0-9]{5,16}" title="Letras y números. Tamaño máximo: 16" required onkeyup="validaruser()">
                            <input type="email" class="form-control mt-2 mb-2" name="correo" id="useremail" autocomplete="off" placeholder="Correo electr&oacute;nico*" title="Debe incluir @" required onkeyup="validarmail()">
                            <input type="password" class=" form-control mt-2 mb-2" name="password" id="userpass" autocomplete="off" placeholder="Contrase&ntilde;a*" title="Letras y números, tamaño máximo: 16" required>
                            <input type="password" class=" form-control mt-2 mb-2" name="password2" id="userpass2" autocomplete="off" placeholder="Confirmar la contrase&ntilde;a*" title="Debe confirmar su contrase&ntilde;a" required>
                        </div>
                        <button class="btn btn-secondary btn-block" id="registrar" >Verificar datos</button>
                        <input type="number" class=" form-control mt-3 mb-3" name="codigo" id="codigo" autocomplete="off" placeholder="Confirmar c&oacute;digo">
                        <button class="btn btn-info btn-block" id="conf" type="button">Registrarme</button>
                    </form>
                    <!--.login-form-->

                    <div class="help-text">
                        <p class="text-light">Al registrarte aceptas colaborar a la comunidad.</p>
                        <!-- <p><a class="text-log" href="#">T&eacute;rminos del servicio.</a></p> -->
                    </div>
                    <!--.help-text-->
                </div>
                <!--.signup-tab-content-->

                <div id="login-tab-content" class="active">
                    <form class="login-form " method="POST" >
                    <p class="text-light small pt-0 mt-0"> * Todos los campos son obligatorios.</p>
                        <div class="form-group">
                            <div class="input-group mt-3 mb-2">
                                <input type="text" class="form-control " name="user" id="user" autocomplete="off" placeholder="Nombre de usuario*" required>
                              
                            </div>
                            <div id="msm1" class="small pt-0 pb-0 mb-0 mt-0 text-danger d-lg-none">Ingrese su nombre de usuario</div>
        
                            <div class="input-group mt-3">
                                <input type="password" class="form-control" name="pass" id="pass" autocomplete="off" placeholder="Contrase&ntilde;a*" required>
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" ><i class=" far fa-eye" id="eye"></i></button>
                                </div>
                            </div>
                            <div id="msm2" class="small pt-0 pb-0 mb-0 mt-0 text-danger d-lg-none">Debe ingresar su contrase&ntilde;a</div>
                            
                            <br>
                            <button type="button" class="btn btn-info btn-block" id="iniciar">Iniciar sesi&oacute;n</button>
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
    

</body>

</html>
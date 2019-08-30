<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/css/login.css">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <title>Inicio Sesi&oacute;n/ Registro</title>

</head>
<body>
<div class="container ">
    <div class="backbox col-12">
      <div class="loginMsg ">
        <div class="textcontent1 text-center">
          <p class="title"> &#191;A&uacute;n no est&aacute;s registrado&#63;</p>

          <button class="btn btn-lg btn-danger" id="switch1">REG&Iacute;STATE AHORA</button>
        </div>
      </div>
      <div class="signupMsg visibility ">
        <div class="textcontent2 text-center">
          <p class="title">&#191;Ya tienes una cuenta&#63;</p>

          <button class="btn btn-lg btn-danger " id="switch2">INICIAR SESI&Oacute;N</button>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox ">
      <div class="login ">
        <h2>INICIAR SESI&Oacute;N</h2>
        <div class="inputbox">
          <div class="input-group">
            <input type="text" class="form-control" name="username" placeholder="USERNAME" required>
          </div>

          <div class="input-group">
            <input type="password" class="form-control" name="password" placeholder="PASSWORD" required>
              <div class="input-group-append">
               <button class="btn btn-danger" type="button"><i class="far fa-eye"></i></button>
              </div>
          
          </div>

        </div>
        <br>
        <a class="text-primary" href="">&#191;Olvidaste la contraseña&#63;</a>
        <br><br>


        <button class="btn btn-block btn-dark">Ingresar</button>
      </div>

      <div class="signup hide">
        <h2>REGISTRO</h2>
        <div class="inputbox2">
          <input type="text" class="form-control" name="nombre" placeholder="NOMBRE" required>
          <input type="text" class="form-control" name="apellido" placeholder="APELLIDO" required>
          <input type="text" class="form-control" name="username" placeholder="USERNAME" required>
          <input type="password" class="form-control" name="password" placeholder="CONTRASE&#209;A" required>
          <input type="password" class="form-control" name="password2" placeholder="CONFIRMAR CONTRASE&#209;A" required>
          <input type="text" class="form-control" name="email" placeholder="EMAIL" >
        </div>
        <button class="btn btn-block btn-dark">Registrar</button>
      </div>

    </div>
    <!-- frontbox -->
  </div>
  <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url(); ?>libs/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>



  <script src="<?= base_url(); ?>libs/js/login.js"></script>
  </body>

</html>
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>


  <script src="login.js"></script>
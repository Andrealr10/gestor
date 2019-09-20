<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= base_url(); ?>libs/css/notificaciones.css">
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-center"><i class="fas fa-bell" style="font-size:25px;"></i>&nbsp&nbspNotificaciones</h2><br>
        <button class="nav-pills mb-3" onclick="load()"><a class="nav-link active">Solicitudes&nbsp<i class="fas fa-envelope"></i></a></button>
        <button class="nav-pills mb-3" onclick="load(2)"><a class="nav-link active">Denuncias&nbsp<i class="fas fa-exclamation-circle"></i></a></button>
        <button class="nav-pills mb-3" onclick="load(3)"><a class="nav-link active">Sugerencias&nbsp<i class="fas fa-comments"></i></button>
        <div class="table-responsive">
          <caption id="caption">Solicitudes</caption><br><br>
          <table class="table table-striped" style="background:rgb(228, 226, 226);">
            <thead>
              <tr>
                <th scope="col">Username</th>
                <th scope="col">Fecha</th>
                <th scope="col">Tipo</th>
                <th scope="col">Acción</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="tabla">
              <!-- Aqui va la tabla -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    var uri = "http://localhost/gestor/"
    $('#ruta').html('Panel de Control / Notificaciones')
    $(document).ready(function() {
      load();
    });

    function load(tipo = null) {
      $.ajax({
        type: 'GET',
        url: uri + 'notificaciones/load/' + tipo,
        success: function(result) {
          $('#tabla').html(result);
        }
      });
    }
  </script>
</body>

</html>
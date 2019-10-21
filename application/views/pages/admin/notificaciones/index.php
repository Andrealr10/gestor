<link rel="stylesheet" href="<?= base_url(); ?>libs/css/notificaciones.css">
<div class="row">
  <div class="col-md-12 text-center">
    <ol class="breadcrumb">
      <li class="active">
        <i class="fa fa-bars" style="font-size: 20px; margin-right: 10px;"></i>
        <a href="<?= base_url('notificacion') ?>">SUDOCS / Notificaciones </a>

      </li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-sm-12 text-center">
    <h2 class="text-center"><i class="fas fa-bell" style="font-size:25px;"></i>&nbsp&nbspNotificaciones</h2><br>
    <button class="nav-pills mb-3" onclick="loadNotificacion()"><a class="nav-link active">Solicitudes&nbsp<i class="fas fa-envelope"></i></a></button>
    <button class="nav-pills mb-3" onclick="loadNotificacion(2)"><a class="nav-link active">Denuncias&nbsp<i class="fas fa-exclamation-circle"></i></a></button>
    <button class="nav-pills mb-3" onclick="loadNotificacion(3)"><a class="nav-link active">Sugerencias&nbsp<i class="fas fa-comments"></i></button>
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
          <?php foreach ($notificaciones as $not) { ?>
            <tr>
              <td><?= $not->username ?></td>
              <td><?= $not->fecha ?></td>
              <td><?= $not->descripcion ?></td>
              <td>
                <button class="btn btn-sm btn-secondary"><i class="fas fa-info-circle"></i></button>
                <button class="btn btn-sm btn-info"><i class="fas fa-reply"></i></button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
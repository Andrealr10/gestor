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
    <!--Notificaciones-->
<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="text-center"><i class="fas fa-bell" style="font-size:25px;"></i>&nbsp&nbspNotificaciones</h2><br>
 <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Solicitudes&nbsp<i class="fas fa-envelope"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Denuncias&nbsp<i class="fas fa-exclamation-circle"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sugerencias&nbsp<i class="fas fa-comments"></i></a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active d-flex justify-content-start" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <div class="table-responsive-sm">
  <table class="table text-center">
  <thead>
    <tr>
	  <th scope="col">Username</th>
	  <th scope="col">Fecha</th>
	  <th scope="col">Tipo</th>
	  <th scope="col">Acción</th>
	  <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
	  <td>Mark</td>
	  <td>18-09-2019</td>
	  <td>Nueva Categoría</td>
      <td>
		  <button class="btn btn-sm btn-secondary"><i class="fas fa-info-circle"></i></button>
		  <button class="btn btn-sm btn-info"><i class="fas fa-reply"></i></button>
	  </td>
	  <td><button class="btn btn-sm btn-default"><i class="fas fa-times"></i></button></td>
    </tr>
    <tr>
	  <td>Jacob</td>
	  <td>14-05-2019</td>
	  <td>Revisión de Archivo</td>
	  <td>  
		  <button class="btn btn-sm btn-secondary"><i class="fas fa-info-circle"></i></button>
		  <button class="btn btn-sm btn-info"><i class="fas fa-reply"></i></button>
		  <button class="btn btn-sm btn-danger"><i class="fas fa-external-link-square-alt"></i></button>
	</td>
	<td><button class="btn btn-sm btn-default"><i class="fas fa-times"></i></button></td>
    </tr>
  </tbody>
  </table>
</div>
  </div>
  <div class="tab-pane fade d-flex" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="table-responsive-sm">
  <table class="table text-center">
  <thead>
    <tr>
	  <th scope="col">Username</th>
	  <th scope="col">Fecha</th>
	  <th scope="col">Tipo</th>
	  <th scope="col">Acción</th>
	  <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
	  <td>Mark</td>
	  <td>18-09-2019</td>
	  <td>Nueva Categoría</td>
      <td>
		  <button class="btn btn-sm btn-secondary"><i class="fas fa-info-circle"></i></button>
		  <button class="btn btn-sm btn-info"><i class="fas fa-reply"></i></button>
	  </td>
	  <td><button class="btn btn-sm btn-default"><i class="fas fa-times"></i></button></td>
    </tr>
    <tr>
	  <td>Jacob</td>
	  <td>14-05-2019</td>
	  <td>Revisión de Archivo</td>
	  <td>  
		  <button class="btn btn-sm btn-secondary"><i class="fas fa-info-circle"></i></button>
		  <button class="btn btn-sm btn-info"><i class="fas fa-reply"></i></button>
		  <button class="btn btn-sm btn-danger"><i class="fas fa-external-link-square-alt"></i></button>
	</td>
	<td><button class="btn btn-sm btn-default"><i class="fas fa-times"></i></button></td>
    </tr>
  </tbody>
  </table>
</div>
  </div>
  <div class="tab-pane fade d-flex justify-content-end" style="margin-top:1% !important;" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">.dfzdfafdfa..</div>
</div>
 
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2 class="text-center"><i class="fas fa-bell" style="font-size:25px;"></i>&nbsp&nbspNotificaciones</h2><br>
            <button class="nav-pills mb-3"><a class="nav-link active">Solicitudes&nbsp<i class="fas fa-envelope"></i></a></button>
            <button class="nav-pills mb-3"><a class="nav-link active">Denuncias&nbsp<i class="fas fa-exclamation-circle"></i></a></button> 
            <button class="nav-pills mb-3"><a class="nav-link active">Sugerencias&nbsp<i class="fas fa-comments"></i></button>    
                 <div class="table-responsive">
                 <caption>Solicitudes</caption><br><br>
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
                        <tbody>
                            <tr>
                            <td>Mark</td>
                            <td>18-09-2019</td>
                            <td>Nueva Categoría</td>
                            <td>
                                <button class="btn btn-sm btn-secondary"><i class="fas fa-info-circle"></i></button>
                                <button class="btn btn-sm btn-info"><i class="fas fa-reply"></i></button>
                            </td>
                            <td><button class="btn btn-sm btn-default"><i class="fas fa-times"></i></button></td>
                            </tr>
                            <tr>
                            <td>Jacob</td>
                            <td>14-05-2019</td>
                            <td>Revisión de Archivo</td>
                            <td>  
                                <button class="btn btn-sm btn-secondary"><i class="fas fa-info-circle"></i></button>
                                <button class="btn btn-sm btn-info"><i class="fas fa-reply"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-external-link-square-alt"></i></button>
                            </td>
                            <td><button class="btn btn-sm btn-default"><i class="fas fa-times"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>         
        </div>
    </div>
</div> 
<script>
$('#ruta').html('Panel de Control / Notificaciones')
</script>
</body>
</html>

<link rel="stylesheet" href="<?= base_url(); ?>libs/css/contenido.css">
<!-- <link rel="stylesheet" href="<?= base_url(); ?>libs/css/archivos.css"> -->
<!-- <link rel="stylesheet" href="<?= base_url(); ?>libs/css/subir.css"> -->
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/notificaciones.css">
<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <li class="active" id="ruta">
                <i class="fa fa-bars" style="font-size: 20px; margin-right: 10px;"></i>
                <a href="<?= base_url('categoria') ?>">SUDOCS / Categorias /</a>
                <a><?= $categoria->nombre ?> /</a>
                <a><?= $subcategoria->nombre ?> /</a>
                <a>Pendientes</a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 text-center">
        <h2 class="text-center"><i class="fas fa-folder" style="font-size:25px; margin: o auto;"></i>&nbsp&nbspArchivos</h2><br>
        <button class="nav-pills mb-3" onclick="loadArchivos('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><a class="nav-link active">Aprobaodos &nbsp<i class="fas fa-check-double"></i></a></button>
        <button class="nav-pills mb-3" onclick="loadArchivosPendientes('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><a class="nav-link active">Pendientes &nbsp<i class="fas fa-exclamation-circle"></i></a></button>
        <button class="nav-pills mb-3" onclick="cancelados('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><a class="nav-link active">Cancelados &nbsp<i class="fas fa-times-circle"></a></i></button>
        <button class="nav-pills mb-3" onclick="subir('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><a class="nav-link active">Mis Archivos &nbsp<i class="fas fa-folder-open"></a></i></button>
    </div>
</div>

<div class="row">
    <?php if (sizeof($archivos) > 0) {
        foreach ($archivos as $archivo) { ?>
            <div class="tarjeta">
                
                <a target="blank" href="https://docs.google.com/viewer?url=<?= base_url() ?>home/files/<?= $categoria->nombre ?>/<?= $subcategoria->nombre ?>_temp/<?= $archivo->archivo ?>">
                    <img width="100px" src="<?= base_url() . '/' . $archivo->icono ?>">
                    <div class="titulo">
                        <h2 class="text-truncate"><?= $archivo->archivo ?></h2>
                        <hr>
                        <div class="subtitulo"> </div>
                        <div class="subtitulo">Fecha subido: <?= $archivo->fecha ?></div>
                        <div class="subtitulo">
                            <p class="text-truncate">Autor: <?= $archivo->nombre ?> <?= $archivo->apellido ?></p>
                        </div>
                        <br>
                        <div class="subtitulo">
                            <p > <?= $archivo->comentario_archivo ?></p>
                        </div>

                    </div>
                </a>
               
            </div>
            
        <?php }
        } else { ?>
        <br>
        <br>
        <div class="alert alert-info col-md-12" role="alert">
            Esta subcategoria no posee archivos disponibles.
        </div>
    <?php } ?>
</div>
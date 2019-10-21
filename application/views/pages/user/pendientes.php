<link rel="stylesheet" href="<?= base_url(); ?>libs/css/contenido.css">
<!-- <link rel="stylesheet" href="<?= base_url(); ?>libs/css/archivos.css"> -->
<!-- <link rel="stylesheet" href="<?= base_url(); ?>libs/css/subir.css"> -->
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/notificaciones.css">
<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <li class="active" id="ruta">
                <i onclick="loadArchivos('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')" class="fa fa-arrow-circle-left" style="font-size: 20px; margin-right: 10px;"></i>
                <a onclick="loadCategorias()">SUDOCS / Categorias /</a>
                <a onclick="loadSubcategorias('<?= $categoria->nombre ?>')"><?= $categoria->nombre ?> /</a>
                <a onclick="loadArchivos('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><?= $subcategoria->nombre ?> /</a>
                <a>Mis archivos / Pendientes</a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 text-center">
        <h2 class="text-center"><i class="fas fa-folder" style="font-size:25px; margin: o auto;"></i>&nbsp&nbspArchivos</h2><br>
        <button class="nav-pills mb-3" onclick="loadArchivos('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><a class="nav-link active">Todos &nbsp<i class="fas fa-list"></i></a></button>
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
                        <div class="subtitulo">Tamaño: <?= ($archivo->tamanio / 1024) > 1024 ? round((($archivo->tamanio / 1024) / 1024), 2) . ' MB' : round(($archivo->tamanio / 1024), 2) . ' KB'  ?></div>
                        <br>
                        <div class="subtitulo" style="color: #000000;">
                            El archivo pueder tardar en ser aprobado por el administrador.
                        </div>
                    </div>
                </a>
                <div class="acciones mt-2">
                    <br><br>
                    <button class="btn btn-outline-danger" onclick="remove(<?= $archivo->id_archivo ?>,'<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>',3)"><i class="fas fa-trash"></i>  Eliminar</button>
                </div>
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
<script src="<?= base_url() ?>libs/js/valoraciones.js"></script>
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/contenido.css">
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/subir.css">
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/notificaciones.css">
<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <li class="active" id="ruta">
                <i onclick="loadArchivos('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')" class="fa fa-arrow-circle-left" style="font-size: 20px; margin-right: 10px;"></i>
                <a onclick="loadCategorias()">SUDOCS / Categorias /</a>
                <a onclick="loadSubcategorias('<?= $categoria->nombre ?>')"><?= $categoria->nombre ?> /</a>
                <a onclick="loadArchivos('<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>')"><?= $subcategoria->nombre ?> /</a>
                <a>Mis archivos </a>
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
<link rel="stylesheet" href="<?= base_url(); ?>libs/css/subir.css">
<input type="text" name="subcategoria" id="subcategoria" hidden value="<?= $subcategoria->id_subcategoria ?>">
<input type="text" name="categoria" id="categoria" hidden value="<?= $categoria->nombre ?>">
<input type="text" name="sub" id="sub" hidden value="<?= $subcategoria->nombre ?>">
<div class="row">
    <div class="row" style="margin:0 auto;">
        <input type="text" name="subcategoria" id="subcategoria" hidden value="<?= $subcategoria->id_subcategoria ?>">
        <input type="text" name="categoria" id="categoria" hidden value="<?= $categoria->nombre ?>">
        <input type="text" name="sub" id="sub" hidden value="<?= $subcategoria->nombre ?>">
        <div class="col-md-12 col-sm-12">
            <!-- Our markup, the important part here! -->
            <div id="drag-and-drop-zone" class="dm-uploader p-5">
                <!-- <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3> -->
                <h3 class="mb-5 mt-5 ">Arrastra los archivos aqu&iacute;</h3>
                <label >Extensiones permitidas: pptx, docx, pdf, txt</label>

                <div class="btn btn-subir btn-block mb-5">
                    <!-- <span>Open the file Browser</span> -->
                    <span>Seleccionar el archivo</span>
                    <input type="file" title='Click para seleccionar archivos' />
                </div>
            </div><!-- /uploader -->
        </div>
    </div>

</div>
<div class="container-fluid">
    <div class="row">
        <?php foreach ($archivos as $archivo) { ?>
            <div class="tarjeta">
                <a target="blank" href="https://docs.google.com/viewer?url=<?= base_url() ?>home/files/<?= $categoria->nombre ?>/<?= $subcategoria->nombre ?>/<?= $archivo->archivo ?>">
                    <img width="100px" src="<?= base_url() . '/' . $archivo->icono ?>">
                    <div class="titulo">
                        <h2 class="text-truncate"><?= $archivo->archivo ?></h2>
                        <hr>
                        <div class="subtitulo"> </div>
                        <div class="subtitulo">Descargas: <?= $archivo->descargas ?></div>
                        <div class="subtitulo">Fecha subido: <?= $archivo->fecha ?></div>
                        <div class="subtitulo">Tamaño: <?= ($archivo->tamanio / 1024) > 1024 ? round((($archivo->tamanio / 1024) / 1024), 2) . ' MB' : round(($archivo->tamanio / 1024), 2) . ' KB'  ?></div>
                        <div class="subtitulo">
                            <p class="text-truncate">Estado: <?= $archivo->estado_archivo == 1 ? '<span style="color: green;">APROBADO</span>' : ($archivo->estado_archivo == 0 ? '<span style="color: blue;">PENDIENTE</span>' : '<span style="color: red;">CANCELADO</span>' ) ?></p>
                        </div>
                    </div>
                </a>
                <div class="acciones mt-2">
                    <br><br>
                    <button class="btn btn-outline-danger" onclick="remove(<?= $archivo->id_archivo ?>,'<?= $categoria->nombre ?>','<?= $subcategoria->nombre ?>',3)"><i class="fas fa-trash"></i>  Eliminar</button>

                </div>
            </div>
            

        <?php } ?>
    </div>
</div>
<script src="<?= base_url() ?>libs/upload/dist/js/jquery.dm-uploader.min.js"></script>
<script src="<?= base_url() ?>libs/upload/demo-ui.js"></script>
<script src="<?= base_url() ?>libs/upload/demo-config.js"></script>
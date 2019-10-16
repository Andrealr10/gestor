<link rel="stylesheet" href="<?= base_url(); ?>libs/css/subir.css">
<div class="row">
<div class="row" style="margin:0 auto;">
<input type="text" name="subcategoria" id="subcategoria" hidden value="<?= $subcategoria->id_subcategoria ?>">
<input type="text" name="categoria" id="categoria" hidden value="<?= $categoria->nombre ?>">
<input type="text" name="sub" id="sub" hidden value="<?= $subcategoria->nombre ?>">
<div class="col-md-6 col-sm-12">
    <!-- Our markup, the important part here! -->
    <div id="drag-and-drop-zone" class="dm-uploader p-5">
        <!-- <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3> -->
        <h3 class="mb-5 mt-5 ">Arrastra los archivos aqu&iacute;</h3><br><br>

        <div class="btn btn-subir btn-block mb-5">
            <!-- <span>Open the file Browser</span> -->
            <span>Seleccionar el archivo</span>
            <input type="file" title='Click to add Files' />
        </div>
    </div><!-- /uploader -->

</div>
<div class="col-md-6 col-sm-12">
    <div class="card h-100">
        <div class="card-header">
            Lista de Archivos
        </div>

        <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
            <li class="text-muted text-center empty">No hay archivos cargados</li>
        </ul>
    </div>
</div>
</div>
</div>
<script src="<?= base_url() ?>libs/upload/dist/js/jquery.dm-uploader.min.js"></script>
<script src="<?= base_url() ?>libs/upload/demo-ui.js"></script>
<script src="<?= base_url() ?>libs/upload/demo-config.js"></script>
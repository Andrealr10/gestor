<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
    <link rel="stylesheet" href="<?= base_url(); ?>libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>libs/fonts/css/all.css">
</head>

<body>
    <div class="container">
        <div class="row">

            <!-- Contenedor con las categorias ¡ -->
            <div class="col bg-light" id="categorias" style="padding: 2%; height: fit-content; margin: 10px;">
                <h2>Categorias</h2>
                <br>

                <!-- Titulo de las tabs para categorias -->
                <ul class="nav nav-pills mb-3" id="tab-categorias" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="listcat-tab" data-toggle="pill" href="#listcat" role="tab" aria-controls="listcat" aria-selected="true">Lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="addcat-tab" data-toggle="pill" href="#addcat" role="tab" aria-controls="addcat" aria-selected="false">Agregar</a>
                    </li>
                </ul>

                <!-- Contenedor con todo el contenido de las categorias -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-content" id="pills-tabContent">

                        <!-- Contenedor con la lista de las categorias -->
                        <div class="tab-pane fade show active" id="listcat" role="tabpanel" aria-labelledby="listcat-tab">
                            <div class="tab-pane" id="listcat-1" role="tabpanel" aria-labelledby="listcat-1-list">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <div id="listacat"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Contenedor con el fomulario  para ingresar categorias -->
                        <div class="tab-pane fade" id="addcat" role="tabpanel" aria-labelledby="addcat-tab">
                            <div class="tab-pane" id="listcat-2" role="tabpanel" aria-labelledby="listcat-2-list">
                                <div id="add">
                                    <form id="form" enctype="multipart/form-data">
                                        <label for="nombre">Nombre de la Categoria</label><br>
                                        <input type="text" name="nombre" id="nombre"><br>
                                        <label for="descripcion">Descripcion de la Categoria</label><br>
                                        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea><br>
                                        <label for="imagen">Imagen de la Categoria</label><br>
                                        <input type="file" name="imagen" id="imagen"><br>
                                        <button id="crear" type="button">Crear</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenedor para las subcategorias -->
            <div class="col bg-light" id="subcategorias" style="padding: 2%; margin: 10px; height: fit-content;">
                <h2>Sub-Categorias</h2>
                <br>
                <ul class="nav nav-pills mb-3" id="tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="listsub-tab" data-toggle="pill" href="#listsub" role="tab" aria-controls="listsub" aria-selected="true">Lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="addsub-tab" data-toggle="pill" href="#addsub" role="tab" aria-controls="addsub" aria-selected="false">Agregar</a>
                    </li>
                </ul>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="listsub" role="tabpanel" aria-labelledby="listsub-tab">
                            <div class="tab-pane" id="listsub-1" role="tabpanel" aria-labelledby="listsub-1-list">
                                <div id="listasub">
                                    <div class="alert alert-primary" role="alert">
                                        Seleccione una categoria.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="addsub" role="tabpanel" aria-labelledby="addsub-tab">
                            <div class="tab-pane" id="listsub-2" role="tabpanel" aria-labelledby="listsub-2-list">
                                <div id="add">
                                    <form enctype="multipart/form-data">
                                        <label for="nombre">Nombre de la SubCategoria</label><br>
                                        <input type="text" name="nombre" id="nombre"><br>
                                        <input type="file" name="imagen" id="imagen"><br>
                                        <select name="categoria" id="categoria">
                                            <?php foreach ($categorias as $categoria) { ?>
                                            <option value="<?= $categoria->id_categoria ?>"><?= $categoria->nombre ?></option>
                                            <?php }
                                            echo $nombre;
                                            ?>

                                        </select>
                                        <br>
                                        <input type="submit" value="Crear">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url(); ?>libs/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>libs/js/categorias.js"></script>
</body>

</html>
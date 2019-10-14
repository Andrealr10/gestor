var uri = "http://localhost/gestor/"


$(document).ready(function () {
    loadCategorias();
});

function loadCategorias() {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'categoria/load/',
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}

function loadSubcategorias(categoria) {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'subcategoria/load/' + categoria,
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}

function loadArchivos(categoria, sub) {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'archivo/load/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}


function loadSubcat(categoria) {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'contenido/subcategorias/' + categoria,
        success: function (result) {
            $('#' + categoria).html(result);
        }
    });
    loadSubcategorias(categoria);
}

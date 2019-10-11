var uri = "http://localhost/gestor/"


$(document).ready(function () {
    loadCat();
});

function loadCat() {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'guest/loadCat/',
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}

function loadSub(categoria) {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'guest/loadSub/' + categoria,
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}

function loadAr(categoria, sub) {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'guest/loadAr/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);
        }
    });

}

function loadCate() {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'user/loadCate/',
        success: function (result) {
            $('#nomb').html(result);
        }
    });
}

function loadSubcat(categoria) {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'user/loadSubcat/' + categoria,
        success: function (result) {
            $('#' + categoria).html(result);
            loadSub(categoria);
        }
    });
}

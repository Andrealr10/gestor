var uri = "http://localhost/gestor/"


$(document).ready(function () {
    loadCat();
});

function loadCat() {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + '/loadCat/',
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}

function loadSub(categoria) {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'user/loadSub/' + categoria,
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}

function loadAr(categoria, sub) {
    // $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'admin/loadAr/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}

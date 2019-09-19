var uri = "http://localhost/gestor/"

$(document).ready(function () {
    load();
});

$('#crear').on('click', function () {
    form = new FormData(document.getElementById("form"));
    $.ajax({
        type: 'POST',
        url: uri + 'categoria/crear',
        data: form,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result);
            load();
        }
    });
})

function crearsub(categoria) {
    form = new FormData(document.getElementById("form"+categoria));
    $.ajax({
        type: 'POST',
        url: uri + 'subcategoria/crear',
        data: form,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result);
            loadsubs(categoria);
        }
    });
}
// $('#crearsub').on('click', function () {

// })

function load() {
    $('#ruta').html('Panel de Control / Categorías')
    $.ajax({
        type: 'GET',
        url: uri + 'categoria/load/',
        success: function (result) {
            $('#accordion').html(result);
        }
    });
}

// $('#myCollapsible').on('hidden.bs.collapse', function () {
//     // do something...
//   })

function loadsubs(categoria) {
    $.ajax({
        type: 'GET',
        url: uri + 'subcategoria/load/' + categoria,
        success: function (result) {
            $('#' + categoria).html(result);
        }
    });
}

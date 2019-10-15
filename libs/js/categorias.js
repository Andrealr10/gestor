var uri = "http://localhost/gestor/"

var Toast;

$(document).ready(function () {
    load();
    Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 6000
    });
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
            Toast.fire({
                type: 'success',
                title: '¡Categoria creada con éxito!',
                background: '#FFFF',
                padding: '10%'
            })

        }
    });
})

function crearsub(categoria) {
    form = new FormData(document.getElementById("form" + categoria));
    $.ajax({
        type: 'POST',
        url: uri + 'subcategoria/crear',
        data: form,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result);
            $('#form' + categoria).trigger("reset");
            loadsubs(categoria);
            Toast.fire({
                type: 'success',
                title: '¡Subc   ategoria creada con éxito!',
                background: '#FFFF',
                padding: '10%'
            })
        }
    });
}

function load() {
    $('#ruta').html('Panel de Control / Tecnologías')
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

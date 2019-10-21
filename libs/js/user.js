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

function loadArchivos(categoria, sub) {
    $.ajax({
        type: 'GET',
        url: uri + 'archivo/load/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}


function loadArchivosPendientes(categoria, sub) {
    $.ajax({
        type: 'GET',
        url: uri + 'archivo/pendientes/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);
            sessionStorage.setItem('location', result)
            sessionStorage.setItem('cat', categoria)
            sessionStorage.setItem('sub', sub)
        }
    });
}

// function load() {

//     $.ajax({
//         type: 'GET',
//         url: uri + 'categoria/load/',
//         success: function (result) {
//             $('#accordion').html(result);
//         }
//     });
// }

function loadsubs(categoria) {
    $.ajax({
        type: 'GET',
        url: uri + 'subcategoria/load/' + categoria,
        success: function (result) {
            $('#id' + categoria).html(result);
        }
    });
}

function loadSubcat(categoria) {
    $.ajax({
        type: 'GET',
        url: uri + 'contenido/subcategorias/' + categoria,
        success: function (result) {
            $('#' + categoria).html(result);
        }
    });
}

function subir(categoria, sub) {
    $.ajax({
        type: 'GET',
        url: uri + 'archivo/vista/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);

        }
    });
}

function cancelados(categoria, sub) {
    $.ajax({
        type: 'GET',
        url: uri + 'archivo/cancelados/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);
            sessionStorage.setItem('location', result)
            sessionStorage.setItem('cat', categoria)
            sessionStorage.setItem('sub', sub)
        }
    });
}


function remove(id, categoria, subcategoria, location) {

    Swal.fire({
        title: '¿Eliminar archivo?',
        text: "Esta accion no se puede revertir",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Eliminar'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: uri + 'archivo/eliminar/' + id,
                success: function (result) {
                    Toast.fire({
                        type: 'error',
                        title: 'Archivo eliminado con éxito.',
                        background: '#FFFF',
                        padding: '10%'
                    })
                    $(".modal-backdrop").modal('hide');//ocultamos el modal
                    $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
                    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
                    if (location == 1) {
                        loadArchivos(categoria, subcategoria)
                    } else if (location == 2) {
                        loadArchivosPendientes(categoria, subcategoria)
                    } else {
                        subir(categoria, subcategoria)
                    }
                }
            })
        }
    })
}

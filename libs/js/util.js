var uri = "http://localhost/gestor/"

$(document).ready(function () {

    if (sessionStorage.getItem('location')) {
        $('#contenido').html(sessionStorage.getItem('location'));
    } else {
        loadCategorias();
    }

    Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 6000
    });

});

function loadCategorias() {
    $.ajax({
        type: 'GET',
        url: uri + 'categoria/load/',
        success: function (result) {
            $('#contenido').html(result);
            sessionStorage.setItem('location', result)

        }
    });
}

function loadSubcategorias(categoria) {
    $.ajax({
        type: 'GET',
        url: uri + 'subcategoria/load/' + categoria,
        success: function (result) {
            $('#contenido').html(result);
            sessionStorage.setItem('location', result)
            sessionStorage.setItem('cat', categoria)

        }
    });
}

function loadArchivos(categoria, sub) {
    $.ajax({
        type: 'GET',
        url: uri + 'archivo/load/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);
            sessionStorage.setItem('location', result)
            sessionStorage.setItem('cat', categoria)
            sessionStorage.setItem('sub', sub)

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


function loadSubcat(categoria) {
    $.ajax({
        type: 'GET',
        url: uri + 'contenido/subcategorias/' + categoria,
        success: function (result) {
            $('#' + categoria).html(result);
        }
    });
    loadSubcategorias(categoria);
}

function subir(categoria, sub) {
    $.ajax({
        type: 'GET',
        url: uri + 'archivo/vista/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);
            sessionStorage.setItem('location', result)
            sessionStorage.setItem('cat', categoria)
            sessionStorage.setItem('sub', sub)
        }
    });
}


function remove(id, categoria, subcategoria) {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: '¿Esta seguro de eliminar el archivo?',
        text: "Esta acción no se puede deshacer",
        type: 'question',
        showCancelButton: true,
        confirmButtonText: 'Cancelar',
        cancelButtonText: 'Eliminar',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {

        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Archivo eliminado',
                'error',
                '600',
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
                        subir(categoria, subcategoria)
                    }
                })
            )
        }
    })

    // $.ajax({
    //     type: 'GET',
    //     url: uri + 'archivo/eliminar/' + id,
    //     success: function (result) {
    //         Toast.fire({
    //             type: 'error',
    //             title: 'Archivo eliminado con éxito.',
    //             background: '#FFFF',
    //             padding: '10%'
    //         })
    //         subir(categoria, subcategoria)
    //     }
    // });
}




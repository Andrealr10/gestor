var uri = "http://localhost/gestor/"

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
function loadArchivos(categoria, sub) {
    $.ajax({
        type: 'GET',
        url: uri + 'archivo/load/' + categoria + '/' + sub,
        success: function (result) {
            $('#contenido').html(result);
        }
    });
}

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
                title: '¡Subcategoria creada con éxito!',
                background: '#FFFF',
                padding: '10%'
            })
        }
    });
}
function aprobar(id, categoria, sub) {
    Swal.fire({
        title: '¿Aprobar archivo?',
        text: "Una vez aprobado sera visible por todos los usuarios",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Aprobar'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: uri + 'archivo/aprobar/' + id,
                success: function (result) {
                    console.log(result);
                    loadArchivosPendientes(categoria, sub);
                    Toast.fire({
                        type: 'success',
                        title: 'Archivo aprobado con éxito!',
                        background: '#FFFF',
                        padding: '10%'
                    })
                }
            })
        }
    })

}
function cancelar(id, categoria, sub) {
    Swal.fire({
        title: '¿Rechazar archivo?',
        text: "Escriba el motivo por el cual desea rechazar:",
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Rechazar',
        showLoaderOnConfirm: true,
        preConfirm: (login) => {
            return $.ajax({
                type: 'POST',
                url: uri + 'archivo/cancelar/' + id,
                data: {
                    'comentario': login
                },
                success: function (result) {
                    if (result == 0) {
                        Swal.showValidationMessage(
                            'Por favor ingrese un motivo'
                        )
                    } else {
                        // loadArchivosPendientes(categoria, sub);
                        // Toast.fire({
                        //     type: 'success',
                        //     title: 'Archivo rechazado con éxito!',
                        //     background: '#FFFF',
                        //     padding: '10%'
                        // })
                    }
                }

            })
        },
        // allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        if (result.value) {
            Toast.fire({
                type: 'success',
                title: 'Archivo rechazado con éxito!',
                background: '#FFFF',
                padding: '10%'
            })
            loadArchivosPendientes(categoria, sub);
        }
    })



    // Swal.fire({
    //     title: '¿Rechazar archivo?',
    //     text: "Una vez realizada esta accion no se puede deshacer",
    //     type: 'question',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     cancelButtonText: 'Cancelar',
    //     confirmButtonText: 'Rechazar'
    // }).then((result) => {
    //     if (result.value) {
    //         $.ajax({
    //             type: 'GET',
    //             url: uri + 'archivo/cancelar/' + id,
    //             success: function (result) {
    //                 console.log(result);
    //                 loadArchivosPendientes(categoria, sub);
    //                 Toast.fire({
    //                     type: 'success',
    //                     title: 'Archivo rechazado con éxito!',
    //                     background: '#FFFF',
    //                     padding: '10%'
    //                 })
    //             }
    //         })
    //     }
    // })

}

function load() {

    $.ajax({
        type: 'GET',
        url: uri + 'categoria/load/',
        success: function (result) {
            $('#accordion').html(result);
        }
    });
}



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

function loadNotificacion(tipo = null) {
    $.ajax({
        type: 'GET',
        url: uri + 'notificaciones/load/' + tipo,
        success: function (result) {
            $('#tabla').html(result);
        }
    });
}



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
}

function loadNotificacion(tipo = null) {
    $.ajax({
      type: 'GET',
      url: uri + 'notificaciones/load/' + tipo,
      success: function(result) {
        $('#tabla').html(result);
      }
    });
}



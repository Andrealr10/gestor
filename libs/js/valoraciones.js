var uri = "http://localhost/gestor/"

// var Toast;

$(document).ready(function () {
    // Toast = Swal.mixin({
    //     toast: true,
    //     position: 'top-end',
    //     showConfirmButton: false,
    //     timer: 6000
    // });
});

$('#denunciar').on('click', function () {
    form = new FormData(document.getElementById("form"));
    $.ajax({
        type: 'POST',
        url: uri + 'valoracion/denunciar',
        data: form,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result);
            // Toast.fire({
            //     type: 'success',
            //     title: '¡Categoria creada con éxito!',
            //     background: '#FFFF',
            //     padding: '10%'
            // })
        }
    });
})

function valorar(archivo) {
    id = 'form'+archivo;
    form = new FormData(document.getElementById(id));
    $.ajax({
        type: 'POST',
        url: uri + 'valoracion/valorar',
        data: form,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result);
            alert('El archivo fue valorado exitosamente :D')
        }
    });
}




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
            Toast.fire({
                type: 'success',
                title: '¡Categoria creada con éxito!',
                background: '#FFFF',
                padding: '10%'
            })
        }
    });
})

function valorar(archivo) {
    id = 'form' + archivo;
    form = new FormData(document.getElementById(id));
    $.ajax({
        type: 'POST',
        url: uri + 'valoracion/valorar',
        data: form,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result);
            loadArchivos(sessionStorage.getItem('cat'), sessionStorage.getItem('sub'))
            Toast.fire({
                type: 'success',
                title: 'Archivo valorado con éxito.',
                background: '#FFFF',
                padding: '10%'
            })
            $(".modal-backdrop").modal('hide');//ocultamos el modal
            $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
            $('.modal-backdrop').remove();//eliminamos el backdrop del modal
        }
    });
}


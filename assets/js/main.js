$(document).ready(function () {
    cargar();
});

//Funcion para cargar los resgistros
function cargar() {
    $.ajax({
        type: 'GET',
        url: 'Usuario/cargar',
        success: function (result) {
            $('#cuerpo').html(result);
        }
    });
}

//Funcion para agregar resgistros
function insertar() {
    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var username = $('#username').val();
    var password = $('#password').val();
    var tipo = $('#tipo').val();
    formu = $('#formu').serialize();
    if (nombre != "" && apellido != "" && username != "" && password != "" && tipo != "") {
        $.ajax({
            type: 'POST',
            url: 'usuario/insertar',
            data: formu,
            success: function (result) {
                console.log(result);
                cargar();
                cancelar();
            }
        });
    } else {
        alert('Debe Agregar Registros');
    }
}

function limpiar() {
    $('#nombre').val('');
    $('#apellido').val('');
    $('#username').val('');
    $('#password').val('');
    $('#tipo').val();
}

function cancelar() {
    $('#list-tab').trigger('click');
    limpiar();
}

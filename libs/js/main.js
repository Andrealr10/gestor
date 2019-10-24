// $(document).ready(function() {
//      $('#lista').DataTable();
// } );
var uri = 'http://localhost/gestor/'

$(document).ready(function () {
    cargar();
});

function cargar() {
    $.ajax({
        type: 'GET',
        url: 'Usuario/cargar',
        success: function (result) {
            $('#cuerpo').html(result);
        }
    });
}


function insertar() {
    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var username = $('#username').val();
    var correo = $('#correo').val();
    var password = $('#password').val();
    var tipo = $('#tipo').val();
    formu = $('#formu').serialize();
    if (nombre != "" && apellido != "" && username != "" && password != "" && tipo != "" && correo != "") {
        $.ajax({
            type: 'POST',
            url: 'usuario/insert' ,
            data: formu,
            success: function (result) {
                console.log(result);
                registrar(correo)
                cargar();
                cancelar();
            }
        });
        
    } else {
        alert('Debe Agregar Registros');
    }
}

function registrar(correo){
    $.ajax({
        type: 'POST',
        url: uri+'mail/registro' ,
        data: {'correo':correo},
        success: function (result) {
            console.log(result);
        }
    });
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

function eliminar(id) {
    alertify.confirm('Desactivar Registro', '¿Desea desactivar el usuario ' + id + '?', function (elim) {
        if (elim) {
            $.ajax({
                type: 'GET',
                url: 'Usuario/delete/' + id,
                success: function (result) {
                    console.log(result);
                    cargar();
                }
            });
            alertify.error('Usuario Desactivado');
        } else {
            alertify.error('Cancel');
        }
    }, "Default Value");
}

function obtener(id) {  
    $.ajax({
        type: 'GET',
        url: 'Usuario/getById/' + id,
        success: function (result) {
            datos = jQuery.parseJSON(result);
            $('#id_usuario').val(datos['id_usuario']);
            $('#nombrea').val(datos['nombre']);
            $('#apellidoa').val(datos['apellido']);
            $('#usernamea').val(datos['username']);
        }
    })
}



function activar(id) {
    $.ajax({
        type: 'GET',
        url: 'Usuario/activar/' + id,
        success: function (result) {
            console.log(result);
            alertify.success('Usuario Activado');
            cargar();
        }
    });
}

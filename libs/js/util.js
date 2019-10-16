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
        }
    });
}




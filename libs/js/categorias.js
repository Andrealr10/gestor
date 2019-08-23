$(document).ready(function () {
    load();
});

$('#myList a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
})

$('#crear').on('click', function () {
    form = new FormData(document.getElementById("form"));
    $.ajax({
        type: 'POST',
        url: 'categoria/crear',
        data: form,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result);
            load();
        }
    });
})

function addsubcat() {
    id = $('#categoria').val();
    form = new FormData(document.getElementById("frmsub"));
    $.ajax({
        type: 'POST',
        url: 'subcategoria/crear',
        data: form,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result);
            subcategorias(id);
        }
    });
}

function load() {
    $.ajax({
        type: 'GET',
        url: 'categoria/load',
        success: function (result) {
            $('#listacat').html(result);
            $('#listcat-tab').trigger('click');
        }
    });
}

function subcategorias(id) {
    $.ajax({
        type: 'GET',
        url: 'subcategoria/find/' + id,
        success: function (result) {
            $('#subcategorias').html(result);
            // $('#listsub-tab').trigger('click');
        }
    });
}

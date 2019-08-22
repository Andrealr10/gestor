$(document).ready(function () {
    load();
});

$('#myList a').on('click', function(e) {
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

function load() {
    $.ajax({
        type: 'GET',
        url: 'categoria/load',
        success: function (result) {
            $('#listacat').html(result);
        }
    });
}

function subcategorias(id) {
    $.ajax({
        type: 'GET',
        url: 'categoria/subcategorias/'+id,
        success: function (result) {
            $('#listasub').html(result);
        }
    });
}

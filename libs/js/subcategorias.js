var uri = "http://localhost/gestor/"

// $(document).ready(function () {
//     load();
// });


$('#crear').on('click', function () {
    form = new FormData(document.getElementById("form"));
    $.ajax({
        type: 'POST',
        url: uri +'subcategoria/crear',
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
        url: uri + 'subcategoria/load/',
        success: function (result) {
            $('#subcategorias').html(result);
            location.reload();
        }
    });
}

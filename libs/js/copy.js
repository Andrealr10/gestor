
function copiar(id) {
    var copyText = document.getElementById("shared" + id);
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    document.getElementById('copiado'+id).innerText = 'Enlace copiado.'
}

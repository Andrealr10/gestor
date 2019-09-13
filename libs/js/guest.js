document.getElementById('contenido').addEventListener("click", ver_categorias);
function ver_categorias(){
    var por_defecto = document.getElementById('por_defecto'); /* Id que se muestra por defecto */
    var categorias = document.getElementById('categorias'); /* Id que se muestra al hacer click en el boton asignado */
    if(categorias.style.display == 'block'){
        categorias.style.display = 'none';
        por_defecto.style.display = 'block';
    }else{
        categorias.style.display = 'block';
        por_defecto.style.display = 'none';
      }
}

document.getElementById('boton_ver').addEventListener("click", content);
function content(e){
    e.preventDefault();
    var carousel = document.getElementById('carousel_div');
    var contenido_subcategorias = document.getElementById('contenido_subcategorias');
    if(contenido_subcategorias.style.display == "block"){
        contenido_subcategorias.style.display = "none";
        carousel.style.display = "block";
    }else{
        contenido_subcategorias.style.display = "block";
        carousel.style.display = "none";
      }
}
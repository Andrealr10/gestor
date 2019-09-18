document.getElementById('contenido').addEventListener("click", ver_categorias);
document.getElementById('c_contenido').addEventListener("click", ver_categorias);
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
document.getElementById('cerrar_div').addEventListener("click", content);
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

/******************************************Funcion para configurar/ocultar los pop-over***********************************************/
/*************************************************************************************************************************************/
$(function(){
    $('[data-toggle="popover"]').popover({
        title: "Opciones <i class='fas fa-user-cog'></i>",
        content: '<a class="btn share mx-1" href="#" type="button"><i class="fas fa-share-alt"></i></a><a class="btn download mx-1" href="#" type="button"><i class="fas fa-download"></i></a>',
        html:true
    }),
    $('.popover-dismiss').popover({
      trigger: 'focus'
    })
})
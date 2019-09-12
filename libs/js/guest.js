function ver_categorias(){
    var por_defecto = document.getElementById('por_defecto');
    var categorias = document.getElementById('categorias');
    if(categorias.style.display == 'block'){
        categorias.style.display = 'none';
        por_defecto.style.display = 'block';
    }else{
        categorias.style.display = 'block';
        por_defecto.style.display = 'none';
      }
}
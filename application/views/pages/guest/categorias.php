
<div class="row">
    <div class="col-md-12 text-center">
        <ol class="breadcrumb">
            <i class="fa fa-home" style="font-size: 20px; margin-right: 15px;"></i>
            <li class="active" id="ruta">SUDOCS / Categorias</li>
        </ol>
    </div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css?family=Alegreya+Sans:900');
.card-cards {
  background: white;
  border-radius: 8px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  cursor: pointer;
  height: 325px;
  margin: 20px;
  padding: 0 20px;
  position: relative;
  -webkit-tap-highlight-color: rgba(0,0,0,0.025);
  text-align: center;
  transition: height 1000ms;
  width: 300px;
}
@media (max-width: 767px) {
  .card-cards {
    left: calc(50% - 20px);
    transform: translateX(-50%);
  }
}
.card-cards.expanded {/*Tamaño del card cuando se expande*/
  height: 450px;
}
.label-cards {
  margin-top: 30px;
  transform: translateY(10px);
  transition: transform 1000ms;
}
.card-cards.expanded .label-cards {
  transform: translateY(0);
}
.text-cards {
  clip-path: polygon(0% 100%, 0 -90%, 50% -5%, 100% -90%, 100% 100%);
  -webkit-clip-path: polygon(0% 100%, 0 -90%, 50% -5%, 100% -90%, 100% 100%);
  transition: clip-path 1000ms;
}
.card-cards.expanded .text-cards {
  clip-path: polygon(0% 100%, 0 -100%, 50% -15%, 100% -100%, 100% 100%);
  -webkit-clip-path: polygon(0% 100%, 0 -100%, 50% -15%, 100% -100%, 100% 100%);
}
.text-content-cards {
  transform: translateY(-300px);
  transition: transform 1000ms;
}
.card-cards.expanded .text-content-cards {
  transform: translateY(0px);
}
.chevron-cards {
  position: absolute;
  bottom: 20px;
  left: calc(50% - 15px);
  transform-origin: 50%;
  transform: rotate(180deg);
  transition: transform 1000ms;
}
.card-cards.expanded .chevron-cards {
  transform: rotate(0deg);
}
::-webkit-scrollbar{
  width: 8px;
}
::-webkit-scrollbar-track{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
}
::-webkit-scrollbar-thumb{
  border-radius: 10px;
  background-color: gray;
}
</style>
<div class="row">
    <ul class="cards">
        <?php foreach ($categorias as $categoria) { ?>
                     <li class="cards_item">
                
                <div class="card-cards">
                    <img class="label-cards" src="<?= base_url() . $categoria->imagen ?>" alt="" width="150px">
                    <h3 class="label-cards"><?= $categoria->nombre ?></h3>
                    <p class="card_text"><?= $categoria->descripcion ?></p>
                    <div class="text-cards">
                        <div>
                            <p onclick="loadSubcategorias('<?= $categoria->nombre ?>')" class="text-center btn btnn card_btn">Ver contenido</p>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>

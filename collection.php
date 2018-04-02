<?php
include_once('lib/header.php');
?>
<br><br><br><br><br>
<div class="row mx-0">
  <div class="col-lg-3 d-none d-lg-block">
    <ul class="list-unstyled ml-3">
      <strong style="font-size: 17px; margin-left: -9px;">COLECCIÓN</strong>
      <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Novedades</a></li>
      <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Camisetas</a></li>
      <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Rebecas</a></li>
      <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Chaquetas</a></li>
      <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Parkas</a></li>
      <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Fundas silla de paseo</a></li>
    </ul>
  </div>
  <div class="d-lg-none p-3 col-12 col-sm-9">
    <select class="form-control p-0" style="border: 2px solid #0071ce; color: #0071ce; font-weight: 400;">
      <option selected disabled>Selecciona...</option>
      <option value="0">Novedades</option>
      <option>Camisetas</option>
      <option>Chaquetas</option>
      <option>Parkas</option>
      <option>Fundas silla de paseo</option>
    </select>
  </div>
  <div class="col-lg-9">

    <?php // NOTE: Banner, sólo se debe mostrar en Novedades ?>
    <img src="./img/banner/banner1.jpg" class="w-100 mb-4">

    <?php // NOTE: Título de la Colección ?>
    <div class="row mx-0">
      <h3 class="text-primary font-weight-bold mb-0">Novedades</h3>

      <?php // NOTE: Botones para cambiar el tamaño de las col ?>
      <span class="my-auto text-right text-muted w-100 pr-3" style="font-size: 38px;"><span class="pr-2"><a class="fa fa-th-large border-dark border-right" id="btn_2col"></a></span><span class="pl-2" style="border-left: 1px solid"><a class="fa fa-th" id="btn_3col"></a></span></span>
    </div>
    <div class="row mx-0 d-flex w-100">

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="mb-4 cards mx-auto">
        <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
        <div class="card-body px-2 py-1">
          <p class="card-title text-center text-truncate">Camiseta corta niña con lazos</p>
          <p class="card-text text-center mb-2" style="font-weight: 400;">$ 319.00</p>
          <p class="card-text text-center mb-3"><strong>Más colores</strong></p>

<?php // NOTE: Aquí van los colores de cada articulo ?>
          <div class="w-100 d-inline-flex justify-content-center mb-3">
            <span class="mr-1 rounded-circle" style="background-color: rgb(229, 222, 90); width: 1.2rem; height: 1.2rem;" data-toggle="tooltip" data-placement="top" title="Limonada"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(91, 117, 230); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(91, 205, 230); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(224, 66, 66); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(230, 91, 199); width: 1.2rem; height: 1.2rem;"></span>
          </div>

<?php // NOTE:  Boton añadir ?>
          <p class="text-center mb-0"><a href="#" class="btn btn-secondary px-0 text-center w-100" style="font-size:0.8rem">AÑADIR A LA BOLSA</a></p>
        </div>
      </div>

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="mb-4 cards mx-auto">
        <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
        <div class="card-body px-2 py-1">
          <p class="card-title text-center text-truncate">Camiseta corta niña con lazos</p>
          <p class="card-text text-center mb-2" style="font-weight: 400;">$ 319.00</p>
          <p class="card-text text-center mb-3"><strong>Más colores</strong></p>

<?php // NOTE: Aquí van los colores de cada articulo ?>
          <div class="w-100 d-inline-flex justify-content-center mb-3">
            <span class="mr-1 rounded-circle" style="background-color: rgb(229, 222, 90); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(91, 117, 230); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(91, 205, 230); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(224, 66, 66); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(230, 91, 199); width: 1.2rem; height: 1.2rem;"></span>
          </div>

<?php // NOTE:  Boton añadir ?>
          <p class="text-center mb-0"><a href="#" class="btn btn-secondary px-0 text-center w-100" style="font-size:0.8rem">AÑADIR A LA BOLSA</a></p>
        </div>
      </div>

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="mb-4 cards mx-auto">
        <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
        <div class="card-body px-2 py-1">
          <p class="card-title text-center text-truncate">Camiseta corta niña con lazos</p>
          <p class="card-text text-center mb-2" style="font-weight: 400;">$ 319.00</p>
          <p class="card-text text-center mb-3"><strong>Más colores</strong></p>

<?php // NOTE: Aquí van los colores de cada articulo ?>
          <div class="w-100 d-inline-flex justify-content-center mb-3">
            <span class="mr-1 rounded-circle" style="background-color: rgb(229, 222, 90); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(91, 117, 230); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(91, 205, 230); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(224, 66, 66); width: 1.2rem; height: 1.2rem;"></span>
            <span class="mr-1 rounded-circle" style="background-color: rgb(230, 91, 199); width: 1.2rem; height: 1.2rem;"></span>
          </div>

<?php // NOTE:  Boton añadir ?>
          <p class="text-center mb-0"><a href="#" class="btn btn-secondary px-0 text-center w-100" style="font-size:0.8rem">AÑADIR A LA BOLSA</a></p>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="row mx-0">
  <div class="col-2">
    <img class="w-100 px-4 pb-4" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="">
    <div class="w-100">
      <img class="w-100 px-4 pb-4" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/2.jpg" alt="">
    </div>
    <div class="w-100">
      <img class="w-100 px-4 pb-4" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/3.jpg" alt="">
    </div>
  </div>
  <div class="col-5 px-0">
    <img class="w-100" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="">
  </div>
  <div class="col-5 pl-5">

    <?php // NOTE: Título del artículo ?>
    <h4><b>Camiseta corta niña con lazos</b></h4>
    <div class="w-100">
      <br>
      <span>Art . 28-01008-069</span>
    </div>
    <div class="w-100 mb-3">
      <b>Color: Limonada</b>
    </div>
    <div class="w-100 d-inline-flex">

      <?php // NOTE: Aquí van los colores de cada articulo ?>
      <span class="mr-1 rounded-circle" style="background-color: rgb(229, 222, 90); width: 1.2rem; height: 1.2rem;"></span>
      <span class="mr-1 rounded-circle" style="background-color: rgb(91, 117, 230); width: 1.2rem; height: 1.2rem;"></span>
      <span class="mr-1 rounded-circle" style="background-color: rgb(91, 205, 230); width: 1.2rem; height: 1.2rem;"></span>
      <span class="mr-1 rounded-circle" style="background-color: rgb(224, 66, 66); width: 1.2rem; height: 1.2rem;"></span>
      <span class="mr-1 rounded-circle" style="background-color: rgb(230, 91, 199); width: 1.2rem; height: 1.2rem;"></span>

    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="w-100 mb-3">
      <select class="form-control p-0" style="border: 2px solid #0071ce; color: #0071ce; font-weight: 400;">
        <option selected disabled>Selecciona tu talla...</option>
        <option value="0">0-1 Meses</option>
        <option>1-2 Meses</option>
        <option>2-4 Meses</option>
        <option>4-6 Meses</option>
        <option>6-9 Meses</option>
        <option>12 Meses</option>
      </select>
    </div>
    <p class="text-center"><a href="#" class="btn btn-secondary px-0 text-center w-100" style="font-size:0.8rem; background-color: #0071ce;"><b>AÑADIR A LA BOLSA</b></a></p>
  </div>
</div>

<?php
include_once('lib/footer.php');
?>
</div>
</body>
<script src="js/collection/collection.js"></script>
<script src="js/collection/init.js"></script>
<script src="js/collection/dao.js"></script>
<script src="js/collection/function.js"></script>
</html>

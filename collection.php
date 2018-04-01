<?php
include_once('lib/header.php');
?>
<br><br><br><br><br>
<div class="row mx-0">
  <div class="col-lg-3 d-none d-lg-block">
    <ul>
      <strong>Collección</strong>
      <li><a class="text-primary" href="#">Novedades</a></li>
      <li><a class="text-primary" href="#">Camisetas</a></li>
      <li><a class="text-primary" href="#">Rebecas</a></li>
      <li><a class="text-primary" href="#">Chaquetas</a></li>
      <li><a class="text-primary" href="#">Parkas</a></li>
      <li><a class="text-primary" href="#">Fundas silla de paseo</a></li>
    </ul>
  </div>
  <div class="d-lg-none p-3 col-12 col-sm-9">
    <select class="form-control p-0">
      <option selected>Elegir...</option>
      <option value="0">Novedades</option>
      <option>Camisetas</option>
      <option>Chaquetas</option>
      <option>Parkas</option>
      <option>Fundas silla de paseo</option>
    </select>
  </div>
  <div class="col-lg-9">

    <?php // NOTE: Banner, sólo se debe mostrar en Novedades ?>
    <img src="./img/banner/banner1.jpg" class="w-100">

    <?php // NOTE: Título de la Colección ?>
    <div class="row mx-0">
      <h3 class="my-4 text-primary font-weight-bold">Novedades</h3>
      <span class="my-auto text-right text-muted w-100 pr-3" style="font-size: 38px;"><span class="pr-2"><a class="fa fa-th-large border-dark border-right"></a></span><span class="pl-2" style="border-left: 1px solid"><a class="fa fa-th"></a></span></span>
    </div>
    <div class="row mx-0">

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="col-12 col-sm-6 col-lg-4 mb-4 px-1">
        <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
        <div class="card-body px-2 py-1">
          <p class="card-title text-center text-truncate">Camiseta corta niña con lazos</p>
          <p class="card-text text-center mb-2">$ 319.00</p>
          <p class="card-text text-center mb-3"><strong>Más colores</strong></p>
          <p class="text-center mb-0"><a href="#" class="btn btn-secondary px-0 text-center w-100" style="font-size:0.8rem">AÑADIR A LA BOLSA</a></p>
        </div>
      </div>

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="col-12 col-sm-6 col-lg-4 mb-4 px-1">
        <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
        <div class="card-body px-2 py-1">
          <p class="card-title text-center text-truncate">Camiseta corta niña con lazos</p>
          <p class="card-text text-center mb-2">$ 319.00</p>
          <p class="card-text text-center mb-3"><strong>Más colores</strong></p>
          <p class="text-center mb-0"><a href="#" class="btn btn-secondary px-0 text-center w-100" style="font-size:0.8rem">AÑADIR A LA BOLSA</a></p>
        </div>
      </div>

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="col-12 col-sm-6 col-lg-4 mb-4 px-1">
        <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
        <div class="card-body px-2 py-1">
          <p class="card-title text-center text-truncate">Camiseta corta niña con lazos</p>
          <p class="card-text text-center mb-2">$ 319.00</p>
          <p class="card-text text-center mb-3"><strong>Más colores</strong></p>
          <p class="text-center mb-0"><a href="#" class="btn btn-secondary px-0 text-center w-100" style="font-size:0.8rem">AÑADIR A LA BOLSA</a></p>
        </div>
      </div>

    </div>
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

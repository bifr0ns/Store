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
    <select class="custom-select w-100">
      <option selected>Elegir...</option>
      <option>Novedades</option>
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
    <h3 class="my-4 text-primary font-weight-bold">Novedades</h3>
    <div class="row mx-0">

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="col-12 col-sm-6 col-lg-4 mb-4 px-1">
        <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
        <div class="card-body px-2">
          <p class="card-title text-center text-truncate">Camiseta corta niña con lazos</p>
          <p class="card-text text-center">$ 319.00</p>
          <p class="card-text text-center"><strong>Más colores</strong></p>
          <p class="text-center mb-0"><a href="#" class="btn btn-secondary px-0 text-center w-100" style="font-size:0.8rem">AÑADIR A LA BOLSA</a></p>
        </div>
      </div>

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="col-12 col-sm-6 col-lg-4 mb-4 px-1">
        <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
        <div class="card-body px-2">
          <p class="card-title text-center text-truncate">Camiseta corta niña con lazos</p>
          <p class="card-text text-center">$ 319.00</p>
          <p class="card-text text-center"><strong>Más colores</strong></p>
          <p class="text-center mb-0"><a href="#" class="btn btn-secondary px-0 text-center w-100" style="font-size:0.8rem">AÑADIR A LA BOLSA</a></p>
        </div>
      </div>

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="col-12 col-sm-6 col-lg-4 mb-4 px-1">
        <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
        <div class="card-body px-2">
          <p class="card-title text-center text-truncate">Camiseta corta niña con lazos</p>
          <p class="card-text text-center">$ 319.00</p>
          <p class="card-text text-center"><strong>Más colores</strong></p>
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

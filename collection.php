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
  <div class="col-lg-9">

    <?php // NOTE: Banner, sólo se debe mostrar en Novedades ?>
    <img src="./img/banner/banner1.jpg" class="w-100">

    <?php // NOTE: Título de la Colección ?>
    <h3 class="my-4 text-primary font-weight-bold">Novedades</h3>
    <div class="row mx-0">

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="col-4 px-4">
        <div class="card">
          <img class="card-img-top" src="./img/recien_nacido_f/camisetas/camiseta_corta_niña_con_lazos/1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-title text-center">Camiseta corta niña con lazos</p>
            <p class="card-text text-center">$ 319.00</p>
            <p class="card-text text-center"><strong>Más colores</strong></p>
            <p class="mb-0 text-center"><a href="#" class="btn btn-secondary">Añadir a la bolsa</a></p>
          </div>
        </div>
      </div>

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="col-4">
        <div class="card">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <?php // NOTE: Aquí empieza la carta ?>
      <div class="col-4">
        <div class="card">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
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

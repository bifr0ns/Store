<?php
include_once('lib/header.php');
?>
<br><br><br><br><br>
<div class="row mx-0">
  <div class="col-lg-3 d-none d-lg-block">
      <input type="hidden" class="form-control" id="category" name="category" value="<?php echo $_POST['category']?>">
      <input type="hidden" class="form-control" id="subcategory" name="subcategory" value="<?php echo $_POST['subcategory']?>">
      <strong class="ml-3" style="font-size: 17px; margin-left: -9px;">COLECCIÓN</strong>
      <!--<ul class="list-unstyled ml-3">
              <strong style="font-size: 17px; margin-left: -9px;">COLECCIÓN</strong>
              <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Novedades</a></li>
              <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Camisetas</a></li>
              <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Rebecas</a></li>
              <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Chaquetas</a></li>
              <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Parkas</a></li>
              <li><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Fundas silla de paseo</a></li>
            </ul>-->
      <div id="collections" class="d-flex flex-column ml-3">
          <!--<div class="px-2 mb-0"><span class=""><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Primary</a></span></div>
          <div class="px-2 mb-0"><span class=""><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Primary</a></span></div>
          <div class="px-2 mb-0"><span class=""><a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">Primary</a></span></div>-->
      </div>
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
  <div class="col-5">

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

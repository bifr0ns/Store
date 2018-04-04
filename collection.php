<?php
include_once('lib/header.php');
?>
<br><br><br><br><br>
<div class="row mx-0">
  <div class="col-lg-3 d-none d-lg-block">
      <input type="text" class="form-control" id="category" name="category" value="<?php echo $_POST['category']?>">
      <input type="text" class="form-control" id="subcategory" name="subcategory" value="<?php echo $_POST['subcategory']?>">

      <?php // NOTE: Colecciónes ?>
      <strong class="ml-3" style="font-size: 17px; margin-left: -9px;">COLECCIÓN</strong>

      <div id="collections" class="d-flex flex-column ml-3">
      </div>

  </div>

  <?php // NOTE: Este Select pasarlo a recursivo para rellenar las colection. ?>
  <div class="d-lg-none p-3 col-12 col-sm-9">
    <select class="form-control p-1" style="border: 2px solid #0071ce; color: #0071ce; font-weight: 400;">
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
    <img src="./img/banner/banner<?php echo $_POST['category']?>.jpg" class="w-100 mb-4">

    <?php // NOTE: Título de la Colección ?>
    <div id="collection-title" class="row mx-0">
    </div>

    <div class="row mx-0">
      <?php // NOTE: Botones para cambiar el tamaño de las col ?>
      <span id="btn_resize_products" class="my-auto text-right text-muted w-100 pr-3" style="font-size: 38px;"><span class="pr-2"><a class="fa fa-th-large border-dark border-right" id="btn_2col"></a></span><span class="pl-2" style="border-left: 1px solid"><a class="fa fa-th" id="btn_3col"></a></span></span>
    </div>

    <?php // NOTE: Cards of products ?>
    <div id='cards_container' class="row mx-0">
    </div>
  </div>
</div>




<?php // NOTE: Aquí empieza el MODAL de la vista previa del artículo ?>
<div class="modal fade pr-0" id="modal-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <?php // NOTE: Título del artículo ?>
        <h5 class="modal-title mx-auto"><b>Camiseta corta niña con lazos</b></h5>

        <?php // NOTE: Botón para cerrar el Modal ?>
        <button type="button" class="close ml-0 px-0 float-left" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php // NOTE: Imagenes, precio y descripción del art. ?>
      <div class="row mx-0 mt-3 justify-content-center">
        <div class="col-12 col-lg-2 text-center">
          <img id="modal_img_1" class="col-10 col-lg-12 px-0 pb-2" src="" alt="">
          <img id="modal_img_2" class="col-5 col-lg-12 px-0 pb-2" src="" alt="">
          <img id="modal_img_3" class="col-5 col-lg-12 px-0 pb-2" src="" alt="">
        </div>
        <div class="d-none d-lg-block col-lg-5 px-0">
          <img id="modal_img_prin" class="w-100" src="" alt="">
        </div>
        <div class="col-12 col-lg-5 pl-4">
          <div class="w-100">
            <br>
            <span id="modal_art_color"></span>
            <b id="modal_price" class="float-right" style="font-size: 22px;"></b>
          </div>
          <div class="w-100 mb-3">
            <b id="modal_b_color"></b>
          </div>
          <div id="modal_colors" class="w-100 d-inline-flex">

          </div>
          <br>
          <br>
          <br>

          <?php // NOTE: Link para mostrar la imagen de tallas ?>
          <div class="w-100">
            <div class="float-right" style="color: #0071ce; font-size: 17px;">
              <span class="fa fa-tag"></span>
              <a><strong>Guía de Tallas</strong></a>
            </div>
          </div>

          <?php // NOTE: Aquí se muestran las tallas ?>
          <div class="w-100 mb-3">
            <select class="form-control p-1" style="border: 2px solid #0071ce; color: #0071ce; font-weight: 400;">
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

      <?php // NOTE: la descripción y más del articulo ?>
      <div class="row mx-0 mt-2 justify-content-center">
        <div class="text-center col-11">
          <ul class="nav nav-tabs card-header-tabs mx-0">
            <li class="nav-item">
              <a class="nav-link active px-2"><b>Descripción</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2"><b>Composición</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2"><b>Envío</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2"><b>Devoluciones</b></a>
            </li>
          </ul>
          <div class="card-body">
            <p class="text-justify" style="font-weight: 400;">Camiseta corta de verano para niña, diseño sencillo con cuello canalé destacando bonitas mangas de tipo ranglan, acabados en volante con terminación richie. Parte baja adornada con bonitos lazos de patrón finalizando en volantes, prenda fresca y elegante.</p>
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

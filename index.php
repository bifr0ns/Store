<?PHP
include_once('lib/header.php');
?>
<div class="row">
    <div class="col-md-12">
        <div class="collapse" id="collapse_cat">
            <div class="row categorias"></div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Sección izquierda -->
    <!--<div class="col-lg-2 col-md-2 col-sm-2 col-2 ml-5">
        <br>
        <div class="row justify-content-md-center">
            <ul class="nav flex-column">

            </ul>
        </div>
    </div>
     /Sección izquierda -->

    <!-- Sección derecha -->
    <div class="col-lg-11 col-md-11 col-sm-11 col-11 mx-3">
        <br>
        <h4>Recomendado para ti:</h4>
        <div class="row row border rounded p-2 mb-3" style="background-color: #ececec;">
            <!--<div class="col-lg-2 col-md-3 col-sm-6 col-6 mb-3"><div class="card-sinsombra border border-dark product h-100"><img class="card-img-top" alt="Card image cap" src="/img/product.png"><div class="card-body p-2"><p class="precio">$3667</p><p class="text-left text-truncate font-weight-bold text-danger mb-1" style="font-size: small;">Makeup</p><h6 class="card-title text-left text-truncate font-italic mt-1">Nombre Producto</h6><p class="card-text text-left font-weight-light"><small>Descripcion del producto Descripcion del producto</small></p><div class="row justify-content-md-center"><div class="col-md-6"><span class="btn btn-outline-dark btn-pill add_toCart" data-id="111"><i class="fa fa-shopping-cart fa-1x"></i></span></div></div></div></div></div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-6 mb-3"><div class="card-sinsombra border border-dark product h-100"><img class="card-img-top" alt="Card image cap" src="/img/product.png"><div class="card-body p-2"><p class="precio">$3667</p><p class="text-left text-truncate font-weight-bold text-danger mb-1" style="font-size: small;">Makeup</p><h6 class="card-title text-left text-truncate font-italic mt-1">Nombre Producto</h6><p class="card-text text-left font-weight-light"><small>Descripcion del producto Descripcion del producto</small></p><div class="row justify-content-md-center"><div class="col-md-6"><span class="btn btn-outline-dark btn-pill add_toCart" data-id="111"><i class="fa fa-shopping-cart fa-1x"></i></span></div></div></div></div></div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-6 mb-3"><div class="card-sinsombra border border-dark product h-100"><img class="card-img-top" alt="Card image cap" src="/img/product.png"><div class="card-body p-2"><p class="precio">$3667</p><p class="text-left text-truncate font-weight-bold text-danger mb-1" style="font-size: small;">Makeup</p><h6 class="card-title text-left text-truncate font-italic mt-1">Nombre Producto</h6><p class="card-text text-left font-weight-light"><small>Descripcion del producto Descripcion del producto</small></p><div class="row justify-content-md-center"><div class="col-md-6"><span class="btn btn-outline-dark btn-pill add_toCart" data-id="111"><i class="fa fa-shopping-cart fa-1x"></i></span></div></div></div></div></div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-6 mb-3"><div class="card-sinsombra border border-dark product h-100"><img class="card-img-top" alt="Card image cap" src="/img/product.png"><div class="card-body p-2"><p class="precio">$3667</p><p class="text-left text-truncate font-weight-bold text-danger mb-1" style="font-size: small;">Makeup</p><h6 class="card-title text-left text-truncate font-italic mt-1">Nombre Producto</h6><p class="card-text text-left font-weight-light"><small>Descripcion del producto Descripcion del producto</small></p><div class="row justify-content-md-center"><div class="col-md-6"><span class="btn btn-outline-dark btn-pill add_toCart" data-id="111"><i class="fa fa-shopping-cart fa-1x"></i></span></div></div></div></div></div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-6 mb-3"><div class="card-sinsombra border border-dark product h-100"><img class="card-img-top" alt="Card image cap" src="/img/product.png"><div class="card-body p-2"><p class="precio">$3667</p><p class="text-left text-truncate font-weight-bold text-danger mb-1" style="font-size: small;">Makeup</p><h6 class="card-title text-left text-truncate font-italic mt-1">Nombre Producto</h6><p class="card-text text-left font-weight-light"><small>Descripcion del producto Descripcion del producto</small></p><div class="row justify-content-md-center"><div class="col-md-6"><span class="btn btn-outline-dark btn-pill add_toCart" data-id="111"><i class="fa fa-shopping-cart fa-1x"></i></span></div></div></div></div></div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-6 mb-3"><div class="card-sinsombra border border-dark product h-100"><img class="card-img-top" alt="Card image cap" src="/img/product.png"><div class="card-body p-2"><p class="precio">$3667</p><p class="text-left text-truncate font-weight-bold text-danger mb-1" style="font-size: small;">Makeup</p><h6 class="card-title text-left text-truncate font-italic mt-1">Nombre Producto</h6><p class="card-text text-left font-weight-light"><small>Descripcion del producto Descripcion del producto</small></p><div class="row justify-content-md-center"><div class="col-md-6"><span class="btn btn-outline-dark btn-pill add_toCart" data-id="111"><i class="fa fa-shopping-cart fa-1x"></i></span></div></div></div></div></div>-->
        </div>
        <hr>
        <div class="row justify-content-md-left products">
        </div>
    </div>
    <!-- /Sección derecha -->

    <!-- /Modal Login -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Iniciar Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="div_alert"></div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 p-4 border border-light rounded">
                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input type="text" class="form-control" id="user" name="user">
                            </div>
                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary btn_login">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Login -->

    <!-- /Modal Details -->
    <div class="modal fade" id="ModalDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="product_name"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 img_prod">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 cat_prod">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 nom_prod">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 desc_prod">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <span class="btn text-primary btn_recomendados">Productos similares</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary btn_login">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Details -->

    <!-- /Modal Carrito -->
    <div class="modal fade" id="ModalCarrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Carrito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="body_cart"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Comprar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Carrito -->



</div>
        </div>
    </body>
<script src="js/structure/structure.js"></script>
<script src="js/structure/init.js"></script>
<script src="js/structure/dao.js"></script>
<script src="js/structure/function.js"></script>

</html>
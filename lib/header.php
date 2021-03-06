<?php

$ip_static = 'http://genesysmi.site';
$route_static = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Genesysmi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Dependencies -->
    <link rel="stylesheet" type="text/css" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/shards.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <!-- Optional JavaScript -->
    <!-- JavaScript Dependencies: jQuery, Popper.js, Bootstrap JS, Shards JS -->
    <script src="/js/jquery-3.2.1.slim.min.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/shards.js"></script>
    <script type="text/javascript" src="/js/jquery.validate.min.js"></script>
</head>
<body class="gray">
    <div class="container-fluid px-0">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white pt-1 px-2 align-items-start rounded-bottom">
            <button class="navbar-toggler align-self-center border-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars fa-2x" style="color:#0072CE"></i>
            </button>
            <a class="navbar-brand mx-auto" href="<?php echo $ip_static ?>">
                <img src="./img/logo.svg" alt="Responsive image" style="width:200px;">
            </a>
            <button type="button" class="btn btn-outline-primary align-self-center p-2 icon-cart d-lg-none">
                <i class="fa fa-shopping-bag fa-2x" style="color:#0072CE"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div id="collapse-pc" class="d-none d-lg-block w-100">
                    <ul class="navbar-nav pt-2 w-100 align-items-start">
                        <li class="nav-item px-3 genders">
                            <div class="d-flex flex-column">
                                <div class="h6 my-0 py-0 text-center font-weight-bold" style="color:#0072CE">Recién nacido</div>
                                <div class="py-0 text-center">0 a 12 meses</div>
                                <div class="py-0 text-center item-gender" style="display: none;">
                                    <i class="fa fa-venus fa-1x icon-female font-weight-bold  btn_collection_by_gender" data-id="1"></i>
                                    <i class="fa fa-mars fa-1x icon-male px-1 font-weight-bold  btn_collection_by_gender" data-id="2"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item px-3 genders">
                            <div class="d-flex flex-column">
                                <div class="h6 my-0 py-0 text-center font-weight-bold" style="color:#0072CE">Baby</div>
                                <div class="py-0 text-center">6 a 36 meses</div>
                                <div class="py-0 text-center item-gender" style="display: none;">
                                    <i class="fa fa-venus fa-1x icon-female font-weight-bold  btn_collection_by_gender" data-id="3"></i>
                                    <i class="fa fa-mars fa-1x icon-male font-weight-bold  btn_collection_by_gender" data-id="4"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item px-3 genders">
                            <div class="d-flex flex-column">
                                <div class="h6 my-0 py-0 text-center font-weight-bold" style="color:#0072CE">Mini</div>
                                <div class="py-0 text-center">&nbsp;2 a 9 años&nbsp;</div>
                                <div class="py-0 text-center item-gender" style="display: none;">
                                    <i class="fa fa-venus fa-1x icon-female font-weight-bold  btn_collection_by_gender" data-id="5"></i>
                                    <i class="fa fa-mars fa-1x icon-male font-weight-bold  btn_collection_by_gender" data-id="6"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item px-3 genders">
                            <div class="d-flex flex-column">
                                <div class="h6 my-0 py-0 text-center font-weight-bold" style="color:#0072CE">Junior</div>
                                <div class="py-0 text-center">8 a 16 años</div>
                                <div class="py-0 text-center item-gender" style="display: none;">
                                    <i class="fa fa-venus fa-1x icon-female font-weight-bold  btn_collection_by_gender" data-id="7"></i>
                                    <i class="fa fa-mars fa-1x icon-male font-weight-bold  btn_collection_by_gender" data-id="8"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item px-3">
                            <div class="d-flex flex-column">
                                <div class="h6 my-0 py-0 text-center font-weight-bold  btn_collection_by_gender" style="color:#0072CE" data-id="9">Puericultura<br>y regalos</div>
                                <div class="py-0"></div>
                            </div>
                        </li>
                        <li class="nav-item px-3 ml-auto">
                            <div class="d-flex flex-column btn_cart">
                                <button type="button" class="btn btn-outline-primary p-2 icon-cart">
                                    <i class="fa fa-shopping-bag fa-2x" style="color:#0072CE"></i>
                                </button>
                            </div>
                        </li>
                        <li class="nav-item px-3">
                            <div class="d-flex flex-column btn_user">
                                <button type="button" class="btn btn-outline-primary p-2 icon-user">
                                    <i class="fa fa-user-circle fa-2x" style="color:#0072CE"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="collapse-cel" class="d-lg-none">
                    <ul class="list-group">
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE"><i class="fa fa-home fa-1x"></i> &nbsp;&nbsp;Inicio</button>
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE"><i class="fa fa-user-circle fa-1x"></i> &nbsp;&nbsp;Cuenta</button>
                    </ul>
                    <hr>
                    <ul class="list-group">
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE">Recién nacido (0 a 12 meses) &nbsp;&nbsp;<i class="fa fa-female fa-1x" style="color: #f49eb6"></i></button>
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE">Recién nacido (0 a 12 meses) &nbsp;&nbsp;<i class="fa fa-male fa-1x" style="color: #57c8f4"></i></button>
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE">Baby (6 a 36 meses) &nbsp;&nbsp;<i class="fa fa-female fa-1x" style="color: #f49eb6"></i></button>
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE">Baby (6 a 36 meses) &nbsp;&nbsp;<i class="fa fa-male fa-1x" style="color: #57c8f4"></i></button>
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE">Mini (2 a 9 años) &nbsp;&nbsp;<i class="fa fa-female fa-1x" style="color: #f49eb6"></i></button>
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE">Mini (2 a 9 años) &nbsp;&nbsp;<i class="fa fa-male fa-1x" style="color: #57c8f4"></i></button>
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE">Junior (8 a 16 años) &nbsp;&nbsp;<i class="fa fa-female fa-1x" style="color: #f49eb6"></i></button>
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE">Junior (8 a 16 años) &nbsp;&nbsp;<i class="fa fa-male fa-1x" style="color: #57c8f4"></i></button>
                        <button type="button" class="list-group-item list-group-item-action p-2 h6 my-0 py-0 text-left font-weight-bold" style="color:#0072CE">Puericultura y regalos</button>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Modal User -->
        <div class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <p class="h3 font-weight-bold" style="color:#0072CE">Iniciar sesión</p>
                                <form id="frm_login">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="micuenta@email.com">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="contraseña">Contraseña</label>
                                        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="*********">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                                </form>
                            </div>
                            <div class="col-md-6 col-12">
                                <p class="h3 font-weight-bold" style="color:#0072CE">Registrarme</p>
                                Regístrate y tendrás servicios personalizados, como por ejemplo:
                                <ul><li>Podrás comprar sin tener que rellenar de nuevo los formularios</li>
                                <li>Podrás crear tu wishlist o lista de deseos </li>
                                <li>Te informaremos puntualmente sobre nuestras ofertas o promociones</li></ul>
                                <button type="submit" class="btn btn-primary btn_go_registration" onClick="/registration.php">Registrarme</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal User -->

        <script src="lib/init.js"></script>
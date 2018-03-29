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
    <script src="js/shards.js"></script>
    <script src="js/easytimer/easytimer.js"></script>
</head>
<body class="gray">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-light tienda" href="#">Tienda</a>
            <a class="navbar-brand text-light btn_categorias" data-toggle="collapse" href="#collapse_cat" aria-expanded="false" aria-controls="collapseExample">Categorías</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item openModalCart">
                        <a class="nav-link text-success" href="#"><i class="fa fa-shopping-cart fa-1x"></i> Carrito <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto div_login">

                </ul>
                <ul class="navbar-nav float-right">
                <!--<form class="form-inline my-2">-->
                    <div class="input-group">
                        <input class="form-control border border-success" id="search" name="search" placeholder="Buscar">
                    </div>
                    &nbsp;<span class="btn btn-outline-success my-2 my-sm-0 btn_search">Search</span>
                    <!--</form>-->
                    </ul>
                </div>
            </nav>
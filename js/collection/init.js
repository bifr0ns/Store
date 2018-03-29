$(function($) {

    structure.user = '';

    var timer = new Timer();
    var cont;
    timer.addEventListener('secondsUpdated', function (e) {
        cont = timer.getTimeValues().toString();
    });

    var login = structure.dao.getlogin();
    login.done(function (response) {

       if(response == false){
           structure.user = '';
           $('.div_login').empty();
           $('.div_login').append(  '<li class="nav-item">'+
                                        '<a class="nav-link text-success openModalLogin" href="#"><i class="fa fa-sign-in fa-1x"></i> Iniciar Sesión <span class="sr-only">(current)</span></a>'+
                                    '</li>');
       } else {
           structure.user = response;
           $('.div_login').empty();
           $('.div_login').append(  '<li class="nav-item">'+
               '<p class="text-light">Bienvenido <strong>'+response.name+'</strong> <a href="#" class="text-danger login_out">Salir</a></p>'+
               '</li>');
       }
    });

    var cats = structure.dao.get_cat();
    cats.done(function (response) {
        structure.function.print_cat(response);
    });

    var prods = structure.dao.listar_prod();
    prods.done(function (response) {
        $('.products').empty();
       structure.function.print_products(0,response.length,response);
    });
    var rec = structure.dao.recomendaciones();
    rec.done(function (response) {
        console.log(response);
    });
    $('.tienda').on('click',function () {
        var prods = structure.dao.listar_prod();
        prods.done(function (response) {
            $('#search').val('');
            $('.products').empty();
            structure.function.print_products(0,response.length,response);
        });
    });

    $('.btn_search').on('click', function(){
       var ajax = structure.dao.search_prod($('#search').val());
       ajax.done(function (response) {
           $('.products').empty();
           if(response.length == 0){
               $('.products').append('<p>No se han encontrado productos relacionados con: <strong>'+$('#search').val()+'</strong></p>');
           } else {
               structure.function.print_products(0, response.length, response);
           }
       })
    });

    $('#usuarios').on('change',function () {
        $('.tienda').trigger('click');
    });


    $(document).on('click','.id_subcat',function () {
       var ajax = structure.dao.search_cat($(this).attr('data-id'));
       ajax.done(function (response) {
           $('.products').empty();
           if(response.length == 0){
               $('.products').append('<p>No hay productos de esta categoría</p>');
               $('#collapse_cat').collapse('hide');
           } else {
               structure.function.print_products(0, response.length, response);
               $('#collapse_cat').collapse('hide');
           }
       });
    });

    $('.openModalCart').on('click',function () {
        var ajax = structure.dao.getCart();
        ajax.done(function (response) {
            structure.function.print_cart(response);
            $('#ModalCarrito').modal('show');
        });
    });

    $(document).on('click', '.openModalLogin', function () {
        $('#ModalLogin').modal('show');
    });

    $(document).on('click', '.add_toCart', function () {
        //$('#ModalDetails').modal('hide');
        var ajax = structure.dao.add_toCart($(this).attr('data-id'));
        ajax.done(function (response) {
            structure.function.print_cart(response);
            $('#ModalCarrito').modal('show');
        });
    });

    $('.btn_login').on('click', function () {
        $(".div_alert").empty();
       var ajax = structure.dao.login($('#user').val(), $('#pass').val());
       ajax.done(function (response) {
           if(response != false){
               structure.user = response;
               $('.div_login').empty();
               $('.div_login').append(  '<li class="nav-item">'+
                                            '<p class="text-light">Bienvenido <strong>'+response.name+'</strong> <a href="#" class="text-danger login_out">Salir</a></p>'+
                                        '</li>');
               $('#ModalLogin').modal('hide');
           } else {
               $(".div_alert").append( '<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                                '<span aria-hidden="true">&times;</span>'+
                                            '</button>'+
                                            '<strong>Sesión no iniciada</strong> Verifique usuario y contraseña'+
                                       '</div>');
           }
       });
    });

    $(document).on('click', '.login_out', function () {
        var ajax = structure.dao.loginOut();
        ajax.done(function (response) {
           if(response){
               structure.user = '';
               $('.div_login').empty();
               $('.div_login').append(  '<li class="nav-item">'+
                   '<a class="nav-link text-success openModalLogin" href="#"><i class="fa fa-sign-in fa-1x"></i> Iniciar Sesión <span class="sr-only">(current)</span></a>'+
                   '</li>');
           }
        });
    });

    $(document).on('click', '.btn_remove_item', function () {
        var ajax = structure.dao.remove_toCart($(this).attr('data-id'));
        ajax.done(function (response) {
            structure.function.print_cart(response);
            $('#ModalCarrito').modal('show');
        });
    });

    $(document).on('click','.product', function () {
        var ajax = structure.dao.get_details($(this).find('.add_toCart').attr('data-id'));
        ajax.done(function (response) {
            structure.data = response;
            $('.img_prod').empty().append('<img src="/img/'+response.src+'" class="rounded mx-auto d-block w-75 border border-dark p-2" alt="...">');
            $('.cat_prod').empty().append('<p class="text-danger">'+response.subcategory+'</p>');
            $('.nom_prod').empty().append('<p class="text-dark font-weight-bold text-center">'+response.name+'</p>');
            $('.desc_prod').empty().append('<p class="text-center text-justify font-weight-normal">'+response.description+'</p>');
            timer.start();
            $('#ModalDetails').modal('show');
        });
    });

    $(document).on('click','.btn_recomendados',function () {
        $('.products').empty();
        var resp = structure.data.subcats;
        structure.function.print_products(0, resp.length, resp);
        $('#ModalDetails').modal('hide');
    });

    $('#ModalDetails').on('hidden.bs.modal', function (e) {
        timer.stop();
        structure.dao.set_time_prod(cont);
    })





    $(document).on('mouseover','.product', function () {
        $('.product').removeClass('card-sombra');
        $(this).addClass('card-sombra');
    });
    $(document).on('mouseout','.product', function () {
        $('.product').removeClass('card-sombra');
    });

    $(document).on('mouseover','.cat-sombra', function () {
        $('.cat-sombra').removeClass('bg-light');
        $(this).addClass('bg-light');
    });
    $(document).on('mouseout','.cat-sombra', function () {
        $('.cat-sombra').removeClass('bg-light');
    });

    $(document).on('mouseover','.subcat-sombra', function () {
        $('.subcat-sombra').removeClass('bg-white');
        $(this).addClass('bg-white');
    });
    $(document).on('mouseout','.subcat-sombra', function () {
        $('.subcat-sombra').removeClass('bg-white');
    });

    $(document).on('mouseover','.item_cart', function () {
        $('.item_cart').removeClass('item_cart-sombra');
        $(this).addClass('item_cart-sombra');
    });
    $(document).on('mouseout','.item_cart', function () {
        $('.item_cart').removeClass('item_cart-sombra');
    });
});
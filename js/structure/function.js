
structure.function = {
    print_cat: function(data){
        for(var x = 0; x < data.length; x++){
            /*$('.categorias').append('<li class="nav-item cat-sombra">'+
                                        '<a class="nav-link text-dark" data-toggle="collapse" href="#collapse'+data[x].id_category+'" aria-expanded="false" aria-controls="collapseExample">'+data[x].name+'</a>'+
                                        '<div class="collapse" id="collapse'+data[x].id_category+'">'+
                                            '<ul class="nav flex-column">'+
                                                structure.function.print_subcat(data[x].subcat)+
                                            '</ul>' +
                                        '</div>' +
                                    '</li>');*/
            $('.categorias').append('<div class="col-md-2">'+
                                    '<a class="nav-link text-dark" data-toggle="collapse" href="#collapse'+data[x].id_category+'" aria-expanded="false" aria-controls="collapseExample">'+data[x].name+'</a>'+
                                    '<div class="collapse" id="collapse'+data[x].id_category+'">'+
                                    '<ul class="nav flex-column">'+
                                    structure.function.print_subcat(data[x].subcat)+
                                    '</ul>' +
                                    '</div>' +
                                    '</div>');
        }
    },
    print_subcat: function(data){
        var scat = '';
        for(var y = 0; y < data.length; y++){
            scat += '<li class="nav-item subcat-sombra">'+
                        '<a class="nav-link text-primary id_subcat" href="#" data-id="'+data[y].id_subcategory+'">'+data[y].name+'</a>'+
                    '</li>';
        }
        return scat;
    },
    print_products: function (position,size,data) {
        if(position < size){
            $('.products').append(  '<div class="col-lg-2 col-md-3 col-sm-6 col-6 mb-3">'+
                                        '<div class="card-sinsombra border border-dark product h-100">'+
                                            '<img class="card-img-top" src="/img/'+data[position].src+'" alt="Card image cap">'+
                                            '<div class="card-body p-2">'+
                                                '<p class="precio">'+data[position].price+'</p>'+
                                                '<p class="text-left text-truncate font-weight-bold text-danger mb-1" style="font-size: small;">'+data[position].subcategory+'</p>'+
                                                '<h6 class="card-title text-left text-truncate font-italic mt-1">'+data[position].name+'</h6>'+
                                                '<p class="card-text text-left font-weight-light"><small>'+data[position].description+'</small></p>'+
                                                '<div class="row justify-content-md-center"><div class="col-md-6"><span class="btn btn-outline-dark btn-pill add_toCart" data-id="'+data[position].id+'"><i class="fa fa-shopping-cart fa-1x"></i></span></div></div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>');
            setTimeout( function timer(){
                structure.function.print_products(position+1,size,data);
            }, 100 );
        }
        else{}
    },

    print_cart: function (data) {
        $('.body_cart').empty();
        for(var z = 0; z < data.length; z++){
            $('.body_cart').append( '<div class="row item_cart p-3">'+
                                        '<div class="col-md-2 col-sm-2 col-2">'+data[z].cont+'</div>'+
                                        '<div class="col-md-6 col-sm-6 col-6">'+data[z].name+'</div>'+
                                        '<div class="col-md-2 col-sm-2 col-2">'+data[z].quantity+'</div>'+
                                        '<div class="col-md-2 col-sm-2 col-2"><span class="btn btn-outline-danger btn_remove_item p-2" data-id="'+data[z].id_product+'"><i class="fa fa-trash-o fa-1x"></i></span></div>'+
                                    '</div>');
        }
    }

};
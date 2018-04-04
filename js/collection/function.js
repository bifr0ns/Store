
collection.function = {
    getCollections: function(category){
        var ajax = collection.dao.getCollections(category);
        ajax.done(function (response) {
            collection.function.print_collections(response);
        })
    },
    print_collections: function(data){
        $('#collections').append('<div class="px-2 mb-0">'+
                                    '<span class="'+($('#subcategory').val() == 0 ? 'badge badge-primary' :'btn_items_by_collection')+'" data-id="0">'+
                                        '<a class="'+($('#subcategory').val() == 0 ? 'text-light' :'text-primary')+'" href="#" style="font-weight: 400; color: #0072CE">Ver todo</a>'+
                                    '</span>'+
                                 '</div>');
        for(var x = 0; x < data.length; x++){
                $('#collections').append('<div class="px-2 mb-0">' +
                    '<span class="'+($('#subcategory').val() != x+1 ? 'btn_items_by_collection' :'badge badge-primary')+'" data-id="' + data[x].id_subcategory + '">' +
                    '<a class="'+($('#subcategory').val() != x+1 ? 'text-primary' :'text-light')+'" href="#" style="font-weight: 400; color: #0072CE">' +
                    data[x].name +
                    '</a>' +
                    '</span>' +
                    '</div>');
        }
    },
    getProducts: function(subcategory){
        var ajax = collection.dao.getProducts(subcategory);

        // NOTE: LO que quiero es que me imprima el nombre de la colección al picarle
        $('#collection-title').append('<h3 class="text-primary font-weight-bold mb-0">'+($('#subcategory').val())+'</h3>');

        ajax.done(function (response) {
            collection.function.print_products(0,response.length,response);
        })
    },
    print_products: function (position,size,data) {
        if(position < size){
            $('#cards_container').append(
                '<div class="mb-4 cards col-12 col-sm-6 col-md-4">'+
                    '<img class="card-img-top" src="./img/products/'+data[position].galery["0"].src+'" alt="Card image cap">'+
                    '<div class="card-body px-2 py-1">'+
                        '<p class="card-title text-center text-truncate">'+data[position].product_name+'</p>'+
                        '<p class="card-text text-center mb-2" style="font-weight: 400;">'+data[position].price+'</p>'+
                        '<p class="card-text text-center mb-0"><strong>Más colores</strong></p>'+
                        '<div class="w-100 d-flex justify-content-center mb-3">'+
                            collection.function.print_colors(data[position].colors,data[position].colorData)+
                        '</div>'+
                        '<p class="text-center mb-0"><button class="btn btn-secondary px-0 text-center w-100 btn_modal_product" style="font-size:0.8rem">AÑADIR A LA BOLSA</button></p>'+
                    '</div>'+
                '</div>');
            setTimeout( function timer(){
                collection.function.print_products(position+1,size,data);
            }, 500 );
        }
        else{}
    },
    print_colors: function(data,colorData){
        var color = '';
        for(var y = 0; y < data.length; y++){
            color += '<span class="mr-1 rounded-circle s_color" style="background-color: '+data[y].color_hex_code+';'+(data[y].id_color == colorData.id_color ? 'border-style: solid;' : '')+'" data-toggle="tooltip" data-placement="bottom" title="'+data[y].color_name+'"></span>';
        }
        return color;
    }

};

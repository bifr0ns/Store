
collection.function = {

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
    }

};
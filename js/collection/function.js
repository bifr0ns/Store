
collection.function = {

    print_collections: function(data){

        for(var x = 0; x < data.length; x++){

            $('#collections').append('<div class="px-2 mb-0">'+
                                        '<span class="" data-id="'+data[x].id_subcategory+'">'+
                                            '<a class="text-primary" href="#" style="font-weight: 400; color: #0072CE">'+
                                                data[x].name +
                                            '</a>'+
                                        '</span>'+
                                     '</div>');
        }
    }

};
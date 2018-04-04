$(function($) {

    collection.function.getCollections($('#category').val());
    collection.function.getProducts($('#subcategory').val());

  $(document).on("click",".btn_items_by_collection", function(){

    if($(this).attr("data-id") != 0){
        redirectPost('collection.php', { category: $('#category').val(), subcategory: $(this).attr("data-id") });
    } else {
        redirectPost('collection.php', { category: $('#category').val(), subcategory: 0 });
    }

  });

// NOTE: Función para redimensionar las cards
  $(window).resize(function() {
    if (jQuery(window).width() < 768) {
      $('.cards').css({
        'width': '47%',
        'max-width': '47%'
      });
    }
    else {
      $('.cards').css({
        'width': '32%',
        'max-width': '32%'
      });
    }
});



  $(document).on('click','#btn_2col',function () {
    if (jQuery(window).width() >= 768) {
      $('.cards').animate({
        'width': '40%',
        'max-width': '40%'
      },400);
    }
    else {
      $('.cards').animate({
        'width': '94%',
        'max-width': '94%'
      },400);
    }
  });

  $(document).on('click','#btn_3col',function () {
    if (jQuery(window).width() >= 768) {
      $('.cards').animate({
        'width': '32%',
        'max-width': '32%'
      },400);
    }
    else {
      $('.cards').animate({
        'width': '47%',
        'max-width': '47%'
      },400);
    }
  });

    function redirectPost(url, data) {
        var form = document.createElement('form');
        document.body.appendChild(form);
        form.method = 'post';
        form.action = url;
        for (var name in data) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = name;
            input.value = data[name];
            form.appendChild(input);
        }
        form.submit();
    }

});

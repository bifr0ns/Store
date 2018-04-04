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

  $(document).on("click",".btn_modal_product", function(){

      var ajax = collection.dao.getDetails($(this).attr('data-id'));

      ajax.done(function (response) {
          console.log(response)
          $('#modal_img_1').attr('src', './img/products/'+response.galery["0"].src);
          $('#modal_img_2').attr('src', './img/products/'+response.galery["1"].src);
          $('#modal_img_3').attr('src', './img/products/'+response.galery["2"].src);
          $('#modal_img_prin').attr('src', './img/products/'+response.galery["0"].src);
          $('#modal_art_color').text('Art. '+response.article+'-'+response.colorData.color_art);
          $('#modal_price').text(response.price);
          $('#modal_b_color').text('Color: '+response.colorData.color_name);
          $('#modal_colors').empty();
          $('#modal_colors').append(collection.function.print_colors(response.colors,response.colorData));

          $('#modal-product').modal('show');
      });

  });

    $(document).on('click', '#btn_2col', function () {
        console.log(2)
        $('.cards').removeClass('col-md-4').addClass('col-md-6');
    });

    $(document).on('click', '#btn_3col', function () {
        console.log(3)
        $('.cards').removeClass('col-md-6').addClass('col-md-4');
    });

  /*$(document).on("click","#btn_resize_products", function(){
    console.log("dsdasdsad");
    $('.cards').animate({
      'flex': "0 0 calc(100%/2)",
      'max-width': "calc(100%/2)"
  }, 5000);
  });*/

// NOTE: Función para redimensionar las cards
  /*$(window).resize(function() {
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
  });*/

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

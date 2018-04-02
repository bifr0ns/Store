$(function($) {

  if (jQuery(window).width() < 768) {
    $('.cards').css({
      'width': '49%',
      'max-width': '49%'
    });
  }
  else {
    $('.cards').css({
      'width': '32%',
      'max-width': '32%'
    });
  }

  $(window).resize(function() {
    if (jQuery(window).width() < 768) {
      $('.cards').css({
        'width': '49%',
        'max-width': '49%'
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
      },300);
    }
    else {
      $('.cards').animate({
        'width': '94%',
        'max-width': '94%'
      },300);
    }
  });

  $(document).on('click','#btn_3col',function () {
    if (jQuery(window).width() >= 768) {
      $('.cards').animate({
        'width': '32%',
        'max-width': '32%'
      },300);
    }
    else {
      $('.cards').animate({
        'width': '49%',
        'max-width': '49%'
      },300);
    }
  });

});

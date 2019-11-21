  $('.sl').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    speed: 1000,
    centerMode: true,
    centerPadding: '0',
    dots: false,
    fade: true,
  });


  $('.right').click(function(){
    $('.sl').slick('slickNext');
});

  $('.left-arrow').click(function(){
    $('.sl').slick('slickPrev');
});
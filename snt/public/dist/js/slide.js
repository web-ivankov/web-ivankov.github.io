$('.sl').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  arrows: false,
  speed: 1000,
  slidesToShow: 1,
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

$('.autoplay-slide').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: false,
  speed: 1000,
  centerMode: false,
  centerPadding: '0',
  dots: true,
});

$('.slider-nav').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  centerMode: false,
  focusOnSelect: true,
  autoplay: true,
  autoplaySpeed: 20000,
});
$('.m-menu-btn').on('click', function(e) {
  e.preventDefault();
  $('.m-menu').toggleClass('m-menu_active');
  $('.m-content').toggleClass('m-content_active');
})
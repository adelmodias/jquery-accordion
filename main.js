if ($('.accordion_header').length > 0) {
  var active = 'active';
  $('.accordion_header').click(function () {
    $(this).toggleClass(active);
    $(this).next('div').slideToggle(200);
  });
}

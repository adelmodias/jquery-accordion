if ($(".accordion__item__header").length > 0) {
  var active = "active";
  $(".accordion__item__header").click(function () {
    $(this).toggleClass(active);
    $(this).next("div").slideToggle(200);
  });
}

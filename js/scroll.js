$(window).scroll(function() {
  let scrollTop = jQuery(window).scrollTop();
  let areaTop = jQuery("#l-main").offset().top;
  let areaBottom = areaTop + jQuery("#l-main").innerHeight();

  if (scrollTop > areaTop && scrollTop < areaBottom) {
    $("body").addClass('nav-active');
  } else {
    $("body").removeClass('nav-active');
  }
}
);


$(window).scroll(function() {
  var windowH = $(window).height(),
    scrollY = $(window).scrollTop();
  $('.move-anime').each(function() {
    var elPosition = $(this).offset().top;
    if (scrollY > elPosition - windowH) {
      $(this).addClass("move-anime-on");
    } else {
      $(this).removeClass("move-anime-on");
    }
  });
}

);


$(window).scroll(function() {
  var windowH2 = $(window).height(),
  scrollY2 = $(window).scrollTop();
$('.move-anime-bg').each(function() {
  var elPosition = $(this).offset().top;
  if (scrollY2 > elPosition - windowH2) {
    $(this).addClass("move-anime-on");
  } else {
    $(this).removeClass("move-anime-on");
  }
});
});



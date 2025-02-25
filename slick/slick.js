$(function () {
 $('.thumb-item').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.thumb-item-nav'
 });
 $('.thumb-item-nav').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.thumb-item',
  focusOnSelect: true,
  dots: false
 });
});

$(function () {
 $('.multiple-item').slick({
  infinite: true,
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [{
    breakpoint: 768,
    settings: {
     slidesToShow: 1,
     slidesToScroll: 1
    }
   }, {
    breakpoint: 480,
    settings: {
     slidesToShow: 1,
     slidesToScroll: 1
    }
   }
  ]
 });
});
// JavaScript Document
// $(function () {
//  $('.thumb-item').slick({
//   accessibility: true,
//   infinite: true,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: false,
//   fade: true,
//   asNavFor: '.thumb-item-nav' //サムネイルのクラス名
//  });
//  $('.thumb-item-nav').slick({
//   infinite: true,
//   slidesToShow: 5,
//   slidesToScroll: 1,
//   asNavFor: '.thumb-item', //スライダー本体のクラス名
//   dots: false,
//   focusOnSelect: true,
//   centerPadding: '160px'
//  });
// });
// slick

$('.slide-box').each(function (i) {
	var $_t = $(this);
	$_t.find('.thumb-item').addClass('thumb-item' + i).slick({
		accessibility: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.thumb-item-nav' + i
	});
	$_t.find('.thumb-item-nav').addClass('thumb-item-nav' + i).slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.thumb-item' + i,
		focusOnSelect: true,
		responsive: [{
				breakpoint: 800,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}},
			{
				breakpoint: 639,
				settings: {
					dots: false,
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			}
		]
	});
});
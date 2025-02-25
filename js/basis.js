

!(function () {
	const viewport = document.querySelector('meta[name="viewport"]');
	function switchViewport() {
		const value =
			window.outerWidth > 370
				? 'width=device-width,initial-scale=1'
				: 'width=370, maximum-scale=1.0,user-scalable=yes';
		if (viewport.getAttribute('content') !== value) {
			viewport.setAttribute('content', value);
		}
	}
	addEventListener('resize', switchViewport, false);
	switchViewport();
})();

$(function () {



	jQuery("#header_nav li").on("mouseenter", (function() {
		jQuery(".dropdown", this).addClass("is-open")
}
)).on("mouseleave", (function() {
		jQuery(".dropdown", this).removeClass("is-open")
}
));
	// rollover
	$(function () {
		$("img.rollover").mouseover(function () {
			$(this).attr("src", $(this).attr("src").replace(/^(.+)(\.[a-z]+)$/, "$1_on$2"));
		}).mouseout(function () {
			$(this).attr("src", $(this).attr("src").replace(/^(.+)_on(\.[a-z]+)$/, "$1$2"));
		});
	});

	// active
	$('#header_nav a').each(function () {
		var $href = $(this).attr('href');
		// top
		if (location.pathname.match(".php")) {
			$('#header_nav a:eq(0)').removeClass('active');
		} else {
			$('#header_nav a:eq(0)').addClass('active');
		}
		// other
		if (location.href.match($href)) {
			$(this).addClass('active');
			$('#header_nav a:eq(0)').removeClass('active');
		} else {
			$(this).removeClass('active');
		}
	});


	// scroll
	$(window).load(function () {
		$('a[href^="#"]').click(function () {
			var headerHeight = $('#l-header').outerHeight(); // headerの高さ
			var href = $(this).attr("href");
			var target = $(href == "#" || href == "" ? 'html' : href);
			var position = target.offset().top - headerHeight; // スクロール値からナビの高さ分引く
			$("html, body").animate({
				scrollTop: position
			}, 550, "swing");
			return false;

		});
	});
	// animation
	$(function () {
		if ($(window).innerWidth() >= 1101) {
			Position = $(window).height() + $(window).scrollTop();
			$(".animation").each(function (i) {
				if (Position > $(this).offset().top) {
					$(this).delay(60 * i).queue(function () {
						$(this).addClass("on");
					});
				}
			});
			var navPos = jQuery('#l-main').offset().top;
			var navHeight = jQuery('#l-header').outerHeight();
			jQuery(window).on('scroll', function () {
				if (jQuery(this).scrollTop() > navPos) {
					// jQuery('#main').css('padding-top', navHeight).addClass('is-fixed');
					jQuery('#l-header').addClass('is-fixed');
				} else {
					// jQuery('#main').css('padding-top', 0);
					jQuery('#l-header').removeClass('is-fixed');
				}
			});

		};
	});
	$(window).scroll(function () {
		// animation
		scrollPosition = $(window).height() + $(window).scrollTop();
		$(".animation").each(function () {
			if (scrollPosition - 100 > $(this).offset().top) {
				$(this).addClass("on");
			}
		});
	});

 $(window).scroll(function () {
  // animation
  scrollPosition = $(window).height() + $(window).scrollTop();
  $(".animation-round").each(function () {
   if (scrollPosition - 400 > $(this).offset().top) {
    $(this).addClass("on");
   }
  });
  });


	// SP
	$('#nav-toggle').on('click', function () {
		$('body').toggleClass('open');
		$('#sp-nav a').on('click', function () {
			$('body').removeClass('open');
		});
	});
	$(window).on('load', function () {
		$('#js-loader').fadeOut(800);
	});
});
$(window).load(function () {
	$('.page-lead').delay(300).queue(function () {
		$(this).addClass('on');
	})
});
// animation
$(".animation-txt").wrap(
	'<div class="animation-content"><div class="animation-bar"></div></div>'
);

$(window).scroll(function() {
	$(".macker").each(function() {
		var position = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > position - windowHeight) {
			$(this).addClass("active");
		}
		// else {
		// 	$(this).stop().removeClass('active');
		// }
	});
	$(".animation-content").each(function() {
		var imgPos = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > imgPos - windowHeight + windowHeight / 4) {
			$(this).addClass("move");
		}
		// else {
		// 	$(this).stop().removeClass('move');
		// }
	});
	$(".effect_fade").each(function() {
		var elemPos = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > elemPos - windowHeight) {
			$(this).addClass("effect_scroll");
		}
		// else {
		// 	$(this).stop().removeClass('effect_scroll');
		// }
	});
});


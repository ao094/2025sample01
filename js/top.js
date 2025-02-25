
// Swiper初期化
$(window).on("load", function () {
  setTimeout(function () {
    var swiper = new Swiper(".swiper-container", {
      effect: "fade",
      loop: true,
      speed: 500,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });
  }, 1000);
});

// GSAPスケール変更アニメーション
gsap.to('.js-scale-change', {
  width: '100%',
  height: '100vh',
  borderRadius: 0,
  scrollTrigger: {
    trigger: '.js-sticky',
    start: 'center center',
    ease: 'none', //important!!
    pin: true,
    scrub: 0.8,
  }
});

// GSAPテキスト色変更アニメーション
gsap.to('.js-move-text span', {
  color: '#ffd803',
  duration: 0.25,
  scrollTrigger: {
    trigger: '.js-move-text span',
    start: 'center 45%',
    toggleActions: 'play none none reverse'
  }
});

// スクロールによるボディクラスの切り替え
$(window).scroll(function () {
  let scrollTop3 = jQuery(window).scrollTop();
  let areaTop3 = jQuery(".slide-box").offset().top;
  let areaBottom3 = areaTop3 + jQuery(".slide-box").innerHeight();

  if (scrollTop3 > areaTop3 && scrollTop3 < areaBottom3) {
    $("body").addClass('main-active');
  } else {
    $("body").removeClass('main-active');
  }
});

// スクロールによるテキストアニメーション
$(window).scroll(function () {
  var windowH = $(window).height(),
      scrollY = $(window).scrollTop();
  $('.txt-anime').each(function () {
    var elPosition = $(this).offset().top;
    if (scrollY > elPosition - windowH) {
      $(this).addClass("txt-anime-on");
    } else {
      $(this).removeClass("txt-anime-on");
    }
  });
});

// GSAPとScrollTriggerの登録
gsap.registerPlugin(ScrollTrigger);

// メディアクエリを使用したGSAPアニメーション
ScrollTrigger.matchMedia({
  "(min-width: 896px)": function () {
    document.querySelectorAll('.move').forEach((el) => {
      gsap.fromTo(
        el,
        { y: 50, opacity: 0 },
        { y: 0, opacity: 1, duration: 1, scrollTrigger: {
          trigger: el,
          start: "top 90%",
          ease: "expo",
        }},
      );
    });
  }
});

function loadCss(url) {
  var link = document.createElement("link");
  link.type = "text/css";
  link.rel = "stylesheet";
  link.href = url;
  document.getElementsByTagName("head")[0].appendChild(link);
}

// (function () {

  requirejs.config({
    baseUrl: 'static',
    waitSeconds: 15,
    paths: {
      'jquery': 'js/jquery/2.2.4/jquery.min',
      'swiper': "js/swiper/js/swiper.min",
      'bootstrap': "js/bootstrap/3.3.7/js/bootstrap.min",
      // 'util': 'js/util'
    },
    shim : {
      'swiper': {
        deps: ["jquery", "css!js/swiper/css/swiper.min"],
        // deps: ["jquery", "css!js/css/main"]
      },
      'bootstrap': {
        deps: ["jquery", "css!js/bootstrap/3.3.7/css/bootstrap"],
      },
    },
    map: {
      '*': {
        'css': 'js/require-css/css.min'
      }
    }
  })

  define(["css!js/css/main", 'jquery', 'bootstrap', 'popper', 'swiper'],function ($, Swiper) {
    function mySwiper () {
      new Swiper('.swiper-container', {
        autoplay: true,
        pagination: {
          el: '.swiper-pagination',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      })
    }
    mySwiper()

  })
// })()

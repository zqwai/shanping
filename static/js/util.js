var bWidth =document.body.clientWidth,
bHeight =document.body.clientHeight;

document.body.onload = app;

function app () {
    // loading()
    init()
}
function init () {
  // 右侧电话
  $('.tool-float .phone').hover(function(){
      // $(this).toggleClass('hover')
      $(this).stop().animate({
          'margin-left': '-14rem'
      });
  },function(){
      $(this).stop().animate({
          'margin-left': '0'
      });
  });

  // 通用模块 滚动到顶部
	$("#backToTop").on("click",function(){
    $('.containter').animate({'top':0},800);
    return false;
  });

  recommend('.recommend-1', '.s-pagination-1', '.s-next-1', '.s-prev-1')
  // recommend('.recommend-2', '.s-pagination-2')
  recommend('.recommend-5', '.s-pagination-5', '.s-next-5', '.s-prev-5')
  // 载入 页面定位
  $('.containter').animate({'top': '-100%'}, 500);
  $('.main-wrap').removeClass('page-lock');
  // 鼠标滑过效果
  swiperSiderTxtBg();
  // 菜单与模块联动
  swiperMenus(1);
  swiperMenus(4);
  swiperMenus(6);
  
}

// loading
function loading () {
  $('.loading').remove()
}
// index Swiper
function recommend (eleWrap, sElePagination,sNavNextEl,sNavPrevEl,) {
  new Swiper(eleWrap, {
    // autoplay: true,
    loop: true,
    // lazy: {
    //   loadPrevNext: true,
    // },
    pagination: {
      el: sElePagination,
      clickable: true,
    },
    // navigation: {
    //   nextEl: sNavNextEl,
    //   prevEl: sNavPrevEl,
    // },
  })
}
// Swiper sider hover
function swiperSiderTxtBg () {
  var txtWrap = $('.recommend .p-txt-wrap');
  txtWrap.hover(function(){
    // console.log('222')
    $(this).parent().addClass('hover')
  },function () {
    $(this).parent().removeClass('hover')
  });
}
// Swiper and sub menus item add cur
var swiperMenus = function (pageid) {
  var swiperSiderItem = $('.page'+pageid+' .recommend-inline li');
  swiperSiderItem.hover(function(){
    var _this = $(this)
    var menuIndex = _this.data('menuindex');
    // console.log(menuIndex)
    $('.page'+pageid+' .sub-nav ul li').children().removeClass('cur');
    $('.page'+pageid+' .sub-nav ul li:nth-child('+menuIndex+')').children().addClass('cur')
  }, function () {
    var _this = $(this)
    var menuIndex = _this.data('menuindex');
    $('.page'+pageid+' .sub-nav ul li:nth-child('+menuIndex+')').children().removeClass('cur')
  });
}


$(function() {
  var nowpage=0;
  var lock=true;
  function donghua(){
    $('.containter').animate({'top': -100*nowpage+'%'}, 500);
    $('.page').eq(nowpage).addClass('current').siblings().removeClass('current');
    $('.side-menus ul li').eq(nowpage).addClass('bg').siblings().removeClass('bg');
  }
  $(document).mousewheel(function (event,delta) {
    // console.log(delta);
    if(lock){ 
      nowpage=nowpage-delta;

      console.log(nowpage,delta)
      if(nowpage<0){
        nowpage=0;
      } 
      var aa = -1;
      if(nowpage==0 || nowpage==aa){
        nowpage=0;
        $('.main-wrap').addClass('page-lock');
      }
      if(nowpage==1){
        $('.main-wrap').removeClass('page-lock');
      }
      if(nowpage>8){nowpage=8;}

      donghua();

      lock=false;

      setTimeout(function  () {
        lock=true;
      },1000);

     var lazypicsrc = $('.page'+nowpage).find('.lazyPic').data('lazypicsrc');

    }
  })
  $('.side-menus ul li').click(function(event) {
    event.stopPropagation();
    console.log($(this).index())
    var a = 0;
    nowpage=$(this).index();
    if(nowpage<=8){donghua();}

    // nowpage2 = nowpage +1;
    // if(nowpage2 = 4){
    //   recommend('.recommend-'+ nowpage2, '.s-pagination'+nowpage2, '.s-next'+nowpage2, '.s-prev'+nowpage2)
    // }
  });
  $('#sHome').click(function () {
    $('.containter').animate({'top': '0'}, 500)
    $('.main-wrap').addClass('page-lock');
    nowpage=0;
  });

  $('#scrollToP1').click(function () {
    $('.containter').animate({'top': '-100%'}, 500);
    $('.main-wrap').removeClass('page-lock');
    nowpage=1;
  });

  $('#backToTop').click(function () {
    $('.containter').animate({'top': '0'}, 500)
    $('.main-wrap').addClass('page-lock');
    nowpage=0;
  })
});

// // img rest
// var imageRest = function (e) {
//   var imageSize = {};
//   var originalWidth = e.detail.width;//图片原始宽  
//   var originalHeight = e.detail.height;//图片原始高  
//   var originalScale = originalHeight / originalWidth;//图片高宽比  
//   // console.log('originalWidth: ' + originalWidth)
//   // console.log('originalHeight: ' + originalHeight)
//   //获取屏幕宽高  
//   wx.getSystemInfo({
//     success: function (res) {
//       var windowWidth = res.windowWidth;
//       var windowHeight = res.windowHeight;
//       var windowscale = windowHeight / windowWidth;//屏幕高宽比  
//       // console.log('windowWidth: ' + windowWidth)
//       // console.log('windowHeight: ' + windowHeight)
//       if (originalScale < windowscale) {//图片高宽比小于屏幕高宽比  
//         //图片缩放后的宽为屏幕宽  
//         imageSize.imageWidth = windowWidth;
//         var imageNewHeight = (windowWidth * originalHeight) / originalWidth ;
//         imageSize.imageHeight = Math.floor(imageNewHeight);
//       } else {
//         //图片高宽比大于屏幕高宽比  
//         //图片缩放后的高为屏幕高  
//         imageSize.imageHeight = windowHeight;
//         var imageNewWidth = (windowHeight * originalWidth) / originalHeight;
//         imageSize.imageWidth = Math.floor(imageNewWidth);
//       }

//     }
//   })
//   // console.log('缩放后的宽: ' + imageSize.imageWidth)
//   // console.log('缩放后的高: ' + imageSize.imageHeight)
//   return imageSize;
// }
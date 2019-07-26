var bWidth =document.body.clientWidth,
bHeight =document.body.clientHeight,
nowpage=0,
lock=true;
//loading
var _LoadingHtml = '<div id="loadingDiv" style="position:absolute;left:0;width:100%;height:100%;top:0;z-index:10000;background: rgba(0,0,0,.2);"><div id="loadingDiv" style="position:absolute; cursor:wait;left:50%;top:50%;width: 80px;height: 80px;line-height:80px;margin-left:-40px;margin-top:-40px;z-index:10005;border-radius:.5rem;background: rgba(0,0,0,.8) url(static/img/web_loading@2x.gif) no-repeat center center;"></div></div>';
document.write(_LoadingHtml);
//监听加载状态改变
document.onreadystatechange = completeLoading;
document.body.onload = app;

function app () {
    init()
}
function init () {
  // 右侧电话
  $('.tool-float .phone').hover(function(){
    $(this).stop().animate({
        'margin-left': '-14rem'
    });
  },function(){
    $(this).stop().animate({
        'margin-left': '0'
    });
  });

  recommend('.recommend-1', '.s-pagination-1',)
  // recommend('.recommend-2', '.s-pagination-2')
  recommend('.recommend-5', '.s-pagination-5',)
  // 载入 页面定位
  $('.containter').animate({'top': '-100%'}, 500);
  $('.main-wrap').removeClass('page-lock');
  // 加载page1图片
  lazyLoadImg(1)
  // 鼠标滑过效果
  swiperSiderTxtBg('.recommend .p-txt-wrap', 'hover');
  // 菜单与模块联动
  swiperMenus(1);
  swiperMenus(4);
  swiperMenus(6);

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
      lazyLoadImg(nowpage)
      lock=false;
      setTimeout(function  () {
        lock=true;
      },1000);
    }
  })
  $('.side-menus ul li').click(function(event) {
    event.stopPropagation();
    nowpage=$(this).index();
    console.log(nowpage)
    if(nowpage<=8){
      donghua();
      lazyLoadImg(nowpage)
    }
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
    lazyLoadImg(nowpage)
  });
  $('#backToTop').click(function () {
    $('.containter').animate({'top': '0'}, 500)
    $('.main-wrap').addClass('page-lock');
    nowpage=0;
  })
}
// loading
//加载状态为complete时移除loading效果
function completeLoading() {
  if (document.readyState == "complete") {
    var loadingMask = document.getElementById('loadingDiv');
    loadingMask.parentNode.removeChild(loadingMask);
  }
}
// index Swiper
function recommend (eleWrap, sElePagination,) {
  new Swiper(eleWrap, {
    loop: true,
    pagination: {
      el: sElePagination,
      clickable: true,
    },
  })
}
// Swiper sider hover
function swiperSiderTxtBg (wrapClass, hoverClass ) {
  var txtWrap = $(wrapClass);
  txtWrap.hover(function(){
    // console.log('222')
    $(this).parent().addClass(hoverClass)
  },function () {
    $(this).parent().removeClass(hoverClass)
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
// page scroll
function donghua(){
  $('.containter').animate({'top': -100*nowpage+'%'}, 500);
  $('.page').eq(nowpage).addClass('current').siblings().removeClass('current');
  $('.side-menus ul li').eq(nowpage).addClass('bg').siblings().removeClass('bg');
}
// loading img
function lazyLoadImg(pageId){
  var imgs = Array.from(document.querySelectorAll('.page'+ pageId +' img[data-lazypicsrc]'));
  // var baseUrl = 'http://sypbz.com/';
  var loadingImg = './static/img/loading.gif'
  imgs.forEach(function(item,index){
    // item.setAttribute('src', loadingImg)
    console.log(item.dataset.lazypicsrc)
    if(item.src === '' || item.src === null){
      if(item.dataset.lazypicsrc === '' || item.dataset.lazypicsrc === null){
        item.setAttribute('src', loadingImg)
      } else {
        item.setAttribute('src', item.dataset.lazypicsrc);
        console.log()
      }
    } else {
      return false;
    }
  })
}
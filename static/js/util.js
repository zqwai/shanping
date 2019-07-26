var bWidth =document.body.clientWidth,
bHeight =document.body.clientHeight;
//loading
var _LoadingHtml = '<div id="loadingDiv" style="position:absolute;left:0;width:100%;height:100%;top:0;z-index:10000;background: rgba(0,0,0,.2);"><div id="loadingDiv" style="position:absolute; cursor:wait;left:50%;top:50%;width: 80px;height: 80px;line-height:80px;margin-left:-40px;margin-top:-40px;z-index:10005;border-radius:.5rem;background: rgba(0,0,0,.8) url(static/img/web_loading@2x.gif) no-repeat center center;"></div></div>';
document.write(_LoadingHtml);
//监听加载状态改变
document.onreadystatechange = completeLoading;

document.body.onload = app;

function app () {
    // loading()
    init()


  // var img=document.querySelectorAll("img[data-lazypicsrc]");
  // for(var i=0;i<img.length;i++){
  //   img[i].style.opacity="0"
  //   // console.log(img[i])
  // }
  // Limg('1')
}
function init () {

  lazyLoad();

  window.onscroll = () => {
    var scrollTop = window.scrollY;
    scrollTop = window.scrollY;
    lazyLoad();
  }
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
  swiperSiderTxtBg('.recommend .p-txt-wrap', 'hover');
  // 菜单与模块联动
  swiperMenus(1);
  swiperMenus(4);
  swiperMenus(6);

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
function recommend (eleWrap, sElePagination,sNavNextEl,sNavPrevEl,) {
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
      // loading img
      // Limg(nowpage)

      lock=false;

      setTimeout(function  () {
        lock=true;
      },1000);

    //  var lazypicsrc = $('.page'+nowpage).find('.lazyPic').data('lazypicsrc');

    }
  })
  $('.side-menus ul li').click(function(event) {
    event.stopPropagation();
    // var a = 0;
    nowpage=$(this).index();
    console.log(nowpage)
    if(nowpage<=8){
      donghua();
      // Limg(nowpage)
    }
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

// loading img

function lazyLoad(){
  var scrollTop = window.scrollY;
  var imgs = Array.from(document.querySelectorAll('img[data-lazypicsrc]'));
  var baseUrl = 'http://sypbz.com/';
  imgs.forEach((item,index)=>{
    if( item.offsetTop < window.innerHeight + scrollTop ){
      console.log(item.offsetTop)
      item.setAttribute('src',baseUrl+item.dataset.lazypicsrc)
    }
  })
}
// function Limg(pageId){

//   var viewHeight=document.documentElement.clientHeight;
//   console.log(viewHeight)
//   var t=document.documentElement.scrollTop||document.body.scrollTop;
//   var limg=document.querySelectorAll("img[data-lazypicsrc]")
//   Array.prototype.forEach.call(limg,function(item,index){
//     var rect;
//     if(item.getAttribute("data-lazypicsrc")===""){
//       return
//     };

//     rect=item.getBoundingClientRect();
//     var bSizeBottom = rect.bottom - viewHeight * pageId;
//     var bSizeTop = rect.top - viewHeight * pageId;
//     if(bSizeBottom>=0 && bSizeTop<viewHeight){
//       console.log(pageId,bSizeBottom, bSizeTop, index);
//       // (function(){
//         var img=new Image()
//         img.src=item.getAttribute("data-lazypicsrc")
//         item.src=img.src
//         var j=0
//         setInterval(function(){
//           j+=0.2
//           if(j<=1){
//             item.style.opacity=j
//             return
//           }
//         },100)
//         item.removeAttribute('data-lazypicsrc')
//       // })()
//     }
//   })
// }

function checkImgs() {
  const imgs = document.querySelectorAll('.my-photo');
  Array.from(imgs).forEach(el => {
    if (isInSight(el)) {
      loadImg(el);
    }
  })
}

function loadImg(el) {
  if (!el.src) {
    const source = el.dataset.src;
    el.src = source;
  }
}
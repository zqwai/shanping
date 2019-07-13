var bWidth =document.body.clientWidth,
bHeight =document.body.clientHeight;

document.body.onload = app;

function app () {
    loading()
    init()
}
// $(window).scroll(function(){
//     if($(this).scrollTop() > 500){
//         $('#backToTop').show();
//     }else{
//         $('#backToTop').hide();
//     }
// });
function init () {
  
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
}

function recommend (eleWrap, loopStaus, sElePagination,sNavNextEl,sNavPrevEl,) {
  new Swiper(eleWrap, {
    // autoplay: true,
    loop: loopStaus,
    lazy: {
      loadPrevNext: true,
    },
    pagination: {
      el: sElePagination,
      clickable: true,
    },
    navigation: {
      nextEl: sNavNextEl,
      prevEl: sNavPrevEl,
    },
  })
}
function recommend (eleWrap, sElePagination,sNavNextEl,sNavPrevEl,) {
  new Swiper(eleWrap, {
    // autoplay: true,
    loop: false,
    lazy: {
      loadPrevNext: true,
    },
    pagination: {
      el: sElePagination,
      clickable: true,
    },
    navigation: {
      nextEl: sNavNextEl,
      prevEl: sNavPrevEl,
    },
  })
}

function loading () {
    $('.loading').remove()
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
      if(nowpage<0){nowpage=0;}
      if(nowpage>7){nowpage=7;}
        donghua();
      lock=false;
      setTimeout(function  () {
        // body...
        lock=true;
      },1000);
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

});
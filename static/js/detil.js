var bWidth =document.body.clientWidth,
bHeight =document.body.clientHeight;

document.body.onload = app;

function app () {
    loading()
    init()
}

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
	    $('html,body').animate({scrollTop:0},800);
	    return false;
    });
    $("img.lazy").lazyload({
      placeholder : "./static/img/loading.gif",
      effect: "fadeIn"
    });

    nav()
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

function loading () {
    $('.loading').remove()
}

function nav () {
  $('.topnav>ul>li').hover(function(){
    $(this).addClass('cur');
  },function(){
    $(this).removeClass('cur');
  })
}

function topHeader(){
	t = $(document).scrollTop();
	if(t > 137){
		$('#topHeader').addClass('header-fixed-top header-sm')
	}else{
		// console.log('70');
		$('#topHeader').removeClass('header-fixed-top header-sm')
	}
}

$(window).scroll(function(e){
	topHeader();
})
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
    // $('.banner').width(bWidth).height(bHeight)
    $('.page').height(bHeight);
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
    banner()
    recommend('.recommend-1', '.s-pagination-1')
    recommend('.recommend-2', '.s-pagination-2')
    recommend('.recommend-5', '.s-pagination-5')
}
function banner () {
    new Swiper('.banner', {
        // autoplay: true,
        loop : true,
        // hashnav:true,
        pagination: '.swiper-pagination',
        nextButton: '.s-next',
        prevButton: '.s-prev',
    })
}
function recommend (eleWrap, sEle) {
    new Swiper(eleWrap, {
        // autoplay: true,
        loop : true,
        pagination: sEle,
        // uniqueNavElements :false,
        paginationClickable :true,
    })
}

function loading () {
    $('.loading').remove()
}



// $(function() {
//   var nowpage=0;
//   var lock=true;
//   function donghua(){
//     $('.containter').animate({'top': -100*nowpage+'%'}, 500);
//     $('.page').eq(nowpage).addClass('current').siblings().removeClass('current');
//     $('.dian ul li').eq(nowpage).addClass('da').siblings().removeClass('da');
//     $('.nav ul li').eq(nowpage).addClass('bg').siblings().removeClass('bg');
//   }
//   $(document).mousewheel(function (event,delta) {
//     if(lock){ 
//       nowpage=nowpage-delta;
//       if(nowpage<0){nowpage=0;}
//       if(nowpage>7){nowpage=7;}
//        donghua();
//       lock=false;
//       setTimeout(function  () {
//         // body...
//         lock=true;
//       },1000);
//     }
//   })
//   $('.nav ul li').click(function(event) {
//     nowpage=$(this).index();
//     if(nowpage<=7){donghua();}
//   });
//   $('.dian ul li').click(function(event) {
//     nowpage=$(this).index();
//     donghua();
//   });
// });
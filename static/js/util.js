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
}
function banner () {
    new Swiper('.banner', {
        // autoplay: true,
        loop : true,
        hashnav:true,
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
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
    // 通用模块 滚动到顶部
	$("#backToTop").on("click",function(){
	    $('html,body').animate({scrollTop:0},800);
	    return false;
    });
    banner()
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

function loading () {
    $('.loading').remove()
}
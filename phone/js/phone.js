
var indexBanner = new Swiper ('.sp__banner', {
    direction: 'horizontal',
    loop: true,
    pagination: {
        el: '.sp__pagination',
    },
    // on: {
    //     init: function(){
    //       //Swiper初始化了
    //     //   alert('当前的slide序号是'+this.realIndex);
    //     //   this.emit('transitionEnd');//在初始化时触发一次transitionEnd事件，需要先设置transitionEnd
    //       $('.item__qrcode, .item__product').removeClass('s_show');
          
    //     }, 
    //     slideChangeTransitionStart: function(){
    //         if(this.realIndex == 0){
    //             $('.item__qrcode, .item__product').removeClass('s_show');
    //           } else{
    //             $('.item__qrcode, .item__product').addClass('s_show');
    //           }
    //       },
    //   },
});

function newProSwiper (idWrap, idPag, count) {
    new Swiper ( idWrap, {
        direction: 'horizontal',
        slidesPerView : count,
        loop: true,
        pagination: {
            el: idPag,
        },
    })
};

function newProSwiperLazy (idWrap, idPag, count) {
    new Swiper ( idWrap, {
        direction: 'horizontal',
        slidesPerView : count,
        loop: true,
        pagination: {
            el: idPag,
        },
        
        watchSlidesProgress : true,
        watchSlidesVisibility : true,
        lazy: true,   
    })
};

function topHeader(){
	t = $(document).scrollTop();
	if(t > 137){
		$('#topHeader').addClass('header-fixed-top header-sm')
	}else{
		// console.log('70');
		$('#topHeader').removeClass('header-fixed-top header-sm')
	}
}
$(function(){
        
    newProSwiperLazy('.sp__pro_one', '.sp__pro_one_pagination', '1');
    newProSwiperLazy('.sp__pro_two', '.sp__pro_two_pagination', '1');
    newProSwiperLazy('.sp__pro_three', '.sp__pro_three_pagination', '1');
    newProSwiperLazy('.sp__pro_four', '.sp__pro_four_pagination', '1');

    newProSwiperLazy('.sp__pro_seven', '.sp__pro_seven_pagination', '1');
    newProSwiperLazy('.sp__pro_eight', '.sp__pro_eight_pagination', '1');
    
    // 添加cookie
    // var oDate = new Date();
    // oDate.setDate(oDate.getDate() + 30);
    // document.cookie = "name=www.sypbz.com;expires=" + oDate;
    // // 读取cookie
    // var res = document.cookie.substring(5);
    // alert(res);

    $('.navbtn-nav').on('click',function(){
        var overLay = '<div class="overlay" style="position:absolute;width:100%;height:100%;background-color:rgba(0,0,0,.01);z-index:4;top:0;left:0;"></div>';
        $('html').toggleClass('lock');
        var a = $(this).parent().parent();
        a.toggleClass('open');
        if(a.hasClass('open')){
            $('body').append(overLay) 
        } else {
            $('.overlay').remove();
        }
        $(this).toggleClass('close');
        $('.overlay').on('click', function(){
            $('.topheader').removeClass('open');
            $(this).remove();
            $('html').removeClass('lock');
            $('.navbtn-nav').removeClass('close');
        })
    })
    $('.topnav').find('li').children('.icon-open').on('click',function(){
        $(this).parent().siblings('li').removeClass('open')
        $(this).parent().toggleClass('open');
    });
    $('.navbtn-back').on('click', function() {
        history.back(-1)
    })

    $("img.lazy").lazyload({
    placeholder : "./static/img/loading.gif",
    effect: "fadeIn"
    });

    $(window).scroll(function(e){
        topHeader();
    })
    // $('#dowebok').viewer();
})

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
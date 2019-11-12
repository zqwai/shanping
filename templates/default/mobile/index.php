<?php	if(!defined('IN_MOBILE')) exit('Request Error!'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<?php echo GetHeader(); ?>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,viewport-fit=cover" name="viewport" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="HandheldFriendly"content="true"/>
	<meta name="format-detection"content="telephone=no">
	<meta http-equiv="x-rim-auto-match"content="none"/>

	<link rel="stylesheet" href="./static/js/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="./static/js/swiper/4/css/swiper.min.css">
	<link rel="stylesheet" href="./phone/css/main.css">
	<?php require_once('./templates/default/mobile/static.php'); ?>
</head>
<body>
<div class="swiper-container sp__banner">
  <div class="swiper-wrapper">
    <!-- <div class="swiper-slide slide0" style="background-color: white;">
      <a class="wrap__banner s_newyear" href="?m=show&cid=28&id=44">
          <img src="./phone/images/index/p1-1.jpg" class="banner__pic">
      </a>
    </div> -->
    <div class="swiper-slide slide1">
      <div class="wrap__banner">
          <img src="./phone/images/p1.jpg" class="banner__pic">
          <img src="./phone/images/banner_over.png" class="banner__pic_over">
      </div>
    </div>
    <div class="swiper-slide slide2">
        <div class="wrap__banner">
            <img src="./phone/images/p2.jpg" class="banner__pic">
            <img src="./phone/images/banner_over.png" class="banner__pic_over">
        </div>
    </div>
    <div class="swiper-slide slide3">
        <div class="wrap__banner">
            <img src="./phone/images/p3.jpg" class="banner__pic">
            <img src="./phone/images/banner_over.png" class="banner__pic_over">
        </div>
    </div>
    <div class="swiper-slide slide4">
        <div class="wrap__banner">
            <img src="./phone/images/p4.jpg" class="banner__pic">
            <img src="./phone/images/banner_over.png" class="banner__pic_over">
        </div>
    </div>
  </div>
  <div class="swiper-pagination sp__pagination"></div>
  <div class="item__qrcode">
    <a href="tel:18969053999">
      <img src="./phone/images/qrcode.png" alt="18969053999" class="w-100">
    </a>
  </div>
  <div class="item__product"></div>
  <div class="item__arrow"></div>
</div>
<div class="sp__cont">

  <div class="wrap__topbanner">
    <img  class="lazy" data-original="./phone/images/topbanner.png" alt="">
  </div>
  <!-- <div class="wrap__search">
    <div class="nbox">
        <input type="text" name="" value="" placeholder="本站快速搜索" class="form-control form-txt">
        <input type="button" value="搜索" class="btn btn-search">
    </div>
  </div> -->
  <section class="part part1">
    <header class="d-flex jp__header">
      <div class="tit">精装礼盒 \ 十二大类</div>
      <!-- <div class="more">大货展示</div> -->
    </header>

    <div class="swiper-container sp__pro_one list__cont">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <ul class="d-flex">
            <li>
              <a href="?m=show&cid=28&id=23">
                <div class="wrap__pic">
                    <img  class="swiper-lazy" data-src="./phone/images/b1/1.jpg" alt="时节类">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                  时节类
                </div>
                <div class="text">
                    茶叶礼 / 粽子盒 / 月饼盒<br>
                    年货礼盒 /伴手礼盒
                </div>
              </a>
            </li>
            <li>
              <a href="?m=show&cid=28&id=24">
                <div class="wrap__pic">
                    <img  class="swiper-lazy" data-src="./phone/images/b1/2.jpg" alt="烟酒类">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                    烟酒类
                </div>
                <div class="text">
                    酒类精包装<br>各类烟包
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="swiper-slide">
          <ul class="d-flex">
            <li>
              <a href="?m=show&cid=28&id=25">
                <div class="wrap__pic">
                  <img class="swiper-lazy" data-src="./phone/images/b1/3.jpg" alt="保健品">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                  保健品
                </div>
                <div class="text">
                  人参 / 石斛 / 阿胶<br>酵素及其它
                </div>
              </a>
            </li>
            <li>
              <a href="?m=show&cid=28&id=26">
                <div class="wrap__pic">
                  <img class="swiper-lazy" data-src="./phone/images/b1/4.jpg" alt="化妆品">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                    化妆品
                </div>
                <div class="text">
                    肤用化妆品 / 发用化妆品<br>特殊功能化妆品
                </div>
				      </a>
            </li>
          </ul>
        </div>
        <div class="swiper-slide">
            <ul class="d-flex">
              <li>
                <a href="?m=show&cid=28&id=27">
                  <div class="wrap__pic">
                      <img class="swiper-lazy" data-src="./phone/images/b1/6.jpg" alt="首饰类">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                  </div>
                  <div class="tit">
                      首饰类
                  </div>
                  <div class="text">
                      手链手串手镯佛珠<br>项链/脚链/戒指/耳钉耳坠
                  </div>
				        </a>
              </li>
              <li>
              <a href="?m=show&cid=28&id=28">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b1/5.jpg" alt="服饰类">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                    服饰类
                </div>
                <div class="text">
                    丝巾盒/衬衫盒/内衣盒<br>
                    衣帽盒/领带皮带/鞋袜盒
                </div>
				</a>
              </li>
            </ul>
        </div>

        <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              <a href="?m=show&cid=28&id=29">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b1/7.jpg" alt="食品类">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                    食品类
                </div>
                <div class="text">
                    时令生鲜 / 干货礼盒<br>
                    糕点礼盒 / 杂粮
                </div>
				</a>
              </li>
              <li>
              <a href="?m=show&cid=28&id=30">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b1/8.jpg" alt="电子/工艺">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                    电子/工艺
                </div>
                <div class="text">
                    电子类<br>日用品类
                </div>
				</a>
              </li>
            </ul>
        </div>
        
        <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              <a href="?m=show&cid=28&id=31">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b1/9.jpg" alt="色卡箱">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                    色卡箱
                </div>
                <div class="text">
                    装饰类 / 板材 / 石材<br>
                    面料 / 涂料 / 五金配件
                </div>
				</a>
              </li>
              <li>
              <a href="?m=show&cid=28&id=32">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b1/10.jpg" alt="装饰色卡">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                    装饰色卡
                </div>
                <div class="text">
                    装饰类 / 板材 / 石材<br>面料 / 涂料 / 五金配件
                </div>
				</a>
              </li>
            </ul>
        </div>
        
        <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              <a href="?m=show&cid=28&id=33">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b1/11.jpg" alt="文件夹">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                </div>
                <div class="tit">
                    文件夹
                </div>
                <div class="text">
                    常规型 / 圆背脊型<br>
                    吸铁翻盖式
                </div>
				</a>
              </li>
              <li>
              	<a href="?m=show&cid=28&id=34">
                  <div class="wrap__pic">
                      <img class="swiper-lazy" data-src="./phone/images/b1/12.jpg" alt="折叠盒">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more">more</span>
                  </div>
                  <div class="tit">
                      折叠盒
                  </div>
                  <div class="text">
                      吸铁翻盖式<br>
                      天地盖式
                  </div>
				</a>
              </li>
            </ul>
        </div>

      </div>
      <div class="swiper-pagination sp__pro_one_pagination"></div>
    </div>
  </section>

  
  <section class="part part2">
      <header class="d-flex jp__header">
        <div class="tit">组合式礼盒 \ 创意灵感</div>
        <a href="?m=show&cid=29&id=35" class="more">系列展开</a>
      </header>
  
      <div class="swiper-container sp__pro_two list__cont">
        <div class="swiper-wrapper">

        <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              	<a href="?m=show&cid=29&id=35">
                  <div class="wrap__pic">
                      <img  class="swiper-lazy" data-src="./phone/images/b2/1.jpg" alt="">
                    <div class="swiper-lazy-preloader"></div>
                  </div>
                  <div class="tit">
                    组合式-1
                  </div>
                  <div class="text">
                    <div class="n-row">
                      <span class="squire"></span>
                      <span class="n-txt">封套式</span>
                    </div>
                    <div class="n-row">
                      <span class="squire"></span>
                      <span class="n-txt">外套左右对插</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
              	<a href="?m=show&cid=29&id=35">
                  <div class="wrap__pic">
                      <img  class="swiper-lazy" data-src="./phone/images/b2/2.jpg" alt="">
                    <div class="swiper-lazy-preloader"></div>
                  </div>
                  <div class="tit">
                    组合式-2
                  </div>
                  <div class="text">
                        <div class="n-row">
                          <span class="squire"></span>
                          <span class="n-txt">左右对开（底部连接）</span>
                        </div>
                        <div class="n-row">
                          <span class="squire"></span>
                          <span class="n-txt">内盒形式可多变</span>
                        </div>
                        <div class="n-row">
                          <span class="squire"></span>
                          <span class="n-txt">可做独立空间、可根据产品分配高度及宽度</span>
                        </div>
                        <div class="n-row">
                          <span class="squire"></span>
                          <span class="n-txt">适用多种或多样式产品的单独空展展示</span>
                        </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              	<a href="?m=show&cid=29&id=35">
                  <div class="wrap__pic">
                    <img  class="swiper-lazy" data-src="./phone/images/b2/3.jpg" alt="">
                    <div class="swiper-lazy-preloader"></div>
                  </div>
                  <div class="tit">
                    组合式-3
                  </div>
                  <div class="text">    
                      <div class="n-row">       
                        <span class="squire"></span>
                        <span class="n-txt">上下盖式</span>
                      </div>
                      <div class="n-row">
                          <span class="squire"></span>
                          <span class="n-txt">侧板固定上下两层盒子</span>
                      </div>
                      <div class="n-row">
                          <span class="squire"></span>
                          <span class="n-txt">上层盒子向右180度展开</span>
                      </div>
                      <div class="n-row">
                          <span class="squire"></span>
                          <span class="n-txt">上下盒子高度可调</span>
                      </div>
                      <div class="n-row">
                        <span class="squire"></span>
                        <span class="n-txt">适用多种或多样式产品的单独空展展示</span>
                      </div>
                  </div>
                </a>
              </li>
              <li>
              	<a href="?m=show&cid=29&id=35">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b2/4.jpg" alt="">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="tit">
                  组合式-4
                </div>
                <div class="text">
                  <div class="n-row">
                    <span class="squire"></span>
                    <span class="n-txt">翻盖式</span>
                  </div>
                  <div class="n-row">
                    <span class="squire"></span>
                    <span class="n-txt">侧板固定上下两层盒子</span>
                  </div>
                  <div class="n-row">
                    <span class="squire"></span>
                    <span class="n-txt">上层盒子可以左右180度展开</span>
                  </div>
                  <div class="n-row">
                    <span class="squire"></span>
                    <span class="n-txt">上下盒子高度可调</span>
                  </div>
                  <div class="n-row">
                    <span class="squire"></span>
                    <span class="n-txt">适用多种或多样式产品的单独空展展示</span>
                  </div>
                </div>
                </a>
              </li>
            </ul>
          </div>
          
          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              	<a href="?m=show&cid=29&id=35">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b2/5.jpg" alt="">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="tit">
                  组合式-5
                </div>
                <div class="text">   
                    <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">九宫格型</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">格子可任意调整</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">适用多种或多样式产品的单独空展展示</span>
                </div>
                </div>
                </a>
              </li>
              <li>
              	<a href="?m=show&cid=29&id=35">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b2/6.jpg" alt="">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="tit">
                  组合式-6
                </div>
                <div class="text">
                    <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">天地盖型</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">由三个盒子组成</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">中间盒子可用作中框</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">适用多种或多样式产品的单独空展展示</span>
                </div>
                </div>
                </a>
              </li>
            </ul>
          </div>
          
          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              	<a href="?m=show&cid=29&id=35">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b2/7.jpg" alt="">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="tit">
                  组合式-7
                </div>
                <div class="text">
                    <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">天地盖+抽屉盒</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">下层双抽屉式，丝带上拉，盒子左右退出</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">上下盒子高度可调</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">适用多种或多样式产品的单独空展展示</span>
                  </div>
                  <div class="n-row">
                </div>
                </a>
              </li>
              <li>
              	<a href="?m=show&cid=29&id=35">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b2/8.jpg" alt="">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="tit">
                  组合式-8
                </div>
                <div class="text">
                    <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">嵌入式</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">上层盒子嵌入下层盒子</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">上下盒子高度可调</span>
                  </div>
                  <div class="n-row">
                  <span class="squire"></span>
                  <span class="n-txt">适用多种或多样式产品的单独空展展示</span>
                </div>
                </a>
              </li>
            </ul>
          </div>
            
        </div>
        <div class="swiper-pagination sp__pro_two_pagination"></div>
      </div>
    </section>

  
    <section class="part part3">
      <header class="d-flex jp__header">
      <div class="tit">盒型样式｜或方亦圆/变化不穷 — <span class="orange">呈现盒型之美</span> </div>
      </header>
  
      <div class="swiper-container sp__pro_three list__cont">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              	<a href="?m=show&cid=30&id=36">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b3/1.jpg" alt="天地盖">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more"></span>
                </div>
                <div class="pic-cont pic-d1 swiper-lazy" data-background="./phone/images/b3/a1.jpg">
                    <div class="tit">
                      天地盖
                    </div>
                </div>
                </a>
              </li>
              <li>
              	<a href="?m=show&cid=30&id=37">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b3/2.jpg" alt="吸铁翻盖">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more"></span>
                </div>
                <div class="pic-cont pic-d2 swiper-lazy" data-background="./phone/images/b3/a2.jpg">
                    <div class="tit">
                        吸铁翻盖
                    </div>
                </div>
                </a>
              </li>
            </ul>
          </div>

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              	<a href="?m=show&cid=30&id=38">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b3/3.jpg" alt="抽屉式">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more"></span>
                </div>
                <div class="pic-cont pic-d3 swiper-lazy" data-background="./phone/images/b3/a3.jpg">
                    <div class="tit">
                        抽屉式
                    </div>
                </div>
                </a>
              </li>
              <li>
              	<a href="?m=show&cid=30&id=39">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b3/4.jpg" alt="异形包装盒">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more"></span>
                </div>
                <div class="pic-cont pic-d4 swiper-lazy" data-background="./phone/images/b3/a4.jpg">
                    <div class="tit">
                        异形包装盒
                    </div>
                </div>
                </a>
              </li>
            </ul>
          </div>

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              	<a href="?m=show&cid=30&id=40">
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b3/5.jpg" alt="折叠盒">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more"></span>
                </div>
                <div class="pic-cont pic-d5 swiper-lazy" data-background="./phone/images/b3/a5.jpg">
                    <div class="tit">
                        折叠盒
                    </div>
                </div>
                </a>
              </li>
              <li>
              	<a>
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b3/6.jpg" alt="圆筒纸盒">
                    <div class="swiper-lazy-preloader"></div>
                    <span class="more"></span>
                </div>
                <div class="pic-cont pic-d6 swiper-lazy" data-background="./phone/images/b3/a6.jpg">
                    <div class="tit">
                        圆筒纸盒
                    </div>
                </div>
                </a>
              </li>
            </ul>
          </div>

        </div>
        <div class="swiper-pagination sp__pro_three_pagination"></div>
      </div>
    </section>


    <section class="part part4">
      <header class="d-flex jp__header">
        <div class="tit">最新样品 \ 个性开发及定制</div>
      </header>
  
      <div class="swiper-container sp__pro_four list__cont">
        <div class="swiper-wrapper">

        <div class="swiper-slide">
            <ul class="d-flex">
              <li>
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b4/1.jpg" alt="尺寸：230×230×105mm,材质：2.0灰板、原浆纸，黑卡,工艺：UV、烫金,内托：350G特种纸 、EVA裱特种纸">
                    <div class="swiper-lazy-preloader"></div>
                </div>
              </li>
            </ul>
          </div>

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b4/2.jpg" alt="尺寸：270×190×65mm,材质：2.5灰板、原浆纸，黑卡,工艺：UV、烫金,内托：EVA裱绒">
                    <div class="swiper-lazy-preloader"></div>
                </div>
              </li>
            </ul>
          </div>

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b4/3.jpg" alt="尺寸：280×230×85mm，材质：2.0灰板、157双铜、黑卡纸，工艺：印刷、复膜、UV、烫金，内托：EVA裱绒">
                    <div class="swiper-lazy-preloader"></div>
                </div>
              </li>
            </ul>
          </div>

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b4/4.jpg" alt="尺寸：230×230×95mm，材质：2.0灰板、原浆纸，工艺：烫金，内托：EVA裱绒">
                    <div class="swiper-lazy-preloader"></div>
                </div>
              </li>
            </ul>
          </div>

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b4/5.jpg" alt="尺寸：330×240×55mm，材质：2.0灰板、原浆纸，250G金卡，工艺：烫金，内托：EVA裱绒">
                    <div class="swiper-lazy-preloader"></div>
                </div>
              </li>
            </ul>
          </div>

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
                <div class="wrap__pic">
                    <img class="swiper-lazy" data-src="./phone/images/b4/6.jpg" alt="尺寸：430\330×270×110mm，材质：2.0灰板、原浆纸，黑卡，工艺：UV、烫金，内托：珍珠棉裱绒">
                    <div class="swiper-lazy-preloader"></div>
                </div>
              </li>
            </ul>
          </div>

        </div>
        <div class="swiper-pagination sp__pro_four_pagination"></div>
      </div>
    </section>



    <section class="part part5">
      <header class="d-flex jp__header">
        <div class="tit">卡纸瓦盒 \ 手提纸袋</div>
      </header>
  
      <div class="swiper-container sp__pro_five list__cont list__row-three">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <ul class="d-flex">
              <li>
              	<a href="?m=show&cid=31&id=41">
                  <div class="wrap__pic">
                    <img class="lazy" data-original="./phone/images/b6/1.jpg" alt="卡纸盒">
                    <span class="more">more</span>
                  </div>
                  <div class="tit">
                    卡纸盒
                  </div>
                  <div class="text">
                    常规用材<br>
                    250G-350G白卡<br>
                    牛卡、金银卡<br>
                    特种纸
                  </div>
                </a>
              </li>
              <li>
              	<a href="?m=show&cid=31&id=42">
                  <div class="wrap__pic">
                    <img class="lazy" data-original="./phone/images/b6/2.jpg" alt="彩瓦盒">
                    <span class="more">more</span>
                  </div>
                  <div class="tit">
                    彩瓦盒
                  </div>
                  <div class="text">
                  常规用材<br>
                  250G-350G<br>
                  白卡 牛卡 金银卡<br>
                  特种纸<br>
                  复合E瓦BE瓦
                  </div>
                </a>
              </li>
              <li>
              	<a href="?m=show&cid=31&id=43">
                  <div class="wrap__pic">
                    <img class="lazy" data-original="./phone/images/b6/3.jpg" alt="手提纸袋">
                    <span class="more">more</span>
                  </div>
                  <div class="tit">
                    手提纸袋
                  </div>
                  <div class="text">
                  常规用材<br>
                  120G-300G<br>
                  卡纸、牛皮纸、<br>
                  艺术纸<br>
                  又称（特种纸）
                  </div>
                </a>
              </li>
            </ul>
          </div>

        </div>
        <div class="swiper-pagination sp__pro_five_pagination"></div>
      </div>
    </section>
    

    <section class="part part8" id="part8">
      
      <div class="swiper-container sp__pro_eight list__cont i__module_new">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="?m=show&cid=28&id=44"><img class="swiper-lazy w-100" data-src="./phone/images/index/1.jpg" alt="中国年年货礼盒定制 年的味道"></a>
            <div class="swiper-lazy-preloader"></div>
          </div>
          <div class="swiper-slide">
            <a href="#part8"><img class="swiper-lazy w-100" data-src="./phone/images/index/2.jpg" alt="丝之语 丝巾礼盒定制 爱之切"></a>
            <div class="swiper-lazy-preloader"></div>
          </div>
        </div>
        <div class="swiper-pagination sp__pro_eight_pagination"></div>
      </div>
        
    </section>
    
    <section class="part part9">
      <div class="i__about">
        <img class="lazy p1" data-original="./phone/images/index/about.png" alt="提供包装礼盒解决方案,礼盒定制工厂,以完整作业设备及人才">
        <div class="hide">
          <p>提供包装礼盒解决方案</p>
          <p>礼盒定制工厂</p>
          <p>以完整作业设备及人才</p>
        </div>
      </div>
    </section>



<section class="part part6">
  <header class="d-flex jp__header">
    <div class="tit">快速出样/高度还原 — <span class="orange">精准可控</span> </div>
  </header>

  <div class="swiper-container sp__pro_six list__cont">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <ul class="d-flex">
          <li>
            <a href="?m=show&cid=3&id=14">
              <div class="wrap__pic">
                  <img class="lazy" data-original="./phone/images/b5/1.jpg" alt="">
              </div>
              <div class="tit">
                  打样范畴
              </div>
              <div class="text">
                  各类精装礼盒<br>
                  文件夹<br>
                  各类皮壳<br>
                  白卡软包装系列<br>
                  彩瓦盒<br>
                  VI整套打样<br>
                  手提袋
              </div>
            </a>
          </li>
          <li class="dy-pic-2" style="background-image: url(./phone/images/b5/2.jpg);">
            <a href="?m=show&cid=3&id=14"></a>
          </li>
          <li>
            <a href="?m=show&cid=3&id=14">
              <div class="wrap__pic">
                  <img class="lazy" data-original="./phone/images/b5/3.jpg" alt="">
              </div>
              <div class="tit">
                  常备纸张/辅料
              </div>
              <div class="text">
                  铜板纸/白卡纸<br>
                  牛皮纸<br>
                  常规特种纸<br>
                  黑/白色 EVA<br>
                  黑/白色 珍珠棉<br>
                  黑/白色 海棉<br>
                  常规绸布<br>
              </div>
            </a>
          </li>
        </ul>
      </div>

    </div>
    <div class="swiper-pagination sp__pro_six_pagination"></div>
  </div>
</section>



<section class="part part7">
  <header class="d-flex jp__header">
    <div class="tit">包装材料｜以物对型/完美匹配 — <span class="orange">精彩呈型</span> </div>
  </header>

  <div class="swiper-container sp__pro_seven list__cont">
    <div class="swiper-wrapper">

    <div class="swiper-slide">
        <ul class="d-flex align-items-stretch">
          <li>
            <div class="wrap__pic">
                <img class="swiper-lazy" data-src="./phone/images/b7/1.jpg" alt="双灰板">
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="p-txt-wrap p5-txt-wrap">
              <dl class="p-txt">
                  <dt class="tit">双灰板</dt>
                  <dd class="txt">1.常规通用板</dd>
                  <dd class="txt">2.适用于任何精装礼盒</dd>
                  <dd class="txt"><b>厚度mm与克重g对比</b></dd>
                  <dd class="txt"><img class="swiper-lazy" data-src="./phone/images/b7/1-1.svg" width="100%"></dd>
              </dl>
              
            </div>
          </li>
          <li>
            <div class="wrap__pic">
                <img class="swiper-lazy" data-src="./phone/images/b7/2.jpg" alt="密度板">
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="p-txt-wrap p5-txt-wrap">
              <dl class="p-txt">
                <dt class="tit">密度板</dt>
                <dd class="txt">1.硬度强、表面平整不易弯曲变型</dd>
                <dd class="txt">2.适用于组盒型、多隔断、复杂盒型</dd>
                <dd class="txt">3.厚度为：2.5  3.0 5.0mm</dd>
              </dl>
            </div>
          </li>
          <li>
            <div class="wrap__pic">
                <img class="swiper-lazy" data-src="./phone/images/b7/3.jpg" alt="EVA高弹泡棉">
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="p-txt-wrap p5-txt-wrap">
              <dl class="p-txt">
                <dt class="tit">EVA高弹泡棉</dt>
                <dd class="txt">1.常规颜色为黑和白</dd>
                <dd class="txt">2.面可贴绒布，特种纸</dd>
                <dd class="txt">3.平整度、硬度好</dd>
                <dd class="txt">4.成本较高</dd>
                <dd class="txt">5.有异味</dd>
              </dl>
            </div>
          </li>
        </ul>
      </div>

      <div class="swiper-slide">
        <ul class="d-flex">
          <li>
            <div class="wrap__pic">
                <img class="swiper-lazy" data-src="./phone/images/b7/4.jpg" alt="EPE 珍珠棉">
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="p-txt-wrap p5-txt-wrap">
              <dl class="p-txt">
                  <dt class="tit">EPE 珍珠棉</dt>
                  <dd class="txt">1.常规颜色为黑和白</dd>
                  <dd class="txt">2.面可贴绒布,特种纸</dd>
                  <dd class="txt">3.成本较低</dd>
                  <dd class="txt">4.异味较小</dd>
              </dl>
            </div>
          </li>
          <li>
            <div class="wrap__pic">
                <img class="swiper-lazy" data-src="./phone/images/b7/5.jpg" alt="海绵">
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="p-txt-wrap p5-txt-wrap">
              <dl class="p-txt">
                  <dt class="tit">海绵</dt>
                  <dd class="txt">1.常规颜色为黑和白</dd>
                  <dd class="txt">2.面可贴绒布</dd>
                  <dd class="txt">3.成本介于EVA和PEA之间</dd>
                  <dd class="txt">4.异味较小</dd>
              </dl>
            </div>
          </li>
          <li>
            <div class="wrap__pic">
                <img class="swiper-lazy" data-src="./phone/images/b7/6.jpg" alt="吸塑泡壳">
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="p-txt-wrap p5-txt-wrap">
              <dl class="p-txt">
                  <dt class="tit">吸塑泡壳</dt>
                  <dd class="txt">1.透明,乳白,可植绒</dd>
                  <dd class="txt">2.可塑性强</dd>
                  <dd class="txt">3.适用于</dd>
                  <dd class="txt">—产品贴合度高</dd>
                  <dd class="txt">—产品形状不规则</dd>
                  <dd class="txt">—摆放多个物品</dd>
              </dl>
            </div>
          </li>
        </ul>
      </div>

      <div class="swiper-slide">
        <ul class="d-flex">
          <li>
            <div class="wrap__pic">
                <img class="swiper-lazy" data-src="./phone/images/b7/7.jpg" alt="泡沫发泡+绸布">
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="p-txt-wrap p5-txt-wrap">
              <dl class="p-txt">
                  <dt class="tit">泡沫发泡+绸布</dt>
                  <dd class="txt">1.两者配合使用为佳</dd>
                  <dd class="txt">2.绸布颜色可选</dd>
              </dl>
            </div>
          </li>
          <li>
            <div class="wrap__pic">
                <img class="swiper-lazy" data-src="./phone/images/b7/8.jpg" alt="彩瓦">
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="p-txt-wrap p5-txt-wrap">
              <dl class="p-txt">
                  <dt class="tit">彩瓦</dt>
                  <dd class="txt">1.常用语内托</dd>
                  <dd class="txt">2.颜色艳丽</dd>
              </dl>
            </div>
          </li>
          <li>
            <div class="wrap__pic">
                <img class="swiper-lazy" data-src="./phone/images/b7/9.jpg" alt="拉菲草">
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="p-txt-wrap p5-txt-wrap">
              <dl class="p-txt">
                  <dt class="tit">拉菲草</dt>
                  <dd class="txt">1.减震</dd>
                  <dd class="txt">2.装饰作用</dd>
              </dl>
            </div>
          </li>
        </ul>
      </div>

    </div>
    <div class="swiper-pagination sp__pro_seven_pagination"></div>
  </div>
</section>
</div>

<?php require_once(dirname(__FILE__).'/footer.php'); ?>

</body>
<script src="./static/js/jquery/2.2.4/jquery.min.js"></script>
<script src="./static/js/swiper/4/js/swiper.min.js"></script>
<script src="./static/js/jquery.lazyload.js"></script>
<script src="./phone/js/phone.js"></script>
</html>
<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,viewport-fit=cover" name="viewport" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black" name="apple-mobile-web-app-status-bar-style" />
  <meta content="telephone=no" name="format-detection" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php echo GetHeader(); ?>

	<?php require_once('static.php'); ?>

</head>
<body>

<div class="main-wrap container-fluid page-lock">
<aside class="side-wrap col-md-2">
    <header class="top">
      <a id="sHome" class="logo">尚有品</a>
      <div class="phone"></div>
    </header>
    <nav class="side-menus">
      <ul>
        <li style="display: none"></li>
        <li class="bg">
          <a>
            <span class="tit">精装礼盒</span>
            <span class="txt">实样展示</span>
          </a>
        </li>
        <li>
          <a>
            <span class="tit letter-3">组合式</span>
            <span class="txt">精装礼盒</span>
          </a>
        </li>
        <li>
          <a>
            <span class="tit">盒型样式</span>
            <span class="txt">实样展示</span>
          </a>
        </li>
        <li>
          <a>
            <span class="tit">最新样品</span>
            <span class="txt">原创包装</span>
          </a>
        </li>
        <li>
          <a>
            <span class="tit">卡纸瓦盒</span>
            <span class="txt">手提纸袋</span>
          </a>
        </li>
        <li>
          <a>
            <span class="tit">快速打样</span>
            <span class="txt">壹个起做</span>
          </a>
        </li>
        <li>
          <a>
            <span class="tit">包装辅料</span>
            <span class="txt">物尽其用</span>
          </a>
        </li>
        <li>
          <a>
            <span class="tit letter-2">联&nbsp;&nbsp;系</span>
          </a>
        </li>
      </ul>
    </nav>
    <footer class="silde-footer">
      <img src="./static/img/logo/qrcode.png" class="qrcode">
    </footer>
  </aside>

  <div class="containter">
    <section id="page0" class="page page0 row p-0 m-0 h-100 first-page" style="background-color: #000">
      <div id="scrollToP1" class="arrow">
          <svg class="svg-arrow" version="1.1" viewBox="0 0 51.8 19.7" xml:space="preserve">
            <polygon class="st0" points="51.8,0 26,19.7 0,0 1.1,0 26,18.9 50.8,0 	"/>
          </svg>
      </div>
      <div class="i__pic_cont">
        <a href="#" class="i__link"></a>
        <div class="i_pic i_pic_1"></div>
        <div class="i_pic i_pic_2"></div>
        <div class="i_pic i_pic_3"></div>
        <div class="i_pic i_pic_4"></div>
      </div>
    </section>

    <section id="page1" class="page page1 row p-0 m-0 h-100">

      <section class="left-side-back col-xs-2 col-md-2 p-0"></section>
      <section class="col-xs-10 col-md-10 rightside">
      <section class="row p-0 m-0">

        <div class="slogan slogan-1 col-xs-3 col-md-3">
          <div class="sloganbg"></div>
        </div>

        <div class="cont-wrap col-xs-8 col-md-8 p-0">

          <?php require('toplink__tool.php'); ?>

          <nav class="sub-nav">
            <ul class='dflex'>
              <?php echo GetSubNav(3); ?>
            </ul>
          </nav>

          <div class="page-n-wrap">

            <section class="swiper-container recommend recommend-1">
              <div class="swiper-wrapper">

                <section class="swiper-slide">
                  <ul class="recommend-inline">
                    <li class="menu-item-1" data-menuindex='1'>
                      <a href="productshow.php?cid=1&id=1">
                        <div class="p-pic ">
                            <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/1-s.jpg">
                        </div>

                        <div class="p-txt-wrap">
                          <dl class="p-txt p1-txt-1">
                              <dt class="tit">时节类</dt>

                              <dd class="txt">茶叶礼盒</dd>
                              <dd class="txt">粽子盒</dd>
                              <dd class="txt">月饼盒</dd>
                              <dd class="txt">情人节礼盒</dd>
                              <dd class="txt">年货礼盒</dd>
                              <dd class="txt">伴手礼盒</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                      </a>
                    </li>
                    <li class="menu-item-2" data-menuindex='2'>
                        <a href="productshow.php?cid=1&id=2">
                            <div class="p-pic ">
                                <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/2-s.jpg">
                            </div>
                          <div class="p-txt-wrap">
                          <dl class="p-txt p1-txt-2">
                            <dt class="tit">烟酒类</dt>
                            <dd class="txt">酒类精包装</dd>
                            <dd class="txt">各类烟包装</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                        </a>
                    </li>
                    <li class="menu-item-3" data-menuindex='3'>
                        <a href="productshow.php?cid=1&id=3">
                          <div class="p-pic ">
                              <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/3-s.jpg">
                          </div>
                          <div class="p-txt-wrap">
                          <dl class="p-txt p1-txt-3">
                              <dt class="tit">保健品</dt>

                              <dd class="txt">人参</dd>
                              <dd class="txt">石斛</dd>
                              <dd class="txt">阿胶</dd>
                              <dd class="txt">其他</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                        </a>
                    </li>
                    <li class="menu-item-4" data-menuindex='4'>
                        <a href="productshow.php?cid=1&id=4">
                            <div class="p-pic ">
                                <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/4-s.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                                <dt class="tit">化妆品</dt>
                                <dd class="txt">肤用化妆品</dd>
                                <dd class="txt">发用化妆品</dd>
                                <dd class="txt">特殊功能化妆品</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                  </ul>
                </section>

                <section class="swiper-slide">

                  <ul class="recommend-inline">
                    <li class="menu-item-5" data-menuindex='5'>
                        <a href="productshow.php?cid=1&id=5">
                            <div class="p-pic ">
                                <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/5-s.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">服饰类</dt>
                              <dd class="txt">丝巾盒</dd>
                              <dd class="txt">衣帽盒</dd>
                              <dd class="txt">领带皮带盒</dd>
                              <dd class="txt">衬衫盒</dd>
                              <dd class="txt">鞋袜盒</dd>
                              <dd class="txt">内衣盒</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>

                        </a>
                    </li>
                    <li class="menu-item-6" data-menuindex='6'>
                        <a href="productshow.php?cid=1&id=6">
                            <div class="p-pic ">
                                <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/6-s.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">首饰类</dt>
                              <dd class="txt">手链手串手镯佛珠</dd>
                              <dd class="txt">项链</dd>
                              <dd class="txt">脚链</dd>
                              <dd class="txt">戒指</dd>
                              <dd class="txt">耳钉耳坠</dd>
                              <dd class="txt">首饰收纳盒</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                    <li class="menu-item-7" data-menuindex='7'>
                        <a href="productshow.php?cid=1&id=7">
                            <div class="p-pic ">
                                <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/7-s.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">食品类</dt>
                              <dd class="txt">时令生鲜</dd>
                              <dd class="txt">干货礼盒</dd>
                              <dd class="txt">糕点礼盒</dd>
                              <dd class="txt">杂粮</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                    <li class="menu-item-8" data-menuindex='8'>
                        <a href="productshow.php?cid=1&id=8">
                            <div class="p-pic ">
                                <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/8-s.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">电子类</dt>
                              <dd class="txt">工艺类</dd>
                              <dd class="txt">日用品</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                  </ul>
                </section>

                <section class="swiper-slide">
                  <ul class="recommend-inline">
                    <li class="menu-item-9" data-menuindex='9'>
                        <a href="productshow.php?cid=1&id=9">
                          <div class="p-pic ">
                              <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/9-s.jpg">
                          </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">色卡箱</dt>

                              <dd class="txt">橱柜色卡箱</dd>
                              <dd class="txt">装饰色卡箱</dd>
                              <dd class="txt">面板色卡箱</dd>
                              <dd class="txt">石材箱</dd>
                              <dd class="txt">涂料箱</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                    <li class="menu-item-10" data-menuindex='10'>
                        <a href="productshow.php?cid=1&id=10">
                            <div class="p-pic ">
                                <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/10-s.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">装饰色卡</dt>
                              <dd class="txt">装饰类</dd>
                              <dd class="txt">板材</dd>
                              <dd class="txt">石材</dd>
                              <dd class="txt">面料</dd>
                              <dd class="txt">涂料</dd>
                              <dd class="txt">五金配件</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                    <li class="menu-item-11" data-menuindex='11'>
                        <a href="productshow.php?cid=1&id=11">
                            <div class="p-pic ">
                                <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/11-s.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">文件夹</dt>
                              <dd class="txt">常规型</dd>
                              <dd class="txt">圆背型</dd>
                              <dd class="txt">吸铁翻盖式</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                    <li class="menu-item-12" data-menuindex='12'>
                        <a href="productshow.php?cid=1&id=12">
                            <div class="p-pic ">
                                <img class='lazyPic' data-lazypicsrc="./static/img/page/1-1/12-s.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">折叠盒</dt>
                              <dd class="txt">天地盖式</dd>
                              <dd class="txt">吸铁翻盖式</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                  </ul>
                  </section>
              </div>
              <div class="swiper-pagination s-pagination s-pagination-1"></div>
            </section>
            <div class="s-button s-prev s-prev-1"></div>
            <div class="s-button s-next s-next-1"></div>
          </div>

        </div>

      </section>
      </section>
    </section>


      <section id="page2" class="page page2 row p-0 m-0 h-100">

        <section class="left-side-back col-xs-2 col-md-2 p-0"></section>
        <section class="col-xs-10 col-md-10 rightside">
        <section class="row p-0 m-0">

          <div class="slogan slogan-2 col-xs-3 col-md-3">
              <div class="sloganbg"></div>
          </div>

          <div class="cont-wrap col-xs-8 col-md-8 p-0">

          <?php require('toplink__tool.php'); ?>

            <nav class="sub-nav">
              <ul class="clearfix">
                <li>
                  <a href="productshow.php?cid=1&id=13" class="cur">
                    <span class="mr">组合式礼盒</span> <span>创意灵感</span>
                  </a>
                </li>
              </ul>
            </nav>

            <section class="swiper-container recommend recommend-1">
              <div class="swiper-wrapper">

                <section class="swiper-slide menu-team-1">
                  <ul class="recommend-inline">
                    <li class="menu-item-1" data-menuindex='1'>
                      <a href="productshow.php?cid=1&id=13">
                        <div class="p-pic ">
                            <img class="lazyPic" data-lazypicsrc="./static/img/pro/p2/1.jpg">
                        </div>

                        <div class="p-txt-wrap">
                          <dl class="p-txt p1-txt-1">
                              <dt class="tit">组合式—1</dt>

                              <dd class="txt">封套式</dd>
                              <dd class="txt">外套左右对插</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                        </a>
                    </li>
                    <li class="menu-item-2" data-menuindex='2'>
                        <a href="productshow.php?cid=1&id=13">
                            <div class="p-pic ">
                                <img class="lazyPic" data-lazypicsrc="./static/img/pro/p2/2.jpg">
                            </div>
                          <div class="p-txt-wrap">
                          <dl class="p-txt p1-txt-2">
                            <dt class="tit">组合式—2</dt>
                            <dd class="txt">左右对开（底部连接）</dd>
                            <dd class="txt">内盒形式可多变</dd>
                            <dd class="txt">可做独立空间、可根据产品分配高度及宽度</dd>
                            <dd class="txt">适用多种或多样式产品的单独空展展示</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                        </a>
                    </li>
                    <li class="menu-item-3" data-menuindex='3'>
                        <a href="productshow.php?cid=1&id=13">
                          <div class="p-pic ">
                              <img class="lazyPic" data-lazypicsrc="./static/img/pro/p2/3.jpg">
                          </div>
                          <div class="p-txt-wrap">
                          <dl class="p-txt p1-txt-3">
                              <dt class="tit">组合式—3</dt>

                              <dd class="txt">上下盖式</dd>
                              <dd class="txt">侧板固定上下两层盒子</dd>
                              <dd class="txt">上层盒子向右180度展开</dd>
                              <dd class="txt">上下盒子高度可调</dd>
                              <dd class="txt">适用多种或多样式产品的单独空展展示</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                        </a>
                    </li>
                    <li class="menu-item-4" data-menuindex='4'>
                        <a href="productshow.php?cid=1&id=13">
                            <div class="p-pic ">
                                <img class="lazyPic" data-lazypicsrc="./static/img/pro/p2/4.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                                <dt class="tit">组合式—4</dt>
                                <dd class="txt">翻盖式</dd>
                                <dd class="txt">侧板固定上下两层盒子</dd>
                                <dd class="txt">上层盒子可以左右180度展开</dd>
                                <dd class="txt">上下盒子高度可调</dd>
                                <dd class="txt">适用多种或多样式产品的单独空展展示</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                  </ul>
                </section>

                <section class="swiper-slide  menu-team-2">
                  <ul class="recommend-inline">
                    <li class="menu-item-5" data-menuindex='5'>
                        <a href="productshow.php?cid=1&id=13">
                            <div class="p-pic ">
                                <img class="lazyPic" data-lazypicsrc="./static/img/pro/p2/5.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">组合式—5</dt>
                              <dd class="txt">九宫格型</dd>
                              <dd class="txt">格子可任意调整</dd>
                              <dd class="txt">适用多种或多样式产品的单独空展展示</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>

                        </a>
                    </li>
                    <li class="menu-item-6" data-menuindex='6'>
                        <a href="productshow.php?cid=1&id=13">
                            <div class="p-pic ">
                                <img class="lazyPic" data-lazypicsrc="./static/img/pro/p2/6.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">组合式—6</dt>
                              <dd class="txt">天地盖型</dd>
                              <dd class="txt">由三个盒子组成</dd>
                              <dd class="txt">中间盒子可用作中框</dd>
                              <dd class="txt">适用多种或多样式产品的单独空展展示</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                    <li class="menu-item-7" data-menuindex='7'>
                        <a href="productshow.php?cid=1&id=13">
                            <div class="p-pic ">
                                <img class="lazyPic" data-lazypicsrc="./static/img/pro/p2/7.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">组合式—7</dt>
    
                              <dd class="txt">天地盖+抽屉盒</dd>
                              <dd class="txt">下层双抽屉式，丝带上拉，盒子左右退出</dd>
                              <dd class="txt">上下盒子高度可调</dd>
                              <dd class="txt">适用多种或多样式产品的单独空展展示</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                    <li class="menu-item-8" data-menuindex='8'>
                        <a href="productshow.php?cid=1&id=13">
                            <div class="p-pic ">
                                <img class="lazyPic" data-lazypicsrc="./static/img/pro/p2/8.jpg">
                            </div>
                          <div class="p-txt-wrap">
                            <dl class="p-txt p1-txt-4">
                              <dt class="tit">组合式—8</dt>
    
                              <dd class="txt">嵌入式</dd>
                              <dd class="txt">上层盒子嵌入下层盒子底部</dd>
                              <dd class="txt">上下盒子高度可调</dd>
                              <dd class="txt">适用多种或多样式产品的单独空展展示</dd>
                            </dl>
                            <div class="p-txt t-txt-hover"></div>
                          </div>
                        </a>
                    </li>
                  </ul>
                </section>

              </div>
              <div class="swiper-pagination s-pagination s-pagination-1"></div>
            </section>

          </div>

        </section>
        </section>
      </section>


      <section id="page3" class="page page3 row p-0 m-0 h-100">


        

        <section class="left-side-back col-xs-2 col-md-2 p-0"></section>
          <section class="col-xs-10 col-md-10 rightside">
          <section class="row p-0 m-0">
            <div class="slogan slogan-4 col-xs-3 col-md-3">
                <div class="sloganbg"></div>
            </div>

            <div class="cont-wrap col-xs-8 col-md-8 p-0">

            <?php require('toplink__tool.php'); ?>

              <nav class="sub-nav">
                <ul class="clearfix">
                  <?php echo GetSubNav(6); ?>
                </ul>
              </nav>

            <section class="swiper-container recommend">
              <div class="swiper-wrapper">

                <section class="swiper-slide">
                  <ul class="recommend-inline">
                    <li data-menuindex="1">
                      <a href="productshow.php?cid=2&id=15">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-4/1-s.jpg" alt="">
                        <div class="p-txt-wrap p-0">
                          <img class='lazyPic' data-lazypicsrc="./static/img/page/page-4-1-1.jpg" alt="">
                          <div class="p-txt t-txt-hover"></div>
                        </div>

                      </a>
                    </li>
                    <li data-menuindex="2">
                      <a href="productshow.php?cid=2&id=16">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-4/2-s.jpg" alt="">
                        <div class="p-txt-wrap">
                          <img class='lazyPic' data-lazypicsrc="./static/img/page/page-4-2-1.jpg" alt="">
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                      </a>
                    </li>
                    <li data-menuindex="3">
                      <a href="productshow.php?cid=2&id=17">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-4/3-s.jpg" alt="">
                        <div class="p-txt-wrap">
                          <img class='lazyPic' data-lazypicsrc="./static/img/page/page-4-3-1.jpg" alt="">
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                      </a>
                    </li>
                    <li data-menuindex="4">
                      <a href="productshow.php?cid=2&id=18">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-4/4-s.jpg" alt="">
                        <div class="p-txt-wrap">
                          <img class='lazyPic' data-lazypicsrc="./static/img/page/page-4-4-1.jpg" alt="">
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                      </a>
                    </li>
                    <li data-menuindex="5">
                      <a href="productshow.php?cid=2&id=19">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-4/5-s.jpg" alt="">
                        <div class="p-txt-wrap">
                          <img class='lazyPic' data-lazypicsrc="./static/img/page/page-4-5-1.jpg" alt="">
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </section>
              </div>
            </section>

          </div>

        </section>
        </section>

      </section>

      <!-- page4 -->
      <section id="page4" class="page page4 row p-0 m-0 h-100">

        <section class="left-side-back col-xs-2 col-md-2 p-0"></section>
        <section class="col-xs-10 col-md-10 rightside">
        <section class="row p-0 m-0">

            <div class="slogan slogan-7 col-xs-3 col-md-3">
                <div class="sloganbg"></div>
            </div>

          <div class="cont-wrap col-xs-8 col-md-8 p-0">

            <?php require('toplink__tool.php'); ?>

              <nav class="sub-nav">
                <ul class="clearfix">
                  <li>
                    <a class="cur">
                        最新样品 原创包装
                    </a>
                  </li>
                </ul>
              </nav>

              <section class="swiper-container recommend recommend-7">
                  <div class="swiper-wrapper">
                      <section class="swiper-slide">

                          <div class="new-cont-wrap">
                            <div class="box-pic-l">
                              <div class="box-n-pic">
                              <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/1.jpg" alt="">
                              </div>
                            </div>
                            <div class="box-pic-r">
                                <div class="box-n-pic">
                                  <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/1-1.jpg" alt="">
                                </div>
                                <div class="box-n-pic">
                                  <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/1-2.jpg" alt="">
                                </div>
                            </div>
                          </div>

                            <div class="new-cont-wrap-info dflex">
                              <div class="left-l">
                                  <div class="row-1">盒 型</div>
                                  <div class="row-2">规 格</div>
                              </div>
                              <div class="left-c">
                                <div class="row-1">组盒式礼盒</div>
                                <div class="row-2">尺寸：230×230×105mm</div>
                              </div>
                              <div class="left-r">
                                  <div class="row-1">材质：2.0灰板、原浆纸，黑卡</div>
                                  <div class="row-2">
                                    <span style="margin-right:15px">工艺：UV、烫金</span>
                                    <span>内托：上层350G特种纸，下层EVA裱特种纸</span>
                                  </div>
                                  <div class="row-3">
                                    <span style="margin-right:5px">尺寸：1\侧板固定上下两层盒子</span>
                                    <span style="margin-right:5px"> 2\上层盒子可以180度向右展开</span>
                                    <span style="margin-right:5px">3\上下盒子高度可调</span>  
                                          
                                  </div>
                              </div>
                            </div>

                      </section>


                      <section class="swiper-slide">
                        <div class="new-cont-wrap">
                          <div class="box-pic-l">
                            <div class="box-n-pic">
                            <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/2.jpg" alt="">
                            </div>
                          </div>
                          <div class="box-pic-r">
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/2-1.jpg" alt="">
                              </div>
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/2-2.jpg" alt="">
                              </div>
                          </div>
                        </div>
                        <div class="new-cont-wrap-info dflex">
                          <div class="left-l">
                              <div class="row-1">盒 型</div>
                              <div class="row-2">规 格</div>
                          </div>
                          <div class="left-c">
                            <div class="row-1">组盒式礼盒</div>
                            <div class="row-2">尺寸：270×190×65mm</div>
                          </div>
                          <div class="left-r">
                              <div class="row-1">材质：2.5灰板、原浆纸</div>
                              <div class="row-2">
                                <span style="margin-right:15px">工艺：烫金</span>
                                <span>内托：EVA裱绒</span>
                              </div>
                              <div class="row-3">
                                <span style="margin-right:5px">尺寸：1\后背连接+丝带固定</span>
                                <span style="margin-right:5px">2\内盒套内盒</span>  
                                <span style="margin-right:5px">3\内盒根据物品高度可调</span>
                              </div>
                          </div>
                        </div>
                      </section>


                      <section class="swiper-slide">
                        <div class="new-cont-wrap">
                          <div class="box-pic-l">
                            <div class="box-n-pic">
                            <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/3.jpg" alt="">
                            </div>
                          </div>
                          <div class="box-pic-r">
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/3-1.jpg" alt="">
                              </div>
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/3-2.jpg" alt="">
                              </div>
                          </div>
                        </div>
                        <div class="new-cont-wrap-info dflex">
                          <div class="left-l">
                              <div class="row-1">盒 型</div>
                              <div class="row-2">规 格</div>
                          </div>
                          <div class="left-c">
                            <div class="row-1">组盒式礼盒</div>
                            <div class="row-2">尺寸：280×230×85mm</div>
                          </div>
                          <div class="left-r">
                              <div class="row-1">材质：2.0灰板、157双铜印刷、黑卡纸、磁铁</div>
                              <div class="row-2">
                                <span style="margin-right:15px">工艺：复膜、印刷、UV、烫金 </span>
                                <span>内托：上层EVA裱绒，下层珍珠棉裱绒</span>
                              </div>
                              <div class="row-3">
                              备注：
                                <span style="margin-right:5px">1\侧板固定上下两层盒子</span>
                                <span style="margin-right:5px">2\上层盒子可以180度左右展开</span>  
                                <span style="margin-right:5px">3\上下盒子高度可调</span>
                              </div>
                          </div>
                        </div>
                      </section>


                      <section class="swiper-slide">
                        <div class="new-cont-wrap">
                          <div class="box-pic-l">
                            <div class="box-n-pic">
                            <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/4.jpg" alt="">
                            </div>
                          </div>
                          <div class="box-pic-r">
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/4-1.jpg" alt="">
                              </div>
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/4-2.jpg" alt="">
                              </div>
                          </div>
                        </div>
                        <div class="new-cont-wrap-info dflex">
                          <div class="left-l">
                              <div class="row-1">盒 型</div>
                              <div class="row-2">规 格</div>
                          </div>
                          <div class="left-c">
                            <div class="row-1">组盒式礼盒</div>
                            <div class="row-2">尺寸：230×230×95mm</div>
                          </div>
                          <div class="left-r">
                              <div class="row-1">材质：2.0灰板、原浆纸，黑卡</div>
                              <div class="row-2">
                                <span style="margin-right:15px">工艺：烫金</span>
                                <span>内托：上层350G特种纸，下层EVA裱绒布</span>
                              </div>
                              <div class="row-3">
                                备注：
                                <span style="margin-right:5px">1\侧板固定上下两层盒子</span>
                                <span style="margin-right:5px">2\上层盒子可以180度向右展开</span>  
                                <span style="margin-right:5px">3\上下盒子高度可调</span>
                              </div>
                          </div>
                        </div>
                      </section>


                      <section class="swiper-slide">
                        <div class="new-cont-wrap">
                          <div class="box-pic-l">
                            <div class="box-n-pic">
                            <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/5.jpg" alt="">
                            </div>
                          </div>
                          <div class="box-pic-r">
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/5-1.jpg" alt="">
                              </div>
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/5-2.jpg" alt="">
                              </div>
                          </div>
                        </div>
                        <div class="new-cont-wrap-info dflex">
                          <div class="left-l">
                              <div class="row-1">盒 型</div>
                              <div class="row-2">规 格</div>
                          </div>
                          <div class="left-c">
                            <div class="row-1">双开门书盒</div>
                            <div class="row-2">330×240×55mm</div>
                          </div>
                          <div class="left-r">
                              <div class="row-1">材质：2.0灰板、原浆纸，腰封300G金卡</div>
                              <div class="row-2">
                                <span style="margin-right:15px">工艺：烫金</span>
                                <span>内托：EVA裱绒</span>
                              </div>
                              <div class="row-3">
                              </div>
                          </div>
                        </div>
                      </section>


                      <section class="swiper-slide">
                        <div class="new-cont-wrap">
                          <div class="box-pic-l">
                            <div class="box-n-pic">
                            <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/6.jpg" alt="">
                            </div>
                          </div>
                          <div class="box-pic-r">
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/6-1.jpg" alt="">
                              </div>
                              <div class="box-n-pic">
                                <img class='lazyPic' data-lazypicsrc="./static/img/pro/p3/6-2.jpg" alt="">
                              </div>
                          </div>
                        </div>
                        <div class="new-cont-wrap-info dflex">
                          <div class="left-l">
                              <div class="row-1">盒 型</div>
                              <div class="row-2">规 格</div>
                          </div>
                          <div class="left-c">
                            <div class="row-1">组盒式礼盒</div>
                            <div class="row-2">430\330×275×110mm</div>
                          </div>
                          <div class="left-r">
                              <div class="row-1">材质：2.5灰板、原浆纸，黑卡</div>
                              <div class="row-2">
                                <span style="margin-right:15px">工艺：UV、烫金</span>
                                <span>内托：珍珠棉裱绒布</span>
                              </div>
                              <div class="row-3">
                              </div>
                          </div>
                        </div>
                      </section>
                      

                  </div>
                <div class="swiper-pagination s-pagination s-pagination-7"></div>
              </section>

          </div>
        </section>
        </section>

      </section>
      <!-- /page4 -->

      <!-- page5 -->
      <section id="page5" class="page page5 row p-0 m-0 h-100">
          <section class="left-side-back col-xs-2 col-md-2 p-0"></section>
          <section class="col-xs-10 col-md-10 rightside">
          <section class="row p-0 m-0">

            <div class="slogan slogan-6 col-xs-3 col-md-3">
                <div class="sloganbg"></div>
            </div>

          <div class="cont-wrap col-xs-8 col-md-8 p-0">


          <?php require('toplink__tool.php'); ?>

            <nav class="sub-nav">
              <ul class="clearfix">
                <?php echo GetSubNav(	8); ?>
              </ul>
            </nav>

            <section class="swiper-container recommend recommend-6">
              <div class="swiper-wrapper">

                <section class="swiper-slide">
                  <ul class="recommend-inline">
                    <li data-menuindex="1">
                      <a href="productshow.php?cid=2&id=20">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-6/1-s.jpg" alt="卡纸盒">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">卡纸盒</dt>
                              <dd class="txt">常规用材</dd>
                              <dd class="txt">250G-350G白卡、牛卡、金银卡、特种纸</dd>
                              <dd class="txt">常规工艺</dd>
                              <dd class="txt">印刷、复膜、UV、烫金、凹凸、贴窗</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                      </a>
                    </li>
                    <li data-menuindex="2">
                      <a href="productshow.php?cid=2&id=21">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-6/2-s.jpg" alt="彩瓦盒">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">彩瓦盒</dt>
                              <dd class="txt">常规用材</dd>
                              <dd class="txt">250G-350G白卡、牛卡、金银卡、
                                特种纸复合E瓦，BE瓦</dd>
                              <dd class="txt">常规工艺</dd>
                              <dd class="txt">印刷、复膜、UV、烫金、凹凸
                                贴窗、手提绳、塑料提手</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                      </a>
                    </li>
                    <li data-menuindex="3">
                      <a href="productshow.php?cid=2&id=22">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-6/3-s.jpg" alt="">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">手提纸袋</dt>
                              <dd class="txt">常规用材</dd>
                              <dd class="txt">卡纸、牛皮纸、、艺术纸又称（特种纸）
                                珠光纸，触感纸，原浆纸</dd>
                              <dd class="txt">款式</dd>
                              <dd class="txt">通用手提袋，梯形袋，挖口袋，抽绳袋
                                折叠袋，信封袋，还有比较特殊的船型袋等</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </section>
              </div>
            </section>

          </div>
        </section>
        </section>

          
      </section>
      <!-- /page5 -->

      <!-- page6 -->
      <section id="page6" class="page page6 row p-0 m-0 h-100">

        
        <section class="left-side-back col-xs-2 col-md-2 p-0"></section>
        <section class="col-xs-10 col-md-10 rightside">
          <section class="row p-0 m-0">

          <div class="slogan slogan-3 col-xs-3 col-md-3">
              <div class="sloganbg"></div>
          </div>

          <div class="cont-wrap col-xs-8 col-md-8 p-0">

          <?php require('toplink__tool.php'); ?>

            <nav class="sub-nav">
              <ul class="clearfix">
                <li>
                  <a href="/productshow.php?cid=2&id=14" class="cur">
                    <span class="mr">快速打样</span> <span>壹个起做</span>
                  </a>
                </li>
              </ul>
            </nav>

            <section class="swiper-container recommend recommend-3">
              <div class="swiper-wrapper">

                <section class="swiper-slide">
                  <ul class="recommend-inline">
                    <li>
                      <a href="/productshow.php?cid=2&id=14">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-3/1-s.jpg" alt="">
                        <div class="p-txt-wrap">
                          <dl class="p-txt">
                            <dt class="tit">打样范畴</dt>
                            <dd class="txt">各类精装礼盒</dd>
                            <dd class="txt">文件夹</dd>
                            <dd class="txt">各类皮壳</dd>
                            <dd class="txt">白卡软包装系列</dd>
                            <dd class="txt">彩瓦盒</dd>
                            <dd class="txt">VI整套打烊</dd>
                            <dd class="txt">手提袋</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                    <li class="green-wrap">
                      <a href="/productshow.php?cid=2&id=14">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-3/2-s.jpg" alt="">
                        <div class="p-txt-wrap p-txt-c-wrap">
                          <img class='lazyPic' data-lazypicsrc="./static/img/page/page-3-1-2.png" alt="">
                          <dl class="p-txt">
                            <dd class="txt font-2-4rem letter-s">常规精装礼盒</dd>
                            <dd class="txt font-2-4rem">手提袋/彩瓦盒</dd>
                            <dd class="txt font-3-2rem">立等可取</dd>
                          </dl>
                          <div class="p-txt t-txt-hover"></div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="/productshow.php?cid=2&id=14">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-3/3-s.jpg" alt="">
                        <div class="p-txt-wrap">
                          <dl class="p-txt">
                            <dt class="tit">常备纸张/辅料</dt>
                            <dd class="txt">铜版纸/亚粉纸</dd>
                            <dd class="txt">白卡纸/牛皮纸</dd>
                            <dd class="txt">金银卡纸/各种特种纸</dd>
                            <dd class="txt">黑/白 EVA</dd>
                            <dd class="txt">黑/白 珍珠棉</dd>
                            <dd class="txt">黑/白 海绵</dd>
                            <dd class="txt">常规绸布</dd>
                            <dd class="txt">F/E/B/BF瓦</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                  </ul>
                </section>
              </div>
            </section>

          </div>

        </section>
        </section>

      </section>


      <!-- page7 -->
      <section id="page7" class="page page7 row p-0 m-0 h-100">

      <section class="left-side-back col-xs-2 col-md-2 p-0"></section>
          <section class="col-xs-10 col-md-10 rightside">
          <section class="row p-0 m-0">

            <div class="slogan slogan-5 col-xs-3 col-md-3">
                <div class="sloganbg"></div>
            </div>

          <div class="cont-wrap col-xs-8 col-md-8 p-0">

          <?php require('toplink__tool.php'); ?>

            <nav class="sub-nav">
              <ul class="clearfix">
                <li>
                  <a href="javacript:;" class="cur">
                    包装材料 无尽其用
                  </a>
                </li>
              </ul>
            </nav>

            <section class="swiper-container recommend recommend-5">
              <div class="swiper-wrapper">

                <section class="swiper-slide">
                  <ul class="recommend-inline">
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/1-s.jpg" alt="">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt" style="height: auto;margin-bottom:1rem;">
                              <dt class="tit">双灰板</dt>
                              <dd class="txt">常规通用板</dd>
                              <dd class="txt">适用于任何精装礼盒</dd>
                              <dd class="txt">厚度mm与克重g对比</dd>
                          </dl>
                          <img class='lazyPic' data-lazypicsrc="./static/img/page/page-5-1-2.png" class="pl-1 pr-1">
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/2-s.jpg" alt="">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                            <dt class="tit">密度板</dt>
                            <dd class="txt">硬度强、表面平整、不易弯曲变形</dd>
                            <dd class="txt">适用于组合型、多隔断复杂型</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/3-s.jpg" alt="">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                            <dt class="tit">EVA高弹泡棉</dt>
                            <dd class="txt">常规颜色为黑和白</dd>
                            <dd class="txt">——量大颜色可定做</dd>
                            <dd class="txt">表面可贴绒布</dd>
                            <dd class="txt">——绒布颜色可选</dd>
                            <dd class="txt">平整度硬度好、成本较高短时间内有气味</dd>
                            <dd class="txt">厚度可随实际切割</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/4-s.jpg" alt="">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">EPE 珍珠棉</dt>
                              <dd class="txt">常规颜色为黑和白</dd>
                              <dd class="txt">——量大颜色可定做</dd>
                              <dd class="txt">表面可贴绒布</dd>
                              <dd class="txt">——绒布颜色可选</dd>
                              <dd class="txt">成本较低、无气味</dd>
                              <dd class="txt">厚度可随实际切割</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/5-s.jpg" alt="">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">海绵</dt>
                              <dd class="txt">常规颜色为黑和白</dd>
                              <dd class="txt">表面可贴绒布</dd>
                              <dd class="txt">——绒布颜色可选</dd>
                              <dd class="txt">无气味</dd>
                              <dd class="txt">厚度可随实际切割</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                  </ul>
                </section>

                <section class="swiper-slide">
                  <ul class="recommend-inline">
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/6-s.jpg" alt="">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">吸塑泡壳</dt>
                              <dd class="txt">透明乳白可植绒</dd>
                              <dd class="txt">可塑性强</dd>
                              <dd class="txt">适用于</dd>
                              <dd class="txt">产品贴合高度</dd>
                              <dd class="txt">产品形状不规则</dd>
                              <dd class="txt">摆放多个物品</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/7-s.jpg" alt="泡沫发泡+绸布">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">泡沫发泡+绸布</dt>
                              <dd class="txt">两者配合使用最佳</dd>
                              <dd class="txt">绸布颜色可选</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/8-s.jpg" alt="彩瓦">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">彩瓦</dt>
                              <dd class="txt">常用语内托</dd>
                              <dd class="txt">颜色艳丽</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/9-s.jpg" alt="拉菲草">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">拉菲草</dt>
                              <dd class="txt">起减震装饰作用</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javacript:;">
                        <img class='lazyPic' data-lazypicsrc="./static/img/page/1-5/10-s.jpg" alt="金银卡纸">
                        <div class="p-txt-wrap p5-txt-wrap">
                          <dl class="p-txt">
                              <dt class="tit">金银卡纸</dt>
                              <dd class="txt">又称镀铝纸</dd>
                              <dd class="txt">需UV纸印刷</dd>
                              <dd class="txt">呈梦幻般色彩</dd>
                          </dl>
                        </div>
                      </a>
                    </li>
                  </ul>
                </section>
              </div>
              <div class="s-pagination s-pagination-5"></div>
            </section>

          </div>

        </section>
        </section>

      </section>


      <!-- page8 -->
      <section id="page8" class="page page8 row p-0 m-0 h-100">

          <section class="left-side-back col-xs-2 col-md-2 p-0"></section>
          <section class="col-xs-10 col-md-10 rightside">
          <section class="row p-0 m-0">

            <div class="slogan slogan-1 col-xs-3 col-md-3"></div>
            <div class="col-xs-1 col-md-1 p-0"></div>
            <div class="cont-wrap contact-wrap col-xs-9 col-md-9 p-0">


              <nav class="sub-nav"></nav>
              <div class="cont-1">
                  <img class='cont-pic-1 lazyPic' data-lazypicsrc="./static/img/page/cont-1.png" class="cont-pic-1">
              </div>
              <div class="cont-2">
                  <img class='cont-pic-2 lazyPic' data-lazypicsrc="./static/img/page/cont-2.jpg" class="cont-pic-2">
              </div>
              <div class="cont-3">
                <div class="shuiyin"></div>
                  <p>
                  杭州尚有品包装有限公司（简称：尚品）座落于杭州市江干区，一家集原创包装策划、打样、定制、生产于一体的高档包装厂家，沉浸于包装行业20余年，拥有实体工厂的包装公司。采用流水线包装设备机械化生产，50余人的熟练操作工生产团队，确保包装的品质与完成效率。
                  </p>
                  <p>
                    尚品包装目前分有两类生产车间，一种以纸质产品包装为主的精装礼盒车间，另一种以布料和皮革为主的木箱盒车间。主营包装定制产品：包装盒、手提木箱、色卡等...适用于礼品、保健品、服装、化妆品、珠宝首饰、红酒、食品等行业包装。
                  </p>
              </div>
            </div>
          </section>
          </section>

      </section>

    </div>


	<?php require_once('right__tool.php'); ?>
</div>



</body>
<?php require_once('static__js.php'); ?>
<script src="./static/js/util.js"></script>
</html>
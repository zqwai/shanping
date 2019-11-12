<?php	if(!defined('IN_MOBILE')) exit('Request Error!');
$tbname = '';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<?php echo GetHeader(1,$cid,$id); ?>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,viewport-fit=cover" name="viewport" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="HandheldFriendly"content="true"/>
	<meta name="format-detection"content="telephone=no">
	<meta http-equiv="x-rim-auto-match"content="none"/>

	<link rel="stylesheet" href="./static/js/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="./static/js/swiper/4/css/swiper.min.css">
	<link rel="stylesheet" href="./phone/photoswipe/photoswipe.css"> 
	<link rel="stylesheet" href="./phone/photoswipe/default-skin/default-skin.css"> 
	<link rel="stylesheet" href="./phone/css/main.css">
</head>
<body>


<header id="topHeader" class="topheader">
  <div class="topbar"> 
    <div class="d_logo"></div>
    <div class="navbtn navbtn-nav">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="navbtn navbtn-back">
      <svg class="icon" viewBox="0 0 1024 1024"><path d="M705.6 930.8c-6.2 0-12.5-1.9-18-5.8l-486-344.8c-8-5.7-12.8-14.7-13.1-24.5s4-19.1 11.6-25.2l485.7-390.4c13.4-10.8 33-8.6 43.8 4.8 10.8 13.4 8.6 33-4.8 43.8L271.2 553.3l452.4 321c14 10 17.3 29.4 7.4 43.5-6.1 8.5-15.7 13-25.4 13z" p-id="2608"></path></svg>
    </div>
  </div> 

  <nav class="topnav">
    <ul>
        <li class="">
			<a href="4g.php" class="cur">
				<span class="tit">首页</span>
			</a>
        </li>
        <li class="">
        <a href="javacript:;">
            <span class="tit">精品礼盒</span>
            <span class="txt">实样展示</span>
        </a>
        <span class="icon-open"><i></i><i></i></span>
        <div class="subnav">
            <ul>
				<li><a href="?m=show&cid=1&id=1">时节类</a></li>
				<li><a href="?m=show&cid=1&id=2">烟酒类</a></li>
				<li><a href="?m=show&cid=1&id=3">保健品</a></li>
				<li><a href="?m=show&cid=1&id=4">化妆品 </a></li>
				<li><a href="?m=show&cid=1&id=6">服饰类</a></li>
				<li><a href="?m=show&cid=1&id=5">首饰类</a></li>
				<li><a href="?m=show&cid=1&id=7">食品类</a></li>
				<li><a href="?m=show&cid=1&id=8">电子/工艺</a></li>
				<li><a href="?m=show&cid=1&id=9">色卡箱</a></li>
				<li><a href="?m=show&cid=1&id=10">装饰样卡</a></li>
				<li><a href="?m=show&cid=1&id=11">文件夹</a></li>
				<li><a href="?m=show&cid=1&id=12">折叠盒 </a></li>
			</ul>
        </div>
        </li>
        <li class="">
          <a href="?m=show&cid=1&id=13">
              <span class="tit">组&nbsp;&nbsp;合&nbsp;&nbsp;式</span>
              <span class="txt">精装礼盒</span>
          </a>
        </li>
        <li class="">
        <a href="?m=show&cid=3&id=14">
            <span class="tit">快速打样</span>
            <span class="txt">壹个起做</span>
        </a>
        </li>
        <li class="">
        <a href="?m=show&cid=1&amp;id=15">
            <span class="tit">盒型样式</span>
            <span class="txt">实样展示</span>
        </a>
        <span class="icon-open"><i></i><i></i></span>
        <div class="subnav">
            <ul>
				<li><a href="?m=show&cid=19&id=15">天地盖</a></li>
				<li><a href="?m=show&cid=19&id=16">吸铁翻盖</a></li>
				<li><a href="?m=show&cid=19&id=17">抽屉式 </a></li>
				<li><a href="?m=show&cid=19&id=18">异形</a></li>
				<li><a href="?m=show&cid=19&id=19">折叠盒 </a></li>
			</ul>
        </div>
        </li>
        <li class="">
        <a href="javacript:;">
            <span class="tit">包装辅料</span>
            <span class="txt">物尽其用</span>
        </a>
        </li>
        <li class="">
        <a href="?m=show&cid=2&amp;id=20">
            <span class="tit">卡纸瓦盒</span>
            <span class="txt">手提纸袋</span>
        </a>
        <span class="icon-open"><i></i><i></i></span>
        <div class="subnav">
            <ul>
				<li><a href="?m=show&cid=5&id=20">卡纸盒 </a></li>
				<li><a href="?m=show&cid=5&id=21">彩瓦盒</a></li>
				<li><a href="?m=show&cid=5&id=22">手提纸袋</a></li>
			</ul>
        </div>
        </li>
        <li>
        <a href="javacript:;">
            <span class="tit">最新样品</span>
            <span class="txt">原创包装</span>
        </a>
        </li>
        <li>
        <a href="javacript:;">
            <span class="tit">联系</span>
        </a>
        </li>
    </ul>
  </nav>
</header>

<div class="sp__cont">
  <div class="wrap__topbanner">
    <img src="./phone/images/topbanner.png" alt="">
  </div>
  

  	<article class="article p_gallery">

		
		<!-- 栏目内容 -->
		<?php
		$row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
		if(!empty($row['id']))
		{
		?>
				<?php
				switch($row['infotype'])
				{
					case 1:
						$tbname = '#@__infolist';
					break;
					case 2:
						$tbname = '#@__infoimg';
					break;
				}
				//增加一次点击量
				$dosql->ExecNoneQuery("UPDATE `$tbname` SET hits=hits+1 WHERE `id`=$id");
				$row = $dosql->GetOne("SELECT * from `$tbname` WHERE `id`=$id");
				?>
        
        <h1 class="title">
        <span class="orange"><?php echo $row['title']; ?></span>
          <span class="gray">- 展示</span>
        </h1>
					
				<?php
				if($tbname == '#@__infoimg' &&
				   $row['picurl'] != '')
				{
				?>
					<div class="contimg none">
						<img src="<?php echo $row['picurl']; ?>" onerror="this.src='./static/img/loading.gif'" />
					</div>
				<?php
				}
				?>
                <div class="conttxt">
                  <?php
                  if($row['content'] != '')
                    echo GetContPage($row['content']);
                  else
                    echo '网站资料更新中...';
                  ?>
                </div>



			<!-- 相关文章开始 -->
			<ul class="quickNav">
				</li>
					<?php
	
				//获取上一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE classid=".$row['classid']." AND orderid<".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
				if($r < 1)
				{
					echo '<li class="left">
					<span class="null">
						无
					</span>
					</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = '?m=show&cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'productshow-'.$r['classid'].'-'.$r['id'].'-1.html';

					echo '
					<li class="left">
					<span class="dlink" data-href="'.$gourl.'" title="'.$r['title'].'">
					<svg class="icon" viewBox="0 0 200 200" ><path d="M59.8,100l89.4-88.8c1.7-1.6,1.7-4.3,0-6c-1.7-1.7-4.4-1.8-6-0.1L50.9,96.7c-0.9,0.9-1.3,2.1-1.2,3.3 c-0.1,1.2,0.3,2.4,1.2,3.3l92.3,91.7c1.7,1.6,4.4,1.6,6-0.1c1.7-1.7,1.7-4.4,0-6L59.8,100z"/></svg>
					</span>
					</li>';
				}
				//获取下一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE classid=".$row['classid']." AND orderid>".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid ASC");
				if($r < 1)
				{
				echo '
					<li class="auto"></li>
					<li class="up">
					<span class="dlink" data-href="/">
					<svg t="1571930142651" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5895" width="200" height="200"><path d="M96 480c-9.6 0-19.2-3.2-25.6-12.8-12.8-12.8-9.6-35.2 3.2-44.8L451.2 112c35.2-25.6 86.4-25.6 118.4 0l377.6 307.2c12.8 9.6 16 32 3.2 44.8-12.8 12.8-32 16-44.8 3.2L531.2 166.4c-9.6-6.4-28.8-6.4-38.4 0L115.2 473.6c-6.4 6.4-12.8 6.4-19.2 6.4z m720 448H608c-19.2 0-32-12.8-32-32V745.6c0-22.4-38.4-44.8-67.2-44.8-28.8 0-64 19.2-64 44.8V896c0 19.2-12.8 32-32 32H211.2c-48 0-83.2-35.2-83.2-80V544c0-19.2 12.8-32 32-32s32 12.8 32 32v304c0 9.6 6.4 16 19.2 16H384V745.6c0-64 67.2-108.8 128-108.8s131.2 44.8 131.2 108.8V864h176c9.6 0 16 0 16-19.2V544c0-19.2 12.8-32 32-32s32 12.8 32 32v304c-3.2 48-35.2 80-83.2 80z" p-id="5896"></path></svg>
					</span>
					</li>
					<li class="auto"></li>
					<li class="right">
					<span class="null">
					无
					</span>
					</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = '?m=show&cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'productshow-'.$r['classid'].'-'.$r['id'].'-1.html';

				echo '
					<li class="auto"></li>
					<li class="up">
					<span class="dlink" data-href="/">
					<svg t="1571930142651" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5895" width="200" height="200"><path d="M96 480c-9.6 0-19.2-3.2-25.6-12.8-12.8-12.8-9.6-35.2 3.2-44.8L451.2 112c35.2-25.6 86.4-25.6 118.4 0l377.6 307.2c12.8 9.6 16 32 3.2 44.8-12.8 12.8-32 16-44.8 3.2L531.2 166.4c-9.6-6.4-28.8-6.4-38.4 0L115.2 473.6c-6.4 6.4-12.8 6.4-19.2 6.4z m720 448H608c-19.2 0-32-12.8-32-32V745.6c0-22.4-38.4-44.8-67.2-44.8-28.8 0-64 19.2-64 44.8V896c0 19.2-12.8 32-32 32H211.2c-48 0-83.2-35.2-83.2-80V544c0-19.2 12.8-32 32-32s32 12.8 32 32v304c0 9.6 6.4 16 19.2 16H384V745.6c0-64 67.2-108.8 128-108.8s131.2 44.8 131.2 108.8V864h176c9.6 0 16 0 16-19.2V544c0-19.2 12.8-32 32-32s32 12.8 32 32v304c-3.2 48-35.2 80-83.2 80z" p-id="5896"></path></svg>
					</span>
					</li>
					<li class="auto"></li>
					<li class="right">
					<span class="dlink" data-href="'.$gourl.'" title="'.$r['title'].'">
					<svg class="icon" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve"><path d="M50.9,188.8c-1.7,1.6-1.7,4.3,0,6c1.7,1.7,4.4,1.8,6,0.1l92.3-91.7c0.9-0.9,1.3-2.1,1.2-3.3c0.1-1.2-0.3-2.4-1.2-3.3L56.9,5 c-1.7-1.6-4.4-1.6-6,0.1c-1.7,1.7-1.7,4.4,0,6l89.4,88.8L50.9,188.8z"/></svg>
					</span>
					</li>';
				}
				?>
				</ul>
				
                <input type="hidden" name="aid" id="aid" value="<?php echo $id; ?>" />
				<input type="hidden" name="molds" id="molds" value="2" />
			<!-- 相关文章结束 -->







		<?php
		}
		?>

	</article>
</div>
<?php require_once(dirname(__FILE__).'/footer.php'); ?>


<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">
      <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
              <div class="pswp__counter"></div>
              <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
              <button class="pswp__button pswp__button--share hide" title="Share"></button>
              <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
              <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
              <div class="pswp__preloader">
                  <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                      <div class="pswp__preloader__donut"></div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
              <div class="pswp__share-tooltip"></div> 
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
          </button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
          </button>
          <div class="pswp__caption">
              <div class="pswp__caption__center"></div>
          </div>
      </div>
  </div>
</div>

<script src="./static/js/jquery/2.2.4/jquery.min.js"></script>
<script src="./static/js/swiper/4/js/swiper.min.js"></script>
<script src="./static/js/jquery.lazyload.js"></script>
<script src="./phone/photoswipe/photoswipe.min.js"></script> 
<script src="./phone/photoswipe/photoswipe-ui-default.min.js"></script> 
<script src="./phone/js/phone.js"></script>
</body>

<script>
  (function() {
	$('.dlink').on('click',function(){
		var dHref = $(this).data('href');
		window.location.href = dHref;
	})
	
  var initPhotoSwipeFromDOM = function(gallerySelector) {

    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            el,
            childElements,
            thumbnailEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {
            el = thumbElements[i];

            // include only element nodes 
            if(el.nodeType !== 1) {
              continue;
            }

            childElements = el.children;

            size = el.getAttribute('data-size').split('x');

            // create slide object
            item = {
          src: el.getAttribute('href'),
          w: parseInt(size[0], 10),
          h: parseInt(size[1], 10),
          author: el.getAttribute('data-author')
            };

            item.el = el; // save link to element for getThumbBoundsFn

            if(childElements.length > 0) {
              item.msrc = childElements[0].getAttribute('src'); // thumbnail url
              if(childElements.length > 1) {
                  item.title = childElements[1].innerHTML; // caption (contents of figure)
              }
            }


        var mediumSrc = el.getAttribute('data-med');
              if(mediumSrc) {
                size = el.getAttribute('data-med-size').split('x');
                // "medium-sized" image
                item.m = {
                    src: mediumSrc,
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                };
              }
              // original image
              item.o = {
                src: item.src,
                w: item.w,
                h: item.h
              };

            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        var clickedListItem = closest(eTarget, function(el) {
            return el.tagName === 'A';
        });

        if(!clickedListItem) {
            return;
        }

        var clickedGallery = clickedListItem.parentNode;

        var childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) { 
                continue; 
            }

            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }

        if(index >= 0) {
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };

    var photoswipeParseHash = function() {
      var hash = window.location.hash.substring(1),
        params = {};

        if(hash.length < 5) { // pid=1
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');  
            if(pair.length < 2) {
                continue;
            }           
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
          params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

      items = parseThumbnailElements(galleryElement);

        options = {

            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function(index) {
                var thumbnail = items[index].el.children[0],
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect(); 

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            },

            addCaptionHTMLFn: function(item, captionEl, isFake) {
          if(!item.title) {
            captionEl.children[0].innerText = '';
            return false;
          }
          captionEl.children[0].innerHTML = item.title +  '<br/><small>Photo: ' + item.author + '</small>';
          return true;
            }
        
        };


        if(fromURL) {
          if(options.galleryPIDs) {
            for(var j = 0; j < items.length; j++) {
              if(items[j].pid == index) {
                options.index = j;
                break;
              }
            }
          } else {
            options.index = parseInt(index, 10) - 1;
          }
        } else {
          options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
          return;
        }


      // options.mainClass = 'pswp--minimal--dark';
      // options.barsSize = {top:0,bottom:0};
      // options.captionEl = false;
      // options.fullscreenEl = false;
      // options.shareEl = false;
      options.bgOpacity = 0.85;
      options.tapToClose = true;
      options.tapToToggleControls = false;

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

      var realViewportWidth,
          useLargeImages = false,
          firstResize = true,
          imageSrcWillChange;

      gallery.listen('beforeResize', function() {

        var dpiRatio = window.devicePixelRatio ? window.devicePixelRatio : 1;
        dpiRatio = Math.min(dpiRatio, 2.5);
          realViewportWidth = gallery.viewportSize.x * dpiRatio;


          if(realViewportWidth >= 1200 || (!gallery.likelyTouchDevice && realViewportWidth > 800) || screen.width > 1200 ) {
            if(!useLargeImages) {
              useLargeImages = true;
                imageSrcWillChange = true;
            }
              
          } else {
            if(useLargeImages) {
              useLargeImages = false;
                imageSrcWillChange = true;
            }
          }

          if(imageSrcWillChange && !firstResize) {
              gallery.invalidateCurrItems();
          }

          if(firstResize) {
              firstResize = false;
          }

          imageSrcWillChange = false;

      });

      gallery.listen('gettingData', function(index, item) {
          if( useLargeImages ) {
              item.src = item.o.src;
              item.w = item.o.w;
              item.h = item.o.h;
          } else {
              item.src = item.m.src;
              item.w = item.m.w;
              item.h = item.m.h;
          }
      });

        gallery.init();
    };

    // select all gallery elements
    var galleryElements = document.querySelectorAll( gallerySelector );
    for(var i = 0, l = galleryElements.length; i < l; i++) {
      galleryElements[i].setAttribute('data-pswp-uid', i+1);
      galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
      openPhotoSwipe( hashData.pid,  galleryElements[ hashData.gid - 1 ], true, true );
    }
  };

  initPhotoSwipeFromDOM('.p_gallery');

})();
</script>
</html>
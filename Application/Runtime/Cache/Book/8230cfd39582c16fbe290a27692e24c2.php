<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/header.css">
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/Sortlist/Css/sortList.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Sortlist/Js/sortList.js"></script>
    <script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<body>
<div id="main-container" class="main-container p-relative">
    <!--头部-->

    <div class="mainContent">
        <div class="applyVideo-content w1200">
            <div class="recon-head">
                <i class="icon-t"><img src="/Public/Book/Sortlist/images/workicon.png" alt=""></i>
                <a class="icon-tex">全部作品</a>
                <span class="comic-btn btn-cartoon index-cur">漫画</span>
                <span class="fiction-btn btn-cartoon">小说</span>
            </div>
            <div class="comic-and-novel clearfix">
                <!--漫画-->
                <div class="workTitle">
                    <div class="allWork clearfix">
                        <div class="fform-toselect js-filter-area clearfix">
                          
                               
                            <!--受众-->
                           
                            <!--收费-->
                           
                            <!--类型-->
                            
                            <!--进度-->
                         
                        </div>
                    </div>
                    <div class="rankWork clearfix">
                     
                        <div class="rankContent">
                            <ul class="work-piction  clearfix updataTime">
							 <?php if(is_array($better)): $i = 0; $__LIST__ = $better;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["class"]) == "2"): ?><li>
                                    <a class="cartoon-girl" href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>">
                                        <img src="<?php echo ($vol["photopath"]); ?>" style="border-radius:6px;" alt="">
                                        <div class="pic-bg">
                                            <h3 class="bg-head">
                                                <span><img src="<?php echo ($vol["authorphoto"]); ?>" style="width:28px;height:28px;border-radius:100%;" alt=""></span>
                                                <span><?php echo ($vol["author"]); ?></span>
                                            </h3>
                                            <p class="detail-text">
                                              <?php echo ($vol["description"]); ?>
                                            </p>
                                        </div>
                                    </a>
                                    <div class="author-name">
                                        <p><a href="#"><b><?php echo ($vol["title"]); ?></b></a></p>
                                        <p>
                                            最新
                                            <i><?php echo ($vol["nowpassage"]); ?></i>
                                        </p>
                                        <p>人气 ：<em><?php echo ($vol["moods"]); ?></em></p>
                                    </div>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>

                            <!--热门人气-->
                            <ul class="work-piction clearfix hotPeople" style="display: none">
                                <?php if(is_array($bettermood)): $i = 0; $__LIST__ = $bettermood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["class"]) == "2"): ?><li>
                                    <a class="cartoon-girl" href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>">
                                        <img src="<?php echo ($vol["photopath"]); ?>" style="border-radius:6px;" alt="">
                                        <div class="pic-bg">
                                            <h3 class="bg-head">
                                                <span><img src="<?php echo ($vol["authorphoto"]); ?>" style="width:28px;height:28px;border-radius:100%;" alt=""></span>
                                                <span><?php echo ($vol["author"]); ?></span>
                                            </h3>
                                            <p class="detail-text">
                                              <?php echo ($vol["description"]); ?>
                                            </p>
                                        </div>
                                    </a>
                                    <div class="author-name">
                                        <p><a href="#"><b><?php echo ($vol["title"]); ?></b></a></p>
                                        <p>
                                            最新
                                            <i><?php echo ($vol["nowpassage"]); ?></i>
                                        </p>
                                        <p>人气 ：<em><?php echo ($vol["moods"]); ?></em></p>
                                    </div>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--小说-->
                <div class="workTitle" style="display: none">
                    <div class="allWork clearfix">
                        <div class="fform-toselect js-filter-area clearfix">
                            
                            <!--受众-->
                            
                            <!--收费-->
                            
                            <!--类型-->
                           
                            <!--进度-->
                            
                        </div>
                    </div>
                    <div class="rankWork clearfix">
                       
                        <div class="rankContent">

                            <ul class="work-piction  clearfix updataTime">


                                <?php if(is_array($better)): $i = 0; $__LIST__ = $better;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["class"]) == "1"): ?><li>
                                    <a class="cartoon-girl" href="/Book/AuthorNovelmeg/index?vv=<?php echo ($vol["val"]); ?>">
                                        <img src="<?php echo ($vol["photopath"]); ?>" style="border-radius:6px;" alt="">
                                        <div class="pic-bg">
                                            <h3 class="bg-head">
                                                <span><img src="<?php echo ($vol["authorphoto"]); ?>" style="width:28px;height:28px;border-radius:100%;" alt=""></span>
                                                <span><?php echo ($vol["author"]); ?></span>
                                            </h3>
                                            <p class="detail-text">
                                              <?php echo ($vol["description"]); ?>
                                            </p>
                                        </div>
                                    </a>
                                    <div class="author-name">
                                        <p><a href="#"><b><?php echo ($vol["title"]); ?></b></a></p>
                                        <p>
                                            最新
                                            <i><?php echo ($vol["nowpassage"]); ?></i>
                                        </p>
                                        <p>人气 ：<em><?php echo ($vol["moods"]); ?></em></p>
                                    </div>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                

                            </ul>

                            <!--热门人气-->
                            <ul class="work-piction clearfix hotPeople" style="display: none">
                                <?php if(is_array($bettermood)): $i = 0; $__LIST__ = $bettermood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["class"]) == "1"): ?><li>
                                    <a class="cartoon-girl" href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>">
                                        <img src="<?php echo ($vol["photopath"]); ?>" style="border-radius:6px;" alt="">
                                        <div class="pic-bg">
                                            <h3 class="bg-head">
                                                <span><img src="<?php echo ($vol["authorphoto"]); ?>" style="width:28px;height:28px;border-radius:100%;" alt=""></span>
                                                <span><?php echo ($vol["author"]); ?></span>
                                            </h3>
                                            <p class="detail-text">
                                              <?php echo ($vol["description"]); ?>
                                            </p>
                                        </div>
                                    </a>
                                    <div class="author-name">
                                        <p><a href="#"><b><?php echo ($vol["title"]); ?></b></a></p>
                                        <p>
                                            最新
                                            <i><?php echo ($vol["nowpassage"]); ?></i>
                                        </p>
                                        <p>人气 ：<em><?php echo ($vol["moods"]); ?></em></p>
                                    </div>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- <footer>
        <div id="footer">
            <div class="foot-content w1200">
                <div class="fl ciyuan">
                    <h2>关于</h2>
                    <div class="links">
                        <ul>
                            <li>
                                <a href="#">
                                    帮助我们
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    联系我们
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">
                                    友情链接
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    意见反馈
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="z-line"></div>
                <div class="fl help">
                    <ul>
                        <li>
                            商务合作：bd@ciyuantv.cn
                        </li>
                        <li>
                            官方投稿群：QQ &nbsp;482220431
                        </li>
                    </ul>
                </div>
                <div class="social fl">
                    <a class="service" href="javascript:;"><p>联系客服</p></a>

                    <a class="downLoad" href="javascript:;"><p>下载次元</p></a>
                    <a class="weChat p-relative" href="javascript:;">
                        <p>官方微信</p>
                        <div class="erweima"><img src="/Public/Book/Static/images/erweima.png" alt=""></div>
                    </a>
                    <a class="weibo" href="javascript:;"><p>官方微博</p></a>
                </div>
                <div class="beian">
                    <p>© 2016-2017 深圳市次元时代网络科技有限公司 2ciyuan.tv All rights reserved.</p>
                    <p>
                   
                        版权所有 ICP证:16119129号-1
                    </p>
                    <p>官方QQ群: 482220431业务合作、市场合作: bd@ciyuantv.cn</p>
                </div>
            </div>
        </div>
    </footer>-->
</div>
</body>
<!--题材-->
<script>
    $(".js-tc .fform-toselect-item-wrapper").each(function(){
        $(this).click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        })
    });


//    受众
    $(".js-sz .fform-toselect-item-wrapper").each(function(){
        $(this).click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        })
    });


//    收费
    $(".js-sf .fform-toselect-item-wrapper").each(function(){
        $(this).click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        })
    });


//    类型
    $(".js-lx .fform-toselect-item-wrapper").each(function(){
        $(this).click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        })
    });


//    进度
    $(".js-jd .fform-toselect-item-wrapper").each(function(){
        $(this).click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        })
    });
</script>
<script>
function mached(){
		var  goods= $("#fformtoselect").find(".active .fform-toselect-item").text();//题材
		var toselect=$("#toselect-row-f-cb").find(".active .fform-toselect-item").text();//受众
		var payclearfix=$("#payclearfix").find(".active .fform-toselect-item").attr("dtt");//收费
		var classeclearfix=$("#classeclearfix").find(".active .fform-toselect-item").text();//类型
		var statusclearfix=$("#statusclearfix").find(".active .fform-toselect-item").text();//进度
	    $.post(
		'/Book/Sortlist/Checked',
		{"goods":goods,"toselect":toselect,"payclearfix":payclearfix,"classeclearfix":classeclearfix,"statusclearfix":statusclearfix},
			function(data){
				
				if(data=="1"){
					window.location.reload();
				}
			},
			"html"	
	)
}
</script>
<script>
	if($('.form-toselectAll').hasClass('active')){
			$('.form-toselectAll').siblings().removeClass('active');
		};
		if($('.form-toselectAll2').hasClass('active')){
			$('.form-toselectAll2').siblings().removeClass('active');
		};
		if($('.form-toselectAll3').hasClass('active')){
			$('.form-toselectAll3').siblings().removeClass('active');
		};
		if($('.form-toselectAll4').hasClass('active')){
			$('.form-toselectAll4').siblings().removeClass('active');
		};
		if($('.fform-toselectAll5').hasClass('active')){
			$('.fform-toselectAll5').siblings().removeClass('active');
		}
</script>
<script>
function refreshed(){
	var abc="1";
	 $.post(
			'/Book/Home/refresh',
			{"abc":abc},
			function(data){
				//alert(data);
		    },
			   "html"
		)
	}
setInterval(refreshed,72000);
</script>
</html>
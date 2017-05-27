<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="max-age=7200">
	<meta http-equiv="Expires" content="7200">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/header.css">
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/ActivityTwo/Css/activityTwo.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<body>
<div id="container" class="container p-relative">

    <div class="mainBody">
        <div class="actbg"><img src="/Public/Book/ActivityTwo/images/acticon2.png" alt=""></div>
        <div class="banerMain">
            <div class="actimg w1200">
                <div class="actImg activity-cont">
                    <img src="/Public/Book/ActivityTwo/images/1.png" alt="">
                </div>
                <div class="actImg actStep2">
                    <img src="/Public/Book/ActivityTwo/images/2.png" alt="">
                </div>
                <div class="actImg actImg3">
                    <img src="/Public/Book/ActivityTwo/images/3.png" alt="">
                </div>
                <div class="actImg actImg4">
                    <img src="/Public/Book/ActivityTwo/images/4.png" alt="">
                </div>
                <div class="actImg actImg5">
                    <img src="/Public/Book/ActivityTwo/images/5.png" alt="">
                </div>
                <div class="actImg actImg6">
                    <img src="/Public/Book/ActivityTwo/images/6.png" alt="">
                </div>
                <div class="actImg tougao">
                    <!--判断是否登录和注册再跳到我的作品-->
                    <a href="/Book/Face/index">
                        <img src="/Public/Book/ActivityTwo/images/7.png" alt="">
                    </a>

                </div>
                <div class="actImg textImg">
                    <img src="/Public/Book/ActivityTwo/images/text.png" alt="">
                </div>
            </div>
        </div>
    </div>

   <div id="footer">
        <div class="foot-content w1200">
            <div class="fl ciyuan">
                <h2>关于</h2>
                <div class="links">
                       <ul>
                        <li>
                            <a href="/Book/HelpCenter/index" target="_blank">
                                帮助中心
                            </a>
                        </li>
                        <li>
                            <a href="/Book/HelpCenter/index?callme=1">
                                联系我们
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/Book/HelpCenter/index?callme=2">
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
                <a class="weibo p-relative" href="javascript:;">
					<p>官方微博</p>
					<div class="weiboma"><img src="/Public/Book/Static/images/weiboicon.png" alt=""></div>
					</a>
            </div>
            <div class="beian">
                <p>© 2016-2017 深圳市次元时代网络科技有限公司 2ciyuan.tv All rights reserved.</p>
                <p>               
                    版权所有 ICP证:16119129号-1
                </p>
                <p>官方QQ群: 482220431  &nbsp; &nbsp; &nbsp; &nbsp; 业务合作、市场合作: bd@ciyuantv.cn</p>
            </div>
        </div>
    </div>
</div>
</body>
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
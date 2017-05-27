<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/header.css">
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/MyZone/Css/myzone.css">
    <link rel="stylesheet" href="/Public/Book/SelfCenterleft/Css/selfcenter.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/SelfCenterleft/Js/selfcenter.js"></script>
    <script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<body>
<div id="main-container" class="main-container p-relative">
    <div class="mainBody">
        <div class="mainContent w1200 clearfix">
            <div class="ucentop"></div>
            <div class="creator-left fl">
               <ul class="menu">
                    <li class="list-title">
                        <span class="first-title"> <b>个人中心</b></span>
                    </li>
                    <li class="item-1  expand">
                        <a href="/Book/SelfMessage/index">
                            <i></i>
                            个人信息
                        </a>
                    </li>
                    <li class="item-2 expand">
                        <a href="/Book/BookShelf/index">
                            <i></i>
                            我的书架
                        </a>
                    </li>
                    <li class="item-3  active expand">
                        <a href="/Book/Myzone/index">
                            <i></i>
                            我的领域
                        </a>
                    </li>
                    <li class="item-4 expand">
                        <a href="/Book/NewCenter/index">
                            <i></i>
                            消息中心
                            <sup class="msgNum"><?php echo ($messagenumber); ?></sup>
                        </a>
                    </li>
                    <li class="item-5 expand">
                        <a href="/Book/ExpenseCalendar/index">
                            <i></i>
                            消费记录
                        </a>
                    </li>
                    <li class="item-6 expand">
                        <a href="/Book/AwardClalendar/index">
                            <i></i>
                            获奖记录
                        </a>
                    </li>
                    <li class="item-7 expand">
                        <a href="/Book/DailyTask/index">
                            <i></i>
                            每日任务
                        </a>
                    </li>
                    <li class="item-8 expand">
                        <a href="/Book/MyPeople/index">
                            <i></i>
                            我的同人
                        </a>
                    </li>
                    <li class="item-9 expand">
                        <a href="/Book/HelpCenter/index">
                            <i></i>
                            帮助中心
                        </a>
                    </li>
                </ul>
                <div class="main-zone">
                    <a href="/Book/Face/index"></a>
                </div>
            </div>
            <div class="creator-right fr p-relative">
                <div class="myWorks myField">
                    <div class="work-head">
                        <span></span>
                        <span>我的领域</span>
                    </div>
                    <div class="work-content">
                        <div class="noWork">
                            <i><img src="/Public/Book/MyPeople/images/cat.png" alt=""></i>
                            <p>该领域暂时还未开放！</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
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
    </footer>
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/header.css">
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/BookShelf/Css/bookshelf.css">
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
                    <li class="item-1 expand">
                        <a href="/Book/SelfMessage/index">
                            <i></i>
                            个人信息
                        </a>
                    </li>
                    <li class="item-2  active expand">
                        <a href="/Book/BookShelf/index">
                            <i></i>
                            我的书架
                        </a>
                    </li>
                    <li class="item-3 expand">
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
                <div class="myWorks myshelf">
                    <div class="work-head">
                        <span></span>
                        <span>我的书架</span>
                    </div>
                    <div class="mybook-content">
                        <div class="tab-comic-novel clearfix">
                            <ul>
                                <li>
                                    <a class="curState" href="javascript:;">
                                        我的漫画
                                    </a>
                                    <div class="newComic newNum"><?php echo ($countcomic); ?></div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        我的小说
                                    </a>
                                    <div class="newNovel newNum"><?php echo ($countnovel); ?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="work-content">
                        <div class="my-work-cont">
                            <ul class="clearfix myWork-comic">
								
								<?php if(is_array($collectioncomic)): $i = 0; $__LIST__ = $collectioncomic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li>
                                    <span class="faceImg">
                                        <img src="<?php echo ($vol["photopath"]); ?>" alt="" width="90.99" width="117">
                                    </span>
                                    <span class="textRight comic1">
                                        <h3><?php echo ($vol["title"]); ?></h3>
                                        <p>更新：<i><?php echo ($vol["updatepassage"]); ?></i> 
                                        <?php if(($vol["status"]) == "连载中"): ?><span class="new-work update">更新</span><?php endif; ?>	
										 <?php if(($vol["status"]) == "已完结"): ?><span class="new-work update">完结</span><?php endif; ?>
                                        </p>
                                        <?php if(($vol["quantity"]) == "0"): ?><p>未读</p>
                                         <?php else: ?>
                                          <p>已读</p><?php endif; ?>
                                        <div class="twoBtn">
                                            <span class="startRead p_btn"><a href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>">开始阅读</a></span>
                                            <span class="delCollect p_btn" did="<?php echo ($vol["id"]); ?>" onclick = "reseted(this)">取消收藏</span>
                                        </div>
                                    </span>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            
                            <ul class="clearfix myWork-novel" style="display: none">
								<?php if(is_array($collectionovel)): $i = 0; $__LIST__ = $collectionovel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li>
                                    <span class="faceImg">
                                        <img src="<?php echo ($vol["photopath"]); ?>" alt="" width="90.99" width="117">
                                    </span>
                                    <span class="textRight comic1">
                                        <h3><?php echo ($vol["title"]); ?></h3>
                                        <p>更新：<i><?php echo ($vol["updatepassage"]); ?></i> 
                                        
                                         <?php if(($vol["status"]) == "连载中"): ?><span class="new-work update">更新</span><?php endif; ?>	
										 <?php if(($vol["status"]) == "已完结"): ?><span class="new-work update">完结</span><?php endif; ?>
										 
                                        </p>
                                        <?php if(($vol["quantity"]) == "0"): ?><p>未读</p>
                                         <?php else: ?>
                                          <p>已读</p><?php endif; ?>
                                        <div class="twoBtn">
                                            <span class="startRead p_btn"><a href="/Book/AuthorNovelmeg/index?vv=<?php echo ($vol["val"]); ?>">开始阅读</a></span>
                                            <span class="delCollect p_btn" did="<?php echo ($vol["id"]); ?>" onclick = "reseted(this)">取消收藏</span>
                                        </div>
                                    </span>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <?php if(is_array($nn)): $i = 0; $__LIST__ = $nn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="noWork" style="display: block">
                            <i><img src="/Public/Book/BookShelf/images/cat.png" alt=""></i>
                            <p>还没有追更的作品哟~去 <i>作品区</i>看看吧~</p>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?> 
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
<!--我的漫画与我的小说之间切换-->
<script>
    $(".tab-comic-novel ul li").each(function (i) {
        $(this).click(function () {
            $(this).find('a').addClass("curState").parent().siblings().find('a').removeClass("curState");
            $(".my-work-cont ul").eq(i).show().siblings().hide();
        })
    })
</script>
<script>
function reseted(obj){
   var did = $(obj).attr("did");
   $.post(
	'/Book/BookShelf/reseted',
	{"did":did},
	function(data){
		if(data=="1"){
			window.location.reload();
		}else{
			alert("取消失败,请重新操作!");
		}
	},
	   "html"
)
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
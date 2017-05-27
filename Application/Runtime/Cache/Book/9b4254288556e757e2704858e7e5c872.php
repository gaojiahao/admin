<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
       <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/header.css">
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/NewCenter/Css/newcenter.css">
    <link rel="stylesheet" href="/Public/Book/SelfCenterleft/Css/selfcenter.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/SelfCenterleft/Js/selfcenter.js"></script>
    <script src="/Public/Book/NewCenter/Js/newcenter.js"></script>
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
                    <li class="item-3 expand">
                        <a href="/Book/Myzone/index">
                            <i></i>
                            我的领域
                        </a>
                    </li>
                    <li class="item-4  active expand">
                        <a href="/Book/NewCenter/index">
                            <i></i>
                            消息中心
                           <sup class="msgNum"><?php echo ($countmessagedata); ?></sup>
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
            <div class="creator-middle fl p-relative">
                <div class="myWorks myField">
                    <div class="work-head">
                        <span></span>
                        <span>消息中心</span>
                    </div>
                </div>
                <div class="tab-list">

                    <ul class="clearfix">
                        <li class="now-active">系统消息（<?php echo ($countmessagedata); ?>）<i>|</i></li>
                        <li>私信 <i>|</i></li>
                        <li> 好友邀请 <i>|</i></li>
                        <li> 评论 <i>|</i> </li>
                        <li> 红包消息</li>
                    </ul>

                    <div class="tab-content">
                        <!--系统消息-->
                        <div class="zc_list_body news">
                            <div class="zc_title_line clearfix">
                                <div class="zc_empty"></div>
                                <div class="zc_from">来自</div>
                                <div class="zc_title">标题</div>
                                <div class="zc_date">日期</div>
                            </div>

                            <div class="zc_btn_item1">
                                <ul>
									<?php if(is_array($Formmessagedata)): $i = 0; $__LIST__ = $Formmessagedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li>
                                        <div class="zc_list_line">
                                            <div class="zc_empty">
                                                <input type="checkbox" class="chekbox" name="chk_msg" value="<?php echo ($vol["id"]); ?>">
                                            </div>
                                            <div class="zc_from"><?php echo ($vol["sender"]); ?></div>
                                            <div class="zc_title">
                                                <a href="javascript:;"><?php echo ($vol["title"]); ?></a>
                                            </div>
                                            <div class="zc_date"><?php echo ($vol["time"]); ?></div>
                                        </div>
                                        <div class="zc_show_block">
                                            <a class="zc_close" href="javascript:;"></a>
                                            <div class="friend-confirm2">
                                                <div class="news-title"><?php echo ($vol["title"]); ?></div>
                                                <div class="fc-basic-info">
                                                    亲爱的 <?php echo ($vol["nickname"]); ?>:<br>
                                                    &nbsp; &nbsp; &nbsp; &nbsp;<?php echo ($vol["message"]); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php if(is_array($Formmessagedata)): $k = 0; $__LIST__ = array_slice($Formmessagedata,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><div class="selectAll">
                                    <input type="checkbox" name="checkedBox" id="checkedBox"   onclick="checkAll(this)"> 全选
                                    <span class="delBtn del" onclick="deleted()">删除</span>
                                    <span class="hasRead" onclick="readed()">标为已读</span>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                             <?php if(is_array($Formmessagedata)): $k = 0; $__LIST__ = array_slice($Formmessagedata,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><div class="tip-text">
                                <p>小贴士：</p>
                                <p>仅保留一个月内系统消息，如有重要消息请注意自行保存。</p>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
							<?php if(is_array($ff)): $i = 0; $__LIST__ = $ff;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="zc_no_news">
							<i><img src="/Public/Book/CreativeNotice/images/cat-icon.png" alt=""></i>
							<p>没有消息记录</p>
							</div><?php endforeach; endif; else: echo "" ;endif; ?> 
                        </div>

                        <!--私信-->
                        <div class="news sx_new">
                            <div class="no-news">
                                <i><img src="/Public/Book/NewCenter/images/cat.png" alt=""></i>
                                <p>该功能暂未开通</p>
                            </div>
                        </div>
                        <!--好友邀请-->
                        <div class="news fd_visit">
                            <table class="biaoge" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr bgcolor="#f5f5f5">
                                        <th width="5%"></th>
                                        <th>来自</th>
                                        <th>标题</th>
                                        <th>日期</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="sx_new">
                                <div class="no-news">
                                    <i><img src="/Public/Book/NewCenter/images/cat.png" alt=""></i>
                                    <p>目前还没有收到任何好友邀请呢~</p>
                                </div>
                            </div>
                        </div>


                        <!--评论-->
                        <div class="news review">
                            <div class="no-news">
                                <i><img src="/Public/Book/NewCenter/images/cat.png" alt=""></i>
                                <p>该功能暂未开通</p>
                            </div>
                            <!--<div class="review-avatar fl">-->
                                <!--<img src="images/ava.png" alt="">-->
                            <!--</div>-->
                            <!--<div class="ava-msg fl">-->
                                <!--<h1>man......fen</h1>-->
                                <!--<p>为什么不能删除。。</p>-->
                                <!--<div class="repeate">-->
                                    <!--<p>回复我：1</p>-->
                                    <!--<div></div>-->
                                <!--</div>-->
                            <!--</div>-->

                        </div>

                        <!--红包消息-->
                        <div class="news hongbaoNews">
                            <div class="no-news">
                                <i><img src="/Public/Book/NewCenter/images/cat.png" alt=""></i>
                                <p>目前还没有收到任何红包私信呢~</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="creRight fl">
                <div class="touch">
                    <ul class="clearfix touchTab">
                        <li class="fl touchTab_1 touchTab_2">
                            <h1>我关注的人</h1>
                        </li>
                        <li class="fl touchTab_1">
                            <h1>关注我的人</h1>
                        </li>
                    </ul>
                    <div class="lineOn_1"></div>
                    <div class="touchMain_1">
                        <!--<div class="focusOn">
                            <ul class="ofter_list person-list">
                                <li>
                                    <a href="javascript:;" class="cn_avatar">
                                        <img src="/Public/Book/NewCenter/images/avatar.png" alt="">
                                    </a>
                                    <span class="ava-text">
                                        <h2>西红柿蛋汤</h2>
                                        <div class="con-btn">
                                            <span class="message-btn">私信</span>
                                            <span class="has-cont">已关注</span>
                                        </div>
                                    </span>
                                </li>
                                <li>
                                    <a href="javascript:;" class="cn_avatar">
                                        <img src="/Public/Book/NewCenter/images/avatar.png" alt="">
                                    </a>
                                    <span class="ava-text">
                                        <h2>西红柿蛋汤</h2>
                                        <div class="con-btn">
                                            <span class="message-btn">私信</span>
                                            <span class="has-cont">已关注</span>
                                        </div>
                                    </span>
                                </li>
                            </ul>
                            <div class="mainNone" style="display: none">
                                <div>
                                    <img src="/Public/Book/NewCenter/images/cat.png" alt="">
                                </div>
                                <div class="none">您还没有关注任何人哟</div>
                            </div>
                        </div>-->
                        
                        <div class="mainNone">
                                <div>
                                    <img src="/Public/Book/NewCenter/images/cat.png" alt="">
                                </div>
                                <div class="none">TA还没有关注任何人哟</div>
                            </div>
                        
                        
                        <div class="be-focus-on" style="display: none">
                            <ul class="ofter_list2 person-list" style="display: none">
                                <li>
                                    <span class="cn_avatar">
                                        <img src="/Public/Book/NewCenter/images/avatar.png" alt="">
                                    </span>
                                    <span class="ava-text">
                                        <h2>西红柿炒蛋</h2>
                                        <div class="con-btn">
                                            <span class="message-btn">私信</span>
                                            <span class="has-cont">已关注</span>
                                        </div>
                                    </span>
                                </li>
                                <li>
                                    <span class="cn_avatar">
                                        <img src="/Public/Book/NewCenter/images/avatar.png" alt="">
                                    </span>
                                    <span class="ava-text">
                                        <h2>西红柿蛋汤</h2>
                                        <div class="con-btn">
                                            <span class="message-btn cur-active">私信</span>
                                            <span class="has-cont">已关注</span>
                                        </div>
                                    </span>
                                </li>
                            </ul>
                            <div class="mainNone">
                                <div>
                                    <img src="/Public/Book/NewCenter/images/cat.png" alt="">
                                </div>
                                <div class="none">TA还没有关注任何人哟</div>
                            </div>
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

    <div id="bgMsg" class="transparent_bg"></div>
    <div id="light_meg" class="meg_content">
        <div class="meg_contentBox">
            <div class="meg_contentBoxIn">
                <h2 class="megCon_title">
                    <span class="line fl"></span>
                    <span class="fl megCon_title_L">给暮雨、石秀短信</span>

                </h2>
                <div class="megCon_main">
                    <form action="">
                        <input  type="hidden" id="user" name="user">
                        <textarea maxlength="200" id="messageContent" class="bookrack_words_w" placeholder="说点什么吧"></textarea>
                    </form>
                    <div class="megCon_B clearfix">
                        <span id="number" class="fl">
                            <i class="bookrack_look" id="face"></i>
                            表情
                        </span>
                        <!--<span id="error">内容不能为空！</span>-->
                        <div class="right megCon_B_btn clearfix">
                            <a href="javascript:;" id="btnSend" class="right btn_disable" onclick="blu()">发送</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:;" id="btnClose" class="btnClose">
            <img src="/Public/Book/NewCenter/images/close.png" alt="">
        </a>
    </div>
</div>
</body>
<!--限制留言字数-->
<script>
    function blu() {
        if($(".bookrack_words_w").val() == ""){
            alert("您还未输入内容")
        }else if($(".bookrack_words_w").val().length > 200){
            alert("输入的字符不超过200")
        }
    }
</script>
<!--全选-->
<script>
//    全选
    function checkAll(obj) {
        $(".chekbox").prop('checked',$(obj).prop('checked'))
    }


//打开消息内容
    $(".zc_title>a").each(function (i) {
        $(this).click(function () {
            $(".zc_show_block").eq(i).show()
        })
    });

//    关闭消息内容
    $(".zc_close").each(function (i) {
        $(this).click(function () {
            $(".zc_show_block").eq(i).hide()
        })
    });

//    标记为已读

    $(".hasRead").click(function () {
        $(this).css("background","#fda300")
    })
</script>
<script>
function deleted(){
	var chk_value =[];
	$("input[name='chk_msg']:checked").each(function(){
		chk_value.push($(this).val());
	});
	var deid = chk_value;  //得到被勾选的id
    if(deid==""){
		alert("请选择要删除的信息!");
	}else{
	$.post(
			'/Book/NewCenter/deleted',
			{"deid":deid},
			function(data){
				window.location.reload();//刷新页面
				  },
			  "html"
			)
	}
}
</script>
<script>
function readed(){
	var chk_value =[];
	$("input[name='chk_msg']:checked").each(function(){
		chk_value.push($(this).val());
	});
	var deid = chk_value;  //得到被勾选的id
    if(deid==""){
		alert("请选择要标记的信息!");
	}else{
	$.post(
			'/Book/NewCenter/readed',
			{"deid":deid},
			function(data){
				window.location.reload();//刷新页面
				  },
			  "html"
			)
	}
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
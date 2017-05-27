<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/CreativeNotice/Css/creativenotice.css">
    <link rel="stylesheet" href="/Public/Book/Mainzoneleft/Css/mainzone.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/creatorzone.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/maincenter.js"></script>
    <script src="/Public/Book/CreativeNotice/Js/crenotice.js"></script>
    <script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<body>
<div id="main-container" class="main-container">
    <div class="mainBody">
        <div class="mainContent w1200 clearfix">
            <div class="ucentop"></div>
            <div class="creator-left fl">
                <ul class="menu">
                    <li class="list-title">
                        <span class="first-title"> <b>主创专区</b></span>
                    </li>
                   <li class="item-1 expand">
                            <span>
                                <a href="/Book/Face/index">
                                    <i></i>
                                    我的作品
                                </a>
                            </span>
                    </li>
                    <li class="item-2 active expand">
                            <span>
                                <a href="/Book/CreativeNotice/index">
                                    <i></i>
                                    主创通知
                                     <sup class="msgNum"><?php echo ($messagenumber); ?></sup>
                                </a>
                            </span>
                    </li>
                    <li class="item-3 expand">
                            <span>
                                <a href="/Book/ExtractionYield/index">
                                    <i></i>
                                    提取收益
                                </a>
                            </span>
                    </li>
                    <li class="item-4 expand">
                            <span>
                                <a href="/Book/FieldEntry/index">
                                    <i></i>
                                   领域入口
                                </a>
                            </span>
                    </li>
                    <li class="item-5 expand">
                            <span>
                                <a href="/Book/ProposeApply/index">
                                    <i></i>
                                    推荐位申请
                                </a>
                            </span>
                    </li>
                    <li class="item-6 expand">
                            <span>
                                <a href="/Book/SignApplication/index">
                                    <i></i>
                                    签约申请
                                </a>
                            </span>
                    </li>
                </ul>
            </div>
            <div class="creator-right fr p-relative">
                <div class="r-works work-mananer">
                    <div class="work-head">
                        <span></span>
                        <span>主创通知</span>
                    </div>
                    <div class="zc_tab">
                        <ul class="zc_mynews clearfix">
                            <li class="zc_cur">我的消息</li>
                            <li>已读</li>
                        </ul>
                        <div class="zc_content">
                            <!--我的消息-->
                            <div class="zc_list_body zc_cont">
								
                                <div class="zc_title_line clearfix">
                                    <div class="zc_empty"></div>
                                    <div class="zc_from">来自</div>
                                    <div class="zc_title">标题</div>
                                    <div class="zc_date">日期</div>
                                </div>
                                <div class="zc_btn_item1">
                                    <ul>
									<?php if(is_array($Formessagedata)): $i = 0; $__LIST__ = $Formessagedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["status"]) == "1"): ?><li>
                                            <div class="zc_list_line">
                                                <div class="zc_empty">
                                                    <input type="checkbox" class="chekbox" name="chk_msgone" value="<?php echo ($vol["id"]); ?>">
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
                                                        <?php echo ($vol["nickname"]); ?> :<br>
                                                        &nbsp; &nbsp; &nbsp; &nbsp;<?php echo ($vol["message"]); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                     <?php if(is_array($Formessageone)): $k = 0; $__LIST__ = array_slice($Formessageone,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><div class="pagetorpbox">
                                        <div class="sel">
                                            <input type="checkbox" class="chkSelectAll" onclick="checkAll(this)">全选
                                            <a href="javascript:;" class="del" onclick="deleted()">
                                                删除
                                            </a>
                                            <a href="javascript:;" class="hasRead" onclick="readed()">
                                                标记为已读
                                            </a>
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                             <?php if(is_array($ff)): $i = 0; $__LIST__ = $ff;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="zc_no_news">
                                    <i><img src="/Public/Book/CreativeNotice/images/cat-icon.png" alt=""></i>
                                    <p>没有消息记录</p>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <!--已读-->
                            <div class="zc_has_read zc_cont">
								
							
                                <div class="zc_title_line clearfix">
                                    <div class="zc_empty"></div>
                                    <div class="zc_from">来自</div>
                                    <div class="zc_title">标题</div>
                                    <div class="zc_date">日期</div>
                                </div>
                             
                                <div class="zc_btn_item2">
                                    <ul>
										<?php if(is_array($Formessagedata)): $i = 0; $__LIST__ = $Formessagedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["status"]) == "2"): ?><li>
                                            <div class="zc_list_line">
                                                <div class="zc_empty">
                                                    <input type="checkbox" class="chekbox" name="chk_msgtwo" value="<?php echo ($vol["id"]); ?>">
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
                                                        <?php echo ($vol["nickname"]); ?> :<br>
                                                        &nbsp; &nbsp; &nbsp; &nbsp;<?php echo ($vol["message"]); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                    <?php if(is_array($Formessagetwo)): $k = 0; $__LIST__ = array_slice($Formessagetwo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><div class="pagetorpbox">
                                        <div class="sel">
                                            <input type="checkbox" class="chkSelectAll" onclick="ckSelectedChange(this);">全选
                                            <a href="javascript:;" class="del" onclick="deletedtwo()">
                                                删除
                                            </a>
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                   
                                </div>
								<?php if(is_array($xx)): $i = 0; $__LIST__ = $xx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="zc_no_news">
                                    <i><img src="/Public/Book/CreativeNotice/images/cat-icon.png" alt=""></i>
                                    <p>没有消息记录</p>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>

                    </div>

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
    function checkAll(obj) {
        $(".chekbox").prop('checked',$(obj).prop('checked'))
    }
    function ckSelectedChange(obj) {
        $(".chekbox").prop('checked',$(obj).prop('checked'))
    }

//    标记为已读
    $(function () {
        $(".hasRead").click(function () {
            $(this).css("background","#bbbbbb")
        })
    })
//    我的消息与已读页面的互换
    $(function () {
        $(".zc_mynews li").each(function (i) {
            $(this).click(function () {
                $(this).addClass('zc_cur').siblings().removeClass('zc_cur')
                $(".zc_content .zc_cont").eq(i).show().siblings().hide();
            });

        })
    })
</script>
<script>
function deleted(){
	var chk_value =[];
	$("input[name='chk_msgone']:checked").each(function(){
		chk_value.push($(this).val());
	});
	var deid = chk_value;  //得到被勾选的id
    if(deid==""){
		alert("请选择要删除的信息!");
	}else{
	$.post(
			'/Book/CreativeNotice/deleted',
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
	$("input[name='chk_msgone']:checked").each(function(){
		chk_value.push($(this).val());
	});
	var deid = chk_value;  //得到被勾选的id
    if(deid==""){
		alert("请选择要标记的信息!");
	}else{
	$.post(
			'/Book/CreativeNotice/readed',
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
function deletedtwo(){
	var chk_value =[];
	$("input[name='chk_msgtwo']:checked").each(function(){
		chk_value.push($(this).val());
	});
	var deid = chk_value;  //得到被勾选的id
    if(deid==""){
		alert("请选择要删除的信息!");
	}else{
	$.post(
			'/Book/CreativeNotice/deleted',
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
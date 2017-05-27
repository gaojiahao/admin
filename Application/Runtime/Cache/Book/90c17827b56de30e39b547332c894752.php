<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/ProposeApply/Css/proposeapply.css">
    <link rel="stylesheet" href="/Public/Book/Mainzoneleft/Css/mainzone.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/creatorzone.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/maincenter.js"></script>
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
                    <li class="item-2 expand">
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
                    <li class="item-5 active expand">
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
                        <span>推荐位申请</span>
                    </div>
                    <div class="pro-apply">
						  <div class="pro_work">
                            <label>选择作品：</label>
                            <select name="allbook"  style="height:26px;" id="allbook">
                                <option value="">--请选择您要申请的作品--</option>
								<?php if(is_array($Formcreateautherdata)): $i = 0; $__LIST__ = $Formcreateautherdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($vol["id"]); ?>"><?php echo ($vol["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <h3 style="margin-top:25px;">推荐位理由填写:</h3>
                        <div class="tj_reason">
                            <textarea name="reason" id="reason" ></textarea>
                        </div>
                        <div class="tj_submit">
                            <span class="p_btn proposeSubmit">提交</span>
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

    <div class="bgall">
        <div class="bgall-content">
            <div class="text-tips">
                <div>
                    <i class="sucess-icon"><img src="/Public/Book/ProposeApply/images/cat-icon.png" alt=""></i>
                    <span>申请成功</span>
                </div>
                <p>我们将在3个工作日内反馈申请进度，请耐心等候。</p>
            </div>
            <div class="close_btn">
                <img src="/Public/Book/ProposeApply/images/close.png" alt="">
            </div>
        </div>
        <!--申请失败-->
        <div class="bgall-content apply-fail">
            <div class="text-tips">
                <div>
                    <i class="fail-icon"><img src="/Public/Book/ProposeApply/images/c-icon.png" alt=""></i>
                    <span>申请失败</span>
                </div>
                <p>您本周已申请过推荐，请下周再提交申请</p>
            </div>
            <div class="close_btn">
                <img src="/Public/Book/ProposeApply/images/close.png" alt="">
            </div>
        </div>
    </div>
</div>
</body>
<!--申请成功弹框-->
<script>
    $(".proposeSubmit").click(function () {
		var bookid= $("#allbook").find("option:selected").val();
		var reason= $("#reason").val();
		if(bookid==""){
			alert("请选择书名");
		}else{
			if(reason==""){
				alert("请填写原因!");
			}else{
		 	$.post(
					'/Book/ProposeApply/reason',
					{"bookid":bookid,"reason":reason},
					function(data){
						if(data=="1"){
						window.location.reload();
						}
						else if(data=="2"){
							alert("操作失败,请重新操作!");
						}
					},
					   "html"
				)
			}
		 }
     //   $(".bgall").show();
    });
    $(".close_btn").click(function () {
        $(".bgall").hide();
    })
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
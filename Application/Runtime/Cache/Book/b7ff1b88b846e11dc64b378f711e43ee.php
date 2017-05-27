<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="description" content="次元播,二次元,动漫,小说,漫画,小说读,免费小说,免费漫画,轻小说,浪漫文学,精彩小说动漫尽在次元播,网络各界小说高手,每日更新小说连载,漫画排行榜,小说排行榜,当下最好看的小说,找最好看的免费小说就次元播,如青春动漫,小说,幻想漫画,小说,竞技漫画,小说,游戏漫画,小说,科幻漫画,小说,轻小说,恐怖小说,悬疑小说,推理小说,烧脑小说,神州小说,等漫画,小说,精彩尽在次元播">
		<meta name="keywords" content="次元播,二次元,动漫,小说,漫画,小说排行榜,动漫排行榜,漫画排行榜,免费动漫,免费小说下载,好看的小说,免费小说,免费漫画,轻小说">
		<meta name="robots" content="all">
		<meta name="googlebot" content="all">
		<meta name="baiduspider" content="all">
		<link rel="icon" type="image/png" sizes="32x32" href="/Public/Book/Static/images/title-logal.png">
		<meta http-equiv="Cache-control" content="max-age=7200">
	     <meta http-equiv="Expires" content="7200">
		<title>动漫-次元播动漫-首页</title>
		<link rel="stylesheet" href="/Public/Book/Static/Css/public.css"/>
		<link rel="stylesheet" href="/Public/Book/Static/Css/header.css">
		<script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
		<script src="/Public/Book/Home/Js/home.js"></script>
		<script src="/Public/Book/Static/Js/loginreg.js"></script>
	</head>
   <body data-page-point='1'>

<div id="login" class="login">
			<div class="login-page">
				<div id="close" class="close"></div>
				<div class="tab-nav clearfix">
					<div id="active" class="t activ" for="login">登录</div>
					<div id="act" class="t " for="register">注册</div>
				</div>
				<!--登录-->
				<div id="login-nomal" class="panel cur">
					
					<div class="row unmane-row">
						<div class="input phoneNum">
							<input id="login-phoneNum"  class="login-phoneNum" type="text" value="<?php echo ($loginphone); ?>"  placeholder="请输入您的手机号码" autocomplete="off">
						</div>
						<p class="phonemessage message" for="username"></p>
					</div>

					<div class="row password-row">
						<div class="input password">
							<input id="login-passwd" type="password" value="<?php echo ($loginpasswd); ?>" placeholder="请输入密码">
						</div>
						<p class="passwdmessage message" for="passwd"></p>
					</div>

					<div class="row check-row">
						<div class="input">
							<input id="login-captcha" class="short" placeholder="请输入验证码" type="text">
							<img class="captcha-img" src="/Book/Home/code" alt="" onclick="refreshCode(this)">
						</div>
						<p class="captchamessage message" for="captcha"></p>
					</div>
					<div id="keep-me-in" class="row checkbox-row">
						<a id="forget-passwd" href="/Home/Findpasswd/add">忘记密码</a>
						<input id="keep-login" name="keep-login" type="checkbox"  value="1" checked="checked">
						<label for="keep-login">记住我</label>
					</div>
					
					<div class="row">
						<div id="login-enter" class="btn logreg-btn"  onclick = "logined()">
							<span class="text" >登录</span>
						</div>
					</div>
				</div>
				<!--注册-->
				<div id="register-nomal" class="panel">
					<div class="row unmane-row">
						<div class="input phoneNum">
							<select name="countrynumber" id="countrynumber" style="width:60px;height:39px;border: 1px solid #f3f3f3; background: #fff;">
								<option value=''>地区</option>;
								<option value='86'>中国大陆</option>;
								<option value='886' >台湾</option>;
								<option value='852' >香港</option>;
								<option value='853' >澳门</option>;
								<option value='1' >美国</option>;
								<option value='1' >加拿大</option>;
								<option value='7' >俄罗斯</option>;
								<option value='44' >英国</option>;
								<option value='61' >澳大利亚</option>;
								<option value='81' >日本</option>;
							</select>
							<input id="reg-phone" style="width:250px;margin-left:10px;" type="text"  onblur = "checknumber()" placeholder="请输入您的手机号码" autocomplete="off">
						</div>
						<p class="nummessage message" id ="nummessage" for="reg-phone"></p>
					</div>
					
					<div class="row check-row">
						<div class="input">
							<input class="short" placeholder="请输入验证码" type="text" id="importcheck">
							<img class="captcha-img" src="/Book/Home/code" alt="" onclick="refreshCode(this)">
						</div>
						<p class="captchamessage message" for="captcha"></p>
					</div>
					
					<div class="row check-row">
						<div class="input">
							<input id="phone-captcha" class="short" placeholder="手机验证码" type="text">
							<input id="btn-captcha" class="p-btn btn" type="button"  onclick="submited(this)" value="点击获取">
						</div>
						<p id="checkmessage" class="checkmessage message" for="phone-captcha"></p>
					</div>
					<div class="row unmane-row">
						<div class="input phoneNum">
							<input id="reg-username" type="text"  onblur="checkregname()" placeholder="昵称(3-30)个字符组成" autocomplete="off">
						</div>
						<p class="namemessage message" for="username"></p>
					</div>
					<div class="row password-row">
						<div class="input password">
							<input id="reg-passwd" type="password" onblur="checkpass()" placeholder="密码(6-16位字符组成，区分大小写)">
						</div>
						<p class="passmessage message" for="passwd"></p>
					</div>

					<div id="agreeread" class="row checkbox-row">
						<input id="agree" name="agree" value="1" type="checkbox" checked="checked">
						<label for="keep-login">记住我</label>
						<a id="agreement" href="/Home/Displayagreement/add">《用户注册协议》</a>
					</div>
					<div class="row">
						<div id="register" class="btn logreg-btn" onclick="regist()">
							<span class="text">注册</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
			<!--头部部分-->
			<header>
				<div id="header">
					<div class="head w1200">
						<!--logo-->
						<a class="head_logo fl" href="/Book/Home/add"><img src="/Public/Book/Static/images/logo.png" alt="" /></a>
						<!--头部中间部分-->
						<ul class="head_nav fl">
							<li class="fl index">
								<a class="current-index" href="javascript:;">首页</a>
							</li>
							<!--
							<li class="fl all">
								<a href="#">漫画</a>
							</li>
							<li class="fl client">
								<a href="#">小说</a>
							</li>
							<li class="fl square">
								<a href="#">广场</a>
							</li>
							-->
						</ul>
						<div class="head_r fr">
							<div class="a-search fl  ">
								<form method="post" action="/Book/Sortlist/index/" name="formsech" id="formsech">
									<input class="fl search" id="flsearch" type="text" name="novelcomic" autocomplete="off" placeholder="搜作者/作品">
									<a class="a-icon fr" onclick="searched()">
										<i class="iconfont s-icon"></i>
									</a>
								 </form>
							</div>
							<!--历史-->
							<div class="a-history fl a-hovhide">
								<span class="iconfont h-icon"></span>
								<span class="h-tex col">历史</span>
								<div class="a-hismess-hide a-hide">
									<i></i>
									<ul class="his-list his-a-list">
										<?php if(is_array($Formhistorydatas)): $i = 0; $__LIST__ = array_slice($Formhistorydatas,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li class="list-item list-item-sup" style="height:auto;">
											<p>
												<?php if(($vol["class"]) == "1"): ?><a href="/Book/AuthorNovelmeg/index?vv=<?php echo ($vol["val"]); ?>">
													[小说] 
													<?php echo ($vol["title"]); ?>
												</a><?php endif; ?>
												<?php if(($vol["class"]) == "2"): ?><a href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>">
													[漫画] 
													<?php echo ($vol["title"]); ?>
												</a><?php endif; ?>
											</p>
											<p>
												<span  style="margin-left:0px;">已看到 &nbsp;<a><?php echo ($vol["looked"]); ?></a></span>
												<br>
												<span  style="margin-left:0px;">更新至 &nbsp;<a><?php echo ($vol["nowpassage"]); ?></a></span>
											</p>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</div>
							</div>
							<!--收藏-->
							<div class="a-follow fl a-hovhide">
								<span class="iconfont f-icon"></span>
								<span class="f-tex col">收藏</span>
								<div id="a-hid" class="a-hismess-hide a-hid aftlog">
									    <?php if(is_array($collectiondata)): $i = 0; $__LIST__ = array_slice($collectiondata,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><i></i><?php endforeach; endif; else: echo "" ;endif; ?>
										<ul class="a-list his-a-list">
											<?php if(is_array($collectiondata)): $i = 0; $__LIST__ = $collectiondata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["class"]) == "1"): ?><li class="list-item list-item-sup">
														<p>
															<a href="/Book/AuthorNovelmeg/index?vv=<?php echo ($vol["val"]); ?>">[小说] <?php echo ($vol["title"]); ?></a>
														</p>
														<p>
															<span>已看<?php echo ($vol["quantity"]); ?>话</span>
															<span><?php echo ($vol["status"]); ?></span>
														</p>
													</li><?php endif; ?>
												<?php if(($vol["class"]) == "2"): ?><li class="list-item list-item-sup">
														<p>
															<a href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>">[漫画]  <?php echo ($vol["title"]); ?></a>
														</p>
														<p>
															<span>已看<?php echo ($vol["quantity"]); ?>话</span>
															<span><?php echo ($vol["status"]); ?></span>
														</p>
													</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
											
										</ul>
										<?php if(is_array($collectiondata)): $i = 0; $__LIST__ = array_slice($collectiondata,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><!--<div class="list-item-buttom">-->
										<div class="a-alllook"><a href="/Book/BookShelf/index">我的书架</a></div>
										<!--</div>--><?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</div>
							
							<?php if(is_array($cc)): foreach($cc as $key=>$vo): ?><!--未登录-->
							<div class="a-unlogin fl prelogin" style="display:block;">
								<span class="iconfont p-icon fl"></span>
								<a id="l-login" class="l-login fl col">登录</a>
								<em class="fl">|</em>
								<a id="r-register" class="r-reg fl col">注册</a>
							</div><?php endforeach; endif; ?>
							
						   <?php if(is_array($dataall)): $i = 0; $__LIST__ = $dataall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><!--登陆后-->
							<div class="afterlogin fl aftlog" style="display:block;">
								<span class="youravatar">
									<img src="<?php echo ($vol["personphoto"]); ?>" style="border-radius:100%;" alt="" />
								</span>
								<a class="username col-tex" href="/Book/SelfMessage/index"><?php echo ($vol["name"]); ?></a>
								<i class="bigarrow"></i>
								<div class="selfmessages hovshow" >
									<i></i>
									<div class="avat-head">
										
										<a href="/Book/SelfMessage/index">
												<img src="<?php echo ($vol["personphoto"]); ?>" style="width:80px;height:80px;border-radius:100%;" alt="">
											<?php if(($vol["vipe"]) == "0"): else: ?>
												<img  src="/Public/Book/Static/images/head-avater.png" ><?php endif; ?>
										</a>
										
										<p class="name texcol col-tex"><?php echo ($vol["name"]); ?></p>
									</div>
									<div class="middle-tex">
										<div class="progress ">
											<span class="user-level-text fl">UL.<?php echo ($vol["grade"]); ?></span>
											<span class="progress-bar fl" style="width:114px;">
												<?php if(($vol["grade"]) == "1"): ?><span class="bar fl" style="width:9px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "2"): ?><span class="bar fl" style="width:18px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "3"): ?><span class="bar fl" style="width:27px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "4"): ?><span class="bar fl" style="width:36px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "5"): ?><span class="bar fl" style="width:45px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "6"): ?><span class="bar fl" style="width:54px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "7"): ?><span class="bar fl" style="width:63px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "8"): ?><span class="bar fl" style="width:74px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "9"): ?><span class="bar fl" style="width:81px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "10"): ?><span class="bar fl" style="width:90px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "11"): ?><span class="bar fl" style="width:99px;"></span><?php endif; ?>
												<?php if(($vol["grade"]) == "12"): ?><span class="bar fl" style="width:108px;"></span><?php endif; ?>
											</span>
											<span class="user-level-text fr">UL.<?php echo ($nextgrade); ?></span>
										</div>
										<div class="gift">
											<div class="gift-left fl">
												<!--<span><img src="/Public/Book/Static/images/money-icon.png" alt=""></span>-->
												次元币:<?php echo ($vol["coin"]); ?>
											</div>
											<div class="gift-right fr">
												<!--<span><img src="/Public/Book/Static/images/book-icon.png" alt=""></span>-->
												金币: <?php echo ($vol["gold"]); ?>
											</div>
										</div>
									</div>
									<div class="personcenter">
										<a class="percen per-info fl" href="/Book/SelfMessage/index">
											<span></span>
											<i>个人中心</i>
										</a>
										<a class="news per-info fr" href="/Book/NewCenter/index">
											<span></span>
											<i>消息</i>
										</a>
									</div>
									<div class="exit"  onclick="reseted()">退出</div>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							
							<!--作者专区-->
							<div class="a-spcial fl">
								<a href="/Book/Face/index">
									<span class="iconfont v-icon"></span>
									<span class="v-tex">作者专区
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</header>			
	</body>
	<script type="text/javascript">
 var timer = 60;
<!--读秒-->
function send(obj){
	if(timer == 0){
		$('#btn-captcha').val("点击重新获取");
		timer = 60;
		$("#btn-captcha").css('background', '#ccc');
	}else{
		timer--;
		$('#btn-captcha').val("剩余"+timer+"秒" );
		setTimeout("send()",1000);
	}
}
function checknumber(){ //失去焦点
var telphone = $("#reg-phone").val();
var verify = /^1[3758]\d{9}$/g;
var check = verify.test(telphone);
if(check ==true){
	 $("#nummessage").html("");
	 $("#btn-captcha").css('background', '#fdc051');
	 $("#reg-phone").css('border', '1px solid #ccc');
     }else{
		$("#nummessage").html("请输入正确的手机号码！");
		$("#btn-captcha").css('background', '#ccc');
		$("#reg-phone").css('border', '1px solid #FFA500');
    }
	}
function  submited(obj){
	var importcheck = $("#importcheck").val();
	
	var countrynumber = $("#countrynumber").find("option:selected").val();
	var telphone = parseInt($("#reg-phone").val());
	var verify = /^[0-9]*$/;
	var check = verify.test(telphone);
	if(importcheck==""){
		alert("请输入验证码,再获取短信，谢谢");
	}else{
			if(countrynumber!=""){
			if(check ==true){
					$.post(
					'/Book/Home/checknumbers',
					{"telphone":telphone,"countrynumber":countrynumber,"importcheck":importcheck},
					function(data){
						//alert(data);
						if(data=="1"){
							$("#nummessage").html("此号码已经注册，请登录系统或找回密码！");
						}
						else if(data=="2"){
							$("#nummessage").html("请于60秒后再获取验证码");
						}
						else if(data=="OK"){
							if(timer==60){
							$("#btn-captcha").css('background', '#fdc051');
							$(send());
							}
							$("#nummessage").html("短信发送成功，请注意查收!");
						}
					  else if(data=="3"){
							alert("电话号码格式不正确!");
					  }
				      else if(data=="4"){
							alert("验证码错误!");
					  }
					  else{
							  alert(data);
						}
						  },
					  "html"
					)
			}else{
				alert("请输入有效的电话号码");
			}
		}else{
			alert("请选择国家!");
		}
    }
}
</script>

<script type="text/javascript">
 function checkregname(){
	var regusername = $("#reg-username").val();//昵称
	//昵称验证
	var namevarify = /^(?!_)(?!.*?_$)[\u4e00-\u9fa5]{0,10}\S{3,15}$|^[\u4e00-\u9fa5]{1,10}$/g;
	var checkname = namevarify.test(regusername);
	if(checkname==false || regusername==""){
		$(".namemessage").html("昵称不能小于3个字符或者大于30个字符");
		$("#reg-username").css("border","1px solid #febf51");
	}else{
		$(".namemessage").html("");
	    $("#reg-username").css("border","1px solid #f3f3f3");
	    $.post(
			'/Book/Home/checkregname',
			{"regusername":regusername},
			function(data){
				if(data=="1"){
					$(".namemessage").html("此用户名已有主人，换一个试试.");
					$("#reg-username").css("border","1px solid #febf51");
				}
		    },
			   "html"
		)
	}
}
</script>

<script type="text/javascript">
 function checkpass(){
	var regpasswd = $("#reg-passwd").val();//密码
	var passverify = /^[a-zA-Z]\w{6,12}/;
	var checkpassed = passverify.test(regpasswd);
	if(checkpassed==false || regpasswd==""){
		$(".passmessage").html("请输入以字母开头的6到12为字符");
		$("#reg-passwd").css("border","1px solid #febf51");
	}else{
		$(".passmessage").html("");
		$("#reg-passwd").css("border","1px solid #f3f3f3");
	}
}
</script>
<script type="text/javascript">
function regist(){
	var countrynumber = $("#countrynumber").find("option:selected").val();
	var telphone = $("#reg-phone").val();   //手机号码
	var phonecaptcha = $("#phone-captcha").val();  //手机验证码
	var regusername = $("#reg-username").val();//昵称
	var regpasswd = $("#reg-passwd").val();//密码
	var regvisit =$("#reg-visit").val();
	//alert(regvisit);
	
	var namevarify = /^(?!_)(?!.*?_$)[\u4e00-\u9fa5]{0,10}\S{3,15}$|^[\u4e00-\u9fa5]{1,10}$/g;
	var checkname = namevarify.test(regusername);
	
	var passverify = /^[a-zA-Z]\w{6,12}/;
	var checkpassed = passverify.test(regpasswd);
	
	var chk_value =[];
	    $("input[name='agree']:checked").each(function(){
		chk_value.push($(this).val());
	});
	var shopcart = chk_value;
	
	if(shopcart=="1"){
		if(countrynumber!=""){
		if(telphone=="" || phonecaptcha=="" || regusername =="" || regpasswd==""|| regvisit=="" || checkname==false|| checkpassed==false){
			alert("请填写正确的用户信息！");
		}else{
			$.post(
				'/Book/Home/subdata',
				{"telphone":telphone,"phonecaptcha":phonecaptcha,"regusername":regusername, "regpasswd":regpasswd,"regvisit":regvisit,"countrynumber":countrynumber},
				function(data){
					//alert(data);
					if(data=="1"){
						alert("此昵称已经有人注册，换一个试试!");
					}
					else if(data=="2"){
						alert("验证码不正确，请重新获取验证码");
					}
					else if(data=="3"){
						$("#login-nomal").css('display','block');
						$("#register-nomal").css('display','none');  
						$("#active").css('border-bottom','3px solid #FFA500');
						$("#active").css('color','#FFA500');
						$("#act").css('border-bottom','0px solid #FFA500');
						$("#act").css('color','#4D4D4D');
						alert("注册成功，请您登录");
					}
					else if(data=="4"){
						alert("注册失败,重新注册!");
					}
				},
				   "html"
			)
			
		}
	}else{
		alert("请选择国家!");
	}
}else{
	alert("请阅读次元播协议!");
	}
}
</script>

<script type="text/javascript">
function refreshCode(obj){
	obj.src = '/Home/Home/code?math='+Math.random();  //改路经。
}

function logined(){ 
	var loginphone = $("#login-phoneNum").val();
	var loginpasswd = $("#login-passwd").val();
	var logincaptcha = $("#login-captcha").val();
	var chk_values =[];
	    $("input[name='keep-login']:checked").each(function(){
		chk_values.push($(this).val());
	});
	var checkboxs = chk_values;
	
	var verify =/^[0-9]*$/;
	var checked = verify.test(loginphone);
	
	var passverify = /^[a-zA-Z]\w{3,12}/;
	var checkpasses = passverify.test(loginpasswd);
	
	if(loginphone !="" && loginpasswd !="" && logincaptcha !=""){
		if(checked==false){
			alert("请输入正确的手机号码格式");
		}else{
					$.post(
					'/Book/Home/logined',
					{"loginphone":loginphone,"loginpasswd":loginpasswd,"logincaptcha":logincaptcha,"checkboxs":checkboxs},
					function(data){
						if(data=="1"){
							alert("电话号码或密码错误,请重新输入!");
						}
						else if(data=="2"){
							alert("验证码错误，请重新输入!");
						}
						else if(data=="3"){
							//alert("登录成功!");
							window.location.reload();
						}
						else{
							alert("登录失败,重新登录!");
						}
					},
					   "html"
				)
			
		}
	}else{
		alert("信息不能为空!");
	}
}
</script>
<script type="text/javascript">
$("#login-phoneNum").dblclick(function(){
   // $("#dblphone").css('display','block');
});
</script>

<script type="text/javascript">
function dblphone(obj){
	  var tel = $(obj).text();
	  $(obj).siblings("#login-phoneNum").css('text-align','left');
	  $(obj).siblings("#login-phoneNum").val(tel);
	  $(obj).css('display','none');
	}
</script>
<script type="text/javascript">
function reseted(){
	var resetid="1";
	 $.post(
			'/Book/Home/resetid',
			{"resetid":resetid},
			function(data){
				//alert(data);
				if(data=="1"){
				  window.location.reload();
				}
		    },
			   "html"
		)
	}
</script>
<script>
function	searched(){
 var flsearch =$("#flsearch").val();
 if(flsearch==""){
	 alert("请输入关键字,谢谢!");
 }else{
	document.getElementById('formsech').submit();
	}
}
</script>	
</html>
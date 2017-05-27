<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="max-age=7200">
	<meta http-equiv="Expires" content="7200">
	<meta name="description" content="次元播,二次元,动漫,小说,漫画,小说读,免费小说,免费漫画,轻小说,浪漫文学,精彩小说动漫尽在次元播,网络各界小说高手,每日更新小说连载,漫画排行榜,小说排行榜,当下最好看的小说,找最好看的免费小说就次元播,如青春动漫,小说,幻想漫画,小说,竞技漫画,小说,游戏漫画,小说,科幻漫画,小说,轻小说,恐怖小说,悬疑小说,推理小说,烧脑小说,神州小说,等漫画,小说,精彩尽在次元播">
	<meta name="keywords" content="次元播,二次元,动漫,小说,漫画,小说排行榜,动漫排行榜,漫画排行榜,免费动漫,免费小说下载,好看的小说,免费小说,免费漫画,轻小说">
	<meta name="robots" content="all">
	<meta name="googlebot" content="all">
	<meta name="baiduspider" content="all">
	<link rel="icon" type="image/png" sizes="16x16" href="/Public/Book/Static/images/title-logal.png">
	<title>动漫-次元播动漫-<?php echo ($titledd); ?>-<?php echo ($sectioned); ?></title>
    <link rel="stylesheet" href="/Public/Book/ComicDanmu/Css/comicdanmu.css">
    <link rel="stylesheet" href="/Public/Book/NovelDanmu/Css/public.css">
    <link rel="stylesheet" href="/Public/Book/ComicDanmu/Css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="/Public/Book/ComicDanmu/Css/style.css">
     <link rel="stylesheet" href="/Public/Book/Vipchapter/Css/vipchapter.css">
     <link rel="stylesheet" href="/Public/Book/Finalychapter/Css/finalychapter.css">	
	<script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
	<script src="/Public/Book/Static/Js/jquery.lazyload.min.js"></script>
    <script src="/Public/Book/ComicDanmu/Js/modernizr.min.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/ComicDanmu/Js/danmuhead.js"></script>
    <script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<style>
.fenyePage{
	overflow: hidden;
	margin-top: 16px;
}
.fenyePage .prev:before,.fenyePage .next:before{
	width: 18px;
	height: 14px;
	content: "";
	vertical-align: sub;
	margin-right: 6px;
	display: inline-block;
	}
	.fenyePage .prev:before{
		background:url("/Public/Book/NovelDanmu/images/tupian.png") no-repeat -67px -1px;
		}
	.fenyePage .next:before{
	background:url("/Public/Book/NovelDanmu/images/tupian.png") no-repeat -67px -24px;
	}
.fenyePage .prev,.fenyePage .next{
		padding: 0 20px 0 20px;
		line-height: 28px;
		color: #787878;
		border: 1px solid #525252;
		border-radius: 15px;
		text-align: center;
		cursor: pointer;
		display: block;
		float: left;
		height: 30px;
		margin-right: 10px;
	    
	}
	
	.fenyePage .prev:hover{
			border: 1px solid #febf51  !important;
			color: #febf51  !important;
		}
		
		.fenyePage .next:hover{
			border: 1px solid #febf51  !important;
			color: #febf51  !important;
		}
		.avat-head>a{
	width:  97px;
	height: 82px;
	display: inline-block;
	position: relative;
}

.avat-head>a>img:nth-of-type(1){
	width: 80px;
	height: 80px;
border-radius: 50%;
}
.avat-head>a>img:nth-of-type(2){
	width: 94px;
	height: 94px;
	position: absolute;
	top: -12px;
	left: 5px;
	display: block;
}
		
</style>
<body class="topbar-ny page-reader">
<!--登录与注册部分-->

<div id="login" class="login">
			<div class="login-page">
				<div id="close" class="close"></div>
				<div class="tab-nav clearfix">
					<div id="active" class="t activ" for="login">登录</div>
					<div id="act" class="t " for="register">注册</div>
				</div>
				<!--登录-->
				<div id="login-nomal" class="head-panel cur">
					
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
						<div id="login-enter" class="head-btn logreg-btn"  onclick = "logined()">
							<span class="text" >登录</span>
						</div>
					</div>
				</div>
				<!--注册-->
				<div id="register-nomal" class="head-panel">
					<div class="row unmane-row">
						<div class="input phoneNum">
							<select name="countrynumber" id="countrynumber" style="width:50px;height:37px;border-radius:5px;">
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
							<input id="reg-phone" style="width:250px;margin-left:25px;" type="text"  onblur = "checknumber()" placeholder="请输入您的手机号码" autocomplete="off">
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
							<input id="btn-captcha" class="p-btn head-btn" type="button"  onclick="submited(this)" value="点击获取">
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
						<div id="register" class="head-btn logreg-btn" onclick="regist()">
							<span class="text">注册</span>
						</div>
					</div>
				</div>
			</div>
		</div>
<div id="container" class="player-container clearfix p-relative">
    <div class="readTop  clearfix" style="z-index: 400;">
        <div class="m-menu topbar" id="J_BookMenu">
            <div class="animate-wrap">
                <h1 class="m-logo">
                    <a href="/Book/Home/add"></a>
                </h1>
                <div class="subtitle mobile2"></div>
                <div class="m-nav m-nav-track">
                    <div class="nav-track-middle f-cb">
                        <a href="/Book/Home/add" class="homepagetext">首页</a>
                        <span> > </span>
                        <?php if(is_array($Lookphoto)): $i = 0; $__LIST__ = array_slice($Lookphoto,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><a href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>" class="highlighted bookname f-toe"><?php echo ($vol["title"]); ?></a>
							<span> > </span>
							<a class="disabled sectionname f-toe"><?php echo ($vol["section"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="fr topbar-meta-user">
                    <ul class="topbar-user-reader navbar-nav horizontal-list f-cb has-separator">
                        <li class="js-collect dropdown-parent">
							<?php if(is_array($hh)): $i = 0; $__LIST__ = $hh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><a class="collect-nav">
							<span class="u-icon icon-collect" did="<?php echo ($val); ?>" onclick="collectioned(this)"></span>
							<span class="collect-comic" >收藏</span>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php if(is_array($jj)): $i = 0; $__LIST__ = $jj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><a class="collect-nav" >
							<span class="u-icon icon-collect" onclick="deleted(this)" did="<?php echo ($val); ?>"></span>
							<span class="collect-comic">已收藏</span>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            
                        </li>
                        <li class="book-shlef dropdown-parent">
                            <a class="book-nav js-counter-messageUnreadCount-parent u-icon-parent">
                                <span class="u-icon icon-msg"></span>
                                <span　class="sj-tab">书架</span>
                            </a>
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
                        </li>
                       <?php if(is_array($cc)): foreach($cc as $key=>$vo): ?><!--未登录-->
							<li class="a-unlogin fl prelogin" style="display:block;">
								<span class="iconfont p-icon"></span>
								<a id="l-login" class="l-login col">登录</a>
								<em>|</em>
								<a id="r-register" class="r-reg col">注册</a>
							</li><?php endforeach; endif; ?>

                        <!--登录后-->
                        
                        <?php if(is_array($dataall)): $i = 0; $__LIST__ = $dataall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li class="user-link">
                            <span class="youravatar">
                                <img src="<?php echo ($vol["personphoto"]); ?>"  style="border-radius:100%;width:25px;height:25px;" alt="" />
                            </span>
                            <a class="username col-tex" href="/Book/SelfMessage/index"><?php echo ($vol["name"]); ?></a>
                            <i class="bigarrow"></i>
                            <div class="selfmessages hovshow">
                                <i></i>
                                <div class="avat-head">
                                    <a href="/Book/SelfMessage/index">
										<img src="<?php echo ($vol["personphoto"]); ?>" style="width:80px;height:80px;border-radius:100%;" alt="">
										<?php if(($vol["vipe"]) == "0"): else: ?>
										<img  src="/Public/Book/Static/images/head-avater.png" ><?php endif; ?>
									</a>
                                    <p class="name texcol"><?php echo ($vol["name"]); ?></p>
                                </div>
                                <div class="middle-tex">
                                    <div class="progress ">
                                        <span class="user-level-text fl">UL.<?php echo ($vol["grade"]); ?></span>
                                        <span class="progress-bar fl">
											
												<span class="bar fl"></span>
												
                                         </span>
                                        <span class="user-level-text fr">UL.<?php echo ($nextgrade); ?></span>
                                    </div>
                                    <div class="gift">
                                        <div class="gift-left fl">
                                           
                                            次元币:<?php echo ($vol["coin"]); ?>
                                        </div>
                                        <div class="gift-right fr">
                                           
                                            金币:<?php echo ($vol["gold"]); ?>
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
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
       
    </div>
    <div class="comic-danmu-content clearfix">
        <div class="main-danmu-content clearfix">
            <div class="horizontal-player clearfix" id="J_Horizontal">
				
                <div class="article lazyload">
                    <!--第一话-->
                    <?php if(is_array($Lookphoto)): $i = 0; $__LIST__ = $Lookphoto;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="page-item " style="width: 800px; margin-bottom:<?php echo ($kk); ?>px;">
                        <div class="img-box-wrapper  clearfix"style="width: 800px;">
                            <div class="img-box  clearfix"style="width: 800px;">
                                <img data-original="<?php echo ($vol["path"]); ?>" alt="" width="100%" height="100%">
                            </div>
                             <div class="dm">
                                <div class="d_show" id="show<?php echo ($vol["id"]); ?>" onmouseover = "danmu(this)" did="<?php echo ($vol["id"]); ?>">
                                    <!--<div>孙称心太棒了！！</div>
                                    <div>sc.chinaz.com！！</div>
                                    <div>GOOD！！</div>
                                    <div>Yes！！</div>
                                    <div>吊！！</div>-->
                                </div>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
            </div>
            <div class="book-recommand" id="J_BookRecommend">
                <div class="m-logo">
                    <a href="#"></a>
                </div>
                <dl class="leftImg">
                    <dt>猜你喜欢</dt>
                    <dd>
                        <div class="yd0-container mCustomScrollbar">
                            <ul class="yd0-body">
								<?php if(is_array($gessyou)): $i = 0; $__LIST__ = $gessyou;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li>
                                    <h5>
                                        <a href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>"><?php echo ($vol["title"]); ?></a>
                                    </h5>
                                    <div class="cover">
                                        <a href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>">
                                            <img src="<?php echo ($vol["photopath"]); ?>" width="88" height="126">
                                        </a>
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </dd>
                </dl>
                <div class="recommand-trigger">
                    <a id="J_RecommandTrigger">
                        猜 <br>
                        你 <br>
                        喜 <br>
                        欢 <br>
                        <i class="f-ib arrow-left sprite-reader-arrow-left"></i>
                    </a>
                </div>
            </div>
            <div class="panel clearfix">
                <div class="panel-main js-main a-autoHideDuration"style="bottom: 0;">
                    <div class="panel-left"></div>
                    <div class="panel-middle js-middle">
                        <div class="panel-middle-inner">
                            <div class="fl panel-itm panel-itm-tc">
                                弹幕数
                                <span class="js-countTC"><?php echo ($countsaylove); ?></span>
                            </div>
                            <button class="panel-itm panel-btn panel-btn-addTucao curActive" id="curActived">我要来一发</button>
                          
                            <button class="hide-btn panel-itm panel-btn">
                                <span class="hideSpan"><i class="eye-close"></i>隐藏</span>
                                <span class="showSpan" style="display: none"><i class="eye-open"></i>显示</span>
                            </button>
                        </div>
                        <div class="hideDanmu">隐藏弹幕</div>
                        <div class="showDanmu">显示弹幕</div>
                    </div>
                    <div class="panel-right">

                        <div class="fr panel-btn panel-itm panel-btn-1 js-catalog "> <i></i>目录
                            <div class="catalog box" style="left: -93px">
                                <div class="catalog-hd">
                                    <span class="fl">目录</span>
                                    <span class="item-icon fr"></span>
                                </div>
                                <div class="js-container content catalog-container">
                                    <div>
										
                                        <?php if(is_array($authortitle)): $k = 0; $__LIST__ = $authortitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k; if(($vol["vipe"]) == "0"): ?><div class="js-itm itm f-cb">
												<span class="section f-toe"><a href="/Book/LookComi/index/cy/<?php echo ($val); ?>/p/<?php echo ($k); ?>.html"><?php echo ($vol["section"]); ?></a></span>
											</div>
                                        <?php else: ?>
											<div class="reading js-itm itm f-cb">
												<span class="section f-toe"><a href="/Book/LookComi/index/cy/<?php echo ($val); ?>/p/<?php echo ($k); ?>.html"><?php echo ($vol["section"]); ?></span>
												<span class="vipPay"><img src="/Public/Book/NovelDanmu/images/vip.png" alt=""></span>
											</div><?php endif; endforeach; endif; else: echo "" ;endif; ?> 
                                        
                                    </div>
                                </div>
                                <div class="catalog-ft">
                                    <span>
                                        共
                                        <span class="js-total"><?php echo ($countpassage); ?></span>
                                        话
                                    </span>
                                </div>
                                <div class="triangle-down"></div>
                            </div>
                        </div>
                        <div class="fenyePage fl"><?php echo ($show); ?></div>
                    </div>
                </div>

            </div>
            <div class="inputTc" style="bottom: -180px;">
                <div class="inputTc-inner">
                    <div class="inputTc-action">
                        <div class="btn-emoji js-emoji wrapper">
                        </div>
                    </div>
                    <div class="wrapper">
                        <textarea placeholder="输入弹幕内容" onkeyup="countChar()"
                                  maxlength="30" class="js-input input" style="height: 70px"></textarea>
                        <div class="js-count count">还可以输入 <span id="spanText">30</span>字</div>
                    </div>
                    <div class="btns f-cb">
                        <div class="publish-foot-ico">
                            <a class="publish-font-white active"></a>
                            <a class="publish-font-orangered"></a>
                            <a class="publish-font-orange"></a>
                            <a class="publish-font-green"></a>
                            <a class="publish-font-blue"></a>
                            <a class="publish-font-pink"></a>
                        </div>
                        <button class="fr btn btn-cancle">取消</button>
                        <button class="fr btn btn-add">发表弹幕</button>
                        <a href="#" class="pulish-vip fr" id="publishVip">
                            开通VIP &nbsp;&nbsp;发送彩色吐槽 >>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
    <!--VIP章节-->
<div class="vipbg" style="display:none;">
    <div class="vipChapter">
        <div class="new-chapter-content">
            <p class="title-chapter">本章节为付费章节</p>
            <p class="tips-chapter">还得劳烦主人购买后阅读</p>
            <div class="openVip">
                <div class="listChapter threeYuan">
                    <p class="numMoney">3元去包养作者</p>
                    <p class="freeRead">包养免费看</p>
                    <div class="openBtn"><span><a href="/Book/Authormessge/index?vv=<?php echo ($val); ?>&&by=1">马上包养作者</a></span></div>
                </div>
                <div class="listChapter parseChapter">
                    <p class="numMoney">购买此章节</p>
                    <p class="freeRead"><?php echo ($sectioned); ?></p>
                    <p class="freeRead">VIP会员享8折</p>
                    <div class="openBtn" did="<?php echo ($val); ?>"  numbers="<?php echo ($speaknumber); ?>" onclick="paythis(this)">
						<span>购买此话39次元币</span>
					</div>
                    <div class="pay-text-chapter">
                        <div class="autoNext">
                            <input type="checkbox">
                            <i>自动购买下一章</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zhye" >
                <div>
                    <p>账户余额：<?php echo ($coin); ?>次元币 &nbsp;&nbsp;<a href="/Book/Recharge/index"> 充值 > </a> </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="popAll" style="display:none;">
        <div class="popContent">
            <div class="head-title">
                <span></span>
                <span>购买</span>
            </div>
            <div class="pay-texts">
                <p>主人，您的余额不足。</p>
                <p>本次将消费39次元币，您目前有<?php echo ($coin); ?>次元币</p>
            </div>
            <div class="del-pay-btn">
                <span class="delBtn">取消</span>
                <span class="cz_pay"> <a href="/Book/Recharge/index">充值后购买</a></span>
            </div>
            <div class="share-vip">
                <p>VIP享8折优惠 &nbsp;<a href="/Book/SelfMessage/index?pay=1">开通> </a></p>
            </div>
            <div class="pop_close">
                <img src="/Public/Book/ComicDanmu/images/close.png" alt="">
            </div>
        </div>
    </div>


</div>

<!--最后一章节-->
<div class="finalyChabg" style="display: none;">
   
    <div class="cuigeng" style="display: block">
        <div class="cuigeng-main">
            <h2>你已看完最新一话啦</h2>
            <div class="cuigeng-nav">
                <a href="javascript:;" class="cuigeng-nav-href cuigeng-nav-prev" onclick="backed()">
                    <div class="icon">
                        <img src="/Public/Book/Finalychapter/images/preicon.png" alt="">
                    </div>
                    上一页
                </a>
                <h4>作者大大努力更新中！</h4>
                <p>上次更新时间：<?php echo ($updatetime); ?></p>
                <div class="cuigengBtn">
                    <div class="cuigeng-coin" onclick="award()">本王要砸10次元币催更</div>
                </div>
                <a href="/Book/Authormessge/index?vv=<?php echo ($val); ?>" class="cuigeng-nav-href cuigeng-nav-next">
                    去评论
                    <div class="icon">
                        <img src="/Public/Book/Finalychapter/images/nexticon.png" alt="">
                    </div>
                </a>
            </div>
            <div class="bottom-text">
                <p>账户余额：<a id="money"><?php echo ($coin); ?></a>次元币  &nbsp;&nbsp; <a href="/Book/Recharge/index">充值 ></a></p>
            </div>
        </div>
    </div>
</div>
</div>
<script>window.jQuery || document.write('<script src="/Public/Book/ComicDanmu/Js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="/Public/Book/ComicDanmu/Js/jquery.mCustomScrollbar.concat.min.js"></script>

</body>

 
<!--吐槽框-->
<script>
    function countChar() {
        var a = $(".js-input").val().length;
        $("#spanText").html(30-a);
    }
</script>


<!--目录滚动条-->
<script>
    (function () {
        $(window).on("load",function () {
            $.mCustomScrollbar.defaults.theme="light-2";
            $(".catalog-container").mCustomScrollbar();
        })
    })(jQuery)

</script>

<!--弹幕字体-->
<script type="text/javascript">
	     var importented="";
		function danmu(obj){
			 importented= $(obj).attr("did");
			//alert(importented);
		}
		 
        init_screen();
        //alert("您好");	
		var i="";
		    var attr = ["#fff","#ff7f27","#ffc90e","#22b14c","#35c2ff","#ff5f94"];
		    
			//    弹幕
		  
        $(".publish-foot-ico>a").each(function (index) {
            $(this).click(function () {
                $(this).addClass("active").siblings().removeClass("active");
                i = attr[index];
            })
            
           
        });
 
        $(".btn-add").click(function(){
			var passageid = importented;
			var appid = "show"+passageid;
			var idapend = "#"+appid+"";
            var colored = i;
            var text=$(".js-input").val();
            
            var data = "color"+":";
            var col = data +i;
            var div="<div style="+col+">"+text+"</div>";
            if(text==""){
				alert("请输入内容谢谢!");
			}else{
			var  a = $("#curActived").offset().top;//获取标签到顶部的高度，存入数据库就ok了
			var b = document.body.scrollHeight;//整个网页的高度
			 var hig ="<?php echo ($speaknumber); ?>";
			var val ="<?php echo ($val); ?>";
			var c =a/b;
			$.post(
				'/Book/LookComi/positioned',
				{"c":c,"val":val,"colored":colored,"text":text,"hig":hig,"passageid":passageid},
				function(data){
					  if(data=="1"){
						alert("请登录后再评论,谢谢!");
					}
					else if(data=="2"){
						var data = "color"+":";
						var col = data +i;
						var div="<div style="+col+">"+text+"</div>";
						if($(idapend).append(div)){
							$(".js-input").val('');
							if($(".js-input").val() == ""){
								$("#spanText").html(30);
							}
						}
						init_screen();
				  }
				  else if(data=="3"){
					 alert("很抱歉,发弹幕失败,请重新操作!");
				   }
				   else if(data=="4"){
					 alert("亲,开通vip才可以发带颜色的弹幕哟!");
				   }
				},
				   "html"
			)
          }
        })
  
    //初始化弹幕

    function init_screen(){
        var _top=0;
        $(".d_show").find("div").show().each(function(){
            var _left=$(window).width()-$(this).width();
            var _height=$(window).height();

            _top=_top+56;
            if(_top>=_height-100){
                _top=0;
            }

            $(this).css({left:800,top:_top,color:getReandomColor()});
            var time=31000;
            if($(this).index()%2==0){
                time=31000;
            }
            $(this).animate({left:"-"+_left+"px"},time,function(){
                init_screen();


            }).hover(function () {
                $(this).stop()
            },function () {
                $(this).animate({left:"-"+_left+"px"},20000,function(){
                    init_screen();
                })

            })
        });
    }
    
    //随机获取颜色值
    function getReandomColor(){
        //return i;
    }
</script>
<!--关闭-->
<script>
    $(".pop_close,.delBtn").click(function () {
        $(".popAll").hide();
    });
</script>


<!--作者头部-->

<script>
$(".user-link").hover(function(){
		$(this).find(".hovshow").filter(':not(:animated)').slideDown()
	},function(){
			$(this).find('.hovshow').slideUp()
		})
</script>
<!--書架-->
<script>
$(".book-shlef").hover(function(){
		$(this).find(".a-hid").filter(':not(:animated)').slideDown()
	},function(){
			$(this).find('.a-hid').slideUp()
		})
</script>


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
var verify = /^1[3578]\d{9}$/g;
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
	
	var passverify = /^[a-zA-Z]\w{6,12}/;
	var checkpasses = passverify.test(loginpasswd);
	
	if(loginphone !="" && loginpasswd !="" && logincaptcha !=""){
		if(checked==false){
			alert("请输入正确的手机号码格式");
		}else{
			if(checkpasses==false){
				alert("请输入正确的密码格式");
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
<script type="text/javascript">
	
$(window).scroll(function(){
　　var scrollTop = $(this).scrollTop();
　　var scrollHeight = $(document).height();
　　var windowHeight = $(this).height();
　　if(scrollTop + windowHeight == scrollHeight){
　　　            var countnumber ="<?php echo ($finish); ?>";
		if(countnumber==""){
				window.location.href='/Book/LookComi/index/cy/<?php echo ($val); ?>/p/<?php echo ($mps); ?>.html';
		}else{
			$(".finalyChabg").css('display','block');
		}
　　}
});
      /* $(window).scroll(function() {
            var b = document.body.scrollHeight-800;
            if ($(this).scrollTop() >= b) {
				var countnumber ="<?php echo ($finish); ?>";
				if(countnumber==""){
						window.location.href='/Book/LookComi/index/cy/<?php echo ($val); ?>/p/<?php echo ($mps); ?>.html';
			    }else{
					$(".finalyChabg").css('display','block');
				}
            }
        });  */
</script>
<script type="text/javascript">
           var e ="<?php echo ($speaknumber); ?>";
              $.post(
			'/Book/LookComi/scrolled',
			{"e":e},
			function(data){
				var obj = eval("("+data+")");
				var longer = parseInt(obj.length);
				 $(".d_show").html('');
				for(var i=0; i<longer;i++){
					var 	speaker=obj[i]['speaker'];
					var	photopath=obj[i]['photopath'];
					var	contented=obj[i]['contented'];	
					var	type=obj[i]['type'];
					var	passageid=obj[i]['passageid'];
					var   shows ="show"+passageid;
					var csl = "#"+shows+"";
					var html="";
					var number =parseInt(Math.random()*500);
					var lefted = number+"px"
					       html +="<div style='display:none;margin-left:"+lefted+";color:"+type+"'>"+contented+"</div>";
							$(csl).append(html);  
							  init_screen();
			    }
			    
		    },
			   "html"
		   )
</script>
<script>
    $(".pop_close,.delBtn").click(function () {
        $(".popAll").hide();
    });
</script>
<script type="text/javascript">
var payvipe ="<?php echo ($payvipe); ?>";
var paypicture = "<?php echo ($paypicture); ?>";
var paythispassage="<?php echo ($paythispassage); ?>"
if(payvipe=="1"){
	if(paypicture==""){
		if(paythispassage==""){
			$(".vipbg").css('display','block');
	    }
    }
}
</script>
<script>
function backed(){
	window.history.go(-1);
}
</script>
<script>
function award(){
	var val="<?php echo ($val); ?>";

	var money = $("#money").text();
	if(money<10){
		alert("余额不足,或您没有登陆!");
	}else{
		 $.post(
			'/Book/LookComi/award',
			{"money":money,"val":val},
			function(data){
				if(data=="2"){
					alert("催更成功!");
					window.location.href="/Book/Authormessge/index?vv=<?php echo ($val); ?>";
				}
		    },
			   "html"
		)
	}
}
</script>
<script>
function  collectioned(obj){
	var did = $(obj).attr("did");
	$.post(
		'/Book/LookComi/joinshelf',
		{"did":did},
		function(data){
			
			if(data=="1"){
				window.location.reload();
			//	$(this).find(".collect-comic").html("已收藏");
			}
			else if(data=="2"){
				alert("请重新操作!");
			}
			else if(data=="3"){
				alert("已经收藏,到别处看看!");
			}
			else if(data=="4"){
				alert("请登录之后在收藏,谢谢!");
			}
		},
		"html"
	)
}
</script>
<script>
function deleted(obj){
var did =  $(obj).attr("did");
$.post(
		'/Book/LookComi/deleted',
		{"did":did},
		function(data){
			if(data=="1"){
				window.location.reload();
			}
			else if(data=="2"){
				alert("请重新操作!");
			}
			else if(data=="3"){
				alert("请登录后再操作!");
			}
		},
		"html"
	)
}
</script>
<script>
function paythis(obj){
	var val = $(obj).attr("did");
	var numbers = $(obj).attr("numbers");
	$.post(
		'/Book/LookComi/paythis',
		{"val":val,"numbers":numbers},
		function(data){
			//alert(data);
			if(data=="1"){
				alert ("亲，您还没有登陆呢!");
			}
			else if(data=="2"){
				$(".popAll").css('display','block');
			}
			else if(data=="3"){
				alert ("支付失败,请重新操作!");
			}
			else if(data=="4"){
				alert ("购买成功,谢谢您的欣赏.");
				window.location.reload();
			}
			else if(data=="5"){
				alert ("购买失败,请重新操作.");
			}
		},
		"html"
	)
}
</script>
<script>
 $(".lazyload").find("img").lazyload({
		placeholder:"/Public/Book/Static/images/prey.gif",
		threshold:300,
		skip_invisible:true,
		effect:"fadeIn"
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/SelfMessage/Css/selfmessage.css">
    <link rel="stylesheet" href="/Public/Book/SelfCenterleft/Css/selfcenter.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/SelfCenterleft/Js/selfcenter.js"></script>
	<script language="javascript" src="/Public/Js/Ajax.class.js"></script>
	<script language="javascript" src="/Public/Js/XHRUploader.class.js"></script>
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
                    <li class="item-1 active expand">
                        <a href="/Book/SelfMessage/index" target="_blank">
                            <i></i>
                            个人信息
                        </a>
                    </li>
                    <li class="item-2 expand">
                        <a href="/Book/BookShelf/index" target="_blank">
                            <i></i>
                            我的书架
                        </a>
                    </li>
                    <li class="item-3 expand">
                        <a href="/Book/Myzone/index" target="_blank">
                            <i></i>
                            我的领域
                        </a>
                    </li>
                    <li class="item-4 expand">
                        <a href="/Book/NewCenter/index" target="_blank">
                            <i></i>
                            消息中心
                            <sup class="msgNum"><?php echo ($messagenumber); ?></sup>
                        </a>
                    </li>
                    <li class="item-5 expand">
                        <a href="/Book/ExpenseCalendar/index" target="_blank">
                            <i></i>
                            消费记录
                        </a>
                    </li>
                    <li class="item-6 expand">
                        <a href="/Book/AwardClalendar/index" target="_blank">
                            <i></i>
                            获奖记录
                        </a>
                    </li>
                    <li class="item-7 expand">
                        <a href="/Book/DailyTask/index" target="_blank">
                            <i></i>
                            每日任务
                        </a>
                    </li>
                    <li class="item-8 expand">
                        <a href="/Book/MyPeople/index" target="_blank">
                            <i></i>
                            我的同人
                        </a>
                    </li>
                    <li class="item-9 expand">
                        <a href="/Book/HelpCenter/index" target="_blank">
                            <i></i>
                            帮助中心
                        </a>
                    </li>
                </ul>
                <div class="main-zone">
                    <a href="/Book/Face/index" target="_blank"></a>
                </div>
            </div>
            <div class="creator-right fr p-relative">
                <div class="self-message-body">
					<?php if(is_array($Formdata)): $i = 0; $__LIST__ = $Formdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="personData clearfix">
                        <div class="userAvatar fl">
                            <div class="imgavatar" id="imgavatar">
								
								<img src="<?php echo ($vol["personphoto"]); ?>" alt="">
								<?php if(($vol["vipe"]) == "0"): else: ?>
								<img src="/Public/Book/Static/images/head-avater.png"><?php endif; ?>
							</div>
							<input type="file" name = "uploadimg" class= "uploadimg" id="uploadimg" title="点击更换头像">
							
                        </div>
                        <div class="userText fl">
                            <p><?php echo ($vol["name"]); ?>&nbsp; <i></i> 
								<a class="changeName" href="javascript:;">
									修改昵称
								</a>  
								 <?php if(($vol["vipe"]) == "0"): else: ?>
								<img  style=" vertical-align: sub;" src="/Public/Book/Static/images/vip.png"><?php endif; ?>
                            </p>
                            <div class="yourClass">
                                <label><b>UL.<?php echo ($vol["grade"]); ?></b></label>
                                <span class="progessBar p-relative">
								    <?php if(($vol["grade"]) == "1"): ?><div class="bar-line" style="width:20px;"></div><?php endif; ?>
                                      <?php if(($vol["grade"]) == "2"): ?><div class="bar-line" style="width:40px;"></div><?php endif; ?>
                                      <?php if(($vol["grade"]) == "3"): ?><div class="bar-line" style="width:60px;"></div><?php endif; ?>
                                      <?php if(($vol["grade"]) == "4"): ?><div class="bar-line" style="width:80px;"></div><?php endif; ?>
                                      <?php if(($vol["grade"]) == "5"): ?><div class="bar-line" style="width:100px;"></div><?php endif; ?>
                                      <?php if(($vol["grade"]) == "6"): ?><div class="bar-line" style="width:120px;"></div><?php endif; ?>
                                      <?php if(($vol["grade"]) == "7"): ?><div class="bar-line" style="width:140px;"></div><?php endif; ?>
                                      <?php if(($vol["grade"]) == "8"): ?><div class="bar-line" style="width:160px;"></div><?php endif; ?>
                                      <?php if(($vol["grade"]) == "9"): ?><div class="bar-line" style="width:180px;"></div><?php endif; ?>
                                      <?php if(($vol["grade"]) == "10"): ?><div class="bar-line" style="width:200px;"></div><?php endif; ?>
                                    <?php if(($vol["grade"]) == "11"): ?><div class="bar-line" style="width:220px;"></div><?php endif; ?>
                                     <?php if(($vol["grade"]) == "12"): ?><div class="bar-line" style="width:232px;"></div><?php endif; ?>
                                </span>
                                <span class="top-up p_btn"> <a href="/Book/Recharge/index" target="_blank">充值</a></span>
                                <span class="top-up-VIP p_btn">充值VIP</span>
                            </div>
                            <div class="gold-coin">
                                <!--<i><img src="/Public/Book/SelfMessage/images/coin.png" alt=""></i>-->
                                次元币：<b class="ciyuan-sum"><?php echo ($vol["coin"]); ?></b>
                                &nbsp;&nbsp; &nbsp;
                                 <!--<i><img src="/Public/Book/SelfMessage/images/coin2.png" alt=""></i>-->
                                金币：<b class="coin-sum"><?php echo ($vol["gold"]); ?></b>
                            </div>
                            <div class="true-name-confirm">
                                <i class="change-password"></i>
                                <a class="change-text">修改密码</a>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <a href="/Book/ActivityTwo/index" target="_blank">
                    <div class="sea-report">
                    </div>
                    </a>
                    <div class="account-security">
                        <div class="account-head">
                            <span></span>
                            <span>推荐位申请</span>
                        </div>
                        <div class="account-content clearfix">
                            <div class="check-message phone-check">
								<span class="sf_icon">
								<?php if(is_array($Formdata)): $i = 0; $__LIST__ = $Formdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["bindind"]) == "0"): ?><i><img src="/Public/Book/SelfMessage/images/phone1.png" alt=""></i><?php endif; ?>
									<?php if(($vol["bindind"]) == "1"): ?><i><img src="/Public/Book/SelfMessage/images/phone.png" alt=""></i><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</span>
                                <span class="check-text">
                                    <h3>手机验证</h3>
                                    <p>你可以享受手机相关的安全及提醒服务</p>
                                    <div class="replace-phone">
										<?php if(is_array($Formdata)): $i = 0; $__LIST__ = $Formdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["bindind"]) == "0"): ?><button type="button" class="zh_phone p_btn">去绑定</button><?php endif; ?>
                                             <?php if(($vol["bindind"]) == "1"): ?><button type="button" class="has-bind">已绑定</button>
												<span class="show-text-phone" style="display:inline-block;">更换手机></span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </span>
                            </div>
                            <div class="check-message email-check">
                                 <span class="sf_icon">
									<?php if(is_array($jj)): $i = 0; $__LIST__ = $jj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><i><img src="/Public/Book/SelfMessage/images/email1.png" alt=""></i><?php endforeach; endif; else: echo "" ;endif; ?>
									<?php if(is_array($yy)): $i = 0; $__LIST__ = $yy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><i><img src="/Public/Book/SelfMessage/images/email.png" alt=""></i><?php endforeach; endif; else: echo "" ;endif; ?>       
                                </span>
                                <span class="check-text">
                                    <h3>邮箱验证</h3>
                                    <p>你可以使用邮箱来保障您的账号安全</p>
                                    <div class="replace-phone">
										<?php if(is_array($jj)): $i = 0; $__LIST__ = $jj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><button type="button" class="zh_email p_btn">去绑定</button><?php endforeach; endif; else: echo "" ;endif; ?> 
										<?php if(is_array($yy)): $i = 0; $__LIST__ = $yy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><button  type="button" class="has-bind">已绑定</button><?php endforeach; endif; else: echo "" ;endif; ?>
										<!--<span class="show-text-email">更换邮箱></span>-->
                                    </div>
                                </span>
                            </div>
                            <div class="check-message QQ-check">
                                <span class="sf_icon">
									<?php if(is_array($Formdata)): $i = 0; $__LIST__ = $Formdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["qqnumber"]) == ""): ?><i style="display:block;"><img src="/Public/Book/SelfMessage/images/Q1.png" alt=""></i>
										<?php else: ?>
											<i style="display:block;"><img src="/Public/Book/SelfMessage/images/QQ.png" alt=""></i><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </span>
                                <span class="check-text QQ-text">
                                    <h3>绑定QQ</h3>
                                    <p>快速绑定QQ</p>
                                    <div class="replace-phone">
									<?php if(is_array($Formdata)): $i = 0; $__LIST__ = $Formdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["qqnumber"]) == ""): ?><button type="button" class="zh_QQ p_btn">去绑定</button>
                                          <?php else: ?>
											<button type="button" class="has-bind">已绑定</button>
											<span class="show-text-compile" style="display:inline-block" onclick="blocked()">编辑></span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </span>
                                <span class="bd_QQ" style="display: none">
                                    <input type="text" maxlength="10" id="qqnumber">
                                    <span class="QQ-sure-btn p_btn">确定</span>
                                </span>
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
                            <a href="/Book/HelpCenter/index?callme=1" target="_blank">
                                联系我们
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/Book/HelpCenter/index?callme=2" target="_blank">
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



    <!--修改昵称弹框-->
    <div class="petName">
        <div class="petname-content">
            <div class="head-title">
                <span></span>
                <span>修改昵称</span>
            </div>
            <div class="pet-cont">
                <p>当前昵称：<?php echo ($vol["name"]); ?></p>
                <div class="new_pet">
                    <label>新昵称：</label>
                    <span class="xg_input">
                        <input class="limit-float" type="text" id="changename">
                        <p>请重新修改，请使用数字，字母，汉字，不超过5-30个字符。</p>
                        <p>注：修改一次昵称需要消耗1000金币,或者500次元币</p>
                        <div class="p_btn sure-change changeone" style="float:left;">金币修改</div>
                        <div class="p_btn sure-change changetwo" style="float:left; margin-left:80px;">次元币修改</div>
                    </span>
                </div>
                <div class="pet-text-item">
                    <h3>说明:</h3>
                    <p>1.每次修改昵称需要1000金币,或者500次元币.</p>
                    <p>2.新昵称需符合注册规范，可使用数字，字母，汉字，不超过5-30个字符.</p>
                    <p>3.如遇服务器更新或其他问题导致昵称修改失败，请联系 <a href="javascript:;">联系客服</a></p>
                </div>
            </div>
            <div class="close_btn">
                <img src="/Public/Book/SelfMessage/images/close.png" alt="">
            </div>
        </div>
        <!--昵称修改失败-->
        <div class="pet-name-fail">
            <div class="head-title">
                <span></span>
                <span>失败</span>
            </div>
            <div class="buttom-line"></div>
            <div class="fail-cont">
                <p>次元币不足，您当前次元币：<i>0.00</i> 改昵称需要次元币：<i>1000</i>！</p>
                <span class="p_btn sure-btn">确定</span>
            </div>
        </div>
    </div>

    <!--充值VIP弹框-->
    <div class="petVip">
        <div class="petvip-content">
            <div class="vip-title">
                <img src="/Public/Book/SelfMessage/images/vip.png" alt="">
            </div>
            <div class="cz_month clearfix">
                <div class="m-vip-d j-vip-d m-vip-d-active">
                    <div class="top">1个月</div>
                    <div class="bottom">1000次元币</div>
                </div>
                <div class="m-vip-d j-vip-d">
                    <div class="top">3个月</div>
                    <div class="bottom">2700次元币</div>
                    <div class="discount">
                        <span class="discount-count">9.0折</span>
                        <div class="caret">
                            <div class="caret-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="m-vip-d j-vip-d">
                    <div class="top">6个月</div>
                    <div class="bottom">5100次元币</div>
                    <div class="discount">
                        <span class="discount-count">8.5折</span>
                        <div class="caret">
                            <div class="caret-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="m-vip-d j-vip-d">
                    <div class="top">12个月</div>
                    <div class="bottom">9000次元币</div>
                    <div class="discount">
                        <span class="discount-count">7.5折</span>
                        <div class="caret">
                            <div class="caret-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top:10px">
                <input type="checkbox" id="vip_auto_renew" value="1" name="vip_auto_renew">
                <label >VIP后期自动续费</label>
            </div>
            <div class="f-cb clearfix">
                <div class="f-fl">
                    共
                 <span class="sumcoin" id="sumcoin">1000</span>
                    次元币
                </div>
                <div class="f-fr">
                    您的余额为：
                    <?php if(is_array($Formdata)): $i = 0; $__LIST__ = $Formdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><span class="text-coin"><?php echo ($vol["coin"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                    次元币
                    <span class="cz"> <a href="/Book/Recharge/index">充值</a></span>
                </div>
            </div>
            <div class="open" onclick = "opened()">
                立即开通
            </div>
            <div class="close_btn">
                <img src="/Public/Book/SelfMessage/images/close.png" alt="">
            </div>
        </div>
    </div>

    <!--修改密码-->
    <div class="passAll">
        <div class="chagword-content">
            <div class="cur-passwd">
                <span class="pd_left">当前密码：</span>
                <span class="input-pd">
                    <input type="password" placeholder="输入当前密码"  id = "pwded">
                    <p id="nowpwd" style="display:none;">密码错误请重新输入</p>
                </span>
            </div>
            <div class="new-passwd">
                <span class="pd_left">新的密码：</span>
                <span class="input-pd">
                    <input type="password" placeholder="输入新的密码（6-16位字符"  id="newpwd">
                    <p id="pwdnow" style="display:none;">要求输入的密码为6-16位字符</p>
                </span>
            </div>
            <div class="passwd-again">
                <span class="pd_left">再次确认：</span>
                <span class="input-pd">
                    <input type="password" placeholder="再次确认新的密码" id="againewpwd">
                    <p id="agained" style="display:none;">两次输入的密码不符，请重新输入</p>
                </span>
            </div>
            <div class="input-phone">
                <span class="pd_left" style="margin-top: 0;">手机号码：</span>
                <span class="input-pd" style="width: 261px;">
					 <select name="countrynumber" id="numbercountry" style="width:50px;height:37px;border-radius:5px;margin-left:10px; border: none; background-color: #ccc;">
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
                    <input type="text" style="width:184px;" placeholder="请输入你的手机号码" id="newtelephone">
                    <p id="ereortelephone" style="display:none;">手机号有误，请重新输入</p>
                </span>
            </div>
            <div class="input-phone">
                <span class="pd_left">验证码：</span>
                <span class="cerim">
                    <input type="text" placeholder="请输入验证码" id="coded">
                    <button class="p-btn phone-btn" type="button" value="点击获取" onclick="coded()" id="btn-captchd">点击获取</button>
                    <p id="codenum" style="display:none;">验证码错误请重新输入</p>
                </span>
            </div>
            <div class="s_btn">
                <span class="pd_left"></span>
                <span class="clk-btn">
                    <span class="sureBtn p_btn" onclick="changepwd()">确认</span>
                    <span class="delBtn p_btn">取消</span>
                </span>
            </div>
            <div class="pd_close">
                <img src="/Public/Book/SelfMessage/images/close.png" alt="">
            </div>
        </div>
    </div>

    <!--绑定手机号-->
    <div class="bind-phone">
        <div class="binding-content">
            <div class="head-title">
                <span></span>
                <span>绑定手机号</span>
            </div>
            <div class="bd_phonenum">
                <span class="pd_left">手机号：</span>
                <span style="display: inline-block; height: 50px;">
						<select name="countrynumber" id="changetelephone" style="margin-top:8px;width:50px;height:37px;border-radius:5px;margin-left:10px; border: none; background-color: #ccc;">
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
				 </span>
                <span class="input-pd">
                    <input type="text" placeholder="输入有效的手机号" id="mobilenumbers">
                    <p style="display:none;" id="flasenum">请输入正确的手机号！</p>
                </span>
            </div>
            <div class="input-phone">
                <span class="pd_left">手机验证码：</span>
                <span class="acp">
                    <input type="text" placeholder="请输入短信验证码" class="pinput capt" id="pinputcapt">
                    <span class="captchabtn" id="captchabtn" onclick="getnum()">点击获取</span>
                    <p id="changecode" style="display:none;">验证码错误，请重新输入！</p>
                </span>
            </div>
            <div class="p_btn im_bind">立即绑定</div>
            <div class="bd_close">
                <img src="/Public/Book/SelfMessage/images/close.png" alt="">
            </div>
        </div>

    </div>

    <!--更换手机号-->
    <div class="change-phone">
        <div class="change-phone-content">
            <div class="create-item-step">
                <div class="pregress-steps p-relative clearfix">
                    <span class="step-bar-ft">
                        <div class="step-cicle-ft current-step">1</div>
                    </span>
                    <span class="pe-gress-bar p-row"></span>
                        <span class="step-bar-ft step-two">
                            <div class="step-cicle-ft">2</div>
                        </span>
                    <span class="pe-gress-bar p-row"></span>
                        <span class="step-bar-ft step-three not-first">
                            <div class="step-cicle-ft">3</div>
                        </span>
                    <!--移动进度条-->
                    <div class="move-bar"></div>
                </div>
                <div class="step-text">
                    <span class="nowCur">验证身份</span>
                    <span>绑定手机</span>
                    <span>绑定成功</span>
                </div>
            </div>
            <div class="check_main">
                <div class="firstStep">
                    <div class="bindphone">
                        <span>原手机号：</span>
                        <span class="get_phone"><?php echo ($phone); ?></span>
                    </div>
                    <div class="acp">
                        <input type="text" placeholder="请输入短信验证码" class="pinput captcha" id="importcode">
						<?php if(is_array($Formdata)): $i = 0; $__LIST__ = $Formdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><input type="hidden" value="<?php echo ($vol["telephone"]); ?>" id="hiddentelephone">
							<input type="hidden" value="<?php echo ($vol["country"]); ?>" id="hiddencountry"><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="captchabtn" onclick = "arrive(this)" id="captcode">获取验证码</div>
                        <p id="codemp" style="display:none;">验证码错误，请重新输入！</p>
                    </div>
                    <div class="nextStep1 p_btn">
                        下一步
                    </div>
                </div>
                <div class="secondStep" style="display: none">
                    <div class="bindnewphone">
                        <select name="country_code" id="country_code" class="country_code">
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
                        <input type="text" name="phone" class="pinput newphone"  id="pinputnewphone" maxlength="11" placeholder="输入要绑定的手机号">
                    </div>
                    <p style="margin-left: 76px;display:none;" id="wrongmobile">手机号输入错误，请重新输入</p>
                    <div class="acp">
                        <input type="text" placeholder="请输入短信验证码" class="pinput captcha" id="codethree">
                        <div class="captchabtn" onclick="codetwo()" id="codetwo">获取验证码</div>
                        <p id="codehuden" style="display:none;">验证码错误，请重新输入！</p>
                    </div>
                    <div class="nextStep2 p_btn">
                        下一步
                    </div>
                </div>
                <div class="thirdStep" style="display: none">
                    <div class="last-step">
                        绑定成功!
                    </div>
                </div>
            </div>
            <div class="bd_step_close">
                <img src="/Public/Book/SelfMessage/images/close.png" alt="">
            </div>
        </div>
    </div>


    <!--绑定邮箱-->
    <div class="bdEmail">
        <div class="bgEmail-content">
            <div class="sd-email">
                <div class="head-title">
                    <span></span>
                    <span>邮箱验证</span>
                </div>
                <div class="email-input">
                    <input type="text" placeholder="请准确填写你的邮箱" id="qqmail">
                    <p class="p1_text" style="display:none;" id="p1_text">邮箱不正确，请重新输入</p>
                     <div class="inputRegist">
							<div class="inputBtn">
									<input  type="text"  placeholder="请输入验证码" id="codenumber" name="codenumber">
							</div>
							<div class="getBtn">
								<button type="button" value="获取验证码" class="buttonLink" onclick="checkmail()">获取验证码</button>
							</div>
					</div>
					<p class="p2_text" style="display:none;">验证码邮件已发出，5分钟内有效，请注意查收 QQ邮箱登录  <a href="https://mail.qq.com/">邮箱查看>></a></p>
					<p class="p2_text" style="display:none;">验证码邮件已发出，5分钟内有效，请注意查收 163邮箱登录  <a href="http://mail.163.com/">邮箱查看>></a></p>
                </div>
               
                <div class="sendEmail p_btn" onclick="qqmailbing()">立即绑定</div>
            </div>
            <!--<div class="has-send-email" style="display: none">
                <p>邮件已发送 <i>已向你的邮箱&nbsp;1597152662@qq.com&nbsp;发送了一份验证邮件</i></p>
                <div class="check-email">
                    <span class="p_btn">查看验证邮箱</span>
                </div>
            </div><!-->
            <div class="bd_email_close">
                <img src="/Public/Book/SelfMessage/images/close.png" alt="">
            </div>
        </div>
    </div>
</div>
</body>
<!--修改昵称-->
<script>
    $(function () {
        $(".changeName").click(function () {
            $(".petName").show();
        })
        $(".petName .close_btn").click(function () {
            $(".petName").hide();
        })



//       确认修改
        $(".changeone").click(function () {
			var changename = $("#changename").val();
			var namevarify = /^(?!_)(?!.*?_$)[\u4e00-\u9fa5]{0,10}\S{2,30}$|^[\u4e00-\u9fa5]{2,30}$/g;
			var checkname = namevarify.test(changename);
			var sure = 1;//金币修改
			if(checkname==true){
			$.post(
					'/Book/SelfMessage/checkname',
					{"changename":changename,"sure":sure},
					function(data){
						if(data=="1"){
							window.location.reload();
						}else{
							alert(data);
						}
					},
					   "html"
				)
		  }else{
			alert("请填写正确的昵称格式!");
		  }
        
        })
         $(".changetwo").click(function () {
			var changename = $("#changename").val();
			var namevarify = /^(?!_)(?!.*?_$)[\u4e00-\u9fa5]{0,10}\S{2,30}$|^[\u4e00-\u9fa5]{2,30}$/g;
			var checkname = namevarify.test(changename);
			var sure = 2;//次元币修改
				if(checkname==true){
			$.post(
					'/Book/SelfMessage/checkname',
					{"changename":changename,"sure":sure},
					function(data){
						if(data=="1"){
							window.location.reload();
						}
						else if(data=="2"){
							alert("修改失败");
						}
						else{
							alert(data);
						}
					},
					   "html"
				)
		  }else{
			alert("请填写正确的昵称格式!");
		  }
           // $(".petname-content").hide();
            //$(".pet-name-fail").show()
        })
//点击确定
        $(".sure-btn").click(function () {
            $(".petName").hide();
        })

    })
</script>

<!--打开和关闭VIP充值弹框-->
<script>
    $(".top-up-VIP").click(function () {
        $(".petVip").show();
    });
    $(".close_btn").click(function () {
        $(".petVip").hide();
    })
</script>

<!--选择购买的月份-->
<script>
    var $sum,val,num;
    var coin = $(".sumcoin");
    $(".m-vip-d").each(function (i) {
        $(this).click(function () {
            $(this).addClass("m-vip-d-active").siblings().removeClass("m-vip-d-active")
            val = $(".bottom").eq(i).html();
            num = val.split("次");
            $sum = num[0];
            coin.html($sum);
        })
    })
</script>
<!--绑定手机号-->
<script>
    $(".zh_phone").click(function () {
        $(".bind-phone").show();
    });

    $(".bd_close").click(function () {
        $(".bind-phone").hide();
    });
    //    如果绑定手机号成功
    $(".im_bind").click(function () {
		var mobilenumbers = $("#mobilenumbers").val();
		var pinputcapt =$("#pinputcapt").val();
		$.post(
		'/Book/SelfMessage/changemobile',
		{"mobilenumbers":mobilenumbers,"pinputcapt":pinputcapt},
		function(data){
			if(data=="1"){
			$(".zh_phone").css("display","none").next().show().next().show();
			$(".col-phone>img").show().parent().siblings().hide();
			$(".bind-phone").css('display','none');
		   }
		   else if(data=="2"){
				alert("绑定失败,重新操作");
		   }
		   else if(data=="3"){
				alert("验证码不正确,请重新操作");
		   }
		},
		"html"
		)
    })
</script>
<!--绑定邮箱-->
<script>
    $(".zh_email").click(function () {
        $(".bdEmail").show();
    });

    $(".bd_email_close").click(function () {
        $(".bdEmail").hide();
    });
    //    如果绑定邮箱成功
    //$(".sendEmail").click(function () {
       // $(".zh_email").css("display","none").next().show()
       // $(".col-email>img").show().parent().siblings().hide()

        //$(".sd-email").hide().next().show();
   // })



</script>


<!--修改密码-->
<script>
    $(".change-text").click(function () {
        $(".passAll").show();
    });
    $(".pd_close").click(function () {
        $(".passAll").hide();
    })
    $(".delBtn").click(function () {
        $(".passAll").hide();
    })
</script>
<!--更改手机号-->
<script>
    $(".show-text-phone").click(function () {
        $(".change-phone").show();
    });
    $(".bd_step_close").click(function () {
        $(".change-phone").hide();
        window.location.reload();
    })
//    三步骤
    $(".nextStep1").click(function () {
		var 	mobilenumbers = $("#hiddentelephone").val();//手机号码
		var  changetelephone = $("#hiddencountry").val();//国家码
		var  importcode = $("#importcode").val();
		if(importcode==""){
			$("#codemp").css('display','block');
		}else{
			$.post(
			'/Book/SelfMessage/nexted',
			{"importcode":importcode},
			function(data){
					if(data=="1"){
						$(".firstStep").hide().next().show()
					}else{
						$("#codemp").css('display','block');
					}
			},
			"html"
			)
	  }
    })
    $(".nextStep2").click(function () {
		var countrycode = $("#country_code").find("option:checked").val();//国家码
		var pinputnewphone = $("#pinputnewphone").val();//手机号
		var codethree =$("#codethree").val();
		if(countrycode=="" || pinputnewphone==""){
			alert("请选择国家和填写手机号码!");
		}else{
			$.post(
				'/Book/SelfMessage/changemphone',
				{"countrycode":countrycode,"pinputnewphone":pinputnewphone,"codethree":codethree},
				function(data){
						if(data=="1"){
						$(".secondStep").hide().next().show();
						}
						else if(data=="2"){
							alert("更改失败,请重新操作!");
						}
						else if(data=="3"){
							alert("验证码错误,请重新输入!");
						}
				},
				"html"
				)
			}
    })
</script>
<!--绑定QQ号-->
<script>
    $(".zh_QQ").click(function () {
        $(".QQ-text").hide().next().show();
    })
    $(".QQ-sure-btn").click(function () {
       var qqnumber = $("#qqnumber").val();		
		if(qqnumber==""){
			alert("请填写qq号码,谢谢!");
		}else{
		    	$.post(
				'/Book/SelfMessage/qqnumber',
				{"qqnumber":qqnumber},
				function(data){
					if(data=="1"){
						$(".col-QQ>img").show().parent().siblings().hide();
						$(".bd_QQ").hide();
						$(".QQ-text").show().find(".zh_QQ").hide().next().show().next().show();
						window.location.reload();
					}else{
						alert("绑定失败,请重新绑定!");
					}
				},
				  "html"
				)
	       }
    })
</script>
<script>
function changepwd(){
var pwded=$("#pwded").val();
var newpwd = $("#newpwd").val();
var passverify = /^[A-Za-z0-9]{5,16}$/;
var checkpassed = passverify.test(newpwd);
var againewpwd =	$("#againewpwd").val();
var newtelephone = $("#newtelephone").val();
var coded = $("#coded").val();
if(newpwd==againewpwd){
	$("#agained").css('display','none');
	if(coded==""){
		$("#codenum").css('display','block');
		$("#codenum").html("验证码不能为空!");
	}else{
		$("#codenum").css('display','none');
		 if(checkpassed==true){
				$("#pwdnow").css('display','none');
				 	$.post(
						'/Book/SelfMessage/checkpwd',
						{"pwded":pwded,"newpwd":newpwd,"newtelephone":newtelephone,"coded":coded},
						function(data){
								if(data=="1"){
									$("#codenum").css('display','none');
									$("#nowpwd").css('display','none');
									window.location.reload();
								}
								else if(data=="2"){
									alert("密码更改失败,请重新操作!");
								}
								else if(data=="3"){	
									alert("原密码不正确");
									$("#nowpwd").css('display','block');
								}
								else if(data=="4"){
									alert("验证码不正确");
									$("#codenum").css('display','bolck');
									$("#codenum").html('验证码不正确','请重新输入');
								}
							  },
						  "html"
						)
		 }else{
			$("#pwdnow").css('display','block');
		}
	}
}else{
	$("#agained").css('display','block');
}
}
</script>
<script>
 var timer = 60;
<!--读秒-->
function send(obj){
	if(timer == 0){
		$('#btn-captchd').text("点击重新获取");
		timer = 60;
		$("#btn-captchd").css('background', '#ccc');
	}else{
		timer--;
		$('#btn-captchd').text("剩余"+timer+"秒" );
		setTimeout("send()",1000);
	}
}
function coded(){
var newtelephone = $("#newtelephone").val();
var verify = /^[0-9]*$/;
var check = verify.test(newtelephone);
var numbercountry =$("#numbercountry").find("option:selected").val();
if(numbercountry==""){
	alert("请选择国家");
  }else{
	  if(newtelephone==""){
		  alert("请输入手机号码");
		  }else{
		  if(check==true){
				$("#ereortelephone").css('display','none');
				$.post(
						'/Book/SelfMessage/checknumber',
						{"newtelephone":newtelephone,"numbercountry":numbercountry},
						function(data){
								//alert(data);
							if(data=="2"){
								alert("请于"+timer+"秒后再获取验证码");
							}
							else if(data=="OK"){
								$("#btn-captchd").css('background', '#fdc051');
								$(send());
								alert("短信发送成功，请注意查收!");
							}
							else{
								  alert(data);
							}
							  },
						  "html"
						)
			}else{
				$("#ereortelephone").css('display','block');
			}
		}
  }
}
</script>
<script>
var timer = 60;
<!--读秒-->
function send(obj){
	if(timer == 0){
		$('#captchabtn').text("点击重新获取");
		timer = 60;
		$("#captchabtn").css('background', '#ccc');
	}else{
		timer--;
		$('#captchabtn').text("剩余"+timer+"秒" );
		setTimeout("send()",1000);
	}
}
	
function getnum(){
var changetelephone = $("#changetelephone").find("option:selected").val();//国家码
var mobilenumbers =$("#mobilenumbers").val();//手机号码
var verify = /^[0-9]*$/;
var check = verify.test(mobilenumbers);
if(changetelephone==""){
	alert("请选择国家!");
}else{
if(mobilenumbers==""){
$("#flasenum").css('display','block');
}else{
	if(check==false){
		$("#flasenum").css('display','block');
	}else{
		$("#flasenum").css('display','none');
		$.post(
				'/Book/SelfMessage/getnum',
				{"changetelephone":changetelephone,"mobilenumbers":mobilenumbers},
				function(data){
					if(data=="2"){
						alert("请于"+timer+"秒后再获取验证码");
					}
					else if(data=="OK"){
						$("#captchabtn").css('background', '#fdc051');
						$(send());
						alert("短信发送成功，请注意查收!");
					}
					else{
						  alert(data);
					}
					  },
				  "html"
				)
	}
}
}
}
</script>
<script>
var timer = 60;
<!--读秒-->
function send(obj){
	if(timer == 0){
		$('#captcode').text("点击重新获取");
		timer = 60;
		$("#captcode").css('background', '#ccc');
	}else{
		timer--;
		$('#captcode').text("剩余"+timer+"秒" );
		setTimeout("send()",1000);
	}
}
function arrive(obj){
var 	mobilenumbers = $(obj).siblings("#hiddentelephone").val();
var  changetelephone = $(obj).siblings("#hiddencountry").val();
	$.post(
		'/Book/SelfMessage/getnum',
		{"mobilenumbers":mobilenumbers,"changetelephone":changetelephone},
		function(data){
			if(data=="2"){
				alert("请于"+timer+"秒后再获取验证码");
			}
			else if(data=="OK"){
				$("#captcode").css({'background':'#fdc051','color':'#fff'});
				$(send());
				alert("短信发送成功，请注意查收!");
			}
			else{
				  alert(data);
			}
			  },
		  "html"
		)
}
</script>
<script>
var timer = 60;
<!--读秒-->
function send(obj){
	if(timer == 0){
		$('#codetwo').text("点击重新获取");
		timer = 60;
		$("#codetwo").css('background', '#ccc');
	}else{
		timer--;
		$('#codetwo').text("剩余"+timer+"秒" );
		setTimeout("send()",1000);
	}
}
function codetwo(){
var 	mobilenumbers = $("#pinputnewphone").val();//手机号
var  changetelephone = $("#country_code").find("option:checked").val();//国家码
if(mobilenumbers=="" || changetelephone==""){
		alert("请选择国家，填写手机号码!");
	}else{
	$.post(
		'/Book/SelfMessage/getnum',
		{"mobilenumbers":mobilenumbers,"changetelephone":changetelephone},
		function(data){
			if(data=="2"){
				alert("请于"+timer+"秒后再获取验证码");
			}
			else if(data=="OK"){
				$("#codetwo").css('background', '#fdc051');
				$(send());
				alert("短信发送成功，请注意查收!");
			}
			else{
				  alert(data);
			}
			  },
		  "html"
		)
	}
}
</script>
<script>
function blocked(){
	$(".QQ-text").css('display','none');
	$(".has-bind").css('display','none');
	$(".show-text-compile").css('display','none');
	$(".bd_QQ").css('display','inline-block');
}
</script>
<script>
function opened(){
	var sumcoin = $("#sumcoin").text();
	var chk_value =[];
	    $("input[name='vip_auto_renew']:checked").each(function(){
		chk_value.push($(this).val());
	});
	var freed = chk_value;
	 $.post(
		'/Book/SelfMessage/opened',
		{"sumcoin":sumcoin,"freed":freed},
		function(data){
			if(data=="1"){
				alert("开通vip成功");
				window.location.href="/Book/SelfMessage/index";
			}
			else if(data=="2"){
				alert("开通vip失败,请重新操作!");
			}
			else if(data=="3"){
				alert("余额不足,请充值!");
			}
			  },
		  "html"
		)
}
</script>
<script>
XHRUploader.init({
		handlerUrl:'/Book/SelfMessage/Upload',
		input: '_imgs[]'
	}).uploadFile('uploadimg', {
		'partition'	: 'date',
		'space'		: 'article.image',
		'thumb'     : 2,
		'width'     : 0,
		'height'    : 0
	},{
		ready: function(ret){
			//alert('zhengzai');正在上传
		},
		complete: function(ret){
			//alert(ret.data);
			if(ret.info=="1"){
				$('#imgavatar').html("");
				var html = "<img src="+ret.data+" height='117.99' width='117.99'>";
				$('#imgavatar').prepend(html);
			}else{
				alert("图片大小不符合请选择核实的大小上传!");
			}
		}
	}); 
</script>
<script>
var pay="<?php echo ($pay); ?>";
if(pay==""){
}else{
$(".petVip").show();
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
<script>
function checkmail(){
var qqmail = $("#qqmail").val();
var verify =/^[0-9a-z_]+@(([0-9a-z]+)[.]){1,2}[a-z]{2,3}$/;
var checked = verify.test(qqmail);
if(checked==true){
	$("#p1_text").html('');
	 $.post(
			'/Book/SelfMessage/sentmail',
			{"qqmail":qqmail},
			function(data){
			 //alert(data);
			 if(data=="1"){
			 $(".p2_text").css('display','block');
			 $(".buttonLink").attr("disabled","disabled").css({
					"background":" #f5f5f7",
					"color":"#6c747a"
				 })
			}
			else if(data=="2"){
				alert("邮件已经发送到相应的邮箱（如果没收到，再垃圾箱找找看），请在5分钟之后,再来获取!谢谢!");
				 $(".buttonLink").attr("disabled","disabled").css({
					"background":" #f5f5f7",
					"color":"#6c747a"
				 })
			}
			},
			"html"
		)
 }else{
	$("#p1_text").css('display','block');
	$("#p1_text").html('邮箱格式不正确，请重新输入');
}
}
</script>
<script>
function qqmailbing(){
var qqmail = $("#qqmail").val();
var verify =/^[0-9a-z_]+@(([0-9a-z]+)[.]){1,2}[a-z]{2,3}$/;
var checked = verify.test(qqmail);
var codenumber = $("#codenumber").val();
	if(codenumber=="" || checked==false){
		alert("请输入验证码和正确的邮箱,谢谢!");
	}else{
		 $.post(
			'/Book/SelfMessage/codenumber',
			{"qqmail":qqmail,"codenumber":codenumber},
			function(data){
			  //alert(data);
			  if(data=="1"){
				 alert("绑定成功!");
				$(".bdEmail").css('display','none');
				 window.location.reload();
			  }
			  else if(data=="2"){
				 alert("绑定失败!请重新再试!不便之处敬请谅解!");
			  }
			  else if(data=="3"){
				  alert("验证码错误,请重新输入!");
			  }
			  else if(data=="4"){
				   alert("请登录，谢谢!");
			       window.location.href="/Book/Home/add";
			  }
			 
			},
			"html"
		  )
	}
}
</script>
</html>
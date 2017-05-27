<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/ExtractionYield/Css/extraction.css">
    <link rel="stylesheet" href="/Public/Book/Mainzoneleft/Css/mainzone.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/creatorzone.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/maincenter.js"></script>
    <script src="/Public/Book/ExtractionYield/Js/extraction.js"></script>
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
                    <li class="item-3 active expand">
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
            <div class="creator-right fr p-relative extract-yield">
                <div class="r-works work-mananer">
                    <div class="work-head">
                        <span></span>
                        <span>提取收益</span>
                    </div>
                    <div class="zc_tab">
                        <ul class="zc_mynews clearfix">
                            <li class="zc_cur">总收入</li>
                            <li>礼物</li>
                            <li>酬勤</li>
                            <li>提取收益</li>
                        </ul>

                        <div class="sy-body">

                            <!--总收入-->
                            <div class="sy all-earning">
                                <div class="sy_content">
                                    <div class="check-date clearfix">
                                        <i class="fl">起止日期：</i>
                                   <form class="fl" action="/Book/ExtractionYield/searcher?sub=<?php echo ($sub); ?>" name="form1" id="form1" method="POST">
											<span class="fl"><input id="J-x1" type="text" name="J-x1"></span>
											<i class="fl">至：</i>
											<span class="fl"><input id="J-x2" type="text" name="J-x2" ></span>
											<span class="fl" onclick="searcher()" >查询</span>
									</form>
                                    </div>
                                </div>
                                <div class="earnings clearfix">
                                    <span class="fl">收入明细</span>
                                    <span class="fr">合计总收入 <i><?php echo ($total); ?></i> 元</span>
                                </div>
                                <div class="income-form" style="height:auto;">
								
                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr bgcolor="#f9f9f9">
                                            <td height="89">
                                                <table class="first-row" width="100%" cellpadding="0" border="1" cellspacing="0">
                                                    <tr>
                                                        <td  width="14%">作品</td>
                                                        <td colspan="6" width="57%">

                                                            <table width="100%" cellpadding="0" border="1" cellspacing="0">
                                                                <tr>
                                                                    <td colspan="7">自有平台</td>
                                                                </tr>
                                                                <tr>
																	<td>时间</td>
                                                                    <td>礼物</td>
                                                                    <td>酬勤</td>
                                                                    <td>包月</td>
                                                                    <td>催更</td>
                                                                    <td>助力</td>
                                                                    <td>订阅</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td width="10%">
                                                            版权收入
                                                        </td>
                                                        <td width="10%">
                                                            支付状态
                                                        </td>
                                                        <td width="10%">
                                                            合计
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
												
                                                <table class="sec-row" width="100%" cellpadding="1" border="0" cellspacing="0" >
													<?php if(is_array($Formrewarddata)): $i = 0; $__LIST__ = $Formrewarddata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr height="50">
                                                        <td width="14%">《<?php echo ($vol["title"]); ?>》</td>
                                                         <td width="7%"><?php echo ($vol["time"]); ?></td>
                                                        <td width="9.5%"><?php echo ($vol["gift"]); ?></td>
                                                        <td width="6%"><?php echo ($vol["award"]); ?></td>
                                                        <td width="9%"><?php echo ($vol["included"]); ?></td>
                                                        <td width="9%"><?php echo ($vol["urge"]); ?></td>
                                                        <td width="9%"><?php echo ($vol["moped"]); ?></td>
                                                        <td width="7%"><?php echo ($vol["subscribe"]); ?></td>
                                                        <td width="10%"><?php echo ($vol["publisher"]); ?></td>
														<?php if(($vol["statued"]) == "1"): ?><td width="10%">未提现</td><?php endif; ?>
														<?php if(($vol["statued"]) == "2"): ?><td width="10%">已提现</td><?php endif; ?>
                                                        <td width="10%"><?php echo ($vol["totalsum"]); ?></td>
                                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>  
                                                </table>
                                                
                                            </td>
                                        </tr>
                                    </table>
                              
                                    
                                   <!---->
                                </div>
                                <p>版权收入是指作品进行其他版权交易所产生的收入，包含简、繁体出版，游戏改编，影视剧改编等。</p>
                            </div>

                            <!--礼物-->
                            <div class="sy sy_gifts">
                                <div class="sy_content">
                                    <div class="check-date">
                                        <i>起止日期：</i>
                                        <span><input id="J-x3" type="text"></span>
                                        <i>至：</i>
                                        <span><input id="J-x4" type="text"></span>
                                        <span onclick="coin()">查询</span>
                                    </div>
                                </div>
                                <p>今天税前净收益：次元币 <i id="coined"><?php echo ($nowsum); ?></i> 元</p>
                                <div class="gift-content">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                        <tr bgcolor="#f5f5f5">
                                            <td height="39">
                                                <table width="100%" border="1" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="34%">&nbsp;&nbsp; 收到日期</td>
                                                        <td width="33%">&nbsp;&nbsp;赠送者</td>
                                                        <td width="33%">&nbsp;&nbsp;礼物</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="39">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" id="tablesearch">
													<?php if(is_array($nowdatedata)): $i = 0; $__LIST__ = $nowdatedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr height="50">
                                                        <td width="34%">&nbsp;&nbsp;&nbsp;<?php echo ($vol["time"]); ?></td>
                                                        <td width="33%">&nbsp;&nbsp;&nbsp;<?php echo ($vol["sender"]); ?></td>
                                                        <td width="33%">&nbsp;&nbsp;&nbsp;<?php echo ($vol["gift"]); ?></td>
                                                        <!--<td colspan="3" style="text-align: center">暂无数据</td>-->
                                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    <?php if(is_array($nn)): $i = 0; $__LIST__ = $nn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr height="50">
                                                        <td colspan="3" style="text-align: center">暂无数据</td>
                                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!--酬勤-->
                            <div class="sy sy_pay">
                                <div class="earn_tab_tit">
                                    <span class="earn_tab_year"></span>
                                    <dl class="clearfix">
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd class="jsmbut"did=" "></dd>
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd class="jsmbut" did=" "></dd>
                                        <dd id="nowMonth" class="jsmbut nowMonth m_active"></dd>
                                    </dl>
                                </div>
                                <div class="month-content">
                                    <div class="cur-month">
                                        <div class="cur-month-title">
                                            <p>本月收益</p>
                                        </div>
                                        <div class="work-earn">
                                            <ul id="monthget">
												<?php if(is_array($datapply)): $i = 0; $__LIST__ = $datapply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li>
                                                    <span class="fl">您的作品《<?php echo ($vol["title"]); ?>》获得税前净收益</span>
                                                    <span class="fr"><?php echo ($vol["money"]); ?>元</span>
                                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--提取收益-->
                            <div class="sy sy_get">
                                <div class="sy_body">
                                    <!--基本资料-->
                                    <div class="basic-mertial">
                                        <div class="data-head">
                                            <span></span>
                                            <span>基本资料</span>
                                        </div>
                                        
                                        <div class="regist-message">
											
                                            <div class="reg_name regs-line reg_pre clearfix">
                                                <span>姓名：</span>
                                                <span class="reg_input input-style">
                                                    <input type="text" id="username" onblur="names()">
                                                    <i class="yes" style="display:none;" id="usernameyes">
                                                        <img src="/Public/Book/ExtractionYield/images/yes.png" alt="">
                                                    </i>
                                                    <p>姓名必须和收款银行账户匹配，一旦填写，不可修改。</p>
                                                </span>
                                            </div>
                                            
                                            <div class="reg_idcard regs-line reg_pre clearfix">
                                                <span>身份证：</span>
                                                <span class="reg_input input-style">
                                                    <input type="text" id="idcard" onblur="idcard()">
                                                    <i class="yes"  style="display:none;" id="idcardyes">
                                                        <img src="/Public/Book/ExtractionYield/images/yes.png" alt="">
                                                    </i>
                                                    <i class="no" style="display:none;" id="idcardno">
                                                        <img src="/Public/Book/ExtractionYield/images/no.png" alt="">
                                                        请正确输入您的身份证号码
                                                    </i>
                                                    <p>身份证必须和收款银行账户匹配，一旦填写，不可修改。</p>
                                                </span>
                                            </div>
                                            
                                            <div class="reg_bank regs-line reg_pre clearfix">
                                                <span>银行账户：</span>
                                                <span class="reg_input input-style">
                                                    <input type="text" id="backnumber"  onblur="backnumber()">
                                                    <i class="yes" style="display:none" id="backnumberyes">
                                                        <img src="/Public/Book/ExtractionYield/images/yes.png" alt="">
                                                    </i>
                                                    <i class="no" style="display:none"  id="backnumberno">
                                                        <img src="/Public/Book/ExtractionYield/images/no.png" alt="">
                                                        请正确输入您的银行账户号码
                                                    </i>
                                                    <p>请慎重填写，此项影响到汇款是否成功到位，请务必填写正确。</p>
                                                </span>
                                            </div>
                                            
                                            <div class="bank-addres regs-line clearfix">
                                                <span>所属银行：</span>
                                                <span class="reg_input input-style">
                                                   <select name="bank" id="bankind" onchange="getContent(this.options[this.selectedIndex].text)">
                                                       <option value="">---请选择所属银行---</option>
                                                       <option value="中国农业银行">中国农业银行</option>
                                                       <option value="中国工商银行">中国工商银行</option>
                                                       <option value="中国工商银行">中国建设银行</option>
                                                       <option value="中国工商银行">中国银行</option>
                                                       <option value="其他">其他</option>
                                                   </select>
                                                    <p>请填写所属银行，以方便以后汇款，如果没有您的账户所属银行请选择其他，此项为必填项</p>
                                                    <div class="info-bank clearfix">
                                                        <span>
                                                            <input type="text" placeholder="其他银行" id="otherbank">
                                                        </span>

                                                        <span class="sure-btn">确定</span>
                                                    </div>
                                                </span>
                                            </div>
                                            
                                            <div class="bank-deposit regs-line clearfix">
                                                <span>开户行：</span>
                                                <span class="reg_input input-style">
                                                    <select name="province" id="province"></select>
                                                    <select name="city" id="city"></select>
                                                    <select name="area" id="area"></select>
                                                    <input type="text" placeholder="请填写分行名称" id="fenbank">
                                                    <p>请致电您办理账户的银行查询您的开户行，此项影响到汇款成功是否，请务必填写准确。</p>
                                                </span>
                                            </div>
                                            
                                            <div class="sy_submit">
                                                <span class="sy_submit_btn">提交</span>
                                            </div>
                                            
                                            <div class="notes-event">
                                                <h2>以下事项请注意：</h2>
                                                <ul>
                                                    <li>
                                                        姓名、身份证号永久不可更改。这是为了保障您的账户安全。即便您的账户被盗，他人也无法更改您的收款人一项。
                                                        <i>（如果您确实需要修改，请您及时留言反馈，或与工作人员联系作者客服。我们将认真核实您的信息）</i>
                                                    </li>
                                                    <li>
                                                        您的银行卡或存折必需为您本人身份证开户，即卡号必需和姓名唯一对应。如果填写的是您父母、亲友的卡号，但名
                                                        字填写的是自已的名字的话，将无法收到汇款。
                                                    </li>
                                                    <li>
                                                        开户行信息必需准确，必需填写如中国建设银行北京亚运村支行 或 中国农业营行山东济南某某区储蓄所 此类的详细
                                                        信息。<i>（如果您不知道，可以网上查询各银行的24小时客户服务电话查询您所持卡的具体开户银行）</i>

                                                    </li>
                                                    <li>
                                                        请反复核对您的卡号正确性。

                                                    </li>
                                                </ul>
                                                <p>
                                                    最后：本收款信息与钱包功能对应，您在本网站内获得的一切收益，奖金或其它现金，都将通过钱包系统打入您收款
                                                    信息中的银行帐号。如果您发现您的账号被盗，请立刻修改密码。
                                                </p>
                                            </div>
                                            
                                        </div>
                                     
                                    </div>

                                    <!--收款信息-->
                                    <div class="pay-information">
										
                                        <div class="data-head">
                                            <span></span>
                                            <span>收款信息</span>
                                        </div>
                                        <div class="pay-information-content">
                                            <div class="sy_messages">
                                                <h3>您已设定收款信息，收款信息如下：</h3>
                                                <ul id="information">
                                                  
                                                </ul>
                                                <div class="mo_message">
                                                    <span class="p_btn modify-btn">修改信息</span>
                                                </div>
                                            </div>
                                            <div class="wallet-head">
                                                <span></span>
                                                <span>我的钱包</span>
                                            </div>
                                            <div class="balance">
                                                <div class="my-wallet">
                                                    <span class="account-balance">
                                                        <p>账号余额：<i><?php echo ($moneys); ?></i></p>
                                                        <p>未扣税余额：<i><?php echo ($moneys); ?></i></p>
                                                    </span>
                                                    <span class="account-balance">
                                                        <p>可提现金额：<i><?php echo ($money); ?></i></p>
                                                        <p>提现流程中金额：<i><?php echo ($moneying); ?></i></p>
                                                    </span>
                                                    <span class="p_btn ext-mon">提取现金</span>
                                                </div>
                                                <div class="friend-tips">
                                                    <div class="tips-tex p-relative">
                                                        <p>
                                                            <i><img src="/Public/Book/ExtractionYield/images/tips.png" alt=""></i>
                                                            <b>提示消息:</b>
                                                        </p>
                                                        <p> <b>付费阅读收益将在月末打入钱包，如果记录出现问题请及时留言反馈或与工作联系。</b></p>
                                                        <span class="kefu-QQ"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="money-recond">
                                                <div class="money-recond-cont">
                                                    <dl class="money-recond-title clearfix">
                                                        <dt class="m_active">变更记录</dt>
                                                        <dt>提现记录</dt>
                                                    </dl>
                                                    <div class="re_tab">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="tablelist cash-cahnge">
                                                            <thead>
                                                            <tr>
                                                                <td width="15%">编号</td>
                                                                <td width="60%">详情</td>
                                                                <td width="25%">收款时间</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
															<?php if(is_array($moneydataed)): $i = 0; $__LIST__ = $moneydataed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["status"]) == "2"): ?><tr>
																	<td width="15%"><?php echo ($vol["ordernumber"]); ?></td>
																	<td width="60%">已到账</td>
																	<td width="25%"><?php echo ($vol["time"]); ?></td>
																</tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                            </tbody>
                                                        </table>

                                                        <table border="0" cellpadding="0" cellspacing="0" class="tablelist cash-get">
                                                            <thead>
                                                                <tr>
                                                                    <td width="15%">编号</td>
                                                                    <td width="30%">提取现金</td>
                                                                    <td width="30%">申请提现时间</td>
                                                                    <td width="25%">当前处理状态</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <?php if(is_array($moneydataed)): $i = 0; $__LIST__ = $moneydataed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                                                                    <td width="15%"><?php echo ($vol["ordernumber"]); ?></td>
                                                                    <td width="30%"><?php echo ($vol["money"]); ?></td>
                                                                    <td width="30%"><?php echo ($vol["time"]); ?></td>
																	<?php if(($vol["status"]) == "1"): ?><td width="25%">等待汇款</td><?php endif; ?>
																	<?php if(($vol["status"]) == "2"): ?><td width="25%">已经到账</td><?php endif; ?>
																	<?php if(($vol["status"]) == "3"): ?><td width="25%">汇款失败</td><?php endif; ?>
                                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                            </tbody>
                                                        </table>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <!--提取现金-->
    <div class="bgall">
        <div class="bgall-content">
            <div class="apply-extract">
                <span></span>
                <span>提取收益</span>
            </div>
            <div class="apply-money">
                <span class="account-balance">
                    <p>您的账户余额为：<i><?php echo ($moneys); ?></i>元</p>
                    <p>未扣税暂不可提现金额为：<i><?php echo ($model); ?></i>元</p>
                </span>
                <span class="account-balance">
                    <p>可提现总额为：<i><?php echo ($money); ?></i>元</p>
                    <p>在提现流程中金额：<i><?php echo ($moneying); ?></i>元</p>
                </span>
                <p>每月最后一天不提供提现服务</p>
            </div>
            <div class="apply-money-num">
                <label>申请提现金额：</label>
                <input type="text" id="getmoney">
                <span class="p_btn tq_cash" onclick="getmoney()">提取现金</span>
            </div>
            <div class="close-btn">
                <img src="/Public/Book/ExtractionYield/images/close.png" alt="">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/Public/Book/ExtractionYield/Layout/laydate.dev.js"></script>
<script src="/Public/Book/ExtractionYield/Js/pcasunzip.js"></script>
</body>
<!--提取收益tab导航条-->
<script>
    $(function () {
        $(".zc_mynews li").each(function (i) {
            $(this).click(function () {
                var subs="<?php echo ($sub); ?>";
                $.post(
					'/Book/ExtractionYield/yielded',
					{"subs":subs},
					function(data){
						if(data=="1"){
							$(".basic-mertial").css("display","block");
							$(".pay-information").css("display","none");
							$(this).addClass('zc_cur').siblings().removeClass('zc_cur');
							$(".sy-body .sy").eq(i).show().siblings().hide();
						}else{
							$("#information").html('');  
							$(".basic-mertial").css("display","none");
							$(".pay-information").css("display","block");
							$(this).addClass('zc_cur').siblings().removeClass('zc_cur');
							$(".sy-body .sy").eq(i).show().siblings().hide();
							var obj = eval("("+data+")");				
							var name=obj[0]['name'];
							var idcard=obj[0]['idcard'];
							var banknumber=obj[0]['banknumber'];
							var homebank=obj[0]['homebank'];
							var bankind=obj[0]['bankind'];
							var  html = "";				
									html +="<li>";
									html +="<span>姓名：</span>";
									html +="<span>"+name+"</span>";
									html +="</li>";
									html +="<li>";
									html +="<span>身份证：</span>";
									html +="<span>"+idcard+"</span>";
									html +="</li>";
									html +="<li>";
									html +="<span>银行账户：</span>";
									html +="<span>"+banknumber+"</span>";
									html +="</li>";
									html +="<li>";
									html +="<span>开户银行：</span>";
									html +="<span>"+homebank+"</span>";
									html +="</li>";
									$("#information").prepend(html);  
									$("#username").val(name);
									$("#idcard").val(idcard);
									$("#backnumber").val(banknumber);
									$("#fenbank").val(homebank);    
                                    var htmlone="";
									htmlone +="<option value="+bankind+" selected>"+bankind+"</option>";   
									$("#bankind").prepend(htmlone);
						    }         
					},
					"html"
				)
            })
        })
    })
</script>

<!--日历插件-->
<script>
    laydate({

        elem: '#J-x1'

    });
    laydate({

        elem: '#J-x2'

    });
    laydate({

        elem: '#J-x3'

    });
    laydate({

        elem: '#J-x4'

    });
</script>

<!--酬勤更改月份-->
<script>
    $(function () {
        var curDate = new  Date();
        var y = curDate.getFullYear();
        var m = curDate.getMonth() + 1;
        var nowmonthtex = document.getElementById('nowMonth');
        var $len = $(".earn_tab_tit dd");
        var yeartext = $(".earn_tab_year");
        curyear =  yeartext.html(y+"年");
        for(var i = $len.length;i >= 0  ;i--,m--){
            $len.eq(i).html(m+1+'月');
            $len.eq(i).attr("did",y)
            if(m == 0){
                y--;
                m = 12;
			
            }

        }
        nowmonthtex.innerHTML = curDate.getMonth()+1+'月';
        if(nowmonthtex.innerHTML == curDate.getMonth()+1+'月'){
            nowmonthtex.innerHTML = "本月";
        }


        $(".jsmbut").each(function (i) {
            $(this).click(function () {
                $(this).addClass("m_active").siblings().removeClass('m_active');
                $(".cur-month-title>p").html($(".m_active").text()+"收益");
				var yeared = $(this).attr("did");
				var monthed = $(this).html();
				arr=parseInt(monthed.split("月")); 
				var alldate =yeared+"-"+arr;
				if(monthed=='本月'){
					var dates=new Date;
					var nowmenth =dates.getMonth()+1;
					var alldate =yeared+"-"+nowmenth;
				}
				$.post(
					'/Book/ExtractionYield/backed?sub=<?php echo ($sub); ?>',
					{"alldate":alldate},
					function(data){
						$("#monthget").html(''); 
						var obj = eval("("+data+")");
						for(i=0;i<obj.length;i++){
						var title=obj[i]['title'];
						var money=obj[i]['money'];
						var  html = "";				
								html +="<li>";
								html +="<span class='fl'>您的作品《"+title+"》获得税前净收益</span>";
								html +="<span class='fr'>"+money+"元</span>";
								html +="</li>";
						$("#monthget").prepend(html);                   
					}
					},
					"html"
				)
            })
        })
    })
</script>

<!--开户行-->
<script>
    new PCAS("province","city","area","null","null","null");
</script>

<!--提取收益 修改信息-->
<script>
    $(".modify-btn").click(function () {
        $(".basic-mertial").show().siblings().hide()
    })
</script>

<!--基本资料到收款信息-->
<script>
function names(){
	var username = $("#username").val();
	var a = /[a-zA-Z\u4E00-\u9FA5\uf900-\ufa2d]{2,10}$/;
	var checkfactname = a.test(username);
	if(checkfactname==true){
		$("#usernameyes").css('display','inline-block');
	}else{
		$("#usernameyes").css('display','none');
	}
}
function idcard(){
	var idcard = $("#idcard").val();
	var b= /^\d{15}|\d{18}$/;
	var card = b.test(idcard);
	if(card==true){
		$("#idcardyes").css('display','inline-block');
		$("#idcardno").css('display','none');
	}else{
		$("#idcardyes").css('display','none');
		$("#idcardno").css('display','inline-block');
	}
}

function backnumber(){
	var backnumber = $("#backnumber").val();
	var c = /^(\d{16}|\d{19})$/;
	var card =c.test(backnumber);
	if(card==true){
		$("#backnumberyes").css('display','inline-block');
		$("#backnumberno").css('display','none');
	}else{
		$("#backnumberyes").css('display','none');
		$("#backnumberno").css('display','inline-block');
	}
}
</script>
<script>
    $(".sy_submit_btn").click(function () {
	var username = $("#username").val();
	var a = /[a-zA-Z\u4E00-\u9FA5\uf900-\ufa2d]{2,10}$/;
	var checkfactname = a.test(username);

	var idcard = $("#idcard").val();
	var b= /^\d{15}|\d{18}$/;
	var card = b.test(idcard);

	var backnumber = $("#backnumber").val();
	var c = /^(\d{16}|\d{19})$/;
	var bank =c.test(backnumber);
     
	var bankind = $("#bankind").find("option:selected").val();
	if(bankind=="其他"){
		var  bankind =$("#otherbank").val();
	}
	var province = $("#province").find("option:selected").val();
	var city = $("#city").find("option:selected").val();
	var area = $("#area").find("option:selected").val();
	var  fenbank = $("#fenbank").val();
	var bankindex = province+city+area+fenbank;
	if(checkfactname==false){
		alert("请填写正确姓名!");
	}else{
		if(card==false){
			alert("请填写正确身份证号码!");
		}else{
		    if(bank==false){
				alert("请填写正确的银行账户!");
			}else{
				if(bankind==""){
					alert("请选择银行类别");
				}else{
				   if(bankindex==""){
						alert("请填写分行名称!");
					}else{
						$.post(
						'/Book/ExtractionYield/banked?sub=<?php echo ($sub); ?>',
						{"username":username,"idcard":idcard,"backnumber":backnumber,"bankind":bankind,"bankindex":bankindex},
						function(data){
							//alert(data);
							if(data=="2"){
								alert("操作失败,请重新操作!");
							}else{
							$(".basic-mertial").hide().siblings().show();
							var obj = eval("("+data+")");
							var name=obj['name'];
							var idcard=obj['idcard'];
							var banknumber=obj['banknumber'];
							var homebank=obj['homebank'];
							var bankind=obj['bankind'];
							 $("#information").html(''); 
							var  html = "";				
									html +="<li>";
									html +="<span>姓名：</span>";
									html +="<span>"+name+"</span>";
									html +="</li>";
									html +="<li>";
									html +="<span>身份证：</span>";
									html +="<span>"+idcard+"</span>";
									html +="</li>";
									html +="<li>";
									html +="<span>银行账户：</span>";
									html +="<span>"+banknumber+"</span>";
									html +="</li>";
									html +="<li>";
									html +="<span>开户银行：</span>";
									html +="<span>"+homebank+"</span>";
									html +="</li>";
						            $("#information").prepend(html); 
									$("#username").val(name);
									$("#idcard").val(idcard);
									$("#backnumber").val(banknumber);
									$("#fenbank").val(homebank);  
									var htmlone="";
									htmlone +="<option value="+bankind+" selected>"+bankind+"</option>";   
									$("#bankind").prepend(htmlone);  
									//var province = "<option value="+province+" selected>"+province+"</option>";
									//var city = "<option value="+city+" selected>"+city+"</option>";
									//var area = "<option value="+area+" selected>"+area+"</option>";
									//$("#province").prepend(province); 
									//$("#city").prepend(city); 
									//$("#area").prepend(area); 
							}
						},
						"html"
						)
					}
				}
			}
		}
	}  
    })
</script>

<!--选择其他银行时-->
<script>
    function getContent(content){
        if(content == "其他"){
            $(".info-bank").show();
        }else {
            $(".info-bank").hide();
        }
    }
</script>

<!--变更和提现记录-->
<script>
    $(function () {
        $(".money-recond-title dt").each(function (i) {
            $(this).click(function () {
                $(this).addClass("m_active").siblings().removeClass("m_active")
                $(".re_tab table").eq(i).show().siblings().hide()
            })
        })
    })
</script>

<!--申请提现弹框-->
<script>
    $(function () {
        $(".ext-mon").click(function () {
            $(".bgall").show();
        })
        $(".close-btn").click(function () {
            $(".bgall").hide();
        })
    })
</script>
<script>
function searcher(){
	var start = $("#J-x1").val();
	var end = $("#J-x2").val();
	//alert(end);
	//exit();
	if(start==''||end==''){
		alert("请选择日期!");
	}else{
		document.getElementById('form1').submit();
	}
}
</script>
<script>
function coin(){
	var startone = $("#J-x3").val();
	var endone = $("#J-x4").val();
	if(startone==''||endone==''){
		alert("请选择日期!");
	}else{
		 $.post(
			'/Book/ExtractionYield/coin?sub=<?php echo ($sub); ?>',
			{"startone":startone,"endone":endone},
			function(data){
				
				var obj = eval("("+data+")");
				if(obj==null){
				    $("#tablesearch").html('');   
					var  html = "";		
					html +="<tr height='50'>";
					html +="<td colspan='3' style='text-align: center'>暂无数据</td>";
					html +="</tr>";
					$("#tablesearch").prepend(html);          
				}else{
					$("#tablesearch").html('');          
					for(i=0;i<obj.length;i++){
						var a =obj.length-1;
						if(a==i){
						  var count=obj[i]['count'];
						  $("#coined").html(count);
						}else{
						var time=obj[i]['time'];
						var sender=obj[i]['sender'];
						var gift=obj[i]['gift'];
						var  html = "";		
								html +="<tr height='50'>";
								html +="<td width='34%'>&nbsp;&nbsp;&nbsp;"+time+"</td>";
								html +="<td width='33%'>&nbsp;&nbsp;&nbsp;"+sender+"</td>";
								html +="<td width='33%'>&nbsp;&nbsp;&nbsp;"+gift+"</td>";
								html +="</tr>";
						$("#tablesearch").prepend(html);  
					   }                     
					}
			  }
		    },
			   "html"
		)
	}
}
</script>
<script>
function getmoney(){
var money = $("#getmoney").val();
var z= /^([1-9][0-9]*)+(.[0-9]{1,2})?$/; //非零开头的最多带两位小数的数字
var m = money%100;
var keing =z.test(money);
if(keing==false){
	alert("非法操作,请输入有效数字!");
}else{
	if(m!=0){
		alert("请您输入整百的可提现金额!");
	}else{
	 $.post(
			'/Book/ExtractionYield/money?sub=<?php echo ($sub); ?>',
			{"money":money},
			function(data){
				if(data=="1"){
					window.location.reload();
				}
			   else if(data=="2"){
					alert("数据更新失败,请重新操作!");
				}
				else if(data=="3"){
					alert("提现失败,请重新操作!");
				}
				else if(data=="4"){
					alert("余额不足,不足已提现,请重新输入!");
				}
		    },
			   "html"
		)
	}
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
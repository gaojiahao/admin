<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/header.css">
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/Recharge/Css/recharge.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
   <!-- <script src="/Public/Book/Recharge/Js/angular.min.js"></script>-->
</head>
<body>
<div id="main-container" class="main-container p-relative">
    <div class="mainBody">
        <div class="mainContent w1200 clearfix">
            <div class="ucentop"></div>
            <div class="rechargeBody">
                <div class="work-head">
                    <span></span>
                    <span>次元币充值</span>
                </div>
                <div class="recharge-content">
                    <div class="current-cash">
                        <div class="cz_cash_pre">
                            <span>账户余额：</span>
                             <?php if(is_array($dataall)): $i = 0; $__LIST__ = $dataall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><span> <i><?php echo ($vol["coin"]); ?></i> 次元币</span><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="cz_cash_pre cz_name">
                            <span>当前登录昵称：</span>
                            <?php if(is_array($dataall)): $i = 0; $__LIST__ = $dataall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><span><?php echo ($vol["name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="choose-pet-cash clearfix">
                            <div class="cash-tex fl">请选择充值金额：</div>
                            <div class="cash-num clearfix fl"  id="cashclearfix">
                                <span class="cur-border" money="10"><a href="javascript:;">10元</a></span>
                                <span money="50"><a href="javascript:;">50元</a></span>
                                <span money="100"><a href="javascript:;">100元</a></span>
                                <span money="500"><a href="javascript:;">500元</a></span>
                                <span money="1000" ><a href="javascript:;">1000元</a></span>
                                <span class="info-cash">
                                    <div class="input-group" style="border: 0">
                                        <input type="text"id="inputNumFun"  placeholder="其他金额" maxlength="6" onkeyup="inputNumFun()"  autocomplete="off" id="freemoney">
                                        <div class="addon">元</div>
                                    </div>
                                </span>
                            </div>
                            <div class="cz_wealf clearfix">
                                <span>每日福利:</span>
                                <span class="cz_detail">
                                    <p>以下福利每日可获得一次，以当天充值最高金额为准，三个档位不重复赠</p>
                                    <p>单笔充值超过 <em>10</em>元RMB，赠送 <em>100</em>金币；</p>
                                    <p>单笔充值超过 <em>50</em>元RMB，赠送 <em>50</em>次元币，<em>500</em>金币；</p>
                                    <p>单笔充值超过 <em>100</em>元RMB，赠送 <em>100</em>次元币，<em>1000</em>金币；</p>
                                    <p class="info_text">次元币将于次日发放到充值账户，每日单笔充值奖励与每日首次充值奖励可累加获得</p>
                                </span>
                            </div>
                            <div class="get-coin">
                                <span>获得次元币</span>
                                <span class="cz_coin"> <i id="coinNum">1000次元币</i>（1元=100次元币）</span>
                            </div>
                            <div class="cz_line"></div>
                            <div class="zf_mod">
                                <span>支付方式：</span>
                                <span style="text-align:center;">
                                    <i class="zf_alipy zf_active" style="margin-left:60px;"><img src="/Public/Book/Recharge/images/alipy.png" alt=""></i>
                                    <!--<i class="zf_wechat"><img src="/Public/Book/Recharge/images/weixin.png" alt=""></i>-->
                                </span>
                            </div>
                            <div class="cz_sure">
								<form id="form1" name="form1" action="/Home/Alipay/alipayapi/" method="POST">
									<span class="cz_btn" onclick="chongzhi()">确认充值</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!--选择金额-->
<script>
    var text = document.getElementById('coinNum');
	var inputNumFu = document.getElementById('inputNumFun')
//    text.innerHTML = "1000次元币";
    var $num,numText,aa,bb,inputText;
    $(".cash-num>span").each(function () {
        $(this).click(function () {
            $(this).addClass("cur-border").siblings().removeClass("cur-border")
            if($(".cash-num>span.info-cash").hasClass('cur-border')){
               text.innerHTML = Number(inputNumFu.value*100) + "次元币" 
               // text.innerHTML ="次元币";
            }
            numText = $(this).find("a").html();
            aa = numText.split('元');
            bb = aa[0];
            $num = Number(bb)*100;
            text.innerHTML = $num+'次元币';
        })
    })
   
function inputNumFun(){
 var inputNum = Number(inputNumFu.value*100);
text.innerHTML = inputNum + "次元币";
}

//    支付宝支付或微信支付
 
    $(".zf_mod i").each(function () {
        $(this).click(function () {
            $(this).addClass('zf_active').siblings().removeClass("zf_active");
        })
    })
</script>
<script>
function chongzhi(){
	var cashclearfix = $(".cur-border").attr('money');
	if(cashclearfix==undefined){
	var cashclearfix = $("#inputNumFun").val();
    }
	if(cashclearfix==""){
		alert("请选择金额!谢谢!");
	}else{
		var html='';
		      html +="<input type='hidden' name='WIDtotal_fee' value="+cashclearfix+">";
	          $("#form1").prepend(html); 
	          document.getElementById('form1').submit();
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
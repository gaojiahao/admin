<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/header.css">
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/ExpenseCalendar/Css/expense.css">
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
                    <li class="item-5 active expand">
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
                        <span>消费记录</span>
                    </div>
                    <div class="expense-content">
                        <div class="exp-head clearfix">
                            <span class="fl">累计消费次元币：<a id="moneytotal"><?php echo ($sumdata); ?></a>点</span>
                            <span class="fr">
                                <select class="exp-car" name="check" id="expCheck" onclick="srarch()">
                                    <option value="0">今日消费查询</option>
                                    <option value="2">最近一周消费查询</option>
                                    <option value="3">当月消费查询</option>
                                    <option value="4">最近5个月的消费查询</option>
                                    <option value="5">最近十二个月消费查询</option>
                                </select>
                            </span>
                        </div>
                        <div class="time-calander">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr bgcolor="f1f1f1">
                                        <th>时间</th>
                                        <th>途径</th>
                                        <th>消费/获取(次元币)</th>
                                    </tr>
                                </thead>
                                <tbody id="tented">
									<?php if(is_array($consumedata)): $i = 0; $__LIST__ = $consumedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr bgcolor="#fff">
                                        <td><?php echo ($vol["time"]); ?></td>
                                        <td><?php echo ($vol["pathroad"]); ?></td>
                                        <td>
											<?php if(($vol["status"]) == "2"): ?>+<?php endif; if(($vol["status"]) == "1"): ?>-<?php endif; echo ($vol["money"]); ?>
										</td>
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
</body>
<script>
function srarch(){
var dated = $("#expCheck").find("option:selected").val();
 $.post(
	'/Book/ExpenseCalendar/srarch',
	{"dated":dated},
	function(data){
		//alert(data);
		var obj = eval("("+data+")");//解析
		var lengthed = obj.length;
		$("#tented").html('');
		$("#moneytotal").html('');
		for(i=0;i<obj.length;i++){
			var a =obj.length-1;
			if(a==i){
				var count=obj[i]['count'];
				$("#moneytotal").html(count);
			}else{
			var time=obj[i]['time'];
			var pathroad=obj[i]['pathroad'];
			var money=obj[i]['money'];
			var status=obj[i]['status'];
			if(status=="1"){
				var tp = "-"; 
			}
			if(status=="2"){
				var tp = "+"; 
			}
             var html='';
					html +="<tr bgcolor='#fff'>";
					html +="<td>"+time+"</td>";
					html +="<td>"+pathroad+"</td>";
					html +="<td>";
					html +=""+tp+"</eq>"+money+"";
					html +="</td>";
					html +="</tr>";
			$("#tented").append(html);  
	     }
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
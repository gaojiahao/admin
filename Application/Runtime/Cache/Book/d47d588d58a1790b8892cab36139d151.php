<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="max-age=7200">
	<meta http-equiv="Expires" content="7200">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/header.css">
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/Activity/Css/activity.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
	<script language="javascript" src="/Public/Js/Ajax.class.js"></script>
	<script language="javascript" src="/Public/Js/XHRUploader.class.js"></script>
	<script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<style>
.re_page2{width:auto; padding-left:10px; padding-top:28px; text-align:center;}
.re_page2 a {display: inline-block; border: 1px solid #ebebeb; padding: 6px 14px;margin-left:10px;width:auto;border-radius:5px;color: #3c3c3c;}
.current{
		background: #fdc051;
		color: #fff !important;
		border: none !important;
		border-radius: 5px;
		padding: 7px 14px !important;
		margin-left: 10px;
		line-height: 24px;
	}
 .re_page2 a:hover{
		background: #fdc051 !important;
		color: #fff;
	}
	
</style>
<body>
<!--内容-->
<div id="container" class="container p-relative">
    <div class="mainBody">
        <div class="actbg"><img src="/Public/Book/Activity/images/actbg.png" alt=""></div>
        <div class="banerMain">
            <div class="actimg w1200">
                <div class="activity-cont">
                    <div class="actTitle"><img src="/Public/Book/Activity/images/actont.png" alt=""></div>
                </div>
                <div class="actList">
                    <p>1.活动期间注册的用户即送1个月的VIP以及1000金币；</p>
                    <p>2.活动期间充值满10元再送3个月的VIP；</p>
                    <p>3.本活动最终解释权归次元播动漫所有。</p>
                    <p>活动时间：2017年3月10日至2017年5月10日</p>
                </div>
                <div class="actRegis" onclick="resting()">
                    <!--如果已经注册，跳到个人中心，-->
                        <img src="/Public/Book/Activity/images/actregs.png" alt="">
                </div>
                <div class="hetuzone">
                    <img src="/Public/Book/Activity/images/imgs1.png" alt="">
                </div>
                <div id="masonry" class="container-fluid  clearfix">
                    <div class="boxImg1">
                        <img src="/Public/Book/Activity/images/11.png" alt="">
                    </div>
                    <div class="boxImg2">
                        <img src="/Public/Book/Activity/images/22.png" alt="">
                        <img src="/Public/Book/Activity/images/33.png" alt="">
                    </div>

                    <div class="boxImg3">
                        <img src="/Public/Book/Activity/images/44.png" alt="">
                        <img src="/Public/Book/Activity/images/55.png" alt="">
                    </div>
                    <div class="boxImg4">
                        <img src="/Public/Book/Activity/images/66.png" alt="">
                        <img src="/Public/Book/Activity/images/77.png" alt="">
                    </div>

                </div>
            </div>
        </div>
        <div class="talkZone">
            <div class="w879">
                <!--讨论区-->
                <div class="part-four bg-fff m-t15 clearfix">
                    <div class="talk-zone-head">
                        <span>
                            <i class="v-sub"><img src="/Public/Book/Activity/images/talk-icon.png" alt=""></i>
                            <b>讨论区</b>
                        </span>
                        <span>共有<i id="talkNum"><?php echo ($totalnumber); ?></i>条评论</span>
                        <div class="talking b-line clearfix">
                            <textarea class="talkSome" name="talkSome" id="talkSome" placeholder="说点什么吧..."></textarea>
                            <div id="motion" class="motion"></div>
                            <div class="uploadImg p-relative">
                                <input type="file" id="uploadImg" name="uploadImg">
                                上传图片
                            </div>
                            <div class="sent-talking" onclick="expressTalk(this)"> 发表评论</div>
                            <div id="imageadd" style="margin-left:18px;">
                            </div>
                        </div>
                        <div class="exp_list">
                            <div class="clearfix"><span class="x_close">x</span></div>
                            <ul class="emotion-content"></ul>
                        </div>
                    </div>
                    <div class="talk-zone-content b-line">
                        <ul class="viewUl" id="viewUl">
							<?php if(is_array($Formcomentdata)): $i = 0; $__LIST__ = $Formcomentdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li class="li1">
                                <div class="talker-avatar">
                                    <i class="i_avata"><img src="<?php echo ($vol["authorphoto"]); ?>" alt=""></i>
                                    <?php if(($vol["vipe"]) == "0"): else: ?>
                                    <i class="winer"><img src="/Public/Book/Activity/images/vip-icon.png" alt=""></i><?php endif; ?>
                                </div>
                                <div class="talk-text" id="talktexts<?php echo ($vol["indexed"]); ?>">
                                    <div class="text-head">
                                        <span class="fl">
                                            <a class="talk-name">
												<?php if(($vol["vipe"]) == "0"): ?><i style="color:#1A1A1A;"><?php echo ($vol["nickname"]); ?> </i>
												<?php else: ?>
												<i><?php echo ($vol["nickname"]); ?> </i><?php endif; ?>
                                                <?php if(($vol["admined"]) == "1"): ?><i><img src="/Public/Book/Static/images/manager.png"></i><?php endif; ?>
												<?php if(($vol["vipe"]) == "0"): else: ?>
												<i><img src="/Public/Book/Static/images/vip.png"></i><?php endif; ?>
                                                 <?php if(($vol["grade"]) == "1"): ?><i><img src="/Public/Book/Authormessge/images/1.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "2"): ?><i><img src="/Public/Book/Authormessge/images/2.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "3"): ?><i><img src="/Public/Book/Authormessge/images/3.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "4"): ?><i><img src="/Public/Book/Authormessge/images/4.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "5"): ?><i><img src="/Public/Book/Authormessge/images/5.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "6"): ?><i><img src="/Public/Book/Authormessge/images/6.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "7"): ?><i><img src="/Public/Book/Authormessge/images/7.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "8"): ?><i><img src="/Public/Book/Authormessge/images/8.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "9"): ?><i><img src="/Public/Book/Authormessge/images/9.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "10"): ?><i><img src="/Public/Book/Authormessge/images/10.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "11"): ?><i><img src="/Public/Book/Authormessge/images/11.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "12"): ?><i><img src="/Public/Book/Authormessge/images/12.png"></i><?php endif; ?>
                                            </a>
                                        </span>
                                        <span class="flat"><a id="flat" class="flat<?php echo ($vol["indexed"]); ?>"></a><a>F</a></span>
                                    </div>
                                    <div class="talk-content">
                                        <p class="expressTex"><?php echo ($vol["content"]); ?></p>
                                        <br>
										<?php if(($vol["photopath"]) == ""): else: ?>
										<img src="<?php echo ($vol["photopath"]); ?>" height="250px;"><?php endif; ?>
                                    </div>
                                    <div class="review"  >
                                        <div id="talk-time" class="fl">&nbsp;  <?php echo ($vol["time"]); ?></div>
                                        <div class="citem-btns re-reply fr">　
											　　<a 　class="topfirst"　href="javascript:;"　 style=" cursor: pointer;margin-right: -22px;" onclick="zhiding(this)" did="<?php echo ($vol["indexed"]); ?>">置頂 &nbsp; |</a>
											
											　　<a  　href="javascript:;" onclick="deleteone(this)" did="<?php echo ($vol["indexed"]); ?>">删除 &nbsp;|</a>
											   
											   <a 　id="reply"　 class="reply" did="<?php echo ($vol["indexed"]); ?>" onclick = "backFun(this)">   &nbsp;回复 &nbsp;|</a>
											   
											   <a href="javascript:;" onclick="zan(this)"  did="<?php echo ($vol["indexed"]); ?>">赞(<a id="ad<?php echo ($vol["indexed"]); ?>"><?php echo ($vol["zan"]); ?></a>)</a>
                                       </div>
                                    </div>
                                    <div id="talktext<?php echo ($vol["indexed"]); ?>">
										<div class="moreLoad" id="more<?php echo ($vol["indexed"]); ?>" sb="talktexts<?php echo ($vol["indexed"]); ?>"  onclick="mored(this)">更多~</div>
                                    </div>
                                    
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <div class="fenye" style="margin:0px;">
                            <div class="re_page2">
                               <?php echo ($show); ?>
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
</div>
</body>
<script>
    function expressTalk(obj) {
		var textarea = $("#talkSome").val();
		var target = $("#target").val();
		if(target==undefined){
			target="";
		}
		if(textarea != "" || target !="" ){
				$.post(
				'/Book/Activity/speaking',
				{"textarea":textarea,"target":target},
				function(data){
					if(data=="1"){
						alert("請登錄後再評論,謝謝!");
					}else{
					    var obj = eval("("+data+")");
						var telephone		=	obj["telephone"];
						var authorphoto	=	obj["authorphoto"];
						var nickname		=	obj["nickname"];
						var grade			=	obj["grade"];
						var time				=	obj["time"];
						var photopath		=	obj["photopath"];
						var content			=	obj["content"];
						var zan				=	obj["zan"];
						var numberone	=	obj["numberone"];
						var vipe				=	obj["vipe"];
						var admined		=	obj["admined"];
						var indexed		=	obj["indexed"];
						var count            =obj["count"];
						var subt = "one"+indexed;
						var talktext ="talktext"+indexed;
						 var zanid = "ad"+indexed;
						var html = "";
						html+="<li class='li1'>";
						html+=" <div class='talker-avatar'>";
						html+="<i class='i_avata'><img src="+authorphoto+"></i>";
						if(vipe !=0){
						html+="<i class='winer'><img src='/Public/Book/Activity/images/vip-icon.png'></i>";
					    }
						html+="</div>";
						html+="<div class='talk-text'>";
						html+="<div class='text-head'>";
						html+="<span class='fl'>";
						html+="<a class='talk-name'>";
						html+="<i>"+nickname+" </i>";
						html+="</a>";
						if(admined=="1"){
						html+="<i class='contentclass'><img src='/Public/Book/Static/images/manager.png'></i>";
						} 
						if(vipe !=0){
						html+="<i class='contentclass'><img src='/Public/Book/Static/images/vip.png'></i>";
						 }
						if(grade=="1"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/1.png'></i>";
						}
						if(grade=="2"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/2.png'></i>";
						}
						if(grade=="3"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/3.png'></i>";
						}
						if(grade=="4"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/4.png'></i>";
						}
						if(grade=="5"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/5.png'></i>";
						}
						if(grade=="6"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/6.png'></i>";
						}
						if(grade=="7"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/7.png'></i>";
						}
						if(grade=="8"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/8.png'></i>";
						}
						if(grade=="9"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/9.png'></i>";
						}
						if(grade=="10"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/10.png'></i>";
						}
						if(grade=="11"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/11.png'></i>";
						}
						if(grade=="12"){
						html+="<i class='contentclass'><img src='/Public/Book/Authormessge/images/12.png'></i>";
						}
						html+="</span>";
						html+="<span class='flat'><a id='flat'>"+count+"</a><a>F</a></span>";
						html+="</div>";
						html+="<div class='talk-content'>";
						html+="<p class='expressTex'>"+content+"</p>";
						html+="<br>";
						if(photopath!=""){
						html+="<img src="+photopath+" height='250px;'>";
					    }
						html+="</div>";
						html+="<div class='review'>";
						html+="<div id='talk-time' class='fl'>&nbsp;"+time+"</div>";
						html+="<div class='citem-btns re-reply fr'>";　
						html+="<a 　class='topfirst'　href='javascript:;'　 style='cursor: pointer;'>置頂</a>";
						html+="<i> |</i>";
						html+="<a  　href='javascript:;' onclick = 'deleteone(this)' did="+indexed+">删除</a>";
						html+="<i> |</i>";
						html+="<a 　id='reply'　 class='reply' did="+indexed+" onclick = 'backFun(this)'>回复</a>";
						html+="<i> |</i>";
						html+="<a href='javascript:;' onclick='zan(this)'  did="+indexed+">赞(<a id="+zanid+">"+zan+"</a>)</a>";
						html+="</div>";
						html+="</div>";
						html+="<div id="+talktext+">";
						html+="</div>";
						html+="</li>";
						$("#viewUl").prepend(html);
						$('#imageadd').html('');
						//$("#talkSome").val("");
					}
				},
				   "html"
			)
		}else {
			alert("请输入内容");
		}
    }
//弹出回复框
   // var i = 0;
    function backFun(obj) {
      
        var indexed = $(obj).attr("did");
        var talktext ="talktext"+indexed;
        //var mp ="#"+talktext;
		var mp ="#"+talktext+"";
		var pid = "repeat"+indexed;
         //alert(mp);
       // i++;
       $(".contentent").remove();
        var html = "";
        html += '       <div class="review-content return contentent" style="display:block">';
        html+= '           <div class="re-item">';
        html += "             <textarea class='repeat' name='repeat' id="+pid+"></textarea>";
        html += '           </div>';
        html += '           <div id="motion2" class="motion"></div>';
        html += "           <div id='sent-talking' class='sent-talking' pid = "+pid+" did="+indexed+" onclick='backaginFun(this)'>回复</div>";
        html += '      </div>';
        $(mp).prepend(html);
      /*  if(i % 2 == 1){
            $(obj).parents(".talk-text").find(".review-content").show();
        }else {
            $(obj).parents(".talk-text").find(".review-content").remove();
        }*/
    }
//显示回复后的情况
    function backaginFun(obj) {
        var html3 = "";
		var pid =$(obj).attr("pid");//textarea id
		var bibi ="#"+pid+"";;
		var did =$(obj).attr("did");//indexed
		var contented= $(bibi).val();

		var talktext ="talktext"+did;
		var addcontent ="#"+talktext+"";;
		
		//exit();
		//alert(contented);
		$.post(
		'/Book/Activity/backaginFun',
		{"did":did,"contented":contented},
			function(data){
				if(data=="1"){
					alert("請登錄後，再評論!");
				}else{
				var obj = eval("("+data+")");
				var user =obj['user'];
				var speaker =obj['speaker'];
				var content =obj['content'];
				var time =obj['time'];
				var zan =obj['zan'];
				var indexed =obj['indexed'];
				var id =obj['id'];
				var idddd = "dd"+id;
				var contentid = "content"+id;
				var 	html3="";
						html3 += '      <div class="after-write-back return" id='+contentid+' style="display:block">';
						html3 += '        <div class="reply-item">';
						html3 += '           <p class="reply-pev">';
						html3 += '               <i class="mine-name">'+user+'</i>';
						html3 += '               <em>回复</em>';
						html3 += '               <i class="you">'+speaker+'</i>';
						html3 += '           </p>';
						html3 += '           <div class="reply-content">'+content+' </div>';
						html3 += '           <div class="af-review">';
						html3 += '               <div class="af-time fl">'+time+'</div>';
						html3 += '               <div class="citem-btns fr">';
						html3 += '                   <a class="reply" href="javascript:;">置頂</a>';
						html3 += '                   |';
						html3 += '                   <a class="reply" href="javascript:;" onclick="deleted(this)" did='+id+'>删除</a>';
						html3 += '                   |';
						html3 += '                   <a class="reply"  did='+id+'  aia = '+indexed+' onclick="backone(this)">回复</a>';
						html3 += '                   |';
						html3 += '                   <a class="agreeOne" href="javascript:;" did='+id+' onclick="zanone(this)">赞(<a id='+idddd+'>0</a>)</a>';
						html3 += '               </div>';
						html3 += '           </div>';
						html3 += '        </div>';
						html3 += '      </div>';
						$(addcontent).append(html3);  
						$(".review-content").css("display","none");
				  }
			},
		"html"
		)
    }
</script>
<script>
function backone(obj){
var did = $(obj).attr('did');//評論的id
var indexed = $(obj).attr('aia');//評論的索引
var contentid = "content"+did;
var api ="#"+contentid+"";;
var pid = "back"+did;
 $(".contentent").remove();
var html = "";
	html += '       <div class="review-content return contentent" style="display:block">';
	html+= '           <div class="re-item">';
	html += "             <textarea class='repeat' name='repeat' id="+pid+"></textarea>";
	html += '           </div>';
	html += '           <div id="motion2" class="motion"></div>';
	html += "           <div id='sent-talking' class='sent-talking' pid = "+pid+" did="+indexed+" onclick='backaginFun(this)'>回复</div>";
	html += '      </div>';	
	$(api).append(html);  
}
</script>
<script>
var abc="234";
$.post(
	'/Book/Activity/displayed',
	{"abc":abc},
	function(data){
		var obj = eval("("+data+")");
		for(i=0;i<obj.length;i++){
			var id=obj[i]['id'];
			var user=obj[i]['user'];
			var speaker=obj[i]['speaker'];
			var content=obj[i]['content'];
			var time=obj[i]['time'];
			var zan=obj[i]['zan'];
			var indexed=obj[i]['indexed'];
			var talktext ="talktexts"+indexed;
			var addcontent ="#"+talktext+"";
			var contentid = "content"+id;
			var iddd = "dd"+id;
			//var flat = "flat"+indexed;
			//var flatclass ="."+flat+"";
			//$(flatclass).html(i);
			//alert(indexed);
				var 	html="";
						html += '      <div class="after-write-back return" id='+contentid+' style="display:block">';
						html += '        <div class="reply-item">';
						html += '           <p class="reply-pev">';
						html += '               <i class="mine-name">'+user+'</i>';
						html += '               <em>回复</em>';
						html += '               <i class="you">'+speaker+'</i>';
						html += '           </p>';
						html += '           <div class="reply-content">'+content+' </div>';
						html += '           <div class="af-review">';
						html += '               <div class="af-time fl">'+time+'</div>';
						html += '               <div class="citem-btns fr">';
						//html += '                   <a class="reply" href="javascript:;">置頂</a>';
						html += '                   |';
						html += '                   <a class="reply" href="javascript:;" onclick="deleted(this)" did='+id+'>删除</a>';
						html += '                   |';
						html += '                   <a class="reply"  did='+id+'  aia = '+indexed+' onclick="backone(this)">回复</a>';
						html += '                   |';
						html += '                   <a class="agreeOne" href="javascript:;" did='+id+' onclick="zanone(this)">赞(<a id='+iddd+'>'+zan+'</a>)</a>';
						html += '               </div>';
						html += '           </div>';
						html += '        </div>';
						html += '      </div>';
						$(addcontent).append(html);  
						var addid = "more"+indexed;
						var idd = "#"+addid+"";
                         var len = $(addcontent).find('>div').length;
                         if(len>8){
							$(addcontent).css('overflow','hidden'); 
							$(addcontent).css('height','820');  
							$(idd).css('display','block');  
						}
	   }
	},
	"html"
)
</script>
<!--表情弹框-->
<script>
    $(function () {
        $(".motion").click(function(e){
            $(".exp_list").fadeIn();
            e.stopPropagation();
        })
    })
</script>
<script>
function resting(){
	var resting = 1;
	$.post(
		'/Book/Activity/resting',
		{"resting":resting},
		function(data){
			if(data=="1"){
				$("#login").css('display','block');
				$("#login-nomal").css('display','block');
				$("#register-nomal").css('display','none');  
				$("#active").css('border-bottom','3px solid #FFA500');
				$("#active").css('color','#FFA500');
				$("#act").css('border-bottom','0px solid #FFA500');
				$("#act").css('color','#4D4D4D');
			}else{
				window.location.href="/Book/SelfMessage/index";
			}
		},
		   "html"
	)
}
</script>
<script>
XHRUploader.init({
		handlerUrl:'/Admin/Novel/Upload',
		input: '_imgs[]'
	}).uploadFile('uploadImg', {
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
				$('#imageadd').html('');
				var html ="";
						html +="<img src="+ret.data+" width='110'>";
						html +="<input type='hidden'  value="+ret.data+" id='target'>";
				$('#imageadd').prepend(html);
			}else{
				 alert("图片大小不符合请选择核实的大小上传!");
				}
		}
	}); 
</script>
<script>
function deleted(obj){
	var did = $(obj).attr("did");
	var contentid = "content"+did;
	var removecontent ="#"+contentid+"";
	$.post(
		'/Book/Activity/deletede',
		{"did":did},
		function(data){
			if(data=="1"){
				alert("請登錄後，再來操作，謝謝!");
			}
			else if(data=="2"){
				$(removecontent).css('display','none');
			}
			else if(data=="3"){
					alert("操作失敗，請重新操作!");
			}
			else if(data=="4"){
					alert("您沒有權限刪除!");
			}
		},
		"html"
	)
}
</script>
<script>
function deleteone(obj){
	var did = $(obj).attr("did");
	$.post(
		'/Book/Activity/deleteone',
		{"did":did},
		function(data){
			//alert(data);
			if(data=="1"){
				alert("請登錄後，再來操作，謝謝!");
			}
			else if(data=="2"){
				window.location.reload();
			}
			else if(data=="3"){
					alert("操作失敗，請重新操作!");
			}
			else if(data=="4"){
					alert("您沒有權限刪除!");
			}
		},
		"html"
	)
}
</script>
<script>
	var abd = "234";
	$.post(
		'/Book/Activity/flowed',
		{"abd":abd},
		function(data){
			var obj = eval("("+data+")");
			for(i=0;i<obj.length;i++){
				var ad = i+1;
				var indexed = obj[i]['indexed'];
				var flat = "flat"+indexed;
				var classflat = "."+flat+"";
				$(classflat).html(ad);
			}
		},
		"html"
	)
</script>
<script>
function zhiding(obj){
  var did = $(obj).attr("did");
  $.post(
		'/Book/Activity/zhiding',
		{"did":did},
		function(data){
			if(data=="1"){
				window.location.reload();
			}else{
				alert("您沒有權限更改!");
			}
		},
		"html"
	)
}
</script>
<script>
function mored(obj){
var classes = $(obj).attr("sb");
var csl = "#"+classes+"";
$(csl).css('height','auto');
$(obj).css('display','none');
}
</script>
<script>
function zan(obj){
	var did=$(obj).attr("did");
 $.post(
	'/Book/Activity/zanone',
	{"did":did},
	function(data){
		var idd = "ad"+did;
		var csl = "#"+idd+"";
		$(csl).html(data);
	},
	"html"
)
}
</script>
<script>
function zanone(obj){
	var did = $(obj).attr("did");
	$.post(
	'/Book/Activity/zantwo',
	{"did":did},
	function(data){
		var idd = "dd"+did;
		var csl = "#"+idd+"";
		$(csl).html(data);
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
<script src="/Public/Book/Activity/Js/express.js"></script>
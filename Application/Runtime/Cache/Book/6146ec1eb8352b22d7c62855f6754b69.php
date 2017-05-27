<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/Createnovel/Mynovel/NovelChapterManager/Css/novelchamag.css">
    <link rel="stylesheet" href="/Public/Book/Createcomic/Mywork/Chaptermanager/Css/look.css">
    <link rel="stylesheet" href="/Public/Book/Mainzoneleft/Css/mainzone.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/creatorzone.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/maincenter.js"></script>
    <script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<style>
.re_page2{ width:auto; height:30px; padding-right:10px; padding-top:10px; text-align:center;}
.re_page2 a { text-decoration: none; border: 1px solid #ccc; padding: 5px;;margin-left:10px;width:auto;border-radius:5px;}
.re_page2 span {border: 1px solid #ccc; padding: 5px 12px; color: #853645;}
.first,.end{
	background: #febf51;
	color: #fff;
	border: none !important;
	}
.next:hover{
	background: #febf51;
	color: #fff;
}
.prev:hover{
	background: #febf51;
	color: #fff;
}
</style>
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
                     <li class="item-1 active expand">
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
                <!--作品管理按钮选项可修改-->
                <div class="comic-chapter-modify work-modify">
                    <div class="work-head">
                        <span></span>
                        <span><?php echo ($gettitle); ?></span>
                    </div>
                    <!--章节管理-->
                    <div class="lt-zhangjie-manage">
                        <div class="works_manger_con autoHeight">
                            <div class="work-modify-name comic-modify-name">
                                <div class="tab-comic-novel clearfix">
                                    <ul>
                                        <li>
                                            <a href="/Book/Workcomic/index?lav=<?php echo ($vat); ?>">
                                                作品管理
                                            </a>
                                        </li>
                                        <li>
                                            <a class="curState" href="javascript:;">
                                                章节管理
                                            </a>
                                        </li>
                                        <li class="modify-new-works anbtn"><a href="/Book/Uploadchapter/index?lav=<?php echo ($val); ?>"><b>新建章节</b></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mod-chapter-manage">
								<form method="post" action="/Book/ComicManager/change?val=<?php echo ($val); ?>" name="form1" id="form1">
                                <div class="annuce_con_tit">
                                    <input id="zj-checkbox" type="checkbox" name="checkbox" class="zj-check" onclick="checkAll(this)">
                                    <span class="listnum">顺序</span>
                                    <span class="an_con">章节名称</span>
                                    <span class="zj-num">图片数量</span>
                                    <span class="statu">状态</span>
                                    <span class="date_time">更新时间</span>
                                    <span class="operate" style="width:140px">操作</span>
                                </div>
                                <ul class="annuce_con_li autoHeight" id="chapter_list_id">
									<?php if(is_array($Formpassagedata)): $k = 0; $__LIST__ = $Formpassagedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><li>
                                        <input type="checkbox" name="checkboxed" class="zj-check">
                                        <input type="hidden"  value="<?php echo ($vol["id"]); ?>" name="hidden<?php echo ($vol["id"]); ?>">
                                        <input class="listnum" value="<?php echo ($vol["ordered"]); ?>" name="listnum<?php echo ($vol["id"]); ?>" onblur="remt(this)">
                                            <span class="an_con">
                                                <a href="javascript:;"><?php echo ($vol["section"]); ?></a>
                                            </span>
                                        <span class="zj-num"><?php echo ($vol["quatityword"]); ?></span>
                                        <a href="javascript:;" title="上传作品必须为本人原创作品，或本人拥有相关发布权利之作品，不得上传他人作品、海外作品或明显无版权作品。">
                                            <?php if(($vol["status"]) == "0"): ?><span class="statu unverify">审核中</span><?php endif; ?>
                                            <?php if(($vol["status"]) == "1"): ?><span class="statu unverify">审核通过</span><?php endif; ?>
                                            <?php if(($vol["status"]) == "2"): ?><span class="statu unverify">审核失败</span><?php endif; ?>
                                        </a>
                                        <span class="date_time"><?php echo ($vol["time"]); ?></span>
                                            <span class="operate">
                                                <a class="novel-prelook" href="javascript:;" did="<?php echo ($vol["authornumber"]); ?>" no="0" onclick="looked(this)">
                                                    预览
                                                </a>
                                                |
                                                <a href="/Book/Modifycomi/index?lav=<?php echo ($vol["val"]); ?>&&lvc=<?php echo ($vol["id"]); ?>">修改</a>
                                                |
												<input type="hidden"  value="<?php echo ($vol["authornumber"]); ?>" class="deleteclass">
												<a class="comic-delete" href="javascript:;" onclick="deleted(this)">删除</a>
                                            </span>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            
                            <div class="last-row clearfix">
                                <div class="lastbox fl">
                                    <input type="checkbox" name="checkbox" class="zj-check" id="checkbox1" onclick="ckSelectedChange(this)">
                                    全选
                                    <a href="javascript:;" class="cans_btn" id="chapter_sort_id" onclick="saved()">保存排序</a>
                                </div>
                                <div class="li-page work-next-page fr" id="page_id">
                                   <div  class="re_page2"><?php echo ($page); ?></div>
                                </div>
                            </div>
                            <p>说明 ：调节章节顺序时，请先修改排序数字，然后点击”保存排序“</p>
                           </form>
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

    <!--预览-->
    <div class="look" id="looked">
		<p class="pre-head">预览</p>
		<a href="javascript:;" class="closeP" onclick = "removed()"></a>
        <div class="author_preview_con">
			 <div class="preview_slide_container">
                    <div class="preview_con_slide">
                    </div>
             </div>
             <a class="prenext">
             </a>
             <div class="options">
					<a class="lasted">
					<a>
					<a class="selectoption">
						
					 </a>
                    <a class="nexted">
                    </a>
                    <span class="total start-total">共<span class="totalnum">0</span>页</span>
              </div>
		</div>
    </div>
</div>
</body>
<!--删除章节-->
<script>
//全选
    function checkAll(obj) {
        $(".zj-check").prop('checked',$(obj).prop('checked'))
    }
    function ckSelectedChange(obj) {
        $(".zj-check").prop('checked',$(obj).prop('checked'))
    }
</script>

<!--预览-->
<script>
    $(function () {
		 $(".nov_pre_look").click(function () {
            $(".nov_pre_look").hide()
        })
        $(".novel-module").click(function (e) {
            e.stopPropagation();
        })
    })
</script>
<script>
var i="";
function remt(obj){
	var spaned =$(obj).val();
	var e =/^[0-9]*[1-9][0-9]*$/;
	var number = e.test(spaned);
	if(number==false){
		i=1;
	}else{
		i=2;
	}
}
function saved(){
	if(i=="2"){
		var chk_value =[];
		$("input[name='checkboxed']:checked").each(function(){
			chk_value.push($(this).val());
		});
		var cart = chk_value; 
		//alert(cart);
		if(cart==""){
			alert("非法操作,请勾选章节");
		}else{
		   document.getElementById("form1").submit();
		}
    }else{
		alert("非法操作,请输入需要更改章节顺序的顺序号!");
	}
}
</script>
<script>
function deleted(obj){
	var obj  = $(obj).siblings(".deleteclass").val();
	
	$.post( 
		'/Book/ComicManager/deleted',
		{"obj":obj},
		function(data){
			//alert(data);
			if(data=="1"){
				//alert("删除成功!");
				window.location.reload();
			}
			else if(data="2"){
				//alert("删除失败!");
				window.location.reload();
			}
		},
		"html"
	)
}
</script>
<script>
function looked(obj){
		var see = $(obj).attr('did');
		var no = $(obj).find("option:selected").val();
	     //alert(see);
	     if(no==undefined){
			var no = $(obj).attr('no');
		 }
		if(no==-1){
			alert("已经是第一张了");
		}else{
		$("#looked").css('display','block');
$.post( 
		'/Book/ComicManager/looked',
		{"see":see,"no":no},
		function(data){
			//alert(data);
			var obj1 = eval("("+data+")");
		    if(obj1['a']){
				alert("已经是最后一张了");
			}else{
			var username = obj1['username'];
			var  numbers =obj1['numbers'];
			var  path = obj1['path'];
			var  val = obj1['val'];
			var  section = obj1['section'];
			var  time =obj1['time'];
			var  oldtime =obj1['time'];
			var  title = obj1['title'];
			var count =parseInt(obj1['count']);
			$(".totalnum").html(count);
			html= "<img id='show_pic' src="+path+" name='' height='480'>";
			$(".preview_con_slide").html('');
			$(".preview_con_slide").prepend(html);
			
			var lastno=parseInt(no)-1;//上一页索引
			
			var nextno=parseInt(no)+1;//下一页索引
			  
			htmlnext= "<a class='nextpage'  did="+numbers+" no="+nextno+" onclick='looked(this)'>下一页</a>";
			$(".nexted").html('');
			$(".nexted").prepend(htmlnext);
			
			htmlast= "<a class='prepage'  did="+numbers+" no="+lastno+" onclick='looked(this)'>上一页</a>";
			$(".lasted").html('');
			$(".lasted").prepend(htmlast);
			
			var htmlook = "";
			htmlook += "<div class='pre' did="+numbers+" no="+lastno+" onclick='looked(this)'>";
			htmlook += "</div>";
			htmlook += "<div class='nexts' did="+numbers+" no="+nextno+" onclick='looked(this)'>";
			htmlook += "</div>";
			$(".prenext").html('');
			$(".prenext").prepend(htmlook);
           
            var htmlselect = "<select class='select_jumpage' id='select_jumpage' did="+numbers+" onclick='looked(this)'></select>";
          	$(".selectoption").html('');
			$(".selectoption").prepend(htmlselect);
           
		  $(".select_jumpage").html('');
		  for(i=1;i<=count;i++){
			var a=i-1;
			htmlselect = "<option did="+numbers+" value="+a+">"+i+"</option>";
			if(no==a){
				htmlselect = "<option  selected did="+numbers+" value="+a+">"+i+"</option>";
			 }
			$(".select_jumpage").append(htmlselect);
	       }
			
		    }
		},
		"html"
	)
  }
}
</script>
<script>
function  removed(){
		$("#looked").css('display','none');
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
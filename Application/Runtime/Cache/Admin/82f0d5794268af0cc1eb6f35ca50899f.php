<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>公众号列表</title>
<link href="/Public/admin/css/page.css" rel="stylesheet" type="text/css"/>
<link href="/Public/admin/css/main.css" rel="stylesheet" type="text/css"/>
<link href="/Public/admin/css/page.css" rel="stylesheet" type="text/css"/>
<link href="/Public/admin/css/webmallDialog.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Js/jquery.js"></script>
<style type="text/css">
#check,.checkall-box label {cursor:pointer;}
.checkall-box {margin-left:20px;margin-top:10px;}
.pilian{display:inline-block;cursor: pointer; background:#06c; border-radius:3px; height:20px;  text-align:center; padding:0 10px; margin-left:10px; color:#fff; line-height:20px;}
.sel{ height: 30px; width: 80px; margin-left:10px; background:#d7d7d7}
.tr_list_page{  font-size: 12px; height: 24px; background-color: #EBEBEB; border: 1px solid #FFF;}
.tr_list{font-size: 12px; height: 24px; background-color: #FFF; border: 1px solid #FFF;}
.inp{ width: 300px; height: 30px; border:1px solid #666; padding-left: 5px;}
.sub{background: #06c; padding:0 15px; height:30px; text-align: center; color: #fff; line-height: 30px; cursor: pointer; border-radius: 3px }
a.tui{ color:#f00}
.level-type {background: rgba(0, 0, 0, 0) none repeat scroll 0 0;border: 1px solid #ccc;padding: 5px;margin-right:20px }
.form{ float:left; margin-bottom: 10px }
.add_title_img {

    height: 35px;
    padding: 5px 5px;
    float: left;
    position: relative;
}
.add_title_img #title_img {
    border: 2px solid #c1c1c1;
    float: left;
    height: 30px;
    width: 50px;
}
.add_title_img #title_img img {
    height: 30px;
    width: 50px;
}
a.title_text {
    color: #999;
    float: left;
    letter-spacing: 2px;
    line-height: 35px;
    padding-left: 15px;
}
.add_file {
    height: 35px;
    left: 20px;
    opacity: 0;
    position: absolute;
    top: 15px;
    width: 50px;
}

.eventlink{
  color: #fff;
    float: left;
    font-weight: 600;
    height: 32px;
    line-height: 32px;
    margin-right: 10px;
    padding: 0 10px;
    text-align: cente; border-radius:3px; background:#09C;
  cursor:pointer
}
#face_img{
    border: 2px solid #c1c1c1;
    float: left;
    height: 30px;
    width: 50px;
}
#face_img img {
    height: 30px;
    width: 50px;
}
.checkall-box{ float:left;}
.pilian{float: left; margin-top:10px;}
.everylook{
	display:none;
	width:500px;
	height:500px;
	background:#fff;
	position:fixed;
	z-index:100;
	top:50%;
	left:50%;
	margin-left:-250px;
	margin-top:-250px;
	border:1px solid red;
	overflow:hidden;
}
.phototitle{
	width:250px;
	height:25px;
	background:#FFFF00;
	float:left;
}
.photodel{
	width:250px;
	height:25px;
	background:#FFFF00;
	float:left;
}
</style>
</head>

<body bgcolor="#F7F7F7">
	<div class="everylook" id="everylook">
		 <div class="phototitle">图片预览审核</div>
		  <div class="photodel"><img src="/Public/Cy/images/no.png" style="margin-left:235px;margin-top:4px;" onclick="removed()"></div>
		  <div id="picturelook"></div>
	</div>
	
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：公众号管理-&gt;</div>

    <div class="m_content">

        <div class="real_c">
          
            <div class="s-space"></div>
			<form action="" method="get" class="form" name="search" id="list-form">
				  <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的昵称或者微信号" />
				  <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
			</form>
			<table class="table_content">
				<form name="goodsForm" method="post" action="#">
				<tr class="tr_top" style="font-size:30px;">
					<td>话题</td>
					<td>漫画名称</td>
					<td>首章更新时间</td>
					<td>更新时间</td>
					<td>用户</td>
					<td>图片</td>
					<td>奖励/原因</td>
					<td>话数</td>
					<td>审核</td>
				</tr>
				
				<?php if(is_array($tempsent)): foreach($tempsent as $k=>$vo): ?><tr class="tr_top">
							<td><?php echo ($k); ?></td>
					        <td>
							<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i; echo ($date["title"]); endforeach; endif; else: echo "" ;endif; ?>
							</td>
							
							<td>
								<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i; echo ($date["oldtime"]); endforeach; endif; else: echo "" ;endif; ?>
							</td>
							
							<td>
								<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i; echo ($date["time"]); endforeach; endif; else: echo "" ;endif; ?>
							</td>		
							<td>
							<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>　<?php echo ($date["username"]); endforeach; endif; else: echo "" ;endif; ?>
							</td>
							<td>
							<?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?><input id="lookphoto<?php echo ($date["id"]); ?>" type="hidden" value="<?php echo ($date["path"]); ?>">
							<img src="<?php echo ($date["path"]); ?>" onclick="look(this)" sb="<?php echo ($date["id"]); ?>" height="170" width="100"><?php endforeach; endif; else: echo "" ;endif; ?>
							</td>
							<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?><td class="bonusmoney">
								<input class="totalnum" type="hidden" value="<?php echo ($date["id"]); ?>">
								<input type="text" value="10" id = "bonuses<?php echo ($date["id"]); ?>" name = "bonuses" class="bonuses" style="width:80px;height:35px;">
							</td>
							<td>
	　　　　　　　　　　　　　　　　　　　　　　　　　　<div><?php echo ($date["section"]); ?></div>
	　　　　　　　　　　　　　　　　　　　　　　　　　<p style="color:red;">注释：如果是第一话，给金额，如果不是第一话给0即可.</p>
							</td>
							<td align="center">
								<input class="hiddenedid" type="hidden" value="<?php echo ($date["id"]); ?>">
								<input class="hiddenedusername" type="hidden" value="<?php echo ($date["username"]); ?>">
								<input class="hiddenedval" type="hidden" value="<?php echo ($date["val"]); ?>">
								<input class="numbers" type="hidden" value="<?php echo ($date["numbers"]); ?>">
								<a onclick="checksure(this)" style="text-decoration:none;">确认|</a>
								<a onclick="checkno(this)" style="text-decoration:none;">否定</a>
							</td><?php endforeach; endif; else: echo "" ;endif; ?>
							</volist>
						</tr><?php endforeach; endif; ?>
				<!-- 操作按钮 -->
				<tr>
					<td colspan="9" style="padding-top:20px;">
						<!--<span class="checkall-box"><input type="checkbox" id="check" /><label for="check">全选</label> </span>-->
						<!--<span class="pilian" href="javascript:void(0)" onclick="pilian('del')">批量删除</span>-->
					</td>
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td class="page_menu" colspan="12" valign="bottom">
						<div style="padding:15px 50px 0px 0px;float:right;">
							
						</div>
					</td>
				</tr>
				</form>
			</table>
        </div>
    </div>
    <div class="b_border"></div>
</div>
<script type="text/javascript">
function checksure(obj){
	var hiddenedusername = $(obj).siblings(".hiddenedusername").val();
	var hiddenedid = $(obj).siblings(".hiddenedid").val();
	var did ='bonuses'+hiddenedid;
	var ded = '#'+did;
	var valued =  parseInt($(ded).val());
	var numbers= $(obj).siblings(".numbers").val();
	var hiddenedval = $(obj).siblings(".hiddenedval").val();
	var namevarify = /^[0-9]*$/ ;
	var checkname = namevarify.test(valued);    //匹配数字
	if(checkname==true){
		 $.post(
				'/Admin/Checkpicture/besure',
				{"hiddenedusername":hiddenedusername,"valued":valued,"hiddenedval":hiddenedval,"numbers":numbers},
				function(data){
				   //alert(data);
					if(data=="0"){
					　	alert("请先确定封面");
						window.location.href="/admin/Coverpicture/index";
					}
					if(data=="1"){
						window.location.href="/admin/Checkpicture/index";
					}
					else if(data=="2"){
						alert("操作失败,请重新操作!");
					}
				},
				   "html"
			)
	}else{
		alert("请输入有效的金额!");
	}
}
</script>

<script type="text/javascript">
function checkno(obj){
	var hiddenedusername = $(obj).siblings(".hiddenedusername").val();
	var hiddenedid = $(obj).siblings(".hiddenedid").val();
	var did ='bonuses'+hiddenedid;
	var ded = '#'+did;
	var valued = $(ded).val();
	var hiddenedval = $(obj).siblings(".hiddenedval").val();
	var numbers= $(obj).siblings(".numbers").val();
	var namevarify = /^[\u4e00-\u9fa5]{0,100}$/ ;
	var checkname = namevarify.test(valued);    //匹配中文
	
     if(checkname==true){
		 $.post(
				'/Admin/Checkpicture/nosure',
				{"hiddenedusername":hiddenedusername,"valued":valued,"hiddenedval":hiddenedval,"numbers":numbers},
				function(data){
					//alert(data);
					if(data=="1"){
						window.location.href="/admin/Checkpicture/index";
					}
					else if(data=="2"){
						alert("操作失败,请重新操作!");
					}
				},
				   "html"
			)
      }else{
		alert("请输入中文原因!");
	  }
}
</script>
<script type="text/javascript">
function look(obj){
	$("#everylook").css('display','block');
	var　lookphoto=$(obj).siblings(".lookphoto").val();
	var id = $(obj).attr("sb");
    var did ='lookphoto'+id;
	var ded = '#'+did;
	var srced = $(ded).val();
	 var html = '<div style="width:500px;height:475px;overflow:scroll;"><img src="'+srced+'" style="width:485px;height:auto;margin-top:25px;"/><div>';
	 $('#picturelook').prepend(html);
	//alert(srced);
}
</script>
<script type="text/javascript">
 function removed(){
    $("#everylook").css('display','none');
}
</script>
</body>
</html>
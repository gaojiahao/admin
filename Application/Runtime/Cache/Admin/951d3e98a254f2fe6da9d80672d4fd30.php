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
			<table class="table_content">
				<form name="goodsForm" method="post" action="#">
				<tr>
					 <p>总访问量：<?php echo ($countone); ?>人</p>
					<p>今日访问量：<?php echo ($count); ?>人 </p>
				</tr>
				<tr class="tr_top" style="font-size:30px;">
					<td>用户地址</td>
					<td>用户ip</td>
					<td>用户设备</td>
					<td>时间</td>
				</tr>
				
				<?php if(is_array($data)): foreach($data as $k=>$vo): ?><tr class="tr_top">
							<td><?php echo ($vo["address"]); ?></td>
							<td><?php echo ($vo["userinformation"]); ?></td>
							<td><?php echo ($vo["userlook"]); ?></td>
							<td><?php echo ($vo["time"]); ?></td>
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
							<?php echo ($page); ?><!--加载分页信息过来-->
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
function checkno(obj){
	var hiddenedid = $(obj).siblings(".hiddenedid").val();
	var did ='bonuses'+hiddenedid;
	var ded = '#'+did;
	var valued = $(ded).val();
	
	var namevarify = /^[\u4e00-\u9fa5]{0,100}$/ ;
	var checkname = namevarify.test(valued);    //匹配中文

     if(checkname==true){
		 $.post(
				'/Admin/Coverpicture/nosure',
				{"hiddenedid":hiddenedid,"valued":valued},
				function(data){
					
					if(data=="1"){
						window.location.href="/admin/Coverpicture/index";
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
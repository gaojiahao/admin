<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>作者收入</title>
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

.re_page2{ width:auto; height:30px; padding-right:10px; padding-top:10px; text-align:center;}
.re_page2 a { text-decoration: none; border: 1px solid #FFC0CB; padding: 5px; background:#FFC0CB;margin-left:10px;width:auto;}
.re_page2 span {border: 1px solid #ccc; padding: 5px 12px; color: #853645;}

.addphoto{
width:570px;
height:520px;
border:1px solid red;
background:#fff;
position:fixed;
top:30px;
left:200px;;
display:none;
}
</style>
</head>

<body bgcolor="#F7F7F7">
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;收入与提现-&作者提现详情;</div>
    <div class="m_content">
        <div class="real_c">
			<table class="table_content">
				<h2 style="text-align:center;">作者提现详情</h2>
				<form name="goodsForm" method="post" action="#">
				<!--<tr class="tr_top">
					总金额:
				</tr>-->
				<tr class="tr_top">
					<td>作者电话</td>
					<td>姓名</td>
					<td>身份证号</td>
					<td>账户</td>
					<td>银行</td>	
					<td>分行</td>	
					<td>金额</td>
					<td>订单号</td>	
					<td>提现时间</td>
					<td>状态</td>
					<td>操作</td>
				</tr>
				<?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
					<td><?php echo ($vol["telephone"]); ?></td>
					<td><?php echo ($vol["name"]); ?></td>
					<td><?php echo ($vol["idcard"]); ?></td>
					<td><?php echo ($vol["banknumber"]); ?></td>
					<td><?php echo ($vol["bankind"]); ?></td>	
					<td><?php echo ($vol["homebank"]); ?></td>	
					<td><?php echo ($vol["money"]); ?></td>
					<td><?php echo ($vol["ordernumber"]); ?></td>	
					<td><?php echo ($vol["time"]); ?></td>
					<td>
					<?php if(($vol["status"]) == "1"): ?>提现中<?php endif; ?>
					<?php if(($vol["status"]) == "2"): ?>已支付<?php endif; ?>
					</td>
					<td onclick="paied(this)" did="<?php echo ($vol["id"]); ?>" >确认支付</td>
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
					<td>
						<div  class="re_page2">
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
</body>
<script>
function paied(obj){
var did = $(obj).attr("did");
 $.post(
	'/Admin/Money/paied',
	{"did":did},
	function(data){
		if(data=="1"){
			window.location.reload();
		}
		if(data=="2"){
			alert("支付失败,请重新确认,谢谢");
		    window.location.reload();
		}
		if(data=="3"){
			alert("已经支付了,不必再确认,谢谢!");
		   window.location.reload();
		}
	},
	   "html"
)
}
</script>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>头部公告</title>
	<link href="/Public/Admin/Common/Css/page.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/Common/Css/main.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/Common/Css/webmallDialog.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/Public/Admin/Common/Js/jquery-2.2.3.js"></script>

</head>

<body bgcolor="#F7F7F7">
<div class="content">

	<div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：公司动态-&gt头部公告:</div>

	<div class="m_content">
		<div class="real_c">
			<table class="table_content">
				<!--<form name="goodsForm" method="post" action="#">-->
					<tr class="tr_top">
						<th>信息</th>
						<th>状态</th>
						<th>添加链接</th>
						<th>操作</th>
					</tr>

					<!--<foreach name="data" item="vol">-->
					<tr class="tr_list">
						<td>次元播作者福利来啦~</td>
						<td>
							<div class="netState">
								<span class="activeState">在线</span>
								<span>离线</span>
							</div>
						</td>
						<td>
							<div class="addLink">
								<input type="text" id="linkUrl">
							</div>
						</td>
						<td align="center">
							<a id="editalText" class="editalText" href="javascript:;" onclick="editalText()" style="text-decoration:none;">编辑内容</a>
							<a class="editalText">|</a>
							<a class="editalText" href="javascript:;" onclick="checkno(this)"  style="text-decoration:none;">保存并上线</a>
						</td>
					</tr>
					
					<!-- 操作按钮 -->
					<tr>
						<td style="padding-top:20px;">
						</td>
					</tr>

			</table>
		</div>
	</div>
	<div class="b_border"></div>
	<div class="addHeadNotice">
		<div class="publicNotice" onclick="publicNotice()">
			添加头部公告
		</div>
	</div>
</div>

<!--添加头部公告弹框-->
<div class="noticePop" style="display: none"></div>      <!--背景层-->
	<div class="import" style="display: none">			<!--pop内容-->
		<div class="headTitle">
			添加头部公告
			<i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
		</div>
		<div class="real_c">

			<form name="article_add" method="post" action="">
				<table border="0" cellpadding="0" cellspacing="0" id="add_table" width="100%">
					<tr>
						<td class="left_td">动态标题：</td>
						<td class="right_td"><input type="text" name="title" class="input" value="" style="min-width:870px;width: 100%;"/></td>
					</tr>

					<tr style=" clear:both">
						<td class="left_td">动态内容：</td>
						<td class="right_td">
							<!-- 加载编辑器的容器 -->
							<script style="z-index: 1;" name="content" id="content" type="text/plain"></script>
						</td>
					</tr>

					<!-- 操作按钮 -->
					<tr>
						<td colspan="4" rowspan="6" valign="bottom" align="center">
							<div class="formHandleBox">
								<input type="button" id="openrator" name="act" value="添加数据"/>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>

<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/Public/Admin/Common/ueditor.config.js"></script>
<script src="/Public/Admin/Common/_examples/editor_api.js"></script>
<script src="/Public/Admin/Common/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('content');
    UE.getEditor('content', {
        allowDivTransToP: false
    })
</script>
</body>

<!--在线与离线状态切换-->
<script>
	$(".netState>span").each(function () {
		$(this).click(function () {
			$(this).addClass("activeState").siblings().removeClass("activeState");
        })
    })
</script>

<!--点击编辑内容弹框||关闭弹框-->
<script>
    function editalText() {
		$(".noticePop,.import").show();
    };
//   点击添加头部公告按钮
    function publicNotice() {
        $(".noticePop,.import").show();
    };
//    关闭弹框
	$(".close-button").click(function () {
        $(".noticePop,.import").hide();
    })
</script>
</html>
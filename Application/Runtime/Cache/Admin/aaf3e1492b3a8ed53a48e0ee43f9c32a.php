<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>次元播后台管理</title>
<link href="/Public/Admin/Common/Css/page.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="/Public/Admin/Common/Js/window.js"></script>
</head>
<body bgcolor="#F5F5F5">
<div class="left_menu">
	<div class="menu_top">
		<div class="m_t_left">Welcome</div>
    	<a href="<?php echo U('Login/loginout');?>" target="_parent" class="e seftExit" onclick="return window.confirm('你真的要退出管理吗？');">安全退出</a>
    </div>
    
	<div class="navMenu">
		<h3 onclick="switchMenu(this);">动态</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Headnotice/index');?>">头部公告</a></li>
			<li><a target="weilian" href="<?php echo U('Activitynotice/index');?>">活动公告</a></li>
			<li><a target="weilian" href="<?php echo U('Lunboimg/index');?>">滚屏图推</a></li>
			<li><a target="weilian" href="<?php echo U('Userdevice/index');?>">用户建议</a></li>
			<li><a target="weilian" href="<?php echo U('Godactivite/index');?>">大神动态</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">新增作品审核 <span class="newNums">2</span> </h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Newworkscheck/newcreasework');?>">新增漫画（1）</a></li>
			<li><a target="weilian" href="<?php echo U('Newworkscheck/newcreasenovel');?>">新增小说（1）</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">内容审核  <span class="newNums">2</span> </h3>
		<ul style="display:none;">
            <li><a target="weilian" href="<?php echo U('Workscheck/Checkcomic');?>">漫画审核</a></li>
            <li><a target="weilian" href="<?php echo U('Workscheck/Checknovel');?>">小说审核</a></li>
		</ul>	
		<h3 onclick="switchMenu(this);">作品信息</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Works/comicwork');?>">漫画作品</a></li>
			<li><a target="weilian" href="<?php echo U('Works/novelwork');?>">小说作品</a></li>
			<li><a target="weilian" href="<?php echo U('Works/worknumber');?>">作品数量</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">首页推荐</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Homerecom/homebanner');?>">Banner</a></li>
			<li><a target="weilian" href="<?php echo U('Homerecom/hometoweekdevice');?>">本周强推</a></li>
			<li><a target="weilian" href="<?php echo U('Homerecom/homehotwork');?>">热门作品</a></li>
			<li><a target="weilian" href="<?php echo U('Homerecom/homebestworkadvice');?>">精品推荐</a></li>
			<li><a target="weilian" href="<?php echo U('Homerecom/homeadvicingcomic');?>">正在推荐</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">漫画推荐</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Cartoonrecom/cmcbanner');?>">Bannar</a></li>
			<li><a target="weilian" href="<?php echo U('Cartoonrecom/comiceditordevice');?>">主编力荐</a></li>
			<li><a target="weilian" href="<?php echo U('Cartoonrecom/seasonrecommend');?>">强档推荐</a></li>
			<li><a target="weilian" href="<?php echo U('Cartoonrecom/wealfactivity');?>">活动福利推荐位</a></li>
			<li><a target="weilian" href="<?php echo U('Cartoonrecom/longpicture');?>">长幅推荐位</a></li>
			<li><a target="weilian" href="<?php echo U('Cartoonrecom/comicactivitywealf');?>">活动福利</a></li>
			<li><a target="weilian" href="<?php echo U('Cartoonrecom/comiclongactivity');?>">长幅活动</a></li>
			<li><a target="weilian" href="<?php echo U('Cartoonrecom/cmcbannerT');?>">正在推荐</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">小说推荐</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Novelrecom/novelbanner');?>">Bannar</a></li>
			<li><a target="weilian" href="<?php echo U('Novelrecom/novelcartoonrcm');?>">漫改推荐</a></li>
			<li><a target="weilian" href="<?php echo U('Novelrecom/noveleventrcm');?>">大事件推荐位</a></li>
			<li><a target="weilian" href="<?php echo U('Novelrecom/novelbest');?>">精品小说</a></li>
			<li><a target="weilian" href="<?php echo U('Novelrecom/novelhotbookrcm');?>">热书推荐</a></li>
			<li><a target="weilian" href="<?php echo U('Novelrecom/novelnewbookrcm');?>">新书推荐</a></li>
			<li><a target="weilian" href="<?php echo U('Novelrecom/novellongpicrcm');?>">长幅推荐位</a></li>
			<li><a target="weilian" href="<?php echo U('Novelrecom/noveleventactrcm');?>">大事件活动</a></li>
			<li><a target="weilian" href="<?php echo U('Novelrecom/novellongact');?>">长幅活动</a></li>
			<li><a target="weilian" href="<?php echo U('Novelrecom/novelbannerT');?>">正在推荐</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">推荐位申请</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Recommended/recommendcomic');?>">漫画（1）</a></li>
			<li><a target="weilian" href="<?php echo U('Recommended/recommendnovel');?>">小说（1）</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">签约申请</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Signapply/signapplycomic');?>">漫画（2）</a></li>
			<li><a target="weilian" href="<?php echo U('Signapply/signapplynovel');?>">小说（1）</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">完结申请</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Endapply/endapplycomic');?>">漫画（2）</a></li>
			<li><a target="weilian" href="<?php echo U('Endapply/endapplynovel');?>">小说（1）</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">福利申请</h3>
		<ul style="display:none;">

			<li><a target="weilian" href="<?php echo U('Wealfyapply/wealfyapplycomic');?>">漫画（2）</a></li>
			<li><a target="weilian" href="<?php echo U('Wealfyapply/wealfyapplynovel');?>">小说（1）</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">提现申请</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Withdrawalapply/withdrawalapply');?>">提现详情</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">认证申请</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Certificationapply/certificationapply');?>">认证详情</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">排行榜</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Rank/rankcomic');?>">漫画</a></li>
			<li><a target="weilian" href="<?php echo U('Rank/ranknovel');?>">小说</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">APP操作</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('AppSetting/appoperatebanner');?>">Banner</a></li>
			<li><a target="weilian" href="<?php echo U('AppSetting/appoperaterecommend');?>">强烈推荐</a></li>
			<li><a target="weilian" href="<?php echo U('AppSetting/appoperatehot');?>">热门连载</a></li>
			<li><a target="weilian" href="<?php echo U('AppSetting/appactivitybanrecom');?>">活动banner推荐位</a></li>
			<li><a target="weilian" href="<?php echo U('AppSetting/appactbanner');?>">活动Banner</a></li>
			<li><a target="weilian" href="<?php echo U('AppSetting/appadvicingcomic');?>">正在推荐</a></li>
			<li><a target="weilian" href="<?php echo U('AppSetting/appsocialbaner');?>">社区banner</a></li>
			<li><a target="weilian" href="<?php echo U('AppSetting/appsystemnotice');?>">系统通知</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">用户数据</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Userdata/userdata');?>">用户数据</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">作者数据</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Authordata/authordata');?>">作者数据</a></li>
		</ul>
		<h3 onclick="switchMenu(this);">管理员窗口</h3>
		<ul style="display:none;">
			<li><a target="weilian" href="<?php echo U('Manager/manager');?>">管理员注册</a></li>
		</ul>
	</div>
</div>
</body>
</html>
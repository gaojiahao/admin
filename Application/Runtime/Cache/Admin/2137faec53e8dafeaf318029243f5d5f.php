<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/Public/Book/Createnovel/Mynovel/NovelWorkManager/Css/novwokmag.css">
        <script src="/Public/Js/jquery-1.7.1.min.js" type="text/javascript"></script>
<title>小说预览</title>
<style>
.re_page2{ width:auto; height:30px; padding-right:10px; padding-top:10px; text-align:center;}
.re_page2 a { text-decoration: none; border: 1px solid #FFC0CB; padding: 5px; background:#FFC0CB;margin-left:10px;}
.re_page2 span { border: 1px solid #ccc; padding: 5px 12px; color: #853645;}
img{
	width:100%;
	height:730px;
	}
.addid{
margin-left:50%;margin-top:30px;text-align:center;height:30px;background:#FFA500;width:60px;border-radius:5px;line-height:30px;
}
.fiw{
width:800px;
height:auto;
position:fixed;
top:200px;
left:50%;
margin-left:-400px;
padding:28px;
background:#E5E5E5;
}
</style>
</head>
<body >
<div class="fiw" style="">
	  <div class="work_type clearfix">
			<span class="sign-text theme fl" style="text-align:center;width:100%;"><h2><?php echo ($title); ?></h2></span>
			<span class="work_type_item fl" style="margin-top:30px;">
				<ul class="w_choose_type" id="choosetype">
					<li style="list-style-type:none;">
						<span>精选</span>
						<span>签约</span>
						<span>授权</span>
						<span>热门</span>
						<span>限免</span>
						<span>神作</span>
						<span>VIP</span>
						<span>合作</span>
					</li>
				</ul>
			</span>
			<div class="addid">
				<a onclick="added(this)" did="<?php echo ($val); ?>" style="">添加</a>
			</div>
     </div>
</div>
<script>
function added(obj){
	var did = $(obj).attr('did');
	var choosetype = $("#choosetype").find(".w_choose_cur").text();//类型
	$.post(
		'/Admin/Labered/added',
		{"did":did,"choosetype":choosetype},
		function(data){
			//alert(data);
			if(data=="1"){
			  alert("添加成功!");
			   window.history.go(-1);
			}else{
				alert("请更改数据!");
			}
		},
		   "html"
	)
}
</script>
<script>
    $(function () {
        var texval = $(".w-tips").html();
        var i = 0;
        $(".w_choose_type li").each(function (i) {
            $(this).find("span").each(function (j) {
				
				
                $(this).click(function () {
					i++;
					if( i %2 == 1){
							$(this).addClass("w_choose_cur");
                   // .siblings().removeClass("w_choose_cur").parent().siblings().find('span').removeClass("w_choose_cur");
//                    console.log($(".w_choose_type li").eq(i).find('span').eq(j).html());
                            texval = $(".w-tips").html($(".w_choose_type li").eq(i).find('span').eq(j).html());
						}else{
						 $(this).removeClass("w_choose_cur");
					}
                })
			
            })
        })
    })
</script>
</body>
</html>
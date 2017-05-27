<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>漫画上传步骤</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/Createcomic/CreateComicStep/Css/comicstep.css">
    <link rel="stylesheet" href="/Public/Book/Createcomic/Uploadchapter/Css/News.css">
    <link rel="stylesheet" href="/Public/Book/Mainzoneleft/Css/mainzone.css">
    <link rel="stylesheet" href="/Public/Book/Createcomic/CreateComicStep/Css/zyUpload.css">
    <link rel="stylesheet" type="text/css" href="/WebUploader/css/webuploader.css">
	<link rel="stylesheet" type="text/css" href="/WebUploader/css/style.css">	
	<link rel="stylesheet" href="/Public/Book/Createcomic/CreateComicStep/Css/move.css">
	<link rel="stylesheet" href="/Public/Book/Createcomic/Uploadchapter/jedate/skin/jedate.css">
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/creatorzone.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/maincenter.js"></script>
	<script src="/Public/Js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/Public/Js/jquery.SuperSlide.2.1.1.js"></script>
	<script src="/Public/Book/Createcomic/CreateComicStep/Js/jquery-ui.min.js"></script>  
	
	<script src="/Public/demo/js/jquery.Jcrop.js" type="text/javascript"></script>
	<link rel="stylesheet" href="/Public/demo/css/jquery.Jcrop.css" type="text/css" />

	<script language="javascript" src="/Public/Js/Ajax.class.js"></script>
	<script language="javascript" src="/Public/Js/XHRUploader.class.js"></script>
	<script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<style>
.demo{min-width:360px;margin:30px auto;padding:10px 20px}
.demo h3{line-height:40px; font-weight: bold;}
.file-item{float: left; position: relative; width: 110px;height: 110px; margin: 0 20px 20px 0; padding: 4px;}
.file-item .info{overflow: hidden;}
.uploader-list{width: 100%; overflow: hidden;}
.jq22 { width: 800px; margin: 0 auto; font-family: arial,SimSun; font-size: 0;}
.upload_append_list{
width: 118px;
height: 188px;
maigin: 20px 26px 24px 0;
float: left;
color: 333;
overflow: hidden;
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
                                <a href="/Book/Face/index" target="_blank">
                                    <i></i>
                                    我的作品
                                </a>
                            </span>
                    </li>
                    <li class="item-2 expand">
                            <span>
                                <a href="/Book/CreativeNotice/index" target="_blank">
                                    <i></i>
                                    主创通知
                                    <sup class="msgNum"><?php echo ($messagenumber); ?></sup>
                                </a>
                            </span>
                    </li>
                    <li class="item-3 expand">
                            <span>
                                <a href="/Book/ExtractionYield/index" target="_blank">
                                    <i></i>
                                    提取收益
                                </a>
                            </span>
                    </li>
                    <li class="item-4 expand">
                            <span>
                                <a href="/Book/FieldEntry/index" target="_blank">
                                    <i></i>
                                   领域入口
                                </a>
                            </span>
                    </li>
                    <li class="item-5 expand">
                            <span>
                                <a href="/Book/ProposeApply/index" target="_blank">
                                    <i></i>
                                    推荐位申请
                                </a>
                            </span>
                    </li>
                    <li class="item-6 expand">
                            <span>
                                <a href="/Book/SignApplication/index" target="_blank">
                                    <i></i>
                                    签约申请
                                </a>
                            </span>
                    </li>
                </ul>
            </div>
            <div class="creator-right fr p-relative">
				<div class="work-head">
					<span></span>
					<span>上传章节</span>
				</div>

                <div class="comic-step2"  style="display:block;">
					<script type="text/javascript" src="/WebUploader/js/webuploader.js"></script>
                    <div class="create-item-step ">
                        <div class="step2-message info-message">
                            <form method="post" action="/Book/Uploadchapter/updated?sub=<?php echo ($sub); ?>&&val=<?php echo ($val); ?>" name="myform1" id="myform1">
                                <div class="comic-name">
                                    <label>
                                        <span class="text-left">漫画名称 <i>*</i></span>
                                        <input class="comic-input" type="text" id="titled" value="<?php echo ($Formcreatedata); ?>" readonly>
                                    </label>
                                </div>
                                <div class="comic-name">
                                    <label>
                                        <span class="text-left">章节名称 <i>*</i></span>
                                        <input class="comic-input" type="text" id="passagetitle" name="passagetitle">
                                    </label>
                                    <span class="comic-tips">例如：第XX话 或 第XX话 某某某</span>
                                </div>
                            <div class="upload-images p-relative">
                                <div class="upload-content clearfix">
                                    <div class="upload-left fl">上传章节内容</div>
                                    <div class="upload-right fr">
                                            <span class="allin">
                                                <label><input type="checkbox" class="allcheck" id="allCheck" onclick = "checkAll(this)" value="">全选</label>
                                           
                                            </span>
                                        <span onclick="deleted()"><a>删除</a></span>
                                        <span id="preView" class="pre-look preLook1 anbtn" onclick="look()">预览</span>
                                    </div>
                                </div>
						<!--以下是图片上传-->                 
								<div class="container">
									<div class="row main">
										<div class="demo">
											<div id="uploadimg">
												<div id="imgPicker">选择图片</div>
												<div id="fileList" class="uploader-list">
												<div class="jq22">
													   <ul class="upsection_con_li ">
														   
													   </ul>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>  
                            </div>
                            <p class="pic-claim more-pic">点击按钮可批量上传~支持jpg/gif/png格式的图片，单张宽度800像素，大小不超过1M</p >
                            <!--上传横版封面图-->
							<div class="chapter-face">
								<p>上传横版封面图</p >
								<div class="logoFace clearfix">
									<div class="logoPicture fl" id="logoPicture">
										<img src="/Public/Book/Createcomic/Uploadchapter/images/grey-logo.png" alt="">
									</div>
									<div class="img_mariter fl">
										<p>支持 JPG,PNG 格式，图片大小不超过 2M</p >
										<p>横封面尺寸：640px*360px</p >
										<div class="uploadFaceBtn">
											上传封面
										</div>
									</div>
									<div  id="landscape">
										
									</div>
								</div>
							</div>
                            
							<div class="n_state">
									<span>状态：</span>
										<span>
											<input type="radio" name="times" checked>
											立即发布
										</span>
										<span>
											<input type="radio" name="times">
											定时发布
											<input type="text" id="restore" name="timepublish" class="restore-icon">
										</span>
							</div>
                            <div class="step-btn2 l-confirm">
                                <button type="button" id="confirm-next2" class="confirm-next2 upload_btn" onclick = "submited()">确定并下一步</button>
                                <a class="last-step step2-last" href="/Book/Createcomic/comicstep"  target="_blank">返回上一步</a>
                            </div>
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
    <!--预览框1-->
 	<div class="picScroll-left">
		<div class="hd">
			<span class="pageState"></span>
			 <span style="margin-left:500px;position:absolute;line-height:33px;" onclick="removed()"><img src="/Public/Cy/images/no.png" /></span>
		</div>
			<div class="bd">
				<ul class="picList">
				</ul>
			</div>
			<a class="next" style="font-size:12px;position:absolute;margin-left:300px;height:16px;background:#FFA500;border-radius:5px;">下一页</a>
			<a class="prev" style="font-size:12px;margin-left:200px;height:22px;background:#FFA500;border-radius:5px;">上一页</a>
	</div>
	
<!--上传横版封面-->
<div class="upload-all-bg">
    <div class="upload-pic-content">
        <div class="close-btn"><img src="/Public/Book/Createcomic/Uploadchapter/images/closeicon.png" alt=""></div>
        <div class="pic-txt">
            <i class="txte-l">调整区</i>
            <i class="txte-r">横封面尺寸：640px*360px</i>
        </div>
        <div class="pictur-zone clearfix">
            <div class="pic-l"  id="pic-l" style="overflow-y:auto;"></div>
            <div class="pic-r">
                <div class="small-pic"  id="phototwo"  style="overflow:hidden;"></div>
                <p>(请注意头像预览是否清晰)</p >
            </div>
        </div>
		<form action="" method="post" onsubmit="return checkCoords();">
		<div id="formphoto"></div>
		<input type="hidden" id="x" name="x" />
		<input type="hidden" id="y" name="y" />
		<input type="hidden" id="w" name="w" />
		<input type="hidden" id="h" name="h" />
		</form>
		
        <div class="bot-btn">
                    <span class="p-relative">
                        <label>选择本地图片</label>
                        <input class="loacl-file p-absolute" id="sortPicture" type="file">
                    </span>
            <span class="baocun"  onclick="confirmOk()">保存</span>
            <span class="del">取消</span>
        </div>
    </div>
</div>

</div>
<script src="/Public/Book/Createcomic/Uploadchapter/jedate/jquery.jedate.js"></script>
</body>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa630f96b6a9dd549675d26373853f7f1' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var uploader = WebUploader.create({
    auto: true,
    swf: '/WebUploader/js/Uploader.swf',
    server: '/Book/Uploadchapter/uploads?val=<?php echo ($val); ?>&&sub=<?php echo ($sub); ?>',
    pick: '#imgPicker',
    //fileSingleSizeLimit: 2*1024*1024,
	chunked: true, //是否要分片处理大文件上传
	chunkSize:2*1024*1024 ,
    accept: {
        title: 'Images',
        extensions: 'jpg,jpeg,png',
        mimeTypes: 'image/jpg,image/jpeg,image/png,'
    },
   // method:'POST',  
});

uploader.option( 'compress', {

    width:800,
    height:17650,
    allowMagnify: false,
    compressSize: 0

});
uploader.on( 'uploadSuccess', function( file,response) {
	//alert(response.photopath);
	var html="";
	html += "<li  class='upload_append_list' id= "+response.photoid+">";
	html += "<a  href='#' class='imgBox'>";
	html += "<img  class='upload_image'  src="+ response.photopath +" style='width:118px;height:160px;' />";
	html += "</a>";
	html += "<p class='comic_name' imgsrc=''>";
	html +="<input type='hidden' id='picturegraph' name='photoval' value="+response.val+">";
	html +="<input type='hidden' id='picturephotopath' name='pathphoto[]' value="+ response.photopath +">";
	html +="<input type='hidden' id='picturephotoid' name='pathphoto[]' value="+response.photoid+">";
	html += "<input class='imgselect'  type='checkbox' name='imgselect' value="+response.photoid+">"+response.oldName+"";
	html += "</p>";
	html += "</li>";
	$(".upsection_con_li").append(html);
	var htmlone ="";
    htmlone += "	<li id="+'b'+response.photoid+"><div class='pic' id="+'a'+response.photoid+"><a><img src="+ response.photopath +" /></a></div></li>";
	$(".picList").append(htmlone);
	jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:false,vis:1});
});

uploader.on('uploadError', function (file) {
     alert("上传失败!");
  });
</script>
<script>
$( ".upsection_con_li" ).sortable({
	placeholder: "ui-state-highlight" ,
	cursor: "move",
	items :"li",
	opacity: 0.6,
	revert: true
});
</script>
<script>
   function checkAll(obj) {
        $(".imgselect").prop('checked',$(obj).prop('checked'))
    }
</script>
<!--日历-->
<script>
    $('#restore').jeDate({
        minDate:$.nowDate(0),
        maxDate:'2019-06-16 23:59:59',
        startMin:$.nowDate(-3),
        startMax:'2019-06-16 23:59:59',
        festival: true,
        format:'YYYY-MM-DD hh:mm'
    });
</script>
<script>
function deleted(){	
	var chk_value =[];
	$("input[name='imgselect']:checked").each(function(){
		chk_value.push($(this).val());
	});
	var did = chk_value;
	if(did==""){
		alert("请选择图片,之后在操作!");
	}else{
    $.post(
			'/Book/Createcomic/removed',
			{"did":did},
			function(data){
				if(data=="1"){
					var lengthed = did.length;
					for(i=0;i<lengthed;i++){
						var add = did[i];
						var ded = '#'+add;
						$(ded).remove();
						var  lookid='b'+add;
						var looked = '#'+lookid;
						$(looked).remove();	
						jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:false,vis:1});
					}
				}else{
					alert("删除失败请重新操作!");
				}
		    },
			   "html"
		)
	}
}
</script>
<!--横封面上传-->
<script>
        $(".uploadFaceBtn").click(function () {
            $(".upload-all-bg").css("display","block");
        });
        $(".upload-all-bg .close-btn,.upload-all-bg .del").click(function () {
			$('#pic-l').html("");
			$('#phototwo').html("");
			$("#x").val("");
            $(".upload-all-bg").css("display","none");
        });
</script>
<script>
function submited(){
	var passagetitle = $("#passagetitle").val();
	var picturephotopath = $("#picturephotopath").val();
	var head_photos =  $("#head_photos").val();
	if(passagetitle==""){
		alert("请填写章节名称");
     }else{
		 if(picturephotopath==undefined){
			alert("请上传图片后再提交");
		 }else{
			  if(head_photos==undefined){
			  //document.getElementById("myform1").submit();
				alert("请上传章节图片后再提交");
		     }else{
				 $("#confirm-next2").attr("disabled","disabled").html("正在上传中......").css({
						"background":"#f5f5f5",
						"cursor":"progress"	,			
						"color":"#1A1A1A"
					 });				
				 document.getElementById("myform1").submit();
			}
	     }
	}
}
 </script>
 <script>
 function look(){
	 var dided  = $(".pic").attr("id");
	  if(dided==undefined){
			alert("请上传图片后再预览!");
	  }else{
	       $(".picScroll-left").css('visibility','visible');
      }
}
 function removed(){
	$(".picScroll-left").css('visibility','hidden');
}
</script>

<!--以下内容是横向截图-->
<script type="text/javascript">
   function fun(){
		xsize = "640";   //控制截图区域的大小比例
		ysize = "360";
		$("#target").Jcrop({
			onChange:showPreview,
			onSelect:showPreview,
			aspectRatio: xsize / ysize,
	        setSelect: [ 0, 0, 325, 416],	       
	        boxWidth:2000,
	        boxHeight:100000
		});	
		//简单的事件处理程序，响应自onChange,onSelect事件，按照上面的Jcrop调用
		function showPreview(coords){
			if(parseInt(coords.w) > 0){
				//计算预览区域图片缩放的比例，通过计算显示区域的宽度(与高度)与剪裁的宽度(与高度)之比得到
				var rx = $("#phototwo").width() / coords.w; 
				var ry = $("#phototwo").height() / coords.h;
				//通过比例值控制图片的样式与显示
				$("#preview2").css({
					width:Math.round(rx * $("#target").width()) + "px",	//预览图片宽度为计算比例值与原图片宽度的乘积
					height:Math.round(rx * $("#target").height()) + "px",	//预览图片高度为计算比例值与原图片高度的乘积
					marginLeft:"-" + Math.round(rx * coords.x) + "px",
					marginTop:"-" + Math.round(ry * coords.y) + "px"
				});
				$('#x').val(coords.x);
		        $('#y').val(coords.y);
		        $('#w').val(coords.w);
		        $('#h').val(coords.h);
			}
		}
}
XHRUploader.init({
		handlerUrl:'/Admin/Novel/Upload',
		input: '_imgs[]'
	}).uploadFile('sortPicture', {
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
				$('#pic-l').html("");
				$('#phototwo').html("");
				var html = '<img id="target"  src="'+ret.data+'">';
				$("#pic-l").prepend(html);
				var htmltwo = '<img  style="float:left;" id="preview2" src="'+ret.data+'">';
				$('#phototwo').prepend(htmltwo);
				var htmlthree = '<input type="hidden" id="z" value="'+ret.data+'"  />';
			     $("#formphoto").prepend(htmlthree); 
			     $(fun());
			}else{
				 alert("图片大小不符合请选择核实的大小上传!");
				}
		}
	}); 
  </script>
<script type="text/javascript">
		function confirmOk(){
			var x = $("#x").val();
			var y = $("#y").val();
			var w = $("#w").val();
			var h = $("#h").val();
			var z = $("#z").val();
			   if(x!=""){
					 $.post(
					'/Book/Createnovel/cropsubmit',
					{"x":x,"y":y,"w":w,"h":h,"z":z},
					function(data){
						//alert(data);
						if(data !=""){
							$("#logoPicture").html("");  
							$("#landscape").html(""); 
							var imagepath = data;  
							var html = '<div><img src="'+data+'" style="width:258px;height:146px;"/><div>';
							var htmlone ='<input type="hidden" name="head_photos" id="head_photos" value="'+data+'">';
								$("#logoPicture").prepend(html);  
								$("#landscape").prepend(htmlone); 
								$('.upload-all-bg').css("display","none");
								$('#pic-l').html("");
								$('#phototwo').html("");
							    $("#x").val("");
						}else{
							alert("截图失败,请换一张试试!");
						}
					},
					   "html"
				)
			}else{
			alert("请上传图片!");
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
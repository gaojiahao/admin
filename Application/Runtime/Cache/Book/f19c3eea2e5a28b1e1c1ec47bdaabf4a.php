<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>动漫-次元播动漫-新建漫画</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/Createcomic/CreateComicStep/Css/comicstep.css">
    <link rel="stylesheet" href="/Public/Book/Mainzoneleft/Css/mainzone.css">
    <link rel="stylesheet" href="/Public/Book/Createcomic/CreateComicStep/Css/zyUpload.css">
    
    <link rel="stylesheet" href="/Public/Book/Createcomic/Uploadchapter/jedate/skin/jedate.css">
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/creatorzone.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/maincenter.js"></script>
   
	<script src="/Public/Js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="/Public/demo/js/jquery.Jcrop.js" type="text/javascript"></script>
	<link rel="stylesheet" href="/Public/demo/css/jquery.Jcrop.css" type="text/css" />
	
	<script language="javascript" src="/Public/Js/Ajax.class.js"></script>
	<script language="javascript" src="/Public/Js/XHRUploader.class.js"></script>
	  
	<link rel="stylesheet" type="text/css" href="/WebUploader/css/webuploader.css">
	<link rel="stylesheet" type="text/css" href="/WebUploader/css/style.css">
	
	<link rel="stylesheet" href="/Public/Book/Createcomic/CreateComicStep/Css/move.css">
	</script><script type="text/javascript" src="/Public/Js/jquery.SuperSlide.2.1.1.js"></script>
	<script type="text/javascript" src="/WebUploader/js/webuploader.js"></script>
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
.webuploader-container>div:nth-of-type(2){
		width: 78px !important;
		height: 30px !important;
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
                <!--第一步-->
                  <div class="work-head">
                        <span></span>
                        <span>我的作品</span>
                    </div>
                    
                    <div class="create-item-step">
						
                       <div class="pregress-steps p-relative clearfix">
							
						<span class="step-bar-ft">
                            <div class="step-cicle-ft current-step">1</div>
                        </span>
                         <span class="pe-gress-bar p-row"></span>
                         <span class="step-bar-ft step-two" >
							 <div  id="secondbackground" style="overfollow:hidden;z-index:100;background:#f1bf55;width:0px;height:0px;border-radius:100%;position:absolute;margin-left:16px;margin-top:16px;text-align:center;line-height:40px;color:#fff;font-size:0px;">2</div>
                            <div class="step-cicle-ft"  id="secondfont">2</div>
                        </span>
                        <span class="pe-gress-bar p-row"></span>
                         <span class="step-bar-ft step-three not-first">
							 <div  id="threebackground" style="overfollow:hidden;z-index:100;background:#f1bf55;width:0px;height:0px;border-radius:100%;position:absolute;margin-left:16px;margin-top:16px;text-align:center;line-height:40px;color:#fff;font-size:0px;">2</div>
                            <div class="step-cicle-ft" id="stepcicleft">3</div>
                        </span>
                            <!--移动进度条-->
                            <div class="move-bar" id="move-bar" style="display:block;background:#febf51;"></div>
                        </div>
                        <div class="step-text">
                            <span class="nowCur">创建漫画</span>
                            <span>上传漫画</span>
                            <span>创建成功</span>
                        </div>
                         
                <div class="comic-step1">
                        <div class="comic-info-message info-message">
                            <form action="" method="get">
                                <div class="inputNum inputText">
                                    <label>
                                        <span class="sign-text">作品名称<i>*</i></span>
                                        <input id="sv-phoneNum" type="text" onblur="phoneNum()">
                                    </label>
                                    <!--<span class="yes-or-no yes"><img src="images/yes.png" alt=""></span>-->
                                    <span class="input-title" id="removetitle">此处不可空白，请输入1-15个字</span>
                                    <p></p>
                                </div>
                                <div class="pic-author inputNum">
                                    <label>
                                        <span class="sign-text">图作者<i></i></span>
                                        <input id="pic-author" type="text"  onblur="pictureauthor()">
                                    </label>
                                    <span class="input-title" id="pictureauthor">此处不可空白，请输入1-15个字</span>

                                </div>
                                <div class="text-author inputNum">
                                    <label>
                                        <span class="sign-text">文作者<i></i></span>
                                        <input id="text-author" type="text"  onblur="character()">
                                    </label>

                                    <span class="input-title" id="character">此处不可空白，请输入1-15个字</span>
                                    <!--<p></p>-->
                                </div>
                                <div class="work-type inputNum">
                                    <label>
                                        <span class="sign-text">作品类别<i>*</i></span>
                                        <input name="comic" type="radio" value="故事漫画">故事漫画
                                        <input name="comic" type="radio" value="条漫">条漫
                                    </label>
                                </div>
                                <div class="work-theme clearfix">
                                    <span class="sign-text theme">作品题材<i>*</i></span>
                                    <div class="checkBox">
                                        <label><input type="checkbox" name="apk[]" value="搞笑">搞笑</label>
                                        <label><input type="checkbox" name="apk[]"  value="热血">热血</label>
                                        <label><input type="checkbox" name="apk[]"  value="冒险">冒险</label>
                                        <label><input type="checkbox" name="apk[]"  value="恐怖">恐怖</label>
                                        <label><input type="checkbox" name="apk[]"  value="科幻">科幻</label>
                                        <label><input type="checkbox" name="apk[]"  value="魔幻">魔幻</label>
                                        <label><input type="checkbox" name="apk[]"  value="玄幻">玄幻</label>
                                        <label><input type="checkbox" name="apk[]"  value="校园">校园</label>
                                        <label><input type="checkbox" name="apk[]"  value="悬疑">悬疑</label>
                                        <label><input type="checkbox" name="apk[]"  value="推理">推理</label>
                                        <label><input type="checkbox" name="apk[]"  value="萌系">萌系</label>
                                        <label><input type="checkbox" name="apk[]"  value="穿越">穿越</label>
                                        <label><input type="checkbox" name="apk[]"  value="后宫">后宫</label>
                                        <label><input type="checkbox" name="apk[]"  value="都市">都市</label>
                                        <label><input type="checkbox" name="apk[]"  value="恋爱">恋爱</label>

                                        <label><input type="checkbox" name="apk[]"  value="武侠">武侠</label>
                                        <label><input type="checkbox" name="apk[]"  value="格斗">格斗</label>
                                        <label><input type="checkbox" name="apk[]"  value="战争">战争</label>
                                        <label><input type="checkbox" name="apk[]"  value="历史">历史</label>
                                        <label><input type="checkbox" name="apk[]"  value="耽美">耽美</label>
                                        <label><input type="checkbox" name="apk[]"  value="同人">同人</label>
                                        <label><input type="checkbox" name="apk[]"  value="游戏">游戏</label>
                                        <label><input type="checkbox" name="apk[]"  value="励志">励志</label>
                                        <label><input type="checkbox" name="apk[]"  value="百合">百合</label>
                                        <label><input type="checkbox" name="apk[]"  value="治愈">治愈</label>
                                        <label><input type="checkbox" name="apk[]"  value="机甲">机甲</label>
                                        <label><input type="checkbox" name="apk[]"  value="纯爱">纯爱</label>
                                        <label><input type="checkbox" name="apk[]"  value="美食">美食</label>
                                        <label><input type="checkbox" name="apk[]"  value="血腥">血腥</label>
                                        <label><input type="checkbox" name="apk[]"  value="僵尸">僵尸</label>

                                        <label><input type="checkbox" name="apk[]"  value="恶搞">恶搞</label>
                                        <label><input type="checkbox" name="apk[]"  value="虐心">虐心</label>
                                        <label><input type="checkbox" name="apk[]"  value="生活">生活</label>
                                        <label><input type="checkbox" name="apk[]"  value="动作">动作</label>
                                        <label><input type="checkbox" name="apk[]"  value="惊险">惊险</label>
                                        <label><input type="checkbox" name="apk[]"  value="唯美">唯美</label>
                                        <label><input type="checkbox" name="apk[]"  value="震撼">震撼</label>
                                        <label><input type="checkbox" name="apk[]"  value="复仇">复仇</label>
                                        <label><input type="checkbox" name="apk[]"  value="侦探">侦探</label>
                                        <label><input type="checkbox" name="apk[]"  value="其他">其他</label>
                                    </div>
                                    <!--<div style="height: 1px;clear: both"></div>-->
                                </div>
                                 <div class="shuzhong inputNum juli">
                                    <label><span class="sign-text">受众<i>*</i></span></label>
                                    <label><input name="yonger" type="radio" value="少年">少年</label>
                                    <label><input name="yonger" type="radio" value="少女">少女</label>
                                </div>
                                <div class="create-progress inputNum juli">
                                    <label><span class="sign-text">创作进程<i>*</i></span></label>
                                    <label><input name="comicgress" type="radio" value="连载中">连载中</label>
                                    <label><input name="comicgress" type="radio" value="已完结">已完结</label>
                                </div>
                                <div class="updataplan">
                                    <span class="sign-text">更新计划<i>*</i></span>
                                    <label><input name="comicUpdata" type="radio" value="周一">周一</label>
                                    <label><input name="comicUpdata" type="radio" value="周二">周二</label>
                                    <label><input name="comicUpdata" type="radio" value="周三">周三</label>
                                    <label><input name="comicUpdata" type="radio" value="周四">周四</label>
                                    <label><input name="comicUpdata" type="radio" value="周五">周五</label>
                                    <label><input name="comicUpdata" type="radio" value="周六">周六</label>
                                    <label><input name="comicUpdata" type="radio" value="周日">周日</label>
                                    <label><input name="comicUpdata" type="radio" value="不定">不定</label>
                                </div>
                                 <div class="comic-title">
                                    <span class="sign-text fl">漫画标签<i>*</i></span>
                                        <span class="con-right-comic fl p-relative">
                                            <input class="col-title" id="comic-title" type="text"  aria-invalid="ture">
                                            <div class="tagsinput clearfix" id="tagsinput">
                                            </div>
                                            <div class="recommended_tag">
                                                <div class="heading">输入或选择标签</div>
                                                <ul>
                                                    <li><a href="javascript:;">原创</a></li>
                                                    <li><a href="javascript:;">热血</a></li>
                                                    <li><a href="javascript:;">猎奇</a></li>
                                                    <li><a href="javascript:;">萌</a></li>
                                                    <li><a href="javascript:;">萝莉</a></li>
                                                    <li><a href="javascript:;">纯爱</a></li>
                                                    <li><a href="javascript:;">清水</a></li>
                                                    <li><a href="javascript:;">恶搞</a></li>
                                                    <li><a href="javascript:;">搞笑</a></li>
                                                    <li><a href="javascript:;">魔幻</a></li>
                                                    <li><a href="javascript:;">生活</a></li>
                                                    <li><a href="javascript:;">动作</a></li>
                                                    <li><a href="javascript:;">科幻</a></li>
                                                    <li><a href="javascript:;">悬疑</a></li>
                                                    <li><a href="javascript:;">恐怖</a></li>
                                                    <li><a href="javascript:;">校园</a></li>
                                                    <li><a href="javascript:;">玄幻</a></li>
                                                    <li><a href="javascript:;">恋爱</a></li>
                                                    <li><a href="javascript:;">都市</a></li>
                                                    <li><a href="javascript:;">百合</a></li>
                                                    <li><a href="javascript:;">古风</a></li>
                                                    <li><a href="javascript:;">励志</a></li>
                                                    <li><a href="javascript:;">同人</a></li>
                                                    <li><a href="javascript:;">耽美</a></li>
                                                    <li><a href="javascript:;">完结</a></li>
                                                </ul>
                                                <i><img src="/Public/Book/Createnovel/CreateNovelStep/images/close.png" alt=""></i>
                                            </div>
                                        </span>
                                    <i class="input-title">请输入标签</i>
                                </div>
                                 <div class="comicintro">
                                    <label>
                                        <span class="sign-text">一句话介绍<i>*</i></span>
                                        <input id="comic-introduce" type="text" onblur="sayone()">
                                    </label>
                                    <span class="input-title" id="introduce">限23汉字、可包含英文或数字</span>
                                </div>

                                 <div class="control-group clearfix">
                                    <div class="fl workface sign-text">作品封面一<i>*</i></div>
                                        <span class="control  fl">
                                            <div class="small-vatar fl"  id="longpath">
												<img src="/Public/Book/Createcomic/CreateComicStep/images/video-vatar.png" alt="">
											  </div>
                                            <div class="choose-pic fl"  id="button_up">
                                                <p>支持JPG,PNG格式,图片大小不超过2M</p>
                                                <div class="choose-btn">选择图片</div>
                                            </div>
                                        </span>
                                </div>
                                
                                <div class="control-group clearfix">
										<div class="fl workface sign-text">封面二<i>*</i></div>
										<span class="control fl">
											
											<div id="appicture" >
											</div>
											
											<div class="face-vatar fl" id="appphoto">
												<img src="/Public/Book/Createcomic/CreateComicStep/images/video-vatar2.png" alt="">
											</div>									
											<div class="faceTwo fl p-relative">
												<p>支持JPG,PNG格式,图片大小不超过500KB</p >
												<p>最佳尺寸为750*460像素 <i>（用于移动端漫画阅读场景）</i></p >
												<div id="phoneBtn" class="choose-btn2" onclick="apppicture()">
													选择图片
													<input type="file" name="phonePicture" class="phonePicture" id="phonePicture">
												</div>
												<!--弹出提示框-->
												<div class="tipPop p-absolute" style="display: none">
													<div class="titleHead">
														<span class="tips">提示</span>
														<span class="phoneclose"><img src="/Public/Book/Createcomic/CreateComicStep/images/phoneclose.png" alt=""></span>
													</div>
													
													<div class="tipContent">
														<div class="tp_con">
															<i>
																<img src="/Public/Book/Createcomic/CreateComicStep/images/tip.png" alt="">
															</i>
														    <span id="alertid">您的图片不符合规范，图片尺寸为750*460像素</span>
														</div>
													</div>
													
												</div>
											</div>
										</span>
									</div>

                               <div class="published-state inputNum juli">
                                    <label><span class="sign-text">发表状态<i>*</i></span></label>
                                    <label><input class="shoufa" name="comic-published" type="radio" value="是">次元播首发</label>
                                    <label><input class="fei-shoufa" name="comic-published" type="radio" value="否">非次元播首发</label>
                                </div>

                                  <div class="copyright-state inputNum juli">
                                    <label><span class="sign-text">版权状态<i>*</i></span></label>
                                    <label><input name="comic-copyright" type="radio" value="是">次元播签约</label>
                                    <label><input name="comic-copyright" type="radio" value="否">非次元播签约</label>
                                </div>
                                
                                 <div class="work-description description">
                                    <label>
                                        <span class="sign-text">作品简介<i>*</i></span>
                                        <textarea id="writer-profile"  maxlength="500" onblur="textaread()"></textarea>
                                    </label>
                                    <span class="yes-or-no no">
										<div style="display:none;"id="yesno"><img src="/Public/Book/Createnovel/CreateNovelStep/images/no.png" alt="">请输入10-500个字以内</div>
									</span>
                                </div>

                                <div class="author-notice description">
                                    <label>
                                        <span class="sign-text">作者公告<i></i></span>
                                        <textarea id="author-notice" maxlength="500"></textarea>
                                    </label>
                                    <div class="protocol">
                                        <label><input type="checkbox" id="protocol" name="protocol" value="1">我已阅读并接受 <a class="deal" href="/Home/Published/add">次元播内容上传协议</a></label>
                                    </div>
                                </div>

                            </form>
                            <div id="confirm-next" class="confirm-next"  onclick="nexted()">确定并下一步</div>
                        </div>
                    </div>
                </div>
                <!--第二步-->
                <div class="comic-step2">

                    <div class="create-item-step ">
                        <div class="step2-message info-message">
                            <form method="post" action="/Book/Createcomic/updated?sub=<?php echo ($sub); ?>" name="myform1" id="myform1">
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
                            <p　 style="line-height: 24px; color: #ff0033;">＊图片大小在２Ｍ以內</p>
                            
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
                            
                            <div class="step-btn2 l-confirm">
                                <button type="button" id="confirm-next2" class="confirm-next2 upload_btn" onclick = "submited()">确定并下一步</button>
                                <a class="last-step step2-last"  onclick = "laststep()">返回上一步</a>
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
    <!--弹出框上传图片-->
    <!--弹出框上传图片-->
    <div class="all-bg">
        <div class="pic-content">
            <div class="close-btn"><img src="/Public/Book/Createnovel/CreateNovelStep/images/close.png" alt=""></div>
            <div class="pic-txt">
                <i class="txt-l">调整区</i>
                <i class="txt-r">预览225 x 300像素</i>
            </div>
            <div class="pictur-zone clearfix">
                <div class="picture-l"　 id="imageadd" style="overflow-y:auto;">
                
                </div>
                <div class="picture-r">
                    <div class="small-pic"　 id="phototwo" style="overflow:hidden;width:225px;height:300px;">
					
                    </div>
                    <p>(请注意封面预览是否清晰)</p>
                </div>
			   　<form action="" method="post" onsubmit="return checkCoords();">
					 <div id="formphoto"></div>
					<input type="hidden" id="x" name="x" />
					<input type="hidden" id="y" name="y" />
					<input type="hidden" id="w" name="w" />
					<input type="hidden" id="h" name="h" />
				</form>
				
            </div>
            <div class="bot-btn">
                        <span class="p-relative" onclick="lookphoto()">
                            <label>选择本地图片</label>
                            <input class="loacl-file p-absolute" type="file" id="sortPicture">
                        </span>
                <span  onclick="confirmOk()">保存</span>
                <span class="del">取消</span>
            </div>
        </div>
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
                <div class="small-pic"  id="photothree"  style="overflow:hidden;"></div>
                <p>(请注意头像预览是否清晰)</p >
            </div>
        </div>
       	<form action="" method="post" onsubmit="return checkCoords();">
		<div id="formphotone"></div>
		<input type="hidden" id="a" name="x" />
		<input type="hidden" id="b" name="y" />
		<input type="hidden" id="c" name="w" />
		<input type="hidden" id="d" name="h" />
		</form> 
        
        <div class="bot-btn">
                    <span class="p-relative" onclick="sectionpicture()">
                        <label>选择本地图片</label>
                        <input class="loacl-file p-absolute" id="sortPictureone" type="file">
                    </span>
            <span class="baocun" onclick="confirmoneOk()">保存</span>
            <span class="del">取消</span>
        </div>
    </div>
</div>
    
    <!--预览框1-->
 	<div class="picScroll-left">
		<div class="hd">
			<span class="pageState"></span>
			 <span style="margin-left:470px;position:absolute;" onclick="removed()"><img src="/Public/Cy/images/close.png" /></span>
		</div>
			<div class="bd">
				<ul class="picList">
				</ul>
			</div>
			<div class="pagebtn">
				<div class= "btnpage clearfix">
					<a class="prev fl">上一页</a>
					<a class="next fr">下一页</a>
				</div>
			</div>
	</div>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa630f96b6a9dd549675d26373853f7f1' type='text/javascript'%3E%3C/script%3E"));
</script>
    <!--首发授权-->
      <div class="uploadAll">
        <div class="bgall-content">
            <div class="text-tips">
                <p>如首发授权请下载以下附件（<a href="javascript:;"title="次元播福利计划.docx">次元播首发授权协议.docx</a>），并按照附件中的要求寄回给我们。</p>
                <div class="chooseBtn">
                    <span class="sf_up"> <a href="/Public/Book/Static/file/aa.rar" title="次元播福利计划.docx">下载协议</a></span>
                    <span class="sf_no">选择非首发</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!--限制复选框的个数-->
<script>
    $(function () {
        $(".checkBox input[type='checkbox']").click(function () {
            if($("input[name='apk[]']:checked").length >3){
                alert("题材最多只能选择三个");
                return false;
            }
            return true;
        })
    })
</script>

<!--打开和关闭上传图片弹框-->
<script>
    $(function () {

        $(".choose-btn").click(function () {
            $(".all-bg").css("display","block");
        });

        $(".close-btn,.del").click(function () {
            $(".all-bg").css("display","none");
        });

    })
</script>
<!--漫画标签-->
<script>
    $(function () {
        var textinput = $(".tag>span").html();
        var i=0;
//        var array=[];
        $(".recommended_tag ul li").each(function () {
            var textli = $(this).find("a").html();
            var flag = false;
            var elem = null,t;
            var arr = [];
            var rsObj = {};
            $(this).find("a").on("click",function () {
                var $li = $(".tag").length-1;
                elem=this[i];

                if($li < 5 && !flag){
                    if(!rsObj[elem] && !t){
                        $('<span class="tag"> <span class="taged"> textinput </span> <a href="javascript:;">X</a> </span>').prependTo(".tagsinput");
                        textinput = $(".tag").eq(i).find('span').html(textli);
                        arr.push(elem);
//                            console.log(arr)
                        rsObj[elem] = true;

                    }else {
                        alert("标签不能重复")
                    }

                }else{
                    flag = true;
                    alert("不超过6个标签")
                }


                $(".tagsinput .tag").each(function () {
                    $(this).find('a').click(function (e) {
                        e.stopPropagation();
                        t=$(this).parent().siblings();
                        flag = false;
                        rsObj[elem] = false;
//                            alert(index(elem))
                        $(this).parent().remove();
                    })
                })
            })
        });
    });

    $(function () {
        $(".tagsinput").click(function () {

            $(".recommended_tag").show();
        })
        $(".recommended_tag>i").click(function () {
            $(".recommended_tag").hide();
        })
    });


</script>
<!--//选择更多图片-->
<script>
    $(function () {
        $(".img-icon").hover(function () {
            $(".more-pic").hide();
            $(".hov-more-pic").show()
        },function () {
            $(".more-pic").show();
            $(".hov-more-pic").hide();
        });
    })

</script>
<!--首发授权-->
<script>
    $(".shoufa").click(function () {
        $(".uploadAll").show();
        $(".sf_up").click(function () {
            $(".uploadAll").hide();
        })
    });
    $(".sf_no").click(function () {
        $(".fei-shoufa").prop("checked","checked");
        $(".uploadAll").hide();
    })
</script>
<script type="text/javascript">
function phoneNum(){
	var svphoneNum = $("#sv-phoneNum").val();
	var countsvphoneNum = svphoneNum.length;
	if(countsvphoneNum<15){
		 $.post(
			'/Book/Createcomic/isure',
			{"svphoneNum":svphoneNum},
			function(data){
				if(data=="1"){
					$("#removetitle").css('color','#b3b3b3');
					$("#removetitle").html('此处不可空白，请输入1-15个字.');
				}
				else if(data=="2"){
					$("#removetitle").css('color','red');
				    $("#removetitle").html('此书名已经存在，请换一个试试.');
				}
		    },
			"html"
		 )
	}else{
		$("#removetitle").css('color','red');
	}
}
function pictureauthor(){
	var picauthor = $("#pic-author").val();//图作者
	var picauthordata = picauthor.length;
	if(picauthordata==0||picauthordata>15){
			$("#pictureauthor").css('color','red');
    }else{
		  $("#pictureauthor").css('color','#b3b3b3');
	}
}
function  character(){
	var textauthor = $("#text-author").val();//文作者
	var textauthordata = textauthor.length;
	if(textauthordata==0||textauthordata>15){
		$("#character").css('color','red');
    }else{
		  $("#character").css('color','#b3b3b3');
	}
}
function sayone(){
var comicintroduce = $("#comic-introduce").val();
var countcomicintroduce = comicintroduce.length;
if(countcomicintroduce>23){
	$("#introduce").css('color','red');
}else{
    $("#introduce").css('color','#b3b3b3');
}
}
function textaread(){
var writerprofile = $("#writer-profile").val();
var countwriterprofile = writerprofile.length;
if(countwriterprofile<10){
	$("#yesno").css('display','block');
}
if(countwriterprofile>10){
	$("#yesno").css('display','none');
}
if(countwriterprofile>499){
	$("#yesno").css('display','block');
}
}
function nexted(){
	var svphoneNum = $("#sv-phoneNum").val();//作品名称
	var countsvphoneNum = svphoneNum.length;
	
	var picauthor = $("#pic-author").val();//图作者
	var picauthordata = picauthor.length;
	
	var textauthor = $("#text-author").val();//文作者
	var textauthordata = textauthor.length;
		
	var choose= document.getElementsByName("comic");//类别
	for(var k=0;k<choose.length;k++){
		if(choose[k].checked){
			var type= choose[k].value;
		}
    }
    
    var theme =[];
	$("input[name='apk[]']:checked").each(function(){
		theme.push($(this).val());
	});
   　var themes= theme;//作品题材
  
	var comicintroduce = $("#comic-introduce").val();//一句话介绍
    var countcomicintroduce = comicintroduce.length;
  
	var writerprofile = $("#writer-profile").val();//作品简介
	var countwriterprofile = writerprofile.length;

	//var choosetype = $("#choosetype").find(".w_choose_cur").text();//类型
	
	var objone = document.getElementsByName("yonger");//受众
	for(var y=0;y<objone.length;y++){
	    if(objone[y].checked){
			var yonger= objone[y].value;
		}
	}
	
	var taged =  $("#tagsinput").find(".taged").text();//作品标签
     
     var gress = document.getElementsByName("comicgress");//进程
	for(var m=0;m<gress.length;m++){
		if(gress[m].checked){
			var comicgress = gress[m].value;
		}
	}
	var plan = document.getElementsByName("comicUpdata");//更新计划
	for(var y=0;y<plan.length;y++){
		if(plan[y].checked){
			var planed= plan[y].value;
		}
	}
	var obj  = document.getElementsByName("comic-published");//发表状态
	for(var k=0;k<obj.length;k++){
	    if(obj[k].checked){
			var publishstatus= obj[k].value;
		}
	}
	var objs  = document.getElementsByName("comic-copyright");//版权状态
	for(var s=0;s<objs.length;s++){
	    if(objs[s].checked){
			var copyright= objs[s].value;
		}
	}
	
	var authornotice = $("#author-notice").val();  //作者公告
	
	var chk_value =[];
	$("input[name='protocol']:checked").each(function(){
		chk_value.push($(this).val());
	});
   　var protocol = chk_value;//是否阅读协议
   　var headphoto = $("#head_photo").val();
   
  var applookphoto = $("#applookphoto").val();

if(countsvphoneNum>15 || countsvphoneNum==0){
		alert("书名限1-15字以内!");
	}else{
		    
				 if(countcomicintroduce>23 || countcomicintroduce==0){
					alert("一句话简介限23字以内!");
				 }else{
					 if(countwriterprofile<10){
						alert("作品简介请输入10-500个字!");
					}else{
						 if(protocol==''){
								 alert("请阅读相关协议");
							 }else{
								 if(comicgress==undefined){
									alert("请选择创作进程");
								 }else{
								     if(planed==undefined){
										alert("请选择更新计划");
									  }else{
											  if(type==undefined){
													alert("请选择作品类别");
												}else{
													if(themes==''){
														alert("请选择作品题材");
													}else{
														if(taged==""){
															alert("请选择作品标签.");
														}else{
															if(yonger==undefined){
																alert("请选择受众群体.");
															}else{
																if(publishstatus==undefined){
																	alert("请选择作品发表状态.");
																}else{
																	if(copyright==undefined){
																		alert("请选择版权状态.");
																	}else{
																		if(authornotice==""){
																			alert("请填写作者公告.");
																		}else{
																			if(headphoto==undefined){
																				alert("请上传封面图片.");
																			}else{
																				if(applookphoto==undefined){
																					alert("请上传封面二,谢谢!");
																				}else{
																					$.post(
																					'/Book/Createcomic/subdata?sub=<?php echo ($sub); ?>',
																					{"applookphoto":applookphoto,"svphoneNum":svphoneNum,"comicintroduce":comicintroduce,"picauthor":picauthor,"textauthor":textauthor,"type":type,"themes":themes,"comicintroduce":comicintroduce,"writerprofile":writerprofile,"yonger":yonger,"taged":taged,"comicgress":comicgress,"planed":planed,"publishstatus":publishstatus,"copyright":copyright,"authornotice":authornotice,"headphoto":headphoto},
																					function(data){
																						//alert(data);
																						if(data=="1"){
																							 $(".comic-step1").css("display","none");
																							 $(".comic-step2").css("display","block");
																							 $("#move-bar").animate({width:"340px"},1000);																		
																						}
																						else if(data=="2"){
																							alert("操作失败,请重新操作!");
																						}
																					},
																					"html"
																					)	
																				 }
																			}
																		}
																	}
																}
															}	
														}
													}
											　　}
										}
								 }
							 }
					  }
				 }
	}
}
</script>
<script type="text/javascript">
   function fun(){
		xsize = "225";   //控制截图区域的大小比例
		ysize = "300";
		$("#target").Jcrop({
			onChange:showPreview,
			onSelect:showPreview,
			aspectRatio: xsize / ysize,
	        setSelect: [ 0, 0, 325, 416],	       
	        boxWidth:200,
	        boxHeight:10000
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
function lookphoto(){
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
				$('#imageadd').html("");
				$('#phototwo').html("");
				$('#formphoto').html("");
				//alert("上传成功!");
				var html = '<img id="target"  src="'+ret.data+'">';
				$('#imageadd').prepend(html);
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
}
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
					'/Book/Createnovel/croplookphoto',
					{"x":x,"y":y,"w":w,"h":h,"z":z},
					function(data){
						//alert(data);
						if(data !=""){
							$("#longpath").html("");  
							var imagepath = data;  
							var html = '<div><img src="'+data+'" style="width:114px;height:148px;"/><div>';
							var htmlone ='<input type="hidden" name="hidden" id="head_photo" value="'+data+'">';
								$("#longpath").prepend(html);  
								$("#button_up").prepend(htmlone); 
								$('#managepicture').css("display","none");
								$(".all-bg").css("display","none");
								$('#imageadd').html("");
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
<script type="text/javascript">  
function advace(){
     if(document.getElementById("move-bar").style.width=="340px"){
		     $("#secondbackground").animate({width:"40px",height:"40px",margin:"-2px",},400);
		     $("#secondbackground").css('font-size','20px');
	  }    
	    if(document.getElementById("move-bar").style.width=="688px"){
			 $("#threebackground").animate({width:"40px",height:"40px",margin:"-2px",},200);
		     $("#threebackground").css('font-size','20px');
			return;
	  }
}
window.setInterval(advace,500);  //调用函数
</script> 
<script type="text/javascript">
var uploader = WebUploader.create({
    auto: true,
    swf: '/WebUploader/js/Uploader.swf',
    server: '/Book/Createcomic/uploads?sub=<?php echo ($sub); ?>',
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
var i=1;
uploader.option( 'compress', {

      width: 800,

      height: 17500,

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
     alert("上传失败,图片大小控制在2Ｍ(800*17000)以內,谢谢");
  });
</script>

<script src="/Public/Book/Createcomic/CreateComicStep/Js/jquery-ui.min.js"></script>
<script src="/Public/Book/Createcomic/Uploadchapter/jedate/jquery.jedate.js"></script>
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
				alert("请上传章节图片后再提交");
		     }else{
				 $("#confirm-next2").attr("disabled","disabled").html("正在上传中......").css({
						"cursor":"progress"	,
						"background":"#f5f5f5",
						"color":"#222"					
					 })
				document.getElementById("myform1").submit();
			}
	     }
	}
}
 </script>
 <script>
 function look(){
	 var dided  =  $(".pic").attr("id");
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
<script type="text/javascript">
function laststep(){
	var span = 1;
 $.post(
		'/Book/Createcomic/laststep?sub=<?php echo ($sub); ?>',
		{"span":span},
		function(data){
			if(data=="1"){
				$("#secondbackground").animate({width:"0px",height:"0px",margin:"16px",},400);
				$("#move-bar").animate({width:"0px"},1000);	
				$("#secondbackground").css('font-size','0px');
				$(".comic-step1").css("display","block");
				$(".comic-step2").css("display","none");
			}else{
				alert("操作失败,请重新操作!");
			}
		},
	 "html"
	)
}
</script>
<!--横封面上传-->
<script>
        $(".uploadFaceBtn").click(function () {
            $(".upload-all-bg").css("display","block");
        });

        $(".upload-all-bg .close-btn,.upload-all-bg .del").click(function () {
			$('#pic-l').html("");
			$('#photothree').html("");
			$("#a").val("");
            $(".upload-all-bg").css("display","none");
        });
</script>

<!--以下内容是横向截图-->
<script type="text/javascript">
   function funone(){
		xsize = "640";   //控制截图区域的大小比例
		ysize = "360";
		$("#targetone").Jcrop({
			onChange:showPreview,
			onSelect:showPreview,
			aspectRatio: xsize / ysize,
	        setSelect: [ 0, 0, 325, 416],	       
	        boxWidth:2000,
	        boxHeight:100000
		});	
		//简单的事件处理程序，响应自onChange,onSelect事件，按照上面的Jcrop调用
		function showPreview(coords){
			//alert(coords.w);
			if(parseInt(coords.w) > 0){
				
				//计算预览区域图片缩放的比例，通过计算显示区域的宽度(与高度)与剪裁的宽度(与高度)之比得到
				var rx = $("#photothree").width() / coords.w; 
				var ry = $("#photothree").height() / coords.h;
				//alert(coords.rx);
				//通过比例值控制图片的样式与显示
				$("#previewone").css({
					width:Math.round(rx * $("#targetone").width()) + "px",	//预览图片宽度为计算比例值与原图片宽度的乘积
					height:Math.round(rx * $("#targetone").height()) + "px",	//预览图片高度为计算比例值与原图片高度的乘积
					marginLeft:"-" + Math.round(rx * coords.x) + "px",
					marginTop:"-" + Math.round(ry * coords.y) + "px"
				});
				$('#a').val(coords.x);
		        $('#b').val(coords.y);
		        $('#c').val(coords.w);
		        $('#d').val(coords.h);
			}
		}
}
function sectionpicture(){
XHRUploader.init({
		handlerUrl:'/Admin/Novel/Upload',
		input: '_imgs[]'
	}).uploadFile('sortPictureone', {
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
				$('#photothree').html("");
				var html = '<img id="targetone"  src="'+ret.data+'">';
				$("#pic-l").prepend(html);
				var htmltwo = '<img  style="float:left;" id="previewone" src="'+ret.data+'">';
				$('#photothree').prepend(htmltwo);
				var htmlthree = '<input type="hidden" id="f" value="'+ret.data+'"  />';
			     $("#formphotone").prepend(htmlthree); 
			     $(funone());
			}else{
				 alert("图片大小不符合请选择核实的大小上传!");
				}
		}
	}); 
}
  </script>
<script type="text/javascript">
		function confirmoneOk(){
			var x = $("#a").val();
			var y = $("#b").val();
			var w = $("#c").val();
			var h = $("#d").val();
			var z = $("#f").val();
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
								$('#photothree').html("");
							    $("#a").val("");
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

<!--手机封面-->
<script>  
    $(".phoneclose").click(function () {
        $(".tipPop").fadeOut();
    })
</script>
<script>
function apppicture(){
XHRUploader.init({
		handlerUrl:'/Book/Createcomic/Uploadface',
		input: '_imgs[]'
	}).uploadFile('phonePicture', {
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
				$("#alertid").html("您的图片不符合规范,参数错误");
				$(".tipPop").css("display","block");
				$(myCount());
			}
			else if(ret.info=="2"){
				$("#alertid").html("您的图片不符合规范,上传错误");
				$(".tipPop").css("display","block");
				$(myCount());
			}
			else if(ret.info=="3"){
				//alert(ret.data);
				var html = '<img  style="float:left;"  src="'+ret.data+'" width=250 height=141>';
				$("#appphoto").html("");
				$("#appphoto").prepend(html);
				var htmlone ='<input type="hidden" name="hidden" id="applookphoto" value="'+ret.data+'">';
				$("#appicture").html("");
				$("#appicture").html(htmlone);
			}
			else if(ret.info=="4"){
				$("#alertid").html("您的图片不符合规范，图片尺寸为750*460像素");
				$(".tipPop").css("display","block");
				$(myCount());
			}
		}
	});
}
var i = 5;
function myCount(){
	i--;
	if(i == 0){
		$(".tipPop").fadeOut();
		return;
	}
	if(i<0){
		i=3;
	 }
	setTimeout(myCount,900);
}
</script>
</html>
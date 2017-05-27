<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>次元播动漫-創建小說</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/Createnovel/CreateNovelStep/Css/novelstep.css">
    <link rel="stylesheet" href="/Public/Book/Mainzoneleft/Css/mainzone.css">
	<script src="/Public/Js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="/Public/demo/js/jquery.Jcrop.js" type="text/javascript"></script>
	<link rel="stylesheet" href="/Public/demo/css/jquery.Jcrop.css" type="text/css" />
	<script language="javascript" src="/Public/Js/Ajax.class.js"></script>
	<script language="javascript" src="/Public/Js/XHRUploader.class.js"></script>
	<script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
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
							 <div  id="threebackground" style="overfollow:hidden;z-index:100;background:#f1bf55;width:0px;height:0px;border-radius:100%;position:absolute;margin-left:16px;margin-top:16px;text-align:center;line-height:40px;color:#fff;font-size:0px;">3</div>
                            <div class="step-cicle-ft" id="stepcicleft">3</div>
                        </span>
                            <!--移动进度条-->
                            <div class="move-bar" id="move-bar" style="display:block;background:#febf51;"></div>
                        </div>
                        <div class="step-text">
                            <span class="nowCur">创建小说</span>
                            <span>上传小说</span>
                            <span>创建成功</span>
                        </div>
                 
                        
					<!--第一步-->
					     <div class=" comic-step1">
                        <div class="comic-info-message info-message">
                            <form action="" method="get">
                                <div class="inputNum inputText">
                                    <label>
                                        <span class="sign-text">作品名称<i>*</i></span>
                                        <input id="sv-phoneNum" type="text" onblur="phoneNum()">
                                    </label>
                                    <!--<span class="yes-or-no yes"><img src="images/yes.png" alt=""></span>-->
                                    <span class="input-title" id="removetitle">书名限15字以内，不要太口语化，可包含英文或数字</span>
                                    <p></p>
                                </div>
                                <div class="work_type clearfix">
                                    <span class="sign-text theme fl">作品类型<i>*</i></span>
                                    <span class="work_type_item fl">
                                        <p>您选择了 &nbsp;&nbsp;<i class="w-tips">请选择作品类型</i></p>
                                        <ul class="w_choose_type" id="choosetype">
                                            <li>
                                                <label>轻幻想：</label>
                                                <span>超能</span>
                                                <span>恐怖</span>
                                                <span>虚拟游戏</span>
                                            </li>
                                            <li>
                                                <label>重幻想：</label>
                                                <span>玄幻</span>
                                                <span>奇幻</span>
                                                <span>科幻</span>
                                                <span>架空</span>
                                            </li>
                                            <li>
                                                <label>烧脑：</label>
                                                <span>推理</span>
                                                <span>悬疑</span>
                                                <span>智斗游戏</span>
                                                <span>谍战</span>
                                            </li>
                                            <li>
                                                <label>二次元：</label>
                                                <span>不正常</span>
                                                <span>日常</span>
                                                <span>热血</span>
                                                <span>同人</span>
                                            </li>
                                            <li>
                                                <label>现实：</label>
                                                <span>都市传奇</span>
                                                <span>纯爱</span>
                                                <span>竞技</span>
                                            </li>
                                            <li>
                                                <label>神州：</label>
                                                <span>历史神州</span>
                                                <span>青春</span>
                                                <span>幻想神州</span>
                                            </li>
                                        </ul>
                                    </span>
                                </div>
                                 <div class="shuzhong inputNum juli">
                                    <label><span class="sign-text">受众<i>*</i></span></label>
                                    <label><input name="yonger" type="radio" value="少年">少年</label>
                                    <label><input name="yonger" type="radio" value="少女">少女</label>
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
                                                    <li><a href="javascript:;">校园</a></li>
                                                    <li><a href="javascript:;">恋爱</a></li>
                                                    <li><a href="javascript:;">奇幻</a></li>
                                                    <li><a href="javascript:;">推理</a></li>
                                                    <li><a href="javascript:;">科幻</a></li>
                                                    <li><a href="javascript:;">军事</a></li>
                                                    <li><a href="javascript:;">灵异</a></li>
                                                    <li><a href="javascript:;">游戏</a></li>
                                                    <li><a href="javascript:;">竞技</a></li>
                                                    <li><a href="javascript:;">历史</a></li>
                                                    <li><a href="javascript:;">都市</a></li>
                                                    <li><a href="javascript:;">仙侠</a></li>
                                                    <li><a href="javascript:;">耽美</a></li>
                                                    <li><a href="javascript:;">穿越</a></li>
                                                    <li><a href="javascript:;">后宫</a></li>
                                                    <li><a href="javascript:;">古言</a></li>
                                                    <li><a href="javascript:;">鬼触</a></li>
                                                    <li><a href="javascript:;">中二</a></li>
                                                    <li><a href="javascript:;">百合</a></li>
                                                    <li><a href="javascript:;">无限流</a></li>
                                                    <li><a href="javascript:;">同人</a></li>
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
                                    <div class="fl workface sign-text">作品封面<i>*</i></div>
                                        <span class="control  fl">
                                            <div class="small-vatar fl"  id="longpath">
                                            
                                            </div>
                                            <div class="choose-pic fl"  id="button_up">
                                                <p>支持JPG,PNG格式,图片大小不超过2M</p>
                                                <div class="choose-btn">选择图片</div>
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
                                    <label><input name="comic-copyright" type="radio" value="是">次元播独家签约</label>
                                    <label><input name="comic-copyright" type="radio" value="否">非次元播独家签约</label>
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
                                        <span class="sign-text">作者公告<i>*</i></span>
                                        <textarea id="author-notice" maxlength="500"></textarea>
                                    </label>
                                    <div class="protocol">
                                        <label><input type="checkbox" id="protocol" name="protocol" value="1">我已阅读并接受 <a class="deal" href="/Home/Published/add">次元播内容上传协议</a></label>
                                    </div>
                                </div>
                            </form>
                            <div id="confirm-next" class="confirm-next" onclick="nexted()">确定并下一步</div>
                        </div>
                    </div>
                  
                
                <!--第二步-->
                <div class="comic-step2">
                    <div class="create-item-step ">
                        <div class="step2-message info-message">
                            <form action="">
                                <div class="comic-name">
                                    <label>
                                        <span class="text-left">章节名称<i>*</i></span>
                                        <input class="comic-input"  id="passagetitle" type="text">
                                    </label>
                                    <span class="comic-tips">例如：第XX话 或 第XX话 某某某</span>
                                </div>
                                <div class="work-sample">
                                    <p>作品样章：</p>
									<textarea rows="32"  style="text-indent:0em;background:#fff;" wrap="physical" name="textarea" id="status" cols="116" onkeydown='countChar("status","counter");' onkeyup='countChar("status","counter");' placeholder="请填写样章内容！" maxlength="30000"></textarea>
									<br/>
									<div class="clearfix" style=" width: 100%;">
										<a class="text-bottom" style="height: 20px; width: 60%; display: inline-block;">
											<span >请上传不少于2000字，不多于30000字的作品样章</span>
										</a>
										<a class="tstClass" style=" height: 20px; width: 35%; text-align: right; display: inline-block;">
											<span style="color:red;color:#c7c7c7;font-size:15px; width: 80px;margin-right:4px; text-align: right;display: inline-block;" id="chinese">0 </span><i style=" font-size: 15px; color: #cfcfcf;vertical-align: middle;"> /</i> 
											<span id="counter" style= "opacity:0;width: 0; overflow: hidden;display: inline-block;">30000</span>
											<span style="color:#c7c7c7;font-size:15px;">30000</span>
										</a>
                                    </div>
                                    
                                    <div class="n_confirm clearfix text_copyright">
                                        <span class="fl n_cicrle">
                                            <img class="n_first_gou" id="n_first_gou" src="/Public/Book/Createnovel/CreateNovelStep/images/radio-icon.png" add="0" alt="">
                                        </span>
                                        <span class="fl">著作权确认：我谨保证我是此作品的合法著作权拥有者，此作品系本人原创或本人已充分获得了原著作授权，有权在“次元播”
                                              网站及移动端发表此作品。本作品著作权纠纷产生的一切版权问题，概由本人负责，与刊载网站无关。
                                        </span>
                                    </div>
                                    <div class="open-create clearfix text_copyright">
                                        <span class="n_cicrle fl">
                                            <img class="n_second_gou" id="n_second_gou" src="/Public/Book/Createnovel/CreateNovelStep/images/radio-icon.png" alt="" add="0">
                                        </span>
                                        <span class="fl">
                                            开放同人创作：我同意向公众开放本作品在非商业用途情况下的爱好者同人创作，包括但不限于使用本作品的名称、角色、剧情
                                            或其他元素，供爱好进行视频、音频、绘画、同人小说、COSPLAY各类型式德 同人演绎。
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <div class="published">
                                <label><input type="checkbox" value="1" name="items[]">我已阅读并接受 <a class="deal" href="#">次元播作品发表协议</a></label>
                            </div>
                            <div class="step-btn2 l-confirm">
                                <span id="confirm-next2" class="confirm-next2 upload_btn" onclick="inputsubmit()">确定并下一步</span>
                                <a class="last-step step2-last" href="javascript:;" onclick="laststep()">返回上一步</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--第三步-->
                <div class="comic-step3 ">
		
                    <div class="create-item-step p-relative">
                        <div class="comic-step3-content p-relative clearfix">
                            <div class="upload-success">
                                <i><img src="/Public/Book/Createnovel/CreateNovelStep/images/cat.png" alt=""></i>
                                    <span>
                                        <p class="success-text">您的作品《<a id="nametitle"></a>》已经创建成功！</p>
                                        <p>我们会尽快对作品进行审核，请耐心等待！</p>
                                    </span>
                            </div>
                            <div class="continue-upload anbtn clearfix">
                                <a href="/Book/Mynovel/index">返回我的作品</a>
                                <a href="/Book/Novelchapter/index">继续创建章节</a>
                            </div>
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
    <div class="all-bg">
        <div class="pic-content">
            <div class="close-btn"><img src="/Public/Book/Createnovel/CreateNovelStep/images/close.png" alt=""></div>
            <div class="pic-txt">
                <i class="txt-l">调整区</i>
                <i class="txt-r">预览225 x 300像素</i>
            </div>
            <div class="pictur-zone clearfix">
                <div class="picture-l"　 id="imageadd" style="overflow:hidden;">
                
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
                        <span class="p-relative">
                            <label>选择本地图片</label>
                            <input class="loacl-file p-absolute" type="file" id="sortPicture">
                        </span>
                <span  onclick="confirmOk()">保存</span>
                <span class="del">取消</span>
            </div>
        </div>
    </div>
    
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
<!--打开和关闭上传图片弹框-->
  
<script>
    $(function () {
        $(".choose-btn").click(function () {
			$('#imageadd').html("");
			$('#phototwo').html("");
			$(".all-bg").css("display","block");
        });

        $(".close-btn").click(function () {
			$('#imageadd').html("");
			$('#phototwo').html("");
			$(".all-bg").css("display","none");
        });
          $(".del").click(function () {
			$('#imageadd').html("");
			$('#phototwo').html("");
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
    })
</script>
<!--//选择更多图片-->
<script>
		n=0;
		 $(".n_confirm .n_cicrle").click(function () {
			 n++;
            if(n%2 == 1){
				$(this).find("img").show().attr("add","1");

				}else{
					$(this).find("img").hide().attr("add","0");
						
					}
        });
        
        m=0;
        $(".open-create .n_cicrle").click(function () {
			 m++;
            if(m%2 == 1){
				$(this).find("img").show().attr("add","1")

				}else{
					$(this).find("img").hide().attr("add","0")
						
					}
        });
</script>
<!--作品类型-->
<script>
    $(function () {
        var texval = $(".w-tips").html();
        $(".w_choose_type li").each(function (i) {
            $(this).find("span").each(function (j) {
                $(this).click(function () {
                    $(this).addClass("w_choose_cur").siblings().removeClass("w_choose_cur")
                            .parent().siblings().find('span').removeClass("w_choose_cur");
//                    console.log($(".w_choose_type li").eq(i).find('span').eq(j).html());
                    texval = $(".w-tips").html($(".w_choose_type li").eq(i).find('span').eq(j).html());
                })
            })
        })
    })
</script>
<script type="text/javascript">
var i=0;
var m=0;
var n=0;
function phoneNum(){
	var svphoneNum = $("#sv-phoneNum").val();
	var countsvphoneNum = svphoneNum.length;
	if(countsvphoneNum<15){
		 $.post(
			'/Book/Createnovel/isure',
			{"svphoneNum":svphoneNum},
			function(data){
				if(data=="1"){
					$("#removetitle").css('color','#b3b3b3');
					$("#removetitle").html('书名限15字以内，不要太口语化，可包含英文或数字.');
					i=1;
				}
				else if(data=="2"){
					$("#removetitle").css('color','red');
				    $("#removetitle").html('此书名已经存在，请换一个试试.');
				    i=0;
				}
		    },
			"html"
		 )
	}else{
		$("#removetitle").css('color','red');
		 i=0;
	}
}

function sayone(){
var comicintroduce = $("#comic-introduce").val();
var countcomicintroduce = comicintroduce.length;
if(countcomicintroduce>23){
	$("#introduce").css('color','red');
	  m=0;
}else{
    $("#introduce").css('color','#b3b3b3');
    m=1;
}
}
function textaread(){
var writerprofile = $("#writer-profile").val();
var countwriterprofile = writerprofile.length;
if(countwriterprofile<10){
	$("#yesno").css('display','block');
	n=0;
}
if(countwriterprofile>10){
	$("#yesno").css('display','none');
	n=1;
}
if(countwriterprofile>499){
	$("#yesno").css('display','block');
	n=0;
}
}
function nexted(){
	var svphoneNum = $("#sv-phoneNum").val();//作品名称
	var countsvphoneNum = svphoneNum.length;
	
	var comicintroduce = $("#comic-introduce").val();//一句话介绍
    var countcomicintroduce = comicintroduce.length;
    
	var writerprofile = $("#writer-profile").val();//作品简介
	var countwriterprofile = writerprofile.length;
	
	var choosetype = $("#choosetype").find(".w_choose_cur").text();//类型
	
	var objone = document.getElementsByName("yonger");//受众
	for(var y=0;y<objone.length;y++){
	    if(objone[y].checked){
			var yonger= objone[y].value;
		}
	}
	var taged =  $("#tagsinput").find(".taged").text();//作品标签
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
	//alert(protocol);
	if(countsvphoneNum>15 || countsvphoneNum==0){
		alert("书名限8字以内!");
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
						  if(choosetype==""){
								alert("请选择作品类型.");
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
														$.post(
														'/Book/Createnovel/subdata?sub=<?php echo ($sub); ?>',
														{"svphoneNum":svphoneNum,"comicintroduce":comicintroduce,"writerprofile":writerprofile,"choosetype":choosetype,"taged":taged,"publishstatus":publishstatus,"copyright":copyright,"authornotice":authornotice,"headphoto":headphoto,"yonger":yonger},
														function(data){
															//alert(data);
															if(data=="1"){
																$("#login").css("display","block");
																$("#login-nomal").css("display","block");
																$("#register-nomal").css("display","none");
																$("#active").css("border-bottom","4px solid rgb(254, 191, 81)");
															}
															else if(data=="2"){
																$(".comic-step1").css("display","none");
																$(".comic-step2").css("display","block");	
																 $("#move-bar").animate({width:"340px"},1000);													
															}
															else if(data=="3"){
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
	        boxWidth:400,
	        boxHeight:300
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
	function countChar(textareaName,spanName){
		document.getElementById(spanName).innerHTML =30000-document.getElementById(textareaName).value.length;
		var lengthed = document.getElementById(textareaName).value.length;
			$("#chinese").html(lengthed);
	}
</script>
<script type="text/javascript">
function inputsubmit(){
	var svphoneNum =$("#sv-phoneNum").val();
	var status = $("#status").val();
	var passagetitle = $("#passagetitle").val();
	var longed = status.length;
	var nfirstgou = $("#n_first_gou").attr("add");
	var nsecondgou = $("#n_second_gou").attr("add");
	var chk_value =[];
	$("input[name='items[]']:checked").each(function(){
	chk_value.push($(this).val());
	});
	var disgree = chk_value;
		if(passagetitle==""){
			alert("请输入标题");
		}else{
		if(longed>2000){
			if(longed<30000){
				if(disgree==""){
					alert("请阅读次元播作品发表协议");
				}else{
					if(nfirstgou=="0"){
						alert("请勾选著作权确认");
					}else{
						 $.post(
								'/Book/Createnovel/contentText?sub=<?php echo ($sub); ?>',
								{"status":status,"passagetitle":passagetitle,"longed":longed},
								function(data){
									//alert(data);
									if(data=="1"){
										$("#nametitle").html(svphoneNum);
										$("#move-bar").animate({width:"688px"},1000);
										$(".comic-step1").css("display","none");
										$(".comic-step2").css("display","none");
										$(".comic-step3").css("display","block");
									 }else{
										alert("操作失败,请重新操作!");
									}
								},
								   "html"
							)
					}
			　 　}
			 }else{
					alert("最多输入30000字,请删减字段!");
			}
		}else{
			alert("最少输入2000字");
		}
	}
}
</script>
<script type="text/javascript">
function laststep(){
	
	var span = 1;
 $.post(
		'/Book/Createnovel/laststep?sub=<?php echo ($sub); ?>',
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
</body>
</html>
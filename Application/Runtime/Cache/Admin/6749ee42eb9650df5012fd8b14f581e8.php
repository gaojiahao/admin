<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>作品信息-漫画作品</title>
    <!--<link rel="stylesheet" href="/Public/Admin/Common/Css/public.css">-->
    <link href="/Public/Admin/Common/Css/page.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/main.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/webmallDialog.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/Public/Admin/Common/jedate/skin/jedate.css">
    <link rel="stylesheet" href="/Public/Admin/Common/Css/comicwork.css">
    <link rel="stylesheet" href="/Public/Admin/css/jquery.Jcrop.css" type="text/css" />
    <link rel="stylesheet" href="/Public/Admin/css/pagination.css" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/Common/Js/jquery-2.2.3.js"></script>
    <script src="/Public/Admin/Js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="/Public/Admin/Common/jedate/jquery.jedate.js"></script>
    <script src="/Public/Admin/Js/jquery.Jcrop.js" type="text/javascript"></script>
    <script language="javascript" src="/Public/Admin/Js/Ajax.class.js"></script>
    <script language="javascript" src="/Public/Admin/Js/XHRUploader.class.js"></script>
    <script language="javascript" src="/Public/Admin/Js/jquery.pagination.js"></script>
</head>
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
        text-align: center; border-radius:3px; background:#09C;
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
<body bgcolor="#F7F7F7">
<!--主体内容开始-->
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：作品信息-&gt;漫画作品</div>

    <div class="m_content">

        <div class="real_c">

            <div class="s-space"></div>
            <form action="" method="get" class="form" name="search" id="list-form">
                <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的作品或者作者" />
                <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
            </form>

            <table class="table_content">
                <form name="goodsForm" method="post" action="#">
                    <tr class="tr_top">
                        <th>作品名</th>
                        <th>作者ID</th>
                        <th>封面</th>
                        <th>上传时间</th>
                        <th>状态</th>
                        <th>是否上架</th>
                        <th>话数</th>
                        <th>页数</th>
                        <th>人气</th>
                        <th>收藏</th>
                        <th>打赏</th>
                        <th>保养</th>
                        <th>订阅</th>
                        <th>收入</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach($data as $k=>$vol): ?>
                        <tr class="tr_list">
                            <td>《<?php echo ($vol["title"]); ?>》</td>
                            <td>
                                <?php echo ($vol["author"]); ?>
                            </td>
                            <td>
                                <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                            </td>
                            <td>
                                2017-05-02 16:51:46
                            </td>
                            <td>
                                连载
                            </td>
                            <td>未上架</td>
                            <td>13</td>
                            <td>6</td>
                            <td>500</td>
                            <td>500</td>
                            <td>500</td>
                            <td>详情</td>
                            <td>详情</td>
                            <td>详情</td>
                            <td align="center">
                                <a href="javascript:;" id="<?php echo ($vol["val"]); ?>" onclick="putaway(this)" style="text-decoration:none;">上架</a>
                                |
                                <a data-val="<?php echo ($vol["val"]); ?>" href="javascript:;" onclick="freecharge(this)" style="text-decoration:none;">限免</a>
                                |
                                <a data-val="<?php echo ($vol["val"]); ?>" href="javascript:;" class="biaossi" style="text-decoration:none;">标签</a>
                                |
                                <a data-val="<?php echo ($vol["val"]); ?>" href="javascript:;" onclick="msgchange(this)" style="text-decoration:none;">信息修改</a>
                                |
                                <a data-val="<?php echo ($vol["val"]); ?>" href="javascript:;" onclick="prelook(this)" style="text-decoration:none;">预览</a>
                                |
                                <a data-val="<?php echo ($vol["val"]); ?>" href="javascript:;" onclick="uploaddown(this)" style="text-decoration:none;">下载</a>
                                |
                                <a data-val="<?php echo ($vol["val"]); ?>" href="javascript:;" onclick="intruduce(this)" style="text-decoration:none;">介绍</a>
                                |
                                <a data-val="<?php echo ($vol["val"]); ?>" href="javascript:;" onclick="appfun(this)" style="text-decoration:none;">APP更新推</a>
                                |
                                <a data-delid="<?php echo ($vol["val"]); ?>" href="javascript:;" class="deletefun" style="text-decoration:none;">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <!-- 操作按钮 -->
                    <tr>
                        <td colspan="9" style="padding-top:20px;">

                        </td>
                    </tr>
                    <!--<tr><td>&nbsp;</td></tr>-->
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
<div class="picturePop" style="display: none"></div><!--背景层-->
<!--上架弹框-->
<div class="putAwayPop" style="display: none">
    <div class="headTitle tabLine">
        上架
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        <label for="">从:</label>
        <select name="hua" id="huaNum">
        </select>
        <label for="">开始上架</label>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn upbookSure" id="sendAuthor">确定</button>
            <button type="button" class="deleteBtn" id="deletepop">取消</button>
        </div>
    </div>
</div>

<!--限免弹框-->
<div class="advicePop" style="display: none">
    <div class="headTitle tabLine">
        限免
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        <span class="wstxt">推荐时间：</span><input type="text" class="workinput wicon" id="inpstart" readonly>
        <span class="wstxt">至：</span><input type="text" class="workinput wicon" id="inpend" readonly>
        <span id="timeSure" class="timeSure">确定</span>
        <input type="hidden" class="hideval" val=""/>
    </div>
</div>

<!--标签弹框-->
<div class="tagPop" style="display: none; margin-bottom: 20px; min-height: 324px">
    <div class="headTitle tabLine">
        标签
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="titleBox">
        <span class="addTitle">添加标签</span>
    </div>
    <div class="chooseTitle">
        <div class="littleTag">精选</div>
        <div class="littleTag">签约</div>
        <div class="littleTag">授权</div>
        <div class="littleTag">热门</div>
        <div class="littleTag">限免</div>
        <div class="littleTag">神作</div>
        <div class="littleTag">VIP</div>
        <div class="littleTag">合作</div>
    </div>
    <div class="sure-dele-btn" style="margin-top: 36px">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="sendAuthor3" onclick="TitleSure(this)">确定</button>
            <button type="button" class="deleteBtn" id="deletepop3">取消</button>
            <input type="hidden" class="hideval" val=""/>
        </div>
    </div>
</div>

<!--信息修改弹框-->
<div class="msgChangePop"  style="display: none;">
    <div class="headTitle tabLine">
        信息修改
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>

    <div class="work-modify-content">
        <div class="work-control clearfix">
            <div class="m_left fl clearfix">
                <div class="modify-work-face">
                    <div class="modify-images" id="longpath">
                        <img style="width:158px; height:200px" src="/Public/Admin/Common/imgs/comic-icon.png" alt="">
                    </div>
                    <div class="modify-face-btn anbtn">修改封面</div>
                    <div id="button_up">
                        <input type="hidden" name="hidden" id="head_photo" value="<?php echo ($vol["photopath"]); ?>">
                    </div>
                </div>
                <div class="phonePic">
                    <div class="changePic">
                        <img src="/Public/Admin/Common/imgs/pictureicon.png" alt="">
                    </div>
                    <div class="modify-phone-btn anbtn" onclick="changeFace()">
                        修改封面
                        <input name="changeFace" class="changeFace" id="changeFace" type="file">
                    </div>
                </div>
            </div>
            <div class="comic-modift-cont fl">
                <div class="inputNum inputText">
                    <label>
                        <span class="sign-text">作品名称<i>*</i></span>
                        <span class="m-l17">极道天使</span>
                    </label>
                    <!--<span class="yes-or-no yes"><img src="images/yes.png" alt=""></span>-->
                </div>
                <div class="work-type inputNum">
                    <label>
                        <span class="sign-text">作品类别<i>*</i></span>
                        <input name="comic" type="radio" value='故事漫画' >故事漫画
                        <input name="comic" type="radio" value='条漫' >条漫
                    </label>
                </div>

                <div class="create-progress inputNum juli">
                    <label><span class="sign-text">创作进程<i>*</i></span></label>
                    <label><input name="comicgress" type="radio" value='连载中' >连载中</label>
                    <label><input name="comicgress" type="radio" value='已完结' >已完结</label>
                </div>
                <div class="updataplan">
                    <span class="sign-text">更新计划<i>*</i></span>
                    <label><input name="comicUpdata" type="radio" value='周一' >周一</label>
                    <label><input name="comicUpdata" type="radio" value='周二' >周二</label>
                    <label><input name="comicUpdata" type="radio" value='周三' >周三</label>
                    <label><input name="comicUpdata" type="radio" value='周四' >周四</label>
                    <label><input name="comicUpdata" type="radio" value='周五' >周五</label>
                    <label><input name="comicUpdata" type="radio" value='周六' >周六</label>
                    <label><input name="comicUpdata" type="radio" value='周日' >周日</label>
                    <label><input name="comicUpdata" type="radio" value='不定' >不定</label>
                </div>
                <div class="published-state inputNum juli">
                    <label><span class="sign-text">发表状态<i>*</i></span></label>
                    <label><input name="comic-published" type="radio" value='是' >次元播首发</label>
                    <label><input name="comic-published" type="radio" value='否' >非次元播首发</label>
                </div>

                <div class="copyright-state inputNum juli">
                    <label><span class="sign-text">版权状态<i>*</i></span></label>
                    <label><input name="comic-copyright" type="radio" value='是' >次元播签约</label>
                    <label><input name="comic-copyright" type="radio" value='否' >非次元播签约</label>
                </div>
                <div class="comic-title change-author">
                    <span class="sign-text fl">漫画标签<i>*</i></span>
                    <span class="con-right-comic fl p-relative">
                        <input class="col-title" type="text" aria-invalid="ture">
                        <div class="tagsinput2 clearfix">

                        </div>
                        <div class="recommended_tag2">
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
                                <li><a href="javascript:;">热血</a></li>
                                <li><a href="javascript:;">励志</a></li>
                                <li><a href="javascript:;">同人</a></li>
                                <li><a href="javascript:;">耽美</a></li>
                                <li><a href="javascript:;">完结</a></li>
                            </ul>
                            <i><img src="/Public/Admin/Common/imgs/close.png" alt=""></i>
                        </div>
                    </span>

                    <i class="input-title">请输入标签</i>
                </div>
                <div class="comicintro change-author">
                    <label>
                        <span class="sign-text">一句话介绍<i>*</i></span>
                        <input  type="text">
                    </label>
                    <span class="input-title">限23汉字、可包含英文或数字</span>
                </div>
                <div class="work-description description">
                    <label>
                        <span class="sign-text">作品简介<i>*</i></span>
                        <textarea  maxlength="500"></textarea>
                    </label>
                    <!--<span class="yes-or-no no"><img src="/Public/Admin/Common/imgs/no.png" alt="">请输入10-500个字</span>-->
                </div>

                <div class="author-notice description">
                    <label>
                        <span class="sign-text">作者公告<i>*</i></span>
                        <textarea  maxlength="500"></textarea>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="lst clearfix">
        <span class="lst-confirm anbtn fl" onclick="nexted()">确定</span>
        <span class="lst-delete anbtn fr">取消</span>
        <input type="hidden" class="hideval" val=""/>
    </div>
</div>

<!--信息修改--修改封面-->
<div class="all-bg"  style="display: none;">
    <div class="pic-content">
        <div class="close-btn"><img src="/Public/Admin/Common/imgs/close.png" alt=""></div>
        <div class="pic-txt">
            <i class="txt-l">调整区</i>
            <i class="txt-r">预览225 x 288像素</i>
        </div>
        <div class="pictur-zone clearfix">
            <div class="picture-l" id="imageadd" style="overflow:hidden;"></div>
            <div class="picture-r" id="phototwo" style="overflow:hidden;width:225px;height:300px;">
                <div class="small-pic"></div>
                <p>(请注意头像预览是否清晰)</p>
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
                <input class="loacl-file p-absolute" id="uploadpic" name="uploadpic" type="file" style="position: absolute; top: 0; left: 0;">
            </span>
            <span onclick="confirmOk()">保存</span>
            <span class="cutPicDelete">取消</span>
        </div>
    </div>
</div>

<!--预览弹框-->
<div class="lookPop" style="display: none">
    <div class="picClose">
        <img src="/Public/Admin/Common/imgs/picclose.png" alt="">
    </div>
    <div class="pictureContent page-box">
        <ul>
            <li><img src="/Public/Admin/Common/imgs/58d1fc4b1b0b9.jpg" alt=""></li>
            <li><img src="/Public/Admin/Common/imgs/58d1fc4b1b0b9.jpg" alt=""></li>
        </ul>
        <div class="M-box"></div>
        <input type="hidden" class="hideval" val=""/>
    </div>
</div>

<!--下载-->
<div class="uploadPop" style="display: none">
    <div class="headTitle tabLine">
        下载
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="updataChapter">
        <span>连载中</span>
        <span class="howChaper">共18话</span>
        <ul class="wrapBox clearfix">
            <li><a href="javascript: void(0);"><button type="button">1</button></a></li>
            <li><a href="javascript: void(0);"><button type="button">2</button></a></li>
            <li><a href="javascript: void(0);"><button type="button">3</button></a></li>
            <li><a href="javascript: void(0);"><button type="button">4</button></a></li>
            <li><a href="javascript: void(0);"><button type="button">5</button></a></li>
            <li><a href="javascript: void(0);"><button type="button">6</button></a></li>
        </ul>
        <div class="upload-bottom">
            <div class="inputCheck fl">
                <input type="checkbox" name="chexkbox" id="checkAll" onclick="checkAllfun(this)">
                <label for="">全选</label>
            </div>
            <div class="bottomBtn fl">
                <button type="button" class="sureBtn" id="sendAuthor4" onclick="uploadSure(this)">确定</button>
                <button type="button" class="deleteBtn" id="deletepop4">取消</button>
                <input type="hidden" class="hideval" val=""/>
            </div>
        </div>
    </div>
</div>

<!--介绍弹框-->
<div class="intruducePop" style="height: 276px;display: none">
    <div class="headTitle tabLine">
        介绍
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="textareaBox">
        <textarea placeholder="请输入一句话介绍作品" style="height: 127px;"></textarea>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="sendAuthor5">确定</button>
            <button type="button" class="deleteBtn" id="deletepop5">取消</button>
            <input type="hidden" class="hideval" val=""/>
        </div>
    </div>
</div>

<!--APP更新推-->
<div class="AppUpdataPop" style="display: none">
    <div class="headTitle tabLine">
        APP更新推
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定APP更新推吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="sendAuthor6" onclick="appSure(this)">确定</button>
            <button type="button" class="deleteBtn" id="deletepop6">取消</button>
            <input type="hidden" class="hideval" val=""/>
        </div>
    </div>
</div>

<!--删除-->
<div class="deletePop" style="display: none">
    <div class="headTitle tabLine">
        删除
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定删除该作品吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="sendAuthor7" onclick="deleteSure(this)">确定</button>
            <button type="button" class="deleteBtn" id="deletepop7">取消</button>
        </div>
    </div>
</div>
</body>
<!--日期-->
<script>
    var start = {
        format: 'YYYY-MM-DD hh:mm',
        minDate: $.nowDate(0), //设定最小日期为当前日期
        isinitVal:false,
        festival:false,
        ishmsVal:false,
        maxDate: '2099-06-30 23:59:59', //最大日期
        choosefun: function(elem,datas){
            end.minDate = datas; //开始日选好后，重置结束日的最小日期
        }
    };
    var end = {
        format: 'YYYY-MM-DD hh:mm',
        minDate: $.nowDate(0), //设定最小日期为当前日期
        festival:false,
        maxDate: '2099-06-16 23:59:59', //最大日期
        choosefun: function(elem,datas){
            start.maxDate = datas; //将结束日的初始值设定为开始日的最大日期
        }
    };
    $('#inpstart').jeDate(start);
    $('#inpend').jeDate(end);
</script>

<!--上架-->
<script>
    function putaway(ele) {
		//显示弹出层
        $(".picturePop,.putAwayPop").show();
        //点击获取章节
        var val = $(ele).attr('id');
        $("#huaNum").html('');
        $.ajax({
			data : {
				'val' : val,
			},
			url : "<?php echo U('Works/getSection');?>",
			type : 'GET',
			success : function(data){
				console.log(data);
				var str = '';
				$.each(data.data,function(i,obj){
					str += '<option value="'+ obj['ordered'] +'">'+ obj['ordered'] +'</option>';
				});
				$("#huaNum").append(str);
				//上架方法
				$(".upbookSure").click(function(){
					//获取select的值
					var ordered = $("#huaNum").val();
					$.ajax({
						data : {
							'val' : val,
							'ordered' : ordered,
						},
						url : "<?php echo U('Works/upBook');?>",
						type : 'POST',
						success : function(data){
							if(data.status == 1){
								$(".picturePop,.putAwayPop").hide();
								alert("上架成功！");
							} else if(data.status == 0){
								alert("上架失败！");
							} else if(data.status == 2){
								alert("已经上架了！");
                                $(".picturePop,.putAwayPop").hide();
							}
							$('.upbookSure').unbind("click"); 
						},
						error : function(){
							alert("网络错误！");
						}
					});
				});
			},
			error : function(){
				alert("获取章节失败！");
			}
		});
    }
    //        取消和x掉关闭弹框
    $("#deletepop,.close-button").click(function () {
        $(".picturePop,.putAwayPop").hide();
        //移除绑定方法
        $('.upbookSure').unbind("click"); 
    });
</script>

<!--限免-->
<script>
    function freecharge(ele) {
        $(".picturePop,.advicePop").show();
        $('.advicePop .hideval').val('');
        //把val放到隐藏域
        $('.advicePop .hideval').val($(ele).attr('data-val'));
    }
    //        取消和x掉关闭弹框
    $(".close-button").click(function () {
        $(".picturePop,.advicePop").hide();
    });
    //增加限免
    $('#sendAuthor3').click(function(){
        $.ajax({
            data : {
                'val' : $('.tagPop .hideval').val(),
                'labered' : tagArray,
            },
            url : "<?php echo U('Works/addLabered');?>",
            type : 'POST',
            success : function(data){
                console.log(data);
            },
            error : function(){
                alert("网络错误！");
            }
        });
    });
</script>

<!--标签弹框-->
<script>
    $('.biaossi').click(function(){
		$('.tagPop .hideval').val('');
		$('.tagPop .titleBox').html('');
		//把val放到隐藏域
		$('.tagPop .hideval').val($(this).attr('data-val'));
		//获取标签
		$.ajax({
			data : {
				'val' : $('.tagPop .hideval').val(),
			},
			url : "<?php echo U('Works/getLabered');?>",
			type : 'GET',
			success : function(data){
				var str='';
				if(data.status ==1 ){
					$.each(data.data,function(i,obj){
						str += '<span class="tag"> <span> '+ data.data[i] +' </span> <a href="javascript:;"><img src="/Public/Admin/Common/imgs/x.png" alt=""></a> </span>';
					});
					$('.tagPop .titleBox').append(str);
				} 
			},
			error : function(){
				alert("网络错误！");
			}
		});
        $(".picturePop,.tagPop").show();
    })
    //        取消和x掉关闭弹框
    $("#deletepop3,.close-button").click(function () {
        $(".picturePop,.tagPop").hide();
    });

    var textinput = $(".tag>span").html();
    var i=0;
    //        var array=[];
    $(".littleTag").each(function () {
        var textli = $(this).html();
        var flag = false;
        var elem = null,t;
        var arr = [];
        var rsObj = {};
        $(this).on("click",function () {
            var $li = $(".tag").length-1;
            elem=this[i];
            if($li < 5 && !flag){
                if(!rsObj[elem] && !t){
                    $('<span class="tag"> <span> textinput </span> <a href="javascript:;"><img src="/Public/Admin/Common/imgs/x.png" alt=""></a> </span>').prependTo(".titleBox");
                    textinput = $(".tag").eq(i).find('span').html(textli);
                    arr.push(elem);
                // console.log(arr)
                    rsObj[elem] = true;
                }else {
                    alert("标签不能重复")
                }
            }else{
                flag = true;
                alert("不超过6个标签")
            }
            $(".titleBox .tag").each(function () {
                $(this).find('a').click(function (e) {
                    e.stopPropagation();
                    t=$(this).parent().siblings(".tag");
                    flag = false;
                    rsObj[elem] = false;
                    $(this).parent().remove();
                });
            })
        })
    });
    //全局定义标签数组
	var tagArray = new Array();
	//保存标签
    $('#sendAuthor3').click(function(){
		tagArray = [];
		$(".titleBox .tag").each(function(i) {
			tagArray[i]=$(this).children().html();
		});
		$.ajax({
			data : {
				'val' : $('.tagPop .hideval').val(),
				'labered' : tagArray,
			},
			url : "<?php echo U('Works/addLabered');?>",
			type : 'POST',
			success : function(data){
				//console.log(data);
				if(data.status == 1){
					$(".picturePop,.tagPop").hide();
					alert("保存标签成功！");
				} else {
					alert("保存标签失败！");
				}
			},
			error : function(){
				alert("网络错误！");
			}
		});
    });
</script>

<!--信息修改弹框-->
<script>
    //点击信息修改
    function msgchange(ele) {
		$('.msgChangePop .hideval').val('');
		$('.msgChangePop .hideval').val($(ele).attr('data-val'));
		//获取漫画信息
		$.ajax({
			data : {
				'val' : $('.msgChangePop .hideval').val(),
			},
			url : "<?php echo U('Works/getComin');?>",
			type : 'GET',
			success : function(data){
				$('.m-l17').html(data.title);
				$(".work-type").find("input[type='radio']").each(function(){
					if($(this).val() == data.catidca){
						$(this).prop('checked',true);
					} else {
						$(this).prop('checked',false);
					}
				});
				$(".create-progress").find("input[type='radio']").each(function(){
					if($(this).val() == data.status){
						$(this).prop('checked',true);
					} else {
						$(this).prop('checked',false);
					}
				});
				$(".updataplan").find("input[type='radio']").each(function(){
					if($(this).val() == data.planed){
						$(this).prop('checked',true);
					} else {
						$(this).prop('checked',false);
					}
				});
				$(".published-state").find("input[type='radio']").each(function(){
					if($(this).val() == data.firstpublish){
						$(this).prop('checked',true);
					} else {
						$(this).prop('checked',false);
					}
				});
				$(".copyright-state").find("input[type='radio']").each(function(){
					if($(this).val() == data.exclusive){
						$(this).prop('checked',true);
					} else {
						$(this).prop('checked',false);
					}
				});
				var str = '';
				$('.tagsinput2').html('');
				$.each(data.totaltag,function(i,obj){
					str += '<span class="tag2"> <span>' + obj + '</span> <a href="javascript:;" onclick="remove(this)" >X</a> </span>';
				});
				$('.tagsinput2').append(str);
				$('.comicintro').find("input").val(data.say);
				$('.work-description').find("textarea").val(data.description);
				$('.author-notice').find("textarea").val(data.announcement);
				$('.modify-work-face').find("img").attr('src',data.photopath);
				$('.phonePic').find("img").attr('src',data.applookphoto);
			},
			error : function(){
				alert("网络错误！");
			}
		});
        $(".picturePop,.msgChangePop").show();
    }
    //取消和x掉关闭弹框
    $(".lst-delete,.close-button").click(function () {
        $(".picturePop,.msgChangePop").hide();
    });

    $(function () {
        var textinput2 = $(".tag2>span").html();
        var i=0;
        $(".recommended_tag2 ul li").each(function () {
            var textli = $(this).find("a").html();
            var flag = false;
            var elem = null,t;
            var arr = [];
            var rsObj = {};
            $(this).find("a").on("click",function () {
                var $li = $(".tag2").length-1;
                elem=this[i];
                if($li < 5 && !flag){
                    if(!rsObj[elem] && !t){
                        $('<span class="tag2"> <span> textinput </span> <a href="javascript:;">X</a> </span>').prependTo(".tagsinput2");
                        textinput2 = $(".tag2").eq(i).find('span').html(textli);
                        arr.push(elem);
                        rsObj[elem] = true;
                    }else {
                        alert("标签不能重复")
                    }

                }else{
                    flag = true;
                    alert("不超过6个标签")
                }

                $(".tagsinput2 .tag2").each(function () {
                    $(this).find('a').click(function (e) {
                        e.stopPropagation();
                        t=$(this).parent().siblings();
                        flag = false;
                        rsObj[elem] = false;
                        $(this).parent().remove();
                    })
                })

            })
        });

    });
    $(function () {
        $(".tagsinput2").click(function () {

            $(".recommended_tag2").show();
        });
        $(".recommended_tag2>i").click(function () {
            $(".recommended_tag2").hide();
        })
    });
    //    修改封面图片剪切
    $(".modify-face-btn").click(function () {
        $(".all-bg").css("display","block");
    });

    $(".close-btn").click(function () {
        $(".all-bg").css("display","none");
    });
</script>

<!--修改封面弹框-->
<script>
    $(function () {
        $(".modify-face-btn").click(function () {
            $(".all-bg").css("display","block");
        });

        $(".close-btn,.cutPicDelete").click(function () {
            $(".all-bg").css("display","none");
        });
    })
</script>

<!--预览-->
<script>
    var pageIndex = 0;
    var pageCount = 0;
    var pagesize = 10;
    //    图片预览
    function prelook(ele) {
        $('.lookPop .hideval').val('');
        $('.lookPop .hideval').val($(ele).attr('data-val'));
        $('.lookPop ul').html('');
        $.ajax({
            data : {
                'val' : $(ele).attr('data-val'),
            },
            url : "<?php echo U('Works/preLook');?>",
            type : 'GET',
            success : function(data){
                console.log(data);
                var str = '';
                if(data.status == 1){
                    pageCount = data.count;
                    var data = {
                        page:1,
                        pagesize:pagesize,
                        val:$(ele).attr('data-val'),
                    };
                    getPage(data);
                    $('.page-box .M-box').pagination({
                        totalData:pageCount,
                        showData:10,
                        coping:true,
                        jump: true,
                        callback:function(api){
                            var data = {
                                page: api.getCurrent(),
                                pagesize:pagesize,
                                val:$('.lookPop .hideval').val(),
                            };
                            getPage(data);
                        }
                    });
                } else {
                    str = 'data null!';
                }
                $('.lookPop ul').append(str);
            },
            error : function(){
                alert("网络错误！");
            }
        });
        //漫画预览分页
        function getPage(data) {
            $('.lookPop ul').html('');
            $.ajax({
                data : {'data' : data},
                url : "<?php echo U('Works/getLook');?>",
                type : 'GET',
                success : function(data){
                    console.log(data);
                    var str = '';
                    $.each(data.data,function(i,obj){
                        str += '<li><img src="'+ obj.path +'" alt=""></li>';
                    });
                    $('.lookPop ul').append(str);
                },
                error : function(){
                    alert("网络错误！");
                }
            });  
        }

        $(".picturePop,.lookPop").show();
    }
    //  ×掉
    $(".picClose").click(function () {
        $(".picturePop,.lookPop") .hide();
    });
</script>

<!--下载-->
<script>
    function uploaddown(ele) {
        $('.uploadPop .hideval').val('');
        $('.uploadPop .hideval').val($(ele).attr('data-val'));
        $('.uploadPop .wrapBox').html('');
        $.ajax({
            data : {
                'val' : $(ele).attr('data-val'),
            },
            url : "<?php echo U('Works/getDownlist');?>",
            type : 'GET',
            success : function(data){
                console.log(data);
                var str='';
                if(data.status ==1 ){
                    $.each(data.data,function(i,obj){
                        str += '<li><a href="javascript: void(0);"><button type="button" value="'+ obj.authornumber +'">'+ obj.section +'</button></a></li>';
                    });
                } else {
                    str = 'data null!';
                }
                $('.uploadPop .wrapBox').append(str);
            },
            error : function(){
                alert("网络错误！");
            }
        });
        $(".picturePop,.uploadPop").show();
    }
    //全局定义下载列表数组
    var downArray = new Array();
    public function uploadSure(ele){
        var val = $('.uploadPop .hideval').val();
        var downArray = [];

        $(".wrapBox li>a>button").each(function(i) {
            downArray[i] = $(this).val();
        });
        console.log(downArray);
        $.ajax({
            data : {
                'val' : val,
                'data' : downArray,
            },
            url : "<?php echo U('Works/downZipfile');?>",
            type : 'GET',
            success : function(data){
                console.log(data);
            },
            error : function(){
                alert("网络错误！");
            }
        });
    }
    //  ×掉
    $("#deletepop4,.close-button").click(function () {
        $(".picturePop,.uploadPop") .hide();
    });

    //    全选
    var a = 0;
    function checkAllfun() {
        a++;
        if(a % 2 == 1){
            $(".wrapBox li>a>button").css({
                "background":"#f5f5f5",
                "color":"#9d9d9d",
                "cursor": "no-drop"
            })
        }else {
            $(".wrapBox li>a>button").css({
                "background":"#fff",
                "color":"#3c3c3c"
            })
        }
    }

    $(".wrapBox li>a>button").click(function () {
        $(this).css({
            "background":"#f5f5f5",
            "color":"#9d9d9d",
            "cursor": "no-drop"
        })
    })
</script>

<!--介绍-->
<script>
    function intruduce(ele) {
		$('.intruducePop .hideval').val('');
		$('.intruducePop .hideval').val($(ele).attr('data-val'));
		//获取介绍
		$.ajax({
			data : {
				'val' : $('.intruducePop .hideval').val(),
			},
			url : "<?php echo U('Works/getSay');?>",
			type : 'GET',
			success : function(data){
				$('.intruducePop').find('textarea').val(data);
			},
			error : function(){
				alert("网络错误！");
			}
		});
        $(".picturePop,.intruducePop").show();
    }
    //  ×掉
    $("#deletepop5,.close-button").click(function () {
        $(".picturePop,.intruducePop") .hide();
    });
	//新增介绍
    $('#sendAuthor5').click(function(){
		$.ajax({
			data : {
				'val' : $('.intruducePop .hideval').val(),
				'say' : $('.intruducePop').find('textarea').val(),
			},
			url : "<?php echo U('Works/addSay');?>",
			type : 'POST',
			success : function(data){
				if(data == 1){
					$(".picturePop,.intruducePop") .hide();
					alert("保存介绍成功！");
				} else {
					alert("保存介绍失败！");
				}
			},
			error : function(){
				alert("网络错误！");
			}
		});
	});
</script>

<!--APP更新推-->
<script>
    //撤下
    function appfun(ele) {
		$('.AppUpdataPop .hideval').val('');
		$('.AppUpdataPop .hideval').val($(ele).attr('data-val'));
        $(".picturePop,.AppUpdataPop").show();
    }
    //    ×掉和取消
    $(".AppUpdataPop .close-button,#deletepop6").click(function () {
        $(".picturePop,.AppUpdataPop").hide();
    });
    //app推送
    $('#sendAuthor6').click(function(){
		$.ajax({
			data : {
				'val' : $('.AppUpdataPop .hideval').val(),
			},
			url : "<?php echo U('Works/appShow');?>",
			type : 'POST',
			success : function(data){
				if(data == 1){
					alert('推送成功！');
					$(".picturePop,.AppUpdataPop").hide();
				} else if(data == 0) {
					alert('推送失败！');
				} else if(data == 2) {
					alert('已经推送！');
					$(".picturePop,.AppUpdataPop").hide();
				}
			},
			error : function(){
				alert("网络错误！");
			}
		});
	});
</script>

<!--删除-->
<script>
    //撤下
    $('.deletefun').click(function(){
        $(".picturePop,.deletePop").show();
        var hiddenedvals = $(this).attr('data-delid');
        $('#sendAuthor7').click(function(){
            var hiddenedval = hiddenedvals;
            $.post(
                "<?php echo U('Admin/Works/comicdel');?>",
                {"hiddenedval":hiddenedval},
                function(data){
                    //alert(data);
                    if(data=="1"){
                        window.location.reload();
                    }
                    else if(data=="2"){
                        alert("操作失败,请重新操作!");
                    }
                },
                "html"
            )
        })
    });
    //    ×掉和取消
    $(".deletePop .close-button,#deletepop7").click(function () {
        $(".picturePop,.deletePop") .hide();
    });
</script>

<script type="text/javascript">
    function nexted(){
        var catidca = '';
        var status = '';
        var planed = '';
        var firstpublish = '';
        var exclusive = '';
        var totaltag= [];
        var say = '';
        var description ='';
        var announcement = '';
        var photopath = '';
        var applookphoto ='';

        //作品类别
        $(".work-type").find("input[type='radio']").each(function(){
            if($(this).is(":checked")){
                catidca = $(this).val();
            }
        });
        //创作进程
        $(".create-progress").find("input[type='radio']").each(function(){
            if($(this).is(":checked")){
                status = $(this).val();
            }
        });
        //更新计划
        $(".updataplan").find("input[type='radio']").each(function(){
            if($(this).is(":checked")){
                planed = $(this).val();
            }
        });
        //首发状态
        $(".published-state").find("input[type='radio']").each(function(){
            if($(this).is(":checked")){
                firstpublish = $(this).val();
            }
        });
        //版权状态
        $(".copyright-state").find("input[type='radio']").each(function(){
            if($(this).is(":checked")){
                exclusive = $(this).val();
            }
        });
        //标签
        $(".tagsinput2 .tag2").each(function(i) {
            totaltag[i] = $(this).children('span').html();
        });
        //一句话介绍
        say = $('.comicintro').find("input").val();
        //作者公告
        announcement = $('.author-notice').find("textarea").val();
        //作品简介
        description = $('.work-description').find("textarea").val();
        //封面图片
        photopath = $('.modify-work-face').find("img").attr('src');
        //app封面图片
        applookphoto = $('.phonePic').find("img").attr('src');
            
        if(say>23 || say==0){       
            alert("一句话简介限23字以内!");
            return false;
        } else if(description < 10){
            alert("作品简介请输入10-500个字!");
            return false;
        } else if(status==undefined){                                          
            alert("请选择创作进程");
            return false;
        } else if(planed==undefined){                       
            alert("请选择更新计划");
            return false;
        } else if(catidca==undefined){
            alert("请选择作品类别");
            return false;
        } else if(totaltag==""){
            alert("请选择作品标签.");
            return false;
        } else if(announcement==""){
            alert("请填写作者公告.");
            return false;
        } else if(photopath==undefined){
            alert("请上传封面图片.");
            return false;
        } else if(applookphoto==undefined){ 
            alert("请上传封面图片，谢谢!");
            return false;
        } else {
            $.ajax({
                data : {
                    'val' : $('.msgChangePop .hideval').val(),
                    'catidca' : catidca,
                    'status' : status,
                    'planed' : planed,
                    'firstpublish' : firstpublish,
                    'exclusive' : exclusive,
                    'totaltag' : totaltag,
                    'say' : say,
                    'description' : description,
                    'announcement' : announcement,
                    'photopath' : photopath,
                    'applookphoto' : applookphoto,
                },
                url : "<?php echo U('Works/updateComin');?>",
                type : 'POST',
                success : function(data){
                    if(data == 1){
                        $(".picturePop,.msgChangePop").hide();
                        alert("保存信息成功！");
                    } else {
                        alert("保存信息失败！");
                    }
                },
                error : function(){
                    alert("网络错误！");
                }
            });    
        }
    }                                                                      
</script>

<!-- 移除信息修改标签 -->
<script type="text/javascript">
    function remove(obj){
        $(obj).parent(".tag2").remove();
    }
</script>

</html>
<!-- 图片上传 -->
<script type="text/javascript">
    function changeFace(){
        XHRUploader.init({
            handlerUrl:'/Api/Base/Uploadface',
            input: '_imgs[]'
        }).uploadFile('changeFace', {
            'partition' : 'date',
            'space'     : 'article.image',
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
                    //alert(ret.data);
                    $("#alertid").html("您的图片不符合规范,参数错误");
                    $(".tipPop").css("display","block");
                    $(myCount());
                }
                else if(ret.info=="2"){
                    //alert(ret.data);
                    $("#alertid").html("您的图片不符合规范,上传错误");
                    $(".tipPop").css("display","block");
                    $(myCount());
                }
                else if(ret.info=="3"){
                    //alert(ret.data);
                    var html = '<img  style="float:left;"  src="'+ret.data+'" width=250 height=141>';
                    $("#appgraph").html("");
                    $("#appgraph").prepend(html);
                    var htmlone ='<input type="hidden" name="hidden" id="applookphoto" value="'+ret.data+'">';
                    $("#fixphoto").html("");
                    $("#fixphoto").html(htmlone);
                }
                else if(ret.info=="4"){
                    //alert(ret.data);
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

<!-- 图片上传+截图 -->
<script type="text/javascript">
    //插件截图
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
                    width:Math.round(rx * $("#target").width()) + "px", //预览图片宽度为计算比例值与原图片宽度的乘积
                    height:Math.round(rx * $("#target").height()) + "px",   //预览图片高度为计算比例值与原图片高度的乘积
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
    //异步上传
    XHRUploader.init({
        handlerUrl:'/Api/Base/Upload',
        input: '_imgs[]'
    }).uploadFile('uploadpic', {
        'partition' : 'date',
        'space'     : 'article.image',
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
    function confirmOk(){
        var x = $("#x").val();
        var y = $("#y").val();
        var w = $("#w").val();
        var h = $("#h").val();
        var z = $("#z").val();
           if(x!=""){
                 $.post(
                '/Api/Base/cropsubmit',
                {"x":x,"y":y,"w":w,"h":h,"z":z},
                function(data){
                    //alert(data);
                    if(data !=""){
                        $("#longpath").html("");  
                        var imagepath = data;  
                        var html = '<div><img src="'+data+'" style="width:157px;height:200px;"/><div>';
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
        } else {
            alert("请上传图片!");
        }
    }
</script>
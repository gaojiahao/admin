<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>作品信息-小说作品</title>
    <!--<link rel="stylesheet" href="/Public/Admin/Common/Css/public.css">-->
    <link href="/Public/Admin/Common/Css/page.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/main.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/webmallDialog.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/Public/Admin/Common/jedate/skin/jedate.css">
    <link rel="stylesheet" href="/Public/Admin/Common/Css/comicwork.css">
    <script type="text/javascript" src="/Public/Admin/Common/Js/jquery-2.2.3.js"></script>
    <script src="/Public/Admin/Common/jedate/jquery.jedate.js"></script>
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

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：作品信息-&gt;小说作品</div>

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
                        <th>字数</th>
                        <th>人气</th>
                        <th>收藏</th>
                        <th>打赏</th>
                        <th>保养</th>
                        <th>订阅</th>
                        <th>收入</th>
                        <th>操作</th>
                    </tr>

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
                            <td>5000</td>
                            <td>6</td>
                            <td>500</td>
                            <td>500</td>
                            <td>500</td>
                            <td>详情</td>
                            <td>详情</td>
                            <td>详情</td>
                            <td align="center">
                                <a href="javascript:;" onclick="putaway(this)" style="text-decoration:none;">上架</a>
                                |
                                <a href="javascript:;" onclick="freecharge(this)" style="text-decoration:none;">限免</a>
                                |
                                <a href="javascript:;" onclick="tally(this)" style="text-decoration:none;">标签</a>
                                |
                                <a href="javascript:;" onclick="msgchange(this)" style="text-decoration:none;">信息修改</a>
                                |
                                <a href="javascript:;" onclick="prelook(this)" style="text-decoration:none;">预览</a>
                                |
                                <a href="javascript:;" onclick="uploaddown(this)" style="text-decoration:none;">下载</a>
                                |
                                <a href="javascript:;" onclick="intruduce(this)" style="text-decoration:none;">介绍</a>
                                |
                                <a href="javascript:;" onclick="appfun(this)" style="text-decoration:none;">APP更新推</a>
                                |
                                <a href="javascript:;" onclick="deletefun(this)" style="text-decoration:none;">删除</a>
                            </td>
                        </tr>

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
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <label for="">开始上架</label>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="sendAuthor" onclick="upbookSure(this)">确定</button>
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
                    <div class="modify-images">
                        <img src="/Public/Admin/Common/imgs/comic-icon.png" alt="">
                    </div>
                    <div class="modify-face-btn anbtn">修改封面</div>
                </div>

                <div class="phonePic">
                    <div class="changePic">
                        <img src="/Public/Admin/Common/imgs/pictureicon.png" alt="">
                    </div>
                    <div class="modify-phone-btn anbtn">
                        修改封面
                        <input type="file" name="changeFace" class="changeFace">
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
                        <input name="comic" type="radio" value="">普通漫画
                        <input name="comic" type="radio" value="">条漫
                    </label>
                </div>

                <div class="create-progress inputNum juli">
                    <label><span class="sign-text">创作进程<i>*</i></span></label>
                    <label><input name="comicgress" type="radio">连载中</label>
                    <label><input name="comicgress" type="radio">已完结</label>
                </div>
                <div class="updataplan">
                    <span class="sign-text">更新计划<i>*</i></span>
                    <label><input name="comicUpdata" type="radio">周一</label>
                    <label><input name="comicUpdata" type="radio">周二</label>
                    <label><input name="comicUpdata" type="radio">周三</label>
                    <label><input name="comicUpdata" type="radio">周四</label>
                    <label><input name="comicUpdata" type="radio">周五</label>
                    <label><input name="comicUpdata" type="radio">周六</label>
                    <label><input name="comicUpdata" type="radio">周日</label>
                    <label><input name="comicUpdata" type="radio">不定</label>
                </div>
                <div class="published-state inputNum juli">
                    <label><span class="sign-text">发表状态<i>*</i></span></label>
                    <label><input name="comic-published" type="radio">次元播首发</label>
                    <label><input name="comic-published" type="radio">非次元播首发</label>
                </div>

                <div class="copyright-state inputNum juli">
                    <label><span class="sign-text">版权状态<i>*</i></span></label>
                    <label><input name="comic-copyright" type="radio">次元播签约</label>
                    <label><input name="comic-copyright" type="radio">非次元播签约</label>
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
        <span class="lst-confirm anbtn fl">确定</span>
        <span class="lst-delete anbtn fr">取消</span>
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
            <div class="picture-l"></div>
            <div class="picture-r">
                <div class="small-pic"></div>
                <p>(请注意头像预览是否清晰)</p>
            </div>
        </div>
        <div class="bot-btn">
                        <span class="p-relative">
                            <label>选择本地图片</label>
                            <input class="loacl-file p-absolute" type="file">
                        </span>
            <span>保存</span>
            <span class="cutPicDelete">取消</span>
        </div>
    </div>
</div>

<!--预览弹框-->
<div class="lookPop" style="display: none">
    <div class="picClose">
        <img src="/Public/Admin/Common/imgs/picclose.png" alt="">
    </div>
    <div class="pictureContent">
        <ul>
            <li><img src="/Public/Admin/Common/imgs/58d1fc4b1b0b9.jpg" alt=""></li>
            <li><img src="/Public/Admin/Common/imgs/58d1fc4b1b0b9.jpg" alt=""></li>
        </ul>
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
    function putaway() {
        $(".picturePop,.putAwayPop").show();
    }
    //        取消和x掉关闭弹框
    $("#deletepop,.close-button").click(function () {
        $(".picturePop,.putAwayPop").hide();
    });
</script>

<!--限免-->
<script>
    function freecharge() {
        $(".picturePop,.advicePop").show();
    }
    //        取消和x掉关闭弹框
    $(".close-button").click(function () {
        $(".picturePop,.advicePop").hide();
    })
</script>

<!--标签弹框-->
<script>
    function tally() {
        $(".picturePop,.tagPop").show();
    }
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
//                            console.log(arr)
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
</script>

<!--信息修改弹框-->
<script>
    //    点击信息修改
    function msgchange(obj) {
        $(".picturePop,.msgChangePop").show();
    }
    //        取消和x掉关闭弹框
    $(".lst-delete,.close-button").click(function () {
        $(".picturePop,.msgChangePop").hide();
    });

    $(function () {
        var textinput2 = $(".tag2>span").html();
        var i=0;
//        var array=[];
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
//                            console.log(arr)
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
    //    图片预览
    function prelook() {
        $(".picturePop,.lookPop").show();
    }
    //  ×掉
    $(".picClose").click(function () {
        $(".picturePop,.lookPop") .hide();
    });
</script>

<!--下载-->
<script>
    function uploaddown() {
        $(".picturePop,.uploadPop").show();
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
    function intruduce() {
        $(".picturePop,.intruducePop").show();
    }
    //  ×掉
    $("#deletepop5,.close-button").click(function () {
        $(".picturePop,.intruducePop") .hide();
    });
</script>

<!--APP更新推-->
<script>
    //撤下
    function appfun() {
        $(".picturePop,.AppUpdataPop").show();
    }
    //    ×掉和取消
    $(".AppUpdataPop .close-button,#deletepop6").click(function () {
        $(".picturePop,.AppUpdataPop") .hide();
    });
</script>

<!--删除-->
<script>
    //撤下
    function deletefun() {
        $(".picturePop,.deletePop").show();
    }
    //    ×掉和取消
    $(".deletePop .close-button,#deletepop7").click(function () {
        $(".picturePop,.deletePop") .hide();
    });
</script>
</html>
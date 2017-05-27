<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>漫画推荐-正在推荐-Banner</title>
    <link href="/Public/Admin/Common/Css/page.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/main.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/webmallDialog.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/Public/Admin/Common/jedate/skin/jedate.css">
    <script type="text/javascript" src="/Public/Admin/Common/Js/jquery-2.2.3.js"></script>
    <script src="/Public/Admin/Common/jedate/jquery.jedate.js"></script>
</head>
<style type="text/css">
    .pilian{display:inline-block;cursor: pointer; background:#06c; border-radius:3px; height:20px;  text-align:center; padding:0 10px; margin-left:10px; color:#fff; line-height:20px;}
    .sel{ height: 30px; width: 80px; margin-left:10px; background:#d7d7d7}
    .tr_list_page{  font-size: 12px; height: 24px; background-color: #EBEBEB; border: 1px solid #FFF;}
    .tr_list{font-size: 12px; height: 24px; background-color: #FFF; border: 1px solid #FFF;}
    .inp{ width: 300px; height: 30px; border:1px solid #666; padding-left: 5px;}
    .sub{background: #06c; padding:0 15px; height:30px; text-align: center; color: #fff; line-height: 30px; cursor: pointer; border-radius: 3px }
    a.tui{ color:#f00}
    .level-type {background: rgba(0, 0, 0, 0) none repeat scroll 0 0;border: 1px solid #ccc;padding: 5px;margin-right:20px }
    .form{ margin-bottom: 10px }
    .noticePop{
        background: rgba(0,0,0,.8)no-repeat;
    }
    .cartoon-novel{
        margin-top: 44px;
        width: 160px;
        margin-left: auto;
        margin-right: auto;
    }
    .cartoon-novel>a{
        width: 76px;
        height: 32px;
        background: #ddd;
        text-align: center;
        line-height: 32px;
        border-radius: 16px;
        -webkit-border-radius: 16px;
        -moz-border-radius: 16px;
        color: #2e2e2e;
        font-size: 14px;
        cursor: pointer;
        display: inline-block;
    }
    .cur_active{
        color: #fff !important;
        background: #69a5d4 !important;
    }

</style>
<body bgcolor="#F7F7F7">
<!--主体内容开始-->
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：漫画推荐-&gt;正在推荐-Banner</div>

    <div class="m_content">

        <div class="real_c">

            <div class="comicPart">

                <div class="s-space"></div>
                <form action="" method="get" class="form" name="search" id="list-form">
                    <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的作品名或者作者" />
                    <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
                </form>
                <p>目前Banner强推有：10篇</p>
                <p>目前主编力荐有：10篇</p>
                <p>目前强档推荐有：18篇</p>
                <p>目前福利活动推荐位有：2篇</p>
                <p>目前长幅推荐位有：1篇</p>
                <p>目前活动福利有：1篇</p>
                <p>目前长幅活动有：1篇</p>
                <div class="tab-line">
                    <a href="javascript:void(0)" class="active_tab">Banner</a>
                    |
                    <a href="../Comiceditordevice2/comiceditordevice2.html">主编力荐</a>
                    |
                    <a href="../Seasonrecommend2/seasonrecommend2.html">强档推荐</a>
                    |
                    <a href="../Wealfactivity2/wealfactivity2.html">福利活动推荐位</a>
                    |
                    <a href="../Comiclongpicture2/longpicture2.html">长幅推荐位</a>
                    |
                    <a href="../Comicactivitywealf2/comicactivitywealf2.html">活动福利</a>
                    |
                    <a href="../Comiclongactivity2/longactivity2.html">长幅活动</a>
                </div>
                <!--Banner-->
                <table class="table_content">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>书名</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>添加时间</th>
                            <th>简介</th>
                            <th>推荐次数</th>
                            <th>操作</th>
                            <th>Banner图</th>
                        </tr>


                            <tr class="tr_list">
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    2017-04-24 20:58:10
                                </td>
                                <td>
                                    <textarea name="intro" id="intro1" cols="30" rows="10" class="intro"></textarea>
                                </td>
                                <td>
                                    55
                                </td>

                                <td align="center">
                                    <div class="netState bannerBtn">
                                        <button  type="button" onclick="checksure2(this)">推荐</button>
                                        <button type="button" onclick="checkno2(this)">撤下</button>
                                    </div>
                                </td>
                                <td align="center">

                                    <button onclick="uploadImg1()" class="uploadImg uploadImg1" type="button" style="display: none">
                                        上传
                                        <input type="file" class="uploadFile">
                                    </button>
                                    <!--上传后的图片显示-->
                                    <span class="showPicture" style="width: 114px; height: 138px">
                                        <img src="/Public/Admin/Common/imgs/hot-novel.png" alt="">
                                        <div class="sp_hover">
                                            <span class="replace-picture">
                                                替换
                                                 <input type="file" class="replaceFile">
                                            </span>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr class="tr_list">
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    2017-04-24 20:58:10
                                </td>
                                <td>
                                    <textarea name="intro" id="intro2" cols="30" rows="10" class="intro"></textarea>
                                </td>
                                <td>
                                    55
                                </td>

                                <td align="center">
                                    <div class="netState bannerBtn">
                                        <button type="button" onclick="checksure2(this)">推荐</button>
                                        <button type="button" onclick="checkno2(this)">撤下</button>
                                    </div>
                                </td>
                                <td align="center">

                                    <button onclick="uploadImg2()" class="uploadImg uploadImg2" type="button" style="display: none">
                                        上传
                                        <input type="file" class="uploadFile">
                                    </button>
                                    <!--上传后的图片显示-->
                                    <span class="showPicture" style="width: 185px; height: 135px">
                                        <img src="/Public/Admin/Common/imgs/hot-novel.png" alt="">
                                        <div class="sp_hover">
                                            <span class="replace-picture">
                                                替换
                                                 <input type="file" class="replaceFile">
                                            </span>

                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr class="tr_list">
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    2017-04-24 20:58:10
                                </td>
                                <td>
                                    <textarea name="intro" id="intro3" cols="30" rows="10" class="intro"></textarea>
                                </td>
                                <td>
                                    55
                                </td>

                                <td align="center">
                                    <div class="netState bannerBtn">
                                        <button type="button" onclick="checksure2(this)">推荐</button>
                                        <button type="button" onclick="checkno2(this)">撤下</button>
                                    </div>
                                </td>
                                <td align="center">

                                    <button onclick="uploadImg3()" class="uploadImg uploadImg3" type="button" style="display: none">
                                        上传
                                        <input type="file" class="uploadFile">
                                    </button>
                                    <!--上传后的图片显示-->
                                    <span class="showPicture" style="width: 156px; height: 136px">
                                        <img src="/Public/Admin/Common/imgs/hot-novel.png" alt="">
                                        <div class="sp_hover">
                                            <span class="replace-picture">
                                                替换
                                                 <input type="file" class="replaceFile">
                                            </span>

                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr class="tr_list">
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    2017-04-24 20:58:10
                                </td>
                                <td>
                                    <textarea name="intro" id="intro4" cols="30" rows="10" class="intro"></textarea>
                                </td>
                                <td>
                                    55
                                </td>

                                <td align="center">
                                    <div class="netState bannerBtn">
                                        <button type="button" onclick="checksure2(this)">推荐</button>
                                        <button type="button" onclick="checkno2(this)">撤下</button>
                                    </div>
                                </td>
                                <td align="center">

                                    <button onclick="uploadImg4()" class="uploadImg uploadImg4" type="button" style="display: none">
                                        上传
                                        <input type="file" class="uploadFile">
                                    </button>
                                    <!--上传后的图片显示-->
                                    <span class="showPicture" style="width: 156px; height: 136px">
                                        <img src="/Public/Admin/Common/imgs/hot-novel.png" alt="">
                                        <div class="sp_hover">
                                            <span class="replace-picture">
                                                替换
                                                 <input type="file" class="replaceFile">
                                            </span>

                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr class="tr_list">
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    2017-04-24 20:58:10
                                </td>
                                <td>
                                    <textarea name="intro" id="intro5" cols="30" rows="10" class="intro"></textarea>
                                </td>
                                <td>
                                    55
                                </td>

                                <td align="center">
                                    <div class="netState bannerBtn">
                                        <button type="button" onclick="checksure2(this)">推荐</button>
                                        <button type="button" onclick="checkno2(this)">撤下</button>
                                    </div>
                                </td>
                                <td align="center">

                                    <button onclick="uploadImg5()" class="uploadImg uploadImg5" type="button">
                                        上传
                                        <input type="file" class="uploadFile">
                                    </button>
                                    <!--上传后的图片显示-->
                                    <span class="showPicture" style="display: none; width: 185px; height: 135px">
                                        <img src="/Public/Admin/Common/imgs/hot-novel.png" alt="">
                                        <div class="sp_hover">
                                            <span class="replace-picture">
                                                替换
                                                 <input type="file" class="replaceFile">
                                            </span>

                                        </div>
                                    </span>
                                </td>
                            </tr>

                        <!-- 操作按钮 -->
                        <tr>
                            <td colspan="9" style="padding-top:20px;">
                                <!--<span class="checkall-box"><input type="checkbox" id="check" /><label for="check">全选</label> </span>-->
                                <!--<span class="pilian" href="javascript:void(0)" onclick="pilian('del')">批量删除</span>-->
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
    </div>
    <div class="b_border"></div>
</div>
<!--主体内容结束-->

<!--Banner1截图开始-->
<div class="picturePop" style="display: none"></div><!--背景层-->
<div id="cutPicture1" class="comicHome " style="display: none">
    <div class="headTitle">
        图片裁剪
            <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic4"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成367x446的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="wrapPic1"></div>
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn">确定</button>
            <button type="button" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--Banner1截图结束-->

<!--Banner2截图开始-->
<div id="cutPicture2" class="comicHome " style="display: none">
    <div class="headTitle">
        图片裁剪
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic4"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成312*228的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="wrapPic2"></div>
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn">确定</button>
            <button type="button" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--Banner2截图结束-->

<!--Banner3截图开始-->
<div id="cutPicture3" class="comicHome " style="display: none">
    <div class="headTitle">
        图片裁剪
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic4"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成222*228的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="wrapPic3"></div>
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn">确定</button>
            <button type="button" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--Banner3截图结束-->

<!--Banner4截图开始-->
<div id="cutPicture4" class="comicHome " style="display: none">
    <div class="headTitle">
        图片裁剪
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic4"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成230*213的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="wrapPic4"></div>
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn">确定</button>
            <button type="button" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--Banner4截图结束-->

<!--Banner5截图开始-->
<div id="cutPicture5" class="comicHome " style="display: none">
    <div class="headTitle">
        图片裁剪
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic4"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成302x212的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="wrapPic5"></div>
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn">确定</button>
            <button type="button" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--Banner5截图结束-->

<!--撤下弹框-->
<div class="removePop" style="display: none">
    <div class="headTitle">
        撤下
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        是否确定撤下？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="sendAuthor" onclick="sendAuthor()">确定</button>
            <button type="button" class="deleteBtn" id="deletepop">取消</button>
        </div>
    </div>
</div>

<!--推荐-->
<div class="advicePop" style="display: none">
    <div class="headTitle">
        推荐
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        <span class="wstxt">推荐时间：</span><input type="text" class="workinput wicon" id="inpstart" readonly>
        <span class="wstxt">至：</span><input type="text" class="workinput wicon" id="inpend" readonly>
        <span id="timeSure" class="timeSure">确定</span>

    </div>
</div>

</body>

<!--Banner裁剪图片弹框-->
<script>
    $(".replace-picture").each(function (i) {
        $(this).click(function () {
            $(".picturePop").show();
            $(".comicHome").eq(i).show();
            $(".comicHome").eq(i).find(".close-button2,.deleteBtn").click(function () {
                $(".comicHome").eq(i).hide();
                $(".picturePop").hide();

            });
        });
    });
</script>

<!--日期-->
<script>
    var start = {
        format: 'YYYY-MM-DD',
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
        format: 'YYYY-MM-DD',
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

<!--上传-->
<script>
    function uploadImg1() {
        $(".picturePop,#cutPicture1").show();
    };
    $("#cutPicture1 .close-button2,#cutPicture1 .deleteBtn").click(function () {
        $(".picturePop,#cutPicture1").hide();
    });


    function uploadImg2() {
        $(".picturePop,#cutPicture2").show();
    };
    $("#cutPicture2 .close-button2,#cutPicture2 .deleteBtn").click(function () {
        $(".picturePop,#cutPicture2").hide();
    });
    function uploadImg3() {
        $(".picturePop,#cutPicture3").show();
    };
    $("#cutPicture3 .close-button2,#cutPicture3 .deleteBtn").click(function () {
        $(".picturePop,#cutPicture3").hide();
    });


    function uploadImg4() {
        $(".picturePop,#cutPicture4").show();
    };
    $("#cutPicture4 .close-button2,#cutPicture4 .deleteBtn").click(function () {
        $(".picturePop,#cutPicture4").hide();
    });
    function uploadImg5() {
        $(".picturePop,#cutPicture5").show();
    };
    $("#cutPicture5 .close-button2,#cutPicture5 .deleteBtn").click(function () {
        $(".picturePop,#cutPicture5").hide();
    });
</script>

<!--撤下&&×掉和取消-->
<script>
    //撤下
    function checkno2() {
        $(".picturePop,.removePop").show();
    }
    //    ×掉和取消
    $(".removePop .close-button,#deletepop").click(function () {
        $(".picturePop,.removePop") .hide();
    });


    //    推荐
    function checksure2(obj) {
        $(".picturePop,.advicePop").show();
        $(".timeSure").click(function () {
            $(".picturePop,.advicePop") .hide();
            $(obj).attr("disabled","disabled").html("已推荐").css({
                "background":"#ddd",
                "color":"#2f2f2f",
                "cursor":"no-drop"
            })
        })
    }

    //    ×掉和取消
    $(".advicePop .close-button").click(function () {
        $(".picturePop,.advicePop") .hide();

    })

</script>

</html>
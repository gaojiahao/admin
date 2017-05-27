<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>APP操作-正在推荐漫画</title>
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
    .form{ float:left; margin-bottom: 10px }
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

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：APP操作-&gt;正在推荐漫画</div>

    <div class="m_content">

        <div class="real_c">

            <div class="s-space"></div>
            <form action="" method="get" class="form" name="search" id="list-form">
                <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的作品名或者作者" />
                <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
            </form>
            <div class="cartoon-novel">
                <a class="cur_active" href="javascript:;">漫画</a>
                <a href="../Appadvicingnovel/appadvicingnovel.html">小说</a>
            </div>
            <!--漫画-->
            <div class="comicPart">
                <p>目前漫画banner有：5篇</p>
                <p>目前漫画强烈推荐有：6篇</p>
                <p>目前热门漫画连载有：6篇</p>
                <p>目前活动banner推荐位有：1篇</p>
                <p>目前活动banner有1篇</p>
                <div class="tab-line">
                    <a class="active_tab">Banner</a>
                    |
                    <a>强烈推荐</a>
                    |
                    <a>热门连载</a>
                    |
                    <a>活动banner推荐位</a>
                    |
                    <a>活动banner</a>
                </div>
                <!--Banner-->
                <table class="table_content">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>书名</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>添加时间</th>
                            <th>推荐次数</th>
                            <th>操作</th>
                            <th>Banner图</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>《守墓笔记之少年机关师漫画》</td>
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
                                    55
                                </td>

                                <td align="center">
                                    <div class="netState bannerBtn">
                                        <button type="button" onclick="checksure2(this)">推荐</button>
                                        <button type="button" onclick="checkno2(this)">撤下</button>
                                    </div>
                                </td>
                                <td align="center">

                                    <button class="uploadImg1" type="button" onclick="uploadImg1()" style="display: none">
                                        上传
                                        <input type="file" class="uploadFile">
                                    </button>
                                    <!--上传后的图片显示-->
                                    <span class="showPicture" style="width: 290px; height: 136px">
                                    <img src="/Public/Admin/Common/imgs/hot-novel.png" alt="">
                                    <div class="sp_hover">
                                        <span class="replace-picture" onclick="uploadone1(this)">
                                            替换
                                             <input type="file" class="replaceFile">
                                        </span>

                                    </div>
                                </span>
                                </td>
                            </tr><?php endforeach; endif; ?>
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
                <!--强烈推荐-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>书名</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>添加时间</th>
                            <th>推荐次数</th>
                            <th>操作</th>
                            <th>强烈推荐图</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
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
                                    55
                                </td>

                                <td align="center">
                                    <div class="netState bannerBtn">
                                        <button type="button" onclick="checksure2(this)">推荐</button>
                                        <button type="button" onclick="checkno2(this)">撤下</button>
                                    </div>
                                </td>
                                <td align="center">

                                    <button onclick="uploadImg2()" class="uploadImg1" type="button" style="display: none">
                                        上传
                                        <input type="file" class="uploadFile">
                                    </button>
                                    <!--上传后的图片显示-->
                                    <span class="showPicture" style="width: 241px; height: 136px">
                                    <img src="/Public/Admin/Common/imgs/hot-novel.png" alt="">
                                    <div class="sp_hover">
                                        <span class="replace-picture" onclick="uploadone2(this)">
                                            替换
                                             <input type="file" class="replaceFile">
                                        </span>

                                    </div>
                                </span>
                                </td>
                            </tr><?php endforeach; endif; ?>
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
                <!--热门连载-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>书名</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>添加时间</th>
                            <th>推荐次数</th>
                            <th>操作</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
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
                                    55
                                </td>

                                <td align="center">
                                    <div class="netState bannerBtn">
                                        <button type="button" onclick="checksure2(this)">推荐</button>
                                        <button type="button" onclick="checkno2(this)">撤下</button>
                                    </div>
                                </td>
                            </tr><?php endforeach; endif; ?>
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
                <!--活动banner推荐位-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>书名</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>添加时间</th>
                            <th>推荐次数</th>
                            <th>操作</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
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
                                    55
                                </td>

                                <td align="center">
                                    <div class="netState bannerBtn">
                                        <button type="button" onclick="checksure2(this)">推荐</button>
                                        <button type="button" onclick="checkno2(this)">撤下</button>
                                    </div>
                                </td>
                            </tr><?php endforeach; endif; ?>
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
                <!--活动banner-->
                <table class="table_content" style="display: none">
                    <!--<form name="goodsForm" method="post" action="#">-->
                    <tr class="tr_top">
                        <th>信息</th>
                        <th>图片</th>
                        <th>状态</th>
                        <th>时间</th>
                        <th>添加链接</th>
                        <th>操作</th>
                    </tr>

                    <!--<?php if(is_array($data)): foreach($data as $key=>$vol): ?>-->
                    <tr class="tr_list">
                        <td>次元播作者福利来啦漫画~</td>
                        <td><img src = "<?php echo ($vol["photos"]); ?>" style="width:302px;height:100px;"></td>
                        <td>
                            <div class="netState">
                                <span class="activeState">在线</span>
                                <span>离线</span>
                            </div>
                        </td>
                        <td>03/19</td>
                        <td>
                            <div class="addLink">
                                <input type="text" id="linkUrl">
                            </div>
                        </td>
                        <td align="center">
                            <!--<input class="hiddenedid" type="hidden" value="<?php echo ($vol["id"]); ?>">
                            <input class="hiddenedval" type="hidden" value="<?php echo ($vol["val"]); ?>">-->
                            <a id="editalText" class="editalText" href="javascript:;" onclick="editalText(this)" style="text-decoration:none;">编辑内容</a>
                            <a class="editalText">|</a>
                            <a class="editalText" href="javascript:;" onclick="checkno(this)"  style="text-decoration:none;">保存并上线</a>
                        </td>
                    </tr>
                    <!--<?php endforeach; endif; ?>-->
                    <!-- 操作按钮 -->
                    <tr>
                        <td style="padding-top:20px;">
                        </td>
                    </tr>

                </table>
            </div>

        </div>
    </div>
    <div class="b_border"></div>
</div>
<!--主体内容结束-->

<!--Banner截图开始-->
<div class="picturePop" style="display: none"></div><!--背景层-->
<div class="cutPicture" style="display: none">
    <div class="headTitle">
        图片裁剪
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成750x351的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="appWrapPicture"></div>
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn">确定</button>
            <button type="button" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--Banner截图结束-->

<!--Banner | 强烈推荐 | 热门连载 | 活动banner推荐位  截图开始-->
<div class="thisWeekCut" style="display: none">
    <div class="headTitle">
        图片裁剪
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成352x199的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="appWrapPicture2"></div>
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn">确定</button>
            <button type="button" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--Banner | 强烈推荐 | 热门连载 | 活动banner推荐位  截图结束-->


<!--活动banner编辑器开始-->
<div class="noticePop" style="display: none"></div><!--背景层-->
<div class="import" style="display: none">			<!--pop内容-->
    <div class="headTitle">
        活动Banner
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="real_c">

        <form name="article_add" method="post" action="">
            <table border="0" cellpadding="0" cellspacing="0" id="add_table" width="100%">
                <tr>
                    <td class="left_td">标题：</td>
                    <td class="right_td"><input type="text" name="title" class="input" value="" style="min-width:870px;width: 100%;"/></td>
                </tr>

                <tr style=" clear:both">
                    <td class="left_td">内容：</td>
                    <td class="right_td">
                        <!-- 加载编辑器的容器 -->
                        <script style="z-index: 1;" name="content" id="content" type="text/plain"></script>
                    </td>
                </tr>

                <tr>
                    <td style="text-align:center;">上传图片：</td>
                    <td style="height:200px;">
                        <input type='file' id="appPicture" class="appPicture" name="sortPicture"  onclick="uploadone3()">
                        <img src="/Public/Admin/Common/imgs/file2.png"  class="photoca" style="width: 302px;height: 100px;">
                        <div class="paths2"  id="imageadd" style="margin-top: -48px">
                            支持JPG,PNG格式，图片大小不超过2M 图片保存尺寸为：750px*247px
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <!-- 操作按钮 -->
                <tr>
                    <td colspan="8" rowspan="6" valign="bottom" align="center">
                        <div class="formHandleBox">
                            <input type="button" id="openrator" name="act" value="添加数据"/>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<!--活动banner编辑器结束-->

<!--活动banner截图开始-->
<div class="act-banner-Picture" style="display: none">
    <div class="headTitle tabLine">
        图片裁剪
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成750x247的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="app-pic"></div>
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn">确定</button>
            <button type="button" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--活动banner截图结束-->


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
    });
</script>
</body>


<!--Banner | 强烈推荐 | 热门连载 | 活动banner推荐位 | 活动banner-->
<script>
    $(".tab-line>a").each(function (i) {
        $(this).click(function () {
            $(this).addClass("active_tab").siblings().removeClass("active_tab");
            $(".table_content").eq(i).show().siblings(".table_content").hide();
        })
    })
</script>

<!--Banner裁剪图片弹框-->
<script>
    function uploadone1(obj) {
        $(".picturePop,.cutPicture").show();
    }
    //    取消和关闭按钮
    $(".close-button2,.deleteBtn").click(function () {
        $(".picturePop,.cutPicture").hide();
    });
</script>

<!--强烈推荐 | 热门连载 | 活动banner推荐位 | 活动banner 裁剪图片弹框-->
<script>
//  强烈推荐 | 热门连载 | 活动banner推荐位
    function uploadone2(obj) {
        $(".picturePop,.thisWeekCut").show();
    }
    //    取消和关闭按钮
    $(".close-button2,.deleteBtn").click(function () {
        $(".picturePop,.thisWeekCut").hide();
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
        $(".picturePop,.cutPicture").show();
    };
    $(".close-button2,.deleteBtn").click(function () {
        $(".picturePop,.cutPicture").hide();
    });

    function uploadImg2() {
        $(".picturePop,.cutPicture").show();
    };
    $(".close-button2,.deleteBtn").click(function () {
        $(".picturePop,.cutPicture").hide();
    });
</script>

<!--推荐和撤下-->
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

<!--活动banner点击编辑内容弹框||关闭弹框-->
<script>
    function editalText(obj) {
        $(".noticePop,.import").show();
    };

    //    关闭弹框
    $(".close-button").click(function () {
        $(".noticePop,.import").hide();
    });

    //    活动banner 裁剪图片弹框
    function uploadone3() {
        $(".picturePop,.act-banner-Picture").show();
    }
    //    取消和关闭按钮
    $(".close-button2,.deleteBtn").click(function () {
        $(".picturePop,.act-banner-Picture").hide();
    });


//    在线与离线状态切换
    $(".netState>span").each(function () {
        $(this).click(function () {
            $(this).addClass("activeState").siblings().removeClass("activeState");
        })
    })

</script>
</html>
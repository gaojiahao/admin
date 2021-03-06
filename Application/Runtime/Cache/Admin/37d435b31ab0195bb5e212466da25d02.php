<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>漫画推荐-活动福利</title>
    <link href="/Public/Admin/Common/Css/page.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/main.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/webmallDialog.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/Common/Js/jquery-2.2.3.js"></script>
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
    .checkall-box{ float:left;}
    .pilian{float: left; margin-top:10px;}

    .re_page2{ width:auto; height:30px; padding-right:10px; padding-top:10px; text-align:center;}
    .re_page2 a { text-decoration: none;color: #fff;
        border:none; padding: 5px; background:#febf51;margin-left:10px;width:auto;border-radius: 6px}
    .re_page2 span {border: 1px solid #ccc; padding: 5px 12px; color: #853645;}
    .cartoon-novel{
        margin-top: 44px;
    }
    .cartoon-novel>span{
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
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：漫画推荐-&gt活动福利:</div>

    <div class="m_content">
        <div class="real_c">
            <div class="s-space"></div>
            <form action="" method="get" class="form" name="search" id="list-form">
                <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的作品或者作者" />
                <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
            </form>
            <table class="table_content">
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
                    <td>次元播作者福利来啦~</td>
                    <td><img src = "<?php echo ($vol["photos"]); ?>" style="width:188px;height:160px;"></td>
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
                        <a id="editalText" class="editalText" href="javascript:;" onclick="editalText()" style="text-decoration:none;">编辑内容</a>
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
    <div class="b_border"></div>
    <div class="addHeadNotice">
        <div class="publicNotice" onclick="publicNotice()">
            添加福利活动
        </div>
    </div>
</div>

<!--活动福利弹框-->
<div class="noticePop" style="display: none"></div><!--背景层-->
<!--编辑器-->
<div class="import" style="display: none">			<!--pop内容-->
    <div class="headTitle">
        福利活动
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

                <tr>
                    <td style="text-align:center;">上传图片：</td>
                    <td style="height:200px;">
                        <input type='file' id="sortPicture2" class="sortPicture2" name="sortPicture"  onclick="uploadone()">
                        <img src="/Public/Admin/Common/imgs/file2.png"  class="photoca" style="width: 307px;height: 258px;">
                        <div class="paths2"  id="imageadd">
                            支持JPG,PNG格式，图片大小不超过2M 图片保存尺寸为：307px*258px
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
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

<!--截图开始-->
<div class="picturePop" style="display: none"></div><!--背景层-->
<div class="cutPicture" style="display: none">
    <div class="headTitle">
        图片裁剪
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成307x258的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="wrapPicture5"></div>
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn">确定</button>
            <button type="button" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--截图结束-->

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

<!--裁剪图片弹框-->
<script>
    function uploadone() {
        $(".picturePop,.cutPicture").show();
    }
    //    取消和关闭按钮
    $(".close-button2,.deleteBtn").click(function () {
        $(".picturePop,.cutPicture").hide();
    });
</script>
</html>
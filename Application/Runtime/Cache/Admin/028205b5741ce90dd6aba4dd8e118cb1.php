<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>大神动态</title>
    <link href="../Common/Css/page.css" rel="stylesheet" type="text/css"/>
    <link href="../Common/Css/main.css" rel="stylesheet" type="text/css"/>
    <link href="../Common/Css/webmallDialog.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../Common/Js/jquery-2.2.3.js"></script>
</head>
<body bgcolor="#F7F7F7">
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：公司动态-&gt大神动态:</div>

    <div class="m_content">
        <div class="real_c">
            <table class="table_content">
                <!--<form name="goodsForm" method="post" action="#">-->
                <tr class="tr_top">
                    <th>作者</th>
                    <th>代表作品</th>
                    <th>头像</th>
                    <th>内容</th>
                    <th>状态</th>
                    <th>添加链接</th>
                    <th>操作</th>
                </tr>

                <!--<?php if(is_array($data)): foreach($data as $key=>$vol): ?>-->
                <tr class="tr_list">
                    <td>安静</td>
                    <td>《头牌主播》</td>
                    <td><img src = "<?php echo ($vol["photos"]); ?>" style="width:100px;height:100px;"></td>
                    <td align="center">
                        <p style="width: 326px;margin: 0 auto;text-align: left; overflow: hidden">
                            直播，最爱女孩欢迎，也是女孩们最容易出名出位的发娱乐窗口。网红女主播们清纯可人、美丽俏佳、收入不菲...他们的台前幕后，发生了怎样引人窥探的故事呢？
                            “上位潜规则”这滩水到底有多深呢？
                        </p>
                    </td>
                    <td>
                        <div class="netState">
                            <span class="activeState">在线</span>
                            <span>离线</span>
                        </div>
                    </td>
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
                        <a class="editalText" href="javascript:;"  style="text-decoration:none;">保存并上线</a>
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
        <div class="publicNotice" onclick="publicNotice2()">
            添加大神动态
        </div>
    </div>
</div>

<!--滚屏图推弹框-->
<div class="noticePop" style="display: none"></div><!--背景层-->
<!--编辑器-->
<div class="import" style="display: none">			<!--pop内容-->
    <div class="headTitle">
       大神动态
        <i class="close-button"><img src="../Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="real_c">

        <form name="article_add" method="post" action="">
            <table border="0" cellpadding="0" cellspacing="0" id="add_table" width="100%">
                <tr>
                    <td class="left_td">作者：</td>
                    <td class="right_td"><input type="text" name="title" class="input" value="" style="min-width:870px;width: 100%;"/></td>
                </tr>
                <tr>
                    <td class="left_td">代表作品：</td>
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
                    <td style="height: 200px">
                        <input type='file' id="godPicture" class="sortPicture" name="sortPicture"  onclick="uploadone()">
                        <img src="../Common/imgs/file1.png"  class="god-avatar">
                        <div class="god-paths"  id="imageadd">
                            支持JPG,PNG格式，图片大小不超过2M 图片保存尺寸为：369px*136px
                        </div>
                    </td>
                </tr>

                <!-- 操作按钮 -->
                <tr>
                    <td colspan="4" rowspan="6" valign="bottom" align="center">
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
        <i class="close-button2"><img src="../Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="cut-pic-content">
        <div class="choosePic2"></div>
        <div class="after-cut-picture">
            <p>您上传的图片将自动生成100x100的尺寸，<br>
                请注意图片是否清晰
            </p>
            <div class="wrapPicture4"></div>
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
<script type="text/javascript" src="../Common/ueditor.config.js"></script>
<script src="../Common/_examples/editor_api.js"></script>
<script src="../Common/lang/zh-cn/zh-cn.js"></script>
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
    function publicNotice2() {
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
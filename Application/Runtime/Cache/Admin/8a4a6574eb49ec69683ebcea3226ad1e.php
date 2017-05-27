<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>新增作品审核</title>
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
    .noticePop{
        background: rgba(0,0,0,.8)no-repeat;
    }

</style>
<body bgcolor="#F7F7F7">
<!--主体内容开始-->
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：新增许哦品审核-&gt;新增漫画</div>

    <div class="m_content">

        <div class="real_c">

            <div class="s-space"></div>
            <form action="" method="get" class="form" name="search" id="list-form">
                <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的作品名或者作者" />
                <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
            </form>
            <table class="table_content">
                <form name="goodsForm" method="post" action="">
                    <tr class="tr_top">
                        <th>作品编号</th>
                        <th>漫画名称</th>
                        <th>作者ID</th>
                        <th>章节名称</th>
                        <th>更新时间</th>
                        <th>封面</th>
                        <th>内容</th>
                        <th>状态</th>
                        <th>审核</th>
                    </tr>



                        <tr class="tr_list">
                            <td>01</td>
                            <td>

                                    《我根本不是主角啊喂》

                            </td>

                            <td>

                                    呃酱

                            </td>

                            <td>

                                    01花轻柔

                            </td>
                            <td>

                                    　2017-04-17 13:38:55

                            </td>
                            <td>

                                    <img src="/Public/Admin/Common/imgs/58d1fc4b1b0b9.jpg"  sb="<?php echo ($date["id"]); ?>" height="140" width="100">

                            </td>

                            <td>

                                <img src="/Public/Admin/Common/imgs/58d1fc4b1b0b9.jpg" sb="<?php echo ($date["id"]); ?>" height="170" width="95">

                            </td>
                            <td>新增</td>

                            <td align="center">

                                <a href="javascript:;" onclick="checksure(this)" style="text-decoration:none;">通过</a>
                                |
                                <a href="javascript:;" onclick="checkno(this)" style="text-decoration:none;">驳回</a>
                                |
                                <a href="javascript:;" onclick="relook(this)" style="text-decoration:none;">网页预览</a>
                            </td>

                        </tr>


                    <tr>
                        <td colspan="9" style="padding-top:20px;">

                        </td>
                    </tr>
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
<!--主体内容结束-->

<!--通过后弹出奖励金额-->
<div class="noticePop" style="display: none"></div>      <!--背景层-->
<div class="avadarPop" style="display: none">
    <div class="headTitle">
        奖励金额
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="textareaBox">
        <textarea placeholder="请输入奖励金额，额度为10-10元" name="backreason" id="backreason"></textarea>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" id="surePop" class="sureBtn">确定</button>
            <button type="button" id="deleteBtn" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--驳回后弹出框-->
<div class="backPop" style="display: none">
    <div class="headTitle">
        驳回
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="textareaBox">
        <textarea placeholder="请输入您驳回的原因"></textarea>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="sendAuthor">确定</button>
            <button type="button" class="deleteBtn" id="deletepop">取消</button>
        </div>
    </div>
</div>

<!--图片预览-->
<div class="lookPop" style="display: none">
    <div class="picClose">
        <img src="/Public/Admin/Common/imgs/picclose.png" alt="">
    </div>
    <div class="pictureContent">
        <ul>
            <li><img src="imgs/58d1fc4b1b0b9.jpg" alt=""></li>
            <li><img src="imgs/58d1fc4b1b0b9.jpg" alt=""></li>
        </ul>
    </div>
</div>
<script>
//通过
    function checksure() {
        $(".noticePop,.avadarPop").show();
    }
//    ×掉和取消
    $(".avadarPop .close-button,#deleteBtn").click(function () {
       $(".noticePop,.avadarPop") .hide();
    });



//    驳回
    function checkno() {
        $(".noticePop,.backPop").show();
    }
//    ×掉和取消
    $(".backPop .close-button,#deletepop").click(function () {
        $(".noticePop,.backPop") .hide();
    });


//    图片预览
    function relook() {
        $(".noticePop,.lookPop").show();
    }
//  ×掉
    $(".picClose").click(function () {
        $(".noticePop,.lookPop") .hide();
    });
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>提现申请</title>
    <link href="/Public/Admin/Common/Css/page.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/main.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/webmallDialog.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/Common/Js/jquery-2.2.3.js"></script>
</head>
<body bgcolor="#F7F7F7">
<!--主体内容开始-->
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：提现申请-&gt;提现详情</div>

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
                        <td>作者电话</td>
                        <td>姓名</td>
                        <td>身份证号</td>
                        <td>账户</td>
                        <td>银行</td>
                        <td>分行</td>
                        <td>金额</td>
                        <td>订单号</td>
                        <td>提现时间</td>
                        <td>状态</td>
                        <td>操作</td>
                    </tr>

                    <!--<?php if(is_array($tempsent)): foreach($tempsent as $k=>$vo): ?>-->

                    <tr class="tr_list">
                        <td><?php echo ($vol["telephone"]); ?></td>
                        <td><?php echo ($vol["name"]); ?></td>
                        <td><?php echo ($vol["idcard"]); ?></td>
                        <td><?php echo ($vol["banknumber"]); ?></td>
                        <td><?php echo ($vol["bankind"]); ?></td>
                        <td><?php echo ($vol["homebank"]); ?></td>
                        <td><?php echo ($vol["money"]); ?></td>
                        <td><?php echo ($vol["ordernumber"]); ?></td>
                        <td><?php echo ($vol["time"]); ?></td>
                        <td>
                            <?php if(($vol["status"]) == "1"): ?>提现中<?php endif; ?>
                            <?php if(($vol["status"]) == "2"): ?>已支付<?php endif; ?>
                        </td>
                        <td onclick="checksure(this)" did="<?php echo ($vol["id"]); ?>" style="cursor: pointer;">确认支付</td>
                    </tr>
                    <!--<?php endforeach; endif; ?>-->
                    <!-- 操作按钮 -->
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

<!--通过后弹出-->
<div class="noticePop" style="display: none"></div>      <!--背景层-->
<div class="agreePop" style="display: none">
    <div class="headTitle tabLine">
        同意
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText" id="bannerText">
        是否确认支付？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" id="surePop" class="sureBtn">确定</button>
            <button type="button" id="deleteBtn" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
</body>

<script>
    //同意
    function checksure(obj) {
        $(".noticePop,.agreePop").show();
    }


    //    ×掉和取消
    $(".agreePop .close-button,#deleteBtn").click(function () {
        $(".noticePop,.agreePop") .hide();
    });

</script>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>福利申请</title>
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

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：福利申请-&gt;小说</div>

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
                        <th>小说名称</th>
                        <th>作者ID</th>
                        <th>最近更新时间</th>
                        <th>封面</th>
                        <th>字数</th>
                        <th>页数</th>
                        <th>申请时间</th>
                        <th>操作</th>
                    </tr>

                    <!--<?php if(is_array($tempsent)): foreach($tempsent as $k=>$vo): ?>-->

                    <tr class="tr_list">
                        <td>01</td>
                        <td>
                            <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                            《我根本不是主角啊喂》
                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                        </td>

                        <td>
                            <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                            呃酱
                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                        </td>

                        <td>
                            <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                            　2017-04-17 13:38:55
                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                        </td>
                        <td>
                            <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                            <!--<input id="lookphoto<?php echo ($date["id"]); ?>" type="hidden" value="<?php echo ($date["path"]); ?>">-->
                            <img src="../Newcreasework/imgs/58d1fc4b1b0b9.jpg"  sb="<?php echo ($date["id"]); ?>" height="140" width="100">
                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                        </td>
                        <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->

                        <td>8</td>
                        <th>10</th>
                        <td>
                            <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                            　2017-04-19 13:38:55
                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                        </td>
                        <td align="center">
                            <!--<input class="hiddenedid" type="hidden" value="<?php echo ($date["id"]); ?>">-->
                            <!--<input class="hiddenedusername" type="hidden" value="<?php echo ($date["username"]); ?>">-->
                            <!--<input class="hiddenedval" type="hidden" value="<?php echo ($date["val"]); ?>">-->
                            <!--<input class="numbers" type="hidden" value="<?php echo ($date["numbers"]); ?>">-->
                            <a href="javascript:;" onclick="checksure(this)" style="text-decoration:none;">同意并标注完结</a>
                            |
                            <a href="javascript:;" onclick="checkno(this)" style="text-decoration:none;">驳回</a>

                        </td>
                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                        <!--</volist>-->
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
    <div class="textareaBox">
        <div class="tipSendText">作者大大您好，恭喜您，您的作品《我根本不是主角啊喂》已通过福利申请，
            将获得【】元福利稿费，我们将在每月10日前将稿费打入后台，请保持更新和创作，次元播动漫将与你同行！
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" id="surePop" class="sureBtn">发送给作者</button>
            <button type="button" id="deleteBtn" class="deleteBtn">取消</button>
        </div>
    </div>
</div>
<!--驳回后弹出框-->
<div class="disagreePop" style="display: none">
    <div class="headTitle tabLine">
        驳回
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="textareaBox">
        <div class="tipSendText">作者大大您好，很遗憾的通知您，您的作品《我根本不是主角啊喂》暂时未通过我们的完结申请，
            原因是【<i></i> 】，请继续加油创作，下次在申请，次元播动漫将与你同行！
        </div>
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="sendAuthor">驳回给作者</button>
            <button type="button" class="deleteBtn" id="deletepop">取消</button>
        </div>
    </div>
</div>


<script>
    //同意
    function checksure() {
        $(".noticePop,.agreePop").show();
    }
    //    ×掉和取消
    $(".agreePop .close-button,#deleteBtn").click(function () {
        $(".noticePop,.agreePop") .hide();
    });



    //    驳回
    function checkno() {
        $(".noticePop,.disagreePop").show();
    }
    //    ×掉和取消
    $(".disagreePop .close-button,#deletepop").click(function () {
        $(".noticePop,.disagreePop") .hide();
    });

</script>
</body>
</html>
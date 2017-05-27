<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>福利活动推荐位</title>
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
<!--主体内容开始-->
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：漫画推荐-&gt;福利活动推荐位</div>

    <div class="m_content">

        <div class="real_c">

            <div class="s-space"></div>
            <form action="" method="get" class="form" name="search" id="list-form">
                <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的作品或者作者" />
                <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
            </form>

            <!--漫画-->
            <table class="table_content">
                <form name="goodsForm" method="post" action="#">
                    <tr class="tr_top">
                        <td>书名</td>
                        <td>作者</td>
                        <td>封面</td>
                        <td>添加时间</td>
                        <td>推荐次数</td>
                        <td>操作</td>
                    </tr>


                        <tr class="tr_list">
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
                                <input class="hiddenedid" type="hidden" value="<?php echo ($vol["id"]); ?>">
                                <input class="hiddenpath" type="hidden" value="<?php echo ($vol["photopath"]); ?>">
                                <!--<div style="height:25px;line-height:25px;background:#FFA500;border-radius:5px;"><a href="/admin/Bannar/resetd?id=<?php echo ($vol["id"]); ?>" style="text-decoration:none;">取消</a></div>-->

                                <!--<div onclick="checkno(this)" style="height:25px;line-height:25px;margin-top:5px;background:#FFC0CB;border-radius:5px;"><a style="text-decoration:none;" >bannar</a></div>-->
                                <div class="netState bannerBtn">
                                    <button type="button" onclick="checksure(this)">推荐</button>
                                    <button type="button" onclick="checkno(this)">撤下</button>
                                </div>
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
    <div class="b_border"></div>
</div>
<!--主体内容结束-->


<div class="picturePop" style="display: none"></div><!--背景层-->
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

<!--漫画-->
<script>
    //撤下
    function checkno() {
        $(".bannerBtn>button").css("border","none");
        $(".picturePop,.removePop").show();
    }
    //    ×掉和取消
    $(".removePop .close-button,#deletepop").click(function () {
        $(".picturePop,.removePop") .hide();
    });


    //    推荐
    function checksure(obj) {
        $(".bannerBtn>button").css("border","none");
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
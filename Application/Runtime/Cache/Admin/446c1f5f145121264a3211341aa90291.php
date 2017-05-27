<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>作者数据</title>
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

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：作者数据-&gt;作者数据</div>

    <div class="m_content">

        <div class="real_c">

            <div class="s-space"></div>
            <div class="comicPart">
                <form action="" method="get" class="form" name="search" id="list-form">
                    <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的作品名或者作者" />
                    <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
                </form>
                <!--作者数据-->
                <div class="data-statistics" style="margin-top: 20px">
                    <p>作者总量：558位</p>
                    <p>每日新增作者：2位</p>
                    <p>周新增作者：14位</p>
                    <p>月新增作者：60位</p>
                </div>
                <!--作者数据-->
                <table class="table_content">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>序列号</th>
                            <th>ID</th>
                            <th>注册时间</th>
                            <th>QQ</th>
                            <th>邮箱</th>
                            <th>手机</th>
                            <th>作品数量</th>
                            <th>完结数量</th>
                            <th>分成收益</th>
                            <th>操作</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>01</td>
                                <td>
                                    <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                                    蓝瘦香菇
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                </td>

                                <td>
                                    <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                                    　2017-04-17 13:38:55
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                </td>

                                <td>
                                    <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                                    645897855
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                </td>
                                <td>
                                    <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                                    <!--<input id="lookphoto<?php echo ($date["id"]); ?>" type="hidden" value="<?php echo ($date["path"]); ?>">-->
                                    645891855@qq.com
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                </td>
                                <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->

                                <td>13606987145</td>
                                <th>10</th>
                                <td>
                                    <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                                    　345
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                </td>
                                <td align="center">
                                    <a href="javascript:void(0);"  onclick="detailfun()" style="text-decoration:none;">详情</a>
                                </td>
                                <td align="center">
                                    <!--<input class="hiddenedid" type="hidden" value="<?php echo ($date["id"]); ?>">-->
                                    <!--<input class="hiddenedusername" type="hidden" value="<?php echo ($date["username"]); ?>">-->
                                    <!--<input class="hiddenedval" type="hidden" value="<?php echo ($date["val"]); ?>">-->
                                    <!--<input class="numbers" type="hidden" value="<?php echo ($date["numbers"]); ?>">-->
                                    <a href="javascript:;" onclick="collaboratefun(this)" style="text-decoration:none;">合作</a>
                                    |
                                    <a href="javascript:;" onclick="manitofun(this)" style="text-decoration:none;">大神</a>
                                    |
                                    <a href="javascript:;" onclick=" newbiefun(this)" style="text-decoration:none;">新人</a>
                                    |
                                    <a href="javascript:;" onclick=" novafun(this)" style="text-decoration:none;">新星</a>
                                    |
                                    <a href="javascript:;" onclick="deletefun(this)" style="text-decoration:none;">删除</a>

                                </td>
                                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                <!--</volist>-->
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
            </div>

        </div>
    </div>
    <div class="b_border"></div>
</div>
<!--主体内容结束-->

<!--操作弹框开始-->
<div class="picturePop" style="display: none"></div><!--背景层-->

<!--合作-->
<div class="collaboratePop" style="display: none">
    <div class="headTitle tabLine">
        合作
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定对此作者进行合作标记吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="deleteSure2" onclick="sethonorfun()">确定</button>
            <button type="button" class="deleteBtn" id="deleteBtn2">取消</button>
        </div>
    </div>
</div>

<!--大神-->
<div class="manitoPop" style="display: none">
    <div class="headTitle tabLine">
        大神
        <i class="close-button3"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定对此作者进行大神标记吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="deleteSure3" onclick="deblockfun()">确定</button>
            <button type="button" class="deleteBtn" id="deleteBtn3">取消</button>
        </div>
    </div>
</div>

<!--新人-->
<div class="newbiePop" style="display: none">
    <div class="headTitle tabLine">
        新人
        <i class="close-button4"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定对此作者进行新人标记吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="deleteSure4" onclick="cancelfun()">确定</button>
            <button type="button" class="deleteBtn" id="deleteBtn4">取消</button>
        </div>
    </div>
</div>


<!--新星-->
<div class="novaPop" style="display: none">
    <div class="headTitle tabLine">
        新星
        <i class="close-button5"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定对此作者进行新星标记吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="deleteSure5" onclick="cancelfun()">确定</button>
            <button type="button" class="deleteBtn" id="deleteBtn5">取消</button>
        </div>
    </div>
</div>

<!--删除-->
<div class="deletedPop" style="display: none">
    <div class="headTitle tabLine">
        删除
        <i class="close-button6"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定要删除此作者数据吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="deleteSure6" onclick="cancelfun()">确定</button>
            <button type="button" class="deleteBtn" id="deleteBtn6">取消</button>
        </div>
    </div>
</div>

<!--分成收益-->
<div class="detailsPop" style="display: none">
    <div class="headTitle tabLine">
        分成收益
        <i class="close-button1"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="allWealfy">
        总收益1000元
    </div>
    <div class="wealfyTab">
        <table class="wealfyHead" width="100%" border="1" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>作品</th>
                    <th>收益</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>豪门小老婆</td>
                    <td>100元</td>
                </tr>
                <tr>
                    <td>豪门小老婆</td>
                    <td>100元</td>
                </tr>
            </tbody>

        </table>
    </div>

</div>
</body>


<!--操作//合作/大神/新人/新星/分成收益-->
<script>
    //    分成收益
    function detailfun(obj) {
        $(".picturePop,.detailsPop").show();
    }
    //    取消和关闭按钮
    $(".close-button1").click(function () {
        $(".picturePop,.detailsPop").hide();
    });

    //    合作
    function collaboratefun(obj) {
        $(".picturePop,.collaboratePop").show();
    }
    //    取消和关闭按钮
    $(".close-button2,#deleteBtn2").click(function () {
        $(".picturePop,.collaboratePop").hide();
    });

    //    大神
    function manitofun(obj) {
        $(".picturePop,.manitoPop").show();
    };
    $(".close-button3,#deleteBtn3").click(function () {
        $(".picturePop,.manitoPop").hide();
    });

    //  新人
    function newbiefun(obj) {
        $(".picturePop,.newbiePop").show();
    };
    $(".close-button4,#deleteBtn4").click(function () {
        $(".picturePop,.newbiePop").hide();
    });

    //  新星
    function novafun(obj) {
        $(".picturePop,.novaPop").show();
    };
    $(".close-button5,#deleteBtn5").click(function () {
        $(".picturePop,.novaPop").hide();
    });

    //  删除
    function deletefun(obj) {
        $(".picturePop,.deletedPop").show();
    };
    $(".close-button6,#deleteBtn6").click(function () {
        $(".picturePop,.deletedPop").hide();
    });
</script>

</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>用户数据</title>
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

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：用户数据-&gt;用户数据</div>

    <div class="m_content">

        <div class="real_c">

            <div class="s-space"></div>
            <div class="comicPart">
                <form action="" method="get" class="form" name="search" id="list-form">
                    <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的作品名或者作者" />
                    <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
                </form>
            <!--漫画-->

                <div class="data-statistics clearfix">
                    <div class="dataLeft">
                        <p>用户总量：556789</p>
                        <p>单日新增：456</p>
                        <p>每月新增：2456</p>
                    </div>
                    <div class="dataRight">
                        <p>VIP用户总量：123456</p>
                        <p>VIP当日新增：123</p>
                        <p>VIP每月新增：665</p>
                    </div>

                </div>
                <div class="tab-line">
                    <a class="active_tab">用户</a>
                    |
                    <a>今日新增</a>
                    |
                    <a>本月新增</a>
                    |
                    <a>VIP新增</a>
                </div>

                <!--用户-->
                <table class="table_content">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>序列号</th>
                            <th>ID</th>
                            <th>注册时间</th>
                            <th>QQ</th>
                            <th>邮箱</th>
                            <th>手机</th>
                            <th>充值金额（次元币）</th>
                            <th>消费金额（次元币）</th>
                            <th>金币总量</th>
                            <th>消费金币</th>
                            <th>VIP天数</th>
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
                                <th>2332</th>
                                <td>
                                    <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                                    　345
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                </td>
                                <td>5689</td>
                                <td>759</td>
                                <td>还剩30天</td>
                                <td align="center">
                                    <!--<input class="hiddenedid" type="hidden" value="<?php echo ($date["id"]); ?>">-->
                                    <!--<input class="hiddenedusername" type="hidden" value="<?php echo ($date["username"]); ?>">-->
                                    <!--<input class="hiddenedval" type="hidden" value="<?php echo ($date["val"]); ?>">-->
                                    <!--<input class="numbers" type="hidden" value="<?php echo ($date["numbers"]); ?>">-->
                                    <a href="javascript:;" onclick="emperor(this)" style="text-decoration:none;">封号</a>
                                    |
                                    <a href="javascript:;" onclick="dearchive(this)" style="text-decoration:none;">解封</a>
                                    |
                                    <a href="javascript:;" onclick="cancelpop(this)" style="text-decoration:none;">删除</a>

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
                <!--今日新增-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>序列号</th>
                            <th>ID</th>
                            <th>注册时间</th>
                            <th>QQ</th>
                            <th>邮箱</th>
                            <th>手机</th>
                            <th>充值金额（次元币）</th>
                            <th>消费金额（次元币）</th>
                            <th>金币总量</th>
                            <th>消费金币</th>
                            <th>VIP天数</th>
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
                                <th>2332</th>
                                <td>
                                    <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                                    　345
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                </td>
                                <td>5689</td>
                                <td>759</td>
                                <td>还剩20天</td>
                                <td align="center">
                                    <!--<input class="hiddenedid" type="hidden" value="<?php echo ($date["id"]); ?>">-->
                                    <!--<input class="hiddenedusername" type="hidden" value="<?php echo ($date["username"]); ?>">-->
                                    <!--<input class="hiddenedval" type="hidden" value="<?php echo ($date["val"]); ?>">-->
                                    <!--<input class="numbers" type="hidden" value="<?php echo ($date["numbers"]); ?>">-->
                                    <a href="javascript:;" onclick="emperor(this)" style="text-decoration:none;">封号</a>
                                    |
                                    <a href="javascript:;" onclick="dearchive(this)" style="text-decoration:none;">解封</a>
                                    |
                                    <a href="javascript:;" onclick="cancelpop(this)" style="text-decoration:none;">删除</a>

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
                <!--本月新增-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>序列号</th>
                            <th>ID</th>
                            <th>注册时间</th>
                            <th>QQ</th>
                            <th>邮箱</th>
                            <th>手机</th>
                            <th>充值金额（次元币）</th>
                            <th>消费金额（次元币）</th>
                            <th>金币总量</th>
                            <th>消费金币</th>
                            <th>VIP天数</th>
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
                                <th>2332</th>
                                <td>
                                    <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                                    　345
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                </td>
                                <td>5689</td>
                                <td>759</td>
                                <td>还剩40天</td>
                                <td align="center">
                                    <!--<input class="hiddenedid" type="hidden" value="<?php echo ($date["id"]); ?>">-->
                                    <!--<input class="hiddenedusername" type="hidden" value="<?php echo ($date["username"]); ?>">-->
                                    <!--<input class="hiddenedval" type="hidden" value="<?php echo ($date["val"]); ?>">-->
                                    <!--<input class="numbers" type="hidden" value="<?php echo ($date["numbers"]); ?>">-->
                                    <a href="javascript:;" onclick="emperor(this)" style="text-decoration:none;">封号</a>
                                    |
                                    <a href="javascript:;" onclick="dearchive(this)" style="text-decoration:none;">解封</a>
                                    |
                                    <a href="javascript:;" onclick="cancelpop(this)" style="text-decoration:none;">删除</a>

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
                <!--VIP新增-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>序列号</th>
                            <th>ID</th>
                            <th>注册时间</th>
                            <th>QQ</th>
                            <th>邮箱</th>
                            <th>手机</th>
                            <th>充值金额（次元币）</th>
                            <th>消费金额（次元币）</th>
                            <th>金币总量</th>
                            <th>消费金币</th>
                            <th>VIP天数</th>
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
                                <th>2332</th>
                                <td>
                                    <!--<?php if(is_array($vo)): $i = 0; $__LIST__ = array_slice($vo,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$date): $mod = ($i % 2 );++$i;?>-->
                                    　345
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                </td>
                                <td>5689</td>
                                <td>759</td>
                                <td>还剩50天</td>
                                <td align="center">
                                    <!--<input class="hiddenedid" type="hidden" value="<?php echo ($date["id"]); ?>">-->
                                    <!--<input class="hiddenedusername" type="hidden" value="<?php echo ($date["username"]); ?>">-->
                                    <!--<input class="hiddenedval" type="hidden" value="<?php echo ($date["val"]); ?>">-->
                                    <!--<input class="numbers" type="hidden" value="<?php echo ($date["numbers"]); ?>">-->
                                    <a href="javascript:;" onclick="emperor(this)" style="text-decoration:none;">封号</a>
                                    |
                                    <a href="javascript:;" onclick="dearchive(this)" style="text-decoration:none;">解封</a>
                                    |
                                    <a href="javascript:;" onclick="cancelpop(this)" style="text-decoration:none;">删除</a>

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

<!--封号-->
<div class="emperorPop" style="display: none">
    <div class="headTitle tabLine">
        封号
        <i class="close-button"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定对此用户进行封号处理吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="sethonor" onclick="sethonorfun()">确定</button>
            <button type="button" class="deleteBtn" id="deletepop">取消</button>
        </div>
    </div>
</div>

<!--解封-->
<div class="dearchivePop" style="display: none">
    <div class="headTitle tabLine">
        解封
        <i class="close-button2"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定对此用户进行解封吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="deblocking" onclick="deblockfun()">确定</button>
            <button type="button" class="deleteBtn" id="deleteded">取消</button>
        </div>
    </div>
</div>

<!--删除-->
<div class="cancelPop" style="display: none">
    <div class="headTitle tabLine">
        删除
        <i class="close-button3"><img src="/Public/Admin/Common/imgs/clsoe.png" alt=""></i>
    </div>
    <div class="bannerText">
        确定要删除此用户吗？
    </div>
    <div class="sure-dele-btn">
        <div class="bottomBtn">
            <button type="button" class="sureBtn" id="deleteSure" onclick="cancelfun()">确定</button>
            <button type="button" class="deleteBtn" id="cancel">取消</button>
        </div>
    </div>
</div>
</body>



<!--用户 | 今日新增 | 本月新增 | VIP新增-->
<script>
    $(".tab-line>a").each(function (i) {
        $(this).click(function () {
            $(this).addClass("active_tab").siblings().removeClass("active_tab");
            $(".table_content").eq(i).show().siblings(".table_content").hide();
        })
    })
</script>

<!--操作//封号/解封/删除-->
<script>
//    封号
    function emperor(obj) {
        $(".picturePop,.emperorPop").show();
    }
    //    取消和关闭按钮
    $(".close-button,#deletepop").click(function () {
        $(".picturePop,.emperorPop").hide();
    });

//    解封
    function dearchive(obj) {
        $(".picturePop,.dearchivePop").show();
    };
    $(".close-button2,#deleteded").click(function () {
        $(".picturePop,.dearchivePop").hide();
    });

//  删除
    function cancelpop(obj) {
        $(".picturePop,.cancelPop").show();
    };
    $(".close-button3,#cancel").click(function () {
        $(".picturePop,.cancelPop").hide();
    });
</script>

</html>
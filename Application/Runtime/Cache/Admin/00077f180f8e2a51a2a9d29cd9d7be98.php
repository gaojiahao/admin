<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>排行榜</title>
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

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：排行榜-&gt;漫画</div>

    <div class="m_content">

        <div class="real_c">

            <div class="s-space"></div>
            <form action="" method="get" class="form" name="search" id="list-form">
                <input type="text" class="inp" value="" name="keyword" placeholder="请输入搜索的作品名或者作者" />
                <input type="button" class="sub" value="搜索" onclick="list_form_sub()"/>
            </form>
            <div class="cartoon-novel">
                <a class="cur_active" href="javascript:;">今日</a>
                <a href="javascript:;">昨日</a>
            </div>
            <!--今日-->
            <div class="comicPart">
                <p>全站漫画页数总量：1234567页</p>
                <p>全站小说字数总量：123456字</p>
                <div class="tab-line">
                    <a class="active_tab">单部作品页数量</a>
                    |
                    <a>粉丝量排行榜</a>
                    |
                    <a>包养排行榜</a>
                    |
                    <a>订阅排行榜</a>
                    |
                    <a>打赏排行榜</a>
                    |
                    <a>弹幕排行榜</a>
                    |
                    <a>评论排行榜</a>
                </div>
                <table class="table_content" >
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>1</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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

                <!--粉丝量排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                            <tr class="tr_top">
                                <th>排名</th>
                                <th>作品名称</th>
                                <th>作者</th>
                                <th>封面</th>
                                <th>状态</th>
                                <th>页数</th>
                                <th>粉丝量</th>
                                <th>包养次数</th>
                                <th>订阅次数</th>
                                <th>打赏金额</th>
                                <th>弹幕数量</th>
                                <th>评论数量</th>
                            </tr>

                            <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                    <td>2</td>
                                    <td>《守墓笔记之少年机关师小说》</td>
                                    <td>
                                        大叔阿K
                                    </td>
                                    <td>
                                        <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                    </td>
                                    <td>
                                        连载
                                    </td>
                                    <td>
                                        55000
                                    </td>
                                    <td>9993</td>
                                    <td>256978</td>
                                    <td>2532</td>
                                    <td>6532</td>
                                    <td>55520256</td>
                                    <td>75936</td>
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
                <!--包养排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>2</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--订阅排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>2</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--打赏排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>2</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--弹幕排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>2</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--评论排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>2</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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

            <!--昨日-->
            <div class="comicPart" style="display: none">
                <p>全站漫画页数总量：1234567页</p>
                <p>全站小说字数总量：123456字</p>
                <div class="tab-line">
                    <a class="active_tab">单部作品字数量</a>
                    |
                    <a>粉丝量排行榜</a>
                    |
                    <a>包养排行榜</a>
                    |
                    <a>订阅排行榜</a>
                    |
                    <a>打赏排行榜</a>
                    |
                    <a>弹幕排行榜</a>
                    |
                    <a>评论排行榜</a>
                </div>
                <!--单部作品页数量-->
                <table class="table_content" >
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>1</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--粉丝量排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>1</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K0
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--包养排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>1</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K12
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--订阅排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>1</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--打赏排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>1</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--弹幕排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>1</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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
                <!--评论排行榜-->
                <table class="table_content" style="display: none">
                    <form name="goodsForm" method="post" action="">
                        <tr class="tr_top">
                            <th>排名</th>
                            <th>作品名称</th>
                            <th>作者</th>
                            <th>封面</th>
                            <th>状态</th>
                            <th>页数</th>
                            <th>粉丝量</th>
                            <th>包养次数</th>
                            <th>订阅次数</th>
                            <th>打赏金额</th>
                            <th>弹幕数量</th>
                            <th>评论数量</th>
                        </tr>

                        <?php if(is_array($data)): foreach($data as $k=>$vol): ?><tr class="tr_list">
                                <td>1</td>
                                <td>《守墓笔记之少年机关师小说》</td>
                                <td>
                                    大叔阿K
                                </td>
                                <td>
                                    <img src ="<?php echo ($vol["photopath"]); ?>" width="100" height="140"/>
                                </td>
                                <td>
                                    连载
                                </td>
                                <td>
                                    55000
                                </td>
                                <td>9993</td>
                                <td>256978</td>
                                <td>2532</td>
                                <td>6532</td>
                                <td>55520256</td>
                                <td>75936</td>
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

</body>

<!--今日&&昨日-->
<script>
    $(".cartoon-novel>a").each(function (i) {
        $(this).click(function () {
            $(this).addClass("cur_active").siblings().removeClass("cur_active");
            $(".comicPart").eq(i).show().siblings(".comicPart").hide();
        })
    })
</script>

<!--单部作品页数量 | 粉丝量排行榜 | 包养排行榜 | 订阅排行榜 | 打赏排行榜 | 弹幕排行榜 | 评论排行榜-->
<script>
    $(".tab-line>a").each(function (i) {
        $(this).click(function () {
            $(this).addClass("active_tab").siblings().removeClass("active_tab");
            $(".table_content").eq(i).show().siblings(".table_content").hide();
        })
    })
</script>
</html>
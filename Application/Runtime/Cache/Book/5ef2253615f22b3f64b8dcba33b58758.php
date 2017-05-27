<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传章节</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/Createcomic/Mywork/Css/mywork.css">
    <link rel="stylesheet" href="/Public/Book/Mainzoneleft/Css/mainzone.css">
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/creatorzone.js"></script>
    <script src="/Public/Book/Createcomic/Mywork/Js/mywork.js"></script>
    <script src="/Public/Book/Mainzoneleft/Js/maincenter.js"></script>
    <script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<style>
.re_page2{ width:auto; height:30px; padding-right:10px; padding-top:10px; text-align:center;}
.re_page2 a { text-decoration: none; border: 1px solid #FFC0CB; padding: 5px; background:#fdc051;margin-left:10px;width:auto;border-radius:5px;}
.re_page2 span {border: 1px solid #ccc; padding: 5px 12px; color: #853645;}
</style>
<body>
<div id="main-container" class="main-container">
    <div class="mainBody">
        <div class="mainContent w1200 clearfix">
            <div class="ucentop"></div>
            <div class="creator-left fl">
                <ul class="menu">
                    <li class="list-title">
                        <span class="first-title"> <b>主创专区</b></span>
                    </li>
                    <li class="item-1 active expand">
                            <span>
                                <a href="/Book/Face/index">
                                    <i></i>
                                    我的作品
                                </a>
                            </span>
                    </li>
                    <li class="item-2 expand">
                            <span>
                                <a href="/Book/CreativeNotice/index">
                                    <i></i>
                                    主创通知
                                    <sup class="msgNum"><?php echo ($messagenumber); ?></sup>
                                </a>
                            </span>
                    </li>
                    <li class="item-3 expand">
                            <span>
                                <a href="/Book/ExtractionYield/index">
                                    <i></i>
                                    提取收益
                                </a>
                            </span>
                    </li>
                    <li class="item-4 expand">
                            <span>
                                <a href="/Book/FieldEntry/index">
                                    <i></i>
                                   领域入口
                                </a>
                            </span>
                    </li>
                    <li class="item-5 expand">
                            <span>
                                <a href="/Book/ProposeApply/index">
                                    <i></i>
                                    推荐位申请
                                </a>
                            </span>
                    </li>
                    <li class="item-6 expand">
                            <span>
                                <a href="/Book/SignApplication/index">
                                    <i></i>
                                    签约申请
                                </a>
                            </span>
                    </li>
                </ul>
            </div>
            <div class="creator-right fr p-relative">
                <!--作品提交后待审核-->
                <div class="myWorks comic-myworks">
                    <div class="work-head">
                        <span></span>
                        <span>我的作品</span>
                    </div>
                    <div class="myworks-content comic-myworks-content">
                        <div class="tab-comic-novel clearfix">
                            <ul>
                                <li>
                                    <a class="curState" href="javascript:;">
                                        我的漫画
                                    </a>
                                </li>
                                <li>
                                    <a href="/Book/Mynovel/index">
                                        我的小说
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="comic-list-work work-sums clearfix">
                            <div class="work-sums-title fl">
                                <i>漫画列表</i>
                                <i>共<?php echo ($count); ?>部漫画</i>
                            </div>
                            <div class="work-sums-title-right fr clearfix">
                                <div class="work-search fl p-relative">
                                    <input type="text">
                                    <a class="p-absolute"><img src="/Public/Book/Createcomic/Mywork/images/searcj-icon.png" alt=""></a>
                                </div>
                                <div class="new-works fl anbtn">
                                    <a href="/Book/Createcomic/comicstep"><b>新建漫画</b></a>
                                </div>
                            </div>
                        </div>
                        <div class="comic-list-work-content list-work-content">
							
                            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><dl class="mod_of clearfix">
                                <dt class="fl">
                                <div class="l-line1"></div>
                                <div class="l-line2"></div>
                                <?php if(($vol["besure"]) == "通过审核!"): ?><a class="p-relative" href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>">
										<img src="<?php echo ($vol["photopath"]); ?>" width="157" height="200" alt="">
										<span class="h_a_ver"><b><?php echo ($vol["besure"]); ?></b></span>
									</a>
								<?php else: ?>
									<a class="p-relative" href="javascript:alert('该作品尚未通过审核！')">
										<img src="<?php echo ($vol["photopath"]); ?>" width="157" height="200" alt="">
										<span class="h_a_ver"><b><?php echo ($vol["besure"]); ?></b></span>
									</a><?php endif; ?>
                                </dt>
                                <dd class="fl work-messages-details clearfix">
                                    <h2><?php echo ($vol["title"]); ?></h2>
                                    <div class="center-messages">
                                        <ul>
                                            <li>
                                                作者：<?php echo ($vol["author"]); ?>
                                            </li>
                                            <li>
												付费作品：<?php if(($vol["vipe"]) == "0"): ?>否<?php endif; if(($vol["vipe"]) == "1"): ?>是<?php endif; ?>
                                            </li>
                                            <li>进度：<?php echo ($vol["status"]); ?></li>
                                            <li>总浏览量：<?php echo ($vol["moods"]); ?></li>
                                        </ul>
                                        <ul>
                                            <li>次元播首发：<?php echo ($vol["firstpublish"]); ?></li>
                                            <li>创建时间：<?php echo ($vol["time"]); ?></li>
                                            <li>章节数：<?php echo ($vol["countpassage"]); ?></li>
                                            <li>订阅：<?php echo ($vol["subscribe"]); ?></li>
                                        </ul>
                                        <ul>
                                            <li>次元播独家：<?php echo ($vol["exclusive"]); ?></li>
                                            <li>更新时间：<?php echo ($vol["updatetime"]); ?></li>
                                            <li>付费章节数：<?php echo ($vol["paypassage"]); ?></li>
                                        </ul>
                                    </div>
                                    <div class="work-tab-btn">
                                        <span class="c-work current-state-works"> <a href="/Book/Workcomic/index?lav=<?php echo ($vol["val"]); ?>">作品管理</a></span>
                                        <span class="c-section current-state-works"><a href="/Book/ComicManager/index?lav=<?php echo ($vol["val"]); ?>">章节管理</a></span>
                                        <span class="c-apply current-state-works"><a href="/Book/Comicwelfare/index?lav=<?php echo ($vol["val"]); ?>">福利申请</a></span>
                                        <span><a href="javascript:;">申请付费</a></span>
                                        <span><a href="javascript:;">申请完本</a></span>
                                        <input type=hidden id="hiddenid" value="<?php echo ($vol["id"]); ?>">
                                         <input type=hidden id="hiddenval" value="<?php echo ($vol["val"]); ?>">
                                        <span class="del-work" onclick="deleted(this)">
                                            <i><img src="/Public/Book/Createnovel/Mynovel/images/delete-work.png" alt=""></i>
                                            删除作品
                                        </span>
                                    </div>
                                </dd>
                            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                            
                          
                        </div>
                    </div>
                    <div class="work-confirm-tips">
                        <i><img src="/Public/Book/Createcomic/Mywork/images/confirm-icon.png" alt=""></i>
                        <i><b>审核信息:</b></i>
                        <i>您的作品已成功提交，我们将尽快为您审核</i>
                    </div>
                   <div class="work-next-page wk_page" style="width:auto;">
                        <div  class="re_page2"><?php echo ($page); ?></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="footer">
        <div class="foot-content w1200">
            <div class="fl ciyuan">
                <h2>关于</h2>
                <div class="links">
                      <ul>
                        <li>
                            <a href="/Book/HelpCenter/index" target="_blank">
                                帮助中心
                            </a>
                        </li>
                        <li>
                            <a href="/Book/HelpCenter/index?callme=1">
                                联系我们
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/Book/HelpCenter/index?callme=2">
                                友情链接
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                意见反馈
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="z-line"></div>
            <div class="fl help">
                <ul>
                    <li>
                        商务合作：bd@ciyuantv.cn
                    </li>
                    <li>
                        官方投稿群：QQ &nbsp;482220431
                    </li>
                </ul>
            </div>
            <div class="social fl">
                <a class="service" href="javascript:;"><p>联系客服</p></a>

                <a class="downLoad" href="javascript:;"><p>下载次元</p></a>
                <a class="weChat p-relative" href="javascript:;">
                    <p>官方微信</p>
                    <div class="erweima"><img src="/Public/Book/Static/images/erweima.png" alt=""></div>
                </a>
                <a class="weibo p-relative" href="javascript:;">
					<p>官方微博</p>
					<div class="weiboma"><img src="/Public/Book/Static/images/weiboicon.png" alt=""></div>
					</a>
            </div>
            <div class="beian">
                <p>© 2016-2017 深圳市次元时代网络科技有限公司 2ciyuan.tv All rights reserved.</p>
                <p>               
                    版权所有 ICP证:16119129号-1
                </p>
                <p>官方QQ群: 482220431  &nbsp; &nbsp; &nbsp; &nbsp; 业务合作、市场合作: bd@ciyuantv.cn</p>
            </div>
        </div>
    </div>
</div>
</body>
<!--删除作品-->
<script>
function deleted(obj){
var obid  = $(obj).siblings("#hiddenid").val();
var hiddenval = $(obj).siblings("#hiddenval").val();
$.post(
	'/Book/Mycomic/deleted',
	{"obid":obid,"hiddenval":hiddenval},
	function(data){
		//alert(data);
		if(data=="1"){
			alert("已通过审核无法删除，请联系管理员.");
		}
		else if(data=="2"){
			alert("删除成功!");
			window.location.reload();
		}
		else if(data=="3"){
			alert("删除失败,请重新操作!");
		}
	},
	"html"
 )
}
</script>
<script>
function refreshed(){
	var abc="1";
	 $.post(
			'/Book/Home/refresh',
			{"abc":abc},
			function(data){
				//alert(data);
		    },
			   "html"
		)
	}
setInterval(refreshed,72000);
</script>
</html>
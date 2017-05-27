<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="max-age=7200">
	<meta http-equiv="Expires" content="7200">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Book/Static/Css/public.css" />
    <link rel="stylesheet" href="/Public/Book/Static/Css/footer.css">
    <link rel="stylesheet" href="/Public/Book/Authormessge/Css/auther.css">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script src="/Public/Book/Static/Js/jquery-3.0.0.js"></script>
    <script src="/Public/Book/Static/Js/loginreg.js"></script>
    <script src="/Public/Book/Authormessge/Js/author.js"></script>
    <script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
    <script src="https://s95.cnzz.com/z_stat.php?id=1261758245&web_id=1261758245" language="JavaScript"></script>
</head>
<style>
.re_page2{ width:auto; height:30px; padding-left:10px; padding-top:28px; text-align:center;}
.re_page2 a {display: inline-block; border: 1px solid #ebebeb; padding: 6px 14px;margin-left:10px;width:auto;border-radius:5px;color: #3c3c3c;}
.current{
		background: #fdc051;
		color: #fff !important;
		border: none !important;
		border-radius: 5px;
		padding: 7px 14px !important;
		margin-left: 10px;
		line-height: 24px;
	}
 .re_page2 a:hover{
		background: #fdc051 !important;
		color: #fff;
	}
	.youravatar>img {
    width: 100%;
    height: 100%;
    border-radius: 100% !important;
    display: block;
}
</style>
<body>
    <div id="container" class="container p-relative">
        <div class="mainBody">
            <div class="mainContent w1174">
                <div class="part-one clearfix">
                    <div class="part-right fl">
						<?php if(is_array($Formcreatedata)): $i = 0; $__LIST__ = $Formcreatedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="author-messge bg-fff clearfix">
                            <div class="conmic-pic-right fl">
                                <span class="s-line"></span>
                                <span class="m-line"></span>
                                <div class="author-picture p-relative" style="border:0px solid #1A1A1A;">
                                    <img src="<?php echo ($vol["photopath"]); ?>" alt="" height="299" width="225">
                                    <i class="loading p-absolute"><img src="/Public/Book/Authormessge/images/loading.png" alt=""></i>
                                </div>
                            </div>
                            
                            <div class="comic-tex-left fl">
								<div class="comic-titleh1">
                                <b><?php echo ($vol["title"]); ?></b>
                                <span class="biaoqian">
								<?php if(is_array($tempted)): $i = 0; $__LIST__ = $tempted;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$kipe): $mod = ($i % 2 );++$i; if(($kipe["colors"]) == "精选"): ?><span class="yellow"><?php echo ($kipe["colors"]); ?></span><?php endif; ?>
									<?php if(($kipe["colors"]) == "签约"): ?><span class="red"><?php echo ($kipe["colors"]); ?></span><?php endif; ?>
									<?php if(($kipe["colors"]) == "授权"): ?><span class="green"><?php echo ($kipe["colors"]); ?></span><?php endif; ?>
									<?php if(($kipe["colors"]) == "热门"): ?><span class="blue"><?php echo ($kipe["colors"]); ?></span><?php endif; ?>
									<?php if(($kipe["colors"]) == "限免"): ?><span class="timeFree"><?php echo ($kipe["colors"]); ?></span><?php endif; ?>
									<?php if(($kipe["colors"]) == "神作"): ?><span class="grey"><?php echo ($kipe["colors"]); ?></span><?php endif; ?>
									<?php if(($kipe["colors"]) == "VIP"): ?><span class="nol-vip"><?php echo ($kipe["colors"]); ?></span><?php endif; ?>
									<?php if(($kipe["colors"]) == "合作"): ?><span style="background:#5DADFB;"><?php echo ($kipe["colors"]); ?></span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </span>
                                </div>
                                <p class="review">
                                    <span id="score-num">请您评分 :</span>
                                    <span id="UserStart" class="stars">
										 <?php $__FOR_START_7580__=0;$__FOR_END_7580__=$modenumber;for($i=$__FOR_START_7580__;$i < $__FOR_END_7580__;$i+=1){ ?><i id="star1" class="light-star" sp="<?php echo ($i+1); ?>" onclick="star(this)"></i><?php } ?>
                                         <?php $__FOR_START_21413__=0;$__FOR_END_21413__=5-$modenumber;for($i=$__FOR_START_21413__;$i < $__FOR_END_21413__;$i+=1){ ?><i id="star5" class="prey-star" sp="<?php echo ($i+$modenumber+1); ?>"  onclick="star(this)"></i><?php } ?>
                                    </span>
                                    <span class="score">评分:  <strong id="score"><?php echo ($star); ?></strong>
                                        <i id="peopleTalk"></i>(<?php echo ($standardcount); ?>人评价)
                                    </span>

                                </p>
                                <p class="line-two">
                                    <span>作者: <?php echo ($vol["author"]); ?></span>
                                    <?php if(($vol["picauthor"]) == ""): else: ?>
										<span>图:  <?php echo ($vol["picauthor"]); ?></span><?php endif; ?>
                                    
                                    <?php if(($vol["textauthor"]) == ""): else: ?>
										<span>文:  <?php echo ($vol["textauthor"]); ?></span><?php endif; ?>
                                 
                                    <span id="renqi">人气:  <?php echo ($Formoods); ?></span>
                                    
                                    <span id="collect-num">收藏数:  <?php echo ($countcollection); ?></span>
                                </p>
                                <p class="tex-detail">
                                   <?php echo ($vol["description"]); ?>
                                </p>
                                <div class="tag">
                                    <label>标签</label>
                                   <?php if(is_array($totaltag)): $i = 0; $__LIST__ = $totaltag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?><span><?php echo ($k); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                                <div class="book-function">
									<?php if(is_array($gg)): $i = 0; $__LIST__ = $gg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div id="add-book" class="add-or-reduce" onclick="joinshelf(this)" did="<?php echo ($vals); ?>"> </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php if(is_array($Formoldcollection)): $i = 0; $__LIST__ = $Formoldcollection;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div id="have-collect" style="display:block;" onclick="deleted(this)" did="<?php echo ($vol["id"]); ?>"></div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <ul class="info-book">
										<?php if(is_array($Formcreatedata)): $i = 0; $__LIST__ = $Formcreatedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li><a href="/Book/LookComi/index?cy=<?php echo ($vol["val"]); ?>" target="_blank">开始阅读</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <li>|</li>
                                        <li><a class="by_author" >包养作者</a></li>
                                        <li>|</li>
                                        <li><a class="cg_author" >催更</a></li>
                                        <li>|</li>
                                        <li><a class="zl_author" >助力动画</a></li>
                                    </ul>
                                    <div class="share">
                                        <span class="sent-mess p-relative">
                                            <i class="v-middle"><img src="/Public/Book/Authormessge/images/share.png" alt=""></i>
                                            <a class="a-color">分享</a>
                                            <div class="share-other p-absolute"  style="height:30px;">
                                                <span class="three-single"><i></i></span>
												<script type="text/javascript">document.write(['<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=',encodeURIComponent(location.href),'&title=',"大家都在看《<?php echo ($vol["title"]); ?>》,快快加入我们吧!",'" target="_blank"  title="分享到QQ空间"><img src="http://qzonestyle.gtimg.cn/ac/qzone_v5/app/app_share/qz_logo.png" alt="分享到QQ空间"/><\/a>'].join(''));</script>
												<a  href="http://service.weibo.com/share/share.php?&url=http://www.2ciyuan.tv/Book/Authormessge/index?vv=<?php echo ($vals); ?>&title=大家都在看《<?php echo ($vol["title"]); ?>》,快快加入我们吧!" target="_blank"><img src="/Public/Book/Authormessge/images/weiboshare.png" alt="" height="16" width="16"></a>
												<span style="vertical-align: text-bottom;"><a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank" style="margin-left:3px; color: #3c3c3c;" target="_blank">更多</a></span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--礼物打赏-->
                        <div class="gift-give bg-fff m-t15">
                            <div class="gift-giving-head v-head p-t24">
                                <span class="g-sent">
                                    <i><img src="/Public/Book/Authormessge/images/gift-icon.png" alt=""></i>
                                    礼物打赏
                                </span>
                                <span class="gift-text">其实我只是想证明自己爱过，顺便挤上粉丝榜</span>
                                <span class="fensi-active">
                                    <i><img src="/Public/Book/Authormessge/images/fensi-icon.png" alt=""></i>
                                    本书粉丝动态
                                </span>
                            </div>
                            <div class="gift-giving-content">
                                <div class="g-col2">
                                    <div class="auto-place">
                                        <ul>
										 <!--   <?php if(is_array($Formgiftdata)): $i = 0; $__LIST__ = $Formgiftdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li>
                                                <div class="inline-wrap">
                                                    <img class="a-head" src="<?php echo ($vol["personphoto"]); ?>" alt="" style="hieght:36px;width:36px;border-radius:100%;">
                                                    <p>
                                                        <span><?php echo ($vol["sender"]); ?></span>
                                                        <span>送了</span>
                                                        <span><?php echo ($vol["gift"]); ?>X<i><?php echo ($vol["mounted"]); ?></i></span>
                                                    </p>
                                                </div>
                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>-->
                                         
                                        <?php if(is_array($Formconsumeata)): $i = 0; $__LIST__ = $Formconsumeata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li>
                                                <div class="inline-wrap">
                                                    <img class="a-head" src="<?php echo ($vol["personphoto"]); ?>" alt="" style="hieght:36px;width:36px;border-radius:100%;">
                                                    <p>
                                                        <span><?php echo ($vol["nickname"]); ?></span>
                                                        <span>送了</span>
                                                        <span><?php echo ($vol["pathroad"]); ?>X<i><?php echo ($vol["num"]); ?></i></span>
                                                    </p>
                                                </div>
                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                         
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="g-col1 p-relative">
                                    <ul class="g-con-ul clearfix">
                                        <li>
                                            <span><img src="/Public/Book/Authormessge/images/gift-icon1.png" alt=""></span>
                                            <span class="g-info-right">
                                                <div class="text-info-head">
                                                    <b>肥皂</b>
                                                    <i>
                                                        <img src="/Public/Book/Authormessge/images/cibi-icon.png" alt="">
                                                        <b id="feizao" class="bi-num">100</b>
                                                    </i>
                                                </div>
                                                <div class="text-info-content">
                                                    <p>哦亲，</p>
                                                    <p>帮我捡一下肥皂</p>
                                                </div>

                                            </span>
                                        </li>
                                        <li>
                                            <span><img src="/Public/Book/Authormessge/images/gift-icon2.png" alt=""></span>
                                            <span class="g-info-right">
                                                <div class="text-info-head">
                                                    <b>兄贵</b>
                                                    <i>
                                                        <img src="/Public/Book/Authormessge/images/cibi-icon.png" alt="">
                                                        <b id="xionggui" class="bi-num">500</b>
                                                    </i>
                                                </div>
                                                <div class="text-info-content">
                                                    <p>听说你喜欢？</p>
                                                    <p>搭配肥皂更耐磨哟 ~</p>
                                                </div>

                                            </span>
                                        </li>
                                        <li>
                                            <span><img src="/Public/Book/Authormessge/images/gift-icon3.png" alt=""></span>
                                            <span class="g-info-right">
                                                <div class="text-info-head">
                                                    <b>正太</b>
                                                    <i>
                                                        <img src="/Public/Book/Authormessge/images/cibi-icon.png" alt="">
                                                        <b id="zhengtai" class="bi-num">1000</b>
                                                    </i>
                                                </div>
                                                <div class="text-info-content">
                                                    <p>正太便是正义</p>
                                                    <p>正太有我来守护</p>
                                                </div>

                                            </span>
                                        </li>
                                        <li>
                                            <span><img src="/Public/Book/Authormessge/images/gift-icon4.png" alt=""></span>
                                            <span class="g-info-right">
                                                <div class="text-info-head">
                                                    <b>萝莉</b>
                                                    <i>
                                                        <img src="/Public/Book/Authormessge/images/cibi-icon.png" alt="">
                                                        <b id="luoli" class="bi-num">5000</b>
                                                    </i>
                                                </div>
                                                <div class="text-info-content">
                                                    <p>作为一个绅士</p>
                                                    <p>萝莉才是真爱</p>
                                                </div>

                                            </span>
                                        </li>
                                        <li>
                                            <span><img src="/Public/Book/Authormessge/images/gift-icon5.png" alt=""></span>
                                            <span class="g-info-right">
                                                <div class="text-info-head">
                                                    <b>御姐</b>
                                                    <i>
                                                        <img src="/Public/Book/Authormessge/images/cibi-icon.png" alt="">
                                                        <b id="yujie" class="bi-num">10000</b>
                                                    </i>
                                                </div>
                                                <div class="text-info-content">
                                                    <p>皮鞭高跟鞋，</p>
                                                    <p>跪下唱征服</p>
                                                </div>

                                            </span>
                                        </li>
                                        <li>
                                            <span><img src="/Public/Book/Authormessge/images/gift-icon6.png" alt=""></span>
                                            <span class="g-info-right">
                                                <div class="text-info-head">
                                                    <b>双修</b>
                                                    <i>
                                                        <img src="/Public/Book/Authormessge/images/cibi-icon.png" alt="">
                                                        <b id="shuangxiu" class="bi-num">50000</b>
                                                    </i>
                                                </div>
                                                <div class="text-info-content">
                                                    <p>传闻打通次元壁的唯一</p>
                                                    <p>办法,就是双修~</p>
                                                </div>

                                            </span>
                                        </li>
                                    </ul>
                                    <div id="sent-gift" class="sent-gift">送肥皂获(1000粉丝值)</div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--主创档案-->
                    <div class="part-left fl" style= "position: relative;'>
                        <div class="left-sidebar-mess p-relative">
                            <div class="videoer-mess videoer">
                                <img src="/Public/Book/Authormessge/images/video-mess.png" alt="">
                                <b>主创档案</b>
                            </div>
                            <?php if(is_array($Formquantitydata)): $i = 0; $__LIST__ = $Formquantitydata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="per-avatar">
                                <img src="<?php echo ($vol["authorphoto"]); ?>" alt="" style="width:88px;height:88px;border-radius:100%;">

                                 <?php if(is_array($ee)): $i = 0; $__LIST__ = $ee;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vtl): $mod = ($i % 2 );++$i;?><div class="dashen l-space t-align"><?php echo ($datadown); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>

                                <p class="l-space"><?php echo ($vol["author"]); ?></p>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="text-mess">
								<?php if(is_array($oo)): $i = 0; $__LIST__ = $oo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol["a"]) == "无"): ?><p>作者太懒了，没留下任何信息~</p>
                                 <?php else: ?>
                                   <p><?php echo ($vol["a"]); ?></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            
                            <a href="#" class="enter-in l-space t-align" onclick="linyu()" target="_blank">
                                进入领域
                            </a>
                            
                            <hr>
                            <div class="sign-pay clearfix p-relative"> 
								
                             <?php if(is_array($pp)): $i = 0; $__LIST__ = $pp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div id="sign-in" class="sign-in button fl weiqian" onclick="written()">
									<i><img src="/Public/Book/AuthorNovelmeg/images/read.png" alt=""></i>
									签到
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php if(is_array($Formwrittendata)): $k = 0; $__LIST__ = array_slice($Formwrittendata,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><div class="sign-in button fl yiqian" style="display:block;">
									<i><img src="/Public/Book/AuthorNovelmeg/images/read.png" alt=""></i>
									已签到
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
                               <a class="button pay-in fl" href="/Book/Recharge/index"></a>
									<div class="signPop p-absolute">
										<i><img src="/Public/Book/Static/images/suc-icon.png" alt="次元播"></i>
										签到成功，已经获得 经验值+<a id="exprenced">5</a> 金币+<a  id="goldid">3</a>
									</div>
                            </div>
                            <hr>
                            <div class="fensi-rank" >
                                <div class="fensi-head clearfix">
                                    <div class="head-title l-space">
                                        <span>
                                            <img src="/Public/Book/Authormessge/images/fensi.png" alt="">
                                            粉丝排行榜
                                        </span>
                                        <!--<span><a class="a-color" href="#">更多></a></span>-->
                                    </div>
                                    <ul class="fensi-list">
										<?php if(is_array($Formfansdata)): $k = 0; $__LIST__ = array_slice($Formfansdata,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><li class="heroVideo hero">
                                            <span class="ranking pre-three float-left ranking-one">1</span>
                                            <span class="float-left rank-text">
                                                <h2><?php echo ($vol["nickname"]); ?></h2>
                                                <p><?php echo ($vol["valued"]); ?>粉丝值</p>
                                            </span>
                                            <span class="rank-right">
                                                <img src="<?php echo ($vol["photopath"]); ?>" alt="">
                                                <div class="a-men mengzu-one l-space"><?php echo ($vol["ranged"]); ?></div>
                                            </span>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <?php if(is_array($Formfansdata)): $k = 0; $__LIST__ = array_slice($Formfansdata,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><li class="heroVideo hero">
                                            <span class="ranking pre-three float-left ranking-two">2</span>
                                            <span class="float-left rank-text">
                                                <h2><?php echo ($vol["nickname"]); ?></h2>
                                                <p><?php echo ($vol["valued"]); ?>粉丝值</p>
                                            </span>
                                            <span class="rank-right">
                                                <img src="<?php echo ($vol["photopath"]); ?>" alt="" >
                                                <div class="b-men mengzu-one l-space"><?php echo ($vol["ranged"]); ?></div>
                                            </span>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                         <?php if(is_array($Formfansdata)): $k = 0; $__LIST__ = array_slice($Formfansdata,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><li class="heroVideo rank-list3">
                                            <div class="ranking fl ranking-three">3</div>
                                            <div class="rank-mess no-name clearfix fl">
                                                <span class="float-left rank-tex ">
                                                <h2><?php echo ($vol["nickname"]); ?></h2>
                                                <p><?php echo ($vol["valued"]); ?>粉丝值</p>
                                                </span>
                                                <span class="rank-right">
                                                 <img src="<?php echo ($vol["photopath"]); ?>" alt="" >
                                                <div class="c-men mengzu-one l-space"><?php echo ($vol["ranged"]); ?></div>
                                                </span>
                                            </div>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <?php if(is_array($Formfansdata)): $k = 0; $__LIST__ = array_slice($Formfansdata,3,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><li class="other-fensi-rank">
                                            <div class="ranking fl other-rank"><?php echo ($k+3); ?></div>
                                            <div class="no-name rank-intruduce fl">
                                                <span class="only-tex"><?php echo ($vol["nickname"]); ?></span>
                                                <span class="only-num"><?php echo ($vol["valued"]); ?></span>
                                            </div>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </did>
                                   <?php if(is_array($Formmyfans)): $k = 0; $__LIST__ = $Formmyfans;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><div class="rank-bottom clearfix" style="position:absolute; bottom:16px;">
										<div class="my-rank rank-fensi  fl"> 
											<p class="rank-num r_num"><?php echo ($p+1); ?></p>
											<p class="text-rank r_text">我的排名</p>
										</div>
										<div class="my-fensi rank-fensi fl">
											<p class="fensi-num r_num"><?php echo ($vol["valued"]); ?></p>
											<p class="text-fensi r_text">我的粉丝值</p>
										</div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
                                   <?php if(is_array($yy)): $k = 0; $__LIST__ = $yy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><div class="rank-bottom clearfix" style="position:absolute; bottom:16px;">
										<div class="my-rank rank-fensi  fl"> 
											<p class="rank-num r_num">无</p>
											<p class="text-rank r_text">我的排名</p>
										</div>
										<div class="my-fensi rank-fensi fl">
											<p class="fensi-num r_num">0</p>
											<p class="text-fensi r_text">我的粉丝值</p>
										</div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
                                  
                            </div>

                        </div>
                    </div>
                </div>
                <!--章节列表-->
                <div class="part-two bg-fff m-t15 clearfix">
                    <div class="chapter-lists-head v-head p-t24">
                        <span class="chapter">
                            <i><img src="/Public/Book/Authormessge/images/chapter-icon.png" alt=""></i>
                            章节列表
                        </span>
                        <span>
                            上次看到：
                            <?php if(is_array($historygo)): $i = 0; $__LIST__ = $historygo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><a href="/Book/LookComi/index/cy/<?php echo ($vol["val"]); ?>/p/<?php echo ($vol["pp"]); ?>.html" target="_blank">[<?php echo ($vol["looked"]); ?>]</a><?php endforeach; endif; else: echo "" ;endif; ?>
							<?php if(is_array($hh)): $i = 0; $__LIST__ = $hh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><a href="/Book/LookComi/index?cy=<?php echo ($vals); ?>" target="_blank">[<?php echo ($vol["a"]); ?>]</a><?php endforeach; endif; else: echo "" ;endif; ?>
							&nbsp;最新话：<a href="/Book/LookComi/index/cy/<?php echo ($vals); ?>/p/<?php echo ($passagecounted); ?>.html" target="_blank">[<?php echo ($authorsection); ?>]</a>  &nbsp;&nbsp;<?php echo ($authortime); ?>
                        </span>
                        <span id="addid" style="display:inline-block;">
                        <!--<span class="chapter-page-pager p-relative">
                            <a class="chapter-page-btn-first head-last chapter-active">1-20</a>
                            <a class="chapter-page-btn-all">
                                <b>...</b>
                                <div class="chapter-page-more p-absolute">
                                    <span>1-20</span>
                                    <span class="notOne">21-40</span>
                                    <span class="notOne">41-60</span>
                                    <span class="notOne">61-80</span>
                                    <span class="notOne">81-100</span>
                                    <span class="notOne">101-120</span>
                                </div>
                            </a>
                            <a class="chapter-page-btn-all head-last">最新20话</a>
                        </span>-->
                        </span>
                    </div>
                    <div class="chapter-lists-content chapter1-20" id="chapter1-20">
                       <!--1-20章节-->         
                    </div>
                    
                    <div class="chapter-lists-content t-chapter chapter21-40" id="chapter21-40">
						<!--21-40章节-->      
                        <!--<div class="m-chapter-item border">
                            <a href="#">
                                <span class="f-toe">19&nbsp;异类？ <i><img src="/Public/Book/Authormessge/images/vip.png" alt=""></i></span>
                            </a>
                        </div>-->

                    </div>
                    
                    <div class="chapter-lists-content t-chapter chapter41-60" id="chapter41-60">
                       <!--41-60章节-->    
                        <!--<div class="m-chapter-item border">
                            <a href="#">
                                <span class="f-toe">16&nbsp;圣石</span>
                            </a>
                        </div>
                        <div class="m-chapter-item border">
                            <a href="#">
                                <span class="f-toe">20&nbsp;恶魔觉醒 <i><img src="/Public/Book/Authormessge/images/vip.png" alt=""></i></span>
                            </a>
                        </div>-->
                        
                    </div>
                    <div class="chapter-lists-content t-chapter chapter61-80" id="chapter61-80">
                        
                        <!--<div class="m-chapter-item border">
                            <a href="#">
                                <span class="f-toe">16&nbsp;圣石</span>
                            </a>
                        </div>

                        <div class="m-chapter-item border">
                            <a href="#">
                                <span class="f-toe">20&nbsp;恶魔觉醒 <i><img src="/Public/Book/Authormessge/images/vip.png" alt=""></i></span>
                            </a>
                        </div>-->
                        
                    </div>
                    
                    <div class="chapter-lists-content t-chapter chapter81-100" id="chapter81-100">
                        
                        <!--<div class="m-chapter-item border">
                            <a href="#">
                                <span class="f-toe">16&nbsp;圣石</span>
                            </a>
                        </div>
                      
                        <div class="m-chapter-item bo                               rder">
                            <a href="#">
                                <span class="f-toe">20&nbsp;恶魔觉醒 <i><img src="/Public/Book/Authormessge/images/vip.png" alt=""></i></span>
                            </a>
                        </div>-->
                        
                    </div>
                    
                    <div class="chapter-lists-content t-chapter chapter101-120" id="chapter101-120">
                        
                       <!-- <div class="m-chapter-item border">
                            <a href="#">
                                <span class="f-toe">16&nbsp;圣石</span>
                            </a>
                        </div>
                       
                        <div class="m-chapter-item border">
                            <a href="#">
                                <span class="f-toe">20&nbsp;恶魔觉醒 <i><img src="/Public/Book/Authormessge/images/vip.png" alt=""></i></span>
                            </a>
                        </div>-->
                    </div>
                    
                    <div class="chapter-lists-content chapter-new20" id="chapter-new20">
						
						<?php if(is_array($newsectiondata)): $k = 0; $__LIST__ = $newsectiondata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k; if(($vol["vipe"]) == "0"): ?><div class="m-chapter-item border">
								<a href="/Book/LookComi/index/cy/<?php echo ($vol["val"]); ?>/p/<?php echo ($vol["p"]); ?>.html" target="_blank">
									<span class="f-toe"><?php echo ($vol["section"]); ?></span>
								</a>
							</div><?php endif; ?>
                        <?php if(($vol["vipe"]) == "1"): ?><div class="m-chapter-item border">
								<a href="/Book/LookComi/index/cy/<?php echo ($vol["val"]); ?>/p/<?php echo ($vol["p"]); ?>.html" target="_blank">
									<span class="f-toe"><?php echo ($vol["section"]); ?> <i><img src="/Public/Book/Authormessge/images/vip.png" alt=""></i></span>
								</a>
							</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </div>
                <!--小伙伴还在看-->
                <div class="part-three bg-fff m-t15 clearfix">
                    <div class="little-friend-head p-t24">
                        <i class="v-sub"><img src="/Public/Book/Authormessge/images/friuend-icon.png" alt=""></i>
                        <b>小伙伴还在看</b>
                    </div>
                    <ul class="work-piction">
						 <?php if(is_array($Formtotalsums)): $k = 0; $__LIST__ = $Formtotalsums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><li>
                            <a class="cartoon-girl" href="/Book/Authormessge/index?vv=<?php echo ($vol["val"]); ?>">
                                <img src="<?php echo ($vol["photopath"]); ?>" alt=""style="width:145px;height:199px;border-radius:10px;border:0px solid #000000;">
                                <div class="pic-bg">
                                    <h3 class="bg-head">
                                        <span><img src="<?php echo ($vol["authorphoto"]); ?>" alt="" style="width:28px;height:28px;border-radius:100%;"></span>
                                        <span><?php echo ($vol["author"]); ?></span>
                                    </h3>
                                    <p class="detail-text">
                                        <?php echo ($vol["description"]); ?>
                                    </p>
                                </div>
                            </a>
                            <div class="author-name">
                                <p><a href="#"><b><?php echo ($vol["title"]); ?></b></a></p>
                                <p>
                                    <i><?php echo ($vol["nowpassage"]); ?></i>
                                </p>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </ul>
                </div>

                <!--讨论区-->
                <div class="part-four bg-fff m-t15 clearfix">
                    <div class="talk-zone-head">
                        <span>
                            <i class="v-sub"><img src="/Public/Book/Authormessge/images/talk-icon.png" alt=""></i>
                            <b>讨论区</b>
                        </span>
                        <span>共有<i id="talkNum"><?php echo ($totalnumber); ?></i>条评论</span>
                        <div class="talking b-line clearfix">
							
                            <textarea class="talkSome" name="talkSome" id="talkSome" placeholder="说点什么吧..."></textarea>
                            <div id="motion" class="motion"></div>
                            <div class="sent-talking" onclick="comment(this)" val="<?php echo ($vals); ?>" spaeak="<?php echo ($sub); ?>"> <b>发表评论</b></div>
                        </div>
                        <div class="exp_list">
							<div class="clearfix"><span class=" x_close">x</span></div>
							<ul class=" emotion-content clearfix"></ul>
						</div>
                    </div>
                    <div class="talk-zone-content b-line">
                        <ul id="firstcoment">
							<?php if(is_array($Formcomentdata)): $k = 0; $__LIST__ = $Formcomentdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><li class="li1">
                                <div class="talker-avatar">
                                    <i class="i_avata" ><img src="<?php echo ($vol["photo"]); ?>" alt="" ></i>
                                    <?php if(($vol["vipe"]) == "0"): else: ?>
                                    <i class="winer"><img src="/Public/Book/Authormessge/images/vip-icon.png" alt=""></i><?php endif; ?>
                                </div>
                                <div class="talk-text">
									
                                    <div class="text-head">
                                        <span class="fl">
                                            <b class="talk-name">
                                                <?php echo ($vol["nickname"]); ?> 
                                                
												<?php if(($vol["admined"]) == "1"): ?><i class="tiltleIconFirst"><img src="/Public/Book/Static/images/manager.png"></i><?php endif; ?>
												
												<?php if(($vol["authored"]) == "1"): ?><i class="titleIcon"><img src="/Public/Book/Static/images/author.png"></i><?php endif; ?>
												
                                               <?php if(($vol["grade"]) == "1"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/1.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "2"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/2.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "3"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/3.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "4"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/4.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "5"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/5.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "6"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/6.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "7"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/7.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "8"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/8.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "9"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/9.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "10"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/10.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "11"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/11.png"></i><?php endif; ?>
                                               <?php if(($vol["grade"]) == "12"): ?><i class="titleRankIcon"><img src="/Public/Book/Authormessge/images/12.png"></i><?php endif; ?>
                                            </b>
                                            
                                        </span>
                                        <span class="flat">
											<b id="flat">
												<a id="flat<?php echo ($vol["id"]); ?>"></a>F
											</b>
									  </span>
                                    </div>
                                    <div class="talk-content">
                                         <?php echo ($vol["content"]); ?>
                                    </div>
                                    <div class="review">
										<i id="talk-time" class="fl" style="display: inline-block;">&nbsp; <?php echo ($vol["time"]); ?></i>
                                        <div class="citem-btns re-reply fr">
											 
                                            <a id="reply" class="reply" onclick="saybackone(this)" say="<?php echo ($vol["nickname"]); ?>" indexed="<?php echo ($vol["indexed"]); ?>" names="<?php echo ($names); ?>" did="<?php echo ($vol["id"]); ?>" val="<?php echo ($vol["val"]); ?>">回复</a>
                                            |
                                            <a onclick="zantwo(this)" did="<?php echo ($vol["id"]); ?>">赞(<span class="aa"><?php echo ($vol["zan"]); ?></span>)</a>
                                        </div>
                                    </div>
                                    
									<div  id="<?php echo ($vol["id"]); ?>" class="removed">

									</div>
                                    <!--回复-->
                                    <div class="after-write-back return p-relative"  style="display:block;" id="returnback<?php echo ($vol["indexed"]); ?>" >
											<div class="moreLoad" style=" display: none;" id="more<?php echo ($vol["indexed"]); ?>" sb="returnback<?php echo ($vol["indexed"]); ?>"  onclick="mored(this)">楼层太高，点击展开隐藏楼层╮(￣▽￣")╭</div>
                                    </div>
                                    
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        
                        <div>
                            <div class="re_page2"><!--分頁-->
                               <?php echo ($page); ?>
                            </div>
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
                            <a href="/Book/HelpCenter/index?callme=1" target="_blank">
                                联系我们
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/Book/HelpCenter/index?callme=2" target="_blank">
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
        <!--包养作者-->
        <div class="baoyangAll" style="display: none">
            <div class="baoyang-content pulic-content">
                <i><img src="/Public/Book/Authormessge/images/icon.png" alt=""></i>
                <div class="by_content msg-detail">
                    <p>包养作者</p>
                    <ul class="by_month clearfix">
                        <li class="cur_active"> 1个月</li>
                        <li>3个月</li>
                        <li>6个月</li>
                        <li>12个月</li>
                    </ul>
                    <div class="by_yue clearfix">
                       <span class="fl"> 共 <b class="by_coin" id="includemoney">300</b> 次元币 &nbsp;&nbsp;您的余额为：<b id="includemymoney"><?php echo ($coin); ?></b> 次元币</span>
                        <span class="by_peat fr"> <a href="/Book/Recharge/index" target="_blank">充值</a></span>

                    </div>
                    <div class="by_gift" onclick="included()">立即包养</div>
                </div>
                <div class="by_close_btn by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>
            
            <!--包养成功-->
            <div class="by_success" style="display: none">
                <i><img src="/Public/Book/Authormessge/images/success.png" alt=""></i>
                <div class="by_close_suc by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>

            <!--包养失败-->
            <div class="by_fail" style="display: none">
                <i><img src="/Public/Book/Authormessge/images/fail.png" alt=""></i>
                <div class="by_close_fail by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>

        </div>

        <!--催更-->
        <div class="cuigengAll" style="display: none">
            <div class="cuigeng-content pulic-content">
                <i><img src="/Public/Book/Authormessge/images/cuigeng.png" alt=""></i>
                <div class="cg_content msg-detail">
                    <p class="cg_text">已催更 &nbsp;&nbsp;<i><?php echo ($urge); ?></i> &nbsp;&nbsp;次</p>
                    <a>催更 <i>（可获取100粉丝值）</i></a>
                    <ul class="cg_month clearfix" id="cg_month">
                        <li class="cg_active"><a href="javascript:;">1次</a></li>
                        <li><a href="javascript:;">10次</a></li>
                        <li><a href="javascript:;">100次</a></li>
                        <li>
                            <input onkeyup="func1(this)" onblur="blurfun(this)" onfocus="focusfun(this)"  maxlength="6"  type="text" value="自定义" id="numCoin">
                        </li>
                    </ul>
                    <div class="by_yue clearfix">
                        <span class="fl"> 共 &nbsp;<b class="cg_coin" id="coinmoney">10</b> &nbsp;次元币 &nbsp;&nbsp;您的余额为：&nbsp;&nbsp;<b id="mymoney"><?php echo ($coin); ?></b> 次元币</span>
                        <span class="by_peat fr"> <a href="/Book/Recharge/index" target="_blank">充值</a></span>
                    </div>
                    <div class="by_gift" onclick="urge()">立即催更</div>
                </div>
                <div class="cg_close_btn by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>

            <!--催更成功-->
            <div class="cg_success" style="display:none;" style="margin-left:5">
                <i><img src="/Public/Book/Authormessge/images/cgsucess.png" alt=""></i>
                <div class="cg_close_suc by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>

            <!--催更失败-->
            <div class="cg_fail" style="display: none">
                <i><img src="/Public/Book/Authormessge/images/cgfail.png" alt=""></i>
                <div class="cg_close_fail by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>

        </div>

        <!--助力动画-->
        <div class="zhuliAll" style="display: none">
            <div class="zhuli-content pulic-content">
                <i><img src="/Public/Book/Authormessge/images/zhuli.png" alt=""></i>
                <div class="zl_content msg-detail">
                    <p class="zl_text">已助力 &nbsp;&nbsp;<i><?php echo ($moped); ?></i> &nbsp;&nbsp;次</p>
                    <a>助力 <i>（可获取100粉丝值）</i></a>
                    <ul class="zl_month clearfix">
                        <li class="zl_active"><a href="javascript:;">1次</a>
                        </li>
                        <li><a href="javascript:;">10次</a></li>
                        <li><a href="javascript:;">100次</a></li>
                        <li>
                            <input onkeyup="func2(this)" onblur="blurfun2(this)" onfocus="focusfun2(this)"  maxlength="6"  type="text" value="自定义" id="zlnumCoin">
                        </li>
                    </ul>
                    <div class="by_yue clearfix">
                        <span class="fl"> 共 &nbsp;<b class="zl_coin" id="mopedmoney">10</b> &nbsp;次元币 &nbsp;&nbsp;您的余额为：&nbsp;&nbsp;<b id="mopedmymoney"><?php echo ($coin); ?></b> 次元币</span>
                        <span class="by_peat fr"> <a href="/Book/Recharge/index" target="_blank">充值</a></span>

                    </div>
                    <div class="by_gift" onclick="moped()">立即助力</div>
                </div>
                <div class="zl_close_btn by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>

            <!--助力成功-->
            <div class="zl_success" style="display: none">
                <i><img src="/Public/Book/Authormessge/images/zlsucess.png" alt=""></i>
                <div class="zl_close_suc by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>

            <!--助力失败-->
            <div class="zl_fail" style="display: none">
                <i><img src="/Public/Book/Authormessge/images/zlfail.png" alt=""></i>
                <div class="zl_close_fail by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>

        </div>

        <!--打赏-->
        <div class="exceptionalAll" style="display: none">
            <div class="exceptional-content">
                <ul class="imgList clearfix" id="imgListclearfix">
                    <li class="list1 bor-current" did="100" names="肥皂">
                        <img src="/Public/Book/Authormessge/images/soft.png" alt="">
                        <p>肥皂</p>
                    </li>
                    <li class="list2" did="500" names="兄贵">
                        <img src="/Public/Book/Authormessge/images/xionggui.png" alt="">
                        <p>兄贵</p>
                    </li>
                    <li class="list3" did="1000" names="正太">
                        <img src="/Public/Book/Authormessge/images/zhengtai.png" alt="">
                        <p>正太</p>
                    </li>
                    <li class="list4" did="5000" names="萝莉">
                        <img src="/Public/Book/Authormessge/images/luoli.png" alt="">
                        <p>萝莉</p>
                    </li>
                    <li class="list5" did="10000" names="御姐">
                        <img src="/Public/Book/Authormessge/images/yuejie.png" alt="">
                        <p>御姐</p>
                    </li>
                    <li class="list6" did="50000" names="双修">
                        <img src="/Public/Book/Authormessge/images/shuangxiu.png" alt="">
                        <p>双修</p>
                    </li>
                </ul>
                <h2>选择数量</h2>
                <ul class="chooseNum clearfix" id="chooseNumclearfix">
                    <li class="gift1 ds_active" cat="1">
                        <a href="javascript:;">X1</a>
                    </li>
                    <li class="gift2" cat="10">
                        <a href="javascript:;">X10</a>
                    </li>
                    <li class="gift3" cat="50">
                        <a href="javascript:;">X50</a>
                    </li>
                    <li class="gift4" cat="100">
                        <a href="javascript:;">X100</a>
                    </li>
                    <li class="gift5" cat="500">
                        <a href="javascript:;">X500</a>
                    </li>
                    <li class="gift6">
                        <input onkeyup="func3(this)" onblur="blurfun3(this)" onfocus="focusfun3(this)"  maxlength="6"  type="text" value="自定义" id="dsnumCoin">
                    </li>
                </ul>
                <div class="by_yue clearfix">
                    <span class="fl"> 共 &nbsp;<b class="ds_coin" id="paymoney">100</b> &nbsp;次元币 &nbsp;&nbsp;您的余额为：&nbsp;&nbsp;<b id="giftmymoney"><?php echo ($coin); ?></b> 次元币</span>
                    <span class="by_peat cz_page fl"> <a href="/Book/Recharge/index" target="_blank">充值</a></span>
                </div>
                <div class="liuyan">
                    <textarea  name="liuyan" id="liuyan" placeholder="哦亲，帮我捡一下肥皂"></textarea>
                </div>
                <div class="lids">
                    <span onclick="gifts()">立即打赏</span>
                </div>
                <div class="ds_close_btn by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>

            <!--打赏成功-->
            <div class="zl_success ds_success" style="display: none">
                <i><img src="/Public/Book/Authormessge/images/dssuccess.png" alt=""></i>
                <div class="ds_close_suc by_close">
                    <img src="/Public/Book/Authormessge/images/close.png" alt="">
                </div>
            </div>
        </div>
  
  
  
    </div>
</body>
<!--星星评分-->
<script>
    function SaveClass()
    {
        var temClassArry = new Array();
        $("#UserStart > i").each(function(i){
            temClassArry[i] = $(this).attr("class");
        });
        return temClassArry;
    }
    $(document).ready(function () {
        var temparray = SaveClass();
        $("#UserStart > i").mousemove(
                function(){
                    var currentCount=0;
                    currentCount = $("#UserStart > i").index($(this)[0])
                    console.log(currentCount)
                    $("#UserStart > i").each(function(i){if(i<=currentCount)
                    {
                        $(this).removeClass();
                        $(this).addClass("light-star");
                    }
                    else
                    {
                        $(this).removeClass();
                        $(this).addClass("prey-star");
                    }})
                }
        )
        .click(function(){
            temparray = SaveClass();
        })
        .mouseout(function(){
            $("#UserStart > i").each(function(i){
                $(this).removeClass();
                $(this).addClass(temparray[i]);
            })
        })
    });

</script>


<!--加入书架-->
<script>
    $(function () {
        $("#add-book").click(function () {
             //$(this).css("display","none").next().css("display","block");
        })
        $("#have-collect").click(function () {
          //  $(this).css("display","none").prev().css("display","block");
        })
    });
</script>




<!--送礼物-->
<script>
    //    $(function () {
    var $name,$num,a,b,c,j="";
    var $btn =document.getElementById("sent-gift");
    $(".g-con-ul li").each(function (i) {
        $(this).click(function () {
            $(this).css("border","1px solid #fea200").siblings().css("border","1px solid #e9e9e9");

            $price = $(this).find(".bi-num").html();
            $num = Number($price)*10;

            $name = $(this).find(".text-info-head>b").html();
            $btn.innerHTML ="送"+ $name + "获(" +$num + "粉丝值)";


            $(".ds_coin").html($price);
            $hoder = $(this).find(".text-info-content>p").text();
            $("#liuyan").attr("placeholder",$hoder);
            $(".chooseNum li").eq(0).addClass("ds_active").siblings().removeClass("ds_active");
            $(".imgList li").eq(i).addClass("bor-current").siblings().removeClass("bor-current");
            $("#dsnumCoin").val("自定义");




            //打赏数量
            var val = $(".ds_coin").html();

            var tet,a,sum;

            $(".chooseNum li").each(function () {
                $(this).find("a").click(function () {
                    tet = $(this).html().split("X");
                    a = tet[1];
                    $(this).parent().addClass("ds_active").siblings().removeClass("ds_active");
                    $price = $(".g-con-ul li").eq(i).find(".bi-num").html();
                    sum = Number($price*a);
                    val = $(".ds_coin").html(sum);

                });
                $(".chooseNum li:last-child").click(function () {
                    $(this).siblings().removeClass("ds_active");
                })

            });
        });
        if($(".imgList li").eq(0).hasClass("bor-current")){
            var val = $(".ds_coin").html();

            var tet,a,sum;

            $(".chooseNum li").each(function () {
                $(this).find("a").click(function () {
                    tet = $(this).html().split("X");
                    a = tet[1];
                    $(this).parent().addClass("ds_active").siblings().removeClass("ds_active");
                    $price = $(".g-con-ul li").eq(0).find(".bi-num").html();
                    sum = Number($price*a);
                    val = $(".ds_coin").html(sum)

                });

            });
            $(".chooseNum li:last-child").click(function () {
                $(this).siblings().removeClass("ds_active");
            })
        }




    });



    var tet,sum,$hoder,did;

    $(".imgList li").each(function(i){
        $(this).click(function(){
            $(this).addClass("bor-current").siblings().removeClass("bor-current");
            $(".g-con-ul li").eq(i).css("border","1px solid #fea200").siblings().css("border","1px solid #e9e9e9");
            $hoder = $(".g-con-ul li").eq(i).find(".text-info-content>p").text();
            $("#liuyan").attr("placeholder",$hoder);

            tet = $(".ds_active").attr("cat");
            did = $(this).attr("did");
            val = $(".ds_coin").html(tet*did);
            selfnum();


            $(".chooseNum li").each(function () {
                $(this).find("a").click(function () {
                    $(this).parent().addClass("ds_active").siblings().removeClass("ds_active");

                    tet = $(this).parent().attr("cat");

                    sum = Number(did*tet);
                    val = $(".ds_coin").html(sum);

                });
                $(".chooseNum li:last-child").click(function () {
                    $(this).siblings().removeClass("ds_active");
                })

            });
        })
    });

    $(".sent-gift").click(function () {
        $(".exceptionalAll").show();


    });

    $(".ds_close_btn").click(function () {
        $(".exceptionalAll").hide();
         //window.location.reload();
    });
    //        打赏成功
    $(".ds_close_suc").click(function () {
        $(".exceptionalAll").hide();
         window.location.reload();
    });

    function blurfun3(obj) {
        if (obj.value ==''){obj.value='自定义'}

    }

    function focusfun3(obj) {

        if (obj.value =='自定义'){
            obj.value ='';
            val = $(".ds_coin").html("0");
        }else {
            c = parseInt(j);
            b = Number(obj.value)*Number(c);
            val = $(".ds_coin").html(b);
        }

        selfnum()

    }

    function func3(obj) {
        c = parseInt(j);
        b = Number(obj.value)*Number(c);
        console.log(b);
        val = $(".ds_coin").html(b);
    }


    function selfnum(){
        if($(".list1").hasClass("bor-current")){


            j=$(".list1").attr("did");
            return j;

        }else if($(".list2").hasClass("bor-current")){

            j=$(".list2").attr("did");
            return j;

        }else if($(".list3").hasClass("bor-current")){

            j=$(".list3").attr("did");
            return j;
        }else if($(".list4").hasClass("bor-current")){

            j=$(".list4").attr("did");
            return j;
        }else if($(".list5").hasClass("bor-current")){

            j=$(".list5").attr("did");
            return j;
        }else if($(".list6").hasClass("bor-current")){

            j=$(".list6").attr("did");
            return j;
        }else {
            alert("错误")
        }
    }




    //    })

</script>


<!--礼物滚动区-->
<script>
    $(function () {
        var nowNum = 0;

        var lis = $(".auto-place li");
        var len = lis.length;

        if(len > 7){
            function func() {
                var val = nowNum - (len-8);
                if(nowNum <= len-1){
                    nowNum++;
                    $(".auto-place").animate({"margin-top":-61*nowNum},600);
//                    console.log(nowNum);
                    if(val >= 0  && val < 7){
                        $(".auto-place").animate({"margin-top":-61*nowNum},600);
                        $(".auto-place li").eq(val).clone().appendTo(".auto-place ul");
                    }
                }
                else{
                    nowNum=0;
                    $(".auto-place").css("margin-top","19px");
                    $(".auto-place").animate({"margin-top":-60*nowNum},0,function () {

                    })
                }
            }
            setInterval(func,1600);
        }

    })

</script>

<!--回复-->
<script>
//    回复1
    $(function () {
        $(".reply").click(function () {

            $(".review-content").toggle()
//            $(".after-write-back").css("display","none")
        })
    });

</script>

<!--包养-->
<script>
    var val = $(".by_coin").html();
    var num = $(".by_month li");
    var tet,a,sum;
    $(".by_month li").each(function () {

        $(this).click(function () {
            tet = $(this).html().split("个");
            a = tet[0];
            $(this).addClass("cur_active").siblings().removeClass("cur_active")
            sum = 300*a;
            val = $(".by_coin").html(sum)
        })
    })

    $(".by_author").click(function () {
        $(".baoyangAll").show()
    });
    $(".by_close_btn").click(function () {
        $(".baoyangAll").hide()
    });

//    包养成功
    $(".by_close_suc").click(function () {
        $(".baoyangAll").hide()
         window.location.href='/Book/Authormessge/index?vv=<?php echo ($vals); ?>';
    });
//    包养失败
    $(".by_close_fail").click(function () {
        $(".baoyangAll").hide()
         window.location.reload();
    })
</script>

<!--催更-->
<script>
    var val = $(".cg_coin").html();

    var tet,a,sum;

    $(".cg_month li").each(function () {
        $(this).find("a").click(function () {
//            $(".numCoin").value='自定义';
            tet = $(this).html().split("次");
            a = tet[0];
            $(this).parent().addClass("cg_active").siblings().removeClass("cg_active")
            sum = 10*a;
            val = $(".cg_coin").html(sum)

        });
        $(".cg_month li:last-child").click(function () {
            $(this).siblings().removeClass("cg_active");
//            $(".cg_coin").html(Number($(".numCoin").value)*10)
            })

    });

    function blurfun(obj) {
        if (obj.value ==''){obj.value='自定义'}
    }

    function focusfun(obj) {
        if (obj.value =='自定义'){obj.value =''}
        val = $(".cg_coin").html("0");
    }
    function func1(obj) {
        var b = Number(obj.value)*10;
        console.log(b)
        val = $(".cg_coin").html(b);
    }


    $(".cg_author").click(function () {
        $(".cuigengAll").show();
    });
    $(".cg_close_btn").click(function () {
		$(".cuigengAll").hide();
    });

    //    催更成功
    $(".cg_close_suc").click(function () {
        $(".cuigengAll").hide();
        window.location.reload();
    });
    //    催更失败
    $(".cg_close_fail").click(function () {
        $(".cuigengAll").hide();
        window.location.reload();
    })
</script>

<!--助力动画-->
<script>
    var val = $(".zl_coin").html();

    var tet,a,sum;

    $(".zl_month li").each(function () {
        $(this).find("a").click(function () {
//            $(".numCoin").value='自定义';
            tet = $(this).html().split("次");
            a = tet[0];
            $(this).parent().addClass("zl_active").siblings().removeClass("zl_active")
            sum = 10*a;
            val = $(".zl_coin").html(sum)

        });
        $(".zl_month li:last-child").click(function () {
            $(this).siblings().removeClass("zl_active");
//            $(".cg_coin").html(Number($(".numCoin").value)*10)
        })

    });

    function blurfun2(obj) {
        if (obj.value ==''){obj.value='自定义'}
    }

    function focusfun2(obj) {
        if (obj.value =='自定义'){obj.value =''}
        val = $(".cg_coin").html("0");
    }
    function func2(obj) {
        var b = Number(obj.value)*10;
//        console.log(b)
        val = $(".zl_coin").html(b);
    }


    $(".zl_author").click(function () {
        $(".zhuliAll").show()
    });
    $(".zl_close_btn").click(function () {
        $(".zhuliAll").hide()
    });

    //    助力成功
    $(".zl_close_suc").click(function () {
        $(".zhuliAll").hide();
        window.location.reload();
    });
    //     助力失败
    $(".zl_close_fail").click(function () {
        $(".zhuliAll").hide();
         window.location.reload();
    })
</script>
<script>
function comment(obj){
var subs="<?php echo ($sub); ?>";
if(subs==""){
	alert("请登录后再评论!");
	}else{
		var talkSome = $("#talkSome").val();
		var val= $(obj).attr("val");
		 var spaeak= $(obj).attr("spaeak");
		 if(talkSome==""){
			 alert("内容不能为空谢谢!");
		}else{
			$.post(
				'/Book/Authormessge/speak',
				{"talkSome":talkSome,"val":val,"spaeak":spaeak},
				function(data){
					//alert(data);
					if(data=="1"){
						window.location.href='/Book/Authormessge/index?vv=<?php echo ($vals); ?>';
					}else{
						alert("操作失败,请重新评论!");
					}
				},
				"html"
			)
		  }
      }
}
</script>
<script>
var bookval = "<?php echo ($vals); ?>";
$.post(
		'/Book/Authormessge/agained',
		{"bookval":bookval},
		function(data){
		   	var obj = eval("("+data+")");
		   	for(i=0;i<obj.length;i++){
				var idd=obj[i]['id'];
				var telephone=obj[i]['telephone'];
				var nickname=obj[i]['nickname'];
				var time=obj[i]['time'];
				var content=obj[i]['content'];
				var indexed=obj[i]['indexed'];
				var zan=obj[i]['zan'];
				var saytosay=obj[i]['saytosay'];
				var val=obj[i]['val'];
				var zan=obj[i]['zan'];
				var htmid="returnback"+indexed;
				var classid="more"+indexed;
				var inid = "#"+classid+"";
				var factid = "#"+htmid+"";
				var html="";
						html +="<div class='reply-item' id="+idd+" style='border-bottom:1px solid #fefefe;'>";
						html +=		"<p class='reply-pev'>";
						html +=			"<i class='mine-name'>"+saytosay+"</i>";
						html +=		"</p>";
						html +=		"<div class='reply-content'>";
						html +=			""+content+"";
						html +=		"</div>";
						html +=		"<div class='af-review'>"
						html +=			"<div class='af-time fl'>"+time+"</div>";
						html +=				"<div class='citem-btns fr'>";
						html +=					"<a class='reply'  did="+idd+" onclick='saybackthree(this)'>回复</a>";
						html +=						"|";
						html +=					"<a onclick='zanone(this)' did="+idd+">";
						html +=						"赞";
						html +=						"(<span class='aa'>"+zan+"</span>)";
						html +=					"</a>";
						html +=				"</div>";
						html +=		"</div>";
						html +="</div>";
						
                       $(factid).prepend(html);  
                         var len = $(factid).find('>div').length;
                         if(len>5){
							$(factid).css('overflow','hidden'); 
							$(factid).css('height','600');  
							$(inid).css('display','block');  
						}
						
							//alert("000");
							//$(".after-write-back").css("height","300px");
		    }
		},
		"html"
	)
</script>
<script>
function saybackthree(obj){
var speakid = $(obj).attr("did");
var backid = "#"+speakid+"";
var again = "b"+speakid;
var html ="";
		html +=	"<div class='thred' class='review-content return' id='returnback' style='margin-top:18px;height: auto;'>";
		html +=	"	<div class='re-item'>";
		html +=	"		<textarea class='repeat' name='repeat' id="+again+"></textarea>";
		html +=	"	</div>";
		html +=	"	<div id='motion2' class='motion'></div>";
		html +=	"	<div id='sent-talking' class='sent-talking' onclick='saybackfour(this)' did="+speakid+"><b>回复</b></div>";
		html +=	"</div>";
		$(".thred").html('');  
		$(backid).append(html);  
}
</script>
<script>
function saybackfour(obj){
	
	var subs="<?php echo ($sub); ?>";
	if(subs==""){
		alert("请登录后再评论,谢谢");
	}else{
	var did = $(obj).attr("did");
	var again = "b"+did;
	var contentid = "#"+again+"";
	var content = $(contentid).val();
	if(content==""){
		alert("内容不能为空,谢谢");
	}else{
	 $.post(
		'/Book/Authormessge/saybackfour',
		{"did":did,"content":content},
		function(data){
			//alert(data);
				var obj = eval("("+data+")");
				for(i=0;i<obj.length;i++){
				var idd=obj[i]['id'];
				var telephone=obj[i]['telephone'];
				var nickname=obj[i]['nickname'];
				var time=obj[i]['time'];
				var content=obj[i]['content'];
				var indexed=obj[i]['indexed'];
				var zan=obj[i]['zan'];
				var saytosay=obj[i]['saytosay'];
				var val=obj[i]['val'];
				var zan=obj[i]['zan'];
				var htmid="returnback"+indexed;
				var factid = "#"+htmid+"";
				var html="";
						html +="<div class='reply-item' id="+idd+" style='border-bottom:1px solid #fefefe;'>";
						html +=		"<p class='reply-pev'>";
						html +=			"<i class='mine-name'>"+saytosay+"</i>";
						html +=		"</p>";
						html +=		"<div class='reply-content'>";
						html +=			""+content+"";
						html +=		"</div>";
						html +=		"<div class='af-review'>";
						html +=			"<div class='af-time fl'>"+time+"</div>";
						html +=				"<div class='citem-btns fr'>";
						html +=					"<a class='reply'  did="+idd+" onclick='saybackthree(this)'>回复 &nbsp;  &nbsp;</a>";
						html +=						"|";
						html +=					"<a onclick='zanone(this)' did="+idd+">";
						html +=						"赞";
						html +=						"(<span class='aa'>"+zan+"</span>)";
						html +=				"</div>";
						html +=		"</div>";
						html +="</div>";
                       $(factid).append(html); 
				   }
				   	$(".thred").html('');   
		},
		"html"
	)
    }
   }
}
</script>
<script>//点击回复弹出对应的回复文本框
  <!--回复的文本框-->
  var i = 0;
  
 function saybackone(obj){
		var nickname = $(obj).attr("say");
		var val = $(obj).attr("val");
		var indexed = $(obj).attr("indexed");
		var name = $(obj).attr("names");
		var did =  $(obj).attr("did");
		var tot = "&nbsp;&nbsp;回复:";
		var saytosay = name+tot+nickname;
		var again = "a"+indexed;
 var html ="";
		html +=	"<div class='review-content return' id='returnback'>";
		html +=	"	<div class='re-item'>";
		html +=	"		<textarea class='repeat' name='repeat' id="+again+" placeholder='回复"+nickname+"：'></textarea>";
		html +=	"	</div>";
		html +=	"	<div id='motion2' class='motion'></div>";
		html +=	"	<div id='sent-talking' class='sent-talking' onclick='saybacktwo(this)' saytosay="+saytosay+" indexed="+indexed+" val="+val+"> <b>回复</b></div>";
		html +=	"</div>";
		var a ="#"+did+"";
		$(a).html('');
		$(".removed").css('display','none');
		$(a).css('display','block');
		$(a).append(html);  
}
</script>
<script>
function saybacktwo(obj){
		var subs="<?php echo ($sub); ?>";
	if(subs==""){
		alert("请登录后再评论,谢谢");
	}else{
	
	var saytosay =$(obj).attr("saytosay");
	strs=saytosay.split("回复:"); //字符分割 
	 var d=strs[0];
	 var e=strs[1];
	var indexed =$(obj).attr("indexed");
	var val =$(obj).attr("val");
	var again = "a"+indexed;
	var did = "#"+again+"";
	var content = $(did).val();
	if(content==""){
		alert("内容不能为空,谢谢!");
	}else{
	$.post(
		'/Book/Authormessge/saytosay',
		{"saytosay":saytosay,"indexed":indexed,"content":content,"val":val},
		function(data){
				var obj = eval("("+data+")");
				for(i=0;i<obj.length;i++){
				var idd=obj[i]['id'];
				var telephone=obj[i]['telephone'];
				var nickname=obj[i]['nickname'];
				var time=obj[i]['time'];
				var content=obj[i]['content'];
				var indexed=obj[i]['indexed'];
				var zan=obj[i]['zan'];
				var saytosay=obj[i]['saytosay'];
				var val=obj[i]['val'];
				var zan=obj[i]['zan'];
				var htmid="returnback"+indexed;
				var factid = "#"+htmid+"";
				var html="";
						html +="<div class='reply-item' id="+idd+" style='border-bottom:1px solid #fefefe;'>";
						html +=		"<p class='reply-pev'>";
						//html +=			"<i class='mine-name'>"+saytosay+"</i>";
						html +=			"<i class='mine-name'>"+d+"</i>";
						html +=			"<a style='color:#8c8c8c'>回复:</a>";
						html +=			"<i class='you'>"+e+"</i>";
						html +=		"</p>";
						html +=		"<div class='reply-content'>";
						html +=			""+content+"";
						html +=		"</div>";
						html +=		"<div class='af-review'>";
						html +=			"<div class='af-time fl'>"+time+"</div>";
						html +=				"<div class='citem-btns fr'>";
						html +=					"<a class='reply'  did="+idd+" onclick='saybackthree(this)'>回复</a>";
						html +=						"|";
						html +=					"<a onclick='zanone(this)' did="+idd+">";
						html +=						"赞";
						html +=						"(<span class='aa'>"+zan+"</span>)";
						html +=				"</div>";
						html +=		"</div>";
						html +="</div>";
                       $(factid).prepend(html);  
				   }
				 $(".review-content").remove();
		},
		"html"
	)
    }
  }
}
</script>
<script>
function mored(obj){
var classes = $(obj).attr("sb");
var csl = "#"+classes+"";
$(csl).css('height','auto');
$(obj).css('display','none');
}
</script>
<script>
function zanone(obj){
	var did  = $(obj).attr("did");
	$.post(
		'/Book/Authormessge/zanone',
		{"did":did},
		function(data){
			//alert(data);
			$(obj).find(".aa").html(data);
		},
		"html"
	)
}
</script>
<script>
function zantwo(obj){
	var did  = $(obj).attr("did");
	$.post(
		'/Book/Authormessge/zantwo',
		{"did":did},
		function(data){
			//alert(data);
			$(obj).find(".aa").html(data);
		},
		"html"
	)
}
</script>
<script>
	var bookval = "<?php echo ($vals); ?>";
	$.post(
		'/Book/Authormessge/flows',
		{"bookval":bookval},
		function(data){
			//alert(data);
			var obj = eval("("+data+")");
			for(i=0;i<obj.length;i++){
				var id=obj[i]['id'];
				var did ="flat"+id;
				var ided = "#"+did+"";
				var number = obj.length-i;
				$(ided).html(number);
			}
		},
		"html"
	)
</script>
<script>
	var page = "<?php echo ($p); ?>";
	if(page==""){
	}else{
		//var b = parseInt(document.body.scrollHeight)-600;//整个网页的高度
		var b=1500;
		$('html,body').animate({scrollTop:b},0);//跳转到固定位￼ 置
		var page="";
	}
</script>
<script>
function star(obj){
var dn=$(obj).attr("sp");//评分
var val ="<?php echo ($vals); ?>";
var subs="<?php echo ($sub); ?>";
if(subs==''){
	alert("请登录后，在评分.");
}else{
	$.post(
		'/Book/Authormessge/star',
		{"dn":dn,"val":val,"subs":subs},
		function(data){
			if(data=="1"){
				alert("评分成功，谢谢!");
				window.location.reload();
			}
			else if(data=="2"){
				alert("评分失败，您没有登录!");
			}
			else if(data=="3"){
				alert("您已经评过了，下次过来试试.");
			}
		},
		"html"
	)
}
}
</script>
<script>
function urge(){
$(".cuigengAll").css('display','block');
$(".cuigeng-content").css('display','block');
var coinmoney = $("#coinmoney").text();
var mymoney = $("#mymoney").text();
var month = $("#cg_month").find(".cg_active").text();
var c_month=month.split("次"); //字符分割 
var cg_month =c_month[0];
	if(cg_month==""){
		var cg_month = $("#numCoin").val();
	}
$.post(
		'/Book/Authormessge/urge?val=<?php echo ($vals); ?>',
		{"coinmoney":coinmoney,"mymoney":mymoney,"cg_month":cg_month},
		function(data){
			//alert(data);
			if(data=="1"){
				alert("请登录!");
			}
			else if(data=="2"){
				$(".cuigeng-content").css('display','none');
				$(".cg_success").css('display','block');
				//window.location.reload();
			}
			else{
				$(".cuigeng-content").css('display','none');
				$(".cg_fail").css('display','block');
				//window.location.reload();
			 }
		},
		"html"
	)
}
</script>
<!---以上是催更-->
<!---以下是包养-->
<script>
function included(){
var includemoney   = $("#includemoney").html();
var month = $('.by_month').find(".cur_active").text();
var y_month=month.split("个月"); //字符分割 
var by_month =y_month[0];
var includemymoney = $("#includemymoney").text();
$.post(
		'/Book/Authormessge/included?val=<?php echo ($vals); ?>',
		{"includemoney":includemoney,"includemymoney":includemymoney,"by_month":by_month},
		function(data){
			//alert(data);
			if(data=="1"){
				alert("请登录!");
			}
			else if(data=="2"){
				$(".baoyang-content").css('display','none');
				$(".by_success").css('display','block');
				//window.location.reload();
			}
			else{
				//alert(data);
				$(".baoyang-content").css('display','none');
				$(".by_fail").css('display','block');
				//window.location.reload();
			 }
		},
		"html"
	)
}
</script>
<script>
function moped(){
var mopedmoney   = $("#mopedmoney").html();
var month = $('.zl_month').find(".zl_active").text();
var l_month=month.split("次"); //字符分割 
var zl_month =l_month[0];//助力的次数
var mopedmymoney = $("#mopedmymoney").text();
var zlnumCoin =parseInt($("#zlnumCoin").val());
if(zl_month==""){
    var zl_month=zlnumCoin;
}
if(mopedmoney==""){
	alert('非法操作,请重新输入!');
}else{
$.post(
		'/Book/Authormessge/moped?val=<?php echo ($vals); ?>',
		{"mopedmoney":mopedmoney,"mopedmymoney":mopedmymoney,"zl_month":zl_month},
		function(data){
			if(data=="1"){
				alert("请登录!");
			}
			else if(data=="2"){
				$(".zhuli-content").css('display','none');
				$(".zl_success").css('display','block');
				//window.location.reload();
			}
			else{
				$(".zhuli-content").css('display','none');
				$(".zl_fail").css('display','block');
				//window.location.reload();
			 }
		},
		"html"
	)
  }
}
</script>
<script>
function gifts(){
var giftmoney = $("#imgListclearfix").find(".bor-current").attr("did");
var names = $("#imgListclearfix").find(".bor-current").attr("names");
var Numclearfix = $("#chooseNumclearfix").find(".ds_active").attr("cat");
var dsnumCoin = parseInt($("#dsnumCoin").val());
var paymoney = $("#paymoney").text();
var giftmymoney =  $("#giftmymoney").text();
var contents = $("#liuyan").val();
var liuyan = $("#liuyan").attr("placeholder");
if(contents==""){
   var contents=liuyan;
}
if(Numclearfix==undefined){
  var Numclearfix=dsnumCoin;
}
if(paymoney==""){
	alert("输入不合法,请重新输入!");
}else{
	$.post(
		'/Book/Authormessge/gifts?val=<?php echo ($vals); ?>',
		{"giftmoney":giftmoney,"names":names,"Numclearfix":Numclearfix,"paymoney":paymoney,"giftmymoney":giftmymoney,"contents":contents},
		function(data){
			//alert(data);
			if(data=="1"){
				alert("请登录!");
			}
			else if(data=="2"){
				$(".exceptional-content").css('display','none');
				$(".ds_success").css('display','block');
				//window.location.reload();
			}
			else{
				alert("打赏失败,请重新操作!");
			 }
		},
		"html"
	)
}
}
</script>
<script>
function passager(){
var bookval = "<?php echo ($vals); ?>";
$.post(
		'/Book/Authormessge/passage',
		{"bookval":bookval},
		function(data){
		var obj = eval("("+data+")");
		var longer = parseInt(obj.length);
		//var longer=40;
		    if(20<=longer && longer<40){
				var htmlmenu="";
						htmlmenu +="<span class='chapter-page-pager p-relative'>";
						htmlmenu +="<a class='chapter-page-btn-first head-last chapter-active'>1-20</a>";
						htmlmenu +="<a class='chapter-page-btn-all'>";
						htmlmenu +="<b>...</b>";
						htmlmenu +="<div class='chapter-page-more p-absolute'>";
						htmlmenu +="<span>1-20</span>";
						htmlmenu +="<span class='notOne'>21-40</span>";
						htmlmenu +="</div>";
						htmlmenu +="</a>";
						htmlmenu +="<a class='chapter-page-btn-all head-last'>最新20话</a>";
						htmlmenu +="</span>";
						$("#addid").append(htmlmenu);  
		     }
		     if(40<=longer && longer<60){
				var htmlmenu="";
						htmlmenu +="<span class='chapter-page-pager p-relative'>";
						htmlmenu +="<a class='chapter-page-btn-first head-last chapter-active'>1-20</a>";
						htmlmenu +="<a class='chapter-page-btn-all'>";
						htmlmenu +="<b>...</b>";
						htmlmenu +="<div class='chapter-page-more p-absolute'>";
						htmlmenu +="<span>1-20</span>";
						htmlmenu +="<span class='notOne'>21-40</span>";
						htmlmenu +="<span class='notOne'>41-60</span>";
						htmlmenu +="</div>";
						htmlmenu +="</a>";
						htmlmenu +="<a class='chapter-page-btn-all head-last'>最新20话</a>";
						htmlmenu +="</span>";
						$("#addid").append(htmlmenu);  
							
		     }
		       if(60<=longer && longer<80){
				var htmlmenu="";
						htmlmenu +="<span class='chapter-page-pager p-relative'>";
						htmlmenu +="<a class='chapter-page-btn-first head-last chapter-active'>1-20</a>";
						htmlmenu +="<a class='chapter-page-btn-all'>";
						htmlmenu +="<b>...</b>";
						htmlmenu +="<div class='chapter-page-more p-absolute'>";
						htmlmenu +="<span>1-20</span>";
						htmlmenu +="<span class='notOne'>21-40</span>";
						htmlmenu +="<span class='notOne'>41-60</span>";
						htmlmenu +="<span class='notOne'>61-80</span>";
						htmlmenu +="</div>";
						htmlmenu +="</a>";
						htmlmenu +="<a class='chapter-page-btn-all head-last'>最新20话</a>";
						htmlmenu +="</span>";
						$("#addid").append(htmlmenu);  
		     }
		      if(80<=longer && longer<100){
				var htmlmenu="";
						htmlmenu +="<span class='chapter-page-pager p-relative'>";
						htmlmenu +="<a class='chapter-page-btn-first head-last chapter-active'>1-20</a>";
						htmlmenu +="<a class='chapter-page-btn-all'>";
						htmlmenu +="<b>...</b>";
						htmlmenu +="<div class='chapter-page-more p-absolute'>";
						htmlmenu +="<span>1-20</span>";
						htmlmenu +="<span class='notOne'>21-40</span>";
						htmlmenu +="<span class='notOne'>41-60</span>";
						htmlmenu +="<span class='notOne'>61-80</span>";
						htmlmenu +="<span class='notOne'>81-100</span>";
						htmlmenu +="</div>";
						htmlmenu +="</a>";
						htmlmenu +="<a class='chapter-page-btn-all head-last'>最新20话</a>";
						htmlmenu +="</span>";
						$("#addid").append(htmlmenu);  
		     }
		      if(100<=longer){
				var htmlmenu="";
						htmlmenu +="<span class='chapter-page-pager p-relative'>";
						htmlmenu +="<a class='chapter-page-btn-first head-last chapter-active'>1-20</a>";
						htmlmenu +="<a class='chapter-page-btn-all'>";
						htmlmenu +="<b>...</b>";
						htmlmenu +="<div class='chapter-page-more p-absolute'>";
						htmlmenu +="<span>1-20</span>";
						htmlmenu +="<span class='notOne'>21-40</span>";
						htmlmenu +="<span class='notOne'>41-60</span>";
						htmlmenu +="<span class='notOne'>61-80</span>";
						htmlmenu +="<span class='notOne'>81-100</span>";
						htmlmenu +="<span class='notOne'>101-</span>";
						htmlmenu +="</div>";
						htmlmenu +="</a>";
						htmlmenu +="<a class='chapter-page-btn-all head-last'>最新20话</a>";
						htmlmenu +="</span>";
						$("#addid").append(htmlmenu);  
		     }
		     //    章节列表
		     	   $(".chapter-page-btn-first").click(function () {
						$(this).addClass("chapter-active").siblings().removeClass("chapter-active")
					});
					$(".notOne").each(function (i,elem) {
							($(elem).click(function () {			
								$(elem).addClass("chapter-active").siblings().removeClass("chapter-active")
									.parents().find(".chapter-page-pager>a:nth-of-type(2)").addClass("chapter-active").siblings().removeClass("chapter-active")
								index = $(this).index();
								$(".t-chapter").eq(i).css("display","block").siblings().not(".chapter-lists-head").css("display","none");
							})).i=i;
						});
						$(".chapter-page-more>span:first").click(function () {
							$(this).addClass("chapter-active").siblings().removeClass("chapter-active")
								.parents().find(".chapter-page-pager>a:first").addClass("chapter-active").siblings().removeClass("chapter-active");
							$(".chapter-lists-content:first").css("display","block").siblings().not(".chapter-lists-head").css("display","none");
						});

						$(".chapter-page-pager>a:last-child").click(function () {
							
							$(this).parents().find(".chapter-page-more>span").removeClass("chapter-active")
							$(".chapter-lists-content:last").css("display","block").siblings().not(".chapter-lists-head").css("display","none");
						});
						$(".chapter-page-pager>a:first-child").click(function () {
							$(this).parents().find(".chapter-page-more>span").removeClass("chapter-active")
							$(".chapter-lists-content:first").css("display","block").siblings().not(".chapter-lists-head").css("display","none");
						});
					
							$(".chapter-page-btn-all").hover(function () {
						$(this).find(".chapter-page-more").css("display","block")

					},function () {
						$(this).find(".chapter-page-more").css("display","none")
					})
		//章节列表结束
			for(i=0;i<obj.length;i++){
				var section = obj[i]['section'];///
				var val="<?php echo ($vals); ?>";
				var k=parseInt(i)+1;
				var infor = "/Book/LookComi/index/cy/"+val+"/p/"+k+".html"
				var vipe = parseInt(obj[i]['vipe']);
			    if(i<20){
							if(vipe==0){
								var html="";
										html +="<div class='m-chapter-item border'>";
										html +="<a href="+infor+">";
										html +="<span class='f-toe'>"+section+"</span>";
										html +="</a>";
										html +="</div>";
										$("#chapter1-20").append(html);  
										
								/*var htmnew = "";
									htmnew +="<div class='m-chapter-item border'>";
									htmnew +="<a href="+infor+">";
									htmnew +="<span class='f-toe'>"+section+"</span>";
									htmnew +="</a>";
									htmnew +="</div>";
								$("#chapter-new20").append(htmnew);  */
							   }
							 if(vipe==1){
								 var html="";
									html +="<div class='m-chapter-item border'>";
									html +="<a href="+infor+">";
									html +="<span class='f-toe'>"+section+"&nbsp;&nbsp;<i><img src='/Public/Book/Authormessge/images/vip.png'></i></span>";
									html +="</a>";
									html +="</div>";
									$("#chapter1-20").append(html);  
							/*	var htmnew = "";	
									htmnew +="<div class='m-chapter-item border'>";
									htmnew +="<a href="+infor+">";
									htmnew +="<span class='f-toe'>"+section+"<i><img src='/Public/Book/Authormessge/images/vip.png'></i></span>";
									htmnew +="</a>";
									htmnew +="</div>";
									$("#chapter-new20").append(htmnew); */ 

							 }
			           }
			         if(20<=i && i<40){
						 if(vipe==0){
								var html="";
										html +="<div class='m-chapter-item border'>";
										html +="<a href="+infor+">";
										html +="<span class='f-toe'>"+section+"</span>";
										html +="</a>";
										html +="</div>";
										$("#chapter21-40").append(html);  
							   }
							 if(vipe==1){
								 var html="";
									html +="<div class='m-chapter-item border'>";
									html +="<a href="+infor+">";
									html +="<span class='f-toe'>"+section+"&nbsp;&nbsp;<i><img src='/Public/Book/Authormessge/images/vip.png'></i></span>";
									html +="</a>";
									html +="</div>";
									$("#chapter21-40").append(html);  
							 }
					 }
					 
					  if(40<=i && i<60){
						 if(vipe==0){
								var html="";
										html +="<div class='m-chapter-item border'>";
										html +="<a href="+infor+">";
										html +="<span class='f-toe'>"+section+"</span>";
										html +="</a>";
										html +="</div>";
										$("#chapter41-60").append(html);  
							   }
							 if(vipe==1){
								 var html="";
									html +="<div class='m-chapter-item border'>";
									html +="<a href="+infor+">";
									html +="<span class='f-toe'>"+section+"&nbsp;&nbsp;<i><img src='/Public/Book/Authormessge/images/vip.png'></i></span>";
									html +="</a>";
									html +="</div>";
									$("#chapter41-60").append(html);  
							 }
					 }
					 
					   if(60<=i && i<80){
						 if(vipe==0){
								var html="";
										html +="<div class='m-chapter-item border'>";
										html +="<a href="+infor+">";
										html +="<span class='f-toe'>"+section+"</span>";
										html +="</a>";
										html +="</div>";
										$("#chapter61-80").append(html);  
							   }
							 if(vipe==1){
								 var html="";
									html +="<div class='m-chapter-item border'>";
									html +="<a href="+infor+">";
									html +="<span class='f-toe'>"+section+"&nbsp;&nbsp;<i><img src='/Public/Book/Authormessge/images/vip.png'></i></span>";
									html +="</a>";
									html +="</div>";
									$("#chapter61-80").append(html);  
							 }
					 }
					  if(80<=i && i<100){
						 if(vipe==0){
								var html="";
										html +="<div class='m-chapter-item border'>";
										html +="<a href='#'>";
										html +="<span class='f-toe'>"+section+"</span>";
										html +="</a>";
										html +="</div>";
										$("#chapter81-100").append(html);  
							   }
							 if(vipe==1){
								 var html="";
									html +="<div class='m-chapter-item border'>";
									html +="<a href='#'>";
									html +="<span class='f-toe'>"+section+"&nbsp;&nbsp;<i><img src='/Public/Book/Authormessge/images/vip.png'></i></span>";
									html +="</a>";
									html +="</div>";
									$("#chapter81-100").append(html);  
							 }
					 }
					  if(100<=i){
						 if(vipe==0){
								var html="";
										html +="<div class='m-chapter-item border'>";
										html +="<a href='#'>";
										html +="<span class='f-toe'>"+section+"</span>";
										html +="</a>";
										html +="</div>";
										$("#chapter101-120").append(html);  
							   }
							 if(vipe==1){
								 var html="";
									html +="<div class='m-chapter-item border'>";
									html +="<a href='#'>";
									html +="<span class='f-toe'>"+section+"&nbsp;&nbsp;<i><img src='/Public/Book/Authormessge/images/vip.png'></i></span>";
									html +="</a>";
									html +="</div>";
									$("#chapter101-120").append(html);  
							 }
					 }
					 
				 }
		},
		"html"
	)
}
window.setTimeout(passager,1000);
</script>
<script>
function linyu(){
	alert("业务暂无开通,敬请期待!");
}
</script>
<script>
function qiandao(obj){
	alert("业务暂无开通,敬请期待!");
}
</script>
<script>
function joinshelf(obj){
var did = $(obj).attr("did");
$.post(
		'/Book/Authormessge/joinshelf',
		{"did":did},
		function(data){
			if(data=="1"){
				window.location.reload();
			}
			else if(data=="2"){
				alert("请重新操作!");
			}
			else if(data=="3"){
				alert("已经收藏,到别处看看!");
			}
			else if(data=="4"){
				alert("请登录之后在收藏,谢谢!");
			}
		},
		"html"
	)
}
</script>
<script>
function deleted(obj){
var did = $(obj).attr("did");
$.post(
		'/Book/Authormessge/deleted',
		{"did":did},
		function(data){
			//alert(data);
			if(data=="1"){
				window.location.reload();
			}
			else if(data=="2"){
				alert("请重新操作!");
			}
			else if(data=="3"){
				alert("请登录后再操作!");
			}
		},
		"html"
	)
}
</script>

<!--主创档案 签到-->
<!--<script>
    $(function () {
        var i = 4;
        var j = 0;
        $(".sign-in").click(function () {
            if(j == 0){
                j=1;
                $(".weiqian").hide();
                $(".yiqian").show();
                $(".signPop").fadeIn();
                function myCount(){
                    i--;
//                    console.log(i);
                    if(i == 0){
                        $(".signPop").fadeOut();
                        return;
                    }
                    setTimeout(myCount,1000);
                }
                myCount();
            }

        });
    })
</script>-->



<script>
function written(){
	var i = 4;
	var val = "<?php echo ($vals); ?>";
	$.post(
		'/Book/Authormessge/written',
		{"val":val},
		function(data){
			if(data=="1"){
			}
			else if(data=="2"){
				alert("数据更新失败,请重新操作!");
			}
			else if(data=="3"){
				alert("签到失败,请重新签到!");
			}
			else{
				var obj = eval("("+data+")");
				var exprenced = obj['comon'];
				var goldid = obj['gold'];
				$("#exprenced").html(exprenced);
				$("#goldid").html(goldid);
				$(".signPop").fadeIn();
				var j = 0;
			}
		},
		"html"
	)
	
		if(j == 0){
                j=1;
                function myCount(){
                    i--;
                    if(i == 0){
                        $(".signPop").fadeOut();
                       window.location.reload();
                        return;
                    }
                    setTimeout(myCount,1000);
                }
                myCount();
            }
	
}
</script>
<script>
	var buied = "<?php echo ($buy); ?>";
	if(buied=="1"){
		$(".baoyangAll").show();
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
 <script src="/Public/Book/Authormessge/Js/express.js"></script>
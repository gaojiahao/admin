<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员窗口</title>
    <link href="/Public/Admin/Common/Css/page.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/main.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/Common/Css/webmallDialog.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/Public/Admin/Common/Css/manger.css">
    <script type="text/javascript" src="/Public/Admin/Common/Js/jquery-2.2.3.js"></script>
</head>
<body bgcolor="#F7F7F7">
<div class="content">

    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：管理员注册：</div>
    <div class="mr_content">
        <!--<div class="keywords_show"></div>-->
        <div class="real_c">
            <div class="mr_input">
                <form name="article_add" method="post" action="">
                    <div class="inputPhoneNum">
                        <input class="registInput" type="text" placeholder="请输入手机号码"/>
                        <p class="tipText">请输入手机号~_~</p>
                    </div>
                    <div class="layoutPhone">
                        <div class="verification">
                            <input type="text" name="verifyphone" id="verifyPhone" placeholder="请输入手机验证码">
                        </div>
                        <div class="getVerify">
                            <button type="button" name="getVerify" id="getVerify">获取验证码</button>
                        </div>
                        <p class="tipText">验证码错误，请重新输入~_~</p>
                    </div>
                    <div class="inputUserName">
                        <input type="text" id="userName" class="registInput" name="userName" maxlength="14" placeholder="请输入用户名(2-14位字符组成)">
                        <p class="tipText">用户名不符合规范</p>
                    </div>
                    <div class="inputPassword">
                        <input type="password" id="pswd" class="registInput" maxlength="16" name="password" placeholder="请输入密码(6-16位字母组成，区分大小写)">
                        <p class="tipText">密码不符合规范</p>
                    </div>
                    <div class="inputCode">
                        <input type="text" placeholder="请输入口令" id="codeSubmit" class="registInput">
                        <p class="tipText">口令不正确</p>
                    </div>
                    <div class="registerBtn">注册</div>
                </form>
            </div>
        </div>
    </div>
    <!--<div class="b_border"></div>-->

</div>
</body>
</html>
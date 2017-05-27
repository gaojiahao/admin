<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8" />    
    <title>后台登陆系统</title>
    <link rel="stylesheet" href="/Public/Admin/css/public.css" />
    <link rel="stylesheet" href="/Public/Admin/css/supersized.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/Public/Admin/img/title-logal.png">
    <link rel="stylesheet" href="/Public/Admin/css/Admin.css">
</head>
<body>
    <div class="scr-body">
        <div class="scr-header">
            <a class="logo"></a>
        </div>
        <div class="scr-wrapper">
            <form id="login-form" action="<?php echo U('Admin/lg'); ?>" method="post">
                <ul class="scr-log-form-list">
                    <li class="src-form-item">
                        <div class="Icon fl">
                            <img src="/Public/Admin/img/username.png" alt="">
                        </div>
                        <div class="input fl">
                            <input type="text" id="username" class="username" name="user" placeholder="用户名/邮箱">
                        </div>
                    </li>
                    <li class="src-form-item">
                        <div class="Icon fl">
                            <img src="/Public/Admin/img/sock.png" alt="">
                        </div>
                        <div class="input fl">
                            <input type="password" id="psd" name="pass" class="password" placeholder="密码">
                        </div>
                    </li>
                    <li class="src-form-item">
                        <div class="Icon fl">
                            <img src="/Public/Admin/img/psd.png" alt="">
                        </div>
                        <div class="input fl">
                            <input type="text" id="code" name="code" placeholder="口令">
                        </div>
                    </li>
                    <li class="src-form-item">
                        <a href="javascript:;">
                            <input type="button" id="password" class="log-btn" value="立即登录">
                        </a>
                    </li>
                </ul>
                <!--<div class="error"><span>+</span></div>-->
            </form>
        </div>
    </div> 
    
</body>
<script src="/Public/Admin/Js/jquery-1.8.2.min.js" ></script>
<script src="/Public/Admin/Js/supersized.3.2.7.min.js"></script>
<script src="/Public/Admin/Js/supersized-init.js"></script>
<!--<script src="Js/scripts.js" ></script>-->

</html>
<script>
    $(function(){
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        $('.log-btn').click(function(){
            var code = $('#code').val();
            var psd = $('#psd').val();
            var username = $('#username').val();
            if(code == '' ||  psd == '' || username == '')
            {
                alert('所有参数不能为空');
                return false;
            }
            if(!myreg.test(username))
            {
                alert('请输入有效的账号');
                return false;
            }
            var reg = /^[0-9a-zA-Z_.]{6,20}$/;
            if(psd.length<6 || !reg.test(psd))
            {
                alert("请输入有效的密码");
                return false;
            }
            /*var lime = /^[0-9a-zA-Z_.]{6,20}$/;
            if(!lime.test(code))
            {
                alert("请输入有效的code");
                return false;
            }*/
            $.ajax({
                data : {
                    'code':code,
                    'username':username,
                    'psd':psd,
                },
                url : "<?php echo U('Login/lg');?>",
                type : 'POST',
                success:function(data){
                    if(data == 'error'){
                        alert('账号或密码或口令错误');
                    }else{
                        window.location.href="<?php echo U('Admin/index');?>";
                    }
                }
            });
        });

    });
</script>
<?php
namespace Qcloud\Sms\Demo;
require_once "SmsSender.php";
use Qcloud\Sms\SmsSingleSender;
use Qcloud\Sms\SmsMultiSender;
try {
    // 请根据实际 appid 和 appkey 进行开发，以下只作为演示 sdk 使用
    $appid = 1400029524;
    $appkey = "e7ae9df622d86f14644f3aa2aa703b84";
    
	session_start();
	$telphone=$_session['telephones'];  
	$countrytelephone=$_session['countrytelephone'];
    $phoneNumber = $telphone;    
    $templId = 17520;

    $singleSender = new SmsSingleSender($appid, $appkey);
	$number=rand(1000,9999);
	setcookie('number',$number,time()+90);
	//$b = $countrytelephone;
        $b =86;
    // 普通单发
    $result = $singleSender->send(0, "$b", $phoneNumber, "您好，您的短信验证码是：{$number}，请在有效的时间内输入提交，谢谢!", "", "");
    $rsp = json_decode($result);  //解析json数据
    $jsonarray =json_decode(json_encode($rsp),TRUE);   //将对象转换成数组，再进行解析输出.
    $jsondata = $jsonarray[errmsg];
    echo ($jsondata);
   


    // 指定模板单发
    /* 假设模板内容为：测试短信，{1}，{2}，{3}，上学。
    $params = array("指定模板单发", "深圳", "小明");
    $result = $singleSender->sendWithParam("86", $phoneNumber2, $templId, $params, "", "", "");
    $rsp = json_decode($result);
    echo $result;
    echo "<br>";

    $multiSender = new SmsMultiSender($appid, $appkey);

    // 普通群发
    $phoneNumbers = array($phoneNumber1, $phoneNumber2, $phoneNumber3);
    $result = $multiSender->send(0, "86", $phoneNumbers, "测试短信，普通群发，深圳，小明，上学。", "", "");
    $rsp = json_decode($result);
    echo $result;
    echo "<br>";

    // 指定模板群发，模板参数沿用上文的模板 id 和 $params
    $params = array("指定模板群发", "深圳", "小明");
    $result = $multiSender->sendWithParam("86", $phoneNumbers, $templId, $params, "", "", "");
    $rsp = json_decode($result);
    echo $result;
    echo "<br>";*/
} catch (\Exception $e) {
    echo var_dump($e);
}

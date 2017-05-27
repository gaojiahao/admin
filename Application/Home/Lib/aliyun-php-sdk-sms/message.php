<?php    
    include_once 'aliyun-php-sdk-core/Config.php';
    use Sms\Request\V20160927 as Sms;      
	session_start();
	$telphone=$_session['telephones'];  
    $iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "LTAI4iA4uZjvE4J3", "K5ixlwBsXARFopAmtBS06qD8hBGlG8");        
    $client = new DefaultAcsClient($iClientProfile);    
    $request = new Sms\SingleSendSmsRequest();
    $request->setSignName("次元播");/*签名名称*/
    $request->setTemplateCode("SMS_35000273");/*模板code*/
    $request->setRecNum("$telphone");/*目标手机号*/
    $number = rand(1000,9999);
    $_session['sure']= $number;  
    setcookie('number',$number,time()+80);
    $request->setParamString("{\"code\":\"$number\"}");/*模板变量，数字一定要转换为字符串*/
    try {
        $response = $client->getAcsResponse($request);
        //print_r($response);
        echo "OK";
    }
    catch (ClientException  $e) {
		echo "验证码获取错误,请重新获取!";
		//print_r($e->getErrorCode());   
		print_r($e->getErrorMessage());   
    }
    catch (ServerException  $e) {    
		echo "验证码获取错误,请重新获取!";    
       // print_r($e->getErrorCode());   
        //print_r($e->getErrorMessage());
    }
?>

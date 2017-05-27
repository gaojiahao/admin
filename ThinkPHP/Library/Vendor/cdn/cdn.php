<?php
namespace Cdn\Request\V20141111;
include_once 'aliyun-php-sdk-core/Config.php';

/*use Ecs\Request\V20140526 as Ecs;
$iClientProfile = DefaultProfile::getProfile("cn-hangzhou","LTAI4iA4uZjvE4J3", "K5ixlwBsXARFopAmtBS06qD8hBGlG8");
$client = new DefaultAcsClient($iClientProfile);
$request = new Ecs\DescribeRegionsRequest();
$request->setMethod("GET");
$response = $client->getAcsResponse($request);*/
//echo "<pre/>";
//print_r($response);

    include_once 'aliyun-php-sdk-cdn/Cdn/Request/V20141111/RefreshObjectCachesRequest.php';
	$req = new RefreshObjectCachesRequest();
	
	$c = new AliyunClient;
	$c->accessKeyId = "LTAI4iA4uZjvE4J3";
	$c->accessKeySecret = "K5ixlwBsXARFopAmtBS06qD8hBGlG8";
	$c->serverUrl = "www.2ciyuan.tv.w.kunlunno.com"; //根据不同产品选择相应域名，例如：CDN，http://cdn.aliyuncs.com/*/
	echo "<pre/>";
	print_r($c);
	exit();
	
$req->setObjectType("File"); // or Directory
$req->setObjectPath("www.2ciyuan.tv.w.kunlunno.com");
try {
    $resp = $c->execute($req);
    if(!isset($resp->Code))
    {    
        //刷新成功
        echo($resp->RequestId);
        print_r($resp);
    }
    else 
    {
        //刷新失败
        $code = $resp->Code;
        $message = $resp->Message;
    }
}
catch (Exception $e)
{
    // TODO: handle exception
}
	
	
   
?>


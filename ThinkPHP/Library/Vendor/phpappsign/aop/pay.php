<?php
include("AopClient.php");
include("request/AlipayTradeAppPayRequest.php");
$aop = new AopClient;
$aop->gatewayUrl = "https://openapi.alipay.com/gateway.do";
$aop->appId = "2017042106873578";
$aop->rsaPrivateKey = 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCO6bu8X24f+dW7E3YPgEmJy/+0/5FP3aM3N3WhT0fq+R3syYX8lfwX0Pz9Kaj2uBb1awMp5uAgUH1V6mDlFP35/C333TKFxCZEzylCsc/GMB9WJxdWSOJx73e58Lr2yAXGHhvKBLi3MxgaCls3eQr8LtUngt+5nIfqtBBIsljkuJqD+Ig9OY3li06q7rk2Qc9KzjZfkcbhZ3DpfeLb6mmIGHAt3F1+Y3Yds0lqKvdfqWDX7JdeC2TNQMA4KFeeJZaR1KW/VlgQvwVJQKfkhpRt6hXnCGS+lKNlXqadQB151tQ0VTPRrrLXTaNu4rXgELIVADLgbPlwiOtX/tE5tlBfAgMBAAECggEADqdo2KfwYtb7U3NrZ6t/3uFMFwMdo1LWqZLGPQQkG7PvnZgMZRn7/3Uue8cJzEKUGBYg/OrvkGCweV7PEK5WXIu/KutDgvPZ+LRFRtF0vJ2ymOLpQa+3iHdFj4tfoG5iKS5tKwnQ5vgWQJVPRSDkP3eN479HsYCbbzWHdezTsKAV5kXweYQTGax5FxpFp72/8zLOFlcmI35ZZj2Mgc5m/wiIwhYTIDbIXSIYZtF10ydH0gpmqp84uvsUeADiwIAOmuzGWEyS8YE2TfPVKDU0ni1NlYXVk9n6QYQTYLLy5OnaPhWnRJyLnT968elyEvFbd0b/jrxfdL34Rit93xJCAQKBgQDM5qq2ZnblOHToZqa1F7/DWES+pfoYh7qW+/wXTicpn8jFaUDUA0rTGLvhSYTq8WfAUNDuMgcN9Nx/dO0TIUmsQ9prq7XB+EXrLjHP4BFnO6mDClZ7VyDjWvElHhovUEuTHekEKCuHwkTT0JvbqKnk5WWYSjK3erhxP0MkOfgJRQKBgQCyjZ1pBYU51Bz/uwKnZRVCKK39eMiTvD9BXzkoOdejW4dySYc5ZMaiQr1Kh+RZDg/Wa5hIEPk9d1UJLbG3BoEhWlgLjz/ab3oGBfKv8I7lwM7BFAgKjxaQq2fVbdcqNKOq16VHCuQS8ApT1Pd2ZGAoSRwsC2lChvql0xqbh6mDUwKBgAQjtNcygrxmw5XeXQfTjwA3TEw9tivAsjhSpukhnxDsNXYnhjPCTUSufz0x6wmEDwCHoXDuec4CYGICzrdQONjOFh+OvIFKrr7tk/wLHs7jGa2YC986B2QQdka1sPm7uYsjU43N8fMwLYvJ7xwk8Cm7qK3G8fda91byXDzjHuuxAoGBAKUNr+MzTTJl1+C2WP+wu3QK8ruK+a9HpxmhEs8SmTnTFGQbgDsX415/X0gUUovYKd/GWmDT//JH632ulcdg5eGVCCq3YwljX2NOAEePkijkkLt+7ugD2ZImQLfU779+JYV6DribYrX22zUfexogM5tJ6hb0/XqYF/9OJBx9zb8tAoGAeaJhvPswfwhx5hSYKwXCbcE4BGOB6Zr67ECpf8iJi6Y3opTSpCow24MGDxbhkxKz0UYR5ZyKkBrpHlcA6j09i1+yr7FLrmmnkfYgle8mOgKj0aDo7FVIc4T+NA42RlVrVskUE3CCKm2Sq3/mCVHxfNy3SUtTiET9CRBHLq+HXHs=';
$aop->format = "json";
$aop->charset = "UTF-8";
$aop->signType = "RSA2";
$aop->alipayrsaPublicKey = ' MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgejPJ3DWemO71Pa/4Hyuye2NyIfAav6L9JIJsDnbSlwcHsOSmIqykb/55FbIaLtlguGzlMG3X2JQHE/c8rF2yUX5hmAqfD0c1YwjojYdBm+66RbXS28uxjjxhNUUW0yVbt6HZthEobxYuLVXfn+gYEAwAwF1/hkWRk8YUfZOrv6Mbp3yW8ItvMn/8EJh3qGnT4GDj+GU8799gT3aDN4N779Q0P57Pv4Zl3OeoSIuRIve5b9pC51oG1uDQ0ACcL6azlQLqEG9GqwZzH4XDviUJE/BamlUihGAN3H2i48osPzgppvjzxMLkUDcw4TRdnDteQ+C2IK3rvFps9cVSB5q1QIDAQAB';
//实例化具体API对应的request类,类名称和接口名称对应,当前调用接口名称：alipay.trade.app.pay
$request = new AlipayTradeAppPayRequest();
//SDK已经封装掉了公共参数，这里只需要传入业务参数
$bizcontent = "{\"body\":\"我是测试数据\","
                . "\"subject\": \"App支付测试\","
                . "\"out_trade_no\": \"20170125test01\","
                . "\"timeout_express\": \"30m\","
                . "\"total_amount\": \"0.01\","
                . "\"product_code\":\"QUICK_MSECURITY_PAY\""
                . "}";
$request->setNotifyUrl("商户外网可以访问的异步地址");
$request->setBizContent($bizcontent);
//这里和普通的接口调用不同，使用的是sdkExecute
$response = $aop->sdkExecute($request);
//htmlspecialchars是为了输出到页面时防止被浏览器将关键参数html转义，实际打印到日志以及http传输不会有这个问题
//echo "<pre/>";
//echo "<pre/>";
echo htmlspecialchars($response);//就是orderString 可以直接给客户端请求，无需再做处理.
?>

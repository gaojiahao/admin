<?php
//header( "Content-type: image/jpeg");
include 'phpqrcode.php'; 
   // vendor("phpqrcode.phpqrcode");
    $url="www.2ciyuan.tv";
    $flag=1;
    // 纠错级别：L、M、Q、H
    $level = 'L';
    // 点的大小：1到10,用于手机端4就可以了
    $size = 4;
    // 下面注释了把二维码图片保存到本地的代码,如果要保存图片,用$fileName替换第二个参数false
    if($flag){
        $path = "Public/QRcode/";
        if(!file_exists($path)){ 
            mkdir($path, 0700); 
        }
        // 生成的文件名
        $fileName = $path.time().'.png';
        QRcode::png($url, $fileName, $level, $size); 
        //return $fileName;
        print_r($fileName);
    }else{
        QRcode::png($url, $false, $level, $size); 
        exit;
    }
?>

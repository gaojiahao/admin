<?php
namespace Api\Controller;
use Think\Controller;
use OSS\OssClient; // | OSS客户端类，用户通过OssClient的实例调用接口 |
use OSS\Core\OssException; // | OSS异常类，用户在使用的过程中，只需要注意这个异常|
require_once "./ThinkPHP/Library/Vendor/aliyun-oss-php-sdk-master/autoload.php"; //引入这个阿里云文件

class BaseController extends Controller {
    public function index(){
        
    }
    //
    public function Upload(){   
	    $space		= I('post.space');
		$partition	= I('post.partition');
		$thumb		= I('post.thumb');
		$width		= I('post.width',0);
		$height		= I('post.height',0);
		if ( $space == false )
		{
			$data = array(
				'status' 	=> false,
				'info'		=> "1",
				'data'		=> "参数错误"
			);
			$this->ajaxReturn($data);
		}

		$space		= str_replace('.', '/', $space);
		
		$_uploadDir	="Public/Uploads/";
		// 上传文件 
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     4194304 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$a=$upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
	    $info   =   $upload->upload();
		//反馈信息到模板，看是否成功！
		if(!$info) {
			// 上传错误提示错误信息
			$data = array(
				'status' 	=> false,
				'info'		=> "2",
				'data'		=> "上传错误"
		    );
			$this->ajaxReturn($data);
		}else{
			// 上传成功
			$imgSrc = "/".$_uploadDir.$info[0]['savepath'].$info[0]['savename'];

			$data = array(
				'status' 	=> true,
				'info'		=> "1",
				'data'		=> $imgSrc  //图片
			);
			$this->ajaxReturn($data);
		}
	}

	public function cropsubmit(){
    	$z=I('post.z');
		$pic_name=$z;
		$pathpicture = ".".$pic_name;
		$at= substr($pic_name,1,50);
		$x=I('post.x'); 
		$y=I('post.y');   
		$w=I('post.w'); 
		$h=I('post.h');
		$image = new \Think\Image(); 
		$abd = $image->open("$pathpicture");	
	    $dap  = rand(100000,999999);
	    $dappath = "crop/upload/time/$dap.jpg";
	    $daplongpath ='/'.$dappath;
		$bcd =$image->crop($w, $h,$x,$y)->save("$dappath");
		$result = @unlink($at); //删除图片
		if($bcd){
			echo $daplongpath;
			//echo "1";
		}else{
			echo "2";
		}	
	}

	public function Uploadface(){
		$space		= I('post.space');
		$partition	= I('post.partition');
		$thumb		= I('post.thumb');
		$width		= I('post.width',0);
		$height		= I('post.height',0);
		if ( $space == false )
		{
			$data = array(
				'status' 	=> false,
				'info'		=> "1",
				'data'		=> "参数错误"
			);
			$this->ajaxReturn($data);
		}

		$space		= str_replace('.', '/', $space);
		
		$_uploadDir	="Public/Uploads/";
		// 上传文件 
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     41943040 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$a=$upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
	    $info   =   $upload->upload();
		//反馈信息到模板，看是否成功！
		if(!$info) {
			// 上传错误提示错误信息
			$data = array(
				'status' 	=> false,
				'info'		=> "2",
				'data'		=> "上传错误"
		    );
			$this->ajaxReturn($data);
		}else{
			// 上传成功
			$imgSrc =$_uploadDir.$info[0]['savepath'].$info[0]['savename']; 
			list($width, $height) = getimagesize($imgSrc);
			if($width==750 && $height=460){
					$accessKeyId = "LTAI4iA4uZjvE4J3"; 
					$accessKeySecret = "K5ixlwBsXARFopAmtBS06qD8hBGlG8";
					$endpoint = "oss-cn-shenzhen.aliyuncs.com";
					try {
					$ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
					} catch (OssException $e) {
					print $e->getMessage();
					}
					$bucket = "ciyuanbo";
					$newpaths = date('y-m-d');
					$pathname = rand(100000,99999999999);
					$object = "$newpaths/$pathname.jpg";
					$filePath = $imgSrc;//上傳文件
					$ossClient->uploadFile($bucket, $object, $filePath);
					$path = "http://ciyuanbo.oss-cn-shenzhen.aliyuncs.com/$object";//阿裏雲第三方路徑	
					$result = @unlink($imgSrc); //删除本地图片
					$data = array(
					'status' 	=> true,
					'info'		=> "3",
					'data'		=>$path //图片
					);
					$this->ajaxReturn($data);
					
					
			} else {
				$result = @unlink($imgSrc); //删除图片
					$data = array(
					'status' 	=> true,
					'info'		=> "4",
					'data'		=>"请上传尺寸为750*460的图片!"  //图片
				);
				$this->ajaxReturn($data);
		    }			
		}
	} 
}
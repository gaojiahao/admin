<?php
namespace Api\Controller;
use Think\Controller;
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
}
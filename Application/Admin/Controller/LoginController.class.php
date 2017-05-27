<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class LoginController extends Controller{
    /**
     * 头部公告
     */
    public function login(){
		if($_SESSION['admin_id']){
		    redirect('/Admin/Admin/index');
        }
        $this->display();
    }
    public function loginout(){
        session_unset();
        redirect('/Admin/Login/login',0);
    }

    public function lg(){
        $Form=M('bglogin');
        $name=I('post.username');
        $pwd=I('post.psd');
        $word=I('code');
        $data=$Form->where("name='$name' && pwd='$pwd' && word='$word'")->find();
        if(empty($data)){
            echo 'error';
        }else{
            $_SESSION['admin_id'] = $data['id'];
            echo 'ok';
        }
    }
}

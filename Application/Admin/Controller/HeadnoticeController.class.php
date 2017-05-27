<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class HeadnoticeController extends Controller{
    /**
     * 头部公告
     */
    public function index(){
		$this->display('');
    }


}

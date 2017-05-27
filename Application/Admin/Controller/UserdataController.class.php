<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class UserdataController extends Controller{
    /**
     * 用户数据
     */
    public function userdata(){
		$this->display();
    }


}

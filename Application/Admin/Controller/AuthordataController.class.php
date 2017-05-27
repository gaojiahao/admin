<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class AuthordataController extends Controller{
    /**
     * 作者数据
     */
    public function authordata(){
		$this->display();
    }


}

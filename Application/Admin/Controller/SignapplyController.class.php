<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class SignapplyController extends Controller{
    /**
     * 签约申请漫画
     */
    public function signapplycomic(){
		$this->display();
    }
    /**
     * 签约申请小说
     */
    public function signapplynovel(){
        $this->display();
    }

}

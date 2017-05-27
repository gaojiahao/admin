<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class EndapplyController extends Controller{
    /**
     * 完结申请漫画
     */
    public function endapplycomic(){
		$this->display();
    }
    /**
     * 完结申请小说
     */
    public function endapplynovel(){
        $this->display();
    }

}

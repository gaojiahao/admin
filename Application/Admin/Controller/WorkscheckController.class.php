<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class WorkscheckController extends Controller{
    /**
     * 漫画审核
     */
    public function checkcomic(){
		$this->display('');
    }

    /**
     * 小说审核
     */
    public function checknovel(){
        $this->display('');
    }
}

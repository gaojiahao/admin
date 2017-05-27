<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class NewworkscheckController extends Controller{
    /**
     * 新增漫画审核
     */
    public function newcreasenovel(){
		$this->display('');
    }

    /**
     * 新增小说审核
     */
    public function newcreasework(){
        $this->display('');
    }
}

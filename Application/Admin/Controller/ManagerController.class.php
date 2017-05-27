<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class ManagerController extends Controller{
    /**
     * 管理
     */
    public function manager(){
		$this->display();
    }


}

<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class WealfyapplyController extends Controller{
    /**
     * 福利申请漫画
     */
    public function wealfyapplycomic(){
		$this->display();
    }
    /**
     * 福利申请小说
     */
    public function wealfyapplynovel(){
        $this->display();
    }

}

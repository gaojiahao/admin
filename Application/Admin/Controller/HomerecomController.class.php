<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class HomerecomController extends Controller{
    /**
     * 首页banner
     */
    public function homebanner(){
		$this->display();
    }
    /**
     * 本周强推
     */
    public function hometoweekdevice(){
        $this->display();
    }
    /**
     * 热门作品
     */
    public function homehotwork(){
        $this->display();
    }
    /**
     * 精品推荐
     */
    public function homebestworkadvice(){
        $this->display();
    }
    /**
     * 正在推荐
     */
    public function homeadvicingcomic(){
        $this->display();
    }

}

<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class AppSettingController extends Controller{
    /**
     * APP的Banner
     */
    public function appoperatebanner(){
		$this->display();
    }
    /**
     * 强烈推荐
     */
    public function appoperaterecommend(){
        $this->display();
    }
    /**
     * 热门连载
     */
    public function appoperatehot(){
        $this->display();
    }
    /**
     * 活动banner推荐位
     */
    public function appactivitybanrecom(){
        $this->display();
    }
    /**
     * 活动Banner
     */
    public function appactbanner(){
        $this->display();
    }
    /**
     * 正在推荐
     */
    public function appadvicingcomic(){
        $this->display();
    }
    /**
     * 社区banner
     */
    public function appsocialbaner(){
        $this->display();
    }
    /**
     * 系统通知
     */
    public function appsystemnotice(){
        $this->display();
    }


}

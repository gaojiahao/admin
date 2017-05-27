<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class CartoonrecomController extends Controller{
    /**
     * 漫画Bannar
     */
    public function cmcbanner(){
		$this->display();
    }
    /**
     * 主编力荐
     */
    public function comiceditordevice(){
        $this->display();
    }
    /**
     * 强档推荐
     */
    public function seasonrecommend(){
        $this->display();
    }
    /**
     * 活动福利推荐位
     */
    public function wealfactivity(){
        $this->display();
    }
    /**
     * 长幅推荐位
     */
    public function longpicture(){
        $this->display();
    }
    /**
     * 活动福利
     */
    public function comicactivitywealf(){
        $this->display();
    }
    /**
     * 长幅活动
     */
    public function comiclongactivity(){
        $this->display();
    }
    /**
     * 正在推荐
     */
    public function cmcbannerT(){
        $this->display();
    }




}

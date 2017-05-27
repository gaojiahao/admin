<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class NovelrecomController extends Controller{
    /**
     * 小说Bannar
     */
    public function novelbanner(){
		$this->display();
    }
    /**
     * 漫改推荐
     */
    public function novelcartoonrcm(){
        $this->display();
    }
    /**
     * 大事件
     */
    public function noveleventrcm(){
        $this->display();
    }
    /**
     * 精品小说
     */
    public function novelbest(){
        $this->display();
    }
    /**
     * 热书推荐
     */
    public function novelhotbookrcm(){
        $this->display();
    }
    /**
     * 新书推荐
     */
    public function novelnewbookrcm(){
        $this->display();
    }
    /**
     * 长幅推荐位
     */
    public function novellongpicrcm(){
        $this->display();
    }
    /**
     * 大事件活动
     */
    public function noveleventactrcm(){
        $this->display();
    }
    /**
     * 长幅活动
     */
    public function novellongact(){
        $this->display();
    }
    /**
     * 正在推荐
     */
    public function novelbannerT(){
        $this->display();
    }



}

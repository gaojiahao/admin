<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class RankController extends Controller{
    /**
     * 漫画排行榜
     */
    public function rankcomic(){
		$this->display();
    }
/**
     * 小说排行榜
     */
    public function ranknovel(){
		$this->display();
    }

}

<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class RecommendedController extends Controller{
   /**
    * 推荐漫画申请
    */
   public function recommendcomic(){

       $this->display();
   }
   /**
    * 推荐小说
    */
   public function recommendnovel(){

       $this->display();
   }
}

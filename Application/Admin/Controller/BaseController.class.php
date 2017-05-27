<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class BaseController extends Controller{
   public function _initialize(){
       if(!$_SESSION['admin_id']){
           redirect('/Admin/Login/login',0);
       }
   }


}

<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class AdminController extends BaseController{


    public function index(){
        $this->display();
    }

    public function left(){
		
	   $this->display();
		
    }
    public function right(){
		
	   $this->display();
		
    }
    public function top(){
		
	   $this->display();
		
    }
    public function foot(){
		
	   $this->display();
    }
    

}

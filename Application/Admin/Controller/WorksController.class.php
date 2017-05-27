<?php
namespace Admin\Controller;
use Think\Controller;
session_start();
class WorksController extends Controller{
    /**
     * 漫画作品
     */
    public function comicwork(){
        $model = M('createauther');
        $countdata     = $model->where("class=2")->select();// 查询满足要求去除重复数据的总记录数
        $datacount = count($countdata);
        $count      = $model->where("class=2")->count();
        $Page       = new \Think\Page($count,30);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page -> setConfig('header','共%TOTAL_ROW%条');
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','尾页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $show       = $Page->show();// 分页显示输出
        $data =$model->where("class=2")->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->assign('datacount',$datacount);
        $this->display();

    }
    /**
     * 漫画删除
     */
    public function comicdel(){
        $hiddenedval = $_POST["hiddenedval"];
        $Form = M('passage');
        $Formdata = $Form->where("val='$hiddenedval'")->delete();  //后者还要删除表createauthor

        $Formone = M('createauther');
        $Formdataone = $Formone->where("val='$hiddenedval'")->delete();  //后者还要删除表createauthor

        $Formtwo = M('author');
        $Formdatatwo = $Formtwo->where("val='$hiddenedval'")->delete();  //后者还要删除表createauthor

        $Formthree = M('bonus');
        $Formdatathree = $Formthree->where("val='$hiddenedval'")->delete();  //后者还要删除表createauthor

        $Formtotalquantity =M("totalquantity");
        $Formtotalquantitydata=$Formtotalquantity->where("val='$hiddenedval'")->delete();

        $Formreward = M("reward");
        $Formrewardata=$Formreward->where("val='$hiddenedval'")->delete();

        $Formsearch = M("search");
        $FormFormsearch=$Formsearch->where("val='$hiddenedval'")->delete();

        $history = M("history");
        $Formhistory=$history->where("val='$hiddenedval'")->delete();

        $Formtotalsum =M("totalsum");
        $Formtotalsum=$Formtotalsum->where("val='$hiddenedval'")->delete();

        $Formcollection = M("collection");
        $Formcollection=$Formcollection->where("val='$hiddenedval'")->delete();

        if($Formdataone){
            echo "1";
        }else{
            echo "2";
        }
    }
    /**
     * 
     */
    public function look(){
        $val = $_GET['val'];
        $Formpassage = M("passage");
        //$Formpassagedata = $Formpassage->where("val='$val'")->select();

        $count      = $Formpassage->where("val='$val'")->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page -> setConfig('header','共%TOTAL_ROW%条');
        $Page -> setConfig('first','首篇');
        $Page -> setConfig('last','尾篇');
        $Page -> setConfig('prev','上一章');
        $Page -> setConfig('next','下一章');
        //$Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        //$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show       = $Page->show();// 分页显示输出
        $Formpassagedata =$Formpassage->where("val='$val'")->order("id asc")->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('page',$show);
        $this->assign('Formpassagedata',$Formpassagedata);
        $this->display('look');
    }
	/**
	 * 获取章节
	 */
	public function getSection(){
		$val = $_GET['val'];
		$Form = M('author');
		$data = $Form->where("val = '$val' && status = 1")->order("ordered asc")->select();
		if(!empty($data)){
			$this->ajaxReturn(array('status' => 1 , 'data' => $data));
		} else {
			$this->ajaxReturn(array('status' => 0 ));
		}
 	}
 	/**
 	 * 上架
 	 */
 	public function upBook(){
		$num = $_POST['ordered']; //获取1到第几章上架
		$val = $_POST['val'];
		$Author = M('author'); 
		$CreateAuther = M('createauther');   
		//判断是否上架了
		$temp = $CreateAuther->where("val = '$val' && vipe = 1")->find();
		if(empty($temp)){
			if($CreateAuther->where("val = '$val'")->save(array('vipe' => 1))){
				//for上架章节
				for($i=1;$i<=$num;$i++){
					if($Author->where("val = '$val' && ordered = '$i' ")->save(array('vipe' => 1))){
					}
				}
				$this->ajaxReturn(array('status' => 1));
			} else {
				$this->ajaxReturn(array('status' => 0));
			}	
		} else {
			$this->ajaxReturn(array('status' => 2));
		}
		unset($temp);
	}
	/**
	 * 获取标签
	 */
	public function getLabered(){
		$val = $_GET['val'];
		$Form = M('labered');
		
		$data = $Form->where("val = '$val'")->find();
		if(empty($data)){
			$this->ajaxReturn(array('status' => 0));
		} else {
			$arr = explode('|',$data['labered']); 
			$this->ajaxReturn(array('status' => 1 ,'data' => $arr));
		}
	}
	/**
	 * 添加标签
	 */
	public function addLabered(){
		$val = $_POST['val'];
		$labered = $_POST['labered'];
		//数组分割成字符串
		$data['labered'] = implode('|',$labered);
		$data['time'] = date('y-m-d', time());
		$Form = M('labered');
		//判断标签是否存在
		if(!empty($Form->where("val = '$val'")->select())){
			if($Form->where("val = '$val'")->save($data)){
				$this->ajaxReturn(array('status' => 1));
			} else {
				$this->ajaxReturn(array('status' => 0));
			}
		} else {
			$data['val'] = $val;
			if($Form->add($data)){
				$this->ajaxReturn(array('status' => 1));
			} else {
				$this->ajaxReturn(array('status' => 0));
			}
		}
	}
	/**
	 * 获取介绍
	 */
	public function getSay(){
		$val = $_GET['val'];
		$Form = M('createauther');
		$data = $Form->where("val = '$val'")->find();
		if($data){
			$this->ajaxReturn($data['say']);
		}
	}
    /**
	 * 保存介绍
	 */
	public function addSay(){
		$val = $_POST['val'];
		$data['say'] = trim($_POST['say']);
		$Form = M('createauther');
		if($Form->where("val = '$val'")->save($data)){
			$this->ajaxReturn(1);
		} else {
			$this->ajaxReturn(0);
		}
	}
    /**
	 * app 推送
	 */
	public function appShow(){
		$val = $_POST['val'];
		$Form = M('createauther');
		$temp = $Form->where("val = '$val' && appshow = 1")->find();
		if(empty($temp)){
			if($Form->where("val = '$val'")->save(array('appshow' => 1))){
				$this->ajaxReturn(1);
			} else {
				$this->ajaxReturn(0);
			}
		} else {
			$this->ajaxReturn(2);
		}
		unset($temp);
	}
	/**
	 * 获取漫画作品信息
	 */
	public function getComin(){
		$val = $_GET['val'];
		$Form = M('createauther');
		$data = $Form->where("val = '$val'")->find();
		if(!empty($data)){
			$data['totaltag'] = explode('|',$data['totaltag']); 
			$this->ajaxReturn($data);
		}
	}
	/**
	 * 更新漫画作品信息
	 */
	public function updateComin(){
		$sub=$_GET['sub'];
	    $username=base64_decode(base64_decode(base64_decode($sub)));   //解密的用户电话号码
	    $title = $_POST['svphoneNum'];
		$comicintroduce=$_POST['comicintroduce'];
		$picauthor=$_POST['picauthor'];
		$textauthor=$_POST['textauthor'];
		$type=$_POST['type'];
		$themes=$_POST['themes'];
		$theme= implode('|',$themes);
		$comicintroduce=$_POST['comicintroduce'];
		$writerprofile=$_POST['writerprofile'];
		$yonger=$_POST['yonger'];
		$taged=$_POST['taged'];
		$status=$_POST['comicgress'];
		$planed=$_POST['planed'];
		$publishstatus=$_POST['publishstatus'];
		$copyright=$_POST['copyright'];
		$authornotice=$_POST['authornotice'];
		$headphoto=$_POST['headphoto'];
	    $applookphoto = $_POST['applookphoto'];
	   
		$time=date('Y-m-d H:i');
		$strlen = mb_strwidth($taged)/2;
        if($strlen%2==0){
			for($i=0;$i<$strlen;$i=$i+2){
		    $charset="utf-8";
			$array[]=mb_substr($taged,$i,2,$charset);
		   }
		   $totallaber= implode('|',$array);
		}else{
			$arrs = explode("萌",$taged);
			$class= implode('',$arrs);
			$strlens = mb_strwidth($class)/2;
			for($k=0;$k<$strlens;$k=$k+2){
				$charset="utf-8";
				$array[]=mb_substr($class,$k,2,$charset);
		    }
				$totall= implode('|',$array);
				$totallaber=$totall.'|'.'萌';
		}
		$Formadder = M('adder');
		$author = $Formadder->where("mobile='$username'")->getfield('nickname');
		$authorphoto =  $Formadder->where("mobile='$username'")->getfield('photo');
		$Formcreateauther = M('createauther');
		$number = $Formcreateauther->where("id>0")->order("id desc")->limit("0,1")->select();
		$val =$number[0][val]+1;
		session_start();
		$_SESSION['val']=$val;
		$createdata = array(
			'username'=>$username,
			'authorphoto'=>$authorphoto,
			'catidca'=>$type,
			'audiences'=>$yonger,
			'title'=>$title,
			'author'=>$author,
			'totaltag'=>$totallaber,
			'planed'=>$planed,
			'status'=>$status,
			'firstpublish'=>$publishstatus,
			'exclusive'=>$copyright,
			'say'=>$comicintroduce,
			'announcement'=>$authornotice,
			'description'=>$writerprofile,
			'photopath'=>$headphoto,
			'applookphoto'=>$applookphoto,
			'protocol'=>'同意',
			'time'=>$time,
			'updatetime'=>$time,
			'besure'=>'审核中',
			'val'=>$val,
			'quatityword'=>0,
			'moods'=>100,
			'paypassage'=>0,
			'countpassage'=>0,
			'subscribe'=>0,
			'class'=>2,
			'vipe'=>0,
			'picauthor'=>$picauthor,	
			'textauthor'=>$textauthor,
			'theme'=>$theme,
			'appshow'=>0
			);
		$Formcreateautherdata = $Formcreateauther->add($createdata);
		if($Formcreateautherdata){
			echo "1"; 
		}else{
			echo "2"; 
		}
	}
    /**
     * 漫画处理 上下架
     */
    public function comicinputed(){
        $valed = $_POST['did'];
        $Formone = M('createauther');
        $dataed['vipe']=1;
        $Formonevipe = $Formone->where("val='$valed'")->save($dataed);  //后者还要删除表createauthor

        $Formtotalquantity=M('totalquantity');
        $Formvipetotal = $Formtotalquantity->where("val='$valed'")->save($dataed);

        if($Formvipetotal==1){
            echo "1";
        }else{
            echo "2";
        }
    }
    /**
     * 小说作品
     */
    public function novelwork(){
        $this->display();
    }
    /**
     * 作品数量
     */
    public function worknumber(){
        $this->display();
    }

}

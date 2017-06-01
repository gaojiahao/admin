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
		$val = $_POST['val'];

		//数组分割成字符串
		$totaltag = implode('|',$_POST['totaltag']);
		$data = array(
			'status' => $_POST['status'],
			'planed' => $_POST['planed'],
			'firstpublish' => $_POST['firstpublish'],
			'exclusive' => $_POST['exclusive'],
			'totaltag' => $totaltag,
			'say' => trim($_POST['say']),
			'description' => trim($_POST['description']),
			'announcement' => trim($_POST['announcement']),
			'photopath' => $_POST['photopath'],
			'applookphoto' => $_POST['applookphoto'],
			'updatetime' => date('Y-m-d', time()),
		);

		$Form = M('createauther');
		if($Form->where("val = '$val'")->save($data)){
			$this->ajaxReturn(1);
		} else {
			$this->ajaxReturn(0);
		}
	}
	/**
	 *查询漫画预览总数
	 */
	public function preLook(){
		$val = $_GET['val'];
		$Form = M('author');
		$data = $Form
				->field('video_three.path')
				->join('video_three ON video_author.authornumber = video_three.numbers','LEFT')
				->where("video_author.val = '$val'")
				->order('video_three.ordered asc')
				->order('video_three.id asc')
				->select();

		if(!empty($data)){
			$this->ajaxReturn(array("status" => 1 ,"data" => $data ,"count" => count($data)));
		} else {
			$this->ajaxReturn(array("status" => 0));
		}
	}
	/**
	 *漫画预览分页
	 *
     */
	public function getLook(){
		$data = $_GET['data'];
		$page = $data['page'] < 1 ? 1 : $data['page'];
		$pagesize = $data['pagesize'];
		$page = ($page-1)*$pagesize;
		$val = $data['val'];
		$Form = M('author');
		$data = $Form
				->field('video_three.path')
				->join('video_three ON video_author.authornumber = video_three.numbers','LEFT')
				->where("video_author.val = '$val'")
				->order('video_three.ordered asc')
				->order('video_three.id asc')
				->limit($page.','.$pagesize)
				->select();
		if(!empty($data)){
			$this->ajaxReturn(array("status" => 1 ,"data" => $data));
		} else {
			$this->ajaxReturn(array("status" => 0));
		}	
	}
	/**
	 *下载时获取章节
	 */
	public function getDownlist(){
		$val = $_GET['val'];
		$Form = M('author');
		$data = $Form->field('section,authornumber')->where("val = '$val'")->order("ordered asc")->select();
		if(!empty($data)){
			$this->ajaxReturn(array('status' => 1 , 'data' => $data));
		} else {
			$this->ajaxReturn(array('status' => 0 ));
		}
	}
	/**
	 *批量下载图片压缩成zip
	 */
	public function downZipfile(){
		$data = $_GET['data'];
		$data = explode(',',$data); 
		if(!empty($data)){
			$dfile =  tempnam('/tmp', 'tmp');//产生一个临时文件，用于缓存下载文件
			$zip = new \Think\Zipfile();
			//----------------------
			$filename = 'image.zip'; //下载的默认文件名

			$Form = M('three');
			foreach ($data as $key => $value) {
				$temp[$key] = $Form->where("numbers = '$value'")->order("ordered asc")->order("id asc")->select();
			}
			foreach($temp as $k => $v){
				foreach ($v as $key => $value) {
					$zip->add_file(file_get_contents($value['path']),$value['section'].$key.'.jpg');
				}
			}
			/*foreach($image as $v){
			    $zip->add_file(file_get_contents($v['image_src']),  $v['image_name']);
			    // 添加打包的图片，第一个参数是图片内容，第二个参数是压缩包里面的显示的名称, 可包含路径
			    // 或是想打包整个目录 用 $zip->add_path($image_path);
			}*/
			$zip->output($dfile);
			// 下载文件
			ob_clean();
			header('Pragma: public');
			header('Last-Modified:'.gmdate('D, d M Y H:i:s') . 'GMT');
			header('Cache-Control:no-store, no-cache, must-revalidate');
			header('Cache-Control:pre-check=0, post-check=0, max-age=0');
			header('Content-Transfer-Encoding:binary');
			header('Content-Encoding:none');
			Header ( "Content-type: application/octet-stream" );
			Header ( "Accept-Ranges: bytes" );
			header('Content-Disposition:attachment; filename="'.$filename.'"'); //设置下载的默认文件名
			header('Content-length:'. filesize($dfile));
			$fp = fopen($dfile, 'r');
			while(connection_status() == 0 && $buf = @fread($fp, 8192)){
			    echo $buf;
			}
			fclose($fp);
			@unlink($dfile);
			@flush();
			@ob_flush();
			exit();
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

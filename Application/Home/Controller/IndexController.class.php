<?php  
namespace Home\Controller;  
use Think\Controller; 
class IndexController extends Controller{  
    public function index(){
		//用户信息调查
		/*$Formthree=M('author');
		$data = $Formthree->where("id>0")->select();
		$count = count($data);
		for($i=0;$i<$count;$i++){
			$id= $data[$i][id];
			//$paths= $data[$i][photopath];
			$dataed['sectionphoto'] ="http://www.2ciyuan.tv".$paths;
			//$dataed['showed'] ="1";
			$Formthree->where("id='$id'")->save($dataed);
		}
         exit();*/
		redirect("/Admin/Admin/index",0,"...");
		$userinformation =$_SERVER['REMOTE_ADDR'];   //用户IP  统计用户的访问量
		$userlook = $_SERVER['HTTP_USER_AGENT'];   //用户设备名称
		$url = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json";//新浪借口获取访问者地区
		$ip=json_decode(file_get_contents($url),true);
		$data = $ip;
		$country=$data['country'];
		$province =$data['province'];
		$city =$data['city'];
		$time = date('y-m-d');
		$distincted =$country.$province.$city;
		$Formuserid = M('userid');
		$useridata = $Formuserid->where("time='$time' && userlook='$userlook'")->select();
        if(empty($useridata)){
			$Formuseridarray=array(
				'address'=>$distincted,
				'userinformation'=>$userinformation,
				'userlook'=>$userlook,
				'time'=>date('y-m-d')
			);
			$Formuserid->add($Formuseridarray);	
	    }
		$Form = M('register'); 
		session_start();
	    $datasid=$_SESSION["datalogin"];
	      $this->assign('datasid',$datasid);
	     $telephone = $_SESSION["telephone"];
		$dataall = $Form->where("id= '$datasid'")->select();
		$nextgrade = $dataall[0][grade]+1;
		$this->assign('nextgrade',$nextgrade);
		foreach($dataall as $var=>$mony){
			$photo = $mony['personphoto'];
		}
	    if(empty($dataall)){
			$aa=array(0=>"1"); 
			$cc=array(0=>$aa); 
			$this->assign('cc',$cc);
		}
		//$loginphone=$_SESSION["loginphone"];  
		//$loginpasswd=$_SESSION["loginpasswd"]; 

		$loginphone=$_COOKIE["loginphone"];  
		$loginpasswd=$_COOKIE["loginpasswd"]; 
		//print_r($loginphone);
		//exit();
		$collection = M('collection');
		$collectiondata = $collection->where("telephone= '$telephone'")->order("id desc")->limit('0,4')->select();
		$this->assign('collectiondata',$collectiondata);
        
		$Formhistory = M('history');
		$Formhistorydatas= $Formhistory->where("telephone='$telephone'")->order("id desc")->select();
		$this->assign('Formhistorydatas',$Formhistorydatas);

		$this->assign('dataall',$dataall);
		$this->assign('loginphone',$loginphone);
		$this->assign('loginpasswd',$loginpasswd);

		$this->display(head);
		$this->homed();
	 }
	 
public function homed(){
		//banner部分
	   $sales=S('sales');//开启缓存
	    if(empty($sales)){
			$Formtotalquantity=M("totalquantity");
			$Formtotalquantitydata = $Formtotalquantity->where("bannar='1' && class='2'")->order('time desc')->limit('0,5')->select();
			S('sales',$Formtotalquantitydata,3600);
	    }else{
			$Formtotalquantitydata=$sales;
		}
	     $this->assign('Formtotalquantitydata',$Formtotalquantitydata);
		//大神动态部分
		
		$Formstatus=M("status");
		$Formstatusdata = $Formstatus->where("id>0")->order('time desc')->limit('0,2')->select();
	     $this->assign('Formstatusdata',$Formstatusdata);
	     
		//本周漫画强推
		
		$catchpicture=S('catchpicture');//开启缓存
		 if(empty($catchpicture)){
			$Formtotalquantity=M("totalquantity");
			$Formweekdata = $Formtotalquantity->where("class=2 && noweek=1")->order('time desc')->limit('0,6')->select();
			S('catchpicture',$Formweekdata,3600);
		 }else{
			$Formweekdata =$catchpicture; 
		 }
		$this->assign('Formweekdata',$Formweekdata);
		
		//本周小说强推
		$catchnovel=S('catchnovel');//开启缓存
		 if(empty($catchnovel)){
			$Formnovalquantity=M("totalquantity");
			$Formnovaldata = $Formnovalquantity->where("class=1 &&noweek=1")->order('time desc')->limit('0,6')->select();
			S('catchnovel',$Formnovaldata,3600);
		 }else{
			$Formnovaldata =$catchnovel; 
		 }
		$this->assign('Formnovaldata',$Formnovaldata);
		
		
	     //热门漫画
	     $catchhotpicture=S('catchhotpicture');//开启缓存
		 if(empty($catchhotpicture)){
			$Formhotnovel=M("totalquantity");
			$Formhotnoveldata = $Formhotnovel->where("class=2 && hot=1")->order('time desc')->limit('0,6')->select();
			S('catchhotpicture',$Formhotnoveldata,3600);
	    }else{
			$Formhotnoveldata =  $catchhotpicture;
		}
		$this->assign('Formhotnoveldata',$Formhotnoveldata);
	    //热门小说
		$catchotnovel=S('catchotnovel');//开启缓存
		if(empty($catchotnovel)){
			$Formhotnovel=M("totalquantity");
			$Formhotdata = $Formhotnovel->where("class=1 && hot=1")->order('position desc')->limit('0,6')->select();
			S('catchotnovel',$Formhotdata,3600);
		 }else{
			$Formhotdata =$catchotnovel;
		 }
		$this->assign('Formhotdata',$Formhotdata);
		
		 //精品漫画
		 $catchperfectpicture=S('catchperfectpicture');//开启缓存
		if(empty($catchperfectpicture)){
			$Formhotpicture=M("totalquantity");
			$Formhotpicturedata = $Formhotpicture->where("class=2 && perfect=1")->order('position desc')->limit('0,12')->select();
			S('catchperfectpicture',$Formhotpicturedata,3600);
	    }else{
			$Formhotpicturedata = $catchperfectpicture;
		}
		
		$this->assign('Formhotpicturedata',$Formhotpicturedata);
		
		 //精品小说
	    $catchperfectnovel=S('catchperfectnovel');//开启缓存
		if(empty($catchperfectnovel)){
			$Formperfect=M("totalquantity");
			$Formperfectdata = $Formperfect->where("class=1 && perfect=1")->order('position desc')->limit('0,12')->select();
			S('catchperfectnovel',$Formperfectdata,3600);
	   }else{
	       $Formperfectdata = $catchperfectnovel;
	  }
	  $this->assign('Formperfectdata',$Formperfectdata);
	  
	  
		 //少年漫画
		$Formperfect=M("totalquantity");
		$Formandata = $Formperfect->where("class=2 && audiences='少年' && nowpassage !=''")->order('time desc')->limit('0,6')->select();
		$this->assign('Formandata',$Formandata);
		
		//少年小说
		$Formperfect=M("totalquantity");
		$Formanovel = $Formperfect->where("class=1 && audiences='少年'  && nowpassage !=''")->order('time desc')->limit('0,6')->select();
		$this->assign('Formanovel',$Formanovel);
		
		 //少女漫画
		$Formperfect=M("totalquantity");
		$Forwomanpicture= $Formperfect->where("class=2 && audiences='少女'  && nowpassage !=''")->order('time desc')->limit('0,6')->select();
		$this->assign('Forwomanpicture',$Forwomanpicture);
		
		//少女小说
		$Formperfect=M("totalquantity");
		$Forwomannovel= $Formperfect->where("class=1 && audiences='少女' && nowpassage !=''")->order('time desc')->limit('0,6')->select();
		$this->assign('Forwomannovel',$Forwomannovel);

     //活动图片
		$Formaddpicture=M("addpicture");
		$Formaddpicturedata= $Formaddpicture->where("id>0")->order('time desc')->select();
		$this->assign('Formaddpicturedata',$Formaddpicturedata);
		//漫画新作榜
	$Formreward=M("totalquantity");
		$Formrewardata= $Formreward->where("class=2")->order('totalsum desc')->select();
		$Formnewdatacount = count($Formrewardata);
		for($k=0;$k<$Formnewdatacount;$k++){
			$date_1 = date('Y-m-d');     //获取当前具体的年月日时间
			$date_2=  $Formrewardata[$k][time];;       
			//计算当前的日期到过去的时间天数
			$date1_arr = explode("-",$date_1);  
			$date2_arr = explode("-",$date_2);  
			$day1 = mktime(0,0,0,$date1_arr[1],$date1_arr[2],$date1_arr[0]);  
			$day2 = mktime(0,0,0,$date2_arr[1],$date2_arr[2],$date2_arr[0]);  
			$days =round(($day1-$day2)/3600/24); 
			if($days<92){
			 $datarray[] = $Formrewardata[$k];
		    }  
		}
		$this->assign('datarray',$datarray);
		
		//小说新作榜
		$Formreward=M("totalquantity");
		$Formrewarnovel= $Formreward->where("class=1")->order('totalsum desc')->select();
		$Formrewarnovelcount = count($Formrewarnovel);
		for($m=0;$m<$Formrewarnovelcount;$m++){
			$date_1 = date('Y-m-d');     //获取当前具体的年月日时间
			$date_2=  $Formrewardata[$m][time];;       
			//计算当前的日期到过去的时间天数
			$date1_arr = explode("-",$date_1);  
			$date2_arr = explode("-",$date_2);  
			$day1 = mktime(0,0,0,$date1_arr[1],$date1_arr[2],$date1_arr[0]);  
			$day2 = mktime(0,0,0,$date2_arr[1],$date2_arr[2],$date2_arr[0]);  
			$days =round(($day1-$day2)/3600/24); 
			if($days<92){
			 $datanovelrray[] = $Formrewarnovel[$m];
		    }  
		}
		$this->assign('datanovelrray',$datanovelrray);
		
		//神豪榜
		$Formregister=M('register');
		$Formregisterdata = $Formregister->where("id>0")->order('totalreward desc')->select();
		$this->assign('Formregisterdata',$Formregisterdata);
		
		//漫画助力榜
		$Formperfect=M("totalquantity");
		$Formoped= $Formperfect->where("class=2")->order('moped desc')->select();
		$this->assign('Formoped',$Formoped);
		
	    //小说助力榜
		$Formperfect=M("totalquantity");
		$Formopednovel= $Formperfect->where("class=1")->order('moped desc')->select();
		$this->assign('Formopednovel',$Formopednovel);
		
		//漫画催更榜
		$Formperfect=M("totalquantity");
		$Formurgepicture= $Formperfect->where("class=2")->order('urge desc')->select();
		$this->assign('Formurgepicture',$Formurgepicture);
		
	    //小说催更榜
		$Formperfect=M("totalquantity");
		$Formurgenovel= $Formperfect->where("class=1")->order('urge desc')->select();
		$this->assign('Formurgenovel',$Formurgenovel);
		
		//漫画收藏榜
		
		$Formperfect=M("totalquantity");
		$Formcollectionpicture= $Formperfect->where("class=2")->order('collection desc')->select();
		$this->assign('Formcollectionpicture',$Formcollectionpicture);
		
		//小说收藏榜
		$Formperfect=M("totalquantity");
		$Formcollectionnovel= $Formperfect->where("class=1")->order('collection desc')->select();
		$this->assign('Formcollectionnovel',$Formcollectionnovel);
		
		//活动
		$Formactive=M("active");
		$Formactivedata= $Formactive->where("id>0")->order('time desc')->select();
		$this->assign('Formactivedata',$Formactivedata);
		
		//漫画畅销榜
		//有问题需解决
		$Formreward=M('reward');
		$sumpicture = $Formreward->where("class=2")->sum('totalsum');//更新的漫画总数
		$sumnovel = $Formreward->where("class=1")->sum('totalsum');//更新的漫画总数
		$Formjudge = M('judge');
		$sumjudata = $Formjudge->where("id>0")->select();
		$sumpicturedata=$sumjudata[0][sumphoto];//未更新的漫画总数
		$sumnoveldata=$sumjudata[0][sumnovel];//未更新的小说总数
		
		$pictureall=$Formreward->where("class=2")->select();
		$picturealldata =count($pictureall)+1;//现在的总数＋１就是排名
		$picturezone=$Formreward->where("class=2 && nows=0")->select();
		$picturezonedata =count($picturezone);
		/*if(!empty($picturezone)){ //将刚刚注册发表的作品给一个排名，现在的总数＋１就是排名
			for($k=0;$K<$picturezonedata;$k++){
				$id=$picturezone[$k][id];
				if(empty($id)){
					$id=$picturezonedata-1;
				}
				$picturedata['nows']=$picturealldata;
				$picturedata['olds']=$picturealldata;
				$picturedata['statued']=1;
				$Formreward->where("id='$id'")->save($picturedata);
			}
	    }*/
	        if((Int)$sumpicture!=(Int)$sumpicturedata){
				$picturenows=$Formreward->where("class=2")->order('nows asc')->select();
				 $picturenowscount = count($picturenows);//将目前数据内的排名转移到olds排名中，以便于参考比较
				for($n=0;$n<$picturenowscount;$n++){
					$id=$picturenows[$n][id];
					$nowdata=$picturenows[$n][nows];
					$picturenowsdata['olds']=$nowdata;
					$Formreward->where("id=$id")->save($picturenowsdata);
				}
				$sumphotomoney['sumphoto']=$sumpicture;
				$Formjudge->where("id=1")->save($sumphotomoney);
				
				 $picturetotal=$Formreward->where("class=2")->order('totalsum desc')->select();
			$totalcount = count($picturetotal);  //将目前的现有排名存入到nows字段,再进行判断
			for($b=0;$b<$totalcount;$b++){
				$id=$picturetotal[$b][id];
				$nowed=$b+1;
				$nowedata['nows']=$nowed;
				$Formreward->where("id=$id")->save($nowedata);
			}
			
			$newpicturetotal=$Formreward->where("class=2")->order('totalsum desc')->select();
			for($c=0;$c<$totalcount;$c++){
				$id=$newpicturetotal[$c][id];
				$nowes=$newpicturetotal[$c][nows];
				$oldes=$newpicturetotal[$c][olds];
				$nowdaies =$nowes-$oldes;

			   if($nowdaies>0){
					$tatued['statued']=1;  //排名下降
				    $Formreward->where("id=$id")->save($tatued);
			     }
				if($nowdaies==0){ //排名持平
					$tatued['statued']=0;
				    $Formreward->where("id=$id")->save($tatued);
			     }
			   if($nowdaies<0){//排名上升
					$tatued['statued']=2;
				    $Formreward->where("id=$id")->save($tatued);
			     }
			}	
			
		    }//此括號，要必包,一直循環會很慢
		$photographdataed=$Formreward->where("class=2")->order('totalsum desc')->select();
		$this->assign('photographdataed',$photographdataed);
		
		//小说畅销榜
		$Formreward=M('reward');
		$novelall=$Formreward->where("class=1")->select();
		$novelalldata =count($novelall)+1;
		$novelzone=$Formreward->where("class=1 && nows=0")->select();

		$novelzonedata =count($novelzone);
		/*if(!empty($novelzone)){  //将刚刚注册发表的作品给一个排名，现在的总数＋１就是排名
				for($k=0;$K<$novelzonedata;$k++){
					$id=$novelzone[$k][id];
					$noveldata['nows']=$novelalldata;
					$noveldata['olds']=$novelalldata;
					$noveldata['statued']=1;
					$Formreward->where("id='$id'")->save($noveldata);
				}
			}*/
	        if((Int)$sumnovel!=(Int)$sumnoveldata){
				$novelnows=$Formreward->where("class=1")->order('nows asc')->select();
				$novelnowscount = count($novelnows);//将目前数据内的排名转移到olds排名中，以便于参考比较
				for($n=0;$n<$novelnowscount;$n++){
					$id=$novelnows[$n][id];
					$nowdata=$novelnows[$n][nows];
					$novelnowsdata['olds']=$nowdata;
					$Formreward->where("id=$id")->save($novelnowsdata);
					$sumnovelmoney['sumnovel']=$sumnovel;
					$Formjudge->where("id=1")->save($sumnovelmoney);
				}
		   $noveltotal=$Formreward->where("class=1")->order('totalsum desc')->select();
			$totalcount = count($noveltotal);  //将目前的现有排名存入到nows字段,再进行判断
			for($b=0;$b<$totalcount;$b++){
				$id=$noveltotal[$b][id];
				$nowed=$b+1;
				$nowedata['nows']=$nowed;
				$Formreward->where("id=$id")->save($nowedata);
			}
			  $newnoveltotal=$Formreward->where("class=1")->order('totalsum desc')->select();
			for($e=0;$e<$totalcount;$e++){
				$id=$newnoveltotal[$e][id];
				$nowes=$newnoveltotal[$e][nows];
				$oldes=$newnoveltotal[$e][olds];
				$nowdays =$nowes-$oldes;
			   if($nowdays>0){
					$tatued['statued']=1;  //排名下降
				   $Formreward->where("id=$id")->save($tatued);
			     }
				if($nowdays==0){ //排名持平
					$tatued['statued']=0;
				   $Formreward->where("id=$id")->save($tatued);
			     }
			   if($nowdays<0){//排名上升
					$tatued['statued']=2;
					//echo "<pre/>";
					//echo "dsfresf";
				    $Formreward->where("id=$id")->save($tatued);
			     }
			}	
		   }
		$novelalldata=$Formreward->where("class=1")->order('totalsum desc')->select();
		$this->assign('novelalldata',$novelalldata);
        $this->display(home);
    }
  	/*手机短信验证*/
	public function checknumber(){
		$countrynumber= I('post.countrynumber');
		$telphoned = I('post.telphone');
		//$telphone=$countrynumber.$telphoned;
		session_start();
		$_session['telephones'] = (Int)$telphoned;
       $_session['countrytelephone'] = $countrynumber;
        
		$Forms = M('register'); 
		$data_phone = $Forms->where("telephone= '$telphoned'")->select();	
       
		if(!empty($data_phone)){
			echo "1";
		}else{
			$tellcode=$_COOKIE['number']; 
			if($tellcode){
				echo "2";
			}else{
				require_once(dirname(__FILE__).'/../Lib/qcloudsms-master/demo/php/SmsSenderDemo.php');
			}
		} 
	}
	
	public function subdata(){
			$telphone=I('post.telphone');
			$phonecaptcha=I('phonecaptcha');
			$regusername=I('regusername');
			$regpasswd=I('regpasswd');   //密码要加密
			$countrynumber = I('countrynumber'); //国家码前缀
			//$telphone=$countrynumber.$telphoned;
			$tellcode=$_COOKIE['number'];  //接受验证码COOKIE成功
			
		   //以下是数据库链接匹配用户信息
		   $Forms = M('register'); 
		   $data_names = $Forms->where("name= '$regusername'")->select();
            
           if(empty($data_names)){
				if($phonecaptcha==$tellcode){
					$pwd=md5($regpasswd);
							$data=array(					
								'name'=>$regusername,
								'telephone'=>$telphone,
								'country'=>$countrynumber,
								'pwd'=>$pwd,
								'personphoto'=>"http://www.2ciyuan.tv/Public/Uploads/2016-09-29/youavatar.png",
								'time'=>date('y-m-d'),
								'coin'=>0,
								'totalreward'=>0,
								'gold'=>1000,
								'vipe'=>30,
								'grade'=>3,
								'bindind'=>0,
								'qqnumber'=>'',
								'free'=>0,
								'comon'=>500
							);
						$dataregister = $Forms->add($data);
						
					$Formessage = M('message');			
					$message	="恭喜您獲得1個月的VIP特權，現在再充10元,再獲得３個月的vip哦!!";
					$time=date('y-m-d');
					$Formessagearray =array(
						'sender'=>'管理员',
						'nickname'=>$regusername,
						'username'=>$telphone,
						'title'=>"注冊有禮",
						'message'=>$message	,
						'status'=>'1',
						'time'=>$time,
						'val'=>''
					);
					$Formessagedata = $Formessage->add($Formessagearray);   


						if($Formessagedata){
							 //echo "注册成功，请您登录!";
								unset( $_session['telephones']);
								echo "3";
							}else{
								//echo "注册失败,重新注册!";
								echo "4";
							}
				}else{
				  //  echo("验证码不正确，请重新获取验证码!");
				    echo "2";
				}
		   }else{
				//echo("请填写正确信息!");
				echo "1";
		   }
	}
	//验证昵称
	public function checkregname(){
	$regusername=I('regusername');
	$Forms = M('register'); 
	$data_name = $Forms->where("name= '$regusername'")->select();
	if(!empty($data_name)){
		echo "1";
		}
	}
	
	//验证码
	public function code(){
		$config =    array(
		'imageW'      =>    190,
		'imageH'      =>    40,
		'fontSize'    =>    20,    // 验证码字体大小
		'length'      =>    4,     // 验证码位数
		'useNoise'    =>    true, // 关闭验证码杂点
		);
		$Verify =     new \Think\Verify($config);
		$Verify->entry();
	}
	
	public function logined(){
		$loginphone = I('post.loginphone');
		$loginpasswd = I('post.loginpasswd');

		$code =I('post.logincaptcha');
		$checkboxs=I('post.checkboxs');
		foreach($checkboxs as $field=>$key){
			$checknumber = $key['0'];
		}
		
		if($checknumber=="1"){
			setcookie("loginphone","$loginphone",time()+7200);
			setcookie("loginpasswd","$loginpasswd",time()+7200);
		}else{
			setcookie("loginphone","$loginphone",time()-1);
			setcookie("loginpasswd","$loginpasswd",time()-1);
		}
       
		$loginphone=$_COOKIE['loginphone'];  
		$loginpasswd=$_COOKIE['loginpasswd']; 
		
		$mdloginpasswd=md5($loginpasswd);
		$Forms = M('register'); 
		$data_login = $Forms->where("telephone= '$loginphone' &&  pwd='$mdloginpasswd'")->select();
		foreach($data_login as $kies=>$valed){
			$dataid=$valed['id'];
			$dataphone=$valed['telephone'];
		}
		if(!empty($data_login)){
			session_start();
			$_SESSION["datalogin"]=$dataid;
            $_SESSION["telephone"]=$dataphone;
			$verify  =  new \Think\Verify(); 
			$ret= $verify->check($code);
			if ($ret == false ){
				setcookie("loginphone","$loginphone",time()-1);
				setcookie("loginpasswd","$loginpasswd",time()-1);
				unset($_SESSION["datalogin"]);
				unset($_SESSION["telephone"]);
				echo "2";
			 }else{
				echo "3";
			 }
		}else{
			echo "1";
		}
	}
	public function resetid(){
	$resetid=I('post.resetid');
	if($resetid=="1"){
		unset($_SESSION["datalogin"]);
		unset($_SESSION["telephone"]);
		echo "1";
		}
	}
	
	//统计在线人数
	public function addressip(){
	require_once(dirname(__FILE__).'/../Lib/ip/count.php');
	$personnumber = $users_online;
	echo $personnumber;
	}
}

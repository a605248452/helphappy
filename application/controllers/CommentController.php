<?php

namespace application\controller;

class CommentController extends \core\imooc
{
	/**
	 * 评论首页
	 * @2016-10-11
	 * @mpk
	 */
	public function show()
	{
		if(isset($_SESSION['id'])){
			$this->display('comment.php');
		}else{
			echo "<script>alert('请先登录 ')</script>";
    	 	header('refresh:0.1;../login/login');
		}
			// echo $_SESSION['id'];die;
			// 
	}
	//评论
	/**
	 * [comment description]
	 * @return [type] [description]
	 */
	public function comment()
	{
		
		if(empty($_POST)){
			echo "<script>alert('请先评论 ')</script>";
    	 	header('refresh:0.1;show');
			die;
		}else{
			$data['p_id']=$_SESSION['id'];//评论人
			$data['b_id']= 3;//被评论人
			// $data['e_type']=$_POST['pointV2'];//订单类型
			$data['e_speed']=$_POST['pointV2'];//速度
			$data['e_fuwu']=$_POST['pointV1'];//服务
			$data['e_info']=$_POST['pointV3'];//信用
			//评论均分
			$level=($_POST['pointV1']+$_POST['pointV2']+$_POST['pointV3'])/3;
			$data['e_level']=round($level,2);
			$data['e_content']=$_POST['comment'];
			$model=new \application\models\estimateModel();
	        $ret=$model->addOne($data);
	        // var_dump($data);die;
        if($ret){
    	 	header('refresh:0.1;../comment/next');
			exit;  
		}else{
			echo "<script>alert('日狗了');</script>";
		}

	}
}
	/**
	 * [next description]
	 * @return function [挑转页面]
	 */
	public function next(){

        $this->display('next.php');
        // $this->display('comment/index.html');
	}
/**
 * @接单星数
 * @return [type] [0]
 */
	public function send()
	{
		$u_id=$_SESSION['id'];
		$model=new \application\models\estimateModel();
		$data=$model->all($u_id);
		//转一维函数
		$e_fuwu=array_column($data,'e_fuwu');
		// var_dump($e_fuwu);die;
		$e_speed=array_column($data,'e_speed');
		$e_info=array_column($data,'e_info');
		$e_level=array_column($data,'e_level');
		//求和
		// echo count($e_fuwu);die;
		if(count($e_fuwu)>=1){
			$data['count']=count($e_fuwu);
			// echo $data['count'];die;
			$data['fuwu']=ceil(array_sum($e_fuwu)/count($e_fuwu));
			$data['u_id']=$u_id;
		 	$data['speed']=ceil(array_sum($e_speed)/count($e_speed));
		 	$data['info']=ceil(array_sum($e_info)/count($e_info));
		 	$data['level']=floor(array_sum($e_level)/count($e_level));
 			$star=floor(array_sum($e_level)/count($e_level));
 			//用户星级
		 	// $user_model=new \application\models\userModel();
		 	$table='user';
			$re=$model->star($u_id,$star,$table);
	        $this->assign('data',$data);
	        $this->display('comment/send.php');
		}else{
			echo "<script>alert('还没人评论你哦');</script>";
			header('refresh:0.1;../');			
		}
		// print_r($e_fuwu);die;

	}
	/**
	 * @发单星数
	 * @return [type] [1]
	 */
	public function lend()
	{
		$u_id=$_SESSION['id'];
		$model=new \application\models\estimateModel();
		$data=$model->all_lend($u_id);
		$e_fuwu=array_column($data,'e_fuwu');
		$e_speed=array_column($data,'e_speed');
		$e_info=array_column($data,'e_info');
		$e_level=array_column($data,'e_level');
		//求和
		// echo count($e_fuwu);die;
		if(count($e_fuwu)>=1){ 
			$data['count']=count($e_fuwu);
			$data['fuwu']=ceil(array_sum($e_fuwu)/count($e_fuwu));
			$data['u_id']=$u_id;
		 	$data['speed']=ceil(array_sum($e_speed)/count($e_speed));
		 	$data['info']=ceil(array_sum($e_info)/count($e_info));
		 	$data['level']=floor(array_sum($e_level)/count($e_level));
		    $star=floor(array_sum($e_level)/count($e_level));
		 	// $user_model=new \application\models\userModel();
		 	$table='user';
			$re=$model->star($u_id,$star,$table);
		 	
	        $this->assign('data',$data);
	        $this->display('comment/lend.php');
		}else{
			echo "<script>alert('还没人评论你哦');</script>";
			header('refresh:0.1;../');
			// $this->assign('data',$data);
	        // $this->display('comment/sendone.php');
		}

	}
	/**
	 * [抽奖]
	 * @return [type] [description]
	 */
	public function jiang(){
		$this->display('comment/index.html');
	}
	/**
	 * 用户星级
	 * @return [type] [description]
	 */
	public function lv(){
		$u_id=$_SESSION['id'];
		$model=new \application\models\estimateModel();
		$data=$model->all_lend($u_id);
		$e_level=array_column($data,'e_level');
 		$star=floor(array_sum($e_level)/count($e_level));
 		$user_model=new \application\models\userModel();
		$re=$user_model->star($u_id,$star);
	}
	public function share(){
			echo "<script>alert('分享成功');</script>";
			header('refresh:0.1;../index');
	}
}
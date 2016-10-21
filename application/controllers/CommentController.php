<?php

namespace application\controller;

class CommentController extends \core\imooc
{
	/**
	 * 接单评论发单
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
			
	}
	/**
	 * 发单评论接单
	 * @2016-10-11
	 * @mpk
	 */
	public function show1()
	{
		if(isset($_SESSION['id'])){
			$this->display('comment1.php');
		}else{
			echo "<script>alert('请先登录 ')</script>";
    	 	header('refresh:0.1;../login/login');
		}
	}

	
	/* 接单评论发单
	 * [comment description]
	 * @return [type] [description]
	 */
	public function jf()
	{
		if(empty($_POST)){
			echo "<script>alert('请先评论 ')</script>";
    	 	header('refresh:0.1;show'); 
			die;
		}else{
			$model=new \application\models\estimateModel();
			$s_id='12';
			$tab="send";
			$ri=$model->sel($s_id,$tab);
			//print_r($ri);die;
			$data['p_id']=$ri[0]['r_id'];//评论人
			$data['b_id']= $ri[0]['u_id'];//被评论人
			$data['s_id']=$s_id;
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
        if($ret){
    	 	header('refresh:0.1;../comment/next');
			exit;  
		}else{
			echo "<script>alert('日狗了');</script>";
		}

	}
}
	/* 发单人评论接单人
	 * [comment description]
	 * @return [type] [description]
	 */
	public function fj()
	{
		if(empty($_POST)){
			echo "<script>alert('请先评论 ')</script>";
    	 	header('refresh:0.1;show'); 
			die;
		}else{
			$model=new \application\models\estimateModel();
			$s_id='12';
			$tab="send";
			$ri=$model->sel($s_id,$tab);
			//print_r($ri);die;
			$data['p_id']=$ri[0]['r_id'];//评论人
			$data['b_id']= $ri[0]['u_id'];//被评论人
			$data['s_id']=$s_id;
			$data['e_type']=0;//订单类型
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
	/* 发单评论接单
	 * [next description]
	 * @return function [挑转页面]
	 */
	public function next(){

        $this->display('next.php');
        // $this->display('comment/index.html');
	}

/**
 * @接单查看发单星数
 * @return [type] [0]
 */
	public function show2()
	{
		$u_id=$_SESSION['id'];
		$s_id='12';
		$e_type=1;
		$model=new \application\models\estimateModel();
		$data=$model->all($s_id,$e_type);
		if($data){
			$e_level=$data['e_level'];
			$star=floor($e_level);
		 	$user_model=new \application\models\userModel();
		 	$table='user';
			$re=$model->star($u_id,$star,$table);
			echo json_encode($data);

		}else{
			echo 0;
			
		}

	}
	/**
	 * @发单查看接单星数
	 * @return [type] [1]
	 */
	public function show3()
	{
		$u_id=$_SESSION['id'];
		$s_id='12';
		$e_type=0;
		$model=new \application\models\estimateModel();
		$data=$model->lend($s_id,$e_type);
		if($data){
			$e_level=$data['e_level'];
			$star=floor($e_level);
		 	$user_model=new \application\models\userModel();
		 	$table='user';
			$re=$model->star($u_id,$star,$table);
			echo json_encode($data);
		}else{
			echo 0;
			
		}
	}
		    // $star=floor(array_sum($e_level)/count($e_level));
		 	// $user_model=new \application\models\userModel();
		 // 	$table='user';
			// $re=$model->star($u_id,$star,$table);
		

	

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
	/**
	 * 分享页面跳转
	 * @return [type] [description]
	 */
	public function share(){
		echo "<script>alert('分享成功');</script>";
		header('refresh:0.1;../');
	}
}
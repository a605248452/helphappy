<?php

namespace application\controller;

class CommentController extends \core\imooc
{
	/**
	 * 评论首页
	 * @2016-10-11
	 * @mpk
	 */
	public function index()
	{
		$this->display('comment.php');
	}
	//评论
	public function comment()
	{
		// $data=$_POST;
		$data['p_id']=$_POST['pointV1'];
		$data['b_id']=$_POST['pointV2'];
		$data['e_type']=$_POST['pointV2'];
		$data['e_speed']=$_POST['pointV2'];
		$data['e_fuwu']=$_POST['pointV1'];
		$data['e_info']=$_POST['pointV3'];
		$level=($_POST['pointV1']+$_POST['pointV2']+$_POST['pointV3'])/3;
		$data['e_level']=round($level,2);
		$data['e_content']=$_POST['comment'];
		$model=new \application\models\estimateModel();
        $ret=$model->addOne($data);
        // var_dump($data);die;
        if($ret){
        	echo "<script>alert('评论成功 ')</script>";
    	 	header('refresh:0.1;../comment/next');
			//确保重定向后，后续代码不会被执行   
			exit;  
		}else{
			echo "<script>alert('日狗了');</script>";
		}
	}
	public function next(){
		// $model=new \application\models\estimateModel();
		// $data=$model->all();
        // var_dump($data);die;
        // $this->assign('data',$data);
        $this->display('next.php');
	}

	public function send()
	{
		$u_id=7;
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
		if(count($e_fuwu)>=2){
			$data['count']=count($e_fuwu);
			// echo $data['count'];die;
			$data['fuwu']=ceil(array_sum($e_fuwu)/count($e_fuwu));
			$data['u_id']=$u_id;
		 	$data['speed']=ceil(array_sum($e_speed)/count($e_speed));
		 	$data['info']=ceil(array_sum($e_info)/count($e_info));
		 	$level=ceil(array_sum($e_level)/count($e_level));
 			
		 	// echo $data['level'];die;
	        $this->assign('data',$data);
	        $this->display('comment/send.php');
		}else{
			echo 1;
			$this->assign('data',$data);
	        $this->display('comment/sendone.php');
		}
		// print_r($e_fuwu);die;

	}

	public function lend()
	{
		$u_id=5;
		$model=new \application\models\estimateModel();
		$data=$model->all_lend($u_id);
		// print_r($data);die;
		$e_fuwu=array_column($data,'e_fuwu');
		// var_dump($e_fuwu);die;
		$e_speed=array_column($data,'e_speed');
		$e_info=array_column($data,'e_info');
		$e_level=array_column($data,'e_level');
		//求和
		// echo count($e_fuwu);die;
		if(count($e_fuwu)>=2){
			$data['count']=count($e_fuwu);
			// echo $data['count'];die;
			$data['fuwu']=ceil(array_sum($e_fuwu)/count($e_fuwu));
			$data['u_id']=$u_id;
		 	$data['speed']=ceil(array_sum($e_speed)/count($e_speed));
		 	$data['info']=ceil(array_sum($e_info)/count($e_info));
		 	$data['level']=ceil(array_sum($e_level)/count($e_level));
		 	// echo $data['level'];die;
	        $this->assign('data',$data);
	        $this->display('comment/send.php');
		}else{
			echo 1;
			$this->assign('data',$data);
	        $this->display('comment/sendone.php');
		}

	}
}
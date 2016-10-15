<?php

namespace application\controller;

use application\models\listsModel;

class ListsController extends \core\imooc
{
	//发单首页
	public function send()
	{
		$this->display('send.php');
	}

	//发单信息添加入库
	public function add_lists()
	{
		//经纬度拆分
		$s_mission = explode(',',post('mission'));
		$s_finish  = explode(',',post('finish'));
		// $u_id = 	$_SESSION['id'];
		$data['u_id'] = 1;
		$data['s_title'] = 		post('title');
		$data['s_content'] = 	post('content');
		$data['s_call'] = 		post('call');
		$data['s_time'] =		date('Y-m-d H:i:s');
		$data['s_end_time'] = 	post('end_time');
		$data['s_list_money']=	post('list_money');
		$data['s_violate_money']=post('violate_money');
		$data['s_address'] = 	post('address');
		$data['s_end_address']=	post('end_address');
		$data['s_m_lng'] =		$s_mission[0];
		$data['s_m_lat'] =		$s_mission[1];
		$data['s_f_lng'] =		$s_finish[0];
		$data['s_f_lat'] =		$s_finish[1];
		$lists = new listsModel();
		$bool = $lists->add_lists($data);
		var_dump($bool);
	}

	//接单首页
	public function receive()
	{
		$this->display('receive.php');	
	}

	//带距离首页列表
	public function receive_list()
	{
		$array = array();
		$distance = get('distance');
		$lng2 = get('lng');
		$lat2 = get('lat');
		$lists = new listsModel();
		$u_id=2;
		$data = $lists->lists($u_id);
		// print_r($data);die;
		foreach($data as $key=>$val)
		{
			//将角度转为弧度
			$radLat1=deg2rad($val['s_m_lat']);//deg2rad()函数将角度转换为弧度
			$radLat2=deg2rad($lat2);
			$radLng1=deg2rad($val['s_m_lng']);
			$radLng2=deg2rad($lng2);
			$a=$radLat1-$radLat2;
			$b=$radLng1-$radLng2;
			$s=2*asin(sqrt(pow(sin($a/2),2)+cos($radLat1)*cos($radLat2)*pow(sin($b/2),2)))*6378.137*1000;
			$data[$key]['distance'] = substr($s,0,strpos($s,'.'));
		}
		foreach($data as $key=>$val)
		{
			if($val['distance']<=$distance)
			{
				$array[] = $val;
			}
		}
		// print_r($array);
		echo json_encode($array);
	}
}
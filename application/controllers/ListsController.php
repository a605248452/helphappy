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
		$data['s_mission'] =	post('mission');
		$data['s_finish'] =		post('finish');
		$lists = new listsModel();
		$bool = $lists->add_lists($data);
		var_dump($bool);
	}

	//接单首页
	public function receive()
	{

	}
}
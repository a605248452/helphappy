<?php
namespace application\models;

use core\lib\model;

class listsModel extends model
{
    private $table = 'send';

    //订单入库
    public function add_lists($data)
    {
    	return $this->insert($this->table,$data);
    }

    //订单列表
    public function lists($u_id)
    {
    	return $data = $this->select($this->table,['u_id','s_time','s_m_lng','s_m_lat','s_title'],["u_id[!]"=>$u_id]);
    }

}
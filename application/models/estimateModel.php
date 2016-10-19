<?php
namespace application\models;

use core\lib\model;

class estimateModel extends model
{
    private $table = 'estimate';
    public function addOne($data)
	{
		return $this->insert($this->table,$data);
	}
	//查看接单评论
	public function all($u_id)
	{
		return $this->select($this->table,[
	    	"e_fuwu",
	    	"e_speed",
	    	"e_info",
	    	"e_level"
		],["AND" => [
        	"b_id" => "$u_id",
	        "e_type" => 0,
		   ]
		]);
	}
	//收单评论
	public function all_lend($u_id)
	{

		return $this->select($this->table,[
	    	"e_fuwu",
	    	"e_speed",
	    	"e_info",
	    	"e_level"
			],
			["AND" => [
	        "b_id" =>"$u_id",
	        "e_type" => 1,
		    ]
		]);
	}


	// //评价数
	// public function add($data)
	// {
	// 	return $this->insert('estimate',$data);
	// }
}
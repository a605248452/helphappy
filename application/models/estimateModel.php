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
	//接单人评论发单人
	public function sel($s_id,$tab){
		return $this->select($tab,[
			"u_id",
			"r_id"
			],[
			"s_id"=>$s_id		
		]);



	}
	//查看接单评论
	public function all($s_id,$e_type)
	{
		return $this->get($this->table,[
	    	"e_fuwu",
	    	"e_speed",
	    	"e_info",
	    	"e_level",
	    	"e_content"
		],["AND" => [
			"s_id"=>$s_id,
	        "e_type" => $e_type,
		   ]
		]);
	}
	//收单评论
	public function lend($s_id,$e_type)
	{
		return $this->get($this->table,[
	    	"e_fuwu",
	    	"e_speed",
	    	"e_info",
	    	"e_level",
	    	"e_content"
		],["AND" => [
			"s_id"=>$s_id,
	        "e_type" => $e_type,
		   ]
		]);
	}

	// public function main($u_id){
	// 	return $this->select($this->table,[
	// 			"p_id",
	// 			"e_content"
	// 		],
	// 		["AND"=>[
	//         "b_id" =>"$u_id",
	// 		]
	// 	]);
	// }
	/**
	 * 发单类型
	 */
	public function send_type($e_type,$b_id){
		return $this->update($this->table,[
               "e_type"=>$e_type
            ],[
            	'b_id'=>$b_id
            ]);
	}


    /**
     * 用户星级
     */
    public function star($u_id,$star,$table){
        return $this->update($table,[
               'star_num'=>$star
            ],[
            "u_id"=>$u_id
            ]);
    }   
}
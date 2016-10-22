<?php
namespace application\models;

use core\lib\model;

class signInModel extends model
{
    private $table = 'user_info';
    private $table1= 'sign_in';

    /**
     * 签到
     * 查看是否已签到
     */
    public function add($u_id)
    {
        $u_date = $this->get($this->table,['u_date'],['u_id'=>$u_id]);
        $l_date = $this->get($this->table1,'*',['u_id' => $u_id,'ORDER' => [$this->table1.'.s_date' => 'DESC']]);
        // print_r($l_date);die;
        // print_r($u_date);die;
        if(strtotime($u_date['u_date'])!=strtotime(date('Y-m-d')))
        {
            //如果未签到，则在库中签到并把签到日期更新为当天
            $this->update($this->table,['u_date' => date('Y-m-d')],['u_id' => $u_id]);
            if(strtotime($l_date['s_date'])!=strtotime(date('Y-m-d',strtotime('-1 days'))))
            {
                $this->insert($this->table1,['u_id' => $u_id,'l_num' => 1,'s_date' => date('Y-m-d')]);
                return ['day' => 1];
            }else{
                $this->insert($this->table1,['u_id' => $u_id,'l_num' => $l_date['l_num']+1,'s_date' => date('Y-m-d')]);
                return ['day' => $l_date['l_num']+1];
            }
        }else{
            return 0;
        }
    }

    /**
     * 连续签到次数&&签到次数
     */
    public function num($u_id)
    {
        $data = $this->get($this->table1,'*',['u_id' => $u_id,'ORDER' => [$this->table1.'.s_date' => 'DESC']]);
        if($data['s_date']!=date('Y-m-d'))
        {
            if(strtotime($data['s_date'])!=strtotime(date('Y-m-d',strtotime('-1 days'))))
            {
                return 0;
            }else{
                return ['day' => $data['l_num']];
            }
        }else{
            return ['day' => $data['l_num']];
        }
    }

}

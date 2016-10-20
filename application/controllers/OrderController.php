<?php

namespace application\controller;


use core\lib\model;

class OrderController extends \core\imooc
{
    //框架首页
    public function orderlist()
    {
        $this->display('order.php');
    }

    /**
     * 获取发单订单信息接口
     */
    public function getsend()
    {
        $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : 0;
//        if($user_id==0){
//            echo 0;die;
//        }
        $model = new model();
        $fa_list = $model->select("send",[ "[>]user_info" => ["send.r_id" => "user_info.u_id"]],'*',['u_id'=>1]);
        echo json_encode($fa_list);
    }


    /**
     * 获取接单订单信息接口
     */
    public function getget()
    {
        $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : 0;
//        if($user_id==0){
//            echo 0;die;
//        }
        $model = new model();
        $list = $model->select("send",[ "[>]user_info" => ["send.u_id" => "user_info.u_id"]],'*',['r_id'=>1]);
        echo json_encode($list);
    }
}
<?php

namespace application\controller;

use application\models\signInModel;
class SignInController extends \core\imooc
{
	/**
     * 签到首页
     * @return [type] [description]
     */
    public function show()
    {
        $this->display('sign_in/show.php');
    }

    /**
     * 添加入库
     */
    public function add()
    {
        $u_id = $_SESSION['id'];
        $sign_in = new signInModel();
        $date = $sign_in->add($u_id);
        echo json_encode($date);
    }

    /**
     * 获取页面签到次数
     */
    public function xiangqing()
    {
        $u_id = $_SESSION['id'];
        $sign_in = new signInModel();
        $num = $sign_in->num($u_id);
        echo json_encode($num);
    }
}
<?php

namespace application\controller;

use application\models\userInfoModel;

class PropertyController extends \core\imooc
{
    public function recharge()
    {
        $this->display('recharge.php');
    }

    public function recharge_ac()
    {
        //检测登录
        $_SESSION['user'] = 1;

        $user = $_SESSION['user'];
        $paynum = post('paynum',false,'int');
        $type = post('type',false,'int');
        $paypass = post('paypass',false,'int');
        $info = array();
        if(!$paynum || !$type || !$paypass) {
            $info['status'] = 0;
            $info['msg'] = '您的信息填错啦！';
        } else {
            $model = new userInfoModel();
            $passwd = md5(md5($paypass));
            //验证支付密码
            $re = $model->checkPayPass($user,$passwd);
            if(!$re['status']) {
                $info['status'] = 0;
                $info['msg'] = $re['msg'];
            } else {
                if( $model->recharge($user,$paynum) ) {
                    $info['status'] = 1;
                    $info['msg'] = '成功充值' . $paynum . '元';
                } else {
                    $info['status'] = 1;
                    $info['msg'] = 'sorry! 充值失败了';
                }
            }







        }
        $this->assign('info',$info);
        $this->display('prompl.php');
    }
}
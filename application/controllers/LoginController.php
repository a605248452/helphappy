<?php

namespace application\controller;

use application\models\userModel;
use core\lib\Ecd;

class LoginController extends \core\imooc
{

    /*
     * 登陆首页
     */
    public function login()
    {
        $this->display('login1.php');
    }

    /*
     * 验证登陆
     */
    public function logined()
    {
        //接值
        $name = post('name');
        $pwd = MD5(post('u_pwd'));
//       echo  $name,$pwd;die;
        $model = new userModel();
        $login = $model->where("user", ["u_name" => "$name", "u_pwd" => "$pwd"]);
//         var_dump($login);die;
        if ($login) {
            session_start();
            $_SESSION['id']=$login[0]['u_id'];
           jump('index/index');
        } else {
            echo "<script>alert('失败');history.go(-1);</script>";
        }
    }

    /*
     * 注册页
     */
    public function reg()
    {
        $this->display('register.php');
    }

    /*
     * 验证注册
     */
    public function register()
    {
        //接值
        $name = post('u_name');
        $nickname = post('nickname');
        $pwd = post('u_pwd');
        $email = post('email');
        $phone = post('phone');
        $number=post('number');
        $model = new userModel();
        $add = $model->add('user_info', ['u_name' => $name, 'nickname' => $nickname, 'u_pwd' => $pwd, 'email' => $email, 'phone' => $phone]);
          if ($add) {
              jump('Login/login');
          }
    }

    /*
     * 验证账号唯一性
     */
    public function only(){
        $name=post('name');
        $model=new userModel();
        $one=$model->getone('user',['u_name'=>$name]);
        if($one==true){
            echo 1;
        }
    }
    /*
     * 短信验证码
     */
    public function msg(){
            //var_dump($_SERVER);die;
            $tel=post('num');
        if(preg_match("/^1[34578]{1}\d{9}$/",$tel)){

            $rand=rand(100000,999999);
            $url = "http://www.etuocloud.com/gatetest.action";
            $app_key = 'exdeaxIkNw0vgH1WNbifPpuXe6HICvQN';
            $app_secret = 'bVMnLnUz3KUltEpYLm3nwL5SXmyrEPpHDXff55YJjWdjn5j3f3ny49Y8Ez8zae0d';
            $format = 'json';
            //初始化
            $ecd = new Ecd($url,$app_key,$app_secret,$format);
            //发送验证码短信
            $res= $ecd->send_sms_code("$tel","1",$rand,'');
            //var_dump($res);die;
            if($res){
                $_SESSION['rand']=$rand;
            }else{
                echo 0;
            }

        }else{
            echo 0;
        }


    }



}


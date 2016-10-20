<?php
/**
 * Created by PhpStorm.
 * User: 元宝
 * Date: 2016/10/15
 * Time: 9:30
 */

namespace application\controller;

use core\lib\Ecd;
use application\models\userModel;

class SetController  extends \core\imooc
{
    /*
     * 设置主页
     */
    public function home(){
        $this->display('set.php');
    }

    /*
    * 实名认证
    */
    public function name(){
        $this->display('set_ren.php');
    }

    /*
   * 银行卡
   */
    public function bank(){
        $this->display('set_bank.php');
    }
    /*
     * 添加银行卡页面
     */
    public function add_bank(){
        $this->display('set_gobank.php');
    }


    /*
     * 我的订单
     */
    public function order(){
        $this->display('set_order.php');
    }

    /*
     * 个人信息
     */
    public function info(){
//        $id=$_SESSION['id'];
//        $name=$_SESSION['name'];
        $model=new userModel();
        $res=$model->getone("user_info",['u_id'=>1]);
        $this->assign("one",$res);
        $this->display('set_info.php');
    }
    /*
     * 绑定手机
     */
    public function bang(){
        $model=new userModel();
        $res=$model->getone("user_info",['u_id'=>1]);
        $this->assign("bang",$res);
        $this->display('set_bang.php');
    }
    /*
     * 修改手机号页面
     */
    public function phone(){
        $this->display('set_phone.php');
    }

    /*
    * 短信验证码
    */
    public function msg(){
        $tel=post('num');
        if(!preg_match("/^1[34578]{1}\d{9}$/",$tel)) {
            exit(1);
        }
        $rand=rand(10000,999999);
        $url = "http://www.etuocloud.com/gatetest.action";
        $app_key = 'exdeaxIkNw0vgH1WNbifPpuXe6HICvQN';
        $app_secret = 'bVMnLnUz3KUltEpYLm3nwL5SXmyrEPpHDXff55YJjWdjn5j3f3ny49Y8Ez8zae0d';
        $format = 'json';
        //初始化
        $ecd = new Ecd($url,$app_key,$app_secret,$format);
        //发送验证码短信
        $res= $ecd->send_sms_code("$tel","1",$rand,'');
        $json=json_decode($res,true);
        //var_dump($json);die;
        if($json['result']==0){
            $_SESSION['rand']=$rand;
        }else{
            echo 2;
        }

    }
    /*
     * 验证短信验证码
     */
    public function number(){
        $number=post('num');
        $rand=$_SESSION['rand'];
        echo $rand;
        if($number!=$rand){
            echo 1;
        }
    }

    /*
     * 修改手机号
     */
    public function setphone(){
        //        $id=$_SESSION['id'];
        $phone=post('phone');
        $model=new userModel();
        $res=$model->save('user_info',['phone'=>$phone],['u_id'=>1]);
        if($res){
            jump('Set/bang');
        }
    }

    /*
   * 交易密码
   */
    public function pass(){
        $this->display('set_pass.php');
    }
    /*
     * 设置交易密码页面
     */
    public function gopass(){
        //        $id=$_SESSION['id'];
        $model=new userModel();
        $res=$model->getone('user_info',['u_id'=>1]);
        $result['tel']=$res['phone'];
        $result['phone']= substr_replace($res['phone'],'****',3,4);
        $this->assign('sj',$result);
        $this->display('set_gopass.php');
    }

    /*
      * 设置交易密码
      */
    public function set_gopass(){
        //        $id=$_SESSION['id'];
        $pass=post('pass');
//        echo $pass;die;
        $paypass=MD5($pass);
        $model=new userModel();
        $res=$model->save('user_info',['paypass'=>$paypass],['u_id'=>1]);
        if($res){
            jump('Set/pass');
        }
    }

    /*
     * 交易旧密码
     */
    public function old(){
        //        $id=$_SESSION['id'];
        $jps=post('jps');
        $model=new userModel();
        $res=$model->getone('user_info',['u_id'=>1]);
        $pass=$res['paypass'];
        $old=MD5($jps);
        if($pass==$old){
            echo 1;
        }
    }


    /*
    * 修改登陆密码页面
    */
    public function topass(){
        //        $id=$_SESSION['id'];
        $model=new userModel();
        $res=$model->getone('user_info',['u_id'=>1]);
        $result['tel']=$res['phone'];
        $result['phone']= substr_replace($res['phone'],'****',3,4);
        $this->assign('sj',$result);
        $this->display('set_topass.php');
    }

    /*
    * 修改登录密码页面
    */
    public function pwd(){
        //        $id=$_SESSION['id'];
        $model=new userModel();
        $res=$model->getone('user_info',['u_id'=>1]);
        $result['tel']=$res['phone'];
        $result['phone']= substr_replace($res['phone'],'****',3,4);
        $this->assign('sj',$result);
        $this->display('set_pwd.php');
    }

    /*
      * 修改登陆密码
      */
    public function set_topass(){
        //        $id=$_SESSION['id'];
        $pwd=post('pwd');
//       echo $pass;die;
        $npass=MD5($pwd);
        $model=new userModel();
        $res=$model->save('user',['u_pwd'=>$npass],['u_id'=>1]);
        if($res){
            jump('Set/pwd');
        }
    }

    /*
    * 登陆旧密码
    */
    public function old_pwd(){
        //        $id=$_SESSION['id'];
        $jps=post('pwd');
        $model=new userModel();
        $res=$model->getone('user',['u_id'=>1]);
        $pwd=$res['u_pwd'];
        $old=MD5($jps);
        if($pwd==$old){
            echo 1;
        }
    }

    /*
     * 常见问题
     */
    public function ques(){
        $this->display('set_ques.php');
    }
    /*
    * 关于我们
    */
    public function details(){
        $this->display('set_details.php');
    }









}
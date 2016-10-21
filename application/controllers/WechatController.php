<?php

namespace application\controller;

use core\lib\wechatCallbackapiTest;

class WechatController extends \core\imooc
{

    public function check()
    {
        define("TOKEN", "bbl");
        $wechatObj = new wechatCallbackapiTest();
        $wechatObj->valid();
    }
}
<?php

namespace application\controller;

class WechatController extends \core\imooc
{

    public function check()
    {
        define("TOKEN", "bbl");
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }

        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            $echoStr = $_GET["echostr"];
            echo $echoStr;
            exit;
        }else{
            return false;
        }
    }
}
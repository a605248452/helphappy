<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>帮帮乐</title>
    <base href="{{host}}public/"/>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="loading"><img src="images/ajax-loader.gif"/></div>
<div data-role="page" class="touzi bank" id="set-bank">
    <header data-role="header" data-position="fixed">
        <a href="#" data-rel="back" class="ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon" data-transition="slide" data-direction="revserse">返回</a>
        <h3>个人信息</h3>
    </header>
    <div class="ui-content" data-role="content">

        <ul>
            <li>
                <small style="margin-left: 25%"><font color="black"  size="3">用户名 ：</font></small>
                {% if one.realname == '' %}

                <a href="{{host}}set/name">立即认证</a>

                {% else %}

                {{one.realname}}

                {% endif %}
            </li>
            <li>
                    <small style="margin-left: 25%"><font color="black" size="3">昵称 ：</font></small>
                     <small id="nick">{{one.nickname}}</small>
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">手机号 ：</font></small>
                {{one.phone}}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">身份证号 ：</font></small>
                {{one.id_card}}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">余额 ：</font></small>
                {{one.balance}}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">接单信用度 ：</font></small>
                {{one.buy_credit}}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">发单信用度 ：</font></small>
                {{one.sell_credit}}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">上次登陆时间 ：</font></small>
                {{one.lastlogintime}}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">注册时间 ：</font></small>
                {{one.regtime}}
            </li>
        </ul>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $(".loading").fadeOut();

//            //既点既改
//            $(document).on('click','#nick',function(){
//                var val=$(this).html();
//                //获取文本框内容 定义一个类来区分避免出BUG
//                $(this).parent().html("<input type=\"text\" id=\"nk\" value="+val+"/>");
//                //获取焦点
//                var inp=$('#nk').focus();
//                //失去焦点
//                inp.blur(function(){
//                    var new_val=$(this).val();
//                    //利用post传值 参数1：传值地址  参数2：要传的值 参数3:返回函数
//                    $.post("{{host}}set/change",{title:new_val},function(e){
//                        //返回值为1则是新值 否则原值
//                       alert(e);
////                        if(e==1){
////                            inp.parent().html("<b class=\"title\">"+new_val+"</b>")
////                        }else{
////                            inp.parent().html("<b class=\"title\">"+val+"</b>")
////                        }
//                    })
//                })
//            })
        })
    </script>

</body>
</html>
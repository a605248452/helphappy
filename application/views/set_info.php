<!DOCTYPE html>
<html>
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
                <img src=" dddd{{one.img}}" alt="" width="100px" />

            <li>
                <small style="margin-left: 25%"><font color="black" size="3">用户名 ：</font></small>
                {% if one.realname|length <0 %}

                <a href="{{host}}">立即认证</a>

                {% else %}

                {{one.realname}}

                {% endif %}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">昵称 ：</font></small>
                {{one.nickname}}
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
                <small style="margin-left: 25%"><font color="black" size="3">接单信用度 ：</font></small>
                {{one.buy_credit}}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">发单信用度 ：</font></small>
                {{one.sell_credit}}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">余额 ：</font></small>
                {{one.balance}}
            </li>
            <li>
                <small style="margin-left: 25%"><font color="black" size="3">上次支付时间 ：</font></small>
                {{one.lastpaydate}}
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
        })
    </script>
</div>
</body>
</html>
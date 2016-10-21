<?php

/* set_info.php */
class __TwigTemplate_bb34a2396bab98564719dff23e6ccdd8be8b560a4e643dcf516b631928bc7600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>帮帮乐</title>
    <base href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\"/>
    <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
<div data-role=\"page\" class=\"touzi bank\" id=\"set-bank\">
    <header data-role=\"header\" data-position=\"fixed\">
        <a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a>
        <h3>个人信息</h3>
    </header>
    <div class=\"ui-content\" data-role=\"content\">

        <ul>
                <img src=\" dddd";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "img", array()), "html", null, true);
        echo "\" alt=\"\" width=\"100px\" />

            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">用户名 ：</font></small>
                ";
        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "realname", array())) < 0)) {
            // line 26
            echo "
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
            echo "\">立即认证</a>

                ";
        } else {
            // line 30
            echo "
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "realname", array()), "html", null, true);
            echo "

                ";
        }
        // line 34
        echo "            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">昵称 ：</font></small>
                ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "nickname", array()), "html", null, true);
        echo "
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">手机号 ：</font></small>
                ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "phone", array()), "html", null, true);
        echo "
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">身份证号 ：</font></small>
                ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "id_card", array()), "html", null, true);
        echo "
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">接单信用度 ：</font></small>
                ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "buy_credit", array()), "html", null, true);
        echo "
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">发单信用度 ：</font></small>
                ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "sell_credit", array()), "html", null, true);
        echo "
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">余额 ：</font></small>
                ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "balance", array()), "html", null, true);
        echo "
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">上次支付时间 ：</font></small>
                ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "lastpaydate", array()), "html", null, true);
        echo "
            </li>

            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">上次登陆时间 ：</font></small>
                ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "lastlogintime", array()), "html", null, true);
        echo "
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">注册时间 ：</font></small>
                ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "regtime", array()), "html", null, true);
        echo "
            </li>
        </ul>

    </div>
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
    <script type=\"text/javascript\">
        \$(window).load(function(){
            \$(\".loading\").fadeOut();
        })
    </script>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "set_info.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 70,  126 => 66,  118 => 61,  111 => 57,  104 => 53,  97 => 49,  90 => 45,  83 => 41,  76 => 37,  71 => 34,  65 => 31,  62 => 30,  56 => 27,  53 => 26,  51 => 25,  44 => 21,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>帮帮乐</title>
    <base href=\"{{host}}public/\"/>
    <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
<div data-role=\"page\" class=\"touzi bank\" id=\"set-bank\">
    <header data-role=\"header\" data-position=\"fixed\">
        <a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a>
        <h3>个人信息</h3>
    </header>
    <div class=\"ui-content\" data-role=\"content\">

        <ul>
                <img src=\" dddd{{one.img}}\" alt=\"\" width=\"100px\" />

            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">用户名 ：</font></small>
                {% if one.realname|length <0 %}

                <a href=\"{{host}}\">立即认证</a>

                {% else %}

                {{one.realname}}

                {% endif %}
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">昵称 ：</font></small>
                {{one.nickname}}
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">手机号 ：</font></small>
                {{one.phone}}
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">身份证号 ：</font></small>
                {{one.id_card}}
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">接单信用度 ：</font></small>
                {{one.buy_credit}}
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">发单信用度 ：</font></small>
                {{one.sell_credit}}
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">余额 ：</font></small>
                {{one.balance}}
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">上次支付时间 ：</font></small>
                {{one.lastpaydate}}
            </li>

            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">上次登陆时间 ：</font></small>
                {{one.lastlogintime}}
            </li>
            <li>
                <small style=\"margin-left: 25%\"><font color=\"black\" size=\"3\">注册时间 ：</font></small>
                {{one.regtime}}
            </li>
        </ul>

    </div>
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
    <script type=\"text/javascript\">
        \$(window).load(function(){
            \$(\".loading\").fadeOut();
        })
    </script>
</div>
</body>
</html>";
    }
}

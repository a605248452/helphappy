<?php

/* login1.php */
class __TwigTemplate_502a0b04a5a84d929fd7e05beca81ad09266e6d688f0ea80938c65613fd4f3d3 extends Twig_Template
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
<div data-role=\"page\" class=\"touzi phone\" id=\"phone\">
    <header data-role=\"header\" data-position=\"fixed\">
        <a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a>
        <h3>登陆</h3>
    </header>
    <div class=\"ui-content\"  data-role=\"content\">
        <form  action=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "login/logined\"   method=\"post\" target=\"_blank\">
            <ul>
                <li>
                    <label>用户名：</label>
                    <input type=\"text\" name=\"name\"  placeholder=\"请填写用户名\" data-role=\"none\"/>
                </li>
                <li>
                    <label>密码：</label>
                    <input type=\"password\" name=\"u_pwd\" id=\"pwd\" placeholder=\"请填写密码\" data-role=\"none\"/>
                </li>
            </ul>
            <input type=\"submit\" id=\"sub\"   value=\"登陆\" data-role=\"none\"/>
            <p style=\"text-align: center\">没有账号? <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "login/reg\">立即注册</a></p>
        </form>
    </div>
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
<!--    <script>-->
<!--        \$(function(){-->
<!--            \$(\"#sub\").click(function(){-->
<!--                var name=\$(\"#name\").val();-->
<!--                var pwd=\$(\"#pwd\").val();-->
<!--                //alert(name);-->
<!--                \$.post(\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "login/logined\",{name:name,pwd:pwd},function(log){-->
<!--                    alert(log);-->
<!--                })-->
<!--            })-->
<!--        })-->
<!---->
<!--    </script>-->
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login1.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 42,  57 => 31,  42 => 19,  27 => 7,  19 => 1,);
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
<div data-role=\"page\" class=\"touzi phone\" id=\"phone\">
    <header data-role=\"header\" data-position=\"fixed\">
        <a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a>
        <h3>登陆</h3>
    </header>
    <div class=\"ui-content\"  data-role=\"content\">
        <form  action=\"{{host}}login/logined\"   method=\"post\" target=\"_blank\">
            <ul>
                <li>
                    <label>用户名：</label>
                    <input type=\"text\" name=\"name\"  placeholder=\"请填写用户名\" data-role=\"none\"/>
                </li>
                <li>
                    <label>密码：</label>
                    <input type=\"password\" name=\"u_pwd\" id=\"pwd\" placeholder=\"请填写密码\" data-role=\"none\"/>
                </li>
            </ul>
            <input type=\"submit\" id=\"sub\"   value=\"登陆\" data-role=\"none\"/>
            <p style=\"text-align: center\">没有账号? <a href=\"{{host}}login/reg\">立即注册</a></p>
        </form>
    </div>
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
<!--    <script>-->
<!--        \$(function(){-->
<!--            \$(\"#sub\").click(function(){-->
<!--                var name=\$(\"#name\").val();-->
<!--                var pwd=\$(\"#pwd\").val();-->
<!--                //alert(name);-->
<!--                \$.post(\"{{host}}login/logined\",{name:name,pwd:pwd},function(log){-->
<!--                    alert(log);-->
<!--                })-->
<!--            })-->
<!--        })-->
<!---->
<!--    </script>-->
</div>
</body>
</html>";
    }
}

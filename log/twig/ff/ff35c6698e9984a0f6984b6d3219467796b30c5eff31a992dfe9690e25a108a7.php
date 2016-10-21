<?php

/* set.php */
class __TwigTemplate_9ca7ab33b9732c83f95151d9a2debe68d3d3ec643c7cd747b5354f85d824e531 extends Twig_Template
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
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi set\" id=\"set\">
\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
   \t\t 
   \t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\"  data-ajax=\"false\">返回</a> 
\t\t\t<h3>设置</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<dl>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/name\"  data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">实名认证<small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "name", array()), "html", null, true);
        echo "</small></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/bank\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">银行卡</a>
\t\t\t\t</dd>
                <dd>
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/order\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">我的订单</a>
                </dd>
                <dd>
                    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/info\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">个人信息</a>
                </dd>
\t\t\t</dl>
\t\t\t<dl>
                <dd>
                    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/bang\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">绑定手机<small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one"]) ? $context["one"] : null), "phone", array()), "html", null, true);
        echo "</small></a>
                </dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/pass\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">交易密码</a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/pwd\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">修改登录密码</a>
\t\t\t\t</dd>

\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/ques\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">常见问题</a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/details\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">关于我们</a>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
\t\t<footer  data-position=\"fixed\" data-role=\"footer\">
\t\t\t<a data-role=\"none\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/out\" class=\"outset\">退出登录</a>
\t\t</footer>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t\t
\t\t\t\t})
   \t\t</script>
\t</div>
\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "set.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 58,  104 => 53,  98 => 50,  89 => 44,  83 => 41,  75 => 38,  67 => 33,  61 => 30,  55 => 27,  47 => 24,  27 => 7,  19 => 1,);
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
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi set\" id=\"set\">
\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
   \t\t 
   \t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\"  data-ajax=\"false\">返回</a> 
\t\t\t<h3>设置</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<dl>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"{{host}}set/name\"  data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">实名认证<small>{{one.name}}</small></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"{{host}}set/bank\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">银行卡</a>
\t\t\t\t</dd>
                <dd>
                    <a href=\"{{host}}set/order\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">我的订单</a>
                </dd>
                <dd>
                    <a href=\"{{host}}set/info\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">个人信息</a>
                </dd>
\t\t\t</dl>
\t\t\t<dl>
                <dd>
                    <a href=\"{{host}}set/bang\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">绑定手机<small>{{one.phone}}</small></a>
                </dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"{{host}}set/pass\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">交易密码</a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"{{host}}set/pwd\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">修改登录密码</a>
\t\t\t\t</dd>

\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"{{host}}set/ques\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">常见问题</a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"{{host}}set/details\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">关于我们</a>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
\t\t<footer  data-position=\"fixed\" data-role=\"footer\">
\t\t\t<a data-role=\"none\" href=\"{{host}}set/out\" class=\"outset\">退出登录</a>
\t\t</footer>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t\t
\t\t\t\t})
   \t\t</script>
\t</div>
\t
</body>
</html>";
    }
}

<?php

/* set_ques.php */
class __TwigTemplate_706f4574bbb63b090188498b686bb571df618e2ff28ce1003634af709c78c380 extends Twig_Template
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
\t<div data-role=\"page\" class=\"touzi set\" id=\"ques\">
\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
   \t\t 
   \t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\"  data-ajax=\"false\">返回</a> 
\t\t\t<h3>常见问题</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<dl>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/details\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>帮帮乐介绍</label></a>
\t\t\t\t</dd>
                <dd>
                    <a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>我要接单</label></a>
                </dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>账户安全</label></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>账户管理</label></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>资金管理</label></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>政策法规</label></a>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
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
        return "set_ques.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  27 => 7,  19 => 1,);
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
\t<div data-role=\"page\" class=\"touzi set\" id=\"ques\">
\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
   \t\t 
   \t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\"  data-ajax=\"false\">返回</a> 
\t\t\t<h3>常见问题</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<dl>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"{{host}}set/details\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>帮帮乐介绍</label></a>
\t\t\t\t</dd>
                <dd>
                    <a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>我要接单</label></a>
                </dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>账户安全</label></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>账户管理</label></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>资金管理</label></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"set-details.html\" data-transition=\"slide\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>政策法规</label></a>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
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

<?php

/* set_pass.php */
class __TwigTemplate_4a5ddffa75519bb94b9384ef0a7dd3f15f7aee1fc47cda4369019ee295d2eb0e extends Twig_Template
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
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi set\" id=\"pass\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>交易密码</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<dl>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/gopass\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>设置交易密码</label></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/topass\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>修改交易密码</label></a>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t})
   \t\t</script>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "set_pass.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  44 => 21,  27 => 7,  19 => 1,);
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
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi set\" id=\"pass\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>交易密码</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<dl>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"{{host}}set/gopass\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>设置交易密码</label></a>
\t\t\t\t</dd>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"{{host}}set/topass\" data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\"><label>修改交易密码</label></a>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t})
   \t\t</script>
\t</div>
</body>
</html>";
    }
}

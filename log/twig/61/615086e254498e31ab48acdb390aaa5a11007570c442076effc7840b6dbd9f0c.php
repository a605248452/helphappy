<?php

/* set_ren.php */
class __TwigTemplate_6ad7ff4d994dd01cc7bf310cccbc3b99596e40cd4079df7b8d8ea0a4351e6bc6 extends Twig_Template
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
    <title>赚不停</title>
    <base href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\"/>
    <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"css/style.css\"/>

</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi ren\" id=\"renzheng\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>实名认证</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<form action=\"#\" data-ajax=\"false\">
\t\t\t\t<small><font color=\"#ff7f50\">请填写您的真实信息</font></small>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>真实姓名：</label>
\t\t\t\t\t\t<input type=\"text\" required=\"\" placeholder=\"填写真实姓名\"  />
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>身份证号：</label>
\t\t\t\t\t\t<input type=\"text\" required=\"\" placeholder=\"填写合法身份证号\"/>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"submit\" value=\"确认并提交\" data-role=\"none\"/>
\t\t\t</form>
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
        return "set_ren.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>赚不停</title>
    <base href=\"{{host}}public/\"/>
    <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"css/style.css\"/>

</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi ren\" id=\"renzheng\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>实名认证</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<form action=\"#\" data-ajax=\"false\">
\t\t\t\t<small><font color=\"#ff7f50\">请填写您的真实信息</font></small>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>真实姓名：</label>
\t\t\t\t\t\t<input type=\"text\" required=\"\" placeholder=\"填写真实姓名\"  />
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label>身份证号：</label>
\t\t\t\t\t\t<input type=\"text\" required=\"\" placeholder=\"填写合法身份证号\"/>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"submit\" value=\"确认并提交\" data-role=\"none\"/>
\t\t\t</form>
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

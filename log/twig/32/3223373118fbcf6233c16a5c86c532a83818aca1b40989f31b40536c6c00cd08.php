<?php

/* set_bank.php */
class __TwigTemplate_3fc7ef17b54cd7024572f8753df413211389adcdc8c5190557de05e57c7a46d8 extends Twig_Template
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
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
   \t\t 
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi bank\" id=\"set-bank\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>银行卡</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<small>开户行</small>
\t\t\t\t\t<span>招商银行</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<small>账号</small>
\t\t\t\t\t<span>62215461654513461</span>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<small>开户行</small>
\t\t\t\t\t<span>招商银行</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<small>账号</small>
\t\t\t\t\t<span>62215461654513461</span>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/add_bank\" data-transition=\"slide\">添加新卡</a>
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
        return "set_bank.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  27 => 7,  19 => 1,);
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
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
   \t\t 
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi bank\" id=\"set-bank\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>银行卡</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<small>开户行</small>
\t\t\t\t\t<span>招商银行</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<small>账号</small>
\t\t\t\t\t<span>62215461654513461</span>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<small>开户行</small>
\t\t\t\t\t<span>招商银行</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<small>账号</small>
\t\t\t\t\t<span>62215461654513461</span>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<a href=\"{{host}}set/add_bank\" data-transition=\"slide\">添加新卡</a>
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

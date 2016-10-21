<?php

/* set_order.php */
class __TwigTemplate_1d4fbdb68d252edc05bd54b0fd0d1f2c98fe4d85ae0ecaf78930fcea77b8fa4e extends Twig_Template
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
        echo "\"/>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"public/css/slick.css\"/>
    <link rel=\"stylesheet\" href=\"public/css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"public/css/style.css\"/>
    <script src=\"public/js/jquery.min.js\"></script>
     <script src=\"public/js/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body style=\"background-color: #f2f2f2;\">
\t<div class=\"loading\"><img src=\"public/images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"index\" id=\"index\">
\t\t<header data-role=\"header\">
\t\t\t<h3>帮帮Le</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">

            <dl class=\"index-year\">
                <dt>支持续投，次月起年化收益增加0.1%</dt>   </dl>
                <dd>
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/name\"  data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">实名认证<small>*玉嘭</small></a>
                </dd>
                <dd>
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/name\"  data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">实名认证<small>*玉嘭</small></a>
                </dd>








</div>
            <div class=\"ui-content\" data-role=\"content\">
\t\t\t<dl class=\"index-year\">
\t\t\t\t<a href=\"month.html\" data-transition=\"slide\" data-ajax=\"false\">
\t\t\t\t\t<dd>
\t\t\t\t\t\t<h4>季度丰</h4>
\t\t\t\t\t\t<p><small>年化</small>6.3%起</p>
\t\t\t\t\t</dd>
\t\t\t\t\t<dt>支持续投，次月起年化收益增加0.1%</dt> 
\t\t\t\t</a>
\t\t\t</dl>
\t\t\t<dl class=\"index-year\">
\t\t\t\t<a href=\"month.html\" data-transition=\"slide\" data-ajax=\"false\">
\t\t\t\t\t<dd>
\t\t\t\t\t\t<h4>半年享</h4>
\t\t\t\t\t\t<p><small>年化</small>6.6%起</p>
\t\t\t\t\t</dd>
\t\t\t\t\t<dt>支持续投，次月起年化收益增加0.1%</dt>
\t\t\t\t</a>
\t\t\t</dl>
\t\t</div>
\t\t<script src=\"public/js/slick.min.js\" ></script>
\t    <script type=\"text/javascript\">
\t    \t\$(document).on(\"pagecreate\",\"#index\",function(){
 \t\t\t\t\t\$('.slick').slick({
\t\t\t\t\t\t    \tdots:true,
\t\t\t\t\t\t    \tautoplay:true,
\t\t\t\t\t\t    \tautoplaySpeed:2000,
\t\t\t\t\t\t    \tarrows:false
\t\t\t\t\t\t    }); 
\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t\t\$(window).load(function(){
\t\t\t\t\t\t\$(\".loading\").fadeOut()
\t\t\t\t\t})
\t    </script>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "set_order.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 28,  48 => 25,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>赚不停</title>
    <base href=\"{{host}}\"/>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"public/css/slick.css\"/>
    <link rel=\"stylesheet\" href=\"public/css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"public/css/style.css\"/>
    <script src=\"public/js/jquery.min.js\"></script>
     <script src=\"public/js/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body style=\"background-color: #f2f2f2;\">
\t<div class=\"loading\"><img src=\"public/images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"index\" id=\"index\">
\t\t<header data-role=\"header\">
\t\t\t<h3>帮帮Le</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">

            <dl class=\"index-year\">
                <dt>支持续投，次月起年化收益增加0.1%</dt>   </dl>
                <dd>
                    <a href=\"{{host}}set/name\"  data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">实名认证<small>*玉嘭</small></a>
                </dd>
                <dd>
                    <a href=\"{{host}}set/name\"  data-ajax=\"false\" class=\"ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon\">实名认证<small>*玉嘭</small></a>
                </dd>








</div>
            <div class=\"ui-content\" data-role=\"content\">
\t\t\t<dl class=\"index-year\">
\t\t\t\t<a href=\"month.html\" data-transition=\"slide\" data-ajax=\"false\">
\t\t\t\t\t<dd>
\t\t\t\t\t\t<h4>季度丰</h4>
\t\t\t\t\t\t<p><small>年化</small>6.3%起</p>
\t\t\t\t\t</dd>
\t\t\t\t\t<dt>支持续投，次月起年化收益增加0.1%</dt> 
\t\t\t\t</a>
\t\t\t</dl>
\t\t\t<dl class=\"index-year\">
\t\t\t\t<a href=\"month.html\" data-transition=\"slide\" data-ajax=\"false\">
\t\t\t\t\t<dd>
\t\t\t\t\t\t<h4>半年享</h4>
\t\t\t\t\t\t<p><small>年化</small>6.6%起</p>
\t\t\t\t\t</dd>
\t\t\t\t\t<dt>支持续投，次月起年化收益增加0.1%</dt>
\t\t\t\t</a>
\t\t\t</dl>
\t\t</div>
\t\t<script src=\"public/js/slick.min.js\" ></script>
\t    <script type=\"text/javascript\">
\t    \t\$(document).on(\"pagecreate\",\"#index\",function(){
 \t\t\t\t\t\$('.slick').slick({
\t\t\t\t\t\t    \tdots:true,
\t\t\t\t\t\t    \tautoplay:true,
\t\t\t\t\t\t    \tautoplaySpeed:2000,
\t\t\t\t\t\t    \tarrows:false
\t\t\t\t\t\t    }); 
\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t\t\$(window).load(function(){
\t\t\t\t\t\t\$(\".loading\").fadeOut()
\t\t\t\t\t})
\t    </script>
\t</div>
</body>
</html>";
    }
}

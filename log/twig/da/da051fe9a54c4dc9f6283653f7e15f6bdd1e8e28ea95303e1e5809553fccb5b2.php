<?php

/* receive.php */
class __TwigTemplate_837031ff40ff71cd583c0cf8fc587db024997171c31fed6906ab4e57a617031a extends Twig_Template
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
     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/css/slick.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/css/style.css\"/>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery.min.js\"></script>
     <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body style=\"background-color: #f2f2f2;\">
\t<div class=\"loading\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"index\" id=\"index\">
\t\t<header data-role=\"header\">
\t\t\t<h3>赚不停</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\"> 
\t\t\t<ul class=\"slick\">
\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/ban01.png\"/></a></li>
\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/ban02.png\"/></a></li>
\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/ban03.png\"/></a></li>
\t\t\t    <li><a href=\"#\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/ban04.png\"/></a></li>
\t\t\t</ul>
\t\t\t<ul class=\"index-menu\">
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/icon01.png\"/>
\t\t\t\t\t<p>保险承保</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/icon02.png\"/>
\t\t\t\t\t<p>当日计息</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/icon03.png\"/>
\t\t\t\t\t<p>续投加息</p>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<dl class=\"index-year\">
\t\t\t\t<a href=\"month.html\" data-transition=\"slide\" data-ajax=\"false\">
\t\t\t\t\t<dd>
\t\t\t\t\t\t<h4>月月盈</h4>
\t\t\t\t\t\t<p><small>年化</small>6.0%起</p>
\t\t\t\t\t</dd>
\t\t\t\t\t<dt>支持续投，次月起年化收益增加0.1%</dt>
\t\t\t\t</a>
\t\t\t</dl>
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
\t\t<footer data-role=\"footer\" data-position=\"fixed\">  
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.html\"  rel=\"external\">接单</a></li>
\t\t\t\t<li><a href=\"self.html\"  rel=\"external\">发单</a></li>
\t\t\t\t<li><a href=\"self.html\"  rel=\"external\">我的</a></li>
\t\t\t</ul>
\t\t</footer>
\t\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/slick.min.js\" ></script>
\t    <script type=\"text/javascript\">
\t    \t\$(document).on(\"pagecreate\",\"#index\",function(){
 \t\t\t\t\t\$('.slick').slick({
\t\t\t\t\t\t    \tdots:true,
\t\t\t\t\t\t    \tautoplay:true,
\t\t\t\t\t\t    \tautoplaySpeed:2000,
\t\t\t\t\t\t    \tarrows:false,
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
        return "receive.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 75,  92 => 36,  85 => 32,  78 => 28,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  49 => 14,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>赚不停</title>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{host}}public/css/slick.css\"/>
    <link rel=\"stylesheet\" href=\"{{host}}public/css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"{{host}}public/css/style.css\"/>
    <script src=\"{{host}}public/js/jquery.min.js\"></script>
     <script src=\"{{host}}public/js/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body style=\"background-color: #f2f2f2;\">
\t<div class=\"loading\"><img src=\"{{host}}public/images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"index\" id=\"index\">
\t\t<header data-role=\"header\">
\t\t\t<h3>赚不停</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\"> 
\t\t\t<ul class=\"slick\">
\t\t\t    <li><a href=\"#\"><img src=\"{{host}}public/images/ban01.png\"/></a></li>
\t\t\t    <li><a href=\"#\"><img src=\"{{host}}public/images/ban02.png\"/></a></li>
\t\t\t    <li><a href=\"#\"><img src=\"{{host}}public/images/ban03.png\"/></a></li>
\t\t\t    <li><a href=\"#\"><img src=\"{{host}}public/images/ban04.png\"/></a></li>
\t\t\t</ul>
\t\t\t<ul class=\"index-menu\">
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{host}}public/images/icon01.png\"/>
\t\t\t\t\t<p>保险承保</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{host}}public/images/icon02.png\"/>
\t\t\t\t\t<p>当日计息</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{host}}public/images/icon03.png\"/>
\t\t\t\t\t<p>续投加息</p>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<dl class=\"index-year\">
\t\t\t\t<a href=\"month.html\" data-transition=\"slide\" data-ajax=\"false\">
\t\t\t\t\t<dd>
\t\t\t\t\t\t<h4>月月盈</h4>
\t\t\t\t\t\t<p><small>年化</small>6.0%起</p>
\t\t\t\t\t</dd>
\t\t\t\t\t<dt>支持续投，次月起年化收益增加0.1%</dt>
\t\t\t\t</a>
\t\t\t</dl>
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
\t\t<footer data-role=\"footer\" data-position=\"fixed\">  
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.html\"  rel=\"external\">接单</a></li>
\t\t\t\t<li><a href=\"self.html\"  rel=\"external\">发单</a></li>
\t\t\t\t<li><a href=\"self.html\"  rel=\"external\">我的</a></li>
\t\t\t</ul>
\t\t</footer>
\t\t<script src=\"{{host}}public/js/slick.min.js\" ></script>
\t    <script type=\"text/javascript\">
\t    \t\$(document).on(\"pagecreate\",\"#index\",function(){
 \t\t\t\t\t\$('.slick').slick({
\t\t\t\t\t\t    \tdots:true,
\t\t\t\t\t\t    \tautoplay:true,
\t\t\t\t\t\t    \tautoplaySpeed:2000,
\t\t\t\t\t\t    \tarrows:false,
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

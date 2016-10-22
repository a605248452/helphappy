<?php

/* sign_in/show.php */
class __TwigTemplate_b633387cae14ab5c58a34c5875af7bd597135229755f0442a86beb9bffa0e1a4 extends Twig_Template
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
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title></title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/css/s_style.css\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public//js/jquery.min.js\"></script>
\t</head>
\t<body>
\t\t<div class=\"s_warp\">
\t
\t\t<header class=\"s_header\">
\t\t\t<ul ui-sref=\"l_gerenzhongxin\">
\t\t\t\t<li><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/s_y_h1_03.png\"/></li>
\t\t\t\t<li>返回</li>
\t\t\t</ul>
\t\t\t<h1>帮帮乐</h1>
\t\t\t<div class=\"header_right\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/s_y_h1_06.png\"/></div>
\t\t</header>
\t\t<section class=\"s_section\">
\t\t\t<div class=\"s_section_you\">
\t\t\t\t<h3><a href=\"javascript:void(0)\" id=\"sign_in\">签到</a></h3>
\t\t\t\t<p><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/s_sd.png\"/></p>
\t\t\t\t<ul>
\t\t\t\t\t<li>呦,天气不错哦</li>
\t\t\t\t\t<li>已连续签到<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\" style=\"color: black;\"><span id=\"day\"></span></a>天</li>
\t\t\t\t\t<li>你拥有<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\" style=\"color: black;\">0</a>次的兑换机会</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"s_section_jiang\">
\t\t\t\t<h1>签到奖品</h1>
\t\t\t\t<div id=\"dll\">
\t\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"s_section_jian\">
\t\t\t\t<h1>奖池</h1>
\t\t\t\t<div id=\"dll\">
\t\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</section>
\t\t<footer class=\"s_footer\">
\t\t\t<!--<div class=\"aaa\" ng-if='showbgg'>
\t\t\t\t<h1>你目前没有兑换机会<br />成功采购1次,既可获得一次兑换机会!</h1>
\t\t\t\t<button ng-click='showsss()' ui-sref='s_queren'>我知道了</button>
\t\t\t</div>-->
\t\t\t<!--<div class=\"know\" ng-if='showbg'>
\t\t\t\t<h1>签到规则</h1>
\t\t\t\t<p>1.连续签到7日,我们将随机在奖池中为你分派一个可兑换的奖品;</p>
\t\t\t\t<p>2.在平台上成功完成1次采购,你就可以在你的签到奖品中,免费兑换其它任何1个奖品.</p>
\t\t\t\t<p>还等什么,快来签到和采购吧,iPone.iPad等你来领取哦!</p>
\t\t\t\t<p>恩基云采平台拥有在法律允许范围内的最终解释权</p>
\t\t\t\t<button ng-click='showas()' >我知道了</button>
\t\t\t</div>-->
\t\t\t<dl>
\t\t\t\t<dt><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/s_y_f1_03.png\"/></dt>
\t\t\t\t<dd>首页</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/s_y_f1_05.png\"/></dt>
\t\t\t\t<dd>方案车</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/img/s_y_f1_07.png\"/></dt>
\t\t\t\t<dd>我</dd>
\t\t\t</dl>
\t\t</footer>
\t</div>

\t</body>
</html>
<script>
\t\$(function(){
\t\t\$.get('";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "signIn/xiangqing',function(msg){
\t\t\t\$(\"#day\").html(msg.day)
\t\t},'json')
\t\t\$(\"#sign_in\").click(function(){
\t\t\t\$.get('";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "signIn/add',function(msg){
\t\t\t\tif(msg==0)
\t\t\t\t{
\t\t\t\t\talert('今天已签到')
\t\t\t\t}else{
\t\t\t\t\t\$(\"#day\").html(msg.day)
\t\t\t\t}
\t\t\t},'json')
\t\t})
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "sign_in/show.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 121,  227 => 117,  214 => 107,  207 => 103,  200 => 99,  177 => 79,  173 => 78,  167 => 75,  163 => 74,  157 => 71,  153 => 70,  147 => 67,  143 => 66,  137 => 63,  133 => 62,  121 => 53,  117 => 52,  111 => 49,  107 => 48,  101 => 45,  97 => 44,  91 => 41,  87 => 40,  81 => 37,  77 => 36,  67 => 29,  63 => 28,  57 => 25,  49 => 20,  42 => 16,  32 => 9,  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title></title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{host}}public/css/s_style.css\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t    <script src=\"{{host}}public//js/jquery.min.js\"></script>
\t</head>
\t<body>
\t\t<div class=\"s_warp\">
\t
\t\t<header class=\"s_header\">
\t\t\t<ul ui-sref=\"l_gerenzhongxin\">
\t\t\t\t<li><img src=\"{{host}}public/img/s_y_h1_03.png\"/></li>
\t\t\t\t<li>返回</li>
\t\t\t</ul>
\t\t\t<h1>帮帮乐</h1>
\t\t\t<div class=\"header_right\"><img src=\"{{host}}public/img/s_y_h1_06.png\"/></div>
\t\t</header>
\t\t<section class=\"s_section\">
\t\t\t<div class=\"s_section_you\">
\t\t\t\t<h3><a href=\"javascript:void(0)\" id=\"sign_in\">签到</a></h3>
\t\t\t\t<p><img src=\"{{host}}public/img/s_sd.png\"/></p>
\t\t\t\t<ul>
\t\t\t\t\t<li>呦,天气不错哦</li>
\t\t\t\t\t<li>已连续签到<a href=\"{{host}}public/\" style=\"color: black;\"><span id=\"day\"></span></a>天</li>
\t\t\t\t\t<li>你拥有<a href=\"{{host}}public/\" style=\"color: black;\">0</a>次的兑换机会</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"s_section_jiang\">
\t\t\t\t<h1>签到奖品</h1>
\t\t\t\t<div id=\"dll\">
\t\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\" ng-click='showss()'>兑换</a></dd>
\t\t\t\t</dl>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"s_section_jian\">
\t\t\t\t<h1>奖池</h1>
\t\t\t\t<div id=\"dll\">
\t\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><img src=\"{{host}}public/img/images/s_shou1_03.png\"/></dt>
\t\t\t\t\t<dd><a href=\"{{host}}public/\">ipones6s</a></dd>
\t\t\t\t</dl>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</section>
\t\t<footer class=\"s_footer\">
\t\t\t<!--<div class=\"aaa\" ng-if='showbgg'>
\t\t\t\t<h1>你目前没有兑换机会<br />成功采购1次,既可获得一次兑换机会!</h1>
\t\t\t\t<button ng-click='showsss()' ui-sref='s_queren'>我知道了</button>
\t\t\t</div>-->
\t\t\t<!--<div class=\"know\" ng-if='showbg'>
\t\t\t\t<h1>签到规则</h1>
\t\t\t\t<p>1.连续签到7日,我们将随机在奖池中为你分派一个可兑换的奖品;</p>
\t\t\t\t<p>2.在平台上成功完成1次采购,你就可以在你的签到奖品中,免费兑换其它任何1个奖品.</p>
\t\t\t\t<p>还等什么,快来签到和采购吧,iPone.iPad等你来领取哦!</p>
\t\t\t\t<p>恩基云采平台拥有在法律允许范围内的最终解释权</p>
\t\t\t\t<button ng-click='showas()' >我知道了</button>
\t\t\t</div>-->
\t\t\t<dl>
\t\t\t\t<dt><img src=\"{{host}}public/img/s_y_f1_03.png\"/></dt>
\t\t\t\t<dd>首页</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><img src=\"{{host}}public/img/s_y_f1_05.png\"/></dt>
\t\t\t\t<dd>方案车</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><img src=\"{{host}}public/img/s_y_f1_07.png\"/></dt>
\t\t\t\t<dd>我</dd>
\t\t\t</dl>
\t\t</footer>
\t</div>

\t</body>
</html>
<script>
\t\$(function(){
\t\t\$.get('{{host}}signIn/xiangqing',function(msg){
\t\t\t\$(\"#day\").html(msg.day)
\t\t},'json')
\t\t\$(\"#sign_in\").click(function(){
\t\t\t\$.get('{{host}}signIn/add',function(msg){
\t\t\t\tif(msg==0)
\t\t\t\t{
\t\t\t\t\talert('今天已签到')
\t\t\t\t}else{
\t\t\t\t\t\$(\"#day\").html(msg.day)
\t\t\t\t}
\t\t\t},'json')
\t\t})
\t})
</script>";
    }
}

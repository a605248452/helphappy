<?php

/* comment.php */
class __TwigTemplate_3b6c11698f555584548285f10ecb23ea9bb9e369384cc13ef9e137aac348cc71 extends Twig_Template
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
\t<div data-role=\"page\" class=\"touzi yijian\" id=\"yijian\">  
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" 
\t\t\tdata-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>评论</h3>
\t\t</header>
\t\t<link media=\"screen\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/statics/grade.css\" type=\"text/css\" rel=\"stylesheet\" /> 
\t\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/statics/jquery-latest.pack.js\" type=\"text/javascript\"></script> 
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/statics/grade.js\" type=\"text/javascript\"></script> 

<div class=\"ui-content\" data-role=\"content\"> 
<div id=\"box\"> 
\t<h2 align=\"center\">我的评分</h2> 
\t
\t\t<div id=\"myPoint\">
\t\t\t<span><big>5</big><small>.0</small></span> 
\t\t\t<div>
\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/statics/star5.gif\"/>
\t\t\t\t<em>(一般)</em>
\t\t\t</div>
\t\t</div> 
\t\t<div id=\"doPoint\"> 
\t\t\t<p>星星评分=(服务+速度+信用)/3</p> 
\t\t\t<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\"> 
\t\t\t\t\t<tbody> 
\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t<th>服务：</th> 
\t\t\t\t\t\t\t<td><span class=\"star5\" id=\"item1\" v=\"5\"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
\t\t\t\t\t\t\t<td><strong>5</strong> <em>(一般)</em></td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t<th>速度：</th> 
\t\t\t\t\t\t\t<td><span class=\"star5\" id=\"item2\" v=\"5\"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
\t\t\t\t\t\t\t<td><strong>5</strong> <em>(一般)</em></td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t<th>信用：</th> 
\t\t\t\t\t\t\t<td><span class=\"star5\" id=\"item3\" v=\"5\"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
\t\t\t\t\t\t\t<td><strong>5</strong> <em>(一般)</em></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t</table>
\t
\t\t<form id=\"form1\"  action=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "comment/comment\" method=\"post\" target=\"_top\">
\t\t\t<input id=\"pointV1\" type=\"hidden\" value=\"5\" name=\"pointV1\" /> 
\t\t\t<input id=\"pointV2\" type=\"hidden\" value=\"5\" name=\"pointV2\" /> 
\t\t\t<input id=\"pointV3\" type=\"hidden\" value=\"5\" name=\"pointV3\" /> 
\t\t\t<label>评论内容：
\t\t\t<textarea id=\"woqu\" rows=\"30\" cols=\"5\" name=\"comment\">
\t\t
\t\t\t</textarea></label>
\t\t\t<button type=\"submit\" id=\"woqu\">提交</button> 
\t\t</form>
\t</div>
<!-- </div>   -->
</div>

\t\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery.min.js\"></script>
   \t\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t})
   \t\t</script>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "comment.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 73,  125 => 72,  108 => 58,  79 => 32,  67 => 23,  63 => 22,  59 => 21,  49 => 14,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
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
\t<div data-role=\"page\" class=\"touzi yijian\" id=\"yijian\">  
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" 
\t\t\tdata-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>评论</h3>
\t\t</header>
\t\t<link media=\"screen\" href=\"{{host}}public/statics/grade.css\" type=\"text/css\" rel=\"stylesheet\" /> 
\t\t<script src=\"{{host}}public/statics/jquery-latest.pack.js\" type=\"text/javascript\"></script> 
\t\t<script src=\"{{host}}public/statics/grade.js\" type=\"text/javascript\"></script> 

<div class=\"ui-content\" data-role=\"content\"> 
<div id=\"box\"> 
\t<h2 align=\"center\">我的评分</h2> 
\t
\t\t<div id=\"myPoint\">
\t\t\t<span><big>5</big><small>.0</small></span> 
\t\t\t<div>
\t\t\t\t<img src=\"{{host}}public/statics/star5.gif\"/>
\t\t\t\t<em>(一般)</em>
\t\t\t</div>
\t\t</div> 
\t\t<div id=\"doPoint\"> 
\t\t\t<p>星星评分=(服务+速度+信用)/3</p> 
\t\t\t<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\"> 
\t\t\t\t\t<tbody> 
\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t<th>服务：</th> 
\t\t\t\t\t\t\t<td><span class=\"star5\" id=\"item1\" v=\"5\"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
\t\t\t\t\t\t\t<td><strong>5</strong> <em>(一般)</em></td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t<th>速度：</th> 
\t\t\t\t\t\t\t<td><span class=\"star5\" id=\"item2\" v=\"5\"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
\t\t\t\t\t\t\t<td><strong>5</strong> <em>(一般)</em></td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t<th>信用：</th> 
\t\t\t\t\t\t\t<td><span class=\"star5\" id=\"item3\" v=\"5\"><small>1</small><small>2</small><small>3</small><small>4</small><small>5</small><small>6</small><small>7</small><small>8</small><small>9</small><small>10</small></span></td> 
\t\t\t\t\t\t\t<td><strong>5</strong> <em>(一般)</em></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t</table>
\t
\t\t<form id=\"form1\"  action=\"{{host}}comment/comment\" method=\"post\" target=\"_top\">
\t\t\t<input id=\"pointV1\" type=\"hidden\" value=\"5\" name=\"pointV1\" /> 
\t\t\t<input id=\"pointV2\" type=\"hidden\" value=\"5\" name=\"pointV2\" /> 
\t\t\t<input id=\"pointV3\" type=\"hidden\" value=\"5\" name=\"pointV3\" /> 
\t\t\t<label>评论内容：
\t\t\t<textarea id=\"woqu\" rows=\"30\" cols=\"5\" name=\"comment\">
\t\t
\t\t\t</textarea></label>
\t\t\t<button type=\"submit\" id=\"woqu\">提交</button> 
\t\t</form>
\t</div>
<!-- </div>   -->
</div>

\t\t<script src=\"{{host}}public/js/jquery.min.js\"></script>
   \t\t<script src=\"{{host}}public/js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t})
   \t\t</script>
</div>
</body>
</html>";
    }
}

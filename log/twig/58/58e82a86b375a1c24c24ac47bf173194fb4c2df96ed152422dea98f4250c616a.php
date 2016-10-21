<?php

/* lists/receive.php */
class __TwigTemplate_986013fd661a90f0cfcdc798bc21e7a8aa6af0089924665e0fb2fa5688469e83 extends Twig_Template
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
     <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT\"></script>
</head>
<body style=\"background-color: #f2f2f2;\">
\t<div class=\"loading\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"index\" id=\"index\">
\t\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
\t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "index/index\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>接单</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\"> 
\t\t<!-- 自定义样式 -->
\t\t <!-- data-role='none' style=\"width:20px\" -->
\t\t \t<div>
\t\t \t\t<div style=\"width:30%;float:left\">
\t\t\t\t \t<select name=\"\" id=\"distance\" >
\t\t\t\t\t\t<option value=\"1000\">1000m</option>
\t\t\t\t\t\t<option value=\"2000\" selected>2000m</option>
\t\t\t\t\t\t<option value=\"3000\">3000m</option>
\t\t\t\t\t\t<option value=\"5000\">5000m</option>
\t\t\t\t\t\t<option value=\"10000\">10000m</option>
\t\t\t\t\t\t<option value=\"15000\">15000m</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t \t\t<div style=\"width:65%;float:left;margin-top:11px;padding-left:5%\">
\t\t \t\t\t当前位置：<br/><span  id=\"address\"></span>
\t\t \t\t</div>
\t\t \t</div>
\t\t\t<div id=\"content\">
\t\t\t\t<!-- <dl class=\"index-year\" >
\t\t\t\t\t<a href=\"month.html\" data-transition=\"slide\" data-ajax=\"false\">
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<div style=\"float:left;width:60%;\">
\t\t\t\t\t\t\t<h4 rowspan='2'>帮我带个饭！！</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"float:left; width:40%\">
\t\t\t\t\t\t\t<p style=\"float:none\"><small>距离您：</small>1500m</p>
\t\t\t\t\t\t\t<p style=\"float:none\"><small>用户星级：</small><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/star1.gif\" width='80' alt=\"\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dt><font color=\"#009dd9\">李智渊</font>于2016-05-20 18:20:25发布</dt>
\t\t\t\t\t</a>
\t\t\t\t</dl> -->
\t\t\t</div>
\t\t\t<div id=\"allmap\" style=\"display:none\"></div>
\t\t</div>
\t\t<footer data-role=\"footer\" data-position=\"fixed\">  
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/receive\"  rel=\"external\">接单</a></li>
\t\t\t\t<li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/send\"  rel=\"external\">发单</a></li>
\t\t\t\t<li><a href=\"self.html\"  rel=\"external\">我的</a></li>
\t\t\t</ul>
\t\t</footer>
\t\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/slick.min.js\" ></script>
\t\t<script>
\t\t\t\$(function(){
\t\t\t\t// var distance = \$(\"#distance\").value()
\t\t\t\t// \$.get('/lists/receive_list',{'distance':distance},function(msg){

\t\t\t\t// })
\t\t\t})
\t\t</script>
\t\t<script>  
\t\t\t\$(function(){  
\t\t\t\tvar lat;
\t\t\t\tvar lng;
\t\t\t\tvar map = new BMap.Map(\"allmap\");
\t\t\t\tvar point = new BMap.Point(116.331398,39.897445);
\t\t\t\tmap.centerAndZoom(point,12);
\t\t\t\tvar geolocation = new BMap.Geolocation();
\t\t\t\tgeolocation.getCurrentPosition(function(r){
\t\t\t\t\tif(this.getStatus() == BMAP_STATUS_SUCCESS){
\t\t\t\t\t\tvar mk = new BMap.Marker(r.point);
\t\t\t\t\t\tmap.addOverlay(mk);
\t\t\t\t\t\tmap.panTo(r.point);
\t\t\t\t\t\tlat=r.point.lat;
\t\t\t\t\t\tlng=r.point.lng;
\t\t\t\t\t\t\$.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+r.point.lat+','+r.point.lng+'&output=json&pois=1',function(msg){
\t\t\t\t\t\t\t\$(\"#address\").append(msg.result.formatted_address)

\t\t\t\t\t\t\t//位置获取完成获取信息
\t\t\t\t\t\t\tvar distance = \$(\"#distance\").val()
\t\t\t\t\t\t\t\$.get(\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/receive_list/distance/\"+distance+\"/lng/\"+lng+\"/lat/\"+lat,function(msg){
\t\t\t\t\t\t\t\tvar v='';
\t\t\t\t\t\t\t\tfor(var i=0;i<msg.length;i++)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tv=v+'<dl class=\"index-year\" ><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/receive_one/id/'+msg[i].s_id+'/money/'+msg[i].s_violate_money+'\" data-transition=\"slide\" data-ajax=\"false\"><dd><div style=\"float:left;width:60%;\"> <h4 rowspan=\"2\">'+msg[i].s_title+'</h4></div><div style=\"float:left; width:40%\"><p style=\"float:none\"><small>距离您：</small>'+msg[i].distance+'m</p><p style=\"float:none\"><small>用户星级：</small><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/star'+msg[i].star_num+'.gif\" width=\"80\" alt=\"\"></p></div></dd><dt><font color=\"#009dd9\">'+msg[i].u_name+'</font>于'+msg[i].s_time+'发布</dt></a></dl>'
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$(\"#content\").html(v)
\t\t\t\t\t\t\t},'json')
\t\t\t\t\t\t},'jsonp')
\t\t\t\t\t\t// alert('您的位置：'+r.point.lng+','+r.point.lat);
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\talert('failed'+this.getStatus());
\t\t\t\t\t}        
\t\t\t\t},{enableHighAccuracy: true})

\t\t\t\t//判断距离
\t\t\t\t\$(\"#distance\").change(function(){
\t\t\t\t\tvar distance = \$(this).val()
\t\t\t\t\t\$.get(\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/receive_list/distance/\"+distance+\"/lng/\"+lng+\"/lat/\"+lat,function(msg){
\t\t\t\t\t\tvar v='';
\t\t\t\t\t\tfor(var i=0;i<msg.length;i++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tv=v+'<dl class=\"index-year\" ><a href=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/receive_one/id/'+msg[i].s_id+'/money/'+msg[i].s_violate_money+'\" data-transition=\"slide\" data-ajax=\"false\"><dd><div style=\"float:left;width:60%;\"> <h4 rowspan=\"2\">'+msg[i].s_title+'</h4></div><div style=\"float:left; width:40%\"><p style=\"float:none\"><small>距离您：</small>'+msg[i].distance+'m</p><p style=\"float:none\"><small>用户星级：</small><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/star'+msg[i].star_num+'.gif\" width=\"80\" alt=\"\"></p></div></dd><dt><font color=\"#009dd9\">'+msg[i].u_name+'</font>于'+msg[i].s_time+'发布</dt></a></dl>'
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(\"#content\").html(v)
\t\t\t\t\t},'json')
\t\t\t\t})
\t\t\t})
\t\t\t
\t\t</script>
\t    <script type=\"text/javascript\">
\t    \t\$(document).on(\"pagecreate\",\"#index\",function(){
 \t\t\t\t\t\$('.slick').slick({
\t\t\t\t\t\t    \tdots:true,
\t\t\t\t\t\t    \tautoplay:true,
\t\t\t\t\t\t    \tautoplaySpeed:2000,
\t\t\t\t\t\t    \tarrows:false,
\t\t\t\t\t\t    }); 
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
        return "lists/receive.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 120,  177 => 116,  157 => 101,  150 => 97,  118 => 68,  111 => 64,  107 => 63,  93 => 52,  60 => 22,  50 => 15,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>帮帮乐</title>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{host}}public/css/slick.css\"/>
    <link rel=\"stylesheet\" href=\"{{host}}public/css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"{{host}}public/css/style.css\"/>
    <script src=\"{{host}}public/js/jquery.min.js\"></script>
     <script src=\"{{host}}public/js/jquery.mobile-1.4.5.min.js\"></script>
     <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT\"></script>
</head>
<body style=\"background-color: #f2f2f2;\">
\t<div class=\"loading\"><img src=\"{{host}}public/images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"index\" id=\"index\">
\t\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
\t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"{{host}}index/index\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>接单</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\"> 
\t\t<!-- 自定义样式 -->
\t\t <!-- data-role='none' style=\"width:20px\" -->
\t\t \t<div>
\t\t \t\t<div style=\"width:30%;float:left\">
\t\t\t\t \t<select name=\"\" id=\"distance\" >
\t\t\t\t\t\t<option value=\"1000\">1000m</option>
\t\t\t\t\t\t<option value=\"2000\" selected>2000m</option>
\t\t\t\t\t\t<option value=\"3000\">3000m</option>
\t\t\t\t\t\t<option value=\"5000\">5000m</option>
\t\t\t\t\t\t<option value=\"10000\">10000m</option>
\t\t\t\t\t\t<option value=\"15000\">15000m</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t \t\t<div style=\"width:65%;float:left;margin-top:11px;padding-left:5%\">
\t\t \t\t\t当前位置：<br/><span  id=\"address\"></span>
\t\t \t\t</div>
\t\t \t</div>
\t\t\t<div id=\"content\">
\t\t\t\t<!-- <dl class=\"index-year\" >
\t\t\t\t\t<a href=\"month.html\" data-transition=\"slide\" data-ajax=\"false\">
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<div style=\"float:left;width:60%;\">
\t\t\t\t\t\t\t<h4 rowspan='2'>帮我带个饭！！</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"float:left; width:40%\">
\t\t\t\t\t\t\t<p style=\"float:none\"><small>距离您：</small>1500m</p>
\t\t\t\t\t\t\t<p style=\"float:none\"><small>用户星级：</small><img src=\"{{host}}public/images/star1.gif\" width='80' alt=\"\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t<dt><font color=\"#009dd9\">李智渊</font>于2016-05-20 18:20:25发布</dt>
\t\t\t\t\t</a>
\t\t\t\t</dl> -->
\t\t\t</div>
\t\t\t<div id=\"allmap\" style=\"display:none\"></div>
\t\t</div>
\t\t<footer data-role=\"footer\" data-position=\"fixed\">  
\t\t\t<ul>
\t\t\t\t<li><a href=\"{{host}}lists/receive\"  rel=\"external\">接单</a></li>
\t\t\t\t<li><a href=\"{{host}}lists/send\"  rel=\"external\">发单</a></li>
\t\t\t\t<li><a href=\"self.html\"  rel=\"external\">我的</a></li>
\t\t\t</ul>
\t\t</footer>
\t\t<script src=\"{{host}}public/js/slick.min.js\" ></script>
\t\t<script>
\t\t\t\$(function(){
\t\t\t\t// var distance = \$(\"#distance\").value()
\t\t\t\t// \$.get('/lists/receive_list',{'distance':distance},function(msg){

\t\t\t\t// })
\t\t\t})
\t\t</script>
\t\t<script>  
\t\t\t\$(function(){  
\t\t\t\tvar lat;
\t\t\t\tvar lng;
\t\t\t\tvar map = new BMap.Map(\"allmap\");
\t\t\t\tvar point = new BMap.Point(116.331398,39.897445);
\t\t\t\tmap.centerAndZoom(point,12);
\t\t\t\tvar geolocation = new BMap.Geolocation();
\t\t\t\tgeolocation.getCurrentPosition(function(r){
\t\t\t\t\tif(this.getStatus() == BMAP_STATUS_SUCCESS){
\t\t\t\t\t\tvar mk = new BMap.Marker(r.point);
\t\t\t\t\t\tmap.addOverlay(mk);
\t\t\t\t\t\tmap.panTo(r.point);
\t\t\t\t\t\tlat=r.point.lat;
\t\t\t\t\t\tlng=r.point.lng;
\t\t\t\t\t\t\$.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+r.point.lat+','+r.point.lng+'&output=json&pois=1',function(msg){
\t\t\t\t\t\t\t\$(\"#address\").append(msg.result.formatted_address)

\t\t\t\t\t\t\t//位置获取完成获取信息
\t\t\t\t\t\t\tvar distance = \$(\"#distance\").val()
\t\t\t\t\t\t\t\$.get(\"{{host}}lists/receive_list/distance/\"+distance+\"/lng/\"+lng+\"/lat/\"+lat,function(msg){
\t\t\t\t\t\t\t\tvar v='';
\t\t\t\t\t\t\t\tfor(var i=0;i<msg.length;i++)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tv=v+'<dl class=\"index-year\" ><a href=\"{{host}}lists/receive_one/id/'+msg[i].s_id+'/money/'+msg[i].s_violate_money+'\" data-transition=\"slide\" data-ajax=\"false\"><dd><div style=\"float:left;width:60%;\"> <h4 rowspan=\"2\">'+msg[i].s_title+'</h4></div><div style=\"float:left; width:40%\"><p style=\"float:none\"><small>距离您：</small>'+msg[i].distance+'m</p><p style=\"float:none\"><small>用户星级：</small><img src=\"{{host}}public/images/star'+msg[i].star_num+'.gif\" width=\"80\" alt=\"\"></p></div></dd><dt><font color=\"#009dd9\">'+msg[i].u_name+'</font>于'+msg[i].s_time+'发布</dt></a></dl>'
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$(\"#content\").html(v)
\t\t\t\t\t\t\t},'json')
\t\t\t\t\t\t},'jsonp')
\t\t\t\t\t\t// alert('您的位置：'+r.point.lng+','+r.point.lat);
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\talert('failed'+this.getStatus());
\t\t\t\t\t}        
\t\t\t\t},{enableHighAccuracy: true})

\t\t\t\t//判断距离
\t\t\t\t\$(\"#distance\").change(function(){
\t\t\t\t\tvar distance = \$(this).val()
\t\t\t\t\t\$.get(\"{{host}}lists/receive_list/distance/\"+distance+\"/lng/\"+lng+\"/lat/\"+lat,function(msg){
\t\t\t\t\t\tvar v='';
\t\t\t\t\t\tfor(var i=0;i<msg.length;i++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tv=v+'<dl class=\"index-year\" ><a href=\"{{host}}lists/receive_one/id/'+msg[i].s_id+'/money/'+msg[i].s_violate_money+'\" data-transition=\"slide\" data-ajax=\"false\"><dd><div style=\"float:left;width:60%;\"> <h4 rowspan=\"2\">'+msg[i].s_title+'</h4></div><div style=\"float:left; width:40%\"><p style=\"float:none\"><small>距离您：</small>'+msg[i].distance+'m</p><p style=\"float:none\"><small>用户星级：</small><img src=\"{{host}}public/images/star'+msg[i].star_num+'.gif\" width=\"80\" alt=\"\"></p></div></dd><dt><font color=\"#009dd9\">'+msg[i].u_name+'</font>于'+msg[i].s_time+'发布</dt></a></dl>'
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(\"#content\").html(v)
\t\t\t\t\t},'json')
\t\t\t\t})
\t\t\t})
\t\t\t
\t\t</script>
\t    <script type=\"text/javascript\">
\t    \t\$(document).on(\"pagecreate\",\"#index\",function(){
 \t\t\t\t\t\$('.slick').slick({
\t\t\t\t\t\t    \tdots:true,
\t\t\t\t\t\t    \tautoplay:true,
\t\t\t\t\t\t    \tautoplaySpeed:2000,
\t\t\t\t\t\t    \tarrows:false,
\t\t\t\t\t\t    }); 
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

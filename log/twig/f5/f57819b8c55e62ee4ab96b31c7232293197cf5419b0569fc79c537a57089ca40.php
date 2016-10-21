<?php

/* order/send_one.php */
class __TwigTemplate_5832c9854c64773f305827e5cf7ac11c581d7fd452a4920dbf6aed500999c697 extends Twig_Template
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
        echo "public//css/slick.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public//css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public//css/style.css\"/>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public//js/jquery.min.js\"></script>
     <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public//js/jquery.mobile-1.4.5.min.js\"></script>
     <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT\"></script>
</head>
<body style=\"background-color: #f2f2f2;\">
\t<div class=\"loading\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public//images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"index\" id=\"index\">

\t\t<header data-role=\"header\">
\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/receive\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a>
\t\t\t<h3>赚不停</h3>
\t\t</header>
\t\t\t <div data-role=\"main\" class=\"ui-content\">
\t\t\t      <div class=\"ui-field-contain\" ids=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["s_id"]) ? $context["s_id"] : null), "html", null, true);
        echo "\" id=\"id\">
\t\t\t    \t<table id=\"table\">
\t\t\t    \t</table>
\t\t\t      </div>
\t\t\t      <div data-role=\"content\" id=\"dis\" style=\"display:none\">
\t\t\t\t  \t<input type=\"button\" value=\"我已到达\" id=\"btn\">
\t\t\t\t  </div>
\t\t\t\t  <div data-role=\"content\" id=\"end_address\" style=\"display:none\">
\t\t\t\t  \t<input type=\"button\" value=\"您已到达交易地点\">
\t\t\t\t  </div>
\t\t\t  </div>
\t\t\t  <!-- 百度地图 -->
\t\t\t  <div id=\"allmap\" style=\"display:none\"></div>
\t\t<footer data-role=\"footer\" data-position=\"fixed\">  
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/receive\"  rel=\"external\">接单</a></li>
\t\t\t\t<li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/send\"  rel=\"external\">发单</a></li>
\t\t\t\t<li><a href=\"self.html\"  rel=\"external\">我的</a></li>
\t\t\t</ul>
\t\t</footer>
\t\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public//js/slick.min.js\" ></script>
\t\t<script>
\t\t\t\$(function(){
\t\t\t\tvar id = \$(\"#id\").attr('ids')
\t\t\t\t\$.get(\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "order/send_one_s/id/\"+id,function(msg){
\t\t\t\t\tvar table = '<tr><td>发单人</td><td>：'+msg.nickname+'</td></tr><tr><td>标题</td><td>'+msg.s_title+'</td></tr><tr><td>详细信息</td><td>'+msg.s_content+'</td></tr><tr><td>本单可得金额</td><td>'+msg.s_list_money+'￥</td></tr><tr><td>违约金额</td><td>'+msg.s_violate_money+'￥</td></tr><tr><td>发单人联系方式</td><td>'+msg.s_call+'</td></tr><tr><td>任务地址</td><td>'+msg.s_s_address+'</td></tr><tr><td>约定交易地点</td><td>'+msg.s_s_end_address+'</td></tr><tr><td>订单开始时间</td><td>'+msg.s_time+'</td></tr><tr><td>订单结束时间</td><td>'+msg.s_end_time+'</td></tr><tr><td>订单完成密码</td><td>'+msg.s_pwd+'</td></tr>';
\t\t\t\t\t\$(\"#table\").append(table)
\t\t\t\t\tif(msg.s_violate_u!='1')
\t\t\t\t\t{
\t\t\t\t\t\t\$(\"#dis\").show()
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#end_address\").show()
\t\t\t\t\t}
\t\t\t\t},'json')

\t\t\t\t//接单
\t\t\t\t\$(\"#btn\").click(function(){
\t\t\t\t\tvar id = \$(\"#id\").attr('ids')
\t\t\t\t\t//获取当前位置
\t\t\t\t\tvar lat;
\t\t\t\t\tvar lng;
\t\t\t\t\tvar map = new BMap.Map(\"allmap\");
\t\t\t\t\tvar point = new BMap.Point(116.331398,39.897445);
\t\t\t\t\tmap.centerAndZoom(point,12);
\t\t\t\t\tvar geolocation = new BMap.Geolocation();
\t\t\t\t\tgeolocation.getCurrentPosition(function(r){
\t\t\t\t\t\tif(this.getStatus() == BMAP_STATUS_SUCCESS){
\t\t\t\t\t\t\tvar mk = new BMap.Marker(r.point);
\t\t\t\t\t\t\tmap.addOverlay(mk);
\t\t\t\t\t\t\tmap.panTo(r.point);
\t\t\t\t\t\t\tlat=r.point.lat;
\t\t\t\t\t\t\tlng=r.point.lng;

\t\t\t\t\t\t\t//判断距离
\t\t\t\t\t\t\t\$.get(\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "order/send_address/lat/\"+lat+\"/lng/\"+lng+\"/id/\"+id,function(msg){
\t\t\t\t\t\t\t\tif(msg=='0')
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\$(\"#dis\").hide()
\t\t\t\t\t\t\t\t\t\$(\"#end_address\").show()
\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\talert('未到达指定地点')
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\talert('failed'+this.getStatus());
\t\t\t\t\t\t}        
\t\t\t\t\t},{enableHighAccuracy: true})
\t\t\t\t})
\t\t\t})
\t\t</script>
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
\t\t</div>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "order/send_one.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 77,  100 => 47,  93 => 43,  86 => 39,  82 => 38,  64 => 23,  57 => 19,  50 => 15,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>赚不停</title>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"{{host}}public//css/slick.css\"/>
    <link rel=\"stylesheet\" href=\"{{host}}public//css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"{{host}}public//css/style.css\"/>
    <script src=\"{{host}}public//js/jquery.min.js\"></script>
     <script src=\"{{host}}public//js/jquery.mobile-1.4.5.min.js\"></script>
     <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT\"></script>
</head>
<body style=\"background-color: #f2f2f2;\">
\t<div class=\"loading\"><img src=\"{{host}}public//images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"index\" id=\"index\">

\t\t<header data-role=\"header\">
\t\t<a href=\"{{host}}lists/receive\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a>
\t\t\t<h3>赚不停</h3>
\t\t</header>
\t\t\t <div data-role=\"main\" class=\"ui-content\">
\t\t\t      <div class=\"ui-field-contain\" ids=\"{{ s_id }}\" id=\"id\">
\t\t\t    \t<table id=\"table\">
\t\t\t    \t</table>
\t\t\t      </div>
\t\t\t      <div data-role=\"content\" id=\"dis\" style=\"display:none\">
\t\t\t\t  \t<input type=\"button\" value=\"我已到达\" id=\"btn\">
\t\t\t\t  </div>
\t\t\t\t  <div data-role=\"content\" id=\"end_address\" style=\"display:none\">
\t\t\t\t  \t<input type=\"button\" value=\"您已到达交易地点\">
\t\t\t\t  </div>
\t\t\t  </div>
\t\t\t  <!-- 百度地图 -->
\t\t\t  <div id=\"allmap\" style=\"display:none\"></div>
\t\t<footer data-role=\"footer\" data-position=\"fixed\">  
\t\t\t<ul>
\t\t\t\t<li><a href=\"{{host}}lists/receive\"  rel=\"external\">接单</a></li>
\t\t\t\t<li><a href=\"{{host}}lists/send\"  rel=\"external\">发单</a></li>
\t\t\t\t<li><a href=\"self.html\"  rel=\"external\">我的</a></li>
\t\t\t</ul>
\t\t</footer>
\t\t<script src=\"{{host}}public//js/slick.min.js\" ></script>
\t\t<script>
\t\t\t\$(function(){
\t\t\t\tvar id = \$(\"#id\").attr('ids')
\t\t\t\t\$.get(\"{{host}}order/send_one_s/id/\"+id,function(msg){
\t\t\t\t\tvar table = '<tr><td>发单人</td><td>：'+msg.nickname+'</td></tr><tr><td>标题</td><td>'+msg.s_title+'</td></tr><tr><td>详细信息</td><td>'+msg.s_content+'</td></tr><tr><td>本单可得金额</td><td>'+msg.s_list_money+'￥</td></tr><tr><td>违约金额</td><td>'+msg.s_violate_money+'￥</td></tr><tr><td>发单人联系方式</td><td>'+msg.s_call+'</td></tr><tr><td>任务地址</td><td>'+msg.s_s_address+'</td></tr><tr><td>约定交易地点</td><td>'+msg.s_s_end_address+'</td></tr><tr><td>订单开始时间</td><td>'+msg.s_time+'</td></tr><tr><td>订单结束时间</td><td>'+msg.s_end_time+'</td></tr><tr><td>订单完成密码</td><td>'+msg.s_pwd+'</td></tr>';
\t\t\t\t\t\$(\"#table\").append(table)
\t\t\t\t\tif(msg.s_violate_u!='1')
\t\t\t\t\t{
\t\t\t\t\t\t\$(\"#dis\").show()
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(\"#end_address\").show()
\t\t\t\t\t}
\t\t\t\t},'json')

\t\t\t\t//接单
\t\t\t\t\$(\"#btn\").click(function(){
\t\t\t\t\tvar id = \$(\"#id\").attr('ids')
\t\t\t\t\t//获取当前位置
\t\t\t\t\tvar lat;
\t\t\t\t\tvar lng;
\t\t\t\t\tvar map = new BMap.Map(\"allmap\");
\t\t\t\t\tvar point = new BMap.Point(116.331398,39.897445);
\t\t\t\t\tmap.centerAndZoom(point,12);
\t\t\t\t\tvar geolocation = new BMap.Geolocation();
\t\t\t\t\tgeolocation.getCurrentPosition(function(r){
\t\t\t\t\t\tif(this.getStatus() == BMAP_STATUS_SUCCESS){
\t\t\t\t\t\t\tvar mk = new BMap.Marker(r.point);
\t\t\t\t\t\t\tmap.addOverlay(mk);
\t\t\t\t\t\t\tmap.panTo(r.point);
\t\t\t\t\t\t\tlat=r.point.lat;
\t\t\t\t\t\t\tlng=r.point.lng;

\t\t\t\t\t\t\t//判断距离
\t\t\t\t\t\t\t\$.get(\"{{host}}order/send_address/lat/\"+lat+\"/lng/\"+lng+\"/id/\"+id,function(msg){
\t\t\t\t\t\t\t\tif(msg=='0')
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\$(\"#dis\").hide()
\t\t\t\t\t\t\t\t\t\$(\"#end_address\").show()
\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\talert('未到达指定地点')
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\talert('failed'+this.getStatus());
\t\t\t\t\t\t}        
\t\t\t\t\t},{enableHighAccuracy: true})
\t\t\t\t})
\t\t\t})
\t\t</script>
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
\t\t</div>
\t</div>
</body>
</html>";
    }
}

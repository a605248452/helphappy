<?php

/* send.php */
class __TwigTemplate_a0156f7c34b368ee79a1b962316c6023a4969824bfabddecc225e68ea4d25b9e extends Twig_Template
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
</head>

<!-- 地图样式 -->
<style type=\"text/css\">
\tbody, html {width: 100%;height: 100%;margin:0;font-family:\"微软雅黑\";}
\t#allmap{width:100%;height:100%;}
\tp{margin-left:5px; font-size:14px;}
</style>

<!-- 地图ak -->
<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT\"></script>

<!-- 遮罩层样式 -->
<style type=\"text/css\">     
    .mask {       
            position: absolute; top: 0px; filter: alpha(opacity=60); background-color: #777;     
            z-index: 1002; left: 0px;     
            -moz-opacity:0.5;     
        } 
</style>
<body>
\t<div class=\"loading\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/ajax-loader.gif\"/></div>
\t<!-- 遮罩层 -->
\t<div id=\"mask\" class=\"mask\" style=\"display:none;\">
\t\t<div id=\"allmap\"></div>
\t</div>
\t<div data-role=\"page\" class=\"touzi\" id=\"touzi\">
\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/css/style.css\"/>
   \t\t 
   \t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\" data-tap-toggle=\"false\">
\t\t\t<a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>发单</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t <div data-role=\"main\" class=\"ui-content\">
\t\t\t    <form method=\"post\" action=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "lists/add_lists\" data-ajax=\"false\" onsubmit=\"return check_submit()\">
\t\t\t      <div class=\"ui-field-contain\">
\t\t\t        <label for=\"fullname\">标题：</label>
\t\t\t        <input type=\"text\" name=\"title\" id=\"title\" onblur=\"check_title(this)\">
\t\t\t        <label for=\"fullname\">详情：</label>
\t\t\t        <textarea name=\"content\" id=\"content\" onblur=\"check_content(this)\" cols=\"30\" rows=\"10\"></textarea>
\t\t\t        <label for=\"fullname\">个人联系方式</label>
\t\t\t        <input type=\"text\" name=\"call\" id=\"call\"onmousedown=\"check_call(this)\" onkeyup=\"check_call(this)\">
\t\t\t\t\t<label for=\"fullname\">本单金额：</label>
\t\t\t        <input type=\"text\" name=\"list_money\" id=\"list_money\" onblur=\"check_list_money()\">
\t\t\t        <label for=\"fullname\">标违约金额：</label>
\t\t\t        <input type=\"text\" name=\"violate_money\" id=\"violate_money\" onblur=\"check_violate_money()\">
\t\t\t        <input type=\"button\" name=\"fullname\" class=\"showMask\" status=\"0\" value=\"任务地址\">
\t\t\t        <input type=\"text\" name=\"address\" id=\"address\" readOnly=\"true\" onblur=\"check_address()\">
\t\t\t        <input type=\"button\" name=\"fullname\" class=\"showMask\" status=\"1\" value=\"约定交易地址\">
\t\t\t        <input type=\"text\" name=\"end_address\" id=\"end_address\" readOnly=\"true\" onblur=\"check_end_address()\">
\t\t\t        <label for=\"bday\">结束时间：</label>
\t\t\t        <input type=\"datetime\" name=\"end_time\" id=\"end_time\" onblur=\"check_end_time()\" class=\"sang_Calender\">
\t\t\t        <input type=\"hidden\" name=\"mission\" id=\"mission\">
\t\t\t        <input type=\"hidden\" name=\"finish\" id=\"finish\">
\t\t\t      </div>
\t\t\t      <input type=\"submit\" data-inline=\"true\" id=\"btn\" value=\"提交\">
\t\t\t    </form>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery.min.js\"></script>
   \t\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/datetime.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t\t//var id = 1;
\t\t\t\t\t//location.href=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/touzi.html?id=1\";
\t\t\t\t})
   \t\t</script>
\t\t<script>
\t\t\t\$(\"#end_address\").click(function(){

\t\t\t})
\t\t</script>
\t\t<pre class=\"html\" name=\"code\"><script type=\"text/javascript\">     
\t\t\t//定义status，如果0则任务地址，如果1交易完成地址
\t\t\tvar status;
\t\t    //兼容火狐、IE8   
\t\t    //显示遮罩层 
\t\t    \$(\".showMask\").click(function(){
\t\t    \tstatus = (\$(this).attr('status'));
\t\t        \$(\"#mask\").css(\"height\",\$(document).height());     
\t\t        \$(\"#mask\").css(\"width\",\$(document).width());   
\t\t        \$(\"#mask\").show();
\t\t    })
\t\t    //隐藏遮罩层  
\t\t    function hideMask(){     
\t\t          
\t\t        \$(\"#mask\").hide();     
\t\t    }  
\t\t</script>  
\t\t<script>
\t\t\t//获取经纬度
\t\t\t\t\$(function(){  
\t\t\t\t  if (navigator.geolocation)  
\t\t\t\t\t{  
\t\t\t\t\tnavigator.geolocation.getCurrentPosition(showPosition);  
\t\t\t\t\t}  
\t\t\t\t  else{x.innerHTML=\"Geolocation is not supported by this browser.\";}  
\t\t\t\t  
\t\t\t\t})  
\t\t\t\t// 百度地图API功能
\t\t\t\tfunction showPosition(position)
\t\t\t\t{
\t\t\t\t\tvar map = new BMap.Map(\"allmap\");
\t\t\t\t\tmap.centerAndZoom(new BMap.Point(position.coords.longitude,position.coords.latitude),8);
\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\tmap.setZoom(14);   
\t\t\t\t\t}, 2000);  //2秒后放大到14级
\t\t\t\t\tmap.enableScrollWheelZoom(true);
\t\t\t\t\t
\t\t\t\t\tmap.addEventListener(\"click\", function(e){ 
\t\t\t\t\t\t//经纬度获取       
\t\t\t\t\t\t// alert(e.point.lng + \", \" + e.point.lat);
\t\t\t\t\t\t\$.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+e.point.lat+','+e.point.lng+'&output=json&pois=1',function(msg){
\t\t\t\t\t\t\tif(status==0)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\$(\"#mission\").val(e.point.lng + \", \" + e.point.lat)
\t\t\t\t\t\t\t\t\$(\"#address\").val(msg.result.formatted_address)
\t\t\t\t\t\t\t\t\$(\"#mask\").hide();
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\$(\"#finish\").val(e.point.lng + \", \" + e.point.lat)
\t\t\t\t\t\t\t\t\$(\"#end_address\").val(msg.result.formatted_address)
\t\t\t\t\t\t\t\t\$(\"#mask\").hide();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},'jsonp')
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tvar geolocation = new BMap.Geolocation();
\t\t\t\t\tgeolocation.getCurrentPosition(function(r){
\t\t\t\t\t\tif(this.getStatus() == BMAP_STATUS_SUCCESS){
\t\t\t\t\t\t\tvar mk = new BMap.Marker(r.point);
\t\t\t\t\t\t\tmap.addOverlay(mk);
\t\t\t\t\t\t\tmap.panTo(r.point);
\t\t\t\t\t\t\t//alert('您的位置：'+r.point.lng+','+r.point.lat);
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\talert('failed'+this.getStatus());
\t\t\t\t\t\t}        
\t\t\t\t\t},{enableHighAccuracy: true})
\t\t\t\t}
\t\t\t\$(\"#btn\").click(function(){

\t\t\t})
\t\t</script>
\t\t<script>
\t\t\t//验证标题
\t\t\tfunction check_title(title)
\t\t\t{
\t\t\t\tvar title = document.getElementById('title');
\t\t\t\tif(title.value=='')
\t\t\t\t{
\t\t\t\t\ttitle.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\ttitle.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//验证内容
\t\t\tfunction check_content(content)
\t\t\t{
\t\t\t\tvar content = document.getElementById('content');
\t\t\t\tif(content.value=='')
\t\t\t\t{
\t\t\t\t\tcontent.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tcontent.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//验证手机号
\t\t\tfunction check_call(call)
\t\t\t{
\t\t\t\tvar call = document.getElementById('call');
\t\t\t\tvar reg_call = /^1(3|5|7|8)\\d{9}\$/
\t\t\t\tif(!reg_call.test(call.value))
\t\t\t\t{
\t\t\t\t\tcall.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tcall.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//时间判断
\t\t\tfunction check_end_time(end_time)
\t\t\t{
\t\t\t\tvar end_time = document.getElementById('end_time');
\t\t\t\tif(end_time.value=='')
\t\t\t\t{
\t\t\t\t\tend_time.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tend_time.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//时间判断
\t\t\tfunction check_list_money(list_money)
\t\t\t{
\t\t\t\tvar list_money = document.getElementById('list_money');
\t\t\t\tvar reg_list_money = /^\\d{1,4}\$/
\t\t\t\tif(!reg_list_money.test(list_money.value))
\t\t\t\t{
\t\t\t\t\tlist_money.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tlist_money.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//时间判断
\t\t\tfunction check_violate_money(violate_money)
\t\t\t{
\t\t\t\tvar violate_money = document.getElementById('violate_money');
\t\t\t\tvar reg_violate_money = /^\\d{1,4}\$/
\t\t\t\tif(!reg_violate_money.test(violate_money.value))
\t\t\t\t{
\t\t\t\t\tviolate_money.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tviolate_money.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//任务地址判断
\t\t\tfunction check_address(address)
\t\t\t{
\t\t\t\tvar address = document.getElementById('address');
\t\t\t\tif(address.value=='')
\t\t\t\t{
\t\t\t\t\taddress.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\taddress.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//约定交易地址判断
\t\t\tfunction check_end_address(end_address)
\t\t\t{
\t\t\t\tvar end_address = document.getElementById('end_address');
\t\t\t\tif(end_address.value=='')
\t\t\t\t{
\t\t\t\t\tend_address.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tend_address.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\tfunction check_submit()
\t\t\t{
\t\t\t\tif(check_title()&check_content()&check_call()&check_address()&check_end_address()&check_end_time()&check_list_money()&check_violate_money())
\t\t\t\t{
\t\t\t\t\treturn true;
\t\t\t\t}else{
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t</script>
\t</div>
\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "send.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 78,  114 => 73,  110 => 72,  106 => 71,  77 => 45,  69 => 40,  62 => 36,  58 => 35,  48 => 28,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>赚不停</title>
</head>

<!-- 地图样式 -->
<style type=\"text/css\">
\tbody, html {width: 100%;height: 100%;margin:0;font-family:\"微软雅黑\";}
\t#allmap{width:100%;height:100%;}
\tp{margin-left:5px; font-size:14px;}
</style>

<!-- 地图ak -->
<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT\"></script>

<!-- 遮罩层样式 -->
<style type=\"text/css\">     
    .mask {       
            position: absolute; top: 0px; filter: alpha(opacity=60); background-color: #777;     
            z-index: 1002; left: 0px;     
            -moz-opacity:0.5;     
        } 
</style>
<body>
\t<div class=\"loading\"><img src=\"{{host}}public/images/ajax-loader.gif\"/></div>
\t<!-- 遮罩层 -->
\t<div id=\"mask\" class=\"mask\" style=\"display:none;\">
\t\t<div id=\"allmap\"></div>
\t</div>
\t<div data-role=\"page\" class=\"touzi\" id=\"touzi\">
\t\t<!--jqmb需要把所以东西放在page div内-->
\t\t <link rel=\"stylesheet\" href=\"{{host}}public/css/jquery.mobile-1.4.5.min.css\"/>
   \t\t <link rel=\"stylesheet\" href=\"{{host}}public/css/style.css\"/>
   \t\t 
   \t\t<!--jqmb需要把所以东西放在page div内--> 
\t\t<header data-role=\"header\" data-position=\"fixed\" data-tap-toggle=\"false\">
\t\t\t<a href=\"{{host}}public/#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>发单</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t <div data-role=\"main\" class=\"ui-content\">
\t\t\t    <form method=\"post\" action=\"{{host}}lists/add_lists\" data-ajax=\"false\" onsubmit=\"return check_submit()\">
\t\t\t      <div class=\"ui-field-contain\">
\t\t\t        <label for=\"fullname\">标题：</label>
\t\t\t        <input type=\"text\" name=\"title\" id=\"title\" onblur=\"check_title(this)\">
\t\t\t        <label for=\"fullname\">详情：</label>
\t\t\t        <textarea name=\"content\" id=\"content\" onblur=\"check_content(this)\" cols=\"30\" rows=\"10\"></textarea>
\t\t\t        <label for=\"fullname\">个人联系方式</label>
\t\t\t        <input type=\"text\" name=\"call\" id=\"call\"onmousedown=\"check_call(this)\" onkeyup=\"check_call(this)\">
\t\t\t\t\t<label for=\"fullname\">本单金额：</label>
\t\t\t        <input type=\"text\" name=\"list_money\" id=\"list_money\" onblur=\"check_list_money()\">
\t\t\t        <label for=\"fullname\">标违约金额：</label>
\t\t\t        <input type=\"text\" name=\"violate_money\" id=\"violate_money\" onblur=\"check_violate_money()\">
\t\t\t        <input type=\"button\" name=\"fullname\" class=\"showMask\" status=\"0\" value=\"任务地址\">
\t\t\t        <input type=\"text\" name=\"address\" id=\"address\" readOnly=\"true\" onblur=\"check_address()\">
\t\t\t        <input type=\"button\" name=\"fullname\" class=\"showMask\" status=\"1\" value=\"约定交易地址\">
\t\t\t        <input type=\"text\" name=\"end_address\" id=\"end_address\" readOnly=\"true\" onblur=\"check_end_address()\">
\t\t\t        <label for=\"bday\">结束时间：</label>
\t\t\t        <input type=\"datetime\" name=\"end_time\" id=\"end_time\" onblur=\"check_end_time()\" class=\"sang_Calender\">
\t\t\t        <input type=\"hidden\" name=\"mission\" id=\"mission\">
\t\t\t        <input type=\"hidden\" name=\"finish\" id=\"finish\">
\t\t\t      </div>
\t\t\t      <input type=\"submit\" data-inline=\"true\" id=\"btn\" value=\"提交\">
\t\t\t    </form>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"{{host}}public/js/jquery.min.js\"></script>
   \t\t<script src=\"{{host}}public/js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\" src=\"{{host}}public/js/datetime.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t\t//var id = 1;
\t\t\t\t\t//location.href=\"{{host}}public/touzi.html?id=1\";
\t\t\t\t})
   \t\t</script>
\t\t<script>
\t\t\t\$(\"#end_address\").click(function(){

\t\t\t})
\t\t</script>
\t\t<pre class=\"html\" name=\"code\"><script type=\"text/javascript\">     
\t\t\t//定义status，如果0则任务地址，如果1交易完成地址
\t\t\tvar status;
\t\t    //兼容火狐、IE8   
\t\t    //显示遮罩层 
\t\t    \$(\".showMask\").click(function(){
\t\t    \tstatus = (\$(this).attr('status'));
\t\t        \$(\"#mask\").css(\"height\",\$(document).height());     
\t\t        \$(\"#mask\").css(\"width\",\$(document).width());   
\t\t        \$(\"#mask\").show();
\t\t    })
\t\t    //隐藏遮罩层  
\t\t    function hideMask(){     
\t\t          
\t\t        \$(\"#mask\").hide();     
\t\t    }  
\t\t</script>  
\t\t<script>
\t\t\t//获取经纬度
\t\t\t\t\$(function(){  
\t\t\t\t  if (navigator.geolocation)  
\t\t\t\t\t{  
\t\t\t\t\tnavigator.geolocation.getCurrentPosition(showPosition);  
\t\t\t\t\t}  
\t\t\t\t  else{x.innerHTML=\"Geolocation is not supported by this browser.\";}  
\t\t\t\t  
\t\t\t\t})  
\t\t\t\t// 百度地图API功能
\t\t\t\tfunction showPosition(position)
\t\t\t\t{
\t\t\t\t\tvar map = new BMap.Map(\"allmap\");
\t\t\t\t\tmap.centerAndZoom(new BMap.Point(position.coords.longitude,position.coords.latitude),8);
\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\tmap.setZoom(14);   
\t\t\t\t\t}, 2000);  //2秒后放大到14级
\t\t\t\t\tmap.enableScrollWheelZoom(true);
\t\t\t\t\t
\t\t\t\t\tmap.addEventListener(\"click\", function(e){ 
\t\t\t\t\t\t//经纬度获取       
\t\t\t\t\t\t// alert(e.point.lng + \", \" + e.point.lat);
\t\t\t\t\t\t\$.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+e.point.lat+','+e.point.lng+'&output=json&pois=1',function(msg){
\t\t\t\t\t\t\tif(status==0)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\$(\"#mission\").val(e.point.lng + \", \" + e.point.lat)
\t\t\t\t\t\t\t\t\$(\"#address\").val(msg.result.formatted_address)
\t\t\t\t\t\t\t\t\$(\"#mask\").hide();
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\$(\"#finish\").val(e.point.lng + \", \" + e.point.lat)
\t\t\t\t\t\t\t\t\$(\"#end_address\").val(msg.result.formatted_address)
\t\t\t\t\t\t\t\t\$(\"#mask\").hide();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},'jsonp')
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tvar geolocation = new BMap.Geolocation();
\t\t\t\t\tgeolocation.getCurrentPosition(function(r){
\t\t\t\t\t\tif(this.getStatus() == BMAP_STATUS_SUCCESS){
\t\t\t\t\t\t\tvar mk = new BMap.Marker(r.point);
\t\t\t\t\t\t\tmap.addOverlay(mk);
\t\t\t\t\t\t\tmap.panTo(r.point);
\t\t\t\t\t\t\t//alert('您的位置：'+r.point.lng+','+r.point.lat);
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\talert('failed'+this.getStatus());
\t\t\t\t\t\t}        
\t\t\t\t\t},{enableHighAccuracy: true})
\t\t\t\t}
\t\t\t\$(\"#btn\").click(function(){

\t\t\t})
\t\t</script>
\t\t<script>
\t\t\t//验证标题
\t\t\tfunction check_title(title)
\t\t\t{
\t\t\t\tvar title = document.getElementById('title');
\t\t\t\tif(title.value=='')
\t\t\t\t{
\t\t\t\t\ttitle.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\ttitle.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//验证内容
\t\t\tfunction check_content(content)
\t\t\t{
\t\t\t\tvar content = document.getElementById('content');
\t\t\t\tif(content.value=='')
\t\t\t\t{
\t\t\t\t\tcontent.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tcontent.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//验证手机号
\t\t\tfunction check_call(call)
\t\t\t{
\t\t\t\tvar call = document.getElementById('call');
\t\t\t\tvar reg_call = /^1(3|5|7|8)\\d{9}\$/
\t\t\t\tif(!reg_call.test(call.value))
\t\t\t\t{
\t\t\t\t\tcall.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tcall.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//时间判断
\t\t\tfunction check_end_time(end_time)
\t\t\t{
\t\t\t\tvar end_time = document.getElementById('end_time');
\t\t\t\tif(end_time.value=='')
\t\t\t\t{
\t\t\t\t\tend_time.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tend_time.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//时间判断
\t\t\tfunction check_list_money(list_money)
\t\t\t{
\t\t\t\tvar list_money = document.getElementById('list_money');
\t\t\t\tvar reg_list_money = /^\\d{1,4}\$/
\t\t\t\tif(!reg_list_money.test(list_money.value))
\t\t\t\t{
\t\t\t\t\tlist_money.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tlist_money.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//时间判断
\t\t\tfunction check_violate_money(violate_money)
\t\t\t{
\t\t\t\tvar violate_money = document.getElementById('violate_money');
\t\t\t\tvar reg_violate_money = /^\\d{1,4}\$/
\t\t\t\tif(!reg_violate_money.test(violate_money.value))
\t\t\t\t{
\t\t\t\t\tviolate_money.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tviolate_money.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//任务地址判断
\t\t\tfunction check_address(address)
\t\t\t{
\t\t\t\tvar address = document.getElementById('address');
\t\t\t\tif(address.value=='')
\t\t\t\t{
\t\t\t\t\taddress.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\taddress.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\t//约定交易地址判断
\t\t\tfunction check_end_address(end_address)
\t\t\t{
\t\t\t\tvar end_address = document.getElementById('end_address');
\t\t\t\tif(end_address.value=='')
\t\t\t\t{
\t\t\t\t\tend_address.style.border=\"1px solid red\";
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tend_address.style.border=\"1px solid green\";
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\tfunction check_submit()
\t\t\t{
\t\t\t\tif(check_title()&check_content()&check_call()&check_address()&check_end_address()&check_end_time()&check_list_money()&check_violate_money())
\t\t\t\t{
\t\t\t\t\treturn true;
\t\t\t\t}else{
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t</script>
\t</div>
\t
</body>
</html>";
    }
}

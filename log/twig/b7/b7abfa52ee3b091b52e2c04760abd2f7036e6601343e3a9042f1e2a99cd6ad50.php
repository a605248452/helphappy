<?php

/* comment/index.html */
class __TwigTemplate_af406d9166034675fa0343606c7f78c303c807f4adcfd9c7a6f3e0fc771ceb5e extends Twig_Template
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
        echo "﻿<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>帮帮乐抽奖</title>
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery-1.7.js\"></script>
</head>
<style type=\"text/css\">
* { padding: 0; margin: 0; }
.am-share { font-size: 14px; border-radius: 0; bottom: 0; left: 0; position: fixed; text-align: center; -webkit-transform: translateY(100%); -ms-transform: translateY(100%); transform: translateY(100%); -webkit-transition: -webkit-transform 300ms; transition: transform 300ms ; width: 100%; z-index: 1110; }
.am-modal-active { transform: translateY(0px);  -webkit-transform: translateY(0); -ms-transform: translateY(0); transform: translateY(0) }
.am-modal-out { z-index: 1109; -webkit-transform: translateY(100%); -ms-transform: translateY(100%); transform: translateY(100%) }

.am-share-title { background-color: #f8f8f8; border-bottom: 1px solid #fff; border-top-left-radius: 2px; border-top-right-radius: 2px; color: #555; font-weight: 400; margin: 0 10px; padding: 10px 0 0; text-align: center; }
.am-share-title::after { border-bottom: 1px solid #dfdfdf; content: \"\"; display: block; height: 0; margin-top: 10px; width: 100%; }

.am-share-footer { margin: 10px; }
.am-share-footer .share_btn { color: #555;  display: block; width: 100%; background-color: #e6e6e6; border: 1px solid #e6e6e6; border-radius: 0; cursor: pointer;  font-size: 16px; font-weight: 400; line-height: 1.2; padding: 0.625em 0; text-align: center; transition: background-color 300ms ease-out 0s, border-color 300ms ease-out 0s; vertical-align: middle; white-space: nowrap;font-family:\"微软雅黑\";  }

.am-share-sns { background-color: #f8f8f8; border-radius: 0 0 2px 2px; margin: 0 10px; padding-top: 15px; height:auto; zoom:1; overflow:auto; }

.am-share-sns li { margin-bottom: 15px; display: block; float: left; height: auto;  width: 25%; }

.am-share-sns a { color: #555; display: block; text-decoration:none; }
.am-share-sns span { display: block; }

.am-share-sns li i { background-position: center 50%; background-repeat: no-repeat; background-size: 36px 36px; background-color: #ccc; color: #fff; display: inline-block; font-size: 18px; height: 36px; line-height: 36px; margin-bottom: 5px; width: 36px; }
.am-share-sns .share-icon-qq { background-image: url(";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/q.png); }
.am-share-sns .share-icon-weixin { background-image: url(";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/weixin.png); }
.am-share-sns .share-icon-taobao { background-image: url(";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/taobao.png); }
.am-share-sns .share-icon-weibo { background-image: url(";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/weibo.png); }

.sharebg { background-color: rgba(0, 0, 0, 0.6); bottom: 0; height: 100%; left: 0; opacity: 0; position: fixed; right: 0; top: 0; width: 100%; z-index: 1100; display:none; }
.sharebg-active { opacity: 1; display:block; }

</style>
<body>
<script type=\"text/javascript\">
\tfunction toshare(){
\t\t\$(\".am-share\").addClass(\"am-modal-active\");\t
\t\tif(\$(\".sharebg\").length>0){
\t\t\t\$(\".sharebg\").addClass(\"sharebg-active\");
\t\t}else{
\t\t\t\$(\"body\").append('<div class=\"sharebg\"></div>');
\t\t\t\$(\".sharebg\").addClass(\"sharebg-active\");
\t\t}
\t\t\$(\".sharebg-active,.share_btn\").click(function(){
\t\t\t\$(\".am-share\").removeClass(\"am-modal-active\");\t
\t\t\tsetTimeout(function(){
\t\t\t\t\$(\".sharebg-active\").removeClass(\"sharebg-active\");\t
\t\t\t\t\$(\".sharebg\").remove();\t
\t\t\t},300);
\t\t})
\t}\t
</script>

<style type=\"text/css\">
\tbody,ul,ol,li,p,h1,h2,h3,h4,h5,h6,form,fieldset,table,td,img,div{margin:0;padding:0;border:0;}
\tbody{color:#333; font-size:12px;font-family:\"Microsoft YaHei\"}
\tul,ol{list-style-type:none;}
\tselect,input,img,select{vertical-align:middle;}
\tinput{ font-size:12px;}
\ta{ text-decoration:none; color:#000;}
\ta:hover{color:#c00; text-decoration:none;}
\t.clear{clear:both;}

\t/* 大转盘样式 */
\t.banner{display:block;width:95%;margin-left:auto;margin-right:auto;margin-bottom: 20px;}
\t.banner .turnplate{display:block;width:100%;position:relative;}
\t.banner .turnplate canvas.item{width:100%;}
\t.banner .turnplate img.pointer{position:absolute;width:36%;height:40%;left:32%;top:28%;}
\t.more{display: block;width: 100%;position: fixed;top: 0;left: 0;height: 150px;}
\t.cloud{position: fixed;left: 0;top: 70%;width: 150px;}
\t.cloud2{position: fixed;right: 0;top: 32%;width: 50px;}
\t.cloud3{position: fixed;left: 0;top: 30%;width: 100px;}
\t@media screen and (max-width: 320px) {
\t\t.cloud{position: fixed;left: 0;top: 70%;width: 150px;}
\t\t.cloud2{position: fixed;right: 0;top: 30%;width: 50px;}
\t\t.cloud3{position: fixed;left: 0;top: 23%;width: 100px;}
\t}
\t@media screen and (min-width: 321px) and (max-width: 375px) {
\t\t.cloud{position: fixed;left: 0;top: 72%;width: 150px;}
\t\t.cloud2{position: fixed;right: 0;top: 32%;width: 50px;}
\t\t.cloud3{position: fixed;left: 0;top: 25%;width: 100px;}
\t}
\t@media screen and (min-width: 376px) {
\t\t.cloud{position: fixed;left: 0;top: 68%;width: 150px;}
\t\t.cloud2{position: fixed;right: 0;top: 32%;width: 50px;}
\t\t.cloud3{position: fixed;left: 0;top: 25%;width: 100px;}
\t}
\t@media screen and (max-height: 480px) {
\t\t.cloud{position: fixed;left: 0;top: 81%;width: 150px;}
\t\t.cloud2{position: fixed;right: 0;top: 35%;width: 50px;}
\t\t.cloud3{position: fixed;left: 0;top: 27%;width: 100px;}
\t}

\t#mark{width: 100%;height: 100%;background: rgba(0,0,0,0.5);position: fixed;top: 0;left: 0;display: none;}
\t.red-img{position: fixed;top: 10%;left: 5%;width: 90%;}
</style>
</div>
<script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/jquery-1.10.2.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/js/awardRotate.js\"></script>

<script type=\"text/javascript\">
var turnplate={
\t\trestaraunts:[],\t\t\t\t//大转盘奖品名称
\t\tcolors:[],\t\t\t\t\t//大转盘奖品区块对应背景颜色
\t\toutsideRadius:192,\t\t\t//大转盘外圆的半径
\t\ttextRadius:155,\t\t\t\t//大转盘奖品位置距离圆心的距离
\t\tinsideRadius:68,\t\t\t//大转盘内圆的半径
\t\tstartAngle:0,\t\t\t\t//开始角度
\t\t
\t\tbRotate:false\t\t\t\t//false:停止;ture:旋转
};

\$(document).ready(function(){
\t//动态添加大转盘的奖品与奖品区域背景颜色
\tturnplate.restaraunts = [\"碧根果一袋\", \"年货红包\", \"水果拼盘300元月卡\", \"2元现金红包\", \"夏威夷果一袋\", \"3元现金红包\", \"松子一袋 \", \"5元现金红包\"];
\tturnplate.colors = [\"#FFFFFF\",\"#5fcbd5\", \"#FFFFFF\", \"#5fcbd5\", \"#FFFFFF\",\"#5fcbd5\", \"#FFFFFF\", \"#5fcbd5\" ];

\t
\tvar rotateTimeOut = function (){
\t\t\$('#wheelcanvas').rotate({
\t\t\tangle:0,
\t\t\tanimateTo:2160,
\t\t\tduration:8000,
\t\t\tcallback:function (){
\t\t\t\talert('网络超时，请检查您的网络设置！');
\t\t\t}
\t\t});
\t};

\t//旋转转盘 item:奖品位置; txt：提示语;
\tvar rotateFn = function (item, txt){
\t\tvar angles = item * (360 / turnplate.restaraunts.length) - (360 / (turnplate.restaraunts.length*2));
\t\tif(angles<270){
\t\t\tangles = 270 - angles; 
\t\t}else{
\t\t\tangles = 360 - angles + 270;
\t\t}
\t\t\$('#wheelcanvas').stopRotate();
\t\t\$('#wheelcanvas').rotate({
\t\t\tangle:0,
\t\t\tanimateTo:angles+1800,
\t\t\tduration:8000,
\t\t\tcallback:function (){
\t\t\t\t\$('#mark').fadeIn();
\t\t\t\t//alert(txt);
\t\t\t\tturnplate.bRotate = !turnplate.bRotate;
\t\t\t\t\$('#mark').click(function(){
\t\t\t\t\t\$(this).hide();
\t\t\t\t});
\t\t\t\t
\t\t\t}
\t\t});
\t};

\t\$('.pointer').click(function (){
\t\tif(turnplate.bRotate)return;
\t\tturnplate.bRotate = !turnplate.bRotate;
\t\t//获取随机数(奖品个数范围内)
\t\tvar item = rnd(1,turnplate.restaraunts.length);
\t\t//奖品数量等于10,指针落在对应奖品区域的中心角度[252, 216, 180, 144, 108, 72, 36, 360, 324, 288]
\t\trotateFn(item, turnplate.restaraunts[item-1]);
\t\t/* switch (item) {
\t\t\tcase 1:
\t\t\t\trotateFn(252, turnplate.restaraunts[0]);
\t\t\t\tbreak;
\t\t\tcase 2:
\t\t\t\trotateFn(216, turnplate.restaraunts[1]);
\t\t\t\tbreak;
\t\t\tcase 3:
\t\t\t\trotateFn(180, turnplate.restaraunts[2]);
\t\t\t\tbreak;
\t\t\tcase 4:
\t\t\t\trotateFn(144, turnplate.restaraunts[3]);
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\trotateFn(108, turnplate.restaraunts[4]);
\t\t\t\tbreak;
\t\t\tcase 6:
\t\t\t\trotateFn(72, turnplate.restaraunts[5]);
\t\t\t\tbreak;
\t\t\tcase 7:
\t\t\t\trotateFn(36, turnplate.restaraunts[6]);
\t\t\t\tbreak;
\t\t\tcase 8:
\t\t\t\trotateFn(360, turnplate.restaraunts[7]);
\t\t\t\tbreak;
\t\t\tcase 9:
\t\t\t\trotateFn(324, turnplate.restaraunts[8]);
\t\t\t\tbreak;
\t\t\tcase 10:
\t\t\t\trotateFn(288, turnplate.restaraunts[9]);
\t\t\t\tbreak;
\t\t} */
\t\tconsole.log(item);
\t});
});

function rnd(n, m){
\tvar random = Math.floor(Math.random()*(m-n+1)+n);
\treturn random;
\t
}


//页面所有元素加载完毕后执行drawRouletteWheel()方法对转盘进行渲染
window.onload=function(){
\tdrawRouletteWheel();
};

function drawRouletteWheel() {    
  var canvas = document.getElementById(\"wheelcanvas\");    
  if (canvas.getContext) {
\t  //根据奖品个数计算圆周角度
\t  var arc = Math.PI / (turnplate.restaraunts.length/2);
\t  var ctx = canvas.getContext(\"2d\");
\t  //在给定矩形内清空一个矩形
\t  ctx.clearRect(0,0,422,422);
\t  //strokeStyle 属性设置或返回用于笔触的颜色、渐变或模式  
\t  ctx.strokeStyle = \"#FFBE04\";
\t  //font 属性设置或返回画布上文本内容的当前字体属性
\t  ctx.font = 'bold 18px Microsoft YaHei';      
\t  for(var i = 0; i < turnplate.restaraunts.length; i++) {       
\t\t  var angle = turnplate.startAngle + i * arc;\t\t 
\t\t  ctx.fillStyle = turnplate.colors[i];
\t\t  ctx.beginPath();
\t\t  //arc(x,y,r,起始角,结束角,绘制方向) 方法创建弧/曲线（用于创建圆或部分圆）    
\t\t  ctx.arc(211, 211, turnplate.outsideRadius, angle, angle + arc, false);    
\t\t  ctx.arc(211, 211, turnplate.insideRadius, angle + arc, angle, true);
\t\t  ctx.stroke();  
\t\t  ctx.fill();
\t\t  //锁画布(为了保存之前的画布状态)
\t\t  ctx.save();

\t\t  //改变画布文字颜色
\t\t  var b = i+2;
\t\t  if(b%2){
\t\t  \t ctx.fillStyle = \"#FFFFFF\";
\t\t  \t}else{
\t\t  \t ctx.fillStyle = \"#E5302F\";
\t\t  \t};
\t\t  
\t\t  //----绘制奖品开始----
\t\t \t
\t\t  \t  \t  
\t\t  var text = turnplate.restaraunts[i];
\t\t  var line_height = 17;
\t\t  //translate方法重新映射画布上的 (0,0) 位置
\t\t  ctx.translate(211 + Math.cos(angle + arc / 2) * turnplate.textRadius, 211 + Math.sin(angle + arc / 2) * turnplate.textRadius);
\t\t  
\t\t  //rotate方法旋转当前的绘图
\t\t  ctx.rotate(angle + arc / 2 + Math.PI / 2);
\t\t  
\t\t  /** 下面代码根据奖品类型、奖品名称长度渲染不同效果，如字体、颜色、图片效果。(具体根据实际情况改变) **/
\t\t  if(text.indexOf(\"盘\")>0){//判断字符进行换行
\t\t\t  var texts = text.split(\"盘\");
\t\t\t  for(var j = 0; j<texts.length; j++){
\t\t\t\t  ctx.font = j == 0?'bold 20px Microsoft YaHei':'bold 18px Microsoft YaHei';
\t\t\t\t  if(j == 0){
\t\t\t\t\t  ctx.fillText(texts[j]+\"盘\", -ctx.measureText(texts[j]+\"盘\").width / 2, j * line_height);
\t\t\t\t  }else{
\t\t\t\t\t  ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height*1.2); //调整行间距
\t\t\t\t  }
\t\t\t  }
\t\t  }else if(text.indexOf(\"盘\") == -1 && text.length>8){//奖品名称长度超过一定范围 
\t\t\t  text = text.substring(0,8)+\"||\"+text.substring(8);
\t\t\t  var texts = text.split(\"||\");
\t\t\t  for(var j = 0; j<texts.length; j++){
\t\t\t\t  ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
\t\t\t  }
\t\t  }else{
\t\t  \t\t
\t\t\t  //在画布上绘制填色的文本。文本的默认颜色是黑色
 
\t\t\t  //measureText()方法返回包含一个对象，该对象包含以像素计的指定字体宽度
\t\t\t  ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
\t\t  }
\t\t  
\t\t  //添加对应图标
\t\t  
\t\t  if(text.indexOf(turnplate.restaraunts[0])>=0){
\t\t\t  var img= document.getElementById(\"diy1-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[1])>=0){
\t\t\t  var img= document.getElementById(\"shan-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  }; 
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[2])>=0){
\t\t\t  var img= document.getElementById(\"diy5-img\");\t\t\t
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-25,35);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-30,35);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[3])>=0){
\t\t\t  var img= document.getElementById(\"shan-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[4])>=0){
\t\t\t  var img= document.getElementById(\"diy3-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-30,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-30,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[5])>=0){
\t\t\t  var img= document.getElementById(\"shan-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[6])>=0){
\t\t\t  var img= document.getElementById(\"diy2-img\");\t\t\t  
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-30,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-30,20);  
\t\t  };
\t\t  
\t\t  if(text.indexOf(turnplate.restaraunts[7])>=0){
\t\t\t  var img= document.getElementById(\"shan-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  
\t\t  
\t\t  //把当前画布返回（调整）到上一个save()状态之前 
\t\t  ctx.restore();
\t\t  //----绘制奖品结束----
\t  }     
  } 
};



</script>
</head>
<body style=\"background:url(";
        // line 355
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/body_bg2.jpg);background-size:cover;\">
    <img src=\"";
        // line 356
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/4.png\" id=\"shan-img\" style=\"display:none;\" />
    <img src=\"";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/3.png\" id=\"diy2-img\" style=\"display:none;\" />    
    <img src=\"";
        // line 358
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/5.png\" id=\"diy1-img\" style=\"display:none;\" />
    <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/6.png\" id=\"diy3-img\" style=\"display:none;\" />
    <img src=\"";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/7.png\" id=\"diy4-img\" style=\"display:none;\" />
    <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/7.png\" id=\"diy5-img\" style=\"display:none;\" />
\t<div class=\"banner\" style=\"margin-top: 35%\">
\t\t<div class=\"turnplate\" style=\"background-image:url(";
        // line 363
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/cj_bg.png);background-size:100% 100%;\">
\t\t\t<canvas class=\"item\" id=\"wheelcanvas\" width=\"422px\" height=\"422px\"></canvas>
\t\t\t<img class=\"pointer\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/jt2.png\"/>
\t\t</div>
\t</div>
\t<a href=\"#\" class=\"more\"></a>
\t<img src=\"";
        // line 369
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/9.png\" class=\"cloud\">
\t<img src=\"";
        // line 370
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/10.png\" class=\"cloud2\">
\t<img src=\"";
        // line 371
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/11.png\" class=\"cloud3\">
\t<div id=\"mark\">
\t<span onClick=\"toshare()\" style=\"border:dotted 1px #ddd;display:block;width:100px;text-align:center;margin:20px auto 0 auto;cursor:pointer;height:60px;line-height:60px;\">
\t<img src=\"";
        // line 374
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/images/red5.png\" class=\"red-img\"></span>

\t\t<a href=\"lend\">/a>
\t</div>
\t<div class=\"am-share\">
  <h3 class=\"am-share-title\">分享到</h3>
  <ul class=\"am-share-sns\">
    <li><a href=\"../comment/share\"> <i class=\"share-icon-qq\"></i> <span>QQ</span> </a> </li>
    <li><a href=\"../comment/share\"> <i class=\"share-icon-weixin\"></i> <span>微信</span> </a> </li>
    <li><a href=\"../comment/share\"> <i class=\"share-icon-taobao\"></i> <span>淘宝</span> </a> </li>
    <li><a href=\"../comment/share\"> <i class=\"share-icon-weibo\"></i> <span>新浪微博</span> </a> </li>
  </ul>
  <div class=\"am-share-footer\"><button class=\"share_btn\">取消</button></div>
</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "comment/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 374,  445 => 371,  441 => 370,  437 => 369,  430 => 365,  425 => 363,  420 => 361,  416 => 360,  412 => 359,  408 => 358,  404 => 357,  400 => 356,  396 => 355,  142 => 104,  138 => 103,  65 => 33,  61 => 32,  57 => 31,  53 => 30,  28 => 8,  19 => 1,);
    }

    public function getSource()
    {
        return "﻿<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>帮帮乐抽奖</title>
<script type=\"text/javascript\" src=\"{{host}}public/js/jquery-1.7.js\"></script>
</head>
<style type=\"text/css\">
* { padding: 0; margin: 0; }
.am-share { font-size: 14px; border-radius: 0; bottom: 0; left: 0; position: fixed; text-align: center; -webkit-transform: translateY(100%); -ms-transform: translateY(100%); transform: translateY(100%); -webkit-transition: -webkit-transform 300ms; transition: transform 300ms ; width: 100%; z-index: 1110; }
.am-modal-active { transform: translateY(0px);  -webkit-transform: translateY(0); -ms-transform: translateY(0); transform: translateY(0) }
.am-modal-out { z-index: 1109; -webkit-transform: translateY(100%); -ms-transform: translateY(100%); transform: translateY(100%) }

.am-share-title { background-color: #f8f8f8; border-bottom: 1px solid #fff; border-top-left-radius: 2px; border-top-right-radius: 2px; color: #555; font-weight: 400; margin: 0 10px; padding: 10px 0 0; text-align: center; }
.am-share-title::after { border-bottom: 1px solid #dfdfdf; content: \"\"; display: block; height: 0; margin-top: 10px; width: 100%; }

.am-share-footer { margin: 10px; }
.am-share-footer .share_btn { color: #555;  display: block; width: 100%; background-color: #e6e6e6; border: 1px solid #e6e6e6; border-radius: 0; cursor: pointer;  font-size: 16px; font-weight: 400; line-height: 1.2; padding: 0.625em 0; text-align: center; transition: background-color 300ms ease-out 0s, border-color 300ms ease-out 0s; vertical-align: middle; white-space: nowrap;font-family:\"微软雅黑\";  }

.am-share-sns { background-color: #f8f8f8; border-radius: 0 0 2px 2px; margin: 0 10px; padding-top: 15px; height:auto; zoom:1; overflow:auto; }

.am-share-sns li { margin-bottom: 15px; display: block; float: left; height: auto;  width: 25%; }

.am-share-sns a { color: #555; display: block; text-decoration:none; }
.am-share-sns span { display: block; }

.am-share-sns li i { background-position: center 50%; background-repeat: no-repeat; background-size: 36px 36px; background-color: #ccc; color: #fff; display: inline-block; font-size: 18px; height: 36px; line-height: 36px; margin-bottom: 5px; width: 36px; }
.am-share-sns .share-icon-qq { background-image: url({{host}}public/images/q.png); }
.am-share-sns .share-icon-weixin { background-image: url({{host}}public/images/weixin.png); }
.am-share-sns .share-icon-taobao { background-image: url({{host}}public/images/taobao.png); }
.am-share-sns .share-icon-weibo { background-image: url({{host}}public/images/weibo.png); }

.sharebg { background-color: rgba(0, 0, 0, 0.6); bottom: 0; height: 100%; left: 0; opacity: 0; position: fixed; right: 0; top: 0; width: 100%; z-index: 1100; display:none; }
.sharebg-active { opacity: 1; display:block; }

</style>
<body>
<script type=\"text/javascript\">
\tfunction toshare(){
\t\t\$(\".am-share\").addClass(\"am-modal-active\");\t
\t\tif(\$(\".sharebg\").length>0){
\t\t\t\$(\".sharebg\").addClass(\"sharebg-active\");
\t\t}else{
\t\t\t\$(\"body\").append('<div class=\"sharebg\"></div>');
\t\t\t\$(\".sharebg\").addClass(\"sharebg-active\");
\t\t}
\t\t\$(\".sharebg-active,.share_btn\").click(function(){
\t\t\t\$(\".am-share\").removeClass(\"am-modal-active\");\t
\t\t\tsetTimeout(function(){
\t\t\t\t\$(\".sharebg-active\").removeClass(\"sharebg-active\");\t
\t\t\t\t\$(\".sharebg\").remove();\t
\t\t\t},300);
\t\t})
\t}\t
</script>

<style type=\"text/css\">
\tbody,ul,ol,li,p,h1,h2,h3,h4,h5,h6,form,fieldset,table,td,img,div{margin:0;padding:0;border:0;}
\tbody{color:#333; font-size:12px;font-family:\"Microsoft YaHei\"}
\tul,ol{list-style-type:none;}
\tselect,input,img,select{vertical-align:middle;}
\tinput{ font-size:12px;}
\ta{ text-decoration:none; color:#000;}
\ta:hover{color:#c00; text-decoration:none;}
\t.clear{clear:both;}

\t/* 大转盘样式 */
\t.banner{display:block;width:95%;margin-left:auto;margin-right:auto;margin-bottom: 20px;}
\t.banner .turnplate{display:block;width:100%;position:relative;}
\t.banner .turnplate canvas.item{width:100%;}
\t.banner .turnplate img.pointer{position:absolute;width:36%;height:40%;left:32%;top:28%;}
\t.more{display: block;width: 100%;position: fixed;top: 0;left: 0;height: 150px;}
\t.cloud{position: fixed;left: 0;top: 70%;width: 150px;}
\t.cloud2{position: fixed;right: 0;top: 32%;width: 50px;}
\t.cloud3{position: fixed;left: 0;top: 30%;width: 100px;}
\t@media screen and (max-width: 320px) {
\t\t.cloud{position: fixed;left: 0;top: 70%;width: 150px;}
\t\t.cloud2{position: fixed;right: 0;top: 30%;width: 50px;}
\t\t.cloud3{position: fixed;left: 0;top: 23%;width: 100px;}
\t}
\t@media screen and (min-width: 321px) and (max-width: 375px) {
\t\t.cloud{position: fixed;left: 0;top: 72%;width: 150px;}
\t\t.cloud2{position: fixed;right: 0;top: 32%;width: 50px;}
\t\t.cloud3{position: fixed;left: 0;top: 25%;width: 100px;}
\t}
\t@media screen and (min-width: 376px) {
\t\t.cloud{position: fixed;left: 0;top: 68%;width: 150px;}
\t\t.cloud2{position: fixed;right: 0;top: 32%;width: 50px;}
\t\t.cloud3{position: fixed;left: 0;top: 25%;width: 100px;}
\t}
\t@media screen and (max-height: 480px) {
\t\t.cloud{position: fixed;left: 0;top: 81%;width: 150px;}
\t\t.cloud2{position: fixed;right: 0;top: 35%;width: 50px;}
\t\t.cloud3{position: fixed;left: 0;top: 27%;width: 100px;}
\t}

\t#mark{width: 100%;height: 100%;background: rgba(0,0,0,0.5);position: fixed;top: 0;left: 0;display: none;}
\t.red-img{position: fixed;top: 10%;left: 5%;width: 90%;}
</style>
</div>
<script type=\"text/javascript\" src=\"{{host}}public/js/jquery-1.10.2.js\"></script>
<script type=\"text/javascript\" src=\"{{host}}public/js/awardRotate.js\"></script>

<script type=\"text/javascript\">
var turnplate={
\t\trestaraunts:[],\t\t\t\t//大转盘奖品名称
\t\tcolors:[],\t\t\t\t\t//大转盘奖品区块对应背景颜色
\t\toutsideRadius:192,\t\t\t//大转盘外圆的半径
\t\ttextRadius:155,\t\t\t\t//大转盘奖品位置距离圆心的距离
\t\tinsideRadius:68,\t\t\t//大转盘内圆的半径
\t\tstartAngle:0,\t\t\t\t//开始角度
\t\t
\t\tbRotate:false\t\t\t\t//false:停止;ture:旋转
};

\$(document).ready(function(){
\t//动态添加大转盘的奖品与奖品区域背景颜色
\tturnplate.restaraunts = [\"碧根果一袋\", \"年货红包\", \"水果拼盘300元月卡\", \"2元现金红包\", \"夏威夷果一袋\", \"3元现金红包\", \"松子一袋 \", \"5元现金红包\"];
\tturnplate.colors = [\"#FFFFFF\",\"#5fcbd5\", \"#FFFFFF\", \"#5fcbd5\", \"#FFFFFF\",\"#5fcbd5\", \"#FFFFFF\", \"#5fcbd5\" ];

\t
\tvar rotateTimeOut = function (){
\t\t\$('#wheelcanvas').rotate({
\t\t\tangle:0,
\t\t\tanimateTo:2160,
\t\t\tduration:8000,
\t\t\tcallback:function (){
\t\t\t\talert('网络超时，请检查您的网络设置！');
\t\t\t}
\t\t});
\t};

\t//旋转转盘 item:奖品位置; txt：提示语;
\tvar rotateFn = function (item, txt){
\t\tvar angles = item * (360 / turnplate.restaraunts.length) - (360 / (turnplate.restaraunts.length*2));
\t\tif(angles<270){
\t\t\tangles = 270 - angles; 
\t\t}else{
\t\t\tangles = 360 - angles + 270;
\t\t}
\t\t\$('#wheelcanvas').stopRotate();
\t\t\$('#wheelcanvas').rotate({
\t\t\tangle:0,
\t\t\tanimateTo:angles+1800,
\t\t\tduration:8000,
\t\t\tcallback:function (){
\t\t\t\t\$('#mark').fadeIn();
\t\t\t\t//alert(txt);
\t\t\t\tturnplate.bRotate = !turnplate.bRotate;
\t\t\t\t\$('#mark').click(function(){
\t\t\t\t\t\$(this).hide();
\t\t\t\t});
\t\t\t\t
\t\t\t}
\t\t});
\t};

\t\$('.pointer').click(function (){
\t\tif(turnplate.bRotate)return;
\t\tturnplate.bRotate = !turnplate.bRotate;
\t\t//获取随机数(奖品个数范围内)
\t\tvar item = rnd(1,turnplate.restaraunts.length);
\t\t//奖品数量等于10,指针落在对应奖品区域的中心角度[252, 216, 180, 144, 108, 72, 36, 360, 324, 288]
\t\trotateFn(item, turnplate.restaraunts[item-1]);
\t\t/* switch (item) {
\t\t\tcase 1:
\t\t\t\trotateFn(252, turnplate.restaraunts[0]);
\t\t\t\tbreak;
\t\t\tcase 2:
\t\t\t\trotateFn(216, turnplate.restaraunts[1]);
\t\t\t\tbreak;
\t\t\tcase 3:
\t\t\t\trotateFn(180, turnplate.restaraunts[2]);
\t\t\t\tbreak;
\t\t\tcase 4:
\t\t\t\trotateFn(144, turnplate.restaraunts[3]);
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\trotateFn(108, turnplate.restaraunts[4]);
\t\t\t\tbreak;
\t\t\tcase 6:
\t\t\t\trotateFn(72, turnplate.restaraunts[5]);
\t\t\t\tbreak;
\t\t\tcase 7:
\t\t\t\trotateFn(36, turnplate.restaraunts[6]);
\t\t\t\tbreak;
\t\t\tcase 8:
\t\t\t\trotateFn(360, turnplate.restaraunts[7]);
\t\t\t\tbreak;
\t\t\tcase 9:
\t\t\t\trotateFn(324, turnplate.restaraunts[8]);
\t\t\t\tbreak;
\t\t\tcase 10:
\t\t\t\trotateFn(288, turnplate.restaraunts[9]);
\t\t\t\tbreak;
\t\t} */
\t\tconsole.log(item);
\t});
});

function rnd(n, m){
\tvar random = Math.floor(Math.random()*(m-n+1)+n);
\treturn random;
\t
}


//页面所有元素加载完毕后执行drawRouletteWheel()方法对转盘进行渲染
window.onload=function(){
\tdrawRouletteWheel();
};

function drawRouletteWheel() {    
  var canvas = document.getElementById(\"wheelcanvas\");    
  if (canvas.getContext) {
\t  //根据奖品个数计算圆周角度
\t  var arc = Math.PI / (turnplate.restaraunts.length/2);
\t  var ctx = canvas.getContext(\"2d\");
\t  //在给定矩形内清空一个矩形
\t  ctx.clearRect(0,0,422,422);
\t  //strokeStyle 属性设置或返回用于笔触的颜色、渐变或模式  
\t  ctx.strokeStyle = \"#FFBE04\";
\t  //font 属性设置或返回画布上文本内容的当前字体属性
\t  ctx.font = 'bold 18px Microsoft YaHei';      
\t  for(var i = 0; i < turnplate.restaraunts.length; i++) {       
\t\t  var angle = turnplate.startAngle + i * arc;\t\t 
\t\t  ctx.fillStyle = turnplate.colors[i];
\t\t  ctx.beginPath();
\t\t  //arc(x,y,r,起始角,结束角,绘制方向) 方法创建弧/曲线（用于创建圆或部分圆）    
\t\t  ctx.arc(211, 211, turnplate.outsideRadius, angle, angle + arc, false);    
\t\t  ctx.arc(211, 211, turnplate.insideRadius, angle + arc, angle, true);
\t\t  ctx.stroke();  
\t\t  ctx.fill();
\t\t  //锁画布(为了保存之前的画布状态)
\t\t  ctx.save();

\t\t  //改变画布文字颜色
\t\t  var b = i+2;
\t\t  if(b%2){
\t\t  \t ctx.fillStyle = \"#FFFFFF\";
\t\t  \t}else{
\t\t  \t ctx.fillStyle = \"#E5302F\";
\t\t  \t};
\t\t  
\t\t  //----绘制奖品开始----
\t\t \t
\t\t  \t  \t  
\t\t  var text = turnplate.restaraunts[i];
\t\t  var line_height = 17;
\t\t  //translate方法重新映射画布上的 (0,0) 位置
\t\t  ctx.translate(211 + Math.cos(angle + arc / 2) * turnplate.textRadius, 211 + Math.sin(angle + arc / 2) * turnplate.textRadius);
\t\t  
\t\t  //rotate方法旋转当前的绘图
\t\t  ctx.rotate(angle + arc / 2 + Math.PI / 2);
\t\t  
\t\t  /** 下面代码根据奖品类型、奖品名称长度渲染不同效果，如字体、颜色、图片效果。(具体根据实际情况改变) **/
\t\t  if(text.indexOf(\"盘\")>0){//判断字符进行换行
\t\t\t  var texts = text.split(\"盘\");
\t\t\t  for(var j = 0; j<texts.length; j++){
\t\t\t\t  ctx.font = j == 0?'bold 20px Microsoft YaHei':'bold 18px Microsoft YaHei';
\t\t\t\t  if(j == 0){
\t\t\t\t\t  ctx.fillText(texts[j]+\"盘\", -ctx.measureText(texts[j]+\"盘\").width / 2, j * line_height);
\t\t\t\t  }else{
\t\t\t\t\t  ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height*1.2); //调整行间距
\t\t\t\t  }
\t\t\t  }
\t\t  }else if(text.indexOf(\"盘\") == -1 && text.length>8){//奖品名称长度超过一定范围 
\t\t\t  text = text.substring(0,8)+\"||\"+text.substring(8);
\t\t\t  var texts = text.split(\"||\");
\t\t\t  for(var j = 0; j<texts.length; j++){
\t\t\t\t  ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
\t\t\t  }
\t\t  }else{
\t\t  \t\t
\t\t\t  //在画布上绘制填色的文本。文本的默认颜色是黑色
 
\t\t\t  //measureText()方法返回包含一个对象，该对象包含以像素计的指定字体宽度
\t\t\t  ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
\t\t  }
\t\t  
\t\t  //添加对应图标
\t\t  
\t\t  if(text.indexOf(turnplate.restaraunts[0])>=0){
\t\t\t  var img= document.getElementById(\"diy1-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[1])>=0){
\t\t\t  var img= document.getElementById(\"shan-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  }; 
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[2])>=0){
\t\t\t  var img= document.getElementById(\"diy5-img\");\t\t\t
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-25,35);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-30,35);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[3])>=0){
\t\t\t  var img= document.getElementById(\"shan-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[4])>=0){
\t\t\t  var img= document.getElementById(\"diy3-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-30,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-30,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[5])>=0){
\t\t\t  var img= document.getElementById(\"shan-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  if(text.indexOf(turnplate.restaraunts[6])>=0){
\t\t\t  var img= document.getElementById(\"diy2-img\");\t\t\t  
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-30,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-30,20);  
\t\t  };
\t\t  
\t\t  if(text.indexOf(turnplate.restaraunts[7])>=0){
\t\t\t  var img= document.getElementById(\"shan-img\");
\t\t\t  img.onload=function(){  
\t\t\t\t  ctx.drawImage(img,-35,20);      
\t\t\t  };  
\t\t\t  ctx.drawImage(img,-35,20);  
\t\t  };
\t\t  
\t\t  
\t\t  //把当前画布返回（调整）到上一个save()状态之前 
\t\t  ctx.restore();
\t\t  //----绘制奖品结束----
\t  }     
  } 
};



</script>
</head>
<body style=\"background:url({{host}}public/images/body_bg2.jpg);background-size:cover;\">
    <img src=\"{{host}}public/images/4.png\" id=\"shan-img\" style=\"display:none;\" />
    <img src=\"{{host}}public/images/3.png\" id=\"diy2-img\" style=\"display:none;\" />    
    <img src=\"{{host}}public/images/5.png\" id=\"diy1-img\" style=\"display:none;\" />
    <img src=\"{{host}}public/images/6.png\" id=\"diy3-img\" style=\"display:none;\" />
    <img src=\"{{host}}public/images/7.png\" id=\"diy4-img\" style=\"display:none;\" />
    <img src=\"{{host}}public/images/7.png\" id=\"diy5-img\" style=\"display:none;\" />
\t<div class=\"banner\" style=\"margin-top: 35%\">
\t\t<div class=\"turnplate\" style=\"background-image:url({{host}}public/images/cj_bg.png);background-size:100% 100%;\">
\t\t\t<canvas class=\"item\" id=\"wheelcanvas\" width=\"422px\" height=\"422px\"></canvas>
\t\t\t<img class=\"pointer\" src=\"{{host}}public/images/jt2.png\"/>
\t\t</div>
\t</div>
\t<a href=\"#\" class=\"more\"></a>
\t<img src=\"{{host}}public/images/9.png\" class=\"cloud\">
\t<img src=\"{{host}}public/images/10.png\" class=\"cloud2\">
\t<img src=\"{{host}}public/images/11.png\" class=\"cloud3\">
\t<div id=\"mark\">
\t<span onClick=\"toshare()\" style=\"border:dotted 1px #ddd;display:block;width:100px;text-align:center;margin:20px auto 0 auto;cursor:pointer;height:60px;line-height:60px;\">
\t<img src=\"{{host}}public/images/red5.png\" class=\"red-img\"></span>

\t\t<a href=\"lend\">/a>
\t</div>
\t<div class=\"am-share\">
  <h3 class=\"am-share-title\">分享到</h3>
  <ul class=\"am-share-sns\">
    <li><a href=\"../comment/share\"> <i class=\"share-icon-qq\"></i> <span>QQ</span> </a> </li>
    <li><a href=\"../comment/share\"> <i class=\"share-icon-weixin\"></i> <span>微信</span> </a> </li>
    <li><a href=\"../comment/share\"> <i class=\"share-icon-taobao\"></i> <span>淘宝</span> </a> </li>
    <li><a href=\"../comment/share\"> <i class=\"share-icon-weibo\"></i> <span>新浪微博</span> </a> </li>
  </ul>
  <div class=\"am-share-footer\"><button class=\"share_btn\">取消</button></div>
</div>

</body>
</html>";
    }
}

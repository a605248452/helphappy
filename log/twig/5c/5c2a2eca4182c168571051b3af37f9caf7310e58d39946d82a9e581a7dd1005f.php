<?php

/* set_phone.php */
class __TwigTemplate_b28bc3dbdf95258b5a2876552ea74dece76eb5ae0a3c8d491dc5c6f7c5b45386 extends Twig_Template
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
   \t\t 
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi phone\" id=\"phone\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>修改绑定手机</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
            <p><font color=\"#ff7f50\">重新绑定手机号后,之前的手机号将作废!</font></p>
            <form  method=\"post\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/setphone\"  data-ajax=\"false\" >
\t\t\t\t<ul>
                    <li>
                        <label>手机号：</label>
                        <input type=\"tel\" name=\"phone\" id=\"tel\" required=\"\" placeholder=\"请输入合法的手机号\" maxlength=\"11\" data-role=\"none\"/>
                    </li>
                    <li>
                        <label>短信验证码：</label>
                        <input type=\"text\" id=\"number\" required=\"\" name=\"number\"/>
                        <input type=\"button\" value=\"发送验证码\" id=\"but\" data-role=\"none\"/>
                    </li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"submit\"  value=\"确认修改\" data-role=\"none\"/>

\t\t\t</form>

\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
        <script src=\"js/jquery.cookie.js\" ></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
                //验证手机号
                \$(\"#tel\").keyup(function(){
                    var tel=\$(this).val();
                    var tel1=/^1(3|4|5|8|7)\\d{9}\$/;
                    if(!tel1.test(tel)){
                        this.style.border=\"1px solid red\";
                        return false;
                    }else{
                        this.style.border=\"1px solid green\";
                        return true;
                    }
                });
                //短信验证码
                \$(\"#number\").blur(function(){
                    var tem= this;
                    var number =\$(\"#number\").val();
                    if(number==''){
                        tem.style.border=\"1px solid red\";
                        return false;
                    }
                    \$.post(\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "login/number\",function(msg){
                        if(number==''){
                            tem.style.border=\"1px solid red\";
                            return false;
                        }
                        if(msg===number)
                        {
                            tem.style.border=\"1px solid green\";
                        }else{
                            tem.style.border=\"1px solid red\";
                            return false;
                        }
                    })
                });
                /*仿刷新：检测是否存在cookie*/
                if(\$.cookie(\"captcha\")){
                    var count = \$.cookie(\"captcha\");
                    var btn = \$('#but');
                    btn.val(count+'秒后可重新获取').attr('disabled',true).css('cursor','not-allowed');
                    var resend = setInterval(function(){
                        count--;
                        if (count > 0){

                            btn.val(count+'秒后可重新获取').attr('disabled',true).css('cursor','not-allowed');
                            \$.cookie(\"captcha\", count, {path: '/', expires: (1/86400)*count});
                        }else {

                            clearInterval(resend);
                            btn.val(\"获取验证码\").removeClass('disabled').removeAttr('disabled style');
                        }
                    }, 1000);
                }

                /*点击改变按钮状态，已经简略掉ajax发送短信验证的代码*/
                \$(\"#but\").click(function(){

                    var btn = \$(this);
                    //当前时间
                    var date = new Date();
                    var t=date.toLocaleString();
                    var count = 60;
                    var resend = setInterval(function(){
                        count--;
                        if (count > 0){
                            btn.val(count+\"秒后可重新获取\");
                            \$.cookie(\"captcha\", count, {path: '/', expires: (1/86400)*count});
                            \$.cookie(\"time\",t,{path: '/', expires: 1440*1000});

                        }else {
                            clearInterval(resend);
                            btn.val(\"获取验证码\").removeAttr('disabled style');
                        }
                    }, 1000);
                    //发短信
                    var tel=\$(\"#tel\").val();
                    \$.post(\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/msg\",{num:tel},function(msg){
                        //alert(msg);
                        if(msg==1){
                            alert(\"请输入合法的手机号!\");
                        }
                        if(msg==2){
                            alert(\"请重新获取验证码!\");
                        }
                    });
                    btn.attr('disabled',true).css('cursor','not-allowed');
                });
\t\t\t\t})
   \t\t</script>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "set_phone.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 119,  90 => 64,  44 => 21,  27 => 7,  19 => 1,);
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
   \t\t 
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi phone\" id=\"phone\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>修改绑定手机</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
            <p><font color=\"#ff7f50\">重新绑定手机号后,之前的手机号将作废!</font></p>
            <form  method=\"post\" action=\"{{host}}set/setphone\"  data-ajax=\"false\" >
\t\t\t\t<ul>
                    <li>
                        <label>手机号：</label>
                        <input type=\"tel\" name=\"phone\" id=\"tel\" required=\"\" placeholder=\"请输入合法的手机号\" maxlength=\"11\" data-role=\"none\"/>
                    </li>
                    <li>
                        <label>短信验证码：</label>
                        <input type=\"text\" id=\"number\" required=\"\" name=\"number\"/>
                        <input type=\"button\" value=\"发送验证码\" id=\"but\" data-role=\"none\"/>
                    </li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"submit\"  value=\"确认修改\" data-role=\"none\"/>

\t\t\t</form>

\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
        <script src=\"js/jquery.cookie.js\" ></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
                //验证手机号
                \$(\"#tel\").keyup(function(){
                    var tel=\$(this).val();
                    var tel1=/^1(3|4|5|8|7)\\d{9}\$/;
                    if(!tel1.test(tel)){
                        this.style.border=\"1px solid red\";
                        return false;
                    }else{
                        this.style.border=\"1px solid green\";
                        return true;
                    }
                });
                //短信验证码
                \$(\"#number\").blur(function(){
                    var tem= this;
                    var number =\$(\"#number\").val();
                    if(number==''){
                        tem.style.border=\"1px solid red\";
                        return false;
                    }
                    \$.post(\"{{host}}login/number\",function(msg){
                        if(number==''){
                            tem.style.border=\"1px solid red\";
                            return false;
                        }
                        if(msg===number)
                        {
                            tem.style.border=\"1px solid green\";
                        }else{
                            tem.style.border=\"1px solid red\";
                            return false;
                        }
                    })
                });
                /*仿刷新：检测是否存在cookie*/
                if(\$.cookie(\"captcha\")){
                    var count = \$.cookie(\"captcha\");
                    var btn = \$('#but');
                    btn.val(count+'秒后可重新获取').attr('disabled',true).css('cursor','not-allowed');
                    var resend = setInterval(function(){
                        count--;
                        if (count > 0){

                            btn.val(count+'秒后可重新获取').attr('disabled',true).css('cursor','not-allowed');
                            \$.cookie(\"captcha\", count, {path: '/', expires: (1/86400)*count});
                        }else {

                            clearInterval(resend);
                            btn.val(\"获取验证码\").removeClass('disabled').removeAttr('disabled style');
                        }
                    }, 1000);
                }

                /*点击改变按钮状态，已经简略掉ajax发送短信验证的代码*/
                \$(\"#but\").click(function(){

                    var btn = \$(this);
                    //当前时间
                    var date = new Date();
                    var t=date.toLocaleString();
                    var count = 60;
                    var resend = setInterval(function(){
                        count--;
                        if (count > 0){
                            btn.val(count+\"秒后可重新获取\");
                            \$.cookie(\"captcha\", count, {path: '/', expires: (1/86400)*count});
                            \$.cookie(\"time\",t,{path: '/', expires: 1440*1000});

                        }else {
                            clearInterval(resend);
                            btn.val(\"获取验证码\").removeAttr('disabled style');
                        }
                    }, 1000);
                    //发短信
                    var tel=\$(\"#tel\").val();
                    \$.post(\"{{host}}set/msg\",{num:tel},function(msg){
                        //alert(msg);
                        if(msg==1){
                            alert(\"请输入合法的手机号!\");
                        }
                        if(msg==2){
                            alert(\"请重新获取验证码!\");
                        }
                    });
                    btn.attr('disabled',true).css('cursor','not-allowed');
                });
\t\t\t\t})
   \t\t</script>
\t</div>
</body>
</html>";
    }
}

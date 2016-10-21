<?php

/* set_gopass.php */
class __TwigTemplate_47eeb3a65ead324cd00c8a38b6226bd1f3ee2b45bd46353d343fb2b141f172b9 extends Twig_Template
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
    <base href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "public/\"/>
    <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi phone\" id=\"phone\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>设置交易密码</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
            <form  method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "set/set_gopass\"  data-ajax=\"false\" >
\t\t\t\t<ul>
                    <li>
                        <label>手机号：</label>
                        <input type=\"tel\"  value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sj"]) ? $context["sj"] : null), "phone", array()), "html", null, true);
        echo "\" readonly=\"readonly\" data-role=\"none\"/>
                        <input type=\"hidden\" name=\"phone\" id=\"tel\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sj"]) ? $context["sj"] : null), "tel", array()), "html", null, true);
        echo "\"  data-role=\"none\"/>
                    </li>
                    <li>
                        <label>短信验证码：</label>
                        <input type=\"text\" id=\"number\" required=\"\" name=\"number\"/>
                        <input type=\"button\" value=\"发送验证码\" id=\"but\" data-role=\"none\"/>
                    </li>
                    <li>
                        <label>交易密码：</label>
                        <input type=\"password\" name=\"pass\" id=\"pwd\" required=\"\"  placeholder=\"请填6-10数字密码\" maxlength=\"10\" data-role=\"none\"/>
                    </li>
                    <li>
                        <label>确认密码：</label>
                        <input type=\"password\" name=\"rpwd\" id=\"rpwd\" required=\"required\" placeholder=\"请确认密码\" maxlength=\"10\" data-role=\"none\"/>
                    </li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"submit\"  value=\"确认修改\" data-role=\"none\"/>
\t\t\t</form>
\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();

                //验证密码
                \$(\"#pwd\").blur(function() {
                    var pwd = \$(this).val();
                    var pwd1=/^[0-9]{6,10}\$/;
                    if(!pwd1.test(pwd)){
                        this.style.border=\"1px solid red\";
                        return false;
                    }else{
                        this.style.border=\"1px solid green\";
                        return true;
                    }
                });

                //确认密码是否一致
                \$(\"#rpwd\").keyup(function(){
                    var rpwd=\$(this).val();
                    var pwd =\$(\"#pwd\").val();
                    if(rpwd==''){
                        this.style.border=\"1px solid red\";
                        return false;
                    }
                    if(rpwd!=pwd){
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
        // line 87
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
        // line 143
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "login/msg\",{num:tel},function(msg){
                        if(msg==1){
                            alert(\"手机号!\");
                        }
                        if(msg==2){
                            alert(\"验证码!\");
                        }
                    });
                    btn.attr('disabled',true).css('cursor','not-allowed');
                });

\t\t\t\t});
   \t\t</script>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "set_gopass.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 143,  119 => 87,  53 => 24,  49 => 23,  42 => 19,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>帮帮乐</title>
    <base href=\"{{host}}public/\"/>
    <link rel=\"stylesheet\" href=\"css/jquery.mobile-1.4.5.min.css\"/>
    <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi phone\" id=\"phone\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>设置交易密码</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
            <form  method=\"post\" action=\"{{host}}set/set_gopass\"  data-ajax=\"false\" >
\t\t\t\t<ul>
                    <li>
                        <label>手机号：</label>
                        <input type=\"tel\"  value=\"{{sj.phone}}\" readonly=\"readonly\" data-role=\"none\"/>
                        <input type=\"hidden\" name=\"phone\" id=\"tel\" value=\"{{sj.tel}}\"  data-role=\"none\"/>
                    </li>
                    <li>
                        <label>短信验证码：</label>
                        <input type=\"text\" id=\"number\" required=\"\" name=\"number\"/>
                        <input type=\"button\" value=\"发送验证码\" id=\"but\" data-role=\"none\"/>
                    </li>
                    <li>
                        <label>交易密码：</label>
                        <input type=\"password\" name=\"pass\" id=\"pwd\" required=\"\"  placeholder=\"请填6-10数字密码\" maxlength=\"10\" data-role=\"none\"/>
                    </li>
                    <li>
                        <label>确认密码：</label>
                        <input type=\"password\" name=\"rpwd\" id=\"rpwd\" required=\"required\" placeholder=\"请确认密码\" maxlength=\"10\" data-role=\"none\"/>
                    </li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"submit\"  value=\"确认修改\" data-role=\"none\"/>
\t\t\t</form>
\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();

                //验证密码
                \$(\"#pwd\").blur(function() {
                    var pwd = \$(this).val();
                    var pwd1=/^[0-9]{6,10}\$/;
                    if(!pwd1.test(pwd)){
                        this.style.border=\"1px solid red\";
                        return false;
                    }else{
                        this.style.border=\"1px solid green\";
                        return true;
                    }
                });

                //确认密码是否一致
                \$(\"#rpwd\").keyup(function(){
                    var rpwd=\$(this).val();
                    var pwd =\$(\"#pwd\").val();
                    if(rpwd==''){
                        this.style.border=\"1px solid red\";
                        return false;
                    }
                    if(rpwd!=pwd){
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
                    \$.post(\"{{host}}login/msg\",{num:tel},function(msg){
                        if(msg==1){
                            alert(\"手机号!\");
                        }
                        if(msg==2){
                            alert(\"验证码!\");
                        }
                    });
                    btn.attr('disabled',true).css('cursor','not-allowed');
                });

\t\t\t\t});
   \t\t</script>
\t</div>
</body>
</html>";
    }
}

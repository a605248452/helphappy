<?php

/* register.php */
class __TwigTemplate_408706e2498c6b861b9c527b81c7d330c528f199376915764cf460c6a2a56103 extends Twig_Template
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
<div data-role=\"page\" class=\"touzi phone\" id=\"phone\">
    <header data-role=\"header\" data-position=\"fixed\">
        <a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a>
        <h3>注册</h3>
    </header>
    <div class=\"ui-content\" style=\"margin-top: 10%\" data-role=\"content\">
        <form  method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "login/register\"  target=\"_blank\" >
            <ul>

                <li>
                    <label>账号：</label>
                    <input type=\"text\" name=\"u_name\" id=\"name\" required=\"\"  placeholder=\"请填写账号\"  data-role=\"none\"/>
                    <div id=\"error1\"><span style=\"color: red\"></span></div>
                </li>
                <li>
                    <label>昵称：</label>
                    <input type=\"text\" name=\"nickname\" id=\"nick\"  required=\"\" placeholder=\"请填写昵称\" maxlength=\"20\" data-role=\"none\"/>
                </li>
                <li>
                    <label>密码：</label>
                    <input type=\"password\" name=\"u_pwd\" id=\"pwd\" required=\"\"  placeholder=\"请填6-10数字密码\" maxlength=\"10\" data-role=\"none\"/>
                </li>
                <li>
                    <label>确认密码：</label>
                    <input type=\"password\" name=\"rpwd\" id=\"rpwd\" required=\"\" placeholder=\"请确认密码\" maxlength=\"10\" data-role=\"none\"/>
                </li>
                <li>
                    <label>邮箱：</label>
                    <input type=\"email\" name=\"email\" id=\"email\" required=\"\" placeholder=\"请输入合法的电子邮箱\" data-role=\"none\"/>
                </li>
                <li>
                    <label>手机号：</label>
                    <input type=\"tel\" name=\"phone\" id=\"tel\" required=\"\" placeholder=\"请输入合法的手机号\" maxlength=\"11\" data-role=\"none\"/>
                </li>
                <li>
                    <label>短信验证码：</label>
                    <input type=\"text\" name=\"number\" id=\"number\" required=\"\" data-role=\"none\" />
                    <input type=\"button\" value=\"发送验证码\" id=\"but\" data-role=\"none\"/>
                </li>

            </ul>
            <input type=\"submit\"  id=\"sub\" value=\"注册\" data-role=\"none\"/>
            <p style=\"text-align: center\"> <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "login/login\">立即登陆</a></p>
        </form>
    </div>
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/jquery.cookie.js\" ></script>
    <script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
    <script type=\"text/javascript\">
      \$(function(){
          //账号唯一性
          \$(\"#name\").blur(function(){
              var name1=/^[a-z]{6,10}\$/i;
              var name=\$(this).val();
              if(name1.test(name)){
                  \$.post(\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "login/only\",{name:name},function(one){
                      if(one==1){
                          this.style.border=\"1px solid red\";
                          var error1=
                          alert('账号已存在,请重新填写!');
                          history.go(0);
                      }
                  })
              }else{
                  this.style.border=\"1px solid red\";
//                  alert(\"请输出6-10位字母!\");
                  return false;
              }
          });

          //验证密码
          \$(\"#pwd\").blur(function() {
              var pwd = \$(this).val();
              var pwd1=/^[0-9]{6,10}\$/;
              if(!pwd1.test(pwd)){
                  this.style.border=\"1px solid red\";
//                  alert(\"请输入6-10位数字\");
                  return false;
              }
          });
          //确认密码是否一致
          \$(\"#rpwd\").blur(function(){
              var rpwd=\$(this).val();
              var pwd =\$(\"#pwd\").val();
              if(rpwd!=pwd){
                  this.style.border=\"1px solid red\";
//                  alert('密码不一致!');
                  return false;
              }
          });
          //验证email
          \$(\"#email\").blur(function(){
              var email=\$(this).val();
              var email1=/^[\\w]+(\\.[\\w]+)*@[\\w]+(\\.[\\w]+)+\$/;
              if(!email1.test(email)){
                  this.style.border=\"1px solid red\";
//                  alert(\"请输入合法的电子邮箱!\");
                  return false;
              }
          });
          //验证手机号
          \$(\"#tel\").blur(function(){
              var tel=\$(this).val();
              var tel1=/^1[3|4|5|8]\\d{9}\$/;
              if(!tel1.test(tel)){
                  this.style.border=\"1px solid red\";
//                  alert(\"请输入合法的手机号!\");
                  return false;
              }
          });
          //短信验证码

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
        // line 165
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo "login/msg\",{num:tel},function(msg){
                  alert(msg);
//                  if(msg==0){
//                      alert(\"失败!\");
//                  }
              });

              btn.attr('disabled',true).css('cursor','not-allowed');
          });

      });
    </script>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "register.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 165,  97 => 68,  81 => 55,  42 => 19,  27 => 7,  19 => 1,);
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
<div data-role=\"page\" class=\"touzi phone\" id=\"phone\">
    <header data-role=\"header\" data-position=\"fixed\">
        <a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a>
        <h3>注册</h3>
    </header>
    <div class=\"ui-content\" style=\"margin-top: 10%\" data-role=\"content\">
        <form  method=\"post\" action=\"{{host}}login/register\"  target=\"_blank\" >
            <ul>

                <li>
                    <label>账号：</label>
                    <input type=\"text\" name=\"u_name\" id=\"name\" required=\"\"  placeholder=\"请填写账号\"  data-role=\"none\"/>
                    <div id=\"error1\"><span style=\"color: red\"></span></div>
                </li>
                <li>
                    <label>昵称：</label>
                    <input type=\"text\" name=\"nickname\" id=\"nick\"  required=\"\" placeholder=\"请填写昵称\" maxlength=\"20\" data-role=\"none\"/>
                </li>
                <li>
                    <label>密码：</label>
                    <input type=\"password\" name=\"u_pwd\" id=\"pwd\" required=\"\"  placeholder=\"请填6-10数字密码\" maxlength=\"10\" data-role=\"none\"/>
                </li>
                <li>
                    <label>确认密码：</label>
                    <input type=\"password\" name=\"rpwd\" id=\"rpwd\" required=\"\" placeholder=\"请确认密码\" maxlength=\"10\" data-role=\"none\"/>
                </li>
                <li>
                    <label>邮箱：</label>
                    <input type=\"email\" name=\"email\" id=\"email\" required=\"\" placeholder=\"请输入合法的电子邮箱\" data-role=\"none\"/>
                </li>
                <li>
                    <label>手机号：</label>
                    <input type=\"tel\" name=\"phone\" id=\"tel\" required=\"\" placeholder=\"请输入合法的手机号\" maxlength=\"11\" data-role=\"none\"/>
                </li>
                <li>
                    <label>短信验证码：</label>
                    <input type=\"text\" name=\"number\" id=\"number\" required=\"\" data-role=\"none\" />
                    <input type=\"button\" value=\"发送验证码\" id=\"but\" data-role=\"none\"/>
                </li>

            </ul>
            <input type=\"submit\"  id=\"sub\" value=\"注册\" data-role=\"none\"/>
            <p style=\"text-align: center\"> <a href=\"{{host}}login/login\">立即登陆</a></p>
        </form>
    </div>
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/jquery.cookie.js\" ></script>
    <script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
    <script type=\"text/javascript\">
      \$(function(){
          //账号唯一性
          \$(\"#name\").blur(function(){
              var name1=/^[a-z]{6,10}\$/i;
              var name=\$(this).val();
              if(name1.test(name)){
                  \$.post(\"{{host}}login/only\",{name:name},function(one){
                      if(one==1){
                          this.style.border=\"1px solid red\";
                          var error1=
                          alert('账号已存在,请重新填写!');
                          history.go(0);
                      }
                  })
              }else{
                  this.style.border=\"1px solid red\";
//                  alert(\"请输出6-10位字母!\");
                  return false;
              }
          });

          //验证密码
          \$(\"#pwd\").blur(function() {
              var pwd = \$(this).val();
              var pwd1=/^[0-9]{6,10}\$/;
              if(!pwd1.test(pwd)){
                  this.style.border=\"1px solid red\";
//                  alert(\"请输入6-10位数字\");
                  return false;
              }
          });
          //确认密码是否一致
          \$(\"#rpwd\").blur(function(){
              var rpwd=\$(this).val();
              var pwd =\$(\"#pwd\").val();
              if(rpwd!=pwd){
                  this.style.border=\"1px solid red\";
//                  alert('密码不一致!');
                  return false;
              }
          });
          //验证email
          \$(\"#email\").blur(function(){
              var email=\$(this).val();
              var email1=/^[\\w]+(\\.[\\w]+)*@[\\w]+(\\.[\\w]+)+\$/;
              if(!email1.test(email)){
                  this.style.border=\"1px solid red\";
//                  alert(\"请输入合法的电子邮箱!\");
                  return false;
              }
          });
          //验证手机号
          \$(\"#tel\").blur(function(){
              var tel=\$(this).val();
              var tel1=/^1[3|4|5|8]\\d{9}\$/;
              if(!tel1.test(tel)){
                  this.style.border=\"1px solid red\";
//                  alert(\"请输入合法的手机号!\");
                  return false;
              }
          });
          //短信验证码

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
                  alert(msg);
//                  if(msg==0){
//                      alert(\"失败!\");
//                  }
              });

              btn.attr('disabled',true).css('cursor','not-allowed');
          });

      });
    </script>
</div>
</body>
</html>";
    }
}

<?php

/* set_details.php */
class __TwigTemplate_626fe0cd9e733c81f2e9654c5d8711216bcadd8b8d216bb5de28589337668435 extends Twig_Template
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
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi ques\" id=\"details\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>关于我们</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<div class=\"details\">
\t\t\t\t<center><h2>帮帮乐</h2></center>
\t\t\t\t<p>  &nbsp;&nbsp;&nbsp;&nbsp;   帮帮乐，正式成立于2011年9月,公司前身是北京市一致电子科技有限公司，致力于电子产品的制造业领域长达十年为适应市场发出趋势，公司于2011年9月成功转型，我们已全力进军互联网行业电子商务领域。
                    依托有“世界工厂”之称的深圳和东莞制造业基地，尤其以电子产品著称。
                    我们先后和七家工厂签约并建立长期的合作关系，为我们向您提供最优质的产品奠定了坚实的基础，同时售后服务得到保障。让您更放心。
                </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;   在我们不断的努力开拓下，我们的电子商务平台--------帮帮乐（<a href=\"http://bbl.lzyapp.cn\">http://bbl.lzy.cn</a> ）是中国B2C市场专业平台之一。
                    商城始终坚持以纯电子商务模式运营，缩减中间环节，为消费者在第一时间提供优质的产品及满意的服务。
                    提供了灵活多样的消费者查询、购物等都将不受时间和地域的限制。依托多年打造的庞大物流体系，让您充分享受到\"足不出户，网罗天下\"的便捷。
                </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;  对待所有客户我们秉承提供具有价格优势的产品和满意的服务为宗旨，以一流的产品质量和精湛的服务体系在行业客户中赢得较高声誉。
                    公司秉承“以质为根、以诚为本、以德为先、以信为生”的发展理念，奉行“进取求实严谨团结”的工作方针，不断开拓创新。
                    以服务为核心，为最高宗旨，竭诚提供性价比最高的商品及无微不至的服务。
                    公司集销售、物流、售后于一体，让您买的安心，用的舒心！</p>

                <p> &nbsp;&nbsp;&nbsp;&nbsp; 企业使命：追求完美品质，减少中间环节，让好的产品更便宜！让购物变得简单化！</p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp; 核心价值：诚信经营、多方共赢！</p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp; 发展理念：“以质为根、以诚为本、以德为先、以信为基”！</p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp; 追求理念：提供高性价比的时尚电子产品！</p>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t})
   \t\t</script>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "set_details.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
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
   \t\t <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
\t<div class=\"loading\"><img src=\"images/ajax-loader.gif\"/></div>
\t<div data-role=\"page\" class=\"touzi ques\" id=\"details\">
\t\t<header data-role=\"header\" data-position=\"fixed\">
\t\t\t<a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon\" data-transition=\"slide\" data-direction=\"revserse\">返回</a> 
\t\t\t<h3>关于我们</h3>
\t\t</header>
\t\t<div class=\"ui-content\" data-role=\"content\">
\t\t\t<div class=\"details\">
\t\t\t\t<center><h2>帮帮乐</h2></center>
\t\t\t\t<p>  &nbsp;&nbsp;&nbsp;&nbsp;   帮帮乐，正式成立于2011年9月,公司前身是北京市一致电子科技有限公司，致力于电子产品的制造业领域长达十年为适应市场发出趋势，公司于2011年9月成功转型，我们已全力进军互联网行业电子商务领域。
                    依托有“世界工厂”之称的深圳和东莞制造业基地，尤其以电子产品著称。
                    我们先后和七家工厂签约并建立长期的合作关系，为我们向您提供最优质的产品奠定了坚实的基础，同时售后服务得到保障。让您更放心。
                </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;   在我们不断的努力开拓下，我们的电子商务平台--------帮帮乐（<a href=\"http://bbl.lzyapp.cn\">http://bbl.lzy.cn</a> ）是中国B2C市场专业平台之一。
                    商城始终坚持以纯电子商务模式运营，缩减中间环节，为消费者在第一时间提供优质的产品及满意的服务。
                    提供了灵活多样的消费者查询、购物等都将不受时间和地域的限制。依托多年打造的庞大物流体系，让您充分享受到\"足不出户，网罗天下\"的便捷。
                </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;  对待所有客户我们秉承提供具有价格优势的产品和满意的服务为宗旨，以一流的产品质量和精湛的服务体系在行业客户中赢得较高声誉。
                    公司秉承“以质为根、以诚为本、以德为先、以信为生”的发展理念，奉行“进取求实严谨团结”的工作方针，不断开拓创新。
                    以服务为核心，为最高宗旨，竭诚提供性价比最高的商品及无微不至的服务。
                    公司集销售、物流、售后于一体，让您买的安心，用的舒心！</p>

                <p> &nbsp;&nbsp;&nbsp;&nbsp; 企业使命：追求完美品质，减少中间环节，让好的产品更便宜！让购物变得简单化！</p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp; 核心价值：诚信经营、多方共赢！</p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp; 发展理念：“以质为根、以诚为本、以德为先、以信为基”！</p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp; 追求理念：提供高性价比的时尚电子产品！</p>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"js/jquery.min.js\"></script>
   \t\t<script src=\"js/jquery.mobile-1.4.5.min.js\"></script>
   \t\t<script type=\"text/javascript\">
   \t\t\t\$(window).load(function(){
\t\t\t\t\t\$(\".loading\").fadeOut();
\t\t\t\t})
   \t\t</script>
\t</div>
</body>
</html>";
    }
}

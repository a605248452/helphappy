<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>帮帮乐</title>
    <base href="{{host}}public/"/>
</head>
<body>
	<div class="loading"><img src="images/ajax-loader.gif"/></div>
	<div data-role="page" class="touzi set" id="ques">
		<!--jqmb需要把所以东西放在page div内-->
		 <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css"/>
   		 <link rel="stylesheet" href="css/style.css"/>
   		 
   		<!--jqmb需要把所以东西放在page div内--> 
		<header data-role="header" data-position="fixed">
			<a href="#" data-rel="back" class="ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon"  data-ajax="false">返回</a> 
			<h3>常见问题</h3>
		</header>
		<div class="ui-content" data-role="content">
			<dl>
				<dd>
					<a href="{{host}}set/details" data-transition="slide" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon"><label>帮帮乐介绍</label></a>
				</dd>
                <dd>
                    <a href="{{host}}lists/receive" data-transition="slide" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon"><label>我要接单</label></a>
                </dd>
				<dd>
					<a href="set-details.html" data-transition="slide" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon"><label>账户安全</label></a>
				</dd>
				<dd>
					<a href="set-details.html" data-transition="slide" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon"><label>账户管理</label></a>
				</dd>
				<dd>
					<a href="set-details.html" data-transition="slide" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon"><label>资金管理</label></a>
				</dd>
				<dd>
					<a href="set-details.html" data-transition="slide" class="ui-btn ui-icon-appright ui-btn-icon-right ui-nodisc-icon"><label>政策法规</label></a>
				</dd>
			</dl>
		</div>
		<script src="js/jquery.min.js"></script>
   		<script src="js/jquery.mobile-1.4.5.min.js"></script>
   		<script type="text/javascript">
   			$(window).load(function(){
					$(".loading").fadeOut();
					
				})
   		</script>
	</div>
	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>赚不停</title>
     <link rel="stylesheet" type="text/css" href="{{host}}public/css/slick.css"/>
    <link rel="stylesheet" href="{{host}}public/css/jquery.mobile-1.4.5.min.css"/>
    <link rel="stylesheet" href="{{host}}public/css/style.css"/>
    <script src="{{host}}public/js/jquery.min.js"></script>
     <script src="{{host}}public/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body style="background-color: #f2f2f2;">
	<div class="loading"><img src="{{host}}public/images/ajax-loader.gif"/></div>
	<div data-role="page" class="index" id="index">
		<header data-role="header">
			<h3>赚不停</h3>
		</header>
		<div class="ui-content" data-role="content"> 
			<ul class="slick">
			    <li><a href="#"><img src="{{host}}public/images/ban01.png"/></a></li>
			    <li><a href="#"><img src="{{host}}public/images/ban02.png"/></a></li>
			    <li><a href="#"><img src="{{host}}public/images/ban03.png"/></a></li>
			    <li><a href="#"><img src="{{host}}public/images/ban04.png"/></a></li>
			</ul>
			<ul class="index-menu">
				<li>
					<img src="{{host}}public/images/icon01.png"/>
					<p>保险承保</p>
				</li>
				<li>
					<img src="{{host}}public/images/icon02.png"/>
					<p>当日计息</p>
				</li>
				<li>
					<img src="{{host}}public/images/icon03.png"/>
					<p>续投加息</p>
				</li>
			</ul>
			<dl class="index-year">
				<a href="month.html" data-transition="slide" data-ajax="false">
					<dd>
						<h4>月月盈</h4>
						<p><small>年化</small>6.0%起</p>
					</dd>
					<dt>支持续投，次月起年化收益增加0.1%</dt>
				</a>
			</dl>
			<dl class="index-year">
				<a href="month.html" data-transition="slide" data-ajax="false">
					<dd>
						<h4>季度丰</h4>
						<p><small>年化</small>6.3%起</p>
					</dd>
					<dt>支持续投，次月起年化收益增加0.1%</dt> 
				</a>
			</dl>
			<dl class="index-year">
				<a href="month.html" data-transition="slide" data-ajax="false">
					<dd>
						<h4>半年享</h4>
						<p><small>年化</small>6.6%起</p>
					</dd>
					<dt>支持续投，次月起年化收益增加0.1%</dt>
				</a>
			</dl>
		</div>
		<footer data-role="footer" data-position="fixed">  
			<ul>
				<li><a href="index.html"  rel="external">接单</a></li>
				<li><a href="self.html"  rel="external">发单</a></li>
				<li><a href="self.html"  rel="external">我的</a></li>
			</ul>
		</footer>
		<script src="{{host}}public/js/slick.min.js" ></script>
	    <script type="text/javascript">
	    	$(document).on("pagecreate","#index",function(){
 					$('.slick').slick({
						    	dots:true,
						    	autoplay:true,
						    	autoplaySpeed:2000,
						    	arrows:false,
						    }); 
					
					});
					$(window).load(function(){
						$(".loading").fadeOut()
					})
	    </script>
	</div>
</body>
</html>
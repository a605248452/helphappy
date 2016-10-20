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
	<!-- <div class="loading"><img src="{{host}}public/images/ajax-loader.gif"/></div> -->
	<div data-role="page"  class="touzi jilu" id="jilu">
		<header data-role="header" data-position="fixed">
			<h3>赚不停</h3>
		</header>
		<link media="screen" href="{{host}}public/statics/grade.css" type="text/css" rel="stylesheet" /> 
		<script src="{{host}}public/statics/jquery-latest.pack.js" type="text/javascript"></script> 
		<script src="{{host}}public/statics/grade.js" type="text/javascript"></script> 
		<div class="ui-content" data-role="content"> 
<div id="box"> 
	<script src="{{host}}public/js/jquery-1.11.0.min.js"></script>
<script src="{{host}}public/js/Rotate.js"></script>
<style>
*{padding:0; margin:0;}
.lotteryMain{ width:100%; padding:20px 0; }
.lotteryBg{ width:520px; height:520px; margin:0 auto; background:url({{host}}public/images/lotteryBg.jpg) no-repeat; position:relative; overflow:hidden;}
#run{ width:153px; height:214px; position:absolute; left:50%; top:50%;  margin-left:-76px; margin-top:-107px; z-index:1; transform:rotate(0deg); -ms-transform:rotate(0deg); }
#btn_run{ width:125px; height:125px; background:url({{host}}public/images/btn_start.png) no-repeat; border:none; outline:none; position:absolute; left:50%; top:50%; margin-left:-62px; margin-top:-62px; z-index:2;cursor:pointer;}
</style>
</head>

<body>
<section class="lotteryMain">
	<div class="lotteryBg">
    	<img id="run" src="{{host}}public/images/start.png" width="10px" />
        <input id="btn_run" type="button" value="" />
    </div>
</section>  
<script>
$(function(){ 
     $("#btn_run").click(function(){
		$("#btn_run").attr('disabled',true).css("cursor","default"); 
        lottery(); 
    });
}); 
function lottery(){ 
    $.ajax({ 
        type: 'get', 
        url: '{{host}}public/js/json.js', 
        dataType: 'json', 
        cache: false, 
        error: function(){return false;}, 
        success:function(obj){
				$("#run").rotate({ 
					duration:3000, //转动时间 
					angle: 0, //默认角度
					animateTo:360*6+obj.rotate, //转动角度 
					easing: $.easing.easeOutSine, 
					callback: function(){ 
						alert(obj.results); 
						$("#btn_run").attr('disabled',false).css("cursor","pointer"); 
					} 
				});
        } 
    }); 
};
	
</script>  
</body>
</html>

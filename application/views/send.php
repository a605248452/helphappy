<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>赚不停</title>
</head>

<!-- 地图样式 -->
<style type="text/css">
	body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
	#allmap{width:100%;height:100%;}
	p{margin-left:5px; font-size:14px;}
</style>

<!-- 地图ak -->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT"></script>

<!-- 遮罩层样式 -->
<style type="text/css">     
    .mask {       
            position: absolute; top: 0px; filter: alpha(opacity=60); background-color: #777;     
            z-index: 1002; left: 0px;     
            -moz-opacity:0.5;     
        } 
</style>
<body>
	<div class="loading"><img src="{{host}}public/images/ajax-loader.gif"/></div>
	<!-- 遮罩层 -->
	<div id="mask" class="mask" style="display:none;">
		<div id="allmap"></div>
	</div>
	<div data-role="page" class="touzi" id="touzi">
		<!--jqmb需要把所以东西放在page div内-->
		 <link rel="stylesheet" href="{{host}}public/css/jquery.mobile-1.4.5.min.css"/>
   		 <link rel="stylesheet" href="{{host}}public/css/style.css"/>
   		 
   		<!--jqmb需要把所以东西放在page div内--> 
		<header data-role="header" data-position="fixed">
			<a href="{{host}}public/#" data-rel="back" class="ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon" data-transition="slide" data-direction="revserse">返回</a> 
			<h3>发单</h3>
		</header>
		<div class="ui-content" data-role="content">
			 <div data-role="main" class="ui-content">
			    <form method="post" action="demo_form.php">
			      <div class="ui-field-contain">
			        <label for="fullname">标题：</label>
			        <input type="text" name="fullname" id="fullname"> 
			        <label for="fullname">详情：</label>
			        <textarea name="" id="" cols="30" rows="10"></textarea>   
			        <label for="fullname">个人联系方式</label>
			        <input type="text" name="call" id="fullname"> 
			        <label for="bday">结束时间：</label>
			        <input type="date" name="bday" id="bday">
			        <label for="email">E-mail:</label>
			        <input type="email" name="email" id="email" placeholder="你的电子邮箱..">
					<label for="fullname">本单金额：</label>
			        <input type="text" name="list_money" id="fullname"> 
			        <label for="fullname">标违约金额：</label>
			        <input type="text" name="violate_money" id="fullname"> 
			        <input type="button" name="fullname" onclick="showMask()" id="address" value="任务地址">
			        <input type="text" name="address" id="fullname">
			        <label for="fullname">约定交易地址：</label>
			        <input type="text" name="fullname" id="end_address" value=""> 
			      </div>
			      <input type="submit" data-inline="true" value="提交">
			    </form>
			  </div>
			</div>
		</div>
		<script src="{{host}}public/js/jquery.min.js"></script>
   		<script src="{{host}}public/js/jquery.mobile-1.4.5.min.js"></script>
   		<script type="text/javascript">
   			$(window).load(function(){
					$(".loading").fadeOut();
					//var id = 1;
					//location.href="{{host}}public/touzi.html?id=1";
				})
   		</script>
   		<script>
   			//定位当前位置
   // 			$(function(){
			//   if (navigator.geolocation)
			//     {
			//     navigator.geolocation.getCurrentPosition(showPosition);
			//     }
			//   else{x.innerHTML="Geolocation is not supported by this browser.";}

			// })
			// function showPosition(position)
			//   {
			//           $.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+position.coords.latitude+','+position.coords.longitude+'&output=json&pois=1',function(msg){
			//           	$("#address").val(msg.result.formatted_address)
			//           },'jsonp')
			//   }
   		</script>
		<script>
			$("#end_address").click(function(){

			})
		</script>
		<pre class="html" name="code"><script type="text/javascript">     
		    //兼容火狐、IE8   
		    //显示遮罩层    
		    function showMask(){     
		        $("#mask").css("height",$(document).height());     
		        $("#mask").css("width",$(document).width());     
		        $("#mask").show();     
		    }  
		    //隐藏遮罩层  
		    function hideMask(){     
		          
		        $("#mask").hide();     
		    }  
		</script>  
		<script>
			//获取经纬度
			    $(function(){  
			      if (navigator.geolocation)  
			        {  
			        navigator.geolocation.getCurrentPosition(showPosition);  
			        }  
			      else{x.innerHTML="Geolocation is not supported by this browser.";}  
			      
			    })  

				// 百度地图API功能
				function showPosition(position)
				{
						// 百度地图API功能
				var map = new BMap.Map("allmap");
				map.centerAndZoom(new BMap.Point(position.coords.longitude,position.coords.latitude),8);
				// map.centerAndZoom(point,12);
				setTimeout(function(){
						map.setZoom(14);   
					}, 2000);  //2秒后放大到14级
					map.enableScrollWheelZoom(true);
				var geoc = new BMap.Geocoder();    

				map.addEventListener("click", function(e){ 
					//经纬度获取       
					alert(e.point.lng + ", " + e.point.lat);
					$.get('http://api.map.baidu.com/geocoder/v2/?ak=ERtymnt2XAAWdaDdLGE60jqk0pm4Q4kT&callback=renderReverse&location='+e.point.lat+','+e.point.lng+'&output=json&pois=1',function(msg){
				      	alert(msg.result.formatted_address)
				    },'jsonp')       
				});
				}
		</script>
	</div>
	
</body>
</html>
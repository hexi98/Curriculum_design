<!-- 
*****************************

author：hexi
time: 2018/06
function:首页内容

*****************************
-->
<!-- 首页 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>校园114党员服务中心</title>
	<link rel="stylesheet" type="text/css" href="../css/ke.css">
</head>

<body style="background-color: #f5f5f5">
	<!-- 上方导航栏 首页 部门介绍 联系方式 。。。-->
	<?php
	include("header.php");
	?>

<!-- 巨幕 -->
	<div class="jumbotron">
		<!-- 校园114党员服务中心 名称 -->
		<h2 style="color: white"> 校园114党员服务中心 </h2>
		<p style="color: white" >一个热❤️的公众号</p>
		<p><a class="btn btn-primary bth-lg" href="#" role="button">关注我们</a> </p>
	</div>
<!-- 	<hr> -->
<!-- <主要信息> -->
<div id="mainbar"> 
	<!-- 图片区域 -->
	<div class="mainPictures">
		<div class="media">
			<!-- 舆情上报 -->
			<div class="BlockItem" id="item1">

					<a href="Feedbackindex.php">反馈舆情、意见建议</a> 

			</div>
			<div class ="BlockItem" id="item2">
				<div class="item2">
					<a href="SocialPractice.php">暑期社会实践（支教）</a>
				</div>
			</div>
			<div class="BlockItem" id="item3">
	
				<a href="Teacher.php">老师联系方式查询</a>
			</div>
			<div class="BlockItem" id="item4">
	
				<a href="#">四六级成绩查询</a>
			</div>

			</div>
		</div>
	
	</div>

	 <hr>
<!-- 党建消息 -->
		<div class="media1">
			 	<div class="BlockItem" id="item5">
			 		
			 		<a class="media-ending" href="http://dangjian.people.com.cn/GB/136058/415590/index.html">|| 聚焦十九大 ||</a>
			 	</div>			 
		</div>
		<div class="media2">
			 		<div class="BlockItem" id="item6">
					  		<a class="media-ending" href="http://dangjian.people.com.cn/">|| 党建要闻 ||</a>

			 </div>
	
		</div>
		<div class="media3">
			 	<div class="BlockItem" id="item7">
					
						<h5 class="title">
					  		<a class="media-ending" href="http://theory.people.com.cn/">|| 理论学习 ||</a>
					  	</h5>
					</div>
		</div>
			<div class="media4">
			 	<div class="BlockItem" id="item8">
						
						<h5 class="title">
					  		<a class="media-ending" href="http://cpc.people.com.cn/" >|| MORE ||</a>
					  	</h5>
					</div>
		</div>
		<br>
<!-- 底部菜单 向上弹出式菜单-->

<?php
	include("../html/footer.html");
?>


		
</div> <!-- end of mainbar -->	
<!-- <hr> -->
	
<!-- 页脚 -->
<!-- <?php 
// include("footer.html");
?> -->

</body>
</html>
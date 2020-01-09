<!-- *****************************

author：hexi
time: 2018/06
function:后勤信息

*****************************  -->

<!DOCTYPE html>
<html>
<head>
	<title>后勤部查询</title>
	<style type="text/css">
		.breadcrumb{
			margin-top: 3.5em;
		}
		.Message{
			margin-bottom: 4em;
		}
		.jumbotron{
			padding: 1em;
			/*background-image: url(../image/backGround.jpeg);*/
			/*background-image: url(../image/FBBI.jpeg);*/
			background-color: blue;
		}
		body
		{
			background-color: #f5f5f5;
			width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>
<!-- 导航栏 -->
<?php
include("header.php");
?>
<ol class="breadcrumb">
      <li><a href="curriculum_design.php">首页</a></li>
      <li class="active">后勤部门联系方式</a></li>
</ol>
			
<div class="jumbotron" style="color: white;">
	<p>
		后勤是一个在我们广大师生身后默默奉献的部门
	</p>
	<p>
		他们用自己的汗水来装扮这个校园，为我们提供了一个舒适的环境
	</p>
</div>
<div class="Message">
	<img src="../image/LogisticsImage.png" style="width: 100%;height: 100%">
</div>

<!-- 页脚 -->
<?php 
	include("../html/footer.html");
 ?>
</body>
</html>
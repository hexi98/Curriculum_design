<!-- 
*****************************

author：hexi
time: 2018/05
function:舆情反馈表主页面

***************************** 
-->  
<!-- 舆情反馈表 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>

	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>舆情反馈📖</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/Feedback.css">
	<style type="text/css">
		.breadcrumb{
			margin-top: 3.5em;
		}
	</style>
</head>
<?php
	include("header.php");
?>
<body>
	
	  <ol class="breadcrumb">
	      <li><a href="curriculum_design.php">首页</a></li>
	      <li class="active">舆情反馈</a></li>
   	 </ol>
	<!-- 表头：你的每一份反馈，都能促进校园的美好。 -->
		<!-- 巨幕 -->
	<div class="jumbotron">
		<!-- 校园114党员服务中心 名称 -->
		<h2 style="color: white"> 你的每一份反馈，都能促进校园的美好 </h2>
		<p style="color: white; float: right;" >--校园114党务中心</p>
	</div>
	<!-- 表单格式 -->
	<form action="Feedback.php" method="post" class="FeedbackForm">

		<!-- 主要内容 -->
		<main>

	<!-- 选择反馈的项：食堂、寝室、学习、生活（其他） -->
			<div class="classification">
				<div id="Types">
					 <div class="Type-txt" > ◉ 
					 请选择需要反馈的类别：</div>
					 <div class="Type-cs">
					 	<ul>
					 		<li><input type="radio" name="FBtype" value="食堂">食堂
					 		<input type="radio" name="FBtype" value="寝室">寝室</li>
					 		<li><input type="radio" name="FBtype" value="学习">学习
					 		<input type="radio" name="FBtype" value="生活">生活</li>
					 		<li><input type="radio" name="FBtype" value="其他">其他</li>
					 	
					 	</ul>
					</div> <!-- end of "panel-body" -->
				</div>
			</div>
			<hr style="border-top:1px dashed grey">

	<!-- 反馈的意见：文字框，内容不超过500字 -->
			<div class="public-sentiment">
				<div  id="mainAdvice">
					<div class="Advice-txt" >◉ 请填写你的意见：</div>
					<div class="Advice-cs">
						<textarea class="advice" name="FBcontent" maxlength="500" style="width: 100%;height: 100px;">
						</textarea>
					</div>
				</div>
			</div>
			<div id="FBsubmit">
			<input type="submit" name="submit" value="提交" class="FBsubmitButton" >
		</div>
	</main>

	<!-- 页脚：©️ 何熹同学 -->
<?php
		include("../html/footer.html");
	?>
</form>
</body>
</html>
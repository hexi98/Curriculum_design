<!--
*****************************

author：hexi
time: 2018/05
function:社会实践主页面

***************************** 
-->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>暑期社会实践🎹🎼</title>
	<link rel="stylesheet" type="text/css" href="../css/SocialPractice.css">
	<style type="text/css">
		.breadcrumb
			{
			  margin-top: 3.5em;
			}
	</style>
</head>
<body style="background-color: #f5f5f5">


	<?php
	include("header.php");
	?>
	<ol class="breadcrumb">
		      <li><a href="curriculum_design.php">首页</a></li>
		      <li class="active">社会实践</a></li>
	 </ol>
	 <div class="activity-pictures">
			<iframe src="../html/picture.html"></iframe>
		</div>

		<br>
		<div class="SubmitButton">
			<a class="btn btn-success bth-lg" href="SocialPracticeApplicationFrom.php" role="button">我要报名</a>
		</div>
	<!-- 主要内容：时间、地点、支教内容、注意事项 -->
	<div class="TeachingInfro">
		<hr>
		<p class="Top1" >
			支教信息 
		</p>

		<div class="Infro1">

			<div class="time" >
				<h5 >
					支教时间：
				</h5>
				<P>
					七月中下旬(短学期之后)为期两周.
				</P>
			</div>
			<div class="place">
				<h5>
					支教地点:
				</h5>
				<P>
					宁波马岙村<br>.
				</P>
			</div>
			<div class="subject">
				<h5>
					支教内容:
				</h5>
				<p>
					语文、数学、英语、音乐、体育等基础科目<br>.
				</p>
			</div>
			<div class="attention">
				<h5>
					注意事项
				</h5>
				<p>
					需要自带席子被子等日常用品<br>备好防虫剂
				</p>
			</div>
	<hr>
	</div>

		<p class="Top2">
			<a href="Tweet.php">支教风采</a>
			
		</p>

		<div class="Guide">
				<p  readonly class="www">
				如果你即将面对一群野蛮生长的孩子，<br>你是否会把自己的疼惜送给他们？
				<br>
				<br>
				如果有一天，他们被困在了书本之外，<br>你是否愿意给他们一条阶梯？<br>
				如果有一天你不愿再见到繁市的浮夸，<br>是否会回归纯真，<br>望望乡下为你而绽的笑脸？<br><br>
				如果你知道，<br>你和他们的未来从此会有所交织，<br>你还能无谓地挥霍青春吗？<br><br>
				我们承载着老师和孩子们的希望，<br>带着如火的热情，<br>开始一段奇妙的旅程，<br>进行一次灵魂的碰撞，<br>我们的精神将会得到一场无与伦比的升华！<br><br>
				</p>
			</div>
</div>
	<!-- 页脚 -->
	<hr>

	

</body>
<?php
	include("../html/footer.html");
?>
<!-- <script type="text/javascript" charset="utf-8" src="SocialPractice.js"></script> -->
</html>
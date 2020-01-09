<!--
*****************************

author：hexi
time: 2018/05
function:社会实践报名表单

***************************** 
-->
<!DOCTYPE html>
<html lang="zh-CN">
<head>

	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>报名表📖</title>
	<link rel="stylesheet" type="text/css" href="../css/SocialPracticeApplicationFrom.css">
	<style type="text/css">
		.breadcrumb{
			width: 100%;
			background-color: rgba(255,255,255,0);
			position: relative;
			top: -8em;
		}
	</style>
</head>

<body>
	 <?php
		include("header.php");
	?>
	<!-- 页面路径 -->
<ol class="breadcrumb">
	<li><a href="curriculum_design.php">首页</a></li>
    <li><a href="SocialPractice.php">社会实践</a></li>
    <li class="active">社会实践报名</li>
</ol>

	<div class="mainBody">

		<div class="Title1">
			<h4>
				暑期社会实践报名
			</h4>
		</div>
	<form action="Appform.php", method="post">
		<!-- 学号 -->
		<div class="ApplicantsSno">
			<dl class="ApplicantsSno-item">
				<dt class="ApplicantsSno-item-txt">
					学号：
				</dt>
				<dd class="ApplicantsSno-item-cs">
					<input type="text" name="AppSno" style="color: black">	
				</dd>
			</dl>
		</div>
		
		<!-- 兴趣爱好 -->
		<div class="Hobbies">
			<dl class="Hobbies-item">
				<dt class="Hobbies-item-txt">
					兴趣爱好：
				</dt>
				<dd class="Hobbies-item-cs">
					<input type="text" name="AppHoppy" style="color: black">
				</dd>
			</dl>
		</div>

		<!-- 特长 -->
		<div class="strength">
			<dl class="strength-item">
				<dt class="strength-item-txt">
					特长：
				</dt>
				<dd>
					<input type="text" name="AppStrength" style="color: black">
				</dd>
			</dl>
		</div>
		<!-- 感兴趣的支教科目 -->
			<div class="subject">
			<dl class="strength-item">
				<dt class="strength-item-txt">
					感兴趣的支教科目：
				</dt>
				<dd>
					<!-- <input type="text" name="AppSubject" style="color: black"> -->
					<select name="AppSubject" class="AppSubject-item">
						<option value="语文">语文</option>
					<option selected="selected" value="数学">数学</option>
					<option value="英语">英语</option>
					<option value="计算机">计算机</option>
					<option value="体育">体育</option>
					<option value="科学">科学</option>
					<option value="音乐">音乐</option>
					<option value="美术">美术</option>
					</select>

				</dd>
			</dl>
		</div>

		<!-- 立刻报名 -->
		<div class="submit" >
			<dt>
				<dd>
					<!-- <input type="submit" name="提交按钮" value="立刻报名" style=""> -->
					<input class="submitButton" type="submit" name="submit" value="立刻报名" >
				</dd>
			</dt>
		</div>
		<!-- 取消报名 -->
		<div class="DeleteSubmit">
				<a href="SocialPractice.php">
					<span style="color: rgba(255,255,255,0.5);">不报名了，我要回家。</span></a>	
		</div>
		
	</form>
		
	</div>  <!-- end of mainBody -->
<?php 
	include("../html/footer.html");
?>		
	
</body>
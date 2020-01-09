<!-- 
*****************************

author：hexi
time: 2018/05
function:注册表单主页面

*****************************  
-->
<!-- 注册表单 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>114注册👤</title>
	<!-- <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="../css/RegistrationForm.css">
</head>
<body>
	<?php
		include("header.php");
	?>
<div id="container">
<!-- 头部：114图标+名字 -->

		<div class="HeadSign">
			<dl class="114">
			<!-- 114图标 -->
			<img src="../image/114标志.png" alt="114标志">
			<!-- 114名字 -->
			<span style="color: white;">
				校园114党员服务中心
			</span>
			</dl>
		</div>

<!-- 中间主要内容 -->
<main>
<form  action="reg.php" method="post" >
	<!-- class="regForm" -->
	<!-- id="regMain" -->
		<!-- 姓名 -->
	<div id ="name">
		<dl class="name-item">
			<dt class="name-item-txt" id="prompt" >
				◉ 名字/Name
			</dt>
			<dd class="name-item-cs" >
				<input type="text" name="name" id="nameIpt" >
				<div id="nameTips" class="tips">
					<span class="txt-tips">
					请填写你的真实姓名</span>
				</div>
			</dd>
		</dl>
	</div>
		<!-- 班级 -->
	<div id="class">
		<dl class="class-item">
			<dt class="class-item-txt" id="prompt">
				◉ 班级/Class
			</dt>
			<dd class="class-item-cs">
				<!-- <input type="text" name="class" id="mainClassIpt"> -->
				<select name="RgClass" class="RgClass-item" >
					<option value="计算机161">计算机161</option>
					<option selected="selected" value="计算机162">计算机162</option>
					<option value="计算机163">计算机163</option>
					<option value="计算机164">计算机163</option>
					<option value="软工161">软工161</option>
					<option value="软工162">软工162</option>
					<option value="物联网161">物联网161</option>
					<option value="物联网162">物联网161</option>
					<option value="物联网162">物联网161</option>
					<option value="信息171">信息171</option>
					<option value="信息172">信息172</option>
					<option value="信息173">信息173</option>
					<option value="信息174">信息174</option>
					<option value="信息175">信息175</option>
					<option value="信息176">信息176</option>
					<option value="信息177">信息177</option>
					
				</select>
			</dd>
		</dl>
	</div>

		<!-- 学号 -->
	<div id="Sno">
		<dl class="Sno-item">
			<dt class="Sno-item-txt" id="prompt">
				◉ 学号/Sno
			</dt>
			<dd class="Sno-item-cs">
				<input type="text" name="sno" value="" id="mainSnoIpt">
				<div id="mainSnoTips" class="tips">
					<span class="txt-tips">
					请输入13个字符的学号</span>
				</div>
			</dd>
		</dl>
	</div>

		<!-- 密码 -->
	<div id="PassWord">
		<dl class="PassWord-item">
			<dt class="PassWord-item-txt" id="prompt">
				◉ 输入密码
			</dt>
			<dd class="PassWord-item-cs">
				<input type="password" name="mainPassword" id="mainPwdIpt" style="ime-mode:disabled">
				<div id="mainPwdTips" class="tips">
					<span class="txt-tips">
					6~16个字符，区分大小写</span>
				</div>
			</dd>
		</dl>
	</div>
	<!-- 确认密码 -->
	<div id="Confirm">
		<dl class="Confirm-item">
			<dt class="Confirm-item-txt" id="prompt">
				◉ 确认密码
			</dt>
			<dd class="Confirm-item-cs">
				<input type="password" name="cfmPwd" id="mainCfmPwdIpt">
				<div id="mainCfmPwdTips" class="tips">
				<span class="txt-tips">
					请再次填写密码
				</span>
				</div>
			</dd>
		</dl>
	</div>
	<!-- 手机号 -->
	<div id ="mobile">
		<dl class="Mobile-item">
			<dt class="Mobile-item-txt" id="prompt">
				◉ 手机号
			</dt>
			<dd class="Mobile-item-cs">
				<input type="text" name="mobile" id="mainMobileIpt">
				<div id="mainMobileTips" class="tips">
				<span class="txt-tips">
					忘记密码时，可以通过该手机号码快速找回密码.
				</span>
				</div>
			</dd>
			
		</dl>
	</div>
		<!-- 立即注册 -->
	<div id="register">
	
				<input type="submit" name="submit" value="立即注册" >
				<!-- id="mainRegA" -->
		
	</div>
	<!-- 页脚 版权署名-->
	<?php
		include("../html/footer.html");
	?>
</form>
	
</main>

</div>

	<script type="text/javascript" src="../js/regMain.js"></script>

</body>
</html>
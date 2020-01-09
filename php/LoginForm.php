<!-- 
*****************************

author：hexi
time: 2018/05
function:登录表单主页面

*****************************
 -->
<!-- 登录表单 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>114登录👩‍💻</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/LoginForm.css">
</head>

<body>
	<?php 
		include("header.php");
	?>
<div id="container">
	

<!-- 头部：114图标+名字 -->
	<div class="HeadSign">
		<dl class="114">
			<!-- <!114图标 -->
			<img src="../image/114标志.png" alt="114标志">
			<!-- 114名字 -->
			<span style="color: white;">
				校园114党员服务中心
			</span>
		</dl>
	</div> 
<!-- 中间主要内容 -->

	<form method="post" action="login.php">
			<!-- 学号 -->
			<div id="Sno">
				<dl class="Sno-item">
					<dt class="Sno-item-txt">
						学号/Sno
					</dt>
					<dd class="Sno-item-cs">
						<input type="text" name="LoginSno" style="color: black">
					</dd>
				</dl>
			</div>

				<!-- 密码 -->
			<div id="PassWord">
				<dl class="PassWord-item">
					<dt class="PassWord-item-txt">
						输入密码
					</dt>
					<dd class="PassWord-item-cs">
						<input type="password" name="LoginPwd" style="color: black">
						
					</dd>
					<span style="font-size: 5px">
							<a href="#" class="forgetPwd"> 忘记密码？</a>
						</span>
				</dl>
			</div>
			<!-- 角色身份选项 -->
			<!-- 管理员都是学生 单选框的name值要相同才能实现单选-->
			<div id="RolesChoice">
				<input type="radio" name="roles" value="普通用户">普通用户
				<input type="radio" name="roles" value="管理员">管理员
			</div>

				<!-- 立即登录 -->
			<div id="LoginNow">

					<input type="submit" name="submit" value="立即登录" class="LoginButton" >
				
			</div>
		</div> <!-- end of container -->
		<!-- 页脚 版权署名-->
			<?php
				include("../html/footer.html");
			?>
		</form>


</body>
</html>
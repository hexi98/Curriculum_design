<!DOCTYPE html>
<html lang="zh-CN">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>校园114党员服务中心</title>
	
	<link rel="stylesheet" type="text/css" href="../css/a.css">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	<!-- <script type="text/javascript" src="../js/bootstrap.js"></script> -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #f5f5f5">
<header class="header">
       
	 <div class="links">
			<?php
			        // 在php.ini里 session.auto_start = 1，所以不用在手工启动
					// if(isset($_SESSION["user"]))
					// 	{
					// 		// echo "欢迎你,".$_SESSION["user"]." ";
					// 		echo "欢迎你，"."<a href='Personal.php'>".$_SESSION["user"]."</a>"." ";
					// 		echo"<a href='php/logout.php'>退出</a>"." ";
					// 	}
					// else
					// {
					// 	echo "请登陆&nbsp";
					// 	echo "<a href='LoginForm.php'>登录</a>&nbsp";
					// 	echo"<a href='RegistrationForm.php'>注册</a>&nbsp";
					// }
					 ?>
		<a href="A_logout.php">退出登录</a>
	</div><!-- // links end -->
</header><!-- // header end -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网易邮箱注册</title>
	
	<link rel="stylesheet" type="text/css" href="../css/A_RegistrationForm.css">
	
</head>
<body>
	<!-- 获取id参数 -->
	
	<?php $AFId=$_REQUEST["AFId"];?>
	
	<section class="content" id="mainSection">
		<header class="content-tit">
			<h1>编辑用户信息</h1>
		</header><!-- // content title end -->

		<div id="mMaskD" class="mainBody-wp">
			<!-- 引入编辑页面 -->
            <?php include("editform-S.php");?>
			<!--  -->
			<div class="clear"></div> <!-- // remove float end -->
		</div>
	</section>
	
	

</body>
</html>
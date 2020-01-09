<!--
 *****************************

author：hexi
time: 2018/05
function:个人信息修改主页面

***************************** 
-->  
<!-- 个人信息修改 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>用户个人信息修改</title>
	<link rel="stylesheet" type="text/css" href="../css/Personal.css">
	<style type="text/css">
		.breadcrumb
		{
			margin-top: 3.5em;
		}
	</style>
</head>
<body >
	<?php
	include("header.php");

	include("conn.php");


	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	$id=$_SESSION["Sid"];
	$sql="select name,class,sno,password,mobile from student where sid=?";
	$stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"i", $id);
    mysqli_stmt_bind_result($stmt,$name,$class,$sno,$password,$mobile);
    // echo $class;
    mysqli_stmt_fetch($stmt);
	?>

	 <ol class="breadcrumb">
      <li><a href="curriculum_design.php">首页</a></li>
      <li class="active">个人信息修改</a></li>
    </ol>
		
<!-- <div class="container"> -->
		
	<form action="Person_editform_db.php?sid=<?php echo $id;?>" method="post" >
		<!-- 主要文字信息区 -->
		<div class="MainMessage">
			<!-- 姓名 -->
			<div id="User_Name">
				<dl class="User_Name-item">
					<dt class="User_Name-item-txt">
						◎ 姓名:
					</dt>
					<dd class="User_Name-item-cs">
						<input type="text" name="UserName" readonly value="<?php echo $_SESSION["user"];?>" >
					</dd>
				</dl>
			</div>
			<!-- 学号 -->
			<div id="User_Sno">
				<dl id="User_Sno-item">
					<dt class="User_Sno-item-txt">
						◎ 学号:
					</dt>
					<dd class="User_Sno-item-cs">
						<input type="text" name="UserSno" readonly value="<?php echo $_SESSION["Sno"];?>">
					</dd>
				</dl>
			</div>
			
			<!-- 所在班级 -->
			
				<!-- 	<div id="User_Class">
				<dl class="User_Class-item">
					<dt class="User_Class-item-txt">
						◎ 班级:
					</dt>
					<dd class="User_Class-item-cs">
						<input type="text" name="UserClass" readonly value="<?php ;?>" >
					</dd>
				</dl>
			</div> -->
			<!-- 原始密码 -->
			<div id="OgPassWord">
				<dl class="OgPassWord-item">
					<dt class="OgPassWord-item-txt">
						◎ 原始密码:
					</dt>
					<dd class="OgPassWord-item-cs">
						<input type="password" name="OriginalPassWord" >
					</dd>
				</dl>
			</div>
			<!-- 新密码 -->
			<div id="NewPassWord">
				<dl class="NewPassWord-item">
					<dt class="NewPassWord-item-txt">
						◎ 更新密码:
					</dt>
					<dd class="NewPassWord-item-cs">
						<input type="password" name="NewPassword">
					</dd>
				</dl>
			</div>
			<!-- 确认密码 -->
			<div id="CfmPassWord">
				<dl class="CfmPassWord-item">
					<dt class="CfmPassWord-item-txt">
						◎ 确认密码:
					</dt>
					<dd class="CfmPassWord-item-cs">
						<input type="password" name="cfmPassword">
					</dd>
				</dl>
			</div>
			<!-- 手机号 -->
			<div id="MobilePhone">
				<dl class="MobilePhone-item">
					<dt class="MobilePhone-item-txt">
						◎ 手机号:
					</dt>
					<dd class="MobilePhone-item-cs">
						<input type="text" name="mobilePhone" value="<?php echo  $_SESSION["Mobile"];?>">
					</dd>
				</dl>
			</div>

		</div><!--  end of MainMessage -->

		<!-- 头像区 -->
		<div class="HeadShot">
			
			<!-- <img src="image/color/5aa7c5b804a1e.jpg" class="SideImage"> -->
		</div>


	<!-- 提交按钮 -->
			<div class="save" >
				<dt>
					<dd>
						<!-- <input type="submit" name="提交按钮" value="立刻报名" style=""> -->
						<input type="submit" name="submit" value="保存修改" class="saveButton">
						
					</dd>
				</dt>
			</div>
			<hr>

	</form>
<!-- </div> -->
	<!-- footer -->
	
</body><?php
		include("../html/footer.html");
	?>
</html>
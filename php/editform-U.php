
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网易邮箱注册</title>
	
	<link rel="stylesheet" type="text/css" href="../css/A_RegistrationForm.css">
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="shortcut icon"  href="images/favicon.ico"> -->
</head>
<body>
<?php 
	// 引入数据库
	include("conn.php");
	$sql="select name,class,sno,password,mobile from student where sid=?";
	$stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"i", $sid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt,$name,$class,$sno,$password,$mobile);
    mysqli_stmt_fetch($stmt);//获取结果集的记录行

	
 ?>

<main>
<form  action="editform_db_U.php?sid=<?php echo $sid;?>" method="post" class="edit">
		<!-- 姓名 -->
	<div id ="name">
		<dl class="name-item">
			<dt class="name-item-txt" id="prompt" >
				名字/Name
			</dt>
			<dd class="name-item-cs" >
				<input type="text" name="name" id="nameIpt" value="<?php echo $name; ?>" readonly="readonly">
				
			</dd>
			<dd>
				<div id="nameTips" class="tips">
					<span class="txt-tips">
					请填写你的真实姓名</span>
				</div>
			</dd>
		</dl>
	</div>
		
	<div id="class">
		<dl class="class-item">
			<dt class="class-item-txt" id="prompt">
				班级/Class
			</dt>
			<dd class="class-item-cs">
				<input type="text" name="class" id="mainClassIpt" value="<?php echo $class; ?>" readonly="readonly">
			</dd>
			<dd>
				<div id="mainClassTips" class="tips">
					<span class="txt-tips">
					请输入您所在的班级名称</span>
				</div>
			</dd>
		</dl>
	</div>

		
	<div id="Sno">
		<dl class="Sno-item">
			<dt class="Sno-item-txt" id="prompt">
				学号/Sno
			</dt>
			<dd class="Sno-item-cs">
				<input type="text" name="sno" id="mainSnoIpt" value="<?php echo $sno; ?>" readonly="readonly">
				
			</dd>
			<dd>
				<div id="mainSnoTips" class="tips">
					<span class="txt-tips">
					请输入13个字符的学号</span>
				</div>
			</dd>
		</dl>
	</div>

		
	<div id="PassWord">
		<dl class="PassWord-item">
			<dt class="PassWord-item-txt" id="prompt">
			输入密码
			</dt>
			<dd class="PassWord-item-cs">
				<input type="password" name="mainPassword" id="mainPwdIpt" style="ime-mode:disabled">
				
			</dd>
			<dd>
				<div id="mainPwdTips" class="tips">
					<span class="txt-tips">
					6~16个字符，区分大小写</span>
				</div>
			</dd>
		</dl>
	</div>

	<div id="Confirm">
		<dl class="Confirm-item">
			<dt class="Confirm-item-txt" id="prompt">
				确认密码
			</dt>
			<dd class="Confirm-item-cs">
				<input type="password" name="cfmPwd" id="mainCfmPwdIpt">
				
			</dd>
			<dd>
				<div id="mainCfmPwdTips" class="tips">
				<span class="txt-tips">
					请再次填写密码
				</span>
				</div>
			</dd>
		</dl>
	</div>
	
	<div id ="mobile">
		<dl class="Mobile-item">
			<dt class="Mobile-item-txt" id="prompt">
				手机号
			</dt>
			<dd class="Mobile-item-cs">
				<input type="text" name="mobile" id="mainMobileIpt" value="<?php echo $mobile; ?>" readonly="readonly">
				
			</dd>
			<dd>
				<div id="mainMobileTips" class="tips">
				<span class="txt-tips">
					忘记密码时，可以通过该手机号码快速找回密码.
				</span>
				</div>
			</dd>
		</dl>
	</div>
	<div id="register">
		<dt>
			<dd>
				<input type="submit" name="submit" value="保存修改" >
				<!-- id="mainRegA" -->
			</dd>
		</dt>
	</div>
</form>
</main>

<?php 
// 关闭数据库连接
     mysqli_stmt_close($stmt);
     mysqli_close($conn);
?>
</body>
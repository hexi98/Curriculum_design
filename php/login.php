<!-- 登录表单 -->
<!-- <?php
	// ob_start();
	// session_start();
?> -->
<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	// 引入重定向函数
	include("functions.php");
	// 获取学生的信息
	$id = $_GET["sid"];
	$role =$_REQUEST["roles"];
	// 判断学号是否赋值
	if(!isset($_REQUEST['LoginSno']))
	{
		page_redirect(0,null,"请填写你的学号！");

	}
	// 判断密码是否赋值
	 else if(!isset($_REQUEST['LoginPwd']))
	{
		page_redirect(0,null,"请填写你的密码！");

	}
	// 判断是否选择角色
	 else if(!isset($_REQUEST["roles"]))
	{
		page_redirect(0,null,"请选择你的身份！");
	}
	// 如果角色选的是普通用户

	// 判断学号和密码是否赋值
	else if($_REQUEST["roles"]=="普通用户")
	{
		$LogSno = $_REQUEST["LoginSno"];
		// 加密密码
		$LogPwd = md5($_REQUEST["LoginPwd"]);

		//连接数据库
		include("conn.php");
		$sql = "SELECT * FROM student where sno=? and password=?";
		// 使用索引数组取值
		$stmt = mysqli_prepare($conn,$sql);
		// 绑定学号和密码
		mysqli_stmt_bind_param($stmt,"ss",$LogSno,$LogPwd);
		
		// 创建一个结果集
		$result=mysqli_query($conn,"SELECT * FROM student where sno= $LogSno  ");
		// 如果结果集创建不成功，则出现相应的错误提示
		if(!$result)
		{
			printf("ERROR:%s", mysqli_error($conn));
		}

		// 执行
		mysqli_stmt_execute($stmt);

		// 查找数据库中的信息
		$row=mysqli_stmt_fetch($stmt);
		// 如果能匹配到，说明学号和密码有效
		if($row)
		{
			$ro=mysqli_fetch_array($result);
			$_SESSION["user"]=$ro["name"];//对会话变量的赋值 跨页面使用的变量 作用域范围：赋值->生效 窗口关闭->失效（跳转不会关闭）
			$_SESSION["Sno"]=$ro["sno"];
			$_SESSION["Mobile"]=$ro["mobile"];
			$_SESSION["Sid"]=$ro["sid"];
			// $_SESSION["Class"]=$ro["class"];
			page_redirect(1,"curriculum_design.php","欢迎登录，".$_SESSION["user"]);//跳转到首页上
		}
		else{
			// echo $LogPwd;
			page_redirect(0,null,"用户未注册！或密码输错！");
		}
	}

	else if($_REQUEST["roles"]=="管理员")
	{
		$LogSno = $_REQUEST["LoginSno"];
		// 加密密码
		$LogPwd = md5($_REQUEST["LoginPwd"]);

		//连接数据库
		include("conn.php");
		$sql = "SELECT * FROM administrator where ano=? and password=?";
		// 使用索引数组取值
		$stmt = mysqli_prepare($conn,$sql);
		// 绑定学号和密码
		mysqli_stmt_bind_param($stmt,"ss",$LogSno,$LogPwd);
		
		// 创建一个结果集
		$result=mysqli_query($conn,"SELECT * FROM administrator where ano= $LogSno  ");
		// 如果结果集创建不成功，则出现相应的错误提示
		if(!$result)
		{
			printf("ERROR:%s", mysqli_error($conn));
		}

		// 执行
		mysqli_stmt_execute($stmt);

		// 查找数据库中的信息
		$row=mysqli_stmt_fetch($stmt);
		// 如果能匹配到，说明学号和密码有效
		if($row)
		{
			page_redirect(1,"a.php","欢迎登录，".$_SESSION["user"]);//跳转到管理员页面上
		}
		else{
			// echo $LogPwd;
			page_redirect(0,null,"管理员未注册！或密码输错！");
		}
	}
	
	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
?>
<!-- 注册表单的php -->
<?php
//打开session文件
	// session_start();
 	// header("Content-Type:text/html;charset=utf-8");
	// error_reporting(E_ERROR | E_WARNING | E_PARSE);
	// 引入重定向函数
	include("functions.php");
// 注册学生的信息表
	// $id = $_GET["sid"];
	$name=$_REQUEST["name"];
	$class=$_REQUEST["RgClass"];
	$sno=$_REQUEST["sno"];
	$password=md5($_REQUEST["mainPassword"]);
	// echo $password;经测试，这样得到的pwd是正确的
	$mobile=$_REQUEST["mobile"];
	// echo $class;
// 获取输入的信息

//校验(属于编辑部分)

// 校验名字是否是在2-6个字符之内

// 校验班级

// 校验学号：是否是13位数字

// 校验密码：是否是6-16位数

// 校验确认密码

// 链接数据库
	include("conn.php");
// 校验相同的学号是否已经注册
	$sql = "select * from student where sno=?";
	$stmt = mysqli_prepare($conn,$sql);

	mysqli_stmt_bind_param($stmt,'s',$sno);
	mysqli_stmt_execute($stmt);
	$row=mysqli_stmt_fetch($stmt);
	if($row)
	{
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		page_redirect(2,null,"该学号已经被注册！");
	}

	// include ("conn.php");
// 将学生信息插入数据库
	$sql="INSERT INTO student(name,class,sno,password,mobile) 
		  VALUES(?,?,?,?,?)";

// 创建stmt对象 经测试，没有问题
	$stmt=mysqli_prepare($conn,$sql);
// 绑定数据,经测试，没有问题
	mysqli_stmt_bind_param($stmt,"sssss",$name,$class,$sno,$password,$mobile);
// 执行
	// echo md5($password);
	mysqli_stmt_execute($stmt);
	// 获取的输入信息，没问题！
	if(mysqli_affected_rows($conn)>0)
	{
	 	$_SESSION["user"]=$name;
		$_SESSION["Sno"]=$sno;
		$_SESSION["Mobile"]=$mobile;
	 	page_redirect(1,"curriculum_design.php","注册成功,".$_SESSION["user"]);
	}
    else
    {
    	echo "注册失败233！好好看表单要求！你肯定哪里写错了！";
    }


	mysqli_stmt_close($stmt);
	mysqli_close($conn);
?>

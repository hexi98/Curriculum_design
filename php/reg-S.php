<?php
//社会实践报名表单
 	header("Content-Type:text/html;charset=utf-8");
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

 	//引入重定向函数
 	include("functions.php");
 	// 获取输入的信息

 	if(isset($_REQUEST["AppSno"]))
 	{
 		$Sno=$_REQUEST["AppSno"];
	 	$Hoppy=$_REQUEST["AppHoppy"];
	 	$Strength=$_REQUEST["AppStrength"];
	 	$Subject=$_REQUEST["AppSubject"];
	 	//连接数据库
	 	include("conn.php");
	 	//查询数据库
	 	$sql = "SELECT name,class,mobile from student where sno=$Sno";
		$stmt = mysqli_prepare($conn,$sql);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt,$name,$class,$mobile);	
		// 查找数据库中的信息
		if (mysqli_stmt_fetch($stmt)) {
			$row=mysqli_fetch_array($result);
		}
		else page_redirect(1,"../html/socialpractice.html","用户未注册！");
	}

	 	// 连接数据库
	 	include("conn.php");
	 	// 插入名字ok  插入班级 ok
	 	$sql="INSERT INTO Application_form(AFName,AFPclass,AFSno,AFmobile,hoppy,strength,InterestClass) VALUES (?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($conn,$sql);
		mysqli_stmt_bind_param($stmt,"sssssss",$name,$class,$Sno,$mobile,$Hoppy,$Strength,$Subject);
		mysqli_stmt_execute($stmt);
		echo $Hoppy." ".$Strength." ".$Subject." ".$Sno;
		if(mysqli_affected_rows($conn)>0)
		{

			page_redirect(1,"../html/socialpractice.html","报名成功！");

		}
		else
		{
			page_redirect(1,"../html/socialpractice.html","您已报名！请勿重复报名！");
		}

	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);


?>
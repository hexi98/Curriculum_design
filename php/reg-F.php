<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	// 引入重定向函数
	include("functions.php");
	// 获取数据
	$Type=$_REQUEST["FBtype"];
	$Content=$_REQUEST["FBcontent"];
// 连接数据库
	include("conn.php");
// 插入数据库
	$sql="INSERT INTO FeedBack(FBtype,FBcontent) VALUES (?,?)";
	$stmt = mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"ss",$Type,$Content);
	mysqli_stmt_execute($stmt);
	if(mysqli_affected_rows($conn)>0)
	{
		page_redirect(1,"../html/curriculum_design.php","谢谢你的反馈！我们将及时处理！");//跳转到首页上
		// echo "插入成功";
	}
	else echo "插入失败！！";
	mysqli_stmt_close($stmt);
	mysqli_close($conn);


?>
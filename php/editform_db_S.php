 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网易邮箱注册</title>
	
	<link rel="stylesheet" type="text/css" href="../css/a.css">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="shortcut icon"  href="images/favicon.ico"> -->
</head>
<body>
 <?php  	
	// 输出utf-8
 	// header("Content-Type:text/html;charset=utf-8");
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	// 引入重定向函数
	include("functions.php");
	// 获取参数
	$AFId=$_GET["AFId"];
      $Sno=$_REQUEST["AppSno"];
	 	$Hoppy=$_REQUEST["AppHoppy"];
	 	$Strength=$_REQUEST["AppStrength"];
	 	$Subject=$_REQUEST["AppSubject"];
	
     echo $AFId,$Sno,$Hoppy,$Strength,$Subject;

	// 引入数据库
	include("conn.php");

	// 更新数据库
	$sql="update application_form set AFSno=?,hoppy=?,strength=?,InterestClass=? where AFId=?";
	$stmt=mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"ssssi",$Sno,$Hoppy,$Strength,$Subject,$AFId);
	mysqli_stmt_execute($stmt);

	// 更新操作后重定向页面
	if(mysqli_affected_rows($conn)>0){
			page_redirect(1,"index-S.php","更新成功！");
		}
		else{
			page_redirect(1,"index-S.php","更新失败！");
		}
	// 关闭连接
    mysqli_stmt_close($stmt);
    mysql_close($conn);


?>
</body></html>
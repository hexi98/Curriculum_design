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
	$news_id=$_GET["news_id"];
      $name=$_REQUEST["essay_name"];
	$author=$_REQUEST["essay_author"];
	$time=$_REQUEST["essay_time"];
	// $time = date("Y-m-d");
	$content=$_REQUEST["essay_content"];
	
     echo $news_id, $name,$author,$time,$content;

	// 引入数据库
	include("conn.php");

	// 更新数据库
	$sql="update news set news_name=?, news_author=?,news_time='".$time."',news_content=? where news_id=?";
	$stmt=mysqli_prepare($conn,$sql);
	// mysqli_stmt_bind_param($stmt,"sssi",$name,$author,$content,$news_id);
	mysqli_stmt_bind_param($stmt,"sssi", $name,$author,$content,$news_id);
	if(!$stmt)
	{
		printf("ERROR:%s",mysqli_error($conn));
	}
	mysqli_stmt_execute($stmt);

	// 更新操作后重定向页面
	if(mysqli_affected_rows($conn)>0){
			 page_redirect(1,"index-T.php","更新成功！");
		// echo "succ";
		}
		else{
			page_redirect(1,"index-T.php","更新失败！");
			// echo "wrong!";
		}
	// 关闭连接
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


?>
</body></html>
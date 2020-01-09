
<?php
	// 引入重定向函数
	include("functions.php");
// 注册学生的信息表
	// $id = $_GET["sid"];
	$name=$_REQUEST["essay_name"];
	$author=$_REQUEST["essay_author"];
	$time=$_REQUEST["essay_time"];
	$content=$_REQUEST["essay_content"];

// 链接数据库
	include("conn.php");
// news_time='".$time."'
// 将推文信息插入数据库
	$sql="INSERT INTO news(news_name,news_author,news_time,news_content) 
		  VALUES(?,?,'".$time."',?)";
   echo $time;
// 创建stmt对象 经测试，没有问题
	$stmt=mysqli_prepare($conn,$sql);
// 绑定数据,经测试，没有问题
	mysqli_stmt_bind_param($stmt,"sss",$name,$author,$content);
// 执行
	// echo md5($password);
	mysqli_stmt_execute($stmt);
	// 获取的输入信息，没问题！
	if(mysqli_affected_rows($conn)>0)
	{
	 	page_redirect(1,"../html/tweets.html","发布成功");
	}
    else
    {
    	// echo mysqli_error();
    	echo "发布失败";
    }

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
?>

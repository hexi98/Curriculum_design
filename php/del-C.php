 <?php  	
	// 输出utf-8
 	header("Content-Type:text/html;charset=utf-8");
 	// 错误输出
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	// 引入重定向函数
	include("functions.php");
	
	// 获取id参数
	$comment_id=$_REQUEST["comment_id"];

	// 连接数据库
     include("conn.php");

	// 删除操作
     //1.编写sql语句
	$sql="delete from news_comment where comment_id=?;";
	//2.创建stmt对象
	$stmt=mysqli_prepare($conn,$sql);
	//3.绑定参数
	mysqli_stmt_bind_param($stmt,"i",$comment_id);
	//4.stmt对象执行
	mysqli_stmt_execute($stmt);
	// 页面重定向（index.php)
    page_redirect(1,"tweets_comment.php","删除成功！");
?>
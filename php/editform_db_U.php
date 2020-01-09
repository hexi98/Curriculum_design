 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网易邮箱注册</title>
	
	<link rel="stylesheet" type="text/css" href="a.css">
	
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
	$sid=$_GET["sid"];
	$name=$_REQUEST["name"];
	$sno=$_REQUEST["sno"];
	$class=$_REQUEST["class"];
	$password=$_REQUEST["mainPassword"];
	$cfmPwd=$_REQUEST["cfmPwd"];
	$mobile=$_REQUEST["mobile"];
	

	// 校验
	  $name="$name";
	
	// 密码：6~16个字符，区分大小写
	$pattern="/^[a-zA-Z0-9]{6,16}$/";
	 if(!preg_match($pattern,$password))
	 	page_redirect(2,null,"密码不符合要求");
	
	
	// 校验手机
	$pattern="/^\d{11}$/";
	$real_mobile=substr($mobile,-11);/*最后11位*/
    if(!preg_match($pattern,$real_mobile))
		page_redirect(2,null,"手机不符合要求");
	
	
	// 校验密码是否一致
	if($password!=$cfmPwd){
		page_redirect(2,null,"密码不一致");
	}
     
     echo $sid,$name,$class,$sno,$password,$mobile;

	// 引入数据库
	include("conn.php");

	// 更新数据库
	$sql="update student set name=?,class=?,sno=?,password=?,mobile=? where sid=?";
	$stmt=mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"sssssi",$name,$class,$sno,$password,$mobile,$sid);
	mysqli_stmt_execute($stmt);

	// 更新操作后重定向页面
	if(mysqli_affected_rows($conn)>0){
			page_redirect(1,"index-U.php","更新成功！");
		}
		else{
			page_redirect(1,"index-U.php","更新失败！");
		}
	// 关闭连接
    mysqli_stmt_close($stmt);
    mysql_close($conn);


?>
</body></html>
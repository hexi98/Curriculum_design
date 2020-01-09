<?php

$user = 'root';
$pwd = 'root';
//数据库
$db = 'curriculum_design';
// mysql的服务器
$host = 'localhost';
$port = 8889;

$conn = mysqli_init();
$success = mysqli_real_connect(
	// 数据库连接对象
   $conn, 
   // 数据库服务器
   $host, 
   $user, 
   $pwd, 
   $db,
   $port
);

  // print_r($conn);

if($success!=1){
		die("数据库连接失败");
	}
// 经测试，已链接成功
// else echo "连接成功";


?>
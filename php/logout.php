<!-- 退出用户登录 -->
<?php 
// 销毁所有session
session_destroy();
// 引入重定向函数
include("functions.php");

// 重定向页面到注册页
	page_redirect(1,"curriculum_design.php","已退出登录！");

 ?>
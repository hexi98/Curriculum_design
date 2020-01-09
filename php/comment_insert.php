
<?php
/*
*****************************

author：hexi
time: 2018/06
function:将评论插入数据库中

***************************** 
*/
	// error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("functions.php");
$user = $_SESSION["user"];
$txt = $_REQUEST["txt"];
$sno=$_SESSION["Sno"];
$id =$_REQUEST["newsId"];
// 我的天哦！！！我终于成功了！！！ 啊啊啊啊哈哈哈哈
// echo $_REQUEST["newsId"];


// 链接数据库
include("conn.php");
// 获取时间
$time = date("Y-m-d H:m:s");
// echo $time; 
// $txt，$time注意需要转换类型
$sql="INSERT into news_comment(news_id,comment_user_id,comment_content,comment_time) values($id,$sno,'".$txt."','".$time."') ";

$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_execute($stmt);
if(mysqli_affected_rows($conn)>0)
{
	 $data = array("code" => 1, "message"=>"success","user" => $_SESSION["user"],"txt" => $txt,"time"=>$time);  
	 page_redirect(1,"Tweet.php","发表成功！");
}
else
{
	printf("ERROR:%s", mysqli_error($conn));
}
?>
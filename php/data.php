<!--
 *****************************

author：hexi
time: 2018/05
function:获取数据库中的评论

*****************************  
--> 
<?php  
include("conn.php");//连接数据库  
$sql = "SELECT comment_id,news_id,comment_user_id,comment_content,comment_time from news_comment";
$stmt = mysqli_prepare($conn,$sql);

$result=mysqli_query($conn,$sql);

mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt,$id,$newsid,$user,$comment,$addtime);

// $q=mysqli_query($link,"select * from news_comment");//获取数据库的数据  
// $row=mysqli_stmt_fetch($stmt);
while(mysqli_stmt_fetch($stmt)){
	$ro=mysqli_fetch_array($result);
	$comments[] = array("id"=>$id,"news_id"=>$newsid,"user"=>$user,"comment"=>$comment,"addtime"=>$addtime);  
}  

// while(){  
        
echo json_encode($comments,JSON_UNESCAPED_UNICODE);//以json格式编码 
?> 
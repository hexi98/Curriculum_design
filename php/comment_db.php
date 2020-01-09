<?php
/*
*****************************

author：hexi
time: 2018/06
function:从数据库中获取 用户评论的内容 也需要新闻的id

***************************** 
*/
// $newsId=$_REQUEST["id"];
// echo $newsId;
	include("conn.php");
	$sql = "SELECT news_comment.news_id,comment_id,comment_user_id,comment_content,comment_time,name from news_comment join news join student  where news_comment.news_id = news.news_id and student.sno = comment_user_id";
            $stmt = mysqli_prepare($conn,$sql);
            $result=mysqli_query($conn,$sql);

            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt,$newsId,$id,$userId,$comment,$addtime,$name);
            while(mysqli_stmt_fetch($stmt)){
                $arrMenu1[] = array('newsId'=>$newsId,'commentId' => $id,'userId'=>$userId,'content'=>$comment,'commentTime'=>$addtime,'name'=>$name);
            } 
            echo json_encode($arrMenu1,JSON_UNESCAPED_UNICODE); 
?>
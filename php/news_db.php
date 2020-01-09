

<?php
/*
*****************************

author：hexi
time: 2018/06
function:获取新闻数据库中的内容

***************************** 
*/
	include("conn.php");
	$sql = "SELECT news_id,news_name,news_time,news_author,news_content FROM news";
	$stmt = mysqli_prepare($conn,$sql);
	// 如果绑定失败
	if(!$stmt)
	{
		printf("ERROR:%s", mysqli_error($conn));
	}
	$result=mysqli_query($conn,$sql);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt,$id,$name,$time,$author,$content);
    while(mysqli_stmt_fetch($stmt)){

    	$arrMenu[] = array('newsId' => $id,'name'=>$name,'time'=>$time,'author'=>$author,'content'=>$content );

    }  
	echo json_encode($arrMenu,JSON_UNESCAPED_UNICODE);
    
?>
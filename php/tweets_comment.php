<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻评论</title>
	<link rel="stylesheet" type="text/css" href="../css/a.css">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="shortcut icon"  href="images/favicon.ico"> -->
</head>
<body>
<div class="right-part">
     <?php 

             include("conn.php");
			$sql="select count(comment_id) as count_comment from news_comment ;";
			$stmt=mysqli_prepare($conn,$sql);
             mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $count_comment);
			while(mysqli_stmt_fetch($stmt)){
				echo " <h1>&nbsp&nbsp<img src='../image/picture1.png' class='picture1'>新闻评论管理(评论汇总:$count_comment)</h1>";
			}
       ?>
	<section class="content" id="mainSection">
    
		<table class="mailRecords">
			<tr style='background-color:lightgrey'>
				<th>评论者学号</th>
				<th>评论时间</th>
				<th>评论内容</th>
			    <th>操作</th>
			</tr>
		<?php 
			// 引入数据库连接
			include("conn.php");
			
			// sql语句编写，查询邮件表，读取id，user_name，mobile
			$sql="select comment_id,comment_user_id,comment_time,comment_content from news_comment ";
           
			//创建stmt对象
			$stmt=mysqli_prepare($conn,$sql);
			
			// 执行查询
             mysqli_stmt_execute($stmt);

			// 绑定记录集对应的字段名
			mysqli_stmt_bind_result($stmt,$comment_id,$comment_user_id,$comment_time,$comment_content );
			
			// 循环读写每行记录，给出循环条件
			$i=0;
			while(mysqli_stmt_fetch($stmt)){
				if($i%2!=0){
                 echo "<tr style='background-color: #f5f5f5'>";
				}
				else{
					echo "<tr>";
				}
				echo "<td>$comment_user_id</td>";
				echo "<td>$comment_time</td>";
				echo "<td>$comment_content</td>";
				echo "<td>";
				echo "<a href='del-C.php?comment_id=$comment_id'>删除</a>";
				echo "</td>";
				echo "</tr>";
				$i++;
			}
			
		?>
		</table>
		
	</section>
</div>
</body>
</html>
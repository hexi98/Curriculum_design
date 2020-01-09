<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>舆情反馈</title>
	<link rel="stylesheet" type="text/css" href="../css/a.css">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="shortcut icon"  href="images/favicon.ico"> -->
</head>


<body>
<div class="right-part">
     <?php 

             include("conn.php");
			$sql="select count(FBId) as count_FBId from feedback ;";
			$stmt=mysqli_prepare($conn,$sql);
             mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $count_FBId);
			while(mysqli_stmt_fetch($stmt)){
				echo " <h3>&nbsp&nbsp<img src='../image/picture1.png' class='picture1'>舆情管理(舆情汇总:$count_FBId)</h3>";
			}
       ?>
	<section class="content" id="mainSection">
    
		<table class="mailRecords">
			<tr style='background-color:lightgrey'>
				<th>舆情类型</th>
				<th>舆情内容</th>
			    <th>操作</th>
			</tr>
		<?php 
			// 引入数据库连接
			include("conn.php");
			
			// sql语句编写，查询邮件表，读取id，user_name，mobile
			$sql="select FBId,FBtype,FBcontent from feedback ";
           
			//创建stmt对象
			$stmt=mysqli_prepare($conn,$sql);
			
			// 执行查询
             mysqli_stmt_execute($stmt);

			// 绑定记录集对应的字段名
			mysqli_stmt_bind_result($stmt,$FBId,$FBtype,$FBcontent);
			
			// 循环读写每行记录，给出循环条件
			$i=0;
			while(mysqli_stmt_fetch($stmt)){
				if($i%2!=0){
                 echo "<tr style='background-color: #f5f5f5'>";
				}
				else{
					echo "<tr>";
				}
				echo "<td>$FBtype</td>";
				echo "<td>$FBcontent</td>";
				echo "<td>";
				echo "<a href='del-F.php?FBId=$FBId'>删除</a>";
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
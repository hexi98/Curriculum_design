<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>114党员服务中心</title>
	<link rel="stylesheet" type="text/css" href="../css/a.css">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
</head>


<body>
	

    <div class="right-part">
       <?php 

             include("conn.php");
			$sql="select count(AFSno) as count_AFSno from application_form ;";
			$stmt=mysqli_prepare($conn,$sql);
             mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $count_AFSno);
			while(mysqli_stmt_fetch($stmt)){
				echo " <h3>&nbsp&nbsp<img src='image/picture1.png' class='picture1'>暑期社会实践信息管理(社会实践总人数:$count_AFSno)</h3>";
			}
       ?>
	<section class="content" id="mainSection">
		<table class="mailRecords">
			<tr style='background-color:lightgrey'>
				<th>姓名</th>
				<th>班级</th>
				<th>学号</th>
				<th>手机号</th>
				<th>爱好</th>
				<th>特长</th>
			    <th>感兴趣的科目</th>
			    <th>操作</th>
			</tr>
		<?php 
			// 引入数据库连接
			include("conn.php");
			
			// sql语句编写，查询邮件表，读取id，user_name，mobile
			$sql="select AFId,AFName,AFPclass,AFSno,AFmobile,hoppy,strength,InterestClass from application_form ";
           
			//创建stmt对象
			$stmt=mysqli_prepare($conn,$sql);
			
			// 执行查询
             mysqli_stmt_execute($stmt);

			// 绑定记录集对应的字段名
			mysqli_stmt_bind_result($stmt,$AFId,$name,$class,$Sno,$mobile,$Hoppy,$Strength,$Subject);
			
			// 循环读写每行记录，给出循环条件
			$i=0;
			while(mysqli_stmt_fetch($stmt)){
				if($i%2!=0){
                 echo "<tr style='background-color: #f5f5f5'>";
				}
				else{
					echo "<tr>";
				}
				echo "<td>$name</td>";
				echo "<td>$class</td>";
				echo "<td>$Sno</td>";
				echo "<td>$mobile</td>";
				echo "<td>$Hoppy</td>";
				echo "<td>$Strength</td>";
				echo "<td>$Subject</td>";
				echo "<td>";
				echo "<a href='edit-S.php?AFId=$AFId'>编辑</a>&nbsp;&nbsp;";
				echo "<a href='del-S.php?AFId=$AFId'>删除</a>";
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
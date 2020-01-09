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
			$sql="select count(ano) as count_ano from administrator ;";
			$stmt=mysqli_prepare($conn,$sql);
             mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $count_ano);
			while(mysqli_stmt_fetch($stmt)){
				echo " <h3>&nbsp&nbsp<img src='../image/picture1.png' class='picture1'>管理员信息管理(管理员总人数:$count_ano)</h3>";
			}
       ?>
	<section class="content" id="mainSection">
		<table class="mailRecords">
			<tr style='background-color:lightgrey'>
				<th>管理员姓名</th>
				<th>班级</th>
				<th>学号</th>
				<th>密码</th>
				<th>手机号</th>
				<th>操作</th>
			</tr>
		<?php 
			// 引入数据库连接
			include("conn.php");
			
			// sql语句编写，查询邮件表，读取id，user_name，mobile
			$sql="select aid,name,class,ano,password,mobile from administrator ;";

			//创建stmt对象
			$stmt=mysqli_prepare($conn,$sql);
			
			// 执行查询
             mysqli_stmt_execute($stmt);

			// 绑定记录集对应的字段名
			mysqli_stmt_bind_result($stmt, $aid, $name, $class,$ano, $pwd, $mobile);
			
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
				echo "<td>$ano</td>";
				echo "<td>$pwd</td>";
				echo "<td>$mobile</td>";
				echo "<td>";
				echo "<a href='edit-A.php?aid=$aid'>编辑</a>&nbsp;&nbsp;";
				echo "<a href='del-A.php?aid=$aid'>删除</a>";
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
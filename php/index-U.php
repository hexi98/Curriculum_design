<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>114党员服务中心</title>
	<link rel="stylesheet" type="text/css" href="../css/a.css">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="shortcut icon"  href="images/favicon.ico"> -->
</head>

<body>
    <div class="right-part" >
     
     <!-- <img src="image/picture1.png" class="picture1"> -->
      <?php 

             include("conn.php");
			$sql="select count(sno) as count_sno from student ;";
			$stmt=mysqli_prepare($conn,$sql);
             mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $count_sno);
			while(mysqli_stmt_fetch($stmt)){
				echo " <h3>&nbsp&nbsp<img src='../image/picture1.png' class='picture1'> 账户情况管理(用户总人数:$count_sno)</h3>";
			}
       ?>
	<section class="content" id="mainSection">
    
		<table class="mailRecords" id="records">
			<tr style='background-color:lightgrey'>
				<th>学生姓名</th>
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
			$sql="select sid,name,class,sno,password,mobile from student ;";

			//创建stmt对象
			$stmt=mysqli_prepare($conn,$sql);
			
			// 执行查询
             mysqli_stmt_execute($stmt);

			// 绑定记录集对应的字段名
			mysqli_stmt_bind_result($stmt, $sid, $name, $class,$sno, $pwd, $mobile);
			
			// 循环读写每行记录，给出循环条件
			//产生阴阳行
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
				echo "<td>$sno</td>";
				echo "<td>$pwd</td>";
				echo "<td>$mobile</td>";
				echo "<td>";
				echo "<a href='edit-U.php?sid=$sid'>编辑</a><br>";
				echo "<a href='del-U.php?sid=$sid'>删除</a>";
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
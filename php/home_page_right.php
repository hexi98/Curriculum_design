<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员首页</title>
	<link rel="stylesheet" type="text/css" href="../css/a.css">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="shortcut icon"  href="images/favicon.ico"> -->
</head>

<body>
    <div class="right-partz"  >
     
     <!-- <img src="image/picture1.png" class="picture1"> -->
     <div class="right-part1" >
      <?php 

             include("conn.php");
			$sql="select count(sno) as count_sno from student ;";
			$stmt=mysqli_prepare($conn,$sql);
             mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $count_sno);
			while(mysqli_stmt_fetch($stmt)){
				echo " <h2> 用户总人数:$count_sno</h2>";
			}
			
       ?>
      </div>
      <div class="right-part2" >
        <?php 
             include("conn.php");
			$sql="select count(ano) as count_ano from administrator ;";
			$stmt=mysqli_prepare($conn,$sql);
             mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $count_ano);
			while(mysqli_stmt_fetch($stmt)){
				echo "<h2> 管理员总人数:$count_ano</h2>";
			} 
       ?>
       
     </div>
     <div class="right-part3" >
       <?php 
             include("conn.php");
			$sql="select count(AFId) as count_AFId from application_form ;";
			$stmt=mysqli_prepare($conn,$sql);
             mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $count_AFId);
			while(mysqli_stmt_fetch($stmt)){
				echo "<h2> 暑期社会实践报名总人数:$count_AFId</h2>";
			} 
       ?>
    </div>
    <div class="right-part4" >
       <?php 
             include("conn.php");
			$sql="select count(FBId) as count_FBId from feedback ;";
			$stmt=mysqli_prepare($conn,$sql);
             mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $count_FBId);
			while(mysqli_stmt_fetch($stmt)){
				echo "<h2> 舆情总汇:$count_FBId</h2>";
			} 
       ?>
    </div>
  </div>
</body>
</html>
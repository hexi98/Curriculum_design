<?php 
   // session_start();
   // $_SESSION["roleId"]=1;
   // $role=$_SESSION["roleId"];
   //连接数据库
   include("conn.php");
  //sql语句
   
   $sql="select class,count(sno) as count_sno from  student  where class like '计算机%' group by class;";

	$stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt,$class,$count_sno);
    
    $arr=array();
    $i=0;
    while(mysqli_stmt_fetch($stmt)){
    $arr[$i]["name"]=$class;
    $arr[$i]["value"]=$count_sno;
     $i++;
 }
 
   mysqli_stmt_close($stmt);
	 mysqli_close($conn); 
	 echo json_encode($arr,JSON_UNESCAPED_UNICODE);
 ?>
  

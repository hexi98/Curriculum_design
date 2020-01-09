<?php
// *************************
// author:hexi
// date：2018／05
// function:更新个人信息
// *************************
	include("functions.php");
	// 获取数据
	// $User=$_SESSION["user"];
	$id=$_GET["id"];
	$name=$_REQUEST["UserName"];
	$sno=$_REQUEST["UserSno"];
	$OgPwd=$_REQUEST["OriginalPassWord"];
	$NewPwd=mod5($_REQUEST["NewPassword"]);
	$CfmPwd=$_REQUEST["cfmPassword"];
	$Mobile=$_REQUEST["mobilePhone"];
	// 连接数据库
	include("conn.php");

	// echo $id;
	$sql="UPDATE student set password=?,mobile=? where sid=?";
	$stmt=mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"ssi",$NewPwd,$Mobile,$id);
	mysqli_stmt_execute($stmt);
		if(mysqli_affected_rows($conn)>0){
			// page_redirect(1,"../curriculum_design.php","更新成功！");
			echo "更新成功！";
		}
		else{
			// page_redirect(1,"../curriculum_design.php","更新失败！");
			echo "更新失败！";
		}
	// 关闭连接
    mysqli_stmt_close($stmt);
    mysql_close($conn);

?>
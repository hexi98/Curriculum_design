<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	include("functions.php");
	$id=$_SESSION["Sid"];

	$sno =$_SESSION["Sno"];
	$OgPwd=md5($_REQUEST["OriginalPassWord"]);
	$NewPwd=md5($_REQUEST["NewPassword"]);
	$CfmPwd=md5($_REQUEST["cfmPassword"]);
	$Mobile=$_REQUEST["mobilePhone"];

	// 进行校验

	// 密码：
	$pattern="/^[a-zA-Z0-9]{6,16}$/";
	 if(!preg_match($pattern,$NewPwd))
	 {
	 	// alert("密码不符合要求");
	 	// page_redirect(2,null,"密码不符合要求");
	 	echo "passwordWrong!";

	 }

	 // 手机
	$pattern="/^\d{11}$/";
	$real_mobile=substr($mobile,-11);/*最后11位*/
    if(!preg_match($pattern,$Mobile))
		page_redirect(2,null,"手机不符合要求");
	 	alert("密码不符合要求");


	// 校验密码是否一致
	if($NewPwd!=$CfmPwd){
		page_redirect(2,null,"密码不一致");
	 	// alert("密码不符合要求");

	}

	// 连接数据库
	include("conn.php");
	// echo $id;
	$sql="UPDATE student set password=?,mobile=? where sid=$id";
	$stmt=mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"ss",$NewPwd,$Mobile);
	// echo $NewPwd." ".$id;
	mysqli_stmt_execute($stmt);
	if(mysqli_affected_rows($conn)!=0){
			page_redirect(1,"curriculum_design.php","更新成功！");
		// echo "更新成功！";
		}
		else{
			page_redirect(1,"curriculum_design.php","更新成功！");
			// echo "更新失败!";
			// printf("ERROR:%s",)
			// printf("ERROR:%s", mysqli_error($conn));

		}
	// 关闭连接
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

?>
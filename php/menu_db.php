<?php 

   include("conn.php");
   $sql="select modules.id , modules.name, url, parent_id , level from role_visits join modules join roles where role_visits.module_id=modules.id and role_visits.role_id=roles.id and roles.id=1";

   $stmt=mysqli_prepare($conn,$sql);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt,$id,$name,$url,$parent_id,$level);
	$arrMenu=[];
	$i=0;
	while(mysqli_stmt_fetch($stmt)){
		$arrMenu[$i]["id"]=$id;
		$arrMenu[$i]["name"]=$name;
		$arrMenu[$i]["url"]=$url;
		$arrMenu[$i]["parent_id"]=$parent_id;
		$arrMenu[$i]["level"]=$level;
		$i++;
		
	}
 echo json_encode($arrMenu,JSON_UNESCAPED_UNICODE);
	
 ?>
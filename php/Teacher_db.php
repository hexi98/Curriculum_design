<?php
$name=$_REQUEST["TeachName"];
// $name="张金玲";
// echo $name; 
// 经测试，正确
include("conn.php");
$sql = "SELECT TeacherPosition,TeacherPhone,TeacherMail,Office from Teacher where TeacherName='".$name."'";
$stmt=mysqli_prepare($conn,$sql);
if(!$stmt)
{
	printf("ERROR:%s", mysqli_error($conn));
}
$result=mysqli_query($conn,$sql);

if(!$result)
{
	echo "wrong!";
}

mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt,$position,$phone,$mail,$office);
while (mysqli_stmt_fetch($stmt)){

	$row=mysqli_fetch_array($result);
	$arr[]=array('name'=>$name,'position'=>$position,'phone'=>$phone,'mail'=>$mail,'office'=>$office);

}
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
//经测试，正确


?>